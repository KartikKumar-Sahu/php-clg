<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function and Variable Scope in PHP</title>
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

    <h1>Understanding Function and Variable Scope in PHP</h1>

    <p>
        In PHP, <strong>variable scope</strong> determines where a variable can be accessed or modified.
        PHP supports four main types of variable scopes:
    </p>

    <ul>
        <li><strong>Local Scope</strong></li>
        <li><strong>Global Scope</strong></li>
        <li><strong>Static Scope</strong></li>
        <li><strong>Function Parameters</strong></li>
    </ul>

    <h2>1. Global Scope</h2>
    <p>
        A variable declared outside of any function has <strong>global scope</strong> and can be accessed anywhere in the script — but <em>not directly inside a function</em> unless specified as <code>global</code>.
    </p>

    <?php
        $globalVar = 100; // Global variable

        function showGlobalVar() {
            // Accessing global variable inside a function requires the 'global' keyword
            global $globalVar;
            echo "<div class='example'>Accessing Global Variable inside Function: $globalVar</div>";
        }

        showGlobalVar();

        // Accessing directly outside function
        echo "<div class='example'>Accessing Global Variable outside Function: $globalVar</div>";
    ?>

    <h2>2. Local Scope</h2>
    <p>
        Variables declared inside a function have <strong>local scope</strong> and can only be accessed within that function.
    </p>

    <?php
        function localScopeExample() {
            $localVar = 50; // Local variable
            echo "<div class='example'>Local Variable inside Function: $localVar</div>";
        }

        localScopeExample();

        // Trying to access local variable outside function (will cause error if uncommented)
        // echo $localVar; // ❌ Undefined variable error
    ?>

    <h2>3. Static Scope</h2>
    <p>
        A <strong>static variable</strong> retains its value between function calls.
    </p>

    <?php
        function staticExample() {
            static $count = 0; // Static variable
            $count++;
            echo "<div class='example'>Static Variable Count: $count</div>";
        }

        staticExample();
        staticExample();
        staticExample();
    ?>

    <h3>Explanation:</h3>
    <ul>
        <li>The variable <code>$count</code> is declared as <code>static</code>.</li>
        <li>It keeps its previous value even after the function execution ends.</li>
        <li>Each time the function is called, <code>$count</code> retains its last value and increments by one.</li>
    </ul>

    <h2>4. Function Parameters (Local Scope)</h2>
    <p>
        Variables passed to a function as parameters also have <strong>local scope</strong> — they exist only inside that function.
    </p>

    <?php
        function parameterExample($name) {
            echo "<div class='example'>Hello, $name! This variable exists only inside the function.</div>";
        }

        parameterExample("Kartik");
        parameterExample("Riya");

        // The following will give an error if uncommented:
        // echo $name; // ❌ Undefined variable error
    ?>

    <h2>Conclusion</h2>
    <p>
        PHP variables have different scopes depending on where and how they are declared:
    </p>
    <ul>
        <li><strong>Global:</strong> Declared outside any function; use <code>global</code> to access inside a function.</li>
        <li><strong>Local:</strong> Declared inside a function; accessible only there.</li>
        <li><strong>Static:</strong> Remembers its value between function calls.</li>
        <li><strong>Function Parameters:</strong> Act like local variables and exist only within the function.</li>
    </ul>

</body>
</html>
