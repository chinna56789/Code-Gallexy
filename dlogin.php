<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("db.php");
    $email = $_POST["email"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from user  where email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['uname'] = $email;
       header("location: index.php");
       //echo "login succuessful";

    } 
    else{
        $showError = "Invalid Credentials";}
}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" conent="IE-edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Web Designing Online Quiz</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
<?php
    if($login){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
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
    <header>
     
        <nav class="navigation">
            
        </nav>
	</header>

    <div class="wrapper">
                 <div class="form-box login">
            <h2>Login</h2>
            <form method="post" action="dlogin.php">
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail"></ion-icon>
                    </span>
                    <input name="email" type="email" required>
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon>
                    </span>
                    <input name="password" type="password" required>
                    <label>Password</label>
                </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn"><a href="index.html"></a>Login
                    </button>
                    <div class="login-register">
                        <p>Don't have an account? <a href="register.html" class="register-link">Sign Up</a></p>
                    </div>
                
            </form>

        </div>
        
    </div>
	
	

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
