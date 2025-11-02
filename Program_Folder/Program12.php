<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formal and Actual Parameters in PHP</title>
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

    <h1>Understanding Formal and Actual Parameters in PHP</h1>

    <p>
        In PHP, when we define a function, the variables inside the parentheses are called 
        <strong>Formal Parameters</strong>.  
        When we call the function, the values we pass are known as <strong>Actual Parameters</strong>.
    </p>

    <h2>Example Program</h2>

    <?php
        // Function definition with formal parameters
        function addNumbers($a, $b) {
            $sum = $a + $b;
            echo "<div class='example'>The sum of $a and $b is: $sum</div>";
        }

        // Function call with actual parameters
        addNumbers(10, 20);
        addNumbers(5, 15);
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><strong>Formal Parameters:</strong> <code>$a</code> and <code>$b</code> are the formal parameters — they are placeholders for the values passed to the function.</li>
        <li><strong>Actual Parameters:</strong> <code>10, 20</code> and <code>5, 15</code> are actual parameters — the real values passed to the function when calling it.</li>
        <li>When the function executes, the actual parameters are assigned to the formal parameters.</li>
    </ul>

    <h2>2. Example with Return Value</h2>

    <?php
        // Function that returns the sum
        function multiplyNumbers($x, $y) {
            return $x * $y;
        }

        // Passing actual parameters to the function
        $result = multiplyNumbers(4, 5);

        echo "<div class='example'>The product of 4 and 5 is: $result</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><strong>Formal Parameters:</strong> <code>$x</code> and <code>$y</code> are placeholders inside the function definition.</li>
        <li><strong>Actual Parameters:</strong> <code>4</code> and <code>5</code> are real values passed when the function is called.</li>
        <li>The function multiplies them and returns the result, which is stored in <code>$result</code>.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>
        In PHP:
        <ul>
            <li><strong>Formal Parameters</strong> → Variables in the function definition.</li>
            <li><strong>Actual Parameters</strong> → Values passed when calling the function.</li>
        </ul>
        This concept helps make functions reusable and flexible for different input values.
    </p>

</body>
</html>
