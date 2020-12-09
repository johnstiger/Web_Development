<?php

session_start();
$con = mysqli_connect('localhost','root','123456','useraccount');
mysqli_select_db($con,'useraccount');

if(isset($_POST['submit'])){
    $s = "select * from userstable";
    $result = mysqli_query($con,$s);
    $uname = $_POST["uname"];
    $password = $_POST["pass"];
    while($row = mysqli_fetch_array($result)){
        if($uname == $row["name"]){
            if ($password == $row["password"]){
                header("location: welcome.php");
            }else{
          echo "<script>alert('Wrong Password Try Again')</script>";

            }
        }
        else{
          echo "<script>alert('Invalid Email Account')</script>";
        }
        
    }
  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>LogIn Form</title>
    
</head>
<body>
    <div class = "container">
    <img src="profile.png" alt="" class = "avatar">
 <center>   <h1>LOG IN</h1></center>
    <form method = "post">
    <div class = "form-input">
    <p>Username</p>
    <input type="text" name = "uname" value = "" placeholder = "Enter Username" required> <br />
    <p>Password</p>
    <input type="password" name = "pass" value = "" placeholder = "Enter Password" required> <br />
    <input type="submit" name = "submit" value = "Log In"> <br />
    <a href="">Forget Password</a>
    <br>
    <a href="register.php">Don't have an account?</a>
    </div>
    </form>
    </div>
</body>
</html>