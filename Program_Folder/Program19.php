<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heredoc String in PHP</title>
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

    <h1>Heredoc String in PHP</h1>

    <p>
        The <strong>Heredoc</strong> syntax in PHP is used to define multi-line strings in a readable and convenient way.
        It behaves like a <strong>double-quoted string</strong>, meaning variables are interpolated (their values are inserted).
    </p>

    <h2>1. Basic Heredoc Example</h2>

    <?php
        $name = "Kartik";
        $course = "PHP Programming";

        // Heredoc syntax
        $message = <<<TEXT
Hello, my name is $name.
I am learning $course.
Heredoc makes it easy to write multi-line strings
without using quotes or concatenation.
TEXT;

        echo "<div class='example'>$message</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The Heredoc syntax starts with <code>&lt;&lt;&lt;IDENTIFIER</code> (commonly <code>TEXT</code> or any label you choose).</li>
        <li>It ends when the same identifier appears again on a new line, with no extra spaces or tabs before it.</li>
        <li>Variables inside the Heredoc string are automatically interpolated (evaluated).</li>
    </ul>

    <h2>2. Example: Multi-line HTML with Heredoc</h2>

    <?php
        $title = "Welcome Page";
        $body = "This is a dynamically generated HTML section using Heredoc in PHP.";

        $htmlContent = <<<HTML
        <div style="background-color: #e3f2fd; padding: 15px; border: 1px solid #90caf9;">
            <h2>$title</h2>
            <p>$body</p>
            <p>Generated on: <strong>{date('Y-m-d')}</strong></p>
        </div>
HTML;

        echo "<div class='example'>$htmlContent</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>Heredoc is ideal for printing HTML or large text blocks.</li>
        <li>It improves readability and eliminates the need for escaping quotes.</li>
        <li>Since Heredoc behaves like a double-quoted string, variable values appear directly.</li>
    </ul>

    <h2>3. Difference Between Heredoc and Nowdoc</h2>
    <p>
        The <strong>Nowdoc</strong> syntax (<code>&lt;&lt;&lt;'IDENTIFIER'</code>) is similar to Heredoc,
        but it behaves like a <strong>single-quoted string</strong> — variables are <em>not</em> interpolated.
    </p>

    <?php
        $name = "Kartik";

        $heredocExample = <<<TEXT
Heredoc Example: My name is $name
TEXT;

        $nowdocExample = <<<'TEXT'
Nowdoc Example: My name is $name
TEXT;

        echo "<div class='example'>";
        echo $heredocExample . "<br>" . $nowdocExample;
        echo "</div>";
    ?>

    <h2>Conclusion</h2>
    <p>
        The <strong>Heredoc</strong> syntax in PHP is perfect for:
        <ul>
            <li>Printing multi-line text blocks or HTML content.</li>
            <li>Embedding variables easily without concatenation.</li>
            <li>Writing large templates or readable code snippets.</li>
        </ul>
        It acts like a double-quoted string — variables are expanded and escape sequences are processed.
    </p>

</body>
</html>
