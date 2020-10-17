<?php 

$title = 'Switch Statement';
require_once 'includes/header.php';
?>   

<H1>Switch Statement</H1>

<?php 
$grade ="A";

switch($grade){

case 'A':
        echo'<h3 style="color:green;"> You Are A Sperstar you passed! </h3>';
    break;

case 'B':
        echo'<h3 style="color:yellow;"> You Are A Dwarf star burn a little brighter! </h3>';
    break;

default:
        echo'<h3 style="color:red;"> You are a red giant, you are on your way out! </h3>';
    break;
}


?>

<?php require_once 'includes/footer.php'; ?>
