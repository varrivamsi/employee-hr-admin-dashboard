<?php

session_start();

include("db.php");

/* CHECK LOGIN */

if(!isset($_SESSION['employee_id'])){

    header("Location: login.html");
    exit();
}

$employee_id = $_SESSION['employee_id'];

/* FETCH HR DETAILS */

$sql = "SELECT * FROM hr_data
WHERE admin_id='$employee_id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>HR PORTAL</title>

<link rel="stylesheet"
href="hr_dashboard.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>


<!-- ================= TOPBAR ================= -->

<header class="topbar">

    <div class="top-left">

        <img src="image.png"
        class="logo">

        <h2>HR PORTAL</h2>

    </div>

    <div class="top-right">

        <p id="sessionTimer">

            Session : 9m : 50s

        </p>

        <i class="fa-regular fa-bell"></i>

        <!-- PROFILE MENU -->

        <div class="profile-menu">

            <img src="profile.png"
            class="profile-pic"
            onclick="toggleMenu()">

            <div class="dropdown-menu"
            id="dropdownMenu">

                <div class="dropdown-header">

                    <?php echo htmlspecialchars($row['full_name']); ?>

                </div>

                <a href="#">

                    Change Password

                </a>

                <a href="logout.php">

                    Logout

                </a>

            </div>

        </div>

    </div>

</header>



<!-- ================= MAIN CONTAINER ================= -->

<div class="main-container">



<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">


<!-- PROFILE -->

<div class="personal-section">

    <img src="profile.png"
    class="profile-img">

    <h3>

        <?php echo htmlspecialchars($row['full_name']); ?>

    </h3>

    <p>

        <?php echo htmlspecialchars($row['designation']); ?>

    </p>

    <span>

        ID :
        <?php echo htmlspecialchars($row['admin_id']); ?>

    </span>

</div>



<!-- ================= MENU ================= -->

<ul class="menu">


<li class="menu-item active"
data-target="dashboard-section">

<i class="fa-solid fa-table-columns"></i>

Dashboard Overview

</li>


<li class="menu-item"
data-target="personal-section">

<i class="fa-regular fa-user"></i>

Personal Details

</li>


<li class="menu-item"
data-target="employee-management-section">

<i class="fa-solid fa-users"></i>

Employee Management

</li>


<li class="menu-item"
data-target="register-section">

<i class="fa-solid fa-user-plus"></i>

Register Employee

</li>


<li class="menu-item"
data-target="attendance-section">

<i class="fa-regular fa-calendar-check"></i>

Attendance Control

</li>


<li class="menu-item"
data-target="login-logs-section">

<i class="fa-solid fa-clock-rotate-left"></i>

Employee Login Logs

</li>


<li class="menu-item"
data-target="leave-section">

<i class="fa-regular fa-note-sticky"></i>

Leave Approvals

</li>


<li class="menu-item"
data-target="shift-transfer-section">

<i class="fa-solid fa-arrow-right-arrow-left"></i>

Shift Transfer

</li>


<li class="menu-item"
data-target="shift-section">

<i class="fa-solid fa-business-time"></i>

Shift Scheduling

</li>


<li class="menu-item"
data-target="payroll-section">

<i class="fa-solid fa-money-check-dollar"></i>

Payroll Overview

</li>


<li class="menu-item"
data-target="expense-section">

<i class="fa-solid fa-wallet"></i>

Expense Review

</li>


<li class="menu-item"
data-target="resource-section">

<i class="fa-solid fa-book"></i>

Resource Booking

</li>


<li class="menu-item"
data-target="meeting-section">

<i class="fa-solid fa-video"></i>

Meeting Generator

</li>


<li class="menu-item"
data-target="interview-section">

<i class="fa-solid fa-user-tie"></i>

Interview Scheduling

</li>


<li class="menu-item"
data-target="complaints-section">

<i class="fa-solid fa-circle-exclamation"></i>

Employee Complaints

</li>


<li class="menu-item"
data-target="notice-section">

<i class="fa-solid fa-bullhorn"></i>

Notices & Announcements

</li>


<li class="menu-item"
data-target="verification-section">

<i class="fa-solid fa-id-card"></i>

Employee Verification

</li>


<li class="menu-item"
data-target="performance-section">

<i class="fa-solid fa-chart-line"></i>

Performance Tracking

</li>


<li class="menu-item"
data-target="training-section">

<i class="fa-solid fa-graduation-cap"></i>

Training Programs

</li>


<li class="menu-item"
data-target="reports-section">

<i class="fa-solid fa-file-lines"></i>

HR Reports

</li>


<li class="menu-item"
data-target="analytics-section">

<i class="fa-solid fa-chart-pie"></i>

Analytics Dashboard

</li>


<li class="menu-item"
data-target="exit-section">

<i class="fa-solid fa-person-walking-arrow-right"></i>

Employee Exit Process

</li>


<li class="menu-item"
data-target="policy-section">

<i class="fa-solid fa-book-open"></i>

Policy Management

</li>


<li class="menu-item"
data-target="documents-section">

<i class="fa-solid fa-folder-open"></i>

