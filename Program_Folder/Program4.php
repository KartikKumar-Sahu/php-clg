<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP if-else Statement Explained</title>
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

    <h1>PHP if-else Statement Example</h1>

    <h2>1. Basic if-else Statement</h2>
    <p>The <strong>if-else</strong> statement in PHP is used to execute a block of code based on whether a condition is true or false.</p>
    
    <?php
        $age = 18;

        echo "<div class='example'>\$age = $age;</div>";

        // if-else statement
        if ($age >= 18) {
            echo "<div class='example'>You are eligible to vote.</div>";
        } else {
            echo "<div class='example'>You are not eligible to vote.</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>if</code> block executes if the condition (<code>$age >= 18</code>) is true.</li>
        <li>If the condition is false, the <code>else</code> block executes.</li>
    </ul>

    <h2>2. if-else if-else Ladder</h2>
    <p>You can use multiple conditions by chaining <strong>if-else if-else</strong> statements.</p>
    
    <?php
        $score = 75;

        echo "<div class='example'>\$score = $score;</div>";

        // if-else if-else ladder
        if ($score >= 90) {
            echo "<div class='example'>Grade: A+</div>";
        } elseif ($score >= 80) {
            echo "<div class='example'>Grade: A</div>";
        } elseif ($score >= 70) {
            echo "<div class='example'>Grade: B</div>";
        } else {
            echo "<div class='example'>Grade: C</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>if-else if-else</code> ladder allows you to test multiple conditions in sequence.</li>
        <li>Once a condition is true, the corresponding block is executed, and the rest are skipped.</li>
    </ul>

    <h2>3. Nested if Statement</h2>
    <p>You can also nest one <strong>if</strong> statement inside another.</p>
    
    <?php
        $temperature = 30;

        echo "<div class='example'>\$temperature = $temperature;</div>";

        // Nested if statement
        if ($temperature > 20) {
            echo "<div class='example'>It's warm outside.</div>";
            if ($temperature > 30) {
                echo "<div class='example'>It's hot outside.</div>";
            } else {
                echo "<div class='example'>It's a pleasant day.</div>";
            }
        } else {
            echo "<div class='example'>It's cold outside.</div>";
        }
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The second <code>if</code> statement is nested inside the first <code>if</code> block.</li>
        <li>The inner condition is only checked if the outer condition is true.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>The <strong>if-else</strong> statement is fundamental for decision-making in PHP. It allows you to execute different code blocks based on conditions. You can also use <code>else if</code> and <code>else</code> to handle multiple conditions or create more complex logic.</p>

</body>
</html>
