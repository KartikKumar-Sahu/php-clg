<?php
// File path
$filename = "./example.txt";

// Check if the file exists
$fileExists = file_exists($filename);

// Get file permissions
if($fileExists){
    $perms = fileperms($filename);
    // Convert permissions to human-readable format
    $humanPerms = substr(sprintf('%o', $perms), -4);
}else{
    $humanPerms = "File does not exist yet";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling & Permissions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
        input[type="text"], input[type="submit"] { padding: 6px; margin-top: 5px; }
    </style>
</head>
<body>

<h1>PHP File Handling & Permissions</h1>

<h2>1️⃣ Understanding File Permissions</h2>
<div class="example">
    <strong>File:</strong> <?php echo $filename; ?><br>
    <strong>Permissions:</strong> <?php echo $humanPerms; ?><br>
    <small>(Permissions are shown in octal format, e.g., 0644)</small>
</div>

<h2>2️⃣ Opening & Writing to a File</h2>

<form method="POST" action="">
    <label>Enter some text to write to the file:</label><br>
    <input type="text" name="content" required>
    <input type="submit" name="write" value="Write to File">
</form>

<?php
if(isset($_POST['write'])){
    $content = $_POST['content'];

    // Open file in append mode (a) or create if doesn't exist
    $file = fopen($filename, "a");
    if($file){
        fwrite($file, $content . PHP_EOL); // Write content with newline
        fclose($file); // Close the file
        echo "<div class='example'>Successfully written to the file!</div>";
    } else {
        echo "<div class='example'>Failed to open the file.</div>";
    }
}
?>

<h2>3️⃣ Reading from a File</h2>

<?php
if(file_exists($filename)){
    echo "<div class='example'><strong>Contents of the file:</strong><br>";
    $file = fopen($filename, "r"); // Open in read mode
    if($file){
        while(!feof($file)){
            echo htmlspecialchars(fgets($file)) . "<br>";
        }
        fclose($file);
    } else {
        echo "Unable to open the file for reading.";
    }
    echo "</div>";
} else {
    echo "<div class='example'>File does not exist yet. Write something above to create it.</div>";
}
?>

<h2>4️⃣ Notes</h2>
<ul>
    <li>PHP file permissions can be checked using <code>fileperms()</code>. Common permission codes: 0644 (read/write owner, read others).</li>
    <li>Use <code>fopen()</code> to open a file in modes like "r" (read), "w" (write), "a" (append).</li>
    <li>Always close the file after operations using <code>fclose()</code>.</li>
    <li>Use <code>fwrite()</code> to write data and <code>fgets()</code> or <code>fread()</code> to read data.</li>
</ul>

</body>
</html>
