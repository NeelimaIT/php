<?php
$savings =100000;
$withdraw=20000;
if($withdraw<=$saving){
    $Requiredbalance=$saving-$withdraw;
    echo" $Requiredbalance";
}
else{
    echo" Balance is short";
}

?>