<?php
// File path
$filename = "data.txt";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Reading & Writing</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
        input[type="text"], textarea, input[type="submit"] { padding: 6px; margin-top: 5px; width: 400px; }
    </style>
</head>
<body>

<h1>PHP File Reading and Writing Functions</h1>

<h2>1️⃣ Writing to a File using fopen() & fwrite()</h2>

<form method="POST" action="">
    <label>Enter text to append to file:</label><br>
    <input type="text" name="text" required>
    <input type="submit" name="write" value="Write to File">
</form>

<?php
if(isset($_POST['write'])){
    $text = $_POST['text'];

    // Open file in append mode
    $file = fopen($filename, "a");
    if($file){
        fwrite($file, $text . PHP_EOL);
        fclose($file);
        echo "<div class='example'>Text successfully written using <strong>fopen()</strong> & <strong>fwrite()</strong>.</div>";
    } else {
        echo "<div class='example'>Unable to open file for writing.</div>";
    }
}
?>

<hr>

<h2>2️⃣ Reading from a File using fopen() & fgets()</h2>

<?php
if(file_exists($filename)){
    echo "<div class='example'><strong>Contents of the file:</strong><br>";
    $file = fopen($filename, "r");
    if($file){
        while(!feof($file)){
            echo htmlspecialchars(fgets($file)) . "<br>";
        }
        fclose($file);
    } else {
        echo "Unable to open file for reading.";
    }
    echo "</div>";
} else {
    echo "<div class='example'>File does not exist yet.</div>";
}
?>

<hr>

<h2>3️⃣ Using file_get_contents() & file_put_contents()</h2>

<form method="POST" action="">
    <label>Enter text to overwrite file using file_put_contents():</label><br>
    <input type="text" name="overwrite" required>
    <input type="submit" name="overwrite_file" value="Overwrite File">
</form>

<?php
if(isset($_POST['overwrite_file'])){
    $overwriteText = $_POST['overwrite'];
    file_put_contents($filename, $overwriteText . PHP_EOL);
    echo "<div class='example'>File overwritten successfully using <strong>file_put_contents()</strong>.</div>";
}

if(file_exists($filename)){
    $content = file_get_contents($filename);
    echo "<div class='example'><strong>Current file content using <em>file_get_contents()</em>:</strong><br>";
    echo nl2br(htmlspecialchars($content));
    echo "</div>";
}
?>

<hr>

<h2>4️⃣ Notes</h2>
<ul>
    <li><strong>fopen()</strong> – Opens a file in different modes: 'r', 'w', 'a', etc.</li>
    <li><strong>fwrite()</strong> – Writes data to a file.</li>
    <li><strong>fread() / fgets()</strong> – Reads data from a file.</li>
    <li><strong>fclose()</strong> – Closes the file after operations.</li>
    <li><strong>file_get_contents()</strong> – Reads the entire file into a string.</li>
    <li><strong>file_put_contents()</strong> – Writes or overwrites the entire file content.</li>
</ul>

</body>
</html>
