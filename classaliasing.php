<?php
class Obnoxiously_Long_Class_Name_Like_A_Great_String{
}

class_alias('Obnoxiously_Long_Class_Name_Like_A_Great_String','Longy');

$r = new ReflectionClass('Longy');
echo sprintf('getFileName: %s',$r->getFileName());
echo "\n"; // new line is only processed if enclosed in double quotes
echo sprintf('getName: %s',$r->getName());
echo "\n";

?>
