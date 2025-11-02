<?php
// Enable session ID propagation via URL if cookies are disabled
ini_set('session.use_cookies', 0);
ini_set('session.use_only_cookies', 0);
ini_set('session.use_trans_sid', 1);

// Increase session lifetime to 30 minutes
ini_set('session.gc_maxlifetime', 1800);
session_set_cookie_params(1800);

// Start the session
session_start();

// Encoding / Decoding session variable
if(!isset($_SESSION['user'])){
    $_SESSION['user'] = base64_encode("Kartik"); // Store encoded value
}
$decodedUser = base64_decode($_SESSION['user']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advanced Sessions in PHP</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        .example { background-color: #f4f4f4; padding: 10px; border: 1px solid #ddd; margin-bottom: 15px; }
        a { color: blue; text-decoration: none; }
    </style>
</head>
<body>

<h1>Advanced Session Handling in PHP</h1>

<h2>1️⃣ Passing Session IDs via URL</h2>
<p>
    Session ID is automatically passed via URL when cookies are disabled using 
    <code>session.use_trans_sid</code>. Your session URL looks like:
</p>
<div class="example">
    <a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF'] . '?' . SID); ?>">
        Click here to pass session ID via URL
    </a>
</div>
<p>Notice the session ID in the URL (PHPSESSID).</p>

<hr>

<h2>2️⃣ Encoding & Decoding Session Variables</h2>
<div class="example">
    Original value stored in session (encoded with base64): <?php echo $_SESSION['user']; ?><br>
    Decoded value: <?php echo $decodedUser; ?>
</div>

<hr>

<h2>3️⃣ Increasing Session Expiration Time</h2>
<p>
    Session lifetime has been increased to <strong>30 minutes</strong> using <code>session.gc_maxlifetime</code>.
    Additionally, <code>session_set_cookie_params(1800)</code> ensures the cookie expires in 30 minutes.
</p>

<hr>

<h2>4️⃣ Working With Session Without Cookies</h2>
<p>
    Cookies are disabled in this example. Session ID is passed in the URL automatically.
    The session works as long as you continue to use the URL with <code>PHPSESSID</code>.
</p>

<div class="example">
    <strong>Current Session ID:</strong> <?php echo session_id(); ?><br>
    <strong>Session Variables:</strong><br>
    <?php
    foreach($_SESSION as $key => $value){
        echo "$key => $value<br>";
    }
    ?>
</div>

<hr>

<h2>5️⃣ Notes</h2>
<ul>
    <li>By default, sessions use cookies to store session IDs. You can force session propagation via URL for clients without cookies.</li>
    <li>Session variables can be encoded for security or serialization purposes.</li>
    <li>Session expiration can be increased using <code>session.gc_maxlifetime</code> and <code>session_set_cookie_params()</code>.</li>
</ul>

</body>
</html>
