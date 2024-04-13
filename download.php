<?php
include("includes/db.php");
if(isset($_GET['path'])){
    $url = $_GET['path'];

    clearstatcache();
    if(file_exists($url)){
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($url).'"');
        header('content-Length: '. filesize($url));
        header('Pragma: public');

        flush();

        readfile($url,true);
        // readfile("{$_GET['filename']}.pdf");

        die();
    }else{
        echo "File does not exist ";
    }
}
echo "File is not defined";

?>