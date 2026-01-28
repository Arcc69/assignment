<?php
$firstName = "Nathane";
$lastName  = "Martin";

/* CONCATENATION */
$welcomeConcat = "Welcome " . $firstName . " " . $lastName;

/* INTERPOLATION */
$welcomeInterpol = "Welcome $firstName $lastName";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Professional Sports Coach</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet" />
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
    📞 +111 22 33 444 | Monday – Sunday: 10:00 – 22:00
</div>

<!-- Navigation -->
<nav>
    <div class="logo">
        <?php 
          // You can use either concatenation or interpolation here, I'll show concatenation:
          echo $welcomeConcat; 
          // Or interpolation: echo $welcomeInterpol;
        ?>
    </div>

    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Your Objective</a></li>
        <li><a href="#">Achieve Your Goal</a></li>
        <li><a href="#">Choose Your Pack</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Contact Me</a></li>
    </ul>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="subtitle">Sports Coach at Home</div>
        <h1>PROFESSIONAL<br>SPORTS COACH</h1>
        <p>
            Achieve your fitness goals with personalized training programs
            designed to push your limits and transform your body.
        </p>
        <a href="#" class="btn">Make an Appointment</a>
    </div>
</section>

</body>
</html>
