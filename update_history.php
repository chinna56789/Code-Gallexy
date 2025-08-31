<?php
// Assuming you have established a database connection in "db.php"
include("db.php");
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Start the session
    session_start();

    // Get the username from the session (assuming it's already set)
    $username = $_SESSION['uname'];

    // Other form data
    $username = $_POST["username"];
    $course = $_POST["course"];
    $subTopic = $_POST["subTopic"];
    $totalques = $_POST["totalques"];
    $correctans = $_POST["correctans"];
    $per = $_POST["per"];
    $qtime = $_POST["qtime"];

    // Insert data into the history table
    $sql = "INSERT INTO history (username, course, subtopic, totalques, correctans, per, qtime) VALUES ('$username', '$course', '$subtopic', $totalques, $correctAns, $per, '$qtime')";

    if (mysqli_query($conn, $sql)) {    
        // Data inserted successfully
        echo "Data inserted into history table successfully!";
    } else {
        // Error occurred while inserting data
        echo "Error: " . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
}
?>