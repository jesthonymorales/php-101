<?php
    $sText = "The quick brown fox jumps over the lazy dog ";

    echo "For Loop <br /><br />";
    for($i = 0; $i < 10; $i++) {
        if ($i == 4) {
            echo $sText." but the dog woke up and barked at the fox<br />";
        } else {
            echo $sText."<br />";
        }
    }
    echo "<br /><br />";
    echo "While <br /><br />";

    $i = 0;
    while($i < 10) {

        if ($i == 4) {
            echo $sText." but the dog woke up and barked at the fox<br />";
        } else {
            echo $sText."<br />";
        }
        $i++;
    }

    echo "<br /><br />";
    echo "Do While <br /><br />";
    $i = 0;
    do {
        if ($i == 4) {
            echo $sText." but the dog woke up and barked at the fox<br />";
        } else {
            echo $sText."<br />";
        }

        $i++;
    }while($i < 10)
?>