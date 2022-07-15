<?php
    $sMatch = "He was eating cake in the cafe";
    $sReplace = "Earth revolves around\nthe\tSun";
    $sSplit = "My favourite colors are red, green and blue";

    $sPregMatch = preg_match("/cake/", $sMatch);

    echo $sPregMatch."<br />";

    $sPregReplace = preg_replace("/\n|\t/", '-', $sReplace);

    echo $sPregReplace."<br />";

    $aPregReplace = preg_split("/,|, | /", $sSplit);
    
    print_r($aPregReplace);
?>