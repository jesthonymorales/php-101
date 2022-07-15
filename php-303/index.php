<?php

class Country
{
    private $sName;
    private $sDesc;
    private $dStartYearColon;
    private $dEndYearColon;

    public function __construct($sName)
    {
        $this->setName($sName);
    }

    public function setName($sName)
    {
        $this->sName = $sName;
    }

    public function setDescription($sDesc)
    {
        $this->sDesc = $sDesc;
    }

    public function setYearsColonization($start, $end)
    {
        $this->dStartYearColon = $start;
        $this->dEndYearColon = $end;
    }

    public function getDetails()
    {
        $start = new DateTime($this->dStartYearColon);
        $end = new DateTime($this->dEndYearColon);
        $interval = $start->diff($end);

        return "
            Name: $this->sName<br>
            Description: $this->sDesc<br>
            Start: $this->dStartYearColon<br>
            End: $this->dEndYearColon<br>
            Total Colonization years: $interval->y <br><br>
        ";
    }
}

$spain = new country('Spain');
$america = new country('America');
$japan = new country('Japan');

$spain->setDescription('They have spanish bread');
$spain->setYearsColonization('01/01/1565', '01/01/1898');

$america->setDescription('They think the Earth is flat');
$america->setYearsColonization('01/01/1898', '01/01/1946');

$japan->setDescription('yamete kudasai');
$japan->setYearsColonization('01/01/1941', '01/01/1945');

echo $spain->getDetails();
echo $america->getDetails();
echo $japan->getDetails();