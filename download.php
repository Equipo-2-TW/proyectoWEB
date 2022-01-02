<?php
if (!empty($_GET['file'])) {
    $filename = basename($_GET['file']);
    $filepath = "files/$filename";
    if (!empty($filename) && file_exists($filepath)) {
        header('Cache-Control: public');
        header('Content-Description: File Transfer');
        header('Content-Disposition: attachment; filename='.$filename);
        header('Content-Type: application/zip');
        header('Content-Transfer-Encoding: binary');
        readfile($filepath);
    }
    else echo "Ese archivo no existe";
}
?>
