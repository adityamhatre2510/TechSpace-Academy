
		<?php

		// servername => localhost now rds endpoint
		// username => root now your db username 
		// password => empty now your oen password
		// database name => Your database name
		$conn = mysqli_connect("localhost", "root", "", "techspace_academy");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$cName = $_REQUEST['cName'];
		$cDesc = $_REQUEST['cDesc'];
		$cOverview = $_REQUEST['cOverview'];
		$instructors = $_REQUEST['cInstructor'];
		$cDept = $_REQUEST['cDept'];
		$skillLevel = $_REQUEST['skillLevel'];
        $cDuration = intval($_REQUEST['cDuration']);
        $cFees = intval($_REQUEST['cFees']);
		
		// Performing insert query execution
		// here our table name is course
		$stmt = $conn->prepare("INSERT INTO course (course_name, description, course_overview, department, duration,
		 fees, skill_level) VALUES (?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("ssssiis", $cName, $cDesc, $cOverview, $cDept, $cDuration, $cFees, $skillLevel);
		// Execute the prepared statement
if ($stmt->execute()) {
    echo "<h3>Data stored in the database successfully.</h3>";
    echo nl2br("\n$cName\n$cDesc\n$cOverview\n$cInstructor\n$cDept\n$skillLevel\n$cDuration\n$cFees");
} else {
    echo "ERROR: Could not execute query: " . $stmt->error;
}

// Close statement and connection
$stmt->close();
mysqli_close($conn);
?>


