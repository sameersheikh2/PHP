<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Project</title>
</head>
<body>
    <div class="container">
    <form action="Trial.php"  method="post" class="form">
        type Name:<input type="text" name="name" id="name">
        <br>
        type Age:<input type="number" name="age" id="age">
        <input type="Submit"><br>
        Qualification: 
        <input type="checkbox" name="postGrad" id="postGrad">Post Graduated
           <br> <small class="sm">*select this option if you're qualify</small>
           <br>
           <br>
           Num.1: <input type="number" name="num1" id="num1">
           Operator: <input type="text" name="operator" id="operator">
           Num.2: <input type="number" name="num2" id="num2">
           <input type="submit" >

    </form>
    </div>
    <br>
    <?php
    $Name = $_POST["name"];
    $Age = $_POST["age"];
    echo "Your name is $Name<br>"; 
    echo "your age is $Age<br>";

    $Eligible = $_POST["postGrad"];

    if($Eligible && $Age>= 18){
        echo "You're eligible";
    } else {
        echo "You're not eligible<br>
        <br>";
    }
    
    $Num1 = $_POST["num1"];
    $Num2 = $_POST["num2"];
    $Operator = $_POST["operator"];
    if($Operator == "+"){
       echo "Result is =";
        echo  $Num1 + $Num2;

    } elseif($Operator == "-"){
        echo "Result is =";
        echo $Num1 - $Num2;
    }
    elseif($Operator == "*"){
        echo "Result is =";
        echo $Num1 + $Num2;
    }
    elseif($Operator == "/"){
        echo "Result is =";
        echo $Num1 / $Num2;
    } else {
        echo "Invalid operator";
    }


    ?> 
</body>
</html>