Document Verification

</li>


<li class="menu-item"
data-target="notification-section">

<i class="fa-solid fa-bell"></i>

Notifications

</li>


<li class="menu-item"
data-target="personal-section">

<i class="fa-solid fa-user-gear"></i>

Profile Settings

</li>

</ul>


<a href="logout.php"
class="logout-btn">

<i class="fa-solid fa-right-from-bracket"></i>

Logout

</a>

</aside>



<!-- ================= CONTENT ================= -->

<div class="content">



<!-- ================= DASHBOARD ================= -->

<div class="dashboard-section"
id="dashboard-section">

<div class="dashboard-grid">


<div class="card dashboard-home-card"
onclick="openSection('employee-management-section')">

<i class="fa-solid fa-users"></i>

<h3>Employee Management</h3>

<p>Manage employee records</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('register-section')">

<i class="fa-solid fa-user-plus"></i>

<h3>Register Employee</h3>

<p>Create employee accounts</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('attendance-section')">

<i class="fa-regular fa-calendar-check"></i>

<h3>Attendance Control</h3>

<p>Track employee attendance</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('login-logs-section')">

<i class="fa-solid fa-clock-rotate-left"></i>

<h3>Login Logs</h3>

<p>Employee login records</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('leave-section')">

<i class="fa-regular fa-note-sticky"></i>

<h3>Leave Approvals</h3>

<p>Approve employee leave</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('shift-transfer-section')">

<i class="fa-solid fa-arrow-right-arrow-left"></i>

<h3>Shift Transfer</h3>

<p>Transfer employee shifts</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('shift-section')">

<i class="fa-solid fa-business-time"></i>

<h3>Shift Scheduling</h3>

<p>Manage shift timings</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('payroll-section')">

<i class="fa-solid fa-money-check-dollar"></i>

<h3>Payroll Overview</h3>

<p>Salary & payroll reports</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('expense-section')">

<i class="fa-solid fa-wallet"></i>

<h3>Expense Review</h3>

<p>Employee expense approvals</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('resource-section')">

<i class="fa-solid fa-book"></i>

<h3>Resource Booking</h3>

<p>Manage company resources</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('meeting-section')">

<i class="fa-solid fa-video"></i>

<h3>Meeting Generator</h3>

<p>Create meeting links</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('interview-section')">

<i class="fa-solid fa-user-tie"></i>

<h3>Interview Scheduling</h3>

<p>Schedule interviews</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('complaints-section')">

<i class="fa-solid fa-circle-exclamation"></i>

<h3>Employee Complaints</h3>

<p>Handle complaints</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('notice-section')">

<i class="fa-solid fa-bullhorn"></i>

<h3>Notices</h3>

<p>Company announcements</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('verification-section')">

<i class="fa-solid fa-id-card"></i>

<h3>Employee Verification</h3>

<p>Verify employee details</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('performance-section')">

<i class="fa-solid fa-chart-line"></i>

<h3>Performance Tracking</h3>

<p>Track employee performance</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('training-section')">

<i class="fa-solid fa-graduation-cap"></i>

<h3>Training Programs</h3>

<p>Manage training sessions</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('reports-section')">

<i class="fa-solid fa-file-lines"></i>

<h3>HR Reports</h3>

<p>Generate reports</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('analytics-section')">

<i class="fa-solid fa-chart-pie"></i>

<h3>Analytics Dashboard</h3>

<p>View HR analytics</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('exit-section')">

<i class="fa-solid fa-person-walking-arrow-right"></i>

<h3>Exit Process</h3>

<p>Employee resignation process</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('policy-section')">

<i class="fa-solid fa-book-open"></i>

<h3>Policy Management</h3>

<p>Manage company policies</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('documents-section')">

<i class="fa-solid fa-folder-open"></i>

<h3>Document Verification</h3>

<p>Verify employee documents</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('notification-section')">

<i class="fa-solid fa-bell"></i>

<h3>Notifications</h3>

<p>HR alerts & updates</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('personal-section')">

<i class="fa-solid fa-user-gear"></i>

<h3>Profile Settings</h3>

<p>Manage HR profile</p>

</div>

</div>

</div>



<!-- ================= PERSONAL DETAILS ================= -->

<div class="profile-card dashboard-section"
id="personal-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Personal Details</h2>

<div class="profile-grid">

<div class="profile-box">

<label>Employee ID</label>

<p><?php echo $row['admin_id']; ?></p>

</div>

<div class="profile-box">

<label>Name</label>

<p><?php echo $row['full_name']; ?></p>

</div>

<div class="profile-box">

<label>Department</label>

<p><?php echo $row['department']; ?></p>

</div>

<div class="profile-box">

<label>Designation</label>

<p><?php echo $row['designation']; ?></p>

</div>

<div class="profile-box">

<label>Email</label>

<p><?php echo $row['email']; ?></p>

</div>

<div class="profile-box">

<label>Phone</label>

<p><?php echo $row['phone']; ?></p>

</div>

<div class="profile-box">

<label>Gender</label>

<p><?php echo $row['gender']; ?></p>

</div>

<div class="profile-box">

