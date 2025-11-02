<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions in PHP</title>
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

    <h1>String Functions in PHP</h1>

    <p>
        PHP provides many built-in <strong>string functions</strong> to perform operations like measuring length, 
        changing case, finding or replacing text, and more.  
        Let's explore some of the most commonly used ones.
    </p>

    <h2>1. strlen() – Find String Length</h2>
    <?php
        $text = "Hello PHP!";
        echo "<div class='example'>";
        echo "String: $text<br>";
        echo "Length of string: " . strlen($text);
        echo "</div>";
    ?>

    <h2>2. str_word_count() – Count Words in a String</h2>
    <?php
        $sentence = "PHP is a powerful scripting language.";
        echo "<div class='example'>";
        echo "Sentence: $sentence<br>";
        echo "Word count: " . str_word_count($sentence);
        echo "</div>";
    ?>

    <h2>3. strrev() – Reverse a String</h2>
    <?php
        $word = "Kartik";
        echo "<div class='example'>";
        echo "Original: $word<br>";
        echo "Reversed: " . strrev($word);
        echo "</div>";
    ?>

    <h2>4. strtolower() and strtoupper() – Convert Case</h2>
    <?php
        $name = "Php Programming";
        echo "<div class='example'>";
        echo "Original: $name<br>";
        echo "Lowercase: " . strtolower($name) . "<br>";
        echo "Uppercase: " . strtoupper($name);
        echo "</div>";
    ?>

    <h2>5. ucfirst() and ucwords() – Capitalize Words</h2>
    <?php
        $str = "welcome to php programming";
        echo "<div class='example'>";
        echo "Original: $str<br>";
        echo "ucfirst(): " . ucfirst($str) . "<br>";
        echo "ucwords(): " . ucwords($str);
        echo "</div>";
    ?>

    <h2>6. strpos() – Find Position of Substring</h2>
    <?php
        $text = "Learn PHP easily";
        echo "<div class='example'>";
        echo "String: $text<br>";
        echo "Position of 'PHP': " . strpos($text, "PHP");
        echo "</div>";
    ?>

    <h2>7. str_replace() – Replace Text</h2>
    <?php
        $sentence = "I like Java.";
        echo "<div class='example'>";
        echo "Before replace: $sentence<br>";
        echo "After replace: " . str_replace("Java", "PHP", $sentence);
        echo "</div>";
    ?>

    <h2>8. trim() – Remove Extra Spaces</h2>
    <?php
        $data = "   Hello PHP!   ";
        echo "<div class='example'>";
        echo "Before trim: '$data'<br>";
        echo "After trim: '" . trim($data) . "'";
        echo "</div>";
    ?>

    <h2>9. explode() and implode() – Convert Between Strings and Arrays</h2>
    <?php
        $csv = "red,green,blue,yellow";
        $array = explode(",", $csv);

        echo "<div class='example'>";
        echo "Original String: $csv<br>";
        echo "After explode(): ";
        print_r($array);
        echo "<br>";

        $joined = implode(" | ", $array);
        echo "After implode(): $joined";
        echo "</div>";
    ?>

    <h2>10. substr() – Extract Part of String</h2>
    <?php
        $text = "Programming";
        echo "<div class='example'>";
        echo "Original: $text<br>";
        echo "Substring (first 6 chars): " . substr($text, 0, 6);
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        PHP provides a rich set of <strong>string functions</strong> to handle text processing easily.  
        You can measure, modify, split, and combine strings efficiently using these built-in tools.
    </p>

</body>
</html>
