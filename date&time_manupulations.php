<?php 
$title= "Date and Time";
include 'includes/header.php' 
?>

    <h1>DATE AND TIME MANUPULATIONS</h1>
    <?php
        $datenow = getdate();
        echo "Today's data: <br/>";
        echo  $datenow['mday'].'<br/>';
        echo  $datenow['mon'].'<br/>';
        echo  $datenow['year'].'<br/>';

        echo "Today's Date: ". $datenow['mday']. "/".$datenow['mon']."/".$datenow['year'];
        echo "<br/>";
        #echo time()."<br/>"; //unreadable time value.

        echo "Today is " . date("d/m/Y")."<br>"; // representing day/month/year.
        echo "Today is " .date("l")."<br/>"; //represent the day of the week.
        

        echo "The Time is ".date("h:i:sa")."<br/>"; // it takes the machine time.
        date_default_timezone_set("Asia/kolkata");
        echo "The time is " . date("h:i:sa")."<br/>";
        $d=mktime(11, 14, 54, 8, 12, 2014);
        echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br/>";
        $d=strtotime("10:30pm April 15 2014");
        echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br/>";

        $d=strtotime("tomorrow");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("next Saturday");
        echo date("Y-m-d h:i:sa", $d) . "<br>";

        $d=strtotime("+3 Months");
        echo date("Y-m-d h:i:sa", $d) . "<br>";
        $startdate=strtotime("Saturday");
        $enddate=strtotime("+6 weeks", $startdate);
        
        while ($startdate < $enddate) {
          echo date("M d", $startdate) . "<br>";
          $startdate = strtotime("+1 week", $startdate);
        }
        $d1=strtotime("July 04");
        $d2=ceil(($d1-time())/60/60/24);
        echo "There are " . $d2 ." days until 4th of July.";
    ?>
<?php require 'includes/footer.php' ?>
