<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Inclusion Statements Explained</title>
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

    <h1>PHP File Inclusion Statements Example</h1>

    <h2>1. Using `include` Statement</h2>
    <p>The <strong>include</strong> statement is used to include and evaluate the specified file. If the file is not found, PHP will generate a warning, but the script will continue executing.</p>

    <?php
        // Include the 'header.php' file
        include 'header.php';
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>include</code> statement includes the contents of the file <code>header.php</code> into this script.</li>
        <li>If <code>header.php</code> is missing, PHP will show a warning but continue executing the script.</li>
    </ul>

    <h2>2. Using `require` Statement</h2>
    <p>The <strong>require</strong> statement is similar to <strong>include</strong>, but it generates a fatal error and stops script execution if the file cannot be found.</p>

    <?php
        // Require the 'footer.php' file
        require 'footer.php';
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>require</code> statement includes the contents of the file <code>footer.php</code> into this script.</li>
        <li>If <code>footer.php</code> is missing, PHP will stop the script and generate a fatal error.</li>
    </ul>

    <h2>3. Using `include_once` Statement</h2>
    <p>The <strong>include_once</strong> statement includes a file only once, even if it is called multiple times. It prevents the file from being included more than once in a script.</p>

    <?php
        // Include the 'header.php' file only once, even if it's included again
        include_once 'header.php';
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>include_once</code> statement checks if the file has already been included, and if so, it does not include it again.</li>
        <li>This is helpful when you want to avoid redeclaring functions or classes from the same file.</li>
    </ul>

    <h2>4. Using `require_once` Statement</h2>
    <p>The <strong>require_once</strong> statement is like <strong>require</strong>, but it ensures the file is included only once, even if called multiple times. If the file is missing, it will stop the script and show a fatal error.</p>

    <?php
        // Require the 'footer.php' file only once, even if it's required again
        require_once 'footer.php';
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The <code>require_once</code> statement checks if the file has already been included, and if not, it includes it.</li>
        <li>If the file is missing, it will generate a fatal error and stop the script.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>PHP file inclusion statements allow you to reuse code by including external files. Use <strong>include</strong> and <strong>require</strong> when you need to include a file, but keep in mind that <strong>require</strong> will stop execution if the file is missing. Use <strong>include_once</strong> and <strong>require_once</strong> to ensure a file is included only once, preventing duplication of code.</p>

</body>
</html>
