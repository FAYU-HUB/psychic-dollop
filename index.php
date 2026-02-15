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
