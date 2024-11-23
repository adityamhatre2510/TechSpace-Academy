<?php
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
	
		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect('localhost', 'root', 'root', 'techspace_academy');
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get input data from the form
            $dzEmail = $_POST['dzEmail'];
            $dzNewPwd = $_POST['dzNewPwd'];
            $dzConfirmPwd = $_POST['dzConfirmPwd'];
		
             // Basic validation
        if (empty($dzEmail) || empty($dzNewPwd) || empty($dzConfirmPwd)) {
            echo "All Fields are required.";
        }elseif ($dzNewPwd !== $dzConfirmPwd) {
            echo "Passwords do not match.";
        } else {
            // Check if the email exists in the database
            $sql = "SELECT * FROM users WHERE user_email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $dzEmail);
            $stmt->execute();
            $result = $stmt->get_result();    

        if ($result->num_rows > 0) {
            // Email exists, update the password without hashing
            $update_sql = "UPDATE users SET user_pwd = ? WHERE user_email = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("ss", $dzNewPwd, $dzEmail);

            if ($update_stmt->execute()) {
                echo '<script type="text/javascript">
                        alert("Password updated successfully!");
                        setTimeout(function(){
                            window.location.href = "login.html"; // Redirect to login page
                        }, 1000); // 1 seconds delay
                      </script>';
            } else {
                echo "Error updating password: " . $update_stmt->error;
            }
        } else {
            echo "Email not found in our system.";
        }

    // Close statement and connection
    $update_stmt->close();
    mysqli_close($conn);
    } 
}
?>