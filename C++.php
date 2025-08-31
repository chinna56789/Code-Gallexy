<?php
session_start();
?>

<html lang="en">
<head>
<title>Quiz</title>
<link rel="stylesheet" href="quiz.css">
<link rel="stylesheet" href="quiz_2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>
    <style>
                /* Reset default styles for margin and padding */
                * {
            margin: 0;
            padding: 0;
        }

        /* Style for the navigation bar */
        .navbar {
            background-color:#0a136b; /* Background color */
            overflow: hidden;
            padding:9px;
            height:8%; /* Ensure content doesn't overflow */
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
<div class="main">
<div class="navbar">
        <a href="home.php"></i> Home</a>
        <a href="history.php"></i> Quiz History</a>
        <a id="name"><?php if(isset($_SESSION['loggedin'])){ echo 'welcome: ' . htmlentities($_SESSION['uname']) . '!' ;}?></a></li>
        <a id="online"></i>ONLINE QUIZ SYSTEM</a>
        <li><a class="logout-button" href="logout.php">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
 </div>
<div class="icon">
<h2 class="logo">QUIZ</h2>
</div>
<div class="menu">
<ul>
<li><a href="C.php">C</a>
<div class="submenu1">
<ul>
<li><a href="c_basic.php">Basic</a></li>	
<li><a href="c_formatted_output.php">FormattedOutput</a></li>
<li><a href="c_comments.php">Comments</a></li>
<li><a href="c_datatype.php">Datatypes</a></li>
<li><a href="c_variables.php">Variables</a></li>
<li><a href="c_formatted_input.php">FormattedInput</a></li>
<li><a href="c_operators.php">Operators</a></li>
<li><a href="c_conditional.php">ConditionalStatements</a></li>
<li><a href="c_looping.php">LoopingStatements</a></li>
<li><a href="c_switch.php">Switch,Break,Continue</a></li>
<li><a href="c_arrays.php">Arrays</a></li>
<li><a href="c_strings.php">Strings</a></li>
<li><a href="c_pointers.php">Pointers</a></li>
<li><a href="c_functions.php">Functions</a></li>
<li><a href="c_math.php">MathFunctions</a></li>
<li><a href="c_structures.php">Structures</a></li>
<li><a href="c_final.php">FinalQuiz</a></li>

</ul>
</div>	
</li>
<li class="active"><a href="C++.php">C++</a>
<div class="submenu1">
<ul>
<li><a href="c++_basic.php">Basic</a></li>
<li><a href="c++_formattedoutput.php">FormattedOutput</a></li>
<li><a href="c++_comments.php">Comments</a></li>
<li><a href="c++_datatypes.php">Datatypes</a></li>
<li><a href="c++_variables.php">Variables</a></li>
<li><a href="c++_formattedinput.php">FormattedInput</a></li>
<li><a href="c++_strings.php">Strings</a></li>
<li><a href="c++_conditionalstatements.php">ConditionalStatements</a></li>
<li><a href="c++_switch.php">Switch,Break,Continue</a></li>
<li><a href="c++_arrays.php">Arrays</a></li>
<li><a href="c++_Pointers.php">Pointers</a></li>
<li><a href="c++_Functions.php">Functions</a></li>
<li><a href="c++_Classes.php">Classess,Objects</a></li>
<li><a href="c++_constructors.php">Constructors</a></li>
<li><a href="c++_Inheritance.php">Inheritence</a></li>
<li><a href="c++_Final.php">FinalQuiz</a></li>

</ul>
</div>
</li>

<li><a href="java.php">JAVA</a>
<div class="submenu1">
<ul>
<li><a href="java_basic.php">Basic</a></li>
<li><a href="java_.output.php">FormattedInput</a></li>
<li><a href="java_comments.php">Comments</a></li>
<li><a href="java_datatypes.php">Datatypes</a></li>
<li><a href="java_variables.php">Variables</a></li>
<li><a href="java_typecasting.php">Typecasting</a></li>
<li><a href="java_strings.php">Strings</a></li>
<li><a href="java_operators.php">Operators</a></li>
<li><a href="java_conditional.php">ConditinalStatements</a></li>
<li><a href="java_looping.php">LoopingStatements</a></li>
<li><a href="java_transfer.php">TransferStatements</a></li>
<li><a href="java_functions.php">Functions</a></li>
<li><a href="java_arrays.php">Arrays</a></li>
<li><a href="java_classes.php">Classes,Objects</a></li>
<li><a href="java_inheritence.php">Inheritence</a></li>
<li><a href="java_scope.php">Scope</a></li>
<li><a href="java_modules.php">Modules</a></li>
<li><a href="java_final.php">FinalQuiz</a></li>

</ul>
</div>
</li>
<li><a href="python.php">PYTHON</a>
<div class="submenu1">
<ul>
<li><a href="python_basic.php">Basic</a></li>
<li><a href="python_output.php">FormattedInput</a></li>
<li><a href="python_comments.php">Comments</a></li>
<li><a href="python_datatypes.php">Datatypes</a></li>
<li><a href="python_variables.php">Variables</a></li>
<li><a href="python_variables.php">Typecasting</a></li>
<li><a href="python_strings.php">Strings</a></li>
<li><a href="python_operators.php">Operators</a></li>
<li><a href="python_conditional.php">ConditinalStatements</a></li>
<li><a href="python_looping.php">LoopingStatements</a></li>
<li><a href="python_transfer.php">TransferStatements</a></li>
<li><a href="python_functions.php">Functions</a></li>
<li><a href="python_arrays.php">Arrays</a></li>
<li><a href="python_class.php">Classes,Objects</a></li>
<li><a href="python_inheritence.php">Inheritence</a></li>
<li><a href="python_scope.php">Scope</a></li>
<li><a href="python_modules.php">Modules</a></li>
<li><a href="python_final.php">FinalQuiz</a></li>

</ul>
</div>
</li>

</ul>
</div><br><br>

<div class="quiz">
<h2 id="question">C++ Language</h2><br><hr><br><br>
<h3>Quiz Rules</h3><br><br>
1. You must Attemt each Question<br>
2. You cannot skip any Question<br>
2. Each sub Topic consist of 10 Questions and Each full course Final Quiz has 20 Questions<br>
4. Correct Answer is checked with green color and incorrect answer is checked with Red color<br><br>
<h3>How to Start Quiz</h3><br><br>
1. Choose Your Desired Course In Horizontal Navigation Bar<br>
2. Select  a sub Topic From the Couse you have selected<br>
3. Click on the topic to attempt Quiz<br>
4. After Completing all Sub Quizs You can now Attempt a Final Quiz on Full Course<br>
<span class="top"></span>
      <span class="right"></span>
      <span class="bottom"></span>
      <span class="left"></span>
</div>

</div>

</body>

</html>
