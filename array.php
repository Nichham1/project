<?php 

$title = 'Arrary';
require_once 'includes/header.php';
?>   

 <h1>Arrary</h1>

 <?php 
 
 //variable 
    $num = 3;
 //arrary 
 $numbers = array(1,2,3,4,5,6,7,8,9,10);

 echo "<p>The number in the 6th place is: $numbers[5]</p>";

 echo  "<p>$numbers[2]</p>" ;

 $sizeof = count($numbers);
 echo "<p>The size of array numbers is: $sizeof </p>";

 for($i=0 ; $i < $sizeof; $i++){

    echo "<p>The number in position $i is: $numbers[$i]</p>";

 }
 ?>

<?php require_once 'includes/footer.php'; ?>
