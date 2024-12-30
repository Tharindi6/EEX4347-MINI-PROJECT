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
<nav class="navbar">
        <a href="welcome.php" class="logo">OUSL</a>
        <a href="stdashboard.php" class="home-btn">Back </a>
    </nav>
    
    <div class="cont">
       
               
            <div class="user-welcome">
                COURSE LIST AND DETAILS, <span class="highlight"><?php echo $username; ?></span>
            </div>

            <P class="cont" >
            <h3 style="color:yellow;">EEX4347 - Software Engineering Concepts</h3>
            Instructor: Dr. John Doe
            Progress: 75% Complete
            Upcoming Deadlines:
            TMA1 Submission: Due 10 August 2024
            Peer Review Activity: Complete by 5 August 2024
            Quick Links:
            Assignment Dropbox | SRS Template | Discussion Forum 
            </P>
    

            
            <P class="cont">
            <h3 style="color:yellow;">AGM4307 Economics and Marketing for Engineers</h3>
            Course Category: Electrical & Computer Engineering
            Summary:
            This is a level 4 course in the Management category of the Bachelor of Technology (Engineering) Honors program. The course introduces the fundamentals of economics tailored for engineering students. It aims to equip students with essential knowledge and experience in applying economic principles and marketing concepts to engineering decision-making processes.

            Pre-requisites: Pass in 18 credits in Level 3
            </P>
            

            
            <P class="cont">
            <h3 style="color:yellow;">EEX4331 Circuit Theory and Design</h3>
            Course Category: Bachelor of Science Honours in Engineering
            Summary:
            This level 3 course is compulsory for students specializing in Electronics and Communication, Electrical, and Computer Engineering. With a 5-credit weight, the course is offered only in English medium and requires background knowledge in mathematics and basic electricity.

            </P>

            <P class="cont">
            <h3 style="color:yellow;">EEX4332 Electrical Power</h3>
            Course Category: Bachelor of Science Honours in Engineering
            Summary:
            This level 3 course is compulsory for students specializing in Electronics and Communication, Electrical, and Computer Engineering. With a 5-credit weight, the course is offered only in English medium and requires background knowledge in mathematics and basic electricity.

            </P>
          
            <P class="cont">
            <h3 style="color:yellow;">EEX4435 Data Structures and Algorithms</h3>
            Course Category: Bachelor of Science Honours in Engineering
            Summary:
            This level 3 course is compulsory for students specializing in Electronics and Communication, Electrical, and Computer Engineering. With a 5-credit weight, the course is offered only in English medium and requires background knowledge in mathematics and basic electricity.

            </P>
          
            <P class="cont">
            <h3 style="color:yellow;">EEX4436 Microprocessors and Interfacing</h3>
            Course Category: Bachelor of Science Honours in Engineering
            Summary:
            This level 3 course is compulsory for students specializing in Electronics and Communication, Electrical, and Computer Engineering. With a 5-credit weight, the course is offered only in English medium and requires background knowledge in mathematics and basic electricity.

            </P>
          
          
            </div>
            
           



            
            
            <form action="welcome.php" method="POST">
            <button type="submit" class="btn" style="background:rgba(246, 53, 19, 0.77);color:white;">
                    Logout
                </button>
            </form>
        </div>
    </div>
</body>
</html>
