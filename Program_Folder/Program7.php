<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP while Loop Explained</title>
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

    <h1>PHP while Loop Example</h1>

    <h2>1. Basic while Loop</h2>
    <p>The <strong>while</strong> loop executes a block of code as long as a specified condition is true. The syntax is:</p>
    <pre>
    while (condition) {
        // code to be executed
    }
    </pre>
    <p>Let's see how it works with a simple example:</p>

    <?php
        $count = 1;

        // while loop
        while ($count <= 5) {
            echo "<div class='example'>Count: $count</div>";
            $count++; // Increment the count
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>while</code> loop checks the condition <code>\$count <= 5</code>.</li>
        <li>As long as the condition is true, it executes the block inside the loop.</li>
        <li>After each iteration, <code>$count++</code> increments the value of <code>$count</code> by 1.</li>
        <li>Once <code>$count</code> exceeds 5, the loop exits.</li>
    </ul>

    <h2>2. while Loop with Break</h2>
    <p>The <strong>break</strong> statement can be used to exit a loop prematurely. Let's use a <code>while</code> loop to print numbers but stop if the number is greater than 3:</p>

    <?php
        $num = 1;

        // while loop with break
        while ($num <= 5) {
            if ($num > 3) {
                break; // Exit the loop if $num is greater than 3
            }
            echo "<div class='example'>Number: $num</div>";
            $num++;
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>while</code> loop runs as long as the condition <code>\$num <= 5</code> is true.</li>
        <li>If <code>$num</code> exceeds 3, the <code>break</code> statement is executed, which stops the loop.</li>
        <li>In this case, the output will only show numbers 1, 2, and 3.</li>
    </ul>

    <h2>3. Infinite while Loop</h2>
    <p>Be cautious with <strong>infinite loops</strong>, where the condition always remains true. Here's an example:</p>

    <pre>
    while (true) {
        // Infinite loop
    }
    </pre>
    <p>This loop will run forever unless you manually stop it (e.g., using <code>Ctrl+C</code> in the terminal). To avoid this, make sure the condition can eventually become false or use a <code>break</code> statement to exit the loop.</p>

    <h2>4. while Loop with Arrays</h2>
    <p>You can also use the <strong>while</strong> loop to iterate over arrays. Here's an example:</p>

    <?php
        $fruits = array("Apple", "Banana", "Cherry", "Date");
        $index = 0;

        // while loop to iterate over an array
        while ($index < count($fruits)) {
            echo "<div class='example'>Fruit: " . $fruits[$index] . "</div>";
            $index++; // Increment the index
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>while</code> loop iterates over the array <code>$fruits</>.</li>
        <li>The condition checks if <code>$index < count($fruits)</code> to ensure we don't go past the array length.</li>
        <li>After printing the fruit at the current index, the index is incremented to move to the next element.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The <strong>while</strong> loop is a fundamental control structure in PHP. It allows for repeated execution of code as long as a condition is true. Be mindful of conditions that could result in infinite loops, and use the <code>break</code> statement if needed to stop the loop early.</p>

</body>
</html>
