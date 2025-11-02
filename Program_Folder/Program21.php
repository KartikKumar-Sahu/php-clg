<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatting Strings in PHP</title>
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

    <h1>Formatting Strings in PHP</h1>

    <p>
        In PHP, you can format strings and numbers using built-in functions like
        <strong>printf()</strong>, <strong>sprintf()</strong>, and <strong>number_format()</strong>.
        These help make your output clean, readable, and structured.
    </p>

    <h2>1. printf() – Print Formatted Output</h2>
    <?php
        $name = "Kartik";
        $age = 21;
        $marks = 95.678;

        echo "<div class='example'>";
        printf("My name is %s, I am %d years old, and my marks are %.2f", $name, $age, $marks);
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><code>%s</code> → String placeholder</li>
        <li><code>%d</code> → Integer placeholder</li>
        <li><code>%.2f</code> → Floating-point number (2 decimal places)</li>
    </ul>

    <h2>2. sprintf() – Store Formatted String</h2>
    <p>
        Unlike <code>printf()</code> which prints directly, <code>sprintf()</code> returns the formatted string.
    </p>

    <?php
        $price = 499.99;
        $item = "Smartphone";
        $message = sprintf("The price of the %s is Rs. %.2f", $item, $price);

        echo "<div class='example'>$message</div>";
    ?>

    <h2>3. number_format() – Format Numbers with Commas</h2>
    <?php
        $num = 1234567.89123;

        echo "<div class='example'>";
        echo "Original Number: $num<br>";
        echo "Formatted (2 decimals): " . number_format($num, 2) . "<br>";
        echo "Formatted (with commas): " . number_format($num, 2, '.', ',') . "<br>";
        echo "</div>";
    ?>

    <h2>4. sprintf() with Padding and Alignment</h2>
    <?php
        $product = "Laptop";
        $price = 75000;

        echo "<div class='example'>";
        printf("|%-10s|%10d|", $product, $price);
        echo "<br>";
        echo "Explanation:<br>";
        echo "<ul>
                <li><code>%-10s</code> → Left align string within 10 spaces</li>
                <li><code>%10d</code> → Right align number within 10 spaces</li>
              </ul>";
        echo "</div>";
    ?>

    <h2>5. Combining Multiple Formatting Functions</h2>
    <?php
        $students = [
            ["name" => "Kartik", "marks" => 93.456],
            ["name" => "Priya", "marks" => 88.5],
            ["name" => "Ravi", "marks" => 79.2]
        ];

        echo "<div class='example'>";
        echo sprintf("%-10s | %-10s<br>", "Name", "Marks");
        echo str_repeat("-", 25) . "<br>";

        foreach ($students as $s) {
            printf("%-10s | %6.2f<br>", $s['name'], $s['marks']);
        }
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        PHP’s <strong>string formatting functions</strong> make output clean and professional:
    </p>
    <ul>
        <li><code>printf()</code> – Prints formatted strings directly.</li>
        <li><code>sprintf()</code> – Returns formatted strings for later use.</li>
        <li><code>number_format()</code> – Formats numbers with decimals and commas.</li>
        <li>Placeholders like <code>%s</code>, <code>%d</code>, <code>%f</code> are used for dynamic substitution.</li>
    </ul>

</body>
</html>
