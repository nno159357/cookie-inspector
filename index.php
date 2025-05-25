<?php
$flag = file_get_contents("flag.txt");
$cookie_value = $_COOKIE["role"] ?? "guest";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Cookie Inspector</title>
</head>
<body style="background:#222;color:white;font-family:sans-serif;text-align:center;padding-top:100px;">
  <h1>Welcome to the secret bakery 🍪</h1>
  <?php if ($cookie_value === "admin") : ?>
    <p>Welcome, admin! 🎉 Here is your flag:</p>
    <code><?= htmlspecialchars($flag) ?></code>
  <?php else: ?>
    <p>Sorry, only admins can see the flag.</p>
  <?php endif; ?>
</body>
</html>
