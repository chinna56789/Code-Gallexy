<?php
session_start();

if (isset($_POST['submit'])) {
    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    // Include your database connection file (db.php)
    require_once("db.php");

    // Prepare the SQL statement
    $sql = "SELECT * FROM userlogin WHERE username=:username AND password=:password";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);

    // Execute the query
    $stmt->execute();

    // Fetch the results as an object
    $results = $stmt->fetchAll(PDO::FETCH_OBJ);

    // Check if the fetched results contain any rows
    if (count($results) > 0) {
        // Authentication successful; set a session variable to mark the user as logged in
        $_SESSION["userLoggedIn"] = true;
        $_SESSION["username"]=$username;
        header("Location: index.php"); // Redirect to the dashboard page upon successful login
        exit;
    } else {
        // Authentication failed; display an error message
        echo "Invalid username or password. Please try again.";
    }
}

?>