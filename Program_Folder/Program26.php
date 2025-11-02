<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iterating Arrays and Iterative Functions in PHP</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; margin: 40px; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; font-family: Consolas, monospace; }
        table { border-collapse: collapse; width: 80%; max-width: 800px; }
        th, td { border: 1px solid #555; padding: 8px; text-align: left; }
        th { background-color: #d3e0ea; }
    </style>
</head>
<body>

<h1>Iterating Arrays and Iterative Functions in PHP</h1>

<p>
    PHP provides different ways to loop through arrays and access their elements.
    The recommended modern way is <strong>foreach()</strong>. Legacy <strong>each()</strong> has been removed in PHP 8.
    You can also navigate array internal pointer manually using <code>current()</code>, <code>next()</code>, <code>prev()</code>,
    <code>reset()</code>, and <code>end()</code>.
</p>

<hr>

<h2>1️⃣ Example Array</h2>

<?php
$colors = array("Red", "Green", "Blue", "Yellow");

echo "<div class='example'>";
print_r($colors);
echo "</div>";
?>

<h2>2️⃣ Iterating using foreach()</h2>

<?php
echo "<div class='example'>";
foreach ($colors as $index => $color) {
    echo "Index $index => $color<br>";
}
echo "</div>";
?>

<h2>3️⃣ Iterating using a while loop (replacement for deprecated each())</h2>

<p>
    <em>Note:</em> <code>each()</code> was removed from PHP 8. The code below mimics its behavior safely
    by using <code>key()</code>, <code>current()</code> and <code>next()</code>.
</p>

<?php
// Reset pointer before manual iteration
reset($colors);

echo "<div class='example'>";
echo "Using while + key()/current()/next() (modern replacement for each()):<br>";

// Iterate until key() returns null (end of array)
while (key($colors) !== null) {
    $index = key($colors);
    $value = current($colors);
    echo "Index: $index → Value: $value<br>";
    next($colors);
}
echo "</div>";
?>

<h2>4️⃣ Iterative Functions in PHP</h2>

<p>These functions let you move the internal pointer and inspect elements manually.</p>

<?php
$fruits = array("Apple", "Banana", "Cherry", "Mango");

echo "<div class='example'>";
echo "Array Elements: ";
print_r($fruits);
echo "<br><br>";

// Reset pointer to the first element
reset($fruits);
echo "After reset(), current(): " . current($fruits) . "<br>";

// Move pointer to the next element
next($fruits);
echo "After next(), current(): " . current($fruits) . "<br>";

// Move pointer again
next($fruits);
echo "After next() again, current(): " . current($fruits) . "<br>";

// Move pointer backward
prev($fruits);
echo "After prev(), current(): " . current($fruits) . "<br>";

// Move pointer to last element
end($fruits);
echo "After end(), current(): " . current($fruits) . "<br>";

// Reset pointer again
reset($fruits);
echo "After reset() again, current(): " . current($fruits) . "<br>";

echo "</div>";
?>

<h2>5️⃣ Summary of Iterative Functions</h2>
<table>
    <tr><th>Function</th><th>Description</th></tr>
    <tr><td><code>current($array)</code></td><td>Return the current element (internal pointer)</td></tr>
    <tr><td><code>next($array)</code></td><td>Advance internal pointer to next element</td></tr>
    <tr><td><code>prev($array)</code></td><td>Move internal pointer to previous element</td></tr>
    <tr><td><code>reset($array)</code></td><td>Set internal pointer to the first element</td></tr>
    <tr><td><code>end($array)</code></td><td>Set internal pointer to the last element</td></tr>
    <tr><td><code>key($array)</code></td><td>Return current key at pointer (useful for manual iteration)</td></tr>
</table>

<h2>✅ Conclusion</h2>
<ul>
    <li><strong>foreach()</strong> is the recommended and simplest way to iterate an array.</li>
    <li><strong>each()</strong> is deprecated/removed — don't use it in modern PHP.</li>
    <li>Use <code>current()/next()/prev()/reset()/end()</code> with <code>key()</code> when you need manual control over the pointer.</li>
</ul>

</body>
</html>
