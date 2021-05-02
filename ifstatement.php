<?php 
$title= "If statement";
include 'includes/header.php' 
?>

    <h1>IF STATEMENTS</h1>
    <?php
    //An if statement that will carry out an action based on the value of the variable:
        echo "<h2>if Statement</h2>";
        $grade = 50;
        // ===(looks for same data type && same value), ==(looks for same value) ,> ,< , >=, <= -- the operators. 
        if($grade >= 50){
            echo '<h3 style="color:green"> YOU HAVE PASSED</h3>';
        }
        else{
            echo '<h3 style="color:red"> YOU HAVE NOT PASSED</h3>';
        }
        //if-else if-else
        $grade = 'A';
        if($grade == 'A' || $grade == 's'){
            echo "<h2>YOU HAVE A GOOD KNOWLEDGE MAN!</h2>";
        }
        elseif($grade=='B'){
            echo "<h2>YOU DID WELL MAN!</h2>";

        }
        else{
            echo "<h2>YOU HAVE FAILED MAN!</h2>";
        }

    ?>
<?php require 'includes/footer.php' ?>

