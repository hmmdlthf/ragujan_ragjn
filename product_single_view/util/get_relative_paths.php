<?php

$name;
if (isset($_POST["name"])) {

    $name = $_POST["name"];
    require_once $_SERVER["DOCUMENT_ROOT"]."/product_single_view/util/global_link_files.php";

    echo  GlobalLinkFiles::getRelativePath($name);
}
