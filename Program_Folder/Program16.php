<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Interpolation with Curly Braces in PHP</title>
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

    <h1>String Interpolation with Curly Braces in PHP</h1>

    <p>
        <strong>String interpolation</strong> allows variables to be embedded directly inside strings.
        In PHP, this works with **double-quoted strings (" ")** and **heredoc syntax**, 
        but not with single quotes (' ').
    </p>

    <h2>1. Simple Interpolation</h2>

    <?php
        $name = "Kartik";
        $language = "PHP";

        echo "<div class='example'>";
        echo "Without braces: Hello $name, welcome to $language programming!<br>";
        echo "</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>PHP automatically replaces <code>$name</code> and <code>$language</code> with their values.</li>
        <li>This is called <strong>string interpolation</strong>.</li>
    </ul>

    <h2>2. Interpolation Using Curly Braces</h2>
    <p>
        When using variables with array elements, object properties, or when the variable is next to other characters, 
        curly braces <code>{}</code> make interpolation clearer and prevent ambiguity.
    </p>

    <?php
        $subject = "PHP";
        $topic = "String Interpolation";

        echo "<div class='example'>";
        echo "Using braces: {$subject} supports {$topic}.<br>";
        echo "</div>";
    ?>

    <h2>3. Example with Array and Curly Braces</h2>
    <?php
        $student = [
            "name" => "Kartik",
            "course" => "BCA",
            "year" => 2025
        ];

        echo "<div class='example'>";
        echo "Student Name: {$student['name']}<br>";
        echo "Course: {$student['course']}<br>";
        echo "Passing Year: {$student['year']}<br>";
        echo "</div>";
    ?>

    <h2>4. Example with Variable Interpolation Ambiguity</h2>
    <p>
        Without braces, PHP may misinterpret where a variable name ends.  
        Braces make it clear and prevent errors.
    </p>

    <?php
        $color = "blue";

        echo "<div class='example'>";
        echo "Without braces: The sky is $colorish (incorrect / undefined variable).<br>";
        echo "With braces: The sky is {$color}ish (correct).<br>";
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        Curly braces <code>{}</code> in PHP are used for **clear and unambiguous variable interpolation** inside double-quoted strings.  
        This is especially useful when:
    </p>
    <ul>
        <li>Variables are adjacent to other text.</li>
        <li>Accessing array elements or object properties within strings.</li>
        <li>You want your string expressions to be more readable and error-free.</li>
    </ul>

</body>
</html>
