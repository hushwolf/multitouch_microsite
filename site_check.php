<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Testing your test server</title>

</head>

<body>
<h1>The Moment of Truth</h1>
<p>If the current time is displayed below, your testing server is working.</p>
<?php
echo '<p>Congratulations. The time is now ' . date('g:i a') . '</p>';
?>
</body>
</html>