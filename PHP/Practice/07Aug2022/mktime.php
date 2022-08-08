<?php
 echo mktime(2022);
 echo "<br>";
 $time = mktime(06,00,10, 1,1,2022); // akta gotona jakhon ghotbe sei time ta abong je projonto time ta ber korbo sei date ta dite hobe;
 echo date("d/m/y, $time");
 ?>

 <?php

 $current = time();
 echo "<br>";
 $time = mktime(06,00,10, 7,1,2022);
 $diff= $current-$time;
 $days = round($diff/60/60/24); // akane 1st 60 dara se, 60 dara minit last 24 dara din ber kora hoice;
 echo $days;
 ?>