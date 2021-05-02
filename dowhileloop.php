<?php 
$title= "Do while";
include 'includes/header.php' 
?>

    <h1>DO WHILE LOOP And it is a post condition loop</h1>
    <?php
    $count = 0;
    do{
        echo "<p>$count</p>";
        $count++;
    }while($count<10);
    ?>
<?php require 'includes/footer.php' ?>
