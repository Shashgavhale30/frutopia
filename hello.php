<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>Hello World</h1>";
    echo "<p>This is a simple PHP script.</p>";
    echo "<p>Current date and time: " . date("Y-m-d H:i:s") . "</p>";
    // Lorem, ipsum dolor.
    $num1 = 10;
    $num2 = 2;
    echo "Sum of $num1 and $num2 is : " . ($num1 + $num2) . "<br>";

    echo "<h1>Arithmetic Variables</h1>";
    echo "$num1+$num2 is :". $num1+$num2 ."<br>";
    echo "$num1-$num2 is : ". $num1-$num2 ."<br>";
    echo "$num1*$num2 is :". $num1*$num2 ."<br>";
    echo "$num1/$num2 is :". $num1/$num2 ."<br>";

    echo "<h1>Comparison Operators</h1>";
    echo var_dump(1==5) ."<br>";
    echo var_dump(2 >= 6) ."<br>";
    echo var_dump(3 <= 3) ."<br>";
    echo var_dump(4 != 4) ."<br>";
    echo var_dump(5 === 5) ."<br>";

    echo "<h1>Logical Operators</h1>";
    echo var_dump(1 && 0) ."<br>";
    echo var_dump(1 || 0) ."<br>";
    echo var_dump(0) ."<br>";
    echo var_dump(1) ."<br>";
    echo var_dump(1 xor 0) ."<br>";
 
    echo "<h1>Increment & Decrement Operators</h1>";
    echo $num1++ ."<br>";
    echo $num1-- ."<br>";
    echo ++$num1 ."<br>";
    echo --$num1 ."<br>";

    echo "<h1>Assignment Operators</h1>";
    $num2 += 1 ;
    echo "$num2" ."<br>";
    $num1 *= 5 ;
    echo "$num1" ."<br>";
   
    ?>
    <?php
    // $varname = (false or true);
    // $varname = "This is a Shashwati";
    // $varname = 34;
    $varname = false;
    echo var_dump( $varname ) ."<br>";  
    define("pi","3.14");
    echo pi ;
    ?>
</body>
</html>