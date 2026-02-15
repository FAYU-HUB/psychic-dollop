<?php
header('Content-Type: text/plain');
$id = $_GET['id'] ?? '';
$file = "scripts/" . $id . ".lua";

if (!empty($id) && file_exists($file)) {
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'Roblox') !== false || isset($_GET['raw'])) {
        echo file_get_contents($file);
        exit;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>403 Forbidden</title>
    <a href="upload.php" style="color: white; text-decoration: none; font-size: 1px;">.</a>
    <style>
        body { background: #fff; color: #000; font-family: monospace; padding: 20px; }
    </style>
</head>
<body>
    Access Denied
</body>
</html>
