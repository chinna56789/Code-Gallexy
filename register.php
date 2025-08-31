<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'db.php';
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $cpassword = $_POST["Confirm-password"];
    $exists=false;
    if($password == $cpassword && $exists==false){
        $sql = "INSERT INTO `userlogin` ( `username`,`email`,`password`) VALUES ('$username','$email', '$password')";
        $result = mysqli_query($conn, $sql);
        if ($result){
           $showAlert = true;
       }
    }
    else{
        $showError = "Passwords do not match";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="register1.css">
</head>

<body>
<?php
    if($showAlert){
    echo ' <script>alert(" your account is successfully created")</script>';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>
    <div class="wrap">
        <div class="form-box">
            <h2>Registration</h2>
            <form method="post" action="register.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon>
                    </span>
                    <input type="username" name="username" required>
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input type="email" name="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                <span class="icon" onclick="togglePasswordVisibility()"><ion-icon name="eye"></ion-icon>
                </span>
                    <input type="password" name="password" required>
                    <label>Password</label>
                </div>
                <div class="input-box">
                <span class="icon" onclick="togglePasswordVisibility()"><ion-icon name="eye"></ion-icon>
                </span>
                    <input type="Confirm-password" name="Confirm-password" required>
                    <label>Confirm Password</label>
                </div>


                <div class="remember-forgot">
                    <label><input type="checkbox">I
                        agree to the terms & conditions</label>
                </div>

                <button name="register" type="submit" class="btn">Register</button>
                <div class="login-register">
                    <p>Already have an account? <a href="login.php" class="login-link">Login</a>
                    </p>
                </div>

            </form>
        </div>

    </div>

    <script src="scpt.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        toggleIcon.innerHTML = "&#x1F440;"; // Change the eye symbol to a crossed eye when showing password
    } else {
        passwordField.type = "password";
        toggleIcon.innerHTML = "&#x1F441;"; // Change it back to an eye symbol when hiding password
    }
}
</script>

</body>

</html>