<?php

$fileName = $_GET['fileName'];

if(file_exists($fileName)){
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Type: application/pdf");
    header("Content-Disposition: attachment; filename=$filename");
    header('Content-Length'. filesize($fileName));
    header("Content-Transfer-Encoding: binary");
    readfile($fileName);
    exit;
}
?>
