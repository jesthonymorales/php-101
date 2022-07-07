<?php
    $aString = "madam";
    
    echo isPalindrome($aString);

    function isPalindrome($string){
        if ($string === strrev($string)) 
            return 1;
        else 
            return 0;
    }

?>