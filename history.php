<?php
session_start();
include('db.php');
?>

<!DOCTYPE html>
<html>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<head>
       <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #e4f0ee;
            margin:0;
            padding: 0;
            padding-top: 10%;
            text-align: center;
        }

        .container {
            margin-bottom: 20%;
            max-width: 800px;
            margin: 0 auto;
            padding:20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            text-align: center;
            overflow: auto;
            height: 50%;
        }

        table {
            width: 100%;
            border-collapse: collapse;
          
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
          * {
            margin: 0;
            padding: 0;
        }

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
            margin-top: -175px;
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
<body>`
<div class="navbar">
        <a href="home.php"></i> Home</a>
        <a href="history.php"></i> Quiz History</a>
        <a id="name"><?php if(isset($_SESSION['loggedin'])){ echo 'welcome: ' . htmlentities($_SESSION['uname']) . '!' ;}?></a></li>
        <a id="online"></i>ONLINE QUIZ SYSTEM</a>
        <li><a class="logout-button" href="logout.php">
        <i class="fas fa-sign-out-alt"></i> Logout
    </a>
 </div><br>
<div class="container">
    <h1>QUIZ HISTORY</h1>
    
    <table>
        <thead>
        <tr>
            <th>S.NO</th>
            <th>Name</th>
            <th>Course</th>
            <th>Subtopic</th>
            <th>Total Questions</th>
            <th>Correct Answers</th>
            <th>Percentage</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $uname = $_SESSION['uname'];
        $sql = "SELECT * FROM history WHERE username='$uname'";
        $result = mysqli_query($conn, $sql);

        // Check if there are results
        if (mysqli_num_rows($result) > 0) {
            $cnt = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tr>
                    <td><?php echo htmlentities($cnt); ?></td>
                    <td><?php echo htmlentities($row['username']); ?></td>
                    <td><?php echo htmlentities($row['course']); ?></td>
                    <td><?php echo htmlentities($row['subtopic']); ?></td>
                    <td><?php echo htmlentities($row['totalques']); ?></td>
                    <td><?php echo htmlentities($row['correctans']); ?></td>
                    <td><?php echo htmlentities($row['per']); ?>%</td>
                    <td><?php echo htmlentities($row['qtime']); ?></td>
                </tr>
                <?php
                $cnt = $cnt + 1;
            }
        } else {
            echo '<tr><td colspan="8">No data found in the "history" table.</td></tr>';
        }

        // Close the database connection
        mysqli_close($conn);
        ?>
        </tbody>
    </table>

</div>
</body>
</html>
