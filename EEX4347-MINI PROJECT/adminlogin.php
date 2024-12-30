<?php
session_start();
include('dbconnect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $nic = $_POST['nic'];
    
    // Check if the email and nic combination exists in the database
    $query = "SELECT * FROM admins WHERE email = '$email' AND nic = '$nic'";
    $result = mysqli_query($conn, $query);
    
    // login.php
if (mysqli_num_rows($result) == 1) {
    $student = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $student['name']; 
    $_SESSION['email'] = $email; 
    header("Location: addashboard.php"); 
} else {
        $errorMessage = "Invalid login credentials!";
    }
}
$conn->close()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<nav class="navbar">
        <a href="welcome.php" class="logo">OUSL</a>
        <a href="adreg.php" class="home-btn"> ADMIN REGISTRATION </a>
    </nav>
    <div class="container">
        <div class="card">
            <h2>Admin Login</h2>
            <?php if (isset($errorMessage)): ?>
                <div class="alert alert-error">
                    <?php echo $errorMessage; ?>
                </div>
            <?php endif; ?>
            <form action="adminlogin.php" method="POST">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="nic">NIC Number</label>
                    <input type="text" class="form-control" id="nic" name="nic" required>
                </div>
                <button type="submit" class="btn">Sign In</button>
                <P style="text-align: center; margin-bottom: 2rem;">...If you have not registered, first go to the register button and register...</p>
            
            </form>
        </div>
    </div>
</body>
</html>