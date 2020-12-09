<?php include 'source.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
    
    <style>
    .container{
        width: 400px;
        height: 500px;
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
    <input type="text" name="address" placeholder = "Address" required><br>
    <br>
    <input type="submit" name = "submit" value = "Register Now"> <br>
    </div>
    </form>
    </div>

   
</body>
</html>