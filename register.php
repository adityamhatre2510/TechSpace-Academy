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
    // Ensure the form is submitted via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Get input data from the form
        $dzRole = $_POST['dzRole'];
        $dzName = $_POST['dzName'];
        $dzEmail = $_POST['dzEmail'];
        $dzPassword = $_POST['dzPassword'];

        // Basic validation (you can expand on this as needed)
        if (empty($dzRole) || empty($dzName) || empty($dzEmail) || empty($dzPassword)) {
            echo "All fields are required.";
            exit;
        }

        // Validate email format
        if (!filter_var($dzEmail, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }

        // **Storing plain text password (not secure, for demonstration only)**
        $plainPassword = $dzPassword;  // No hashing, directly storing the plain password

        // Prepared statement to insert user data into the database
        $stmt = $conn->prepare("INSERT INTO users (user_role, user_name, user_email, user_pwd) VALUES (?, ?, ?, ?)");
        
        // Bind the parameters ('ssss' means four strings)
        $stmt->bind_param('ssss', $dzRole, $dzName, $dzEmail, $plainPassword);

        // Execute the query
        if ($stmt->execute()) {
            echo '<script type="text/javascript">
                        alert("Register successfully!");
                        setTimeout(function(){
                            window.location.href = "login.html"; // Redirect to login page
                        }, 1000); // 1 seconds delay
                      </script>';
        } else {
            echo "ERROR: Could not execute query: " . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        mysqli_close($conn);
    } else {
        echo "Please submit the form.";
    }
?>
