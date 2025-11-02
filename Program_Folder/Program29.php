<?php
// Start the session at the beginning of the script
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction to Sessions in PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
        input[type="text"], input[type="submit"] { padding: 6px; margin-top: 5px; }
    </style>
</head>
<body>

<h1>Introduction to Sessions in PHP</h1>

<p>
    A <strong>session</strong> allows you to store data on the server for individual users.
    Unlike cookies, session data is not stored on the client side. Sessions are commonly
    used to store user login information, preferences, or temporary data across pages.
</p>

<hr>

<h2>1️⃣ Starting a Session</h2>

<p>
    Use <code>session_start()</code> at the beginning of your PHP script. 
    This initializes a session or resumes an existing one.
</p>

<hr>

<h2>2️⃣ Storing Data in a Session</h2>

<form method="POST" action="">
    <label>Enter Your Name: 
        <input type="text" name="username" required>
    </label>
    <input type="submit" name="submit" value="Save in Session">
</form>

<?php
if(isset($_POST['submit'])){
    $_SESSION['username'] = $_POST['username']; // Store data in session
    echo "<div class='example'>Session variable 'username' is set! Value: " . $_SESSION['username'] . "</div>";
}
?>

<hr>

<h2>3️⃣ Accessing Session Data</h2>

<?php
if(isset($_SESSION['username'])){
    echo "<div class='example'>Hello, " . $_SESSION['username'] . "! This value is stored in the session.</div>";
}else{
    echo "<div class='example'>No session variable is set yet. Submit the form above to store your name.</div>";
}
?>

<hr>

<h2>4️⃣ Notes</h2>
<ul>
    <li>Always call <code>session_start()</code> before accessing <code>$_SESSION</code>.</li>
    <li>Session data is stored on the server, linked to the user via a session ID stored in a cookie.</li>
    <li>Sessions are useful for login systems, shopping carts, and preserving data across multiple pages.</li>
</ul>

</body>
</html>
