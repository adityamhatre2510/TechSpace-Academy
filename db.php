<?php

$con = mysqli_connect("group2-techspaceacademy-rds.czptxhzjxjrt.us-east-1.rds.amazonaws.com", "admin", "GROUP2TECHSPACEACADEMY", "techspace_academy");
if($con === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
else{
    echo 'successfull DB connection';
}
?>
