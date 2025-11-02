<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multidimensional Arrays in PHP</title>
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
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #555;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #d3e0ea;
        }
    </style>
</head>
<body>

<h1>Multidimensional Arrays in PHP</h1>

<p>
    A <strong>Multidimensional Array</strong> in PHP is an array that contains one or more arrays inside it.  
    It is often used to store tabular or structured data — for example, a list of students and their marks.
</p>

<h2>1. Creating a Multidimensional Array</h2>

<?php
// Creating a multidimensional array
$students = array(
    array("Name" => "Kartik", "Math" => 85, "Science" => 90, "English" => 88),
    array("Name" => "Ravi",   "Math" => 78, "Science" => 82, "English" => 80),
    array("Name" => "Neha",   "Math" => 92, "Science" => 95, "English" => 91)
);

echo "<div class='example'>";
print_r($students);
echo "</div>";
?>

<h2>2. Accessing Elements from a Multidimensional Array</h2>

<?php
echo "<div class='example'>";
echo "Kartik's Science Marks: " . $students[0]["Science"] . "<br>";
echo "Ravi's English Marks: " . $students[1]["English"] . "<br>";
echo "Neha's Math Marks: " . $students[2]["Math"] . "<br>";
echo "</div>";
?>

<h2>3. Displaying Multidimensional Array Data in a Table</h2>

<?php
echo "<table>";
echo "<tr><th>Name</th><th>Math</th><th>Science</th><th>English</th></tr>";

// Loop through each student
foreach ($students as $student) {
    echo "<tr>";
    echo "<td>" . $student["Name"] . "</td>";
    echo "<td>" . $student["Math"] . "</td>";
    echo "<td>" . $student["Science"] . "</td>";
    echo "<td>" . $student["English"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>

<h2>4. Using Nested Loops (for more complex structures)</h2>

<?php
// Another example with nested numeric arrays
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6),
    array(7, 8, 9)
);

echo "<div class='example'>";
echo "Matrix Elements:<br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo $matrix[$i][$j] . " ";
    }
    echo "<br>";
}
echo "</div>";
?>

<h2>Conclusion</h2>
<p>
    Multidimensional arrays allow you to store and organize complex data structures in PHP.  
    You can access elements using multiple indexes or keys and loop through them using nested loops or <code>foreach</code>.
</p>

</body>
</html>
