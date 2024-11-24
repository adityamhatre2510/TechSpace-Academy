<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
	
}
// Get the user's name from the session
$user_email = $_SESSION['user_email'];
 require_once('db.php');
 echo "course id: " . $_REQUEST['courseId'];

// Taking all 5 values from the form data(input)
$student_id = $_SESSION['user_id'];
$course_id = $_REQUEST['courseId'];
$payment_status = "pending";
$enrollment_status = "pending";
// Normalize and validate date inputs
$start_date = DateTime::createFromFormat('Y-m-d', $_REQUEST['start_date'])->format('Y-m-d');
$end_date = DateTime::createFromFormat('Y-m-d', $_REQUEST['end_date'])->format('Y-m-d');


// Performing insert query execution
// here our table name is student_enrollment
$stmt = $con->prepare("INSERT INTO student_enrollment (student_id, course_id, payment_status, enrollment_status, start_date,
 end_date) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("iissss", $student_id, $course_id, $payment_status, $enrollment_status, $start_date, $end_date);
// Execute the prepared statement
if ($stmt->execute()) {
    echo "<script>
            alert('Congrats, Course has been enrolled successfully. Please wait till it is approved by an Admin.');
            // Redirect to courses.php with the courseId as a query parameter
            window.location.href = 'courses.php';
          </script>";
    exit;
} else {
echo "ERROR: Could not execute query: " . $stmt->error;
header("Location: courses.php");
exit;

}

// Close statement and connection
$stmt->close();
mysqli_close($con);

?>

