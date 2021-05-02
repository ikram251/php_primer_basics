<?php 
$title= "User defined Functions";
include 'includes/header.php' 
?>

    <h1>USER DEFINED FUNCTIONS</h1>
    <?php
        //Difine a function 
        function Myfunction(){
            echo "I love to do PHP"."<br>";
        }
        

        //calling a function
        Myfunction();


        //define a functions with arguments
        function Add($a,$b){
            $sum = $a+$b;
            echo "The sum of $a and $b is:".$sum."<br/>";
        }

        function changeNumber(&$num){ // it passes by reference storage area of the variable and then varaible is modified.
            $num+=10;
        }
        Add(10,20);
        $num = 500;
        changeNumber($num);
        Add(10,$num);
        Add("10","$num"); // php is not tightly typed.
        changeNumber($num);
        echo $num."<br>";
        function returnProduct($a,$b){
            $prod = $a * $b;
            return $prod;
        }
        $returned_value = returnProduct(10,200);  
        print $returned_value."<br>";// simillar to echo 

    ?>
<?php require 'includes/footer.php' ?>
