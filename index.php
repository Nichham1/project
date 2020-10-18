<?php

$title = 'Home';
require_once 'includes/header.php';
?>
<div id="displayhome" class="jumbotron jumbotron-fluid">
  <div class="container" style="text-align: center;">
    <h2 >Follow each link to the page example</h2>
    <br />
    <hr>
    <!--- <ul style = "text-align: center;"> ---->
    <a class="btn btn-primary btn-lg nav-link" role="button" href="array.php"> Array and printouts</a>
    <a class="btn btn-primary btn-lg nav-link" role="button" href="forloop.php">For loop </a> 
    <a class="btn btn-primary btn-lg nav-link" role="button" href="dowhileloop.php"> Do while</a> 
    <a class="btn btn-primary btn-lg nav-link" role="button" href="whileloop.php">While loop</a>  
    <a class="btn btn-primary btn-lg nav-link" role="button" href="ifstatement.php">If statement</a>  
    <a class="btn btn-primary btn-lg nav-link" role="button" href="switchstatement.php"> Switch statement</a>  
    <a class="btn btn-primary btn-lg nav-link" role="button" href="stringmanipulation.php"> String manupulation</a> 
    <br />
    <hr>
    <!-- </ul> -->
  </div>
</div>

<div class="container">
  <!--- Basic HTML---->
  <H1>Hello World - PHP primer</H1>
  <br />
  <?php
  //Printing to  HTML using echo 
  echo 'Hello PHP';
  echo '<br/>';
  echo 'second line';
  echo '<br/>';
  ?>

  <?php
  //declear variable 
  $name = 'John Doe';
  $age = 50;
  //echo variable 
  echo $name;
  echo '<h1>My name is: ' . $name . '</h1>';
  echo '<h1>My age is: ' . $age . '</h1>';


  ?>

</div>

<?php require_once 'includes/footer.php'; ?>