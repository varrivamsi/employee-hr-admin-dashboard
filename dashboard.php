<?php

session_start();

include("db.php");

/* CHECK LOGIN */

if(!isset($_SESSION['employee_id'])){

    header("Location: login.html");
    exit();
}

$employee_id = $_SESSION['employee_id'];

/* FETCH EMPLOYEE DETAILS */

$sql = "SELECT * FROM employees
WHERE employee_id='$employee_id'";

$result = mysqli_query($conn,$sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Employee Dashboard</title>

<link rel="stylesheet"
href="dashboard.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>


<!-- ================= TOPBAR ================= -->

<header class="topbar">

    <div class="top-left">

        <img src="image.png"
        class="logo">

        <h2>EMPLOYEE PORTAL</h2>

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

                    <?php echo htmlspecialchars($row['name']); ?>

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



<!-- ================= MAIN ================= -->

<div class="main-container">


<!-- ================= SIDEBAR ================= -->

<aside class="sidebar">


<!-- PROFILE -->

<div class="profile-section">

    <img src="profile.png"
    class="profile-img">

    <h3>

        <?php echo htmlspecialchars($row['name']); ?>

    </h3>

    <p>

        <?php echo htmlspecialchars($row['designation']); ?>

    </p>

    <span>

        ID :
        <?php echo htmlspecialchars($row['employee_id']); ?>

    </span>

</div>



<!-- MENU -->

<ul class="menu">

<li class="menu-item active"
data-target="dashboard-section">

<i class="fa-solid fa-table-columns"></i>

Dashboard

</li>


<li class="menu-item"
data-target="personal-section">

<i class="fa-regular fa-user"></i>

Personal Details

</li>


<li class="menu-item"
data-target="attendance-section">

<i class="fa-regular fa-calendar-check"></i>

Attendance Tracker

</li>


<li class="menu-item"
data-target="leave-section">

<i class="fa-regular fa-note-sticky"></i>

Leave Management

</li>


<li class="menu-item"
data-target="pending-section">

<i class="fa-solid fa-list-check"></i>

Pending Works

</li>


<li class="menu-item"
data-target="timesheet-section">

<i class="fa-regular fa-clock"></i>

Timesheet Approvals

</li>


<li class="menu-item"
data-target="shift-section">

<i class="fa-solid fa-business-time"></i>

Shift Scheduling

</li>


<li class="menu-item"
data-target="expense-section">

<i class="fa-solid fa-wallet"></i>

Expense & Reimbursement

</li>


<li class="menu-item"
data-target="safety-section">

<i class="fa-solid fa-shield"></i>

Compliance and Safety

</li>


<li class="menu-item"
data-target="resource-section">

<i class="fa-solid fa-book"></i>

Resource Booking

</li>


<li class="menu-item"
data-target="system-section">

<i class="fa-solid fa-gear"></i>

System Controls

</li>

</ul>



<!-- LOGOUT -->

<a href="logout.php"
class="logout-btn">

<i class="fa-solid fa-right-from-bracket"></i>

Logout

</a>

</aside>



<!-- ================= CONTENT ================= -->

<div class="content">


<!-- ================= DASHBOARD HOME ================= -->

<div class="dashboard-section"
id="dashboard-section">

<div class="dashboard-grid">


<div class="card dashboard-home-card"
onclick="openSection('personal-section')">

<i class="fa-regular fa-user"></i>

<h3>Personal Details</h3>

<p>Employee profile details</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('attendance-section')">

<i class="fa-regular fa-calendar-check"></i>

<h3>Attendance Tracker</h3>

<p>Track attendance records</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('leave-section')">

<i class="fa-regular fa-note-sticky"></i>

<h3>Leave Management</h3>

<p>Manage leave applications</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('pending-section')">

<i class="fa-solid fa-list-check"></i>

<h3>Pending Works</h3>

<p>View pending tasks</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('timesheet-section')">

<i class="fa-regular fa-clock"></i>

<h3>Timesheet Approvals</h3>

<p>Manage timesheet approvals</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('shift-section')">

<i class="fa-solid fa-business-time"></i>

<h3>Shift Scheduling</h3>

<p>View shift schedule</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('expense-section')">

<i class="fa-solid fa-wallet"></i>

<h3>Expense & Reimbursement</h3>

<p>Expense management</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('safety-section')">

<i class="fa-solid fa-shield"></i>

<h3>Compliance & Safety</h3>

<p>Safety compliance records</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('resource-section')">

<i class="fa-solid fa-book"></i>

<h3>Resource Booking</h3>

<p>Manage bookings</p>

</div>


<div class="card dashboard-home-card"
onclick="openSection('system-section')">

<i class="fa-solid fa-gear"></i>

<h3>System Controls</h3>

<p>System management</p>

</div>

</div>

</div>



<!-- ================= PERSONAL ================= -->

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

<p><?php echo $row['employee_id']; ?></p>

</div>

<div class="profile-box">

<label>Name</label>

<p><?php echo $row['name']; ?></p>

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

<label>Work Mode</label>

<p><?php echo $row['work_mode']; ?></p>

</div>

</div>

</div>



<!-- ================= ATTENDANCE ================= -->

<div class="card dashboard-section"
id="attendance-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Attendance Tracker</h2>

</div>



<!-- ================= LEAVE ================= -->

<div class="card dashboard-section"
id="leave-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Leave Management</h2>

</div>



<!-- ================= PENDING ================= -->

<div class="card dashboard-section"
id="pending-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Pending Works</h2>

</div>



<!-- ================= TIMESHEET ================= -->

<div class="card dashboard-section"
id="timesheet-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Timesheet Approvals</h2>

</div>



<!-- ================= SHIFT ================= -->

<div class="card dashboard-section"
id="shift-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Shift Scheduling</h2>

</div>



<!-- ================= EXPENSE ================= -->

<div class="card dashboard-section"
id="expense-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Expense & Reimbursement</h2>

</div>



<!-- ================= SAFETY ================= -->

<div class="card dashboard-section"
id="safety-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Compliance & Safety</h2>

</div>



<!-- ================= RESOURCE ================= -->

<div class="card dashboard-section"
id="resource-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>Resource Booking</h2>

</div>



<!-- ================= SYSTEM ================= -->

<div class="card dashboard-section"
id="system-section">

<button class="back-btn"
onclick="goDashboard()">

← Back to Dashboard

</button>

<h2>System Controls</h2>

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


/* DASHBOARD NAVIGATION */

const menuItems =
document.querySelectorAll(".menu-item");

const sections =
document.querySelectorAll(".dashboard-section");


/* SHOW ONLY DASHBOARD FIRST */

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
}


/* BACK TO DASHBOARD */

function goDashboard(){

    sections.forEach(section => {

        section.style.display = "none";

    });

    document.getElementById(
    "dashboard-section"
    ).style.display = "block";
}


/* PROFILE DROPDOWN */

function toggleMenu(){

    document
    .getElementById("dropdownMenu")
    .classList
    .toggle("show");
}


/* CLOSE DROPDOWN */

window.onclick = function(event){

    if(!event.target.matches('.profile-pic')){

        var dropdown =
        document.getElementById("dropdownMenu");

        if(dropdown.classList.contains('show')){

            dropdown.classList.remove('show');
        }
    }
}

</script>

</body>
</html>