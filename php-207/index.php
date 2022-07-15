<?php
    $sFile = "read.txt";
    file_functions($sFile);

    function file_functions($sFile) {
        if (file_exists($sFile) === true) {
            echo $sFile." File Exists!<br />";

            $sContents =    file_get_contents($sFile);

            echo "Current Content  : ". $sContents."<br />";

            $ofile =    fopen($sFile, 'w');
            fwrite($ofile, 'Prepare for the new King.');
            fclose($ofile);

            $sNewContents =    file_get_contents($sFile);

            echo "New Content  : ". $sNewContents."<br />";
        } else {
            echo "File Does Not Exists!<br />";
        }
    }
?>