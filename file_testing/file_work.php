<?php
$ROOT = $_SERVER["DOCUMENT_ROOT"];
require_once $ROOT . "/util/path_config/global_link_files.php";
$folder_creation_path = GlobalLinkFiles::getFilePath("folder_creation");
$file = $ROOT . "/file_testing/a.zip";
// $file = '../file_testing/a.zip';
$other_directory =  $ROOT . "/folder_creation/a.zip";;
if (file_exists($file)) {
    echo $other_directory;
    echo copy($file, $other_directory);
}
