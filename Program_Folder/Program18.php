<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operators in PHP</title>
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

    <h1>String Operators in PHP</h1>

    <p>
        PHP provides special <strong>string operators</strong> to combine and manipulate strings.
        The two main string operators are:
    </p>

    <ul>
        <li><strong>(.)</strong> — Concatenation Operator</li>
        <li><strong>(.=)</strong> — Concatenation Assignment Operator</li>
    </ul>

    <h2>1. Concatenation Operator (.)</h2>
    <p>The dot operator (<code>.</code>) is used to join two or more strings together.</p>

    <?php
        $firstName = "Kartik";
        $lastName = "Sahu";

        // Using concatenation operator
        $fullName = $firstName . " " . $lastName;

        echo "<div class='example'>";
        echo "First Name: $firstName<br>";
        echo "Last Name: $lastName<br>";
        echo "Full Name (using .): $fullName<br>";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The dot (<code>.</code>) operator joins multiple strings into one.</li>
        <li>Here, <code>\$firstName . \" \" . \$lastName</code> produces <strong>'Kartik Sahu'</strong>.</li>
    </ul>

    <h2>2. Concatenation Assignment Operator (.=)</h2>
    <p>
        The concatenation assignment operator (<code>.=</code>) appends one string to another variable.
    </p>

    <?php
        $message = "Welcome";
        $message .= " to PHP Programming!";

        echo "<div class='example'>";
        echo "Final Message (using .=): $message<br>";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li><code>\$message .= \" to PHP Programming!\"</code> adds more text to the existing variable.</li>
        <li>This is equivalent to <code>\$message = \$message . \" to PHP Programming!\"</code>.</li>
    </ul>

    <h2>3. Combining Variables and Text</h2>
    <p>You can mix variables and plain text while concatenating strings.</p>

    <?php
        $course = "PHP";
        $duration = "3 months";

        $info = "The " . $course . " course lasts for " . $duration . ".";

        echo "<div class='example'>";
        echo $info;
        echo "</div>";
    ?>

    <h2>4. Example of Multiple Concatenations</h2>
    <p>You can concatenate more than two strings easily:</p>

    <?php
        $part1 = "Learning ";
        $part2 = "string ";
        $part3 = "operators ";
        $part4 = "in PHP.";

        $sentence = $part1 . $part2 . $part3 . $part4;

        echo "<div class='example'>";
        echo "Result of multiple concatenations:<br>$sentence";
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        String operators in PHP are used to combine and extend string variables easily:
    </p>

    <ul>
        <li><strong>(.)</strong> — Joins two strings.</li>
        <li><strong>(.=)</strong> — Appends a string to an existing variable.</li>
    </ul>
    <p>
        These operators are essential for building dynamic text, messages, and HTML output in PHP scripts.
    </p>

</body>
</html>
