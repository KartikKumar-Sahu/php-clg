<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparing and Searching Strings in PHP</title>
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

    <h1>Comparing and Searching Strings and Substrings in PHP</h1>

    <p>
        PHP provides several built-in functions to compare strings and search for substrings.
        Let's explore some commonly used ones like <strong>strcmp()</strong>, <strong>strcasecmp()</strong>,
        <strong>strpos()</strong>, and <strong>strstr()</strong>.
    </p>

    <h2>1. strcmp() – Compare Strings (Case-Sensitive)</h2>
    <?php
        $a = "Hello";
        $b = "hello";

        echo "<div class='example'>";
        echo "String 1: $a<br>";
        echo "String 2: $b<br>";

        $result = strcmp($a, $b);

        if ($result == 0) {
            echo "Both strings are equal.";
        } elseif ($result < 0) {
            echo "String 1 is less than String 2.";
        } else {
            echo "String 1 is greater than String 2.";
        }
        echo "</div>";
    ?>

    <h2>2. strcasecmp() – Compare Strings (Case-Insensitive)</h2>
    <?php
        $result2 = strcasecmp($a, $b);

        echo "<div class='example'>";
        echo "Comparing '$a' and '$b' (case-insensitive):<br>";

        if ($result2 == 0) {
            echo "Both strings are equal (ignoring case).";
        } else {
            echo "Strings are not equal (ignoring case).";
        }
        echo "</div>";
    ?>

    <h2>3. strpos() – Search for a Substring</h2>
    <?php
        $text = "PHP is a popular scripting language.";
        $search = "popular";

        echo "<div class='example'>";
        echo "Text: $text<br>";
        echo "Searching for: '$search'<br>";

        $pos = strpos($text, $search);

        if ($pos !== false) {
            echo "Substring found at position: $pos";
        } else {
            echo "Substring not found.";
        }
        echo "</div>";
    ?>

    <h2>4. stripos() – Case-Insensitive Substring Search</h2>
    <?php
        $search2 = "LANGUAGE";

        echo "<div class='example'>";
        echo "Searching for '$search2' (case-insensitive) in text.<br>";
        $pos2 = stripos($text, $search2);
        if ($pos2 !== false) {
            echo "Substring found at position: $pos2";
        } else {
            echo "Substring not found.";
        }
        echo "</div>";
    ?>

    <h2>5. strstr() – Find Substring and Return Remaining String</h2>
    <?php
        echo "<div class='example'>";
        echo "Using strstr() to find first occurrence of 'popular':<br>";
        echo strstr($text, "popular");
        echo "</div>";
    ?>

    <h2>6. str_contains() – Check if a String Contains a Substring (PHP 8+)</h2>
    <?php
        $sentence = "Learning PHP is fun!";
        echo "<div class='example'>";
        echo "Sentence: $sentence<br>";

        if (str_contains($sentence, "PHP")) {
            echo "The word 'PHP' exists in the string.";
        } else {
            echo "The word 'PHP' does not exist.";
        }
        echo "</div>";
    ?>

    <h2>7. substr_compare() – Compare Portions of Strings</h2>
    <?php
        $str1 = "Programming";
        $str2 = "gram";

        echo "<div class='example'>";
        echo "String: $str1<br>";
        echo "Comparing substring 'gram' from position 3:<br>";

        if (substr_compare($str1, $str2, 3, strlen($str2)) === 0) {
            echo "The substring matches!";
        } else {
            echo "The substring does not match.";
        }
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        PHP offers many powerful functions to compare and search strings:
    </p>

    <ul>
        <li><strong>strcmp()</strong> – Case-sensitive string comparison.</li>
        <li><strong>strcasecmp()</strong> – Case-insensitive string comparison.</li>
        <li><strong>strpos()</strong> / <strong>stripos()</strong> – Find substring position.</li>
        <li><strong>strstr()</strong> – Return substring from first occurrence.</li>
        <li><strong>str_contains()</strong> – Checks if substring exists (PHP 8+).</li>
        <li><strong>substr_compare()</strong> – Compare parts of two strings.</li>
    </ul>

</body>
</html>
