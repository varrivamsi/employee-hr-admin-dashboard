<?php

$conn = mysqli_connect(

    "localhost",
    "root",
    "",
    "employee_dashboard"

);

if(!$conn){

    die("Connection Failed");

}

?>