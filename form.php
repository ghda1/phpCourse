<form action = "form.php" method = "GET">
    First Name: <input type  = "text" name = "fname">
    <br>
    Last Name: <input type  = "text" name = "lname">
    <br>
    <input type = "submit">
</form>

<?php
$first = $_GET ["fname"];
$last =  $_GET ["lname"];
echo " YOUR FIRST NAME IS: $first 
YOUR LAST NAME IS: $last";
?>
