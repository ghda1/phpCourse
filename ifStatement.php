<?php
$num1 = $_GET ["number1"];
$num2 = $_GET ["number2"];
$op = $_GET ["op"];

if(empty($num1)){
    $result = "The First Number Is Empty";
}elseif(empty($num2)){
    $result = "The Second Number Is Empty";
}elseif(empty($op)){
    $result = "Please Enter An Operation!";
}else{
    if ($op === "+"){
        $result = $num1  + $num2;
    }elseif($op === "-"){
        $result = $num1  - $num2;
    }elseif($op === "*"){
        $result = $num1  * $num2;
    }elseif($op === "/"){
        $result = $num1  / $num2;
    }
}  

?>
<head>
    <link rel = "stylesheet" href = "bootstrap.min.css" >
</head>

<body>
    <div class = "container">
        <form action = "ifStatement.php" method = "GET" class = "form">
            <div> 
                <label> Enter The First Number: </label>
                <input type = "number"  name = "number1" class = "form-control">
            </div>
            <br>
            <div> 
                <label> Enter The Second Number: </label>
                <input type = "number"  name = "number2" class = "form-control">
            </div>
            <br>
            <div>
                <label> Enter The Operation: </label>
                <input type = "text"  name = "op" class = "form-control">
            </div>
            <br>
            <div class = "alert alert-success">
                <?php
                echo $result
                ?>
            </div>
            <br>
            <input type = "submit"  class = "btn btn-primary">
        </form>    
    </div>    
</body>