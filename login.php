<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("db.php");
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
    $sql = "SELECT username FROM userlogin WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;

        // Retrieve and store the username from the query result
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uname'] = $row['username'];

        header("location: home.php");
    } 
    else{
        $showError = "Invalid Credentials";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conent="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Web Designing Online Quiz</title>
    <link rel="stylesheet" href="login1.css">
</head>

<body>
<?php
    if($login){
    echo ' <script>alert("incorrect credentials")</script> ';
    }
    if($showError){
    echo ' ';
    }
    ?>
    <header>
     
        <nav class="navigation">
            
        </nav>
	</header>

    <div class="wrapper">
                 <div class="form-box login">
            <h2>Login</h2>
            <form method="post" action="login.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                <span class="icon" onclick="togglePasswordVisibility()"><ion-icon name="eye"></ion-icon>
                </span>
                <input type="password" id="password" name="password" required>

                    <label>Password</label>
                </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn"><a href="index.html"></a>Login
                    </button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="register.php" class="register-link">Sign Up</a></p>
                    </div>
                
            </form>

        </div>
        
    </div>
	
	

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
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
