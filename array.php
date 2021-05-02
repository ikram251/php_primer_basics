<?php 
$title= "Array";
include 'includes/header.php' 
?>

<h2>ARRAYs</h2>
<?php
//a variable 
$num = 3;

//an array
//only one data type is stored
//a php is allowed to store more than one type
$numbers = array(1,2,3,4,5,6,7,8,9,10);
$size = count($numbers);
echo "<p>The array size is : $size </p>";
for($i = 0 ; $i<$size; $i++){
    echo $numbers[$i];
    echo "<br>";
}

?>

<?php require 'includes/footer.php' ?>
