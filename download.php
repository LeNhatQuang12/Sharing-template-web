<?php
require 'inc/autoload.php';
$template = Template::get($_GET['id']);
$file = ROOTPATH.'/templates/'.$template->file;
if(file_exists($file)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);

    User::getCurrent()->saveDownloadHistory($template);
    exit;
}
