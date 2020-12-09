<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FizzBuzz</title>
</head>
<body>
    <?php
    function fizzBuzz(){
    for($x=1;$x<=100;$x++){
        if($x%3==0 && $x%5==0){
            echo("FizzBuzz");
        }elseif($x%3==0){
            echo("Fizz");
        }elseif($x%5==0){
            echo("Buzz");
        }else{
            echo($x);
        }
        echo("<br>");
       
    }
}
fizzBuzz();
        
    ?>
</body>
</html>