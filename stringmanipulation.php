<?php 

$title = 'String manupulation';
require_once 'includes/header.php';
?>   

<?php 

//concatination of strings 

$phrase1 ="I love pigs";
$phrase2 ="in a blanket";
$name = "John Doe";
echo $phrase1;
echo $phrase2;
echo "<br/>";
echo $phrase1.", baked,".$phrase2;

//string transformation 
echo 'Uppercase first letter'.ucfirst($name).'<br/>';
echo 'Uppercase first letter of each word'.ucwords($name).'<br/>';
echo 'Upper case '.strtoupper($name).'<br/>';
echo 'lower case'.strtolower("THIS WAS ALL UPPER CASE").'<br/>';
echo '<Hr/>';
echo 'Repeat String'. str_repeat('a',10).'<br/>';
echo 'Repeat String - Nested Function'. strtoupper(str_repeat('a',10)).'<br/>';
echo 'Get a Substring: '.substr($name,3,5).'<br/>';
echo 'Get position of a String: '.strpos($name,'h').'<br/>';

echo 'Find Character "A": '.strchr($name,'a').'<br/>';

echo 'whitout Trim: '. "A". "BCD"."E".'<br/>';
echo 'Trim Space on both sides : '. "A". trim("BCD")."E".'<br/>';
echo 'Trim Space on both sides : '. "A". ltrim("BCD")."E".'<br/>';
echo 'Trim Space on both sides : '. "A". rtrim("BCD")."E".'<br/>';

echo 'Replace String with another: '. str_replace("in", "out",$phrase2).'<br/>';
?>



<?php require_once 'includes/footer.php'; ?>