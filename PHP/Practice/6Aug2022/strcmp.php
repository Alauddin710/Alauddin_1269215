<?php 

$pswd= "Alo@gmail.com";
$pswd2= "alo@gmail.com";
if(strcmp($pswd, $pswd2)!=0){ // ifer modde 0 kaj kore na tai aivabe deoa hoice; akane doitar modde compare kora hoice
echo " Password does not match";
}else {
    echo " Password match";
}
?>