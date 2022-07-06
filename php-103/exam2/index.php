<?php
/*
    This function will calculate your Body Mass Index
    @param float Height (Inches)
    @param float Weight (Pounds)
*/
    function calculate_bmi_english($heightInches,$weightPounds){
        $index =0;
        // Check if height and weight are both NOT EQUAL to zero (0)
        if($heightInches !=0 && $weightPounds !=0)
            $index = round($weightPounds/($heightInches*$heightInches)* 703,2);
            $bmi="";

        // The compiler will only goes to next condition once the current condition returns false.
        // If $index is < 18.5 then the statement next to it will be shown
        if ($index < 18.5) {
            $bmi="underweight - BMI : " . $index;
        } else if ($index < 25) { // If $index is less than 25 and greater than 18.5 then the statement next to it will be shown
            $bmi="normal - BMI : ". $index;
        } else if ($index < 30) { // If $index is less than 30 and greater than 25 then the statement next to it will be shown
            $bmi="overweight - BMI : " . $index;
        } else { // If $index did not satisfy all the condition above then the statemen below will be shown
            $bmi="obese - BMI : " .$index;
        }
        // returns the output
        echo $bmi;
    }

    // call the function above
    calculate_bmi_english(69,150);
?>
