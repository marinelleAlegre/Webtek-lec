<!DOCTYPE html>
<html>
    <head>
        <title>WEB SYSTEMS AND TECHNOLOGIES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="../img/logo.png">
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
        <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
        <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
        <link rel="stylesheet" type="text/css" href="css/util.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
<body>

<?php
    require('../db.php');
    //include('../sessionTimeout.php');
    session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        
        $username = stripslashes($_REQUEST['username']); // removes backslashes
        $username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        
    //Checking is user existing in the database or not
        
       $query = "SELECT * FROM `user` WHERE username='$username' AND password='".md5($password)."'";
       $result = mysqli_query($con, $query) or die(mysql_error());
       $rows = mysqli_num_rows($result);
       
       if($rows == 1){
            $_SESSION['username'] = $username;
            header("Location: ../userIndex.php"); // Redirect user to index.php
       } else {
            echo '<script type="text/javascript">window.alert("Username / password is incorrect. Please Try Again");';
            echo 'window.location.href="login1.php" </script>';
       }
    } else {
?>
<div class="limiter">
    <div class="container-login100">
    <div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
    <legend class="login100-form-title p-b-32">Account Login</legend>
            <form action="" method="post" name="login" class="login100-form validate-form flex-sb flex-w" autocomplete="off">

                <span class="txt1 p-b-11">Username</span>
                <div class="wrap-input100 validate-input m-b-36" >
                <input type="text" name="username" placeholder="Username" class="input100" required />
                <span class="focus-input100"></span>
                </div>

                <span class="txt1 p-b-11">Password</span>
                <div class="wrap-input100 validate-input m-b-12">
                <span class="btn-show-pass">
                <i class="fa fa-eye"></i>
                </span>
                <input type="password" name="password" placeholder="Password" class="input100" required />
                </div>

                <div class="container-login100-form-btn">
                <input name="submit" type="submit" value="Login" class="login100-form-btn" id="login"/>
                </div>
            </form>
       </div>
    </div>
</div>

    <div id="dropDownSelect1"></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
	<?php } ?>
</body>
</html>