<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Characters and String Indexes in PHP</title>
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

    <h1>Characters and String Indexes in PHP</h1>

    <p>
        In PHP, a <strong>string</strong> is treated as an array of characters.  
        Each character in a string can be accessed using its <strong>index position</strong> — starting from 0.
    </p>

    <h2>1. Accessing Characters by Index</h2>

    <?php
        $str = "HELLO";

        echo "<div class='example'>";
        echo "String: $str<br>";
        echo "Character at index 0: " . $str[0] . "<br>";
        echo "Character at index 1: " . $str[1] . "<br>";
        echo "Character at index 4: " . $str[4] . "<br>";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The string <code>HELLO</code> has characters at indexes 0 to 4.</li>
        <li><code>$str[0]</code> gives 'H', <code>$str[1]</code> gives 'E', and <code>$str[4]</code> gives 'O'.</li>
    </ul>

    <h2>2. Modifying Characters Using Index</h2>
    <p>You can also modify individual characters in a string using their index position.</p>

    <?php
        $word = "Cat";
        echo "<div class='example'>";
        echo "Original String: $word<br>";

        // Change 'C' to 'B'
        $word[0] = 'B';
        echo "After modification: $word<br>";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>Strings in PHP can be accessed like arrays.</li>
        <li>Changing <code>$word[0]</code> from 'C' to 'B' modifies the string to <code>Bat</code>.</li>
    </ul>

    <h2>3. Iterating Through Each Character</h2>
    <p>We can use a <code>for</code> loop to print each character of a string one by one.</p>

    <?php
        $text = "STRING";
        echo "<div class='example'>";
        echo "String: $text<br>";
        echo "Characters:<br>";

        for ($i = 0; $i < strlen($text); $i++) {
            echo "Index $i → " . $text[$i] . "<br>";
        }
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>strlen()</code> function returns the length of the string.</li>
        <li>Each character is accessed using <code>$text[$i]</code> where <code>$i</code> is the index.</li>
    </ul>

    <h2>4. Accessing Last Character</h2>
    <?php
        $sample = "KARTIK";
        $lastChar = $sample[strlen($sample) - 1];

        echo "<div class='example'>";
        echo "String: $sample<br>";
        echo "Last Character: $lastChar";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>To get the last character, subtract 1 from the string’s length: <code>strlen($sample) - 1</code>.</li>
        <li>This gives the index of the last character in the string.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>
        In PHP:
        <ul>
            <li>Strings behave like arrays of characters.</li>
            <li>Indexing starts from 0.</li>
            <li>We can access, modify, and iterate over characters using indexes.</li>
            <li>The <code>strlen()</code> function helps determine the total number of characters in a string.</li>
        </ul>
    </p>

</body>
</html>
