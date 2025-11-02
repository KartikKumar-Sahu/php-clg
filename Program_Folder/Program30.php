<?php
// Start the session at the beginning
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
        input[type="text"], input[type="submit"] { padding: 6px; margin-top: 5px; }
    </style>
</head>
<body>

<h1>PHP Session Management</h1>

<h2>1️⃣ Registering Session Variables</h2>

<form method="POST" action="">
    <label>Enter Your Username:
        <input type="text" name="username" required>
    </label><br>
    <label>Enter Your Email:
        <input type="text" name="email" required>
    </label><br>
    <input type="submit" name="register" value="Register Session Variables">
</form>

<?php
// Register session variables
if(isset($_POST['register'])){
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    echo "<div class='example'>Session variables registered successfully!</div>";
}
?>

<hr>

<h2>2️⃣ Working with Session Variables</h2>

<?php
if(isset($_SESSION['username']) && isset($_SESSION['email'])){
    echo "<div class='example'>";
    echo "<strong>Current Session Data:</strong><br>";
    echo "Username: " . $_SESSION['username'] . "<br>";
    echo "Email: " . $_SESSION['email'] . "<br>";
    echo "</div>";
} else {
    echo "<div class='example'>No session variables registered yet.</div>";
}
?>

<h3>Update Session Variables</h3>
<form method="POST" action="">
    <label>Update Username:
        <input type="text" name="new_username" placeholder="New Username">
    </label><br>
    <label>Update Email:
        <input type="text" name="new_email" placeholder="New Email">
    </label><br>
    <input type="submit" name="update" value="Update Session">
</form>

<?php
if(isset($_POST['update'])){
    if(!empty($_POST['new_username'])){
        $_SESSION['username'] = $_POST['new_username'];
    }
    if(!empty($_POST['new_email'])){
        $_SESSION['email'] = $_POST['new_email'];
    }
    echo "<div class='example'>Session variables updated successfully!</div>";
}
?>

<hr>

<h2>3️⃣ Destroying Session</h2>

<form method="POST" action="">
    <input type="submit" name="destroy" value="Destroy Session">
</form>

<?php
if(isset($_POST['destroy'])){
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    echo "<div class='example'>Session destroyed successfully! Refresh the page to see that session variables are gone.</div>";
}
?>

</body>
</html>
