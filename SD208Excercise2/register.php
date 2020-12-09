<?php

session_start();

$con = mysqli_connect('localhost','root','123456');
mysqli_select_db($con,'useraccount');

if(isset($_POST['submit'])){
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $name = $_POST['email'];
    $Cname = $_POST['confirmEmail'];
    $pass = $_POST['password'];
    $Cpass = $_POST['confirmPassword'];

    $s = "select * from userstable where name = '$name'";
    $result = mysqli_query($con,$s);
    $num = mysqli_num_rows($result);

    if($name!=$Cname){
        echo "<script>alert('Email is not match!')</script>";
    }
    if($pass != $Cpass){
        echo "<script>alert('Password is not match!')</script>";
    }else{
        if($num==1){
            echo "<script>alert('Username Already Taken')</script>";
        }else{
            $reg = "insert into userstable(fname,lname,name,password) values ('$fname','$lname','$name','$pass')";
            mysqli_query($con,$reg);
            header("location:LogIn.php");
        }
    }
   
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
    .container{
        width: 400px;
        height: 550px;
        background: #000;
        color: #fff;
        top: 50%;
        left: 50%;
        position:absolute;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        padding:70px 30px;
        border-radius: 10px;
    }
    
    </style>
</head>
<body>


<div class = "container">
 <center>   <h1>Registration Form</h1></center>
    <form method = "post">
    <div class = "form-input">
    <input type="text" name="firstname" placeholder = "Enter First Name" required> <br>
    <input type="text" name="lastname" placeholder = "Enter Last Name" required> <br>
    <input type="text" name="email" placeholder = "Enter Email"required ><br>
    <input type="text" name="confirmEmail" placeholder = "Confirm Email" required><br>
    <input type="password" name="password" placeholder = "Enter Password" required><br>
    <input type="password" name="confirmPassword" placeholder = "Confirm Password" required><br>
 
    <input type="submit" name = "submit" value = "Register Now"> <br />
    </div>
    </form>
    </div>

   
</body>
</html>