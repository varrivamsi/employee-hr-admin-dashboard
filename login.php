<?php

session_start();

include 'db.php';


/* ================= CAPTCHA ================= */

$secretKey =
"6LcfMfQsAAAAAMMbVuqP3ZHtxl36hvx0zvXEQ46b";

$responseKey =
$_POST['g-recaptcha-response'];

$userIP =
$_SERVER['REMOTE_ADDR'];

$url =
"https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$userIP";

$response =
file_get_contents($url);

$response =
json_decode($response);


/* CAPTCHA FAILED */

if(!$response->success){

    echo "<script>

    alert('Please verify CAPTCHA');

    window.location.href='login.html';

    </script>";

    exit();
}


/* ================= LOGIN INPUTS ================= */

$employee_id =
mysqli_real_escape_string(
$conn,
$_POST['employee_id']
);

$password =
mysqli_real_escape_string(
$conn,
$_POST['password']
);


/* ================= CHECK LOGIN ================= */

$sql = "SELECT * FROM login_credentials

WHERE employee_id='$employee_id'
AND password='$password'";

$result =
mysqli_query($conn,$sql);


/* ================= LOGIN SUCCESS ================= */

if(mysqli_num_rows($result) > 0){


    /* CREATE SESSION */

    $_SESSION['employee_id']
    = $employee_id;



    /* ================= CHECK EMPLOYEE ================= */

    $employeeCheck =
    mysqli_query($conn,

    "SELECT * FROM employees

    WHERE employee_id='$employee_id'");


    if(mysqli_num_rows($employeeCheck) > 0){

        header("Location: dashboard.php");

        exit();
    }



    /* ================= CHECK HR ================= */

    $hrCheck =
    mysqli_query($conn,

    "SELECT * FROM hr_data

    WHERE admin_id='$employee_id'");


    if(mysqli_num_rows($hrCheck) > 0){

        header("Location: hr_dashboard.php");

        exit();
    }



    /* ================= CHECK ADMIN ================= */

    $adminCheck =
    mysqli_query($conn,

    "SELECT * FROM admins

    WHERE admin_id='$employee_id'");


    if(mysqli_num_rows($adminCheck) > 0){

        header("Location: admin_dashboard.php");

        exit();
    }



    /* ================= NO MATCH FOUND ================= */

    echo "<script>

    alert('User role not found');

    window.location.href='login.html';

    </script>";

    exit();

}


/* ================= LOGIN FAILED ================= */

else{

    echo "<script>

    alert('Invalid Employee ID or Password');

    window.location.href='login.html';

    </script>";
}

?>