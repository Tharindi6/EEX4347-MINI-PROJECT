<?php
session_start();


if (!isset($_SESSION['email'])) {
    header("Location: adminlogin.php"); 
    exit();
}


$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Student Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<nav class="navbar">
        <a href="welcome.php" class="logo">OUSL</a>
        <a href="welcome.php" class="home-btn">Back to Home</a>
    </nav>
    <div class="container">
        <div class="card">
            <div class="user-welcome">
                WELCOME TO STUDENT DASHBOARD, <span class="highlight"><?php echo $username; ?></span>
            </div>
            
            
            <a href="coursemanagement.php" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Course Management</a>
            <a href="assignmentfeedback.php" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Assignment & Feedback</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Virtual Study Groups & Collaboration</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Progress Tracking & Analytics</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Communication</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Support & Resources</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Exams & Assessments</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Video Conferencing & Workshops</a>
            <a href="#" class="btn" style="background:rgba(246, 193, 19, 0.77);color:white;">Account & Settings</a>


            <form action="welcome.php" method="POST">
            <button type="submit" class="btn" style="background:rgba(246, 53, 19, 0.77);color:white;">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>
