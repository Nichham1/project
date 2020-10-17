<?php 

$title = 'Home';
require_once 'includes/header.php';
?>    
 <div class="jumbotron jumbotron-fluid" >
  <div class="container">
    <h2 style = "text-align: center;">Follow each link to the page example</h2>
    <br/>
    <hr>
    <ul style = "text-align: center;">
        <li><a class="btn btn-primary btn-lg" role="button" href="array.php"> simple array and printouts</a></li> <br/>
        <li><a class="btn btn-primary btn-lg" role="button" href="forloop.php"> simple for loop </a></li> <br/>
        <li><a class="btn btn-primary btn-lg" role="button" href="dowhileloop.php"> simple do while</a></li> <br/>
        <li><a class="btn btn-primary btn-lg" role="button" href="whileloop.php"> simple while loop</a></li> <br/>
        <li><a class="btn btn-primary btn-lg" role="button" href="ifstatements.php"> simple if statement</a></li> <br/>
        <li><a class="btn btn-primary btn-lg" role="button" href="switchstatement.php"> simple switch statement</a></li> <br/>
    </ul>
    </div>
    </div>

    <div class="container">
    <!--- Basic HTML---->
    <H1>Hello World - PHP primer</H1>
    <br/>
    <?php 
        //Printing to  HTML using echo 
        echo 'Hello PHP';
        echo '<br/>';
        echo 'second line';
        echo '<br/>';
    ?>

    <?php  
      //declear variable 
      $name = 'Nicholas Hamiton';
      $age = 50;
      //echo variable 
      echo $name;
      echo '<h1>My name is: '.$name.'</h1>';
      echo '<h1>My age is: '.$age.'</h1>';

     
    ?>

    </div>

 <?php require_once 'includes/footer.php'; ?>