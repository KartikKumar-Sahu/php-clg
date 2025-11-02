<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP do-while Loop Explained</title>
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

    <h1>PHP do-while Loop Example</h1>

    <h2>1. Basic do-while Loop</h2>
    <p>The <strong>do-while</strong> loop in PHP is similar to the `while` loop, but with a key difference: it executes the block of code **at least once** before checking the condition.</p>
    <p>The syntax is as follows:</p>
    <pre>
    do {
        // code to be executed
    } while (condition);
    </pre>
    <p>In a <strong>do-while</strong> loop, the code inside the loop is executed first, and then the condition is checked. If the condition is true, it repeats; if false, the loop ends.</p>

    <?php
        $count = 1;

        // do-while loop
        do {
            echo "<div class='example'>Count: $count</div>";
            $count++; // Increment the count
        } while ($count <= 5);
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>do-while</code> loop executes the code inside the block at least once.</li>
        <li>It checks the condition <code>\$count <= 5</code> after executing the block of code.</li>
        <li>If the condition is true, it repeats the loop. If false, the loop ends.</li>
    </ul>

    <h2>2. do-while Loop with Condition That is Initially False</h2>
    <p>Even if the condition is false initially, the <strong>do-while</strong> loop will execute the code block at least once.</p>
    
    <?php
        $num = 6;

        // do-while loop where the condition is initially false
        do {
            echo "<div class='example'>Number: $num</div>";
            $num++;
        } while ($num <= 5); // The condition is false, but it will execute once
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>Initially, the condition is false (<code>$num <= 5</code> is false when <code>$num = 6</code>).</li>
        <li>However, the code inside the loop runs at least once, printing the number 6.</li>
        <li>After that, the loop checks the condition again, and since it is false, the loop terminates.</li>
    </ul>

    <h2>3. Nested do-while Loop</h2>
    <p>You can also nest <strong>do-while</strong> loops inside each other. Here's an example:</p>

    <?php
        $i = 1;

        // Nested do-while loop
        do {
            echo "<div class='example'>Outer loop iteration: $i</div>";
            $j = 1;
            do {
                echo "<div class='example' style='padding-left: 20px;'>Inner loop iteration: $j</div>";
                $j++;
            } while ($j <= 3);
            $i++;
        } while ($i <= 3);
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The outer <code>do-while</code> loop runs for <code>$i = 1</code> to <code>$i = 3</code>.</li>
        <li>For each iteration of the outer loop, the inner <code>do-while</code> loop runs for <code>$j = 1</code> to <code>$j = 3</code>.</li>
        <li>Both loops execute their respective code blocks at least once before checking the condition.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The <strong>do-while</strong> loop is useful when you want to ensure that the loop code is executed at least once, regardless of the condition. It's especially helpful in scenarios where you need to process something and check if it should repeat after the first iteration.</p>

</body>
</html>
