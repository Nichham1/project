<?php 
$title = 'Functions';
require_once 'includes/header.php';
?>  

<h1>Functions</h1>

<?php 

//Defining a Functions

function writeMessage(){

    echo "You are really a nice person, Have a nice time! <br/>";
}

//Calling a Function 
writeMessage();

echo "<hr/>";

writeMessage();

//Functions with Parameters 

function addFunction($num1 , $num2){

    $sum = $num1 + $num2;
    $num2 = $num2 +1;
    echo "The sum of $num1 and $num2 is : $sum <br/>";
    
}

function changeNum(&$num){

    $num+=10;
}

function returnProduct($num1, $num2){
    $prod = $num1 * $num2;
  return $prod;
}


$num = 500;
addFunction(10 , 20);
addFunction(10 , $num);
echo $num.'<br/>';
addFunction(10 , "50");

changeNum($num);
echo $num.'<br/>';

echo returnProduct(10,200).'<br/>';

?>

<?php require_once 'includes/footer.php'; ?>
