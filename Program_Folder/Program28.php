<?php
// Start the session for session cookies
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies and Sessions in PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        form { margin-top: 15px; }
    </style>
</head>
<body>

<h1>Introduction to Cookies and Sessions in PHP</h1>

<h2>1️⃣ Setting a Cookie with Expiration Time</h2>

<?php
// Set a cookie "user" that expires in 1 hour
setcookie("user", "Kartik", time() + 3600, "/"); // 3600 seconds = 1 hour

if(isset($_COOKIE['user'])){
    echo "<div class='example'>Cookie 'user' is set! Value: " . $_COOKIE['user'] . "</div>";
} else {
    echo "<div class='example'>Cookie 'user' is not set yet. Refresh after a few seconds.</div>";
}
?>

<h2>2️⃣ Deleting a Cookie</h2>

<?php
// To delete a cookie, set its expiration in the past
if(isset($_GET['delete_cookie'])){
    setcookie("user", "", time() - 3600, "/");
    echo "<div class='example'>Cookie 'user' has been deleted.</div>";
}
?>

<form method="GET" action="">
    <input type="submit" name="delete_cookie" value="Delete Cookie">
</form>

<h2>3️⃣ Creating a Session Cookie</h2>

<?php
// Session variable example
$_SESSION['username'] = "Kartik";
echo "<div class='example'>";
echo "Session cookie 'username' is set! Value: " . $_SESSION['username'];
echo "</div>";
?>

<h2>4️⃣ Accessing Cookies and Sessions</h2>

<?php
echo "<div class='example'>";
echo "<strong>Cookies:</strong><br>";
if(count($_COOKIE) > 0){
    foreach($_COOKIE as $key => $value){
        echo "$key => $value<br>";
    }
}else{
    echo "No cookies are set.<br>";
}

echo "<br><strong>Session Variables:</strong><br>";
if(count($_SESSION) > 0){
    foreach($_SESSION as $key => $value){
        echo "$key => $value<br>";
    }
}else{
    echo "No session variables are set.<br>";
}
echo "</div>";
?>

<h2>5️⃣ Notes</h2>
<ul>
    <li>Cookies are stored on the client-side and can have expiration times.</li>
    <li>Session cookies are stored on the server-side; they expire when the browser is closed (or session destroyed).</li>
    <li>Use <code>setcookie()</code> to create cookies and <code>unset()</code> or past expiry time to delete.</li>
    <li>Always call <code>session_start()</code> before accessing session variables.</li>
</ul>

</body>
</html>
