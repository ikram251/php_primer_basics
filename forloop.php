<?php 
$title= "For loop";
include 'includes/header.php' 
?>
    <h1>FOR LOOP</h1>
    <?php
    //for loop
    for($count = 0; $count<10; $count++){
        echo $count;
        echo "<br>";
    }
    
    
    ?>
<?php require 'includes/footer.php' ?>
