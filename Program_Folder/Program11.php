<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP User-Defined Functions Explained</title>
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

    <h1>Creating and Invoking User-Defined Functions in PHP</h1>

    <h2>1. What is a Function?</h2>
    <p>
        A <strong>function</strong> is a block of code that performs a specific task and can be reused multiple times in a program. 
        PHP allows you to define your own custom (user-defined) functions using the <code>function</code> keyword.
    </p>

    <h2>2. Defining a Simple Function</h2>
    <p>Here’s an example of a simple function that prints a welcome message:</p>

    <?php
        // Defining a simple user-defined function
        function greet() {
            echo "<div class='example'>Welcome to PHP Programming!</div>";
        }

        // Invoking (calling) the function
        greet();
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The function <code>greet()</code> is defined using the <code>function</code> keyword.</li>
        <li>To execute the code inside it, we simply call the function by writing its name followed by parentheses <code>greet();</code>.</li>
    </ul>

    <h2>3. Function with Parameters</h2>
    <p>A function can also accept values, known as <strong>parameters</strong>. Here’s an example:</p>

    <?php
        // Function with parameters
        function displayMessage($name) {
            echo "<div class='example'>Hello, $name! Welcome to PHP Functions.</div>";
        }

        // Invoking the function with different arguments
        displayMessage("Kartik");
        displayMessage("Priya");
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The function <code>displayMessage()</code> takes one parameter <code>$name</code>.</li>
        <li>When the function is called, the passed value (argument) is used inside the function.</li>
        <li>Functions can be reused with different arguments.</li>
    </ul>

    <h2>4. Function with Return Value</h2>
    <p>Functions can also return a value using the <code>return</code> statement:</p>

    <?php
        // Function that returns a value
        function addNumbers($a, $b) {
            return $a + $b;
        }

        // Storing and displaying the result
        $sum = addNumbers(10, 20);
        echo "<div class='example'>Sum of 10 and 20 is: $sum</div>";
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The function <code>addNumbers()</code> takes two parameters and returns their sum.</li>
        <li>The <code>return</code> statement sends the result back to the calling code.</li>
        <li>The returned value can be stored in a variable and used later.</li>
    </ul>

    <h2>5. Function with Default Parameter Value</h2>
    <p>PHP allows you to specify default values for parameters, which are used when no argument is provided during the function call.</p>

    <?php
        // Function with default parameter
        function greetUser($name = "Guest") {
            echo "<div class='example'>Hello, $name!</div>";
        }

        // Calling function with and without parameter
        greetUser("Ravi");
        greetUser();
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The function <code>greetUser()</code> has a default parameter value <code>"Guest"</code>.</li>
        <li>If no argument is passed, it uses the default value.</li>
    </ul>

    <h2>Conclusion</h2>
    <p>
        User-defined functions in PHP make your code more modular, reusable, and easier to manage.
        You can define functions with or without parameters, return values, and even use default arguments.
        Functions help in writing clean, efficient, and maintainable PHP programs.
    </p>

</body>
</html>
