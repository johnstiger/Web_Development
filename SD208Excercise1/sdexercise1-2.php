<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chess Board</title>
    <style>
    table,td{
        border:1px solid black;
        width: 500px;
        height: 50px;
    }
    
    </style>
</head>
<body>
<center>
<h1>Chess Board</h1>

  <table>
<?php
for($row = 0;$row<=7;$row++){
    echo("<tr>");   
    for($column = 1;$column<=8;$column++){
        $plus=$row+$column;
        if($plus%2==0){
            echo("<td></td>");
        }
        else{
            echo("<td style = background-color:black></td>");
        }
        
    }
    echo("</tr>");
}
?>
  </table>
  </center>
</body>
</html>