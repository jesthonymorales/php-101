<?php

    $nAge = 21;

    if ($nAge >= 15 && $nAge <= 18) {
        $sCountry = 'Singapore';
    } else if ($nAge == 19) {
        $sCountry = 'United Kingdom';
    } else if ($nAge >= 20 && $nAge <= 23) {
        $sCountry = 'Canada';
    }

    echo "Country: ".$sCountry."<br />";
    echo "Vacation: ".Vacation($sCountry)."<br />";

    function Vacation($sCountry) {
        $sVacation = "";
        switch($sCountry) {
            case 'Singapore': $sVacation = 'France'; break;
            case 'United Kingdom': $sVacation = 'USA'; break;
            case 'Canada': $sVacation = 'Philippines'; break;
            default: $sVacation = 'Invalid Country'; break;
        }

        return $sVacation;
    }
?>