<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
function countWords($str){
$str = strtolower($str);
$words = explode(' ', $str);
$counts = array_count_values(preg_replace('/[^a-zA-Z0-9-_\.]/','',$words)); 
$array_name = array();
foreach ($counts as $key => $value) {
    $array_name[$key] = $value;
    // echo $key . "  =  " . $value . '<br>';
}
print_r($array_name);

}
countWords ("As my grandfather went, arm over arm, his heart making sour little shudders against his ribs, he kept listening for a sound, the sound of the tiger, the sound of anything but his own feet and lungs.");
?>
</body>
</html>