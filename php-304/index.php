<?php
    echo "© ".date("Y")." PHP Training - C&T <br /><br />";

    $dDate = date("Y-m-d");
    $dBday = date("Y-m-d", strtotime(date("Y-07-26")));
    
    if ($dDate < $dBday) {
        echo ((strtotime($dBday)- strtotime($dDate)) / 3600) / 24 . " day/s before your birthday!<br /><br />";
    } else {
        echo "Already Pass";
    }

    $dDate1 =   "1993-09-01";
    $dDate2 =   "2022-09-01";

    echo ((strtotime($dDate2)- strtotime($dDate1)) / 3600) / 24 . " day/s difference!<br />";
?>