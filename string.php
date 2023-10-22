<?php
$string = "Ghadah Aljohani";
echo $string;
echo "<br>";
echo strtolower($string); // to lower litters
echo "<br>";
echo strtoupper($string);// to upper litters
echo "<br>";
echo strlen($string); // return the length of the string 
echo "<br>";
echo $string[0]; // string index 0 
echo "<br>"; 
echo str_replace ("Ghadah","GHADAH", $string); // replace strings
echo "<br>";
echo substr ($string , 6 );
?>