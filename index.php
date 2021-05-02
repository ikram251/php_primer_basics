<?php 
$title= "Index";
include 'includes/header.php' 
?>
<h1><?php echo $title; ?></h1>
    <!-- echo is print statement -->
    <?php //inside php tags regular html tags are allowed.
        echo 'Hello PHP!';
        echo '<br>'; // we can use html tags to generate space or the current line. 
        echo 'Now this line is next line'; 
    ?>
    <?php 
        $name = 'IKRAM SHAIK'; // $ is for declaration of variable and 'name' is a variable name. 
        $age = 21;
        echo '<br>';
        echo $name;
        echo '<h1> '.$name.' childhood is </h1>'; // concatination.
        echo '<h1> '.$name.' childhood is </h1>'; // concatination.
        //echo '<br>';
        echo '<h1>My age is '.$age.' </h1>';
        // another way using double quotes.
        echo "<h1>My age is $age </h1>";
        echo "<h1> $name childhood is </h1>"; // concatination.
        
    ?>
<?php require 'includes/footer.php' ?>