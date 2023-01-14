<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  

$cars = array("BMW", "VOLVO", "COLORRA");
foreach($cars as $value)
{
echo $value."<br>";
}
// for loop (index array)

for($i = 0 ;$i < count($cars); $i++){
    echo $cars[$i];
}

//

for($i = 0 ;$i < 3; $i++){
    echo $cars[$i];
}

// froeach loop associative array

 $persons = array("Peter" => 50, "Jone" => 60, "harry" =>45);
    foreach($persons as $x => $v){
        echo "Key: ".$x . ", value: " .$v;
    }
    echo "<br>";

// PHP FUNCTION

function summation($v1, $v2){
    $sumValue = $v1 + $v2;
    return $sumValue;
}
    echo summation(40,60);
    echo "<br>";
//

function substraction($v1, $v2){
    $sumValue = $v1 - $v2;
    return $sumValue;
}

echo substraction(100,60);
//  Supaer Global Variables

var_dump($_SERVER);








?>
    
</body>
</html>