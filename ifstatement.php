<?php 

$title = 'If Statement';
require_once 'includes/header.php';
?>    


<?php

//An if statement that will carry out an action based on the value of the variables 
echo '<h2>If statement </h2>';

$grade = 50;

if($grade <= 20){

    echo'<h3 style="color:green;"> You Have passed! </h3>';

} else{

    echo'<h3 style="color:red;"> You Have Failed! </h3>';
}

$grade = 'f';

if($grade=='A'|| $grade==''){

    echo'<h3 style="color:green;"> You Are A Sperstar you passed! </h3>';

}elseif ($grade=='B'){

    echo'<h3 style="color:yellow;"> You Are A Dwarf star burn a little brighter! </h3>';

}else{

    echo'<h3 style="color:red;"> You are a red giant, you are on your way out! </h3>';
}

?>

<?php require_once 'includes/footer.php';?>    