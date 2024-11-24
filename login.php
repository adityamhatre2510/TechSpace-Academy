<?php
		error_reporting(E_ALL);
		ini_set("display_errors", 1);
	
		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect('localhost', 'root', '', 'techspace_academy');
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Get input data from the form
            $dzEmail = $_POST['dzEmail'];
            $dzPassword = $_POST['dzPassword'];
		
             // Basic validation
        if (empty($dzEmail) || empty($dzPassword)) {
            echo "Email and password are required.";
            exit;
        }

     // Query to find user by email
     $stmt = $conn->prepare("SELECT user_id, user_pwd, user_role FROM users WHERE user_email = ? LIMIT 1");
     $stmt->bind_param('s', $dzEmail);
     $stmt->execute();
     $stmt->store_result();

    if ($stmt->num_rows == 1) {
        // User found, now check password
        $stmt->bind_result($userId, $storedPassword, $userRole);
        $stmt->fetch();

        // Verify the password
        if ($dzPassword === $storedPassword) {
            // Password is correct, start the session
            session_start();
            $_SESSION['user_id'] = $userId;
            $_SESSION['user_email'] = $dzEmail;
            // Redirect to dashboard or home page
            header("Location: index.php"); 
            exit;
        } else {
            // Incorrect password
            echo "Invalid password.";
        }
    } else {
        // No user found
        echo "No user found with that email.";
    }

    // Close statement and connection
    $stmt->close();
    mysqli_close($conn);
} else {
    echo "Please submit the login form.";
}
?>