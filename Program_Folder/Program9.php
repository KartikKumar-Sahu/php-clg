<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP for Loop Explained</title>
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

    <h1>PHP for Loop Example</h1>

    <h2>1. Basic for Loop</h2>
    <p>The <strong>for</strong> loop is used when you know in advance how many times you want to execute a statement or a block of statements. The syntax is as follows:</p>
    <pre>
    for (initialization; condition; increment) {
        // code to be executed
    }
    </pre>
    <p>Let’s look at a simple example where we print numbers from 1 to 5 using the <strong>for loop</strong>.</p>

    <?php
        // for loop to print numbers 1 to 5
        for ($i = 1; $i <= 5; $i++) {
            echo "<div class='example'>Number: $i</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><code>$i = 1</code>: The loop starts with initializing <code>$i</code> to 1.</li>
        <li><code>$i <= 5</code>: The loop continues as long as <code>$i</code> is less than or equal to 5.</li>
        <li><code>$i++</code>: After each iteration, the value of <code>$i</code> is incremented by 1.</li>
        <li>The loop executes 5 times, printing the numbers 1 to 5.</li>
    </ul>

    <h2>2. for Loop with Step Size</h2>
    <p>You can also specify the step size in the <strong>for loop</strong> by changing the increment value. For example, let’s print even numbers between 1 and 10:</p>

    <?php
        // for loop with step size of 2
        for ($i = 2; $i <= 10; $i += 2) {
            echo "<div class='example'>Even Number: $i</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The loop starts with <code>$i = 2</code>, and increases <code>$i</code> by 2 after each iteration (<code>$i += 2</code>).</li>
        <li>The loop will run for values of <code>$i = 2, 4, 6, 8, 10</code>, printing the even numbers between 1 and 10.</li>
    </ul>

    <h2>3. for Loop with Array</h2>
    <p>We can also use a <strong>for loop</strong> to iterate over an array. Here is an example that prints the values of an array:</p>

    <?php
        $fruits = array("Apple", "Banana", "Cherry", "Date");

        // for loop to iterate over the array
        for ($i = 0; $i < count($fruits); $i++) {
            echo "<div class='example'>Fruit: " . $fruits[$i] . "</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>for</code> loop starts with <code>$i = 0</code>, and continues until <code>$i</code> is less than the length of the array (using <code>count($fruits)</code>).</li>
        <li>On each iteration, it prints the corresponding element of the array <code>$fruits[$i]</code>.</li>
        <li>It prints all the fruit names in the array.</li>
    </ul>

    <h2>4. for Loop with Nested Loops</h2>
    <p>You can also use a <strong>for loop inside another for loop</strong> (nested loop). Let’s print a multiplication table:</p>

    <?php
        // nested for loop for multiplication table
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                echo "<div class='example'>($i x $j) = " . ($i * $j) . "</div>";
            }
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The outer loop runs from <code>$i = 1</code> to <code>$i = 5</code>.</li>
        <li>The inner loop runs from <code>$j = 1</code> to <code>$j = 5</code>, multiplying <code>$i</code> by <code>$j</code> and printing the result.</li>
        <li>The result is a multiplication table for numbers 1 to 5.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The <strong>for loop</strong> is a powerful and commonly used loop in PHP, especially when you know how many times you want to iterate. It allows you to specify initialization, condition, and increment values, making it flexible for different tasks like printing numbers, iterating over arrays, and using nested loops.</p>

</body>
</html>
