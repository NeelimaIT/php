
//* If else Condition
<?php
$totalnumber= 750;
$percentage= $totalnumber/1000*100;
echo "The Percentage is:",$percentage;
echo "<br>";
if($percentage>=80){
    echo"A+";
}elseif($percentage>=60){
    echo"A grade";
}else if($percentage>=50){
    echo"B grade";
}else{
    echo"you will be considered as a failure";
}
?>
