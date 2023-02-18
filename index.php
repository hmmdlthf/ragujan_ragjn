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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="<?=$style_path?>bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <?php include "/head/link_tags.php" ?>
</head>

<body>
    <script>
        window.location = "/home/index.php";
    </script>
</body>

</html>