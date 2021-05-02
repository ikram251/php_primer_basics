<?php 
$title= "String";
include 'includes/header.php' 
?>

    <h1>STRINGS MANUPULATIONS</h1>
    <?php
    //echo "Hello world";
    $pharse1 = "Student who came late";
    $pharse2 = "In class, stand with Rock";
    $name = " ikram shaik ";
    //echo $pharse1;
    //echo $pharse2;
    //concatication
    echo $pharse1.", named Tiffany, ".$pharse2;
    echo "<br>";
    //String transformation
    echo "Uppercase first letter:".ucfirst($name)."<br>";
    echo "Uppercase first letter of each word:".ucwords($name)."<br>";
    echo "Upper case:".strtoupper($name)."<br>";
    echo "Lower case:".strtolower("HELLO WORLD!")."<br>";
    echo "Reverse String:".strrev($name)."<br>";
    echo "<hr>"; //generates a line
    echo "repeat String:". str_repeat($name,10)."<br>";
    //nested functions
    echo "repeat String:". strtoupper(str_repeat($name,10))."<br>";
    echo "Get a sub string:".substr($name,1,3)."<br>"; //output:kram
    echo "Get a position:" .strpos($name,"s")."<br>";
    echo "Find a charcter:".strchr($name,"a")."<br>";
    echo "find the length of the string:".strlen($name)."<br>";
    //Triming--it elminates the space at front and back  in a string
    echo "Trim the string:"."YS".trim($name)."<br>";
    echo "Trim the string to the left :"."YS".ltrim($name)."<br>";
    echo "Trim the string to the right:"."YS".rtrim($name)."<br>";



   ?>
<?php require 'includes/footer.php' ?>
