<?php 
$title= "SWitch";
include 'includes/header.php' 
?>

    <h1>SWITCH STATEMENT</h1>
    <?php
        $grade = 'A';
        switch($grade){
            case 'A':
                echo "<h2>YOU HAVE A GOOD KNOWLEDGE MAN!</h2>";
                break;
            case 's':
                echo "<h2>YOU HAVE A GOOD KNOWLEDGE MAN!</h2>";
                break;
            case 'B':
                echo "<h2>YOU DID WELL MAN!</h2>";
                break;
            default:
                echo "<h2>YOU HAVE FAILED MAN!</h2>";
                break;
        }
    ?>
<?php require 'includes/footer.php' ?>
