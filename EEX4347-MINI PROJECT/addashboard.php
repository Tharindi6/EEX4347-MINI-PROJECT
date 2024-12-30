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
                WELCOME TO ADMIN DASHBOARD, <span class="highlight"><?php echo $username; ?></span>
            </div>
            <p style="text-align: center; margin-bottom: 2rem;">
                What would you like to do today?
            </p>
            
            <form action="update_delete.php" method="GET">
            <button type="submit" class="btn" style="background:rgba(238, 234, 28, 0.87);">
                    Update/Delete Student
                </button>
            </form>
            
            <form action="search.php" method="post">
                <button type="submit" class="btn" style="background:rgba(238, 234, 28, 0.87);">
                    Search Student
                </button>
            </form>

            <form action="stdashboard.php" method="post">
                <button type="submit" class="btn" style="background:rgb(229, 201, 16);">
                    Go To Student Dashboard
                </button>
            </form>
            
            
            <form action="logout.php" method="POST">
            <button type="submit" class="btn" style="background:rgb(115, 23, 23);color:white;">
                    Logout
                </button>
            </form>
           
        </div>
    </div>
</body>
</html>
