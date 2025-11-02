<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Ternary Operator: Greatest of Three Numbers</title>
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

    <h1>PHP Ternary Operator: Greatest of Three Numbers</h1>

    <h2>Finding the Greatest Number</h2>
    <p>The <strong>ternary operator</strong> can be used to find the greatest of three numbers in PHP. It works as follows:</p>
    <pre>
    (condition) ? expression_if_true : expression_if_false;
    </pre>

    <p>Let's take three numbers and find the greatest one using the ternary operator.</p>

    <?php
        // Example numbers
        $num1 = 10;
        $num2 = 20;
        $num3 = 15;

        // Using ternary operator to find the greatest number
        $greatest = ($num1 >= $num2) ? (($num1 >= $num3) ? $num1 : $num3) : (($num2 >= $num3) ? $num2 : $num3);

        echo "<div class='example'>\$num1 = $num1, \$num2 = $num2, \$num3 = $num3;</div>";
        echo "<div class='example'>The greatest number is: $greatest</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The ternary operator is used to compare <code>$num1</code>, <code>$num2</code>, and <code>$num3</code>.</li>
        <li>First, we check if <code>$num1</code> is greater than or equal to <code>$num2</code>.</li>
        <li>If <code>$num1</code> is greater, we then check if <code>$num1</code> is also greater than <code>$num3</code>.</li>
        <li>If both conditions are true, <code>$num1</code> is the greatest; otherwise, <code>$num3</code> is the greatest.</li>
        <li>If <code>$num1</code> is not greater than <code>$num2</code>, we check if <code>$num2</code> is greater than <code>$num3</code> and assign <code>$num2</code> as the greatest.</li>
        <li>If neither <code>$num1</code> nor <code>$num2</code> is the greatest, <code>$num3</code> is the greatest.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The ternary operator provides a simple and compact way to perform conditional operations, such as finding the greatest of three numbers. It is useful for short conditions and helps to keep the code clean.</p>

</body>
</html>
