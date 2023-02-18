<?php
session_start();
$ROOT = $_SERVER["DOCUMENT_ROOT"];
require_once $ROOT . "/util/path_config/global_link_files.php";

$vendor_path = GlobalLinkFiles::getFilePath("vendor_autoload");
$authenticate_download_url = GlobalLinkFiles::getFilePath("authenticate_download");
echo $authenticate_download_url;
?>
<!DOCTYPE html>

<html lang="en">
<head>
    <title>Document</title>

    <?php include "/head/link_tags.php" ?>
</head>
<body>
   <script>
    window.location = "/home/index.php";
   </script> 
</body>
</html>