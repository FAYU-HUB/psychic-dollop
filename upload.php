<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['sc'])) {
    if (!is_dir('scripts')) mkdir('scripts');
    $name = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 6);
    file_put_contents("scripts/$name.lua", $_POST['sc']);
    $link = "http://" . $_SERVER['HTTP_HOST'] . "/index.php?id=" . $name;
    echo "<script>alert('Berhasil! Link: $link');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload Script</title>
    <style>
        body { background: #f0f0f0; font-family: monospace; padding: 50px; text-align: center; }
        textarea { width: 80%; height: 300px; border: 1px solid #000; padding: 10px; }
        button { background: #000; color: #fff; border: none; padding: 10px 20px; cursor: pointer; margin-top: 10px; }
        button:hover { background: #333; }
    </style>
</head>
<body>
    <h2>Uploader</h2>
    <form method="POST">
        <textarea name="sc" placeholder="Paste script Lua di sini..."></textarea><br>
        <button type="submit">UPLOAD SCRIPT</button>
    </form>
</body>
</html>
