<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Calculator</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    
    $val = $_GET["operator"];

    if (empty($num1) || empty($num2) || empty($val)){
        $numErr = "Please put in two numbers and an operator";
    }
    if($num2 == 0 && $val == "Divide"){
        echo "$num1 / $num2 = Undefined";
    } else {
        
        switch($val) {
            case "Add":
                $result = $num1 + $num2;
                $operator= "+";
                break;
            case "Subtract":
                $result = $num1 - $num2;
                $operator= "-";
                break;
            case "Multiply":
                $result = $num1 * $num2;
                $operator= "*";
                break;
            case "Divide":
                $result = $num1 / $num2;
                $operator= "/";
                break;
            }
        $new_result = round($result, 3, PHP_ROUND_HALF_UP);
        echo "$num1 $operator $num2 = $new_result";
    }
    ?>
    <form name="input" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
            <input type="number" step="any" name="num1">
            <div class="operator-wrapper">
                <div class="add">
                    <input type="radio" name="operator" value="Add">
                    Add
                </div>
                <div class="subtract">
                    <input type="radio" name="operator" value="Subtract">
                    Subtract
                </div>
                <div class="multiply">
                    <input type="radio" name="operator" value="Multiply">
                    Multiply
                </div>    
                <div class="divide">
                    <input type="radio" name="operator" value="Divide">
                    Divide
                </div>
            </div>
            <input type="number" step="any" name="num2">
            
            <input type="submit" value="Submit">
            <?php echo $numErr;?>
        </form>
    </body>
</html>
