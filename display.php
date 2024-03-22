<?php
$targetDir = "uploads/";
$files = scandir($targetDir);
$allowedExtensions = ["jpg", "jpeg", "png", "gif", "mp4", "webm"];

foreach($files as $file) {
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    if (in_array($extension, $allowedExtensions)) {
        echo "<a href='$targetDir$file' target='_blank'>$file</a><br>";
    }
}
?>
