<?php

$con = mysqli_connect("localhost", "root", "", "techspace_academy");
if($con === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}
else{
    echo 'successfull DB connection';
}
?>