<?php 
$title= "While loop";
include 'includes/header.php' 
?>

<h2>WHILE LOOP and it is a pre condition loop</h2>
<?php
    $count = 0;
    while($count < 10){
        echo $count;
        echo "<br>";
        $count++;
    }
?>
    
    <?php require 'includes/footer.php' ?>
