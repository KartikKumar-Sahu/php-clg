<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms, Superglobals & Database in PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        form { margin-bottom: 20px; padding: 15px; border: 1px solid #ccc; width: 400px; }
        label { display: block; margin-top: 10px; }
        input[type="text"], input[type="number"] { width: 100%; padding: 6px; margin-top: 4px; }
        input[type="submit"] { margin-top: 15px; padding: 8px 12px; }
        table { border-collapse: collapse; width: 80%; margin-top: 20px; }
        th, td { border: 1px solid #555; padding: 8px; text-align: left; }
        th { background-color: #d3e0ea; }
    </style>
</head>
<body>

<h1>PHP Forms, Superglobals & Database Integration</h1>

<h2>1️⃣ HTML Form and Superglobals</h2>

<form method="POST" action="">
    <h3>Enter Student Details</h3>
    <label>Name:
        <input type="text" name="name" required>
    </label>
    <label>Age:
        <input type="number" name="age" required>
    </label>
    <label>Course:
        <input type="text" name="course" required>
    </label>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
// Superglobals to access user input
if (isset($_POST['submit'])) {
    $name = $_POST['name'];   // Accessing form input
    $age = $_POST['age'];
    $course = $_POST['course'];

    echo "<div><strong>Submitted Data:</strong><br>";
    echo "Name: $name<br>Age: $age<br>Course: $course</div>";
}
?>

<hr>

<h2>2️⃣ Database Integration (MySQL)</h2>

<?php
// Database connection parameters
$servername = "localhost";
$username = "root";      // default XAMPP username
$password = "1234@Kaku";          // default XAMPP password is empty
$dbname = "php_demo";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database if not exists
$conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
$conn->select_db($dbname);

// Create table if not exists
$table_sql = "CREATE TABLE IF NOT EXISTS students (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INT(3) NOT NULL,
    course VARCHAR(50) NOT NULL
)";
$conn->query($table_sql);

// Insert form data into database
if (isset($_POST['submit'])) {
    $stmt = $conn->prepare("INSERT INTO students (name, age, course) VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $name, $age, $course);
    $stmt->execute();
    $stmt->close();
}
?>

<h2>3️⃣ Fetching & Displaying Data from Database</h2>

<?php
$result = $conn->query("SELECT * FROM students");

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Course</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['course']."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No students found in the database.";
}

$conn->close();
?>

<hr>

<h2>✅ Instructions to Integrate with SQL (XAMPP)</h2>
<ol>
    <li>Start <strong>Apache</strong> and <strong>MySQL</strong> in XAMPP Control Panel.</li>
    <li>Save this file as <code>Program28.php</code> inside <code>htdocs/your-project-folder/</code>.</li>
    <li>Open browser and visit: <code>http://localhost/your-project-folder/Program28.php</code></li>
    <li>Form submissions will automatically create a database <code>php_demo</code> and a table <code>students</code>.</li>
    <li>Fill the form to insert data. Data will be displayed in the table below the form.</li>
    <li>You can modify the code to include editing functionality by adding an edit form and an UPDATE SQL query.</li>
</ol>

</body>
</html>
