<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Operators Explained</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        h1, h2 {
            color: #333;
        }
        .example {
            background-color: #f4f4f4;
            padding: 10px;
            border: 1px solid #ddd;
            font-family: Consolas, monospace;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h1>PHP Operators Example</h1>

    <h2>1. Arithmetic Operators</h2>
    <p>Arithmetic operators are used to perform basic mathematical operations like addition, subtraction, etc.</p>
    
    <?php
        $a = 10;
        $b = 5;
        
        echo "<div class='example'>\$a = $a, \$b = $b;</div>";
        echo "<div class='example'>Addition: \$a + \$b = " . ($a + $b) . "</div>";
        echo "<div class='example'>Subtraction: \$a - \$b = " . ($a - $b) . "</div>";
        echo "<div class='example'>Multiplication: \$a * \$b = " . ($a * $b) . "</div>";
        echo "<div class='example'>Division: \$a / \$b = " . ($a / $b) . "</div>";
        echo "<div class='example'>Modulus: \$a % \$b = " . ($a % $b) . "</div>";
    ?>

    <h2>2. Assignment Operators</h2>
    <p>Assignment operators are used to assign values to variables.</p>
    
    <?php
        $x = 10;
        $x += 5;  // Same as $x = $x + 5;
        echo "<div class='example'>\$x = $x (after using +=)</div>";
        
        $x -= 3;  // Same as $x = $x - 3;
        echo "<div class='example'>\$x = $x (after using -=)</div>";
    ?>

    <h2>3. Comparison Operators</h2>
    <p>Comparison operators are used to compare two values.</p>
    
    <?php
        $y = 20;
        $z = 20;
        
        echo "<div class='example'>\$y = $y, \$z = $z;</div>";
        echo "<div class='example'>Equal (==): " . ($y == $z ? "True" : "False") . "</div>";
        echo "<div class='example'>Identical (===): " . ($y === $z ? "True" : "False") . "</div>";
        echo "<div class='example'>Not Equal (!=): " . ($y != $z ? "True" : "False") . "</div>";
        echo "<div class='example'>Greater Than (>): " . ($y > $z ? "True" : "False") . "</div>";
        echo "<div class='example'>Less Than (<): " . ($y < $z ? "True" : "False") . "</div>";
    ?>

    <h2>4. Logical Operators</h2>
    <p>Logical operators are used to combine conditional statements.</p>
    
    <?php
        $a = true;
        $b = false;
        
        echo "<div class='example'>\$a = $a, \$b = $b;</div>";
        echo "<div class='example'>Logical AND (&&): " . (($a && $b) ? "True" : "False") . "</div>";
        echo "<div class='example'>Logical OR (||): " . (($a || $b) ? "True" : "False") . "</div>";
        echo "<div class='example'>Logical NOT (!): " . ((!$a) ? "True" : "False") . "</div>";
    ?>

    <h2>5. Increment/Decrement Operators</h2>
    <p>Increment and decrement operators are used to increase or decrease the value of a variable by 1.</p>
    
    <?php
        $i = 5;
        echo "<div class='example'>\$i = $i;</div>";
        echo "<div class='example'>Increment (\$i++): " . ($i++) . "</div>";  // Post-increment
        echo "<div class='example'>Post-Increment Result: \$i = $i</div>";
        
        $i = 5;  // Resetting for pre-increment
        echo "<div class='example'>Pre-Increment Result: " . (++$i) . "</div>";  // Pre-increment
        echo "<div class='example'>\$i = $i (after pre-increment)</div>";
        
        $i = 5;
        echo "<div class='example'>\$i = $i;</div>";
        echo "<div class='example'>Decrement (\$i--): " . ($i--) . "</div>";  // Post-decrement
        echo "<div class='example'>Post-Decrement Result: \$i = $i</div>";
        
        $i = 5;  // Resetting for pre-decrement
        echo "<div class='example'>Pre-Decrement Result: " . (--$i) . "</div>";  // Pre-decrement
        echo "<div class='example'>\$i = $i (after pre-decrement)</div>";
    ?>

    <h2>6. String Operator</h2>
    <p>The string operator (`.`) is used to concatenate two strings.</p>
    
    <?php
        $firstName = "John";
        $lastName = "Doe";
        echo "<div class='example'>\$firstName = \"$firstName\", \$lastName = \"$lastName\";</div>";
        echo "<div class='example'>Full Name: " . $firstName . " " . $lastName . "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>PHP operators are essential for performing operations on variables. The examples above demonstrate how different operators work in PHP, including arithmetic, comparison, logical, increment/decrement, and string operators.</p>

</body>
</html>
