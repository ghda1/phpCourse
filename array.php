<h1> ARRAY </h1>
<br<
<?php
$family = array("Ghadah","Deef Allah","Aljohani");
echo "<br>";
echo $family [0];
echo "<br>";
echo $family [1];
echo "<br>";
echo $family [2];
echo "<br>";
echo count($family);

//Associative Array
$family2 = [
    "FirstName" => "Ghadah",
    "MidName" => "Deef Allah",
    "lastName" => "Aljohani"];
echo "<br>";
echo $family2 ["FirstName"];
echo "<br>";
echo $family2 ["MidName"];
echo "<br>";
echo $family2 ["lastName"];
echo "<br>";
?>
