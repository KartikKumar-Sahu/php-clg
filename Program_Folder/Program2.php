<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple PHP Data Types Example</title>
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

    <h1>PHP Data Types Example</h1>

    <h2>1. String</h2>
    <p>A <strong>string</strong> is a sequence of characters enclosed in quotes.</p>
    <?php
        $greeting = "Hello, PHP!";
        echo "<div class='example'>\$greeting = \"$greeting\";</div>";
        echo "<div class='example'>Output: $greeting</div>";
    ?>

    <h2>2. Integer</h2>
    <p>An <strong>integer</strong> is a whole number, without a decimal point.</p>
    <?php
        $age = 30;
        echo "<div class='example'>\$age = $age;</div>";
        echo "<div class='example'>Output: $age</div>";
    ?>

    <h2>3. Float</h2>
    <p>A <strong>float</strong> is a number with a decimal point.</p>
    <?php
        $height = 5.9;
        echo "<div class='example'>\$height = $height;</div>";
        echo "<div class='example'>Output: $height</div>";
    ?>

    <h2>4. Boolean</h2>
    <p>A <strong>boolean</strong> is either <code>true</code> or <code>false</code>.</p>
    <?php
        $isStudent = true;
        echo "<div class='example'>\$isStudent = $isStudent;</div>";
        echo "<div class='example'>Output: $isStudent</div>";
    ?>

    <h2>5. Array</h2>
    <p>An <strong>array</strong> is a collection of values stored in a single variable.</p>
    <?php
        $fruits = array("Apple", "Banana", "Cherry");
        echo "<div class='example'>\$fruits = array('Apple', 'Banana', 'Cherry');</div>";
        echo "<div class='example'>Output: " . $fruits[0] . "</div>";  // Outputs "Apple"
    ?>

    <h2>Conclusion</h2>
    <p>This simple PHP script demonstrates the basic data types used in PHP: Strings, Integers, Floats, Booleans, and Arrays. Each type is useful in different scenarios depending on the kind of data you're working with.</p>

</body>
</html>
