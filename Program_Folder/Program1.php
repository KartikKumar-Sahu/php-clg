<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables Explained</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        h1, h2, h3 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 5px 0;
        }
        .example {
            background-color: #e7f7e7;
            padding: 10px;
            border-left: 5px solid #4CAF50;
        }
    </style>
</head>
<body>

    <h1>Understanding Variables in PHP</h1>
    <p>In PHP, a variable is a container used to store data. Variables can hold values like strings, integers, floats, or arrays. PHP variables start with a dollar sign (<code>$</code>) followed by the name of the variable.</p>

    <h2>How to Declare Variables in PHP</h2>
    <p>A variable in PHP is declared by using the <code>$</code> sign followed by the name of the variable. Here is an example:</p>

    <?php
        // PHP code to show the example of declaring variables
        echo "<div class='example'><code>\$variableName = \"This is a string!\";</code></div>";
    ?>

    <h2>Example: PHP Variables</h2>
    <p>The following PHP code demonstrates how to create and use variables:</p>

    <?php
        // PHP code example for variables
        $name = "John";         // String variable
        $age = 25;              // Integer variable
        $height = 5.9;          // Float variable
        $isStudent = true;      // Boolean variable
    ?>

    <div class="example">
        <h3>Code Explanation:</h3>
        <ul>
            <li><strong>$name</strong>: A string variable holding a name ("John").</li>
            <li><strong>$age</strong>: An integer variable holding the age (25).</li>
            <li><strong>$height</strong>: A float variable holding the height (5.9).</li>
            <li><strong>$isStudent</strong>: A boolean variable indicating if the person is a student (true).</li>
        </ul>
    </div>

    <h2>Output of the PHP Code</h2>
    <p>If the PHP code is executed, the output will be:</p>

    <div class="example">
        <?php
            // Output the values of the variables
            echo "Name: " . $name . "<br>";
            echo "Age: " . $age . "<br>";
            echo "Height: " . $height . "<br>";
            echo "Is student: " . ($isStudent ? "Yes" : "No") . "<br>";
        ?>
    </div>

    <h2>Variable Scope</h2>
    <p>Variables in PHP have different types of scope. Variables can be declared as:</p>
    <ul>
        <li><strong>Local variables:</strong> These are variables declared within a function and can only be accessed inside that function.</li>
        <li><strong>Global variables:</strong> These are variables declared outside functions and can be accessed anywhere in the script.</li>
    </ul>

    <h3>Example of Local and Global Variables</h3>
    <p>Here is an example that shows local and global variable scope:</p>

    <div class="example">
        <?php
            // Global variable
            $globalVar = "I'm a global variable";

            function demoFunction() {
                // Local variable
                $localVar = "I'm a local variable";
                echo $localVar . "<br>";
                echo $globalVar . "<br>";  // Accessing global variable inside the function
            }

            demoFunction();
        ?>
    </div>

    <h2>Conclusion</h2>
    <p>In PHP, variables are essential for storing data, and understanding how to work with them is crucial for writing dynamic scripts. You can store various types of data in variables, manipulate them, and use them to display dynamic content on your website.</p>

</body>
</html>
