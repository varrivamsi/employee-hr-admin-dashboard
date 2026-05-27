<?php

session_start();

include("db.php");


/* LOGIN CHECK */

if(!isset($_SESSION['employee_id'])){

    header("Location: login.html");

    exit();
}

$employee_id =
$_SESSION['employee_id'];


/* FETCH ADMIN DETAILS */

$sql = "SELECT * FROM admins
WHERE admin_id='$employee_id'";

$result =
mysqli_query($conn,$sql);

$row =
mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>ADMIN PORTAL</title>

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

<h2>ADMIN PORTAL</h2>

</div>


<div class="top-right">

<p id="sessionTimer">

Session : 9m : 50s

</p>

<i class="fa-regular fa-bell"></i>


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


<!-- PROFILE SECTION -->

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
data-target="overview-section">

<i class="fa-solid fa-table-columns"></i>

Dashboard Overview

</li>


<li class="menu-item"
data-target="personal-section">

<i class="fa-solid fa-user-shield"></i>

Personal Details

</li>


<li class="menu-item"
data-target="employee-control-section">

<i class="fa-solid fa-users"></i>

Employee Control

</li>


<li class="menu-item"
data-target="hr-control-section">

<i class="fa-solid fa-user-tie"></i>

HR Management

</li>


<li class="menu-item"
data-target="register-section">

<i class="fa-solid fa-user-plus"></i>

Create Accounts

</li>


<li class="menu-item"
data-target="attendance-section">

<i class="fa-regular fa-calendar-check"></i>

Attendance Monitoring

</li>


<li class="menu-item"
data-target="leave-section">

<i class="fa-solid fa-note-sticky"></i>

Leave Authority

</li>


<li class="menu-item"
data-target="salary-section">

<i class="fa-solid fa-money-check-dollar"></i>

Payroll Management

</li>


<li class="menu-item"
data-target="security-section">

<i class="fa-solid fa-shield-halved"></i>

Security Controls

</li>


<li class="menu-item"
data-target="logs-section">

<i class="fa-solid fa-clock-rotate-left"></i>

System Login Logs

</li>


<li class="menu-item"
data-target="meeting-section">

<i class="fa-solid fa-video"></i>

Meeting Control

</li>


<li class="menu-item"
data-target="resource-section">

<i class="fa-solid fa-book"></i>

Resource Allocation

</li>


<li class="menu-item"
data-target="analytics-section">

<i class="fa-solid fa-chart-line"></i>

Company Analytics

</li>


<li class="menu-item"
data-target="reports-section">

<i class="fa-solid fa-file-lines"></i>

Organization Reports

</li>


<li class="menu-item"
data-target="policy-section">

<i class="fa-solid fa-book-open"></i>

Policy & Compliance

</li>


<li class="menu-item"
data-target="settings-section">

<i class="fa-solid fa-gear"></i>

System Settings

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



<!-- ================= OVERVIEW ================= -->

<div class="dashboard-section"
id="overview-section">

<div class="dashboard-grid">


<div class="card dashboard-home-card"
onclick="openSection('employee-control-section')">

<i class="fa-solid fa-users"></i>

<h3>Employee Control</h3>

<p>Manage employees</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('hr-control-section')">

<i class="fa-solid fa-user-tie"></i>

<h3>HR Management</h3>

<p>Manage HR operations</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('register-section')">

<i class="fa-solid fa-user-plus"></i>

<h3>Create Accounts</h3>

<p>Create employee & HR accounts</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('attendance-section')">

<i class="fa-regular fa-calendar-check"></i>

<h3>Attendance Monitoring</h3>

<p>Track attendance</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('leave-section')">

<i class="fa-solid fa-note-sticky"></i>

<h3>Leave Authority</h3>

<p>Approve leaves</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('salary-section')">

<i class="fa-solid fa-money-check-dollar"></i>

<h3>Payroll Management</h3>

<p>Manage salaries</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('security-section')">

<i class="fa-solid fa-shield-halved"></i>

<h3>Security Controls</h3>

<p>Manage system security</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('logs-section')">

<i class="fa-solid fa-clock-rotate-left"></i>

<h3>System Login Logs</h3>

