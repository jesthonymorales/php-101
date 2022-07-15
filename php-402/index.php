<?php

$sXmlFile = simplexml_load_file('students.xml');

$aStudents = $sXmlFile->student;
foreach($aStudents as $nKey => $sValue) {
    echo "Id: ". $sValue->id."<br />";
    echo "Name: ". $sValue->name."<br />";
    echo "Gender: ". $sValue->gender."<br />";
    echo "Section: ". $sValue->section."<br /><br />";
}

?>