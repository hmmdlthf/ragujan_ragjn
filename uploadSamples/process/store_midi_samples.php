<?php

require_once "../utils/sample_unique_process.php";
require_once "../query/sample_queries.php";
require_once $_SERVER["DOCUMENT_ROOT"] . "/sampleSelling-master/util/path_config/global_link_files.php";

$image_path = GlobalLinkFiles::getDirectoryPath("midi_sample_image");

$zip_path = GlobalLinkFiles::getDirectoryPath("midi_sample_zip_file");

$file_handler_path = GlobalLinkFiles::getFilePath("file_handler");

require_once $file_handler_path;


$charLength = 25;
if (
    isset($_POST["SampleName"]) &&  !empty($_POST["SampleName"])
    && isset($_POST["SamplePrice"]) && intval($_POST["SamplePrice"])
    && !empty($_POST["SamplePrice"]) && isset($_POST["SampleDescription"])
    && !empty($_POST["SampleDescription"])
) {


    if (isset($_FILES["SampleFile"])) {
        if (
            $_FILES["SampleFile"]["type"] == "application/x-zip-compressed"  && $_FILES["SampleImage"]["type"] == "image/jpeg"
        ) {
            $query = new SampleQueries();

            $sname = $_POST["SampleName"];
            $sprice = $_POST["SamplePrice"];
            $subSampletype = $_POST["SampleSubMelody"];
            $sampledescription = $_POST["SampleDescription"];

            $date = date("Y-m-d h:i:s");
            $sampleUniqueiDProcess = new SampleUniqueiDProcess();
            $checked_random_id = $sampleUniqueiDProcess->getCheckedRandomUniqueId();
            $query->insertSamples($sname, $date, $sprice, $subSampletype, $sampledescription, $checked_random_id);
            $last_id = $query->get_sample_id($checked_random_id);
            if ($last_id != null) {

                if (isset($_FILES["SampleFile"])) {
                    $fileHandlerforzip = new FileHandler();
                    $fileHandlerforzip->filedetails($_FILES["SampleFile"], $zip_path, "50000000", "zip");
                    $zippathname = $zip_path . $fileHandlerforzip->getFilename();

                    // DB::insert("INSERT INTO `samplePath`(`samplePath`,`sampleID`) VALUES ('" . $zippathname . "','" . $lastID . "') ");
                    $query->insertAudioSampleZipSrc($zippathname, $last_id);
                }
            
                if (isset($_FILES["SampleImage"])) {

                    $fileHandlerforzip = new FileHandler();
                    $fileHandlerforzip->filedetails($_FILES["SampleImage"], $image_path, "50000000", "jpg");
                    $imagepathname = $image_path . $fileHandlerforzip->getFilename();
                    // DB::insert("INSERT INTO `sampleimages`(`source_URL`,`sampleID`) VALUES ('" . $imagepathname . "','" . $lastID . "') ");
                    $query->insertImageSrc($imagepathname, $last_id);
                }
            }
        } else {

            echo "Not the exact file type ";
        }
    }
} else {
    if (!intval($_POST["SamplePrice"])) {
        echo "Invalid Input for sample price";
    }

    if (!isset($_FILES["SampleFile"])) {
        echo "No zip files has been uploaded";
    }
 
    if (!isset($_FILES["SampleImage"])) {
        echo "No Image files has been uploaded";
    }
}