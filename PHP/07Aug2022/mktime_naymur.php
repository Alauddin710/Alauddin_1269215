<?php

    $lasttime = mktime(15, 25, 45, 8, 27, 2022);
                //Hour, Minute, Sec, Month, Day, Year

    $time = time();

    $diff = $lasttime - $time;

    //Calculating remaining time
    $sec = $diff % 60;          //Remaining Sec
    $diff = (int)($diff/60);    //New time in min

    $min = $diff % 60;          //Remaining min
    $diff = (int)($diff/60);    //New time in hrs

    $hrs = $diff % 24;          //Remaining hrs
    $diff = (int)($diff/24);    //New time in day

    $day = $diff % 30;          //Remaining day
    $mon = (int)($diff/30);     //New time in mon

    echo "<h3>Remaining time.</h3>";
    printf("Month: %d, Day: %d, Hours: %d, Min: %d, Sec: %d", $mon, $day, $hrs, $min, $sec);

?>