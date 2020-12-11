<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation form</title>
    <style>
        body{
            background-image:url("https://previews.123rf.com/images/akrain/akrain1707/akrain170700052/81977351-abstract-geometric-background-movement-of-abstract-forms-.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        }
        div div{
            text-align: center;
        }
        .container{
            width: 60%;
            background-color: rgba(255, 255, 255, 0.8);
            margin: 0 auto;
            padding: 2% 2%;
        }
        h1,h3{
            color: palevioletred;
        }
        input{
            background-color: palevioletred;
        }
        table{
            border : 2px solid black;
        }
    </style>
</head>
<body>
    
    <div>
        <div class ="container">
            <h1>Result Data</h1>
            <hr>
            <table style='width:100%'>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Address</th>
                            <th>Email</>
                        </tr>
                <?php
                require "./controller/connection.php";
                $sql = "SELECT `id`, `firstName`, `lastName`, `address`, `email` FROM users";
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result)> 0 ){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['firstName']."</td>
                            <td>".$row['lastName']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['email']."</td>
                            <td><a href='./controller/update.php?id=".$row['id']."'><input class='myclass' type='button' value='Update'/></a></td>
                            <td><a href='./controller/delete.php?id=".$row['id']."'><input class='myclass' type='button' value='Delete'/></a></td>
                        </tr>";
                    }
                }else{
                    echo"
                    <script type='text/javascript'>
                    if (confirm('Zero Result! Database is Empty! Please click [OK] to add datas!')){
                         location.href='./register.php';
                    }
                    </script>";
                }
                mysqli_close($conn);
                    
                ?>
                </table>
                <br>
                <hr>
                <a href="register.php"><input type="button" value="Add User"></a>
                
        </div>
    </div>
    
</body>
</html>