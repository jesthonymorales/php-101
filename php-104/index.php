<?php
    $aShoes = array('Nike', 'Adidas', 'Puma', 'Converse');

    echo "List of Shoes => ";
    print_r($aShoes);
    echo "<br />3rd Brand => ";
    echo $aShoes[2] . "<br /><br />";

    $aTeams = array('Lebron James' => "Lakers", 'Derrick Rose' => "Knicks", 'Steph Curry' => "Warriors");

    echo "List of Teams => ";
    print_r($aTeams);
    echo "<br />Steph Curry's Team => ";
    echo $aTeams['Steph Curry'] . "<br /><br />";

    $aFastFoods =   array(
        'Jollibee' => array('branches' => 12, 'managers' => 15, 'employees' => 50),
        'Mcdonalds' => array('branches' => 18, 'managers' => 10, 'employees' => 70),
        'Kfc' => array('branches' => 8, 'managers' => 9, 'employees' => 40),
    );

    echo "List of Fast Food Chains => ";
    print_r($aFastFoods);

    $sFfManager = "";
    $sFfEmployees = "";

    $nTempFfManager = 0;
    $nTempFfEmployee = 0;
    foreach($aFastFoods as $sFfName => $aChainVal) {
        
        if ($nTempFfManager !== 0)  {
            if ($aChainVal['managers'] < $nTempFfManager) {
                $nTempFfManager = $aChainVal['managers'];
                $sFfManager = $sFfName;
            }
        } else {
            $nTempFfManager = $aChainVal['managers'];
            $sFfManager = $sFfName;
        }

        if ($aChainVal['employees'] > $nTempFfEmployee) {
            $nTempFfEmployee = $aChainVal['employees'];
            $sFfEmployees = $sFfName;
        }
    }

    echo "<br />The chain that has least Managers: ".$sFfManager;
    echo "<br />The chain that has most Employees: ".$sFfEmployees;
?>