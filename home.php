<?php 
session_start()
?>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" type="text/css" href="c.css">

<div class="Ui_main">
<style>
                * {
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color:#0a136b; /* Background color */
            overflow: hidden;
            padding:9px;
            height:6%; /* Ensure content doesn't overflow */
        }

        /* Style for the navigation bar links */
        .navbar a {
            float: left; /* Float the links to the left */
            display: block; /* Display as block elements */
            color: white; /* Text color */
            text-align: center; /* Center-align text */
            padding: 14px 16px; /* Padding for the links */
            text-decoration: none;
            padding-top: 10px;

        }
        .navbar #online {
            float: left; /* Float the links to the left */
            display: block; /* Display as block elements */
            color: white; /* Text color */
            text-align: center; /* Center-align text */
            padding: 14px 16px; /* Padding for the links */
            padding-left: 25%;
            font-size: 1.1em;
            text-decoration: none;

        }
        .navbar #online:hover {
       background-color:#0a136b;
        }
        /* Style for the navigation bar links on hover */
        .navbar a:hover {
            color:black;   /* Background color on hover */
            background-color: white;
        }
        .navbar #name:hover
        {
            background-color: #0a136b;
            color:white;
        }
    

        /* Style for the navigation bar logout button */
        .logout-button {
            float: right; /* Float the button to the right */
            display: block; /* Display as a block element */
            color: white; /* Text color */ 
            border-radius:10px; /* Remove button border */
            padding: 14px 16px; /* Padding for the button */
         /* Center-align text */
            text-decoration: none; /* Remove underlines from the button */
            cursor: pointer;
            margin-left: 92%;
            margin-top: -45px;
        }
        .logout-button a{
            padding-top: 10px;
        }

        /* Style for the navigation bar logout button on hover */
        .logout-button:hover {
            color: black; /* Button background color on hover */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <div class="navbar">
    <a href="home.php"></i> Home</a>
        <a href="history.php"></i> Quiz History</a>
        <a id="name"><?php if(isset($_SESSION['loggedin'])){ echo 'welcome: ' . htmlentities($_SESSION['uname']) . '!' ;}?></a></li>
        <a id="online"></i>ONLINE QUIZ SYSTEM</a>
        <li><a class="logout-button" href="logout.php">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>


    </div>
</head>
    
    <meta charset="UTF-8">
    <title>Menu Design</title>
    <style>
        .nav ul li a{
    text-decoration: none;
    color:none;
    font-size: 1.2em;
    text-transform: uppercase
}
.nav{
width:100%;
position: absolute;
top:0;
left:0;
padding:20px 8%;
display:flex;
align-items:center;
justify-content:space-between;
}
.nav .logo{
    width:60px;
}
.nav ul li{
list-style:none;
display:inline-block;
margin-left:40px;
}
.nav ul li a{
   color: black;
    text-decoration: none;
    color:none;
    font-size: 16px;
    text-transform: uppercase
}
.nav ul li a::after
{
    content:'';
    position:absolute;
    margin-left: -63px;
    bottom:30px;
    width:60px;
    height:3px;
    background: white;
    border-radius: 5px;
    transform:scaleX(0);
    transition: transform 0.5s;
}

.nav ul li a:hover::after
{
    transform:scaleX(1);
    color:aqua;
}
        body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background:url('https://t4.ftcdn.net/jpg/02/30/37/93/360_F_230379361_GdzubTAT5hxPTuNMMQq5TkLYNKM6WoCc.jpg');
        background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
        text-decoration: none;
        list-style-type: none;
        
        }

        .ui_main h2 {
            color: black;
            text-align: center;
            padding: 10px 0;;
            margin-top: 10%;
            font-size: 30px;
        }

        .Ui_main .Line1 {
            display: flex;
            margin-top: 40px;
            margin-left: -3%;
            justify-content: center;
            width: 100%;
            height: 30%;
        }

        .Ui_main .Line1 nav {
            font-size: 30px;
            text-align: center;
            width: 180px;
            height: 15px;
            border-radius: 30px;
            background-color: white;
            padding: 10px;
            margin-left: 50px;
            margin-top: 50px;
            padding-top: 20px;
            padding-bottom: 50px;
        }

        .Ui_main .Line1 nav a {
            color: black;
            text-align:center ;
            text-decoration: none;
            list-style-type: none;
            padding-top: 40px;
            padding-bottom: 20px;
            float: bottom;
        }
        .Ui_main .Line1 nav a:hover
        {
            color:aqua;
        }


        .Ui_main .Line2 {
            display: flex;
            margin-top: 20px;
            margin-left: -3%;
            justify-content: center;
            width: 100%;
            height: 30%;
        }

        .Ui_main .Line2 nav {
            font-size: 30px;
            text-align: center;
            color: aqua;
            width: 180px;
            height: 15px;
            text-decoration: none;
            list-style-type: none;
            border-radius: 30px;
            background-color: white;
            padding: 10px;
            margin-left: 50px;
            padding-top: 20px;
            padding-bottom: 50px;
            margin-top: -30px;
        }

        .Ui_main .Line2 nav a {
            color:grey;
            padding-top: 80;
            text-align: center;
            text-decoration:none;
            list-style-type: none;
        }
        .Ui_main .Line2 nav a:hover
        {
        }
   
    </style>


<body>
    <h2>Quiz Courses</h2>
        <div class="Line1">
            <nav><a href="C.php">C</a></nav><br>
            <nav><a href="C++.php">C++</a></nav><br>
            <nav><a href="java.php">Java</a></nav><br>
            <nav><a href="python.php">Python</a></nav><br>
            
        </div>
</body>
</html>