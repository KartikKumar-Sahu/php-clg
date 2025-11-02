<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inspecting and Deleting from Arrays in PHP</title>
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
            background-color: #f8f9fa;
            padding: 10px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-family: Consolas, monospace;
        }
    </style>
</head>
<body>

<h1>Inspecting and Deleting from Arrays in PHP</h1>

<p>
    In PHP, we often need to <strong>inspect arrays</strong> (to see their structure or contents)
    and <strong>delete elements</strong> when they’re no longer needed.
</p>

<hr>

<h2>1️⃣ Creating a Simple Array</h2>

<?php
// Create an indexed array
$fruits = array("Apple", "Banana", "Cherry", "Mango");

echo "<div class='example'>";
print_r($fruits);
echo "</div>";
?>

<h2>2️⃣ Inspecting Arrays</h2>

<p>PHP provides several functions to inspect or examine arrays:</p>

<?php
echo "<div class='example'>";
echo "Number of elements: " . count($fruits) . "<br>";
echo "Is it an array? " . (is_array($fruits) ? "Yes" : "No") . "<br><br>";

echo "Detailed structure using <strong>var_dump()</strong>:<br>";
var_dump($fruits);
echo "</div>";
?>

<h2>3️⃣ Accessing Individual Elements</h2>

<?php
echo "<div class='example'>";
echo "First Fruit: " . $fruits[0] . "<br>";
echo "Last Fruit: " . end($fruits) . "<br>";
echo "</div>";
?>

<h2>4️⃣ Deleting Elements from Arrays</h2>

<p>We can remove elements using different PHP functions:</p>

<?php
echo "<div class='example'>";

// Remove a specific element using unset()
unset($fruits[1]); // Removes "Banana"
echo "After unset(\$fruits[1]):<br>";
print_r($fruits);
echo "<br><br>";

// Remove the last element using array_pop()
array_pop($fruits); // Removes "Mango"
echo "After array_pop():<br>";
print_r($fruits);
echo "<br><br>";

// Remove the first element using array_shift()
array_shift($fruits); // Removes "Apple"
echo "After array_shift():<br>";
print_r($fruits);

echo "</div>";
?>

<h2>5️⃣ Re-indexing the Array</h2>

<p>After deleting elements, the index numbers may not be sequential.  
We can fix this using <code>array_values()</code>:</p>

<?php
echo "<div class='example'>";
$fruits = array_values($fruits);
print_r($fruits);
echo "</div>";
?>

<h2>6️⃣ Example with Associative Array</h2>

<?php
$person = array("name" => "Kartik", "age" => 22, "city" => "Delhi");

echo "<div class='example'>";
echo "Original Array:<br>";
print_r($person);
echo "<br><br>Deleting 'age' using unset():<br>";

unset($person["age"]);
print_r($person);
echo "</div>";
?>

<h2>✅ Conclusion</h2>
<ul>
    <li><code>count()</code> – Count elements in an array.</li>
    <li><code>is_array()</code> – Check if a variable is an array.</li>
    <li><code>var_dump()</code> or <code>print_r()</code> – Inspect array contents.</li>
    <li><code>unset()</code>, <code>array_pop()</code>, <code>array_shift()</code> – Delete elements.</li>
    <li><code>array_values()</code> – Re-index an array after deletion.</li>
</ul>

</body>
</html>
