<?php
if(isset($_POST['submit'])){
    $error = 0;
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $ename = $_POST['email'];
    $address = $_POST['address'];
    $trimmed1 = str_replace(' ', '', $fname);
    $trimmed2 = str_replace(' ', '', $lname);
    if (strlen($trimmed1)<2 || strlen($trimmed1)>25){
        echo "<script>alert('First name must be at least 2 characters and not exceed 25 characters')</script>";
        $error = 1;
    }
    if (strlen($trimmed2)<2 || strlen($trimmed2)>25){
        echo "<script>alert('Last name must be at least 2 characters and not exceed 25 characters')</script>";
        $error = 1;
    }
    if (filter_var($ename, FILTER_VALIDATE_EMAIL)) {
        echo("$ename is a valid email address");
     }
    else{
        echo("$ename is not a valid email address");
        $error = 1;
     }
     if($error != 1){
         echo "<br>";
         echo "First Name is $fname";
         echo "<br>";
         echo "Last Name is $lname";
         echo "<br>";
         echo "Email is $ename";
         echo "<br>";
         echo "Address is $address";
     }
}
?>
<style>
*{
    margin:0;
}
body{
        background-image:url("https://pix10.agoda.net/hotelImages/303/303175/303175_14112019090023510993.jpg?s=1024x768");
        background-size: cover;
        background-repeat:no-repeat;
    }
    .container{
        width: 320px;
        height: 420px;
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
    .container h1{
        margin: 0;
        padding: 0 0 20px;
        text-align: center;
        font-size: 22px;
    }

    .form-input input{
        width: 100%;
        margin-bottom: 20px;
    }   
    .avatar{
        width: 100px; 
        height: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        background:#fff;
        left: calc(50% - 50px);
    }
   .container input[type = "text"],input[type="password"]
   {
       border:none;
       border-bottom: 1px solid #fff;
       background: transparent;
       outline:none;
       height: 40px;
       color: #fff;
       font-size: 16px;
   }
   .container input[type="submit"]{
       border:none;
       outline:none;
       height:40px;
       background:#fb2525;
       color:#fff;
       font-size:18px;
       border-radius: 20px;
   }
   .container input[type = "submit"]:hover{
       cursor:pointer;
       background:#ffc107;
       color:#000;
   }
   .container a{
       text-decoration:none;
       font-size: 12px;
       line-height: 20px;
       color: darkgrey;
   }
</style>