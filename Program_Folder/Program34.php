<?php
// Define a directory
$dirName = "demo_dir";

// Create directory if it does not exist
if(isset($_POST['create_dir'])){
    if(!is_dir($dirName)){
        mkdir($dirName, 0755); // 0755 permissions
        $msg = "Directory '$dirName' created successfully!";
    } else {
        $msg = "Directory '$dirName' already exists.";
    }
}

// Delete directory
if(isset($_POST['delete_dir'])){
    if(is_dir($dirName)){
        rmdir($dirName);
        $msg = "Directory '$dirName' deleted successfully!";
    } else {
        $msg = "Directory '$dirName' does not exist.";
    }
}

// List files in directory
$filesList = [];
if(is_dir($dirName)){
    $filesList = scandir($dirName); // Returns array of files and folders
}

// Get information about a file
$fileInfo = "";
$exampleFile = "example.txt";
if(file_exists($exampleFile)){
    $fileInfo = "File: $exampleFile<br>";
    $fileInfo .= "Size: " . filesize($exampleFile) . " bytes<br>";
    $fileInfo .= "Last modified: " . date("F d Y H:i:s.", filemtime($exampleFile)) . "<br>";
    $fileInfo .= "Readable: " . (is_readable($exampleFile) ? "Yes" : "No") . "<br>";
    $fileInfo .= "Writable: " . (is_writable($exampleFile) ? "Yes" : "No") . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File System & Directory Functions</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
        input[type="submit"] { padding: 6px; margin-top: 5px; }
    </style>
</head>
<body>

<h1>PHP File System & Directory Functions</h1>

<?php if(isset($msg)) echo "<div class='example'>$msg</div>"; ?>

<h2>1️⃣ Creating and Deleting Directories</h2>
<form method="POST" action="">
    <input type="submit" name="create_dir" value="Create Directory '<?php echo $dirName; ?>'">
    <input type="submit" name="delete_dir" value="Delete Directory '<?php echo $dirName; ?>'">
</form>

<h2>2️⃣ Listing Files and Folders in a Directory</h2>
<div class="example">
<?php
if(!empty($filesList)){
    echo "<strong>Contents of directory '$dirName':</strong><br>";
    foreach($filesList as $file){
        if($file != "." && $file != ".."){
            echo $file . "<br>";
        }
    }
} else {
    echo "Directory '$dirName' does not exist or is empty.";
}
?>
</div>

<h2>3️⃣ File Information</h2>
<div class="example">
<?php
if($fileInfo != ""){
    echo $fileInfo;
} else {
    echo "File '$exampleFile' does not exist.";
}
?>
</div>

<h2>4️⃣ Notes</h2>
<ul>
    <li><strong>is_dir($dir)</strong> – Checks if a directory exists.</li>
    <li><strong>mkdir($dir, permissions)</strong> – Creates a new directory with specified permissions.</li>
    <li><strong>rmdir($dir)</strong> – Deletes a directory (must be empty).</li>
    <li><strong>scandir($dir)</strong> – Returns an array of files and directories inside a folder.</li>
    <li><strong>file_exists($file)</strong> – Checks if a file exists.</li>
    <li><strong>filesize($file)</strong> – Returns size of the file in bytes.</li>
    <li><strong>filemtime($file)</strong> – Returns last modification time.</li>
    <li><strong>is_readable($file), is_writable($file)</strong> – Check file permissions.</li>
</ul>

</body>
</html>
