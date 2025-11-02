<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in PHP</title>
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

<h1>Arrays in PHP</h1>

<p>
    An <strong>array</strong> in PHP is a special variable that can hold multiple values at once.
    Arrays are useful for storing related data — like a list of names, numbers, or key-value pairs.
</p>

<h2>1. Creating Arrays in PHP</h2>

<?php
    // Indexed Array
    $fruits = array("Apple", "Banana", "Cherry");

    // Associative Array
    $student = array(
        "name" => "Kartik",
        "age" => 21,
        "course" => "BCA"
    );

    // Multidimensional Array
    $marks = array(
        "Kartik" => array("Math" => 85, "Science" => 90),
        "Ravi"   => array("Math" => 75, "Science" => 80)
    );

    echo "<div class='example'>";
    echo "<strong>Indexed Array:</strong><br>";
    print_r($fruits);
    echo "<br><br><strong>Associative Array:</strong><br>";
    print_r($student);
    echo "<br><br><strong>Multidimensional Array:</strong><br>";
    print_r($marks);
    echo "</div>";
?>

<h2>2. Accessing Array Elements</h2>

<?php
    echo "<div class='example'>";
    echo "<strong>Indexed Array Elements:</strong><br>";
    echo "First Fruit: " . $fruits[0] . "<br>";
    echo "Second Fruit: " . $fruits[1] . "<br>";

    echo "<br><strong>Associative Array Elements:</strong><br>";
    echo "Name: " . $student["name"] . "<br>";
    echo "Age: " . $student["age"] . "<br>";
    echo "Course: " . $student["course"] . "<br>";

    echo "<br><strong>Multidimensional Array Elements:</strong><br>";
    echo "Kartik's Science Marks: " . $marks["Kartik"]["Science"] . "<br>";
    echo "Ravi's Math Marks: " . $marks["Ravi"]["Math"] . "<br>";
    echo "</div>";
?>

<h2>3. Displaying Array Elements using Loops</h2>

<?php
    echo "<div class='example'>";
    echo "<strong>Using foreach loop for Indexed Array:</strong><br>";
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>";
    }

    echo "<br><strong>Using foreach loop for Associative Array:</strong><br>";
    foreach ($student as $key => $value) {
        echo ucfirst($key) . ": $value<br>";
    }
    echo "</div>";
?>

<h2>Conclusion</h2>
<p>
    PHP supports three main types of arrays:
</p>

<ul>
    <li><strong>Indexed Arrays</strong> – use numeric indexes (e.g. <code>$fruits[0]</code>)</li>
    <li><strong>Associative Arrays</strong> – use named keys (e.g. <code>$student['name']</code>)</li>
    <li><strong>Multidimensional Arrays</strong> – arrays inside arrays (e.g. <code>$marks['Kartik']['Math']</code>)</li>
</ul>

</body>
</html>
