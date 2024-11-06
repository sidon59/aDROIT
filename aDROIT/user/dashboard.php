<?php 
    require_once('../Includes/config.php'); 
    require_once('../Includes/session.php'); 
    if ($logged == false) {
         header("Location: ../index.php");
         exit();
    } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        * {
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }
        body {
            background-color: #f0f0f0;
        }
        
        /* Navbar */
        .navbar {
            background: #088f8f;
            padding: 10px 15px;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }
        .navdiv {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo a {
            font-size: 35px;
            font-weight: 700;
            color: white;
            text-decoration: none;
        }
        ul {
            list-style: none;
            display: flex;
        }
        li {
            margin-right: 20px;
        }
        li a {
            color: white;
            font-size: 18px;
            font-weight: 500;
            text-decoration: none;
        }
        button {
            background-color: white;
            color: #088f8f;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #fff;
            color: #3e2093;
        }

        /* Ensure the iframe takes full height minus navbar */
        iframe {
            position: absolute;
            top: 60px; /* Adjust for navbar height */
            left: 0;
            width: 100%;
            height: calc(100% - 60px); /* Fill the screen below the navbar */
            border: none;
        }

        /* For mobile responsiveness */
        @media (max-width: 768px) {
            iframe {
                top: 70px; /* Adjust this based on the navbar height on mobile */
                height: calc(100% - 70px);
            }
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar">
    <div class="navdiv">
        <div class="logo"><a href="#">ADROIT</a></div>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="about.php">About Us</a></li>
        </ul>
        <button><a href="logout.php" style="text-decoration:none; color:#088f8f;">Logout</a></button>
    </div>
</nav>

<!-- Full-screen iframe under navbar -->
<iframe src="https://app.arduino.cc/dashboards/f7e419de-15b7-4f86-8129-8ad36138aff1" allowfullscreen></iframe>

</body>
</html>
