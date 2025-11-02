<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Functions in PHP</title>
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

    <h1>Library Functions in PHP</h1>

    <p>
        PHP provides many <strong>library functions</strong> (built-in functions) that make programming easier.  
        These functions perform common tasks such as string manipulation, mathematical calculations, date/time handling, etc.
    </p>

    <h2>1. String Functions</h2>
    <?php
        $text = "  Welcome to PHP Programming!  ";

        echo "<div class='example'>";
        echo "Original Text: '$text'<br><br>";

        // strlen() - find string length
        echo "Length of string (strlen): " . strlen($text) . "<br>";

        // str_word_count() - count words
        echo "Word Count (str_word_count): " . str_word_count($text) . "<br>";

        // strtoupper() - convert to uppercase
        echo "Uppercase (strtoupper): " . strtoupper($text) . "<br>";

        // strtolower() - convert to lowercase
        echo "Lowercase (strtolower): " . strtolower($text) . "<br>";

        // trim() - remove whitespace
        echo "Trimmed String (trim): '" . trim($text) . "'<br>";

        echo "</div>";
    ?>

    <h2>2. Mathematical Functions</h2>
    <?php
        $num = 25.75;

        echo "<div class='example'>";
        echo "Number: $num<br><br>";

        // sqrt() - square root
        echo "Square Root (sqrt): " . sqrt($num) . "<br>";

        // round() - round off number
        echo "Rounded Value (round): " . round($num) . "<br>";

        // rand() - random number
        echo "Random Number between 1 and 100 (rand): " . rand(1, 100) . "<br>";

        // pow() - power function
        echo "2 raised to 5 (pow): " . pow(2, 5) . "<br>";
        echo "</div>";
    ?>

    <h2>3. Date and Time Functions</h2>
    <?php
        echo "<div class='example'>";
        // date() - get current date/time
        echo "Current Date (Y-m-d): " . date("Y-m-d") . "<br>";
        echo "Current Time (h:i:s A): " . date("h:i:s A") . "<br>";
        echo "Day of Week: " . date("l") . "<br>";
        echo "</div>";
    ?>

    <h2>4. Array Functions</h2>
    <?php
        $fruits = array("Apple", "Banana", "Cherry", "Date");

        echo "<div class='example'>";
        echo "Original Array: ";
        print_r($fruits);
        echo "<br><br>";

        // count() - number of elements
        echo "Number of Elements (count): " . count($fruits) . "<br>";

        // sort() - sort array
        sort($fruits);
        echo "Sorted Array (sort): ";
        print_r($fruits);
        echo "<br>";

        // array_reverse() - reverse array
        echo "Reversed Array (array_reverse): ";
        print_r(array_reverse($fruits));
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        Library functions in PHP are pre-defined functions that make programming faster and easier.  
        Common categories include:
    </p>
    <ul>
        <li><strong>String Functions:</strong> For manipulating text (e.g., <code>strlen()</code>, <code>trim()</code>).</li>
        <li><strong>Math Functions:</strong> For numeric calculations (e.g., <code>sqrt()</code>, <code>pow()</code>).</li>
        <li><strong>Date Functions:</strong> For handling date and time (e.g., <code>date()</code>).</li>
        <li><strong>Array Functions:</strong> For working with arrays (e.g., <code>sort()</code>, <code>count()</code>).</li>
    </ul>

</body>
</html>
