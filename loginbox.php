<?php
require('BackendBoys/mysqli_connect.php');
$errors = array();
$user ="";
$pass= "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST["username"]))
    {
        echo '<script> alert(\"Enter username\"); </script>';
    }
    else
    {
        $user = mysqli_real_escape_string($dbc,$_POST["username"]);
    }
    if(empty($_POST["password"]) && !empty($_POST["username"]))
    {
        //echo 'Enter password';
        $user = mysqli_real_escape_string($dbc,$_POST["username"]);
        $query = "select id from personal_data where username = '$user' or id = '$user'";
        $result = mysqli_query($dbc,$query);
        $count = mysqli_num_rows($dbc,$result);
        if($count==0)
        {
            echo "<script>alert(\"No such user found!\");</script>";
        }
    }
    else
    {
        $pass = mysqli_real_escape_string($dbc,$_POST["password"]);
    }
    if(empty($errors))
    {
        // $salt = "CrazyassLongSALTThatMakesYourUsersPasswordVeryLong123!!312567__asdSdas";
        // $pass = hash('sha256', $salt.$pass);
        // $query = "SELECT priv FROM logindata WHERE (username='$user' or id='$user') and pass='$pass'";
        $query = "SELECT * FROM personal_data WHERE (username='$user' or id='$user') and password='$pass'";
        $studentdata = mysqli_query($dbc,$query);
        $cnt = mysqli_num_rows($studentdata);
        $row = mysqli_fetch_assoc($studentdata);
        if($cnt>0)
        {
            session_start();
            $_SESSION['user'] = $user;
          //  $_SESSION['name']=$row['name'];
            // $_SESSION['priv'] = $row['priv'];
            header('Location: Notices.php');
        }
        else
        {
            echo "<script>alert(\"No such user found!\");</script>";
            //header('Location: studentlogin.php');
        }
    }
    else
    {
        foreach ($errors as $msg)
        {
            echo $msg."<br>";
        }
    }
}
else
{
   // echo "Enter ID/Username and Pasword to sign-in!";
}
?>
<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
	<!DOCTYPE html>
	<html>
	<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	   <style>
	   /*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
    height: 100%;
    background-repeat: no-repeat;
	
    background-image: url("loginbg.jpg") ;
	background-size: 100%;
}


.card-container.card {
    max-width: 350px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * Card component
 */
.card {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
}

.form-signin .form-control:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    border: none;
    -o-transition: all 0.218s;
    -moz-transition: all 0.218s;
    -webkit-transition: all 0.218s;
    transition: all 0.218s;
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}
	    
		</style>
	
	</head>
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <!--<form class="form-signin" method="post" action="loginbox.php">-->
            <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <span id="reauth-email" class="reauth-email"></span>
                  <!--<div class="text-center"><h3>bro</h3></div>-->
                <input type="text" id="inputusername" name="username" class="form-control" placeholder="Username or ID " required>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submit">Sign in</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password">
                Forgot the password?
            </a>
        </div><!-- /card-container -->
    </div><!-- /container -->
	</body>
	</html>