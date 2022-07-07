<?php
    $sSentence1 = "The quick brown fox";
    $sSentence2 = "The quick brown fox jumps over the lazy dog";
    $sSentence3 = "2,543.12";

    $aSentence1 = explode(" ", $sSentence1);
    $aSentence2 = explode(" ", $sSentence2);

    $sOutput2 = "";

    for($i = 0; $i < 5; $i++) {
        if ($i === 4)
            $sOutput2 .= $aSentence2[$i];
        else
            $sOutput2 .= $aSentence2[$i]." ";        
    }
    $sOutput3 = str_replace(",", "", $sSentence3);

    echo "a. $aSentence1[0] <br />";
    echo "c. $sOutput2 <br />";
    echo "c. $sOutput3";
?>