<p>Track login activities</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('meeting-section')">

<i class="fa-solid fa-video"></i>

<h3>Meeting Control</h3>

<p>Create meeting links</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('resource-section')">

<i class="fa-solid fa-book"></i>

<h3>Resource Allocation</h3>

<p>Manage company resources</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('analytics-section')">

<i class="fa-solid fa-chart-line"></i>

<h3>Company Analytics</h3>

<p>View analytics</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('reports-section')">

<i class="fa-solid fa-file-lines"></i>

<h3>Organization Reports</h3>

<p>Generate reports</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('policy-section')">

<i class="fa-solid fa-book-open"></i>

<h3>Policy & Compliance</h3>

<p>Manage policies</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('settings-section')">

<i class="fa-solid fa-gear"></i>

<h3>System Settings</h3>

<p>Configure portal settings</p>

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

<label>Admin ID</label>

<p><?php echo $row['admin_id']; ?></p>

</div>


<div class="profile-box">

<label>Full Name</label>

<p><?php echo $row['full_name']; ?></p>

</div>


<div class="profile-box">

<label>Designation</label>

<p><?php echo $row['designation']; ?></p>

</div>


<div class="profile-box">

<label>Department</label>

<p><?php echo $row['department']; ?></p>

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


<div class="profile-box">

<label>Role Type</label>

<p><?php echo $row['role_type']; ?></p>

</div>


<div class="profile-box">

<label>Access Level</label>

<p><?php echo $row['access_level']; ?></p>

</div>


<div class="profile-box">

<label>Salary</label>

<p>₹ <?php echo $row['salary']; ?></p>

</div>


<div class="profile-box">

<label>Status</label>

<p><?php echo $row['status']; ?></p>

</div>

</div>

</div>



<!-- ================= OTHER SECTIONS ================= -->

<div class="card dashboard-section"
id="employee-control-section">

<h2>Employee Control</h2>

</div>


<div class="card dashboard-section"
id="hr-control-section">

<h2>HR Management</h2>

</div>


<div class="card dashboard-section"
id="register-section">

<h2>Create Accounts</h2>

</div>


<div class="card dashboard-section"
id="attendance-section">

<h2>Attendance Monitoring</h2>

</div>


<div class="card dashboard-section"
id="leave-section">

<h2>Leave Authority</h2>

</div>


<div class="card dashboard-section"
id="salary-section">

<h2>Payroll Management</h2>

</div>


<div class="card dashboard-section"
id="security-section">

<h2>Security Controls</h2>

</div>


<div class="card dashboard-section"
id="logs-section">

<h2>System Login Logs</h2>

</div>


<div class="card dashboard-section"
id="meeting-section">

<h2>Meeting Control</h2>

</div>


<div class="card dashboard-section"
id="resource-section">

<h2>Resource Allocation</h2>

</div>


<div class="card dashboard-section"
id="analytics-section">

<h2>Company Analytics</h2>

</div>


<div class="card dashboard-section"
id="reports-section">

<h2>Organization Reports</h2>

</div>


<div class="card dashboard-section"
id="policy-section">

<h2>Policy & Compliance</h2>

</div>


<div class="card dashboard-section"
id="settings-section">

<h2>System Settings</h2>

</div>

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


/* RESET TIMER */

function resetTimer(){

    totalSeconds = 590;
}

document.onclick = resetTimer;

document.onmousemove = resetTimer;

document.onkeypress = resetTimer;

document.onscroll = resetTimer;



/* MENU */

const menuItems =
document.querySelectorAll(".menu-item");

const sections =
document.querySelectorAll(".dashboard-section");


sections.forEach(section => {

section.style.display = "none";

});

document.getElementById(
"overview-section"
).style.display = "block";


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


/* RECTANGLE CARDS */

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
"overview-section"
).style.display = "block";

menuItems.forEach(el => {

el.classList.remove("active");

});

document.querySelector(
'.menu-item[data-target="overview-section"]'
).classList.add("active");

}


/* PROFILE MENU */

function toggleMenu(){

document
.getElementById("dropdownMenu")
.classList
.toggle("show");

}

</script>

</body>
</html>