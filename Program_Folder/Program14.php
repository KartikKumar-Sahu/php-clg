<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursion Function in PHP - Factorial Example</title>
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

    <h1>Recursion Function in PHP</h1>

    <p>
        A <strong>recursive function</strong> is a function that calls itself within its definition.  
        It is often used to solve problems that can be broken down into smaller, similar subproblems —  
        such as calculating factorial, Fibonacci series, etc.
    </p>

    <h2>Example: Factorial using Recursion</h2>
    <p>
        The <strong>factorial</strong> of a number (<em>n!</em>) is the product of all positive integers less than or equal to <em>n</em>.
        <br>Mathematically,  
        <code>n! = n × (n-1) × (n-2) × ... × 1</code>  
        and  
        <code>0! = 1</code>
    </p>

    <h3>PHP Code:</h3>

    <?php
        // Recursive function to calculate factorial
        function factorial($n) {
            if ($n == 0 || $n == 1) {
                return 1; // Base condition
            } else {
                return $n * factorial($n - 1); // Recursive call
            }
        }

        // Example usage
        $number = 5;
        $result = factorial($number);

        echo "<div class='example'>";
        echo "Number: $number<br>";
        echo "Factorial of $number is: $result";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><strong>Base case:</strong> If <code>$n</code> is 0 or 1, the function returns 1. (This stops the recursion.)</li>
        <li><strong>Recursive case:</strong> The function calls itself with <code>($n - 1)</code>.</li>
        <li>The recursion continues until the base case is reached.</li>
    </ul>

    <h3>Step-by-step Execution for 5! :</h3>
    <pre>
    factorial(5)
     = 5 × factorial(4)
     = 5 × (4 × factorial(3))
     = 5 × (4 × (3 × factorial(2)))
     = 5 × (4 × (3 × (2 × factorial(1))))
     = 5 × (4 × (3 × (2 × 1)))
     = 120
    </pre>

    <h2>Another Example</h2>
    <?php
        $num = 7;
        echo "<div class='example'>Factorial of $num is: " . factorial($num) . "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        A <strong>recursive function</strong> in PHP calls itself repeatedly until a <s