<label>Age</label>

<p><?php echo $row['age']; ?></p>

</div>

<div class="profile-box">

<label>City</label>

<p><?php echo $row['city']; ?></p>

</div>

<div class="profile-box">

<label>State</label>

<p><?php echo $row['state']; ?></p>

</div>

<div class="profile-box">

<label>Qualification</label>

<p><?php echo $row['qualification']; ?></p>

</div>

<div class="profile-box">

<label>Work Shift</label>

<p><?php echo $row['work_shift']; ?></p>

</div>

</div>

</div>



<!-- ================= OTHER SECTIONS ================= -->

<div class="card dashboard-section" id="employee-management-section"><h2>Employee Management</h2></div>

<div class="card dashboard-section" id="register-section"><h2>Register Employee</h2></div>

<div class="card dashboard-section" id="attendance-section"><h2>Attendance Control</h2></div>

<div class="card dashboard-section" id="login-logs-section"><h2>Employee Login Logs</h2></div>

<div class="card dashboard-section" id="leave-section"><h2>Leave Approvals</h2></div>

<div class="card dashboard-section" id="shift-transfer-section"><h2>Shift Transfer</h2></div>

<div class="card dashboard-section" id="shift-section"><h2>Shift Scheduling</h2></div>

<div class="card dashboard-section" id="payroll-section"><h2>Payroll Overview</h2></div>

<div class="card dashboard-section" id="expense-section"><h2>Expense Review</h2></div>

<div class="card dashboard-section" id="resource-section"><h2>Resource Booking</h2></div>

<div class="card dashboard-section" id="meeting-section"><h2>Meeting Generator</h2></div>

<div class="card dashboard-section" id="interview-section"><h2>Interview Scheduling</h2></div>

<div class="card dashboard-section" id="complaints-section"><h2>Employee Complaints</h2></div>

<div class="card dashboard-section" id="notice-section"><h2>Notices</h2></div>

<div class="card dashboard-section" id="verification-section"><h2>Employee Verification</h2></div>

<div class="card dashboard-section" id="performance-section"><h2>Performance Tracking</h2></div>

<div class="card dashboard-section" id="training-section"><h2>Training Programs</h2></div>

<div class="card dashboard-section" id="reports-section"><h2>HR Reports</h2></div>

<div class="card dashboard-section" id="analytics-section"><h2>Analytics Dashboard</h2></div>

<div class="card dashboard-section" id="exit-section"><h2>Employee Exit Process</h2></div>

<div class="card dashboard-section" id="policy-section"><h2>Policy Management</h2></div>

<div class="card dashboard-section" id="documents-section"><h2>Document Verification</h2></div>

<div class="card dashboard-section" id="notification-section"><h2>Notifications</h2></div>

</div>

</div>



<!-- ================= JAVASCRIPT ================= -->

<script>

/* SESSION TIMER */

let totalSeconds = 590;

const timerElement =
document.getElementById("sessionTimer");

function updateTimer(){

    let minutes =
    Math.floor(totalSeconds / 60);

    let seconds =
    totalSeconds % 60;

    seconds =
    seconds < 10 ? "0" + seconds : seconds;

    timerElement.innerHTML =
    "Session : " + minutes + "m : " + seconds + "s";

    if(totalSeconds > 0){

        totalSeconds--;

    }

    else{

        alert("Session Expired");

        window.location.href =
        "logout.php";
    }
}

setInterval(updateTimer,1000);


/* DASHBOARD NAVIGATION */

const menuItems =
document.querySelectorAll(".menu-item");

const sections =
document.querySelectorAll(".dashboard-section");


sections.forEach(section => {

    section.style.display = "none";

});

document.getElementById(
"dashboard-section"
).style.display = "block";


/* SIDEBAR CLICK */

menuItems.forEach(item => {

    item.addEventListener("click", () => {

        const target =
        item.getAttribute("data-target");

        sections.forEach(section => {

            section.style.display = "none";

        });

        document.getElementById(target)
        .style.display = "block";

        menuItems.forEach(el => {

            el.classList.remove("active");

        });

        item.classList.add("active");

    });

});


/* RECTANGLE CARD CLICK */

function openSection(id){

    sections.forEach(section => {

        section.style.display = "none";

    });

    document.getElementById(id)
    .style.display = "block";

    menuItems.forEach(el => {

        el.classList.remove("active");

    });

    const activeMenu = document.querySelector(
    `.menu-item[data-target="${id}"]`
    );

    if(activeMenu){

        activeMenu.classList.add("active");

    }
}


/* BACK TO DASHBOARD */

function goDashboard(){

    sections.forEach(section => {

        section.style.display = "none";

    });

    document.getElementById(
    "dashboard-section"
    ).style.display = "block";

    menuItems.forEach(el => {

        el.classList.remove("active");

    });

    document.querySelector(
    '.menu-item[data-target="dashboard-section"]'
    ).classList.add("active");
}


/* PROFILE DROPDOWN */

function toggleMenu(){

    document
    .getElementById("dropdownMenu")
    .classList
    .toggle("show");
}

</script>

</body>
</html>