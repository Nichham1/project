<?php 

$title = 'Do While Loop';
require_once 'includes/header.php';
?>   

<h1>Do While Loop</h1>

<?php
 $grade = 0;

    do{

        echo'<p> I am running </p>';

        $grade++; 

    }while($grade < 10);

; ?>


<?php require_once 'includes/footer.php'; ?>
