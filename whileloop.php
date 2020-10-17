<?php 

$title = 'While Loop';
require_once 'includes/header.php';
?>   


<H1>While Loop</H1>

<?php
    $grade = 0;

    //while($grade < 10){
    //   echo'<p>I am less than 10! </p>';
   // }

    while($grade < 10){
      echo'<p>I am less than 10! </p>';
      $grade++;
   }

   echo 'EXIT LOOP';

; ?>

<?php require_once 'includes/footer.php'; ?>
