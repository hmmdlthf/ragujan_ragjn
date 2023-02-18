<?php
session_start();
$ROOT = $_SERVER["DOCUMENT_ROOT"];
require_once $ROOT . "/util/path_config/global_link_files.php";

$style_path = GlobalLinkFiles::getDirectoryPath("style");
$site_header = GlobalLinkFiles::getFilePath("site_header_php");
$query_path = GlobalLinkFiles::getFilePath("sample_queries");
$resource_path = GlobalLinkFiles::getDirectoryPath("resources");
$home_page_script = GlobalLinkFiles::getRelativePath("home_page_script");
$audio_sample_display_page_shortend = GlobalLinkFiles::getRelativePath("audio_sample_display_page_shortend");
// include_once $query_path;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?=$style_path?>bootstrap.css">
    <link rel="stylesheet" href="<?=$style_path?>home.css">
    <link rel="stylesheet" href="<?=$style_path?>navbar.css">
    <title>BeatSample</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
    <?php include "head/link_tags.php"; ?>
    <link rel="shortcut icon" href="/resources/icon_images/logo_transparent.png" type="image/x-icon">
</head>

<body>



    <div class="container-fluid therelativediv">
        <div class="col-12">
            <div class="row">
                <div class="navbarmaindiv   col-12">
                    <div class="row">
             
                        <?php
                        require $site_header
                        ?>

                    </div>
                </div>
                <div id="homediv1" class="col-12 homediv1  ">
                    <div class="row">
                        <div class="col-12   homevideodiv">
                            <div class="back1">
                                <video id="background-video" class="homevideo" autoplay loop muted>
                                    <source src="<?=$resource_path?>video/home.mp4" type="video/mp4">
                                </video>
                            </div>

                            <div class="front1 col-12  introdiv mt-5 ">
                                <div class="row mt-5">

                                    <div class="col-12  ">
                                        <div class="row">
                                            <div class="col-8 mt-3 text-center mt-sm-1 offset-2 mt-sm-5 mt-md-2 mt-lg-0  text-center ">
                                                <h1 class="deshead text-white  text-white-50 ">RagJN</h1>
                                                <p class=" des  text-white-50">Get high quality samples from RAG</p>
                                            </div>
                                            <div class="col-12 text-center ">
                                                <img src="<?=$resource_path?>icon_images/logo_transparent.png" class="ragnormal" alt="">
                                            </div>
                                        </div>

                                    </div>


                                </div>

                            </div>
           


                        </div>
                        <div id="popularsamplediv" class="col-12  d-none makeAbsolute  text-center">

                            <div class="row">
                                <div class="col-12 bg-black therollercontentdiv">
                                    <div class="row">
                                        <div class="col-12 py-2">
                                            <h1>Popular Ones</h1>
                                        </div>
                                        <div class="col-12 offset-0 col-md-8 offset-md-2">
                                            <?php
                                            require_once "query.php";

                                            ?>
                                            <div class="row">

                                                <?php
                                                $popularsamples = new Search();
                                                $popularsamples->limitsearch();
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-12 bigintodiv">
                    <div class="row">
                        <div class="col-12 py-5">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <div class="row">
                                        <div class="col-12">
                                            <h1 class="fw-bold introheader">Intro RagJN</h1>
                                        </div>
                                        <div class="col-12">

                                        </div>
                                        <div class="col-12">
                                            <p class="intropara ">RagJN is the Game if you don't know now you know hahaha been producing music moreover a decade</p>
                                        </div>
                                    </div>



                                </div>
                                <div class="col-12 text-center">
                                    <h1>What you can get from RagJN</h1>
                                    <ul class="introlist">
                                        <li class="liintrolist">High Quality Melodies</li>
                                        <li class="liintrolist">High Quality Drums that suits the vibes</li>
                                        <li class="liintrolist">High Quatliy Samples => High Quality Tracks => Pocket Full of Cash </li>
                                        <li class="liintrolist">Various types of instrumentals that can fit any scenario</li>
                                        <li class="liintrolist">Midi Packs Saves you lots of lots of money</li>

                                    </ul>
                                </div>

                                <div class="col-12 py-5 text-center ">
                                    <button class="checksamplebutton"><a href="<?=$audio_sample_display_page_shortend?>" class="text-decoration-none">Check Samples Store</a></button>
                                </div>
                                <div class="col-12 sociallinkholdingdiv ">
                                    <div class="row">
                                        <div class="col-8 offset-2 d-flex d-inline-flex justify-content-between">
                                            <span class="sociallinks">Instagram</span>
                                            <span class="sociallinks">Facebook</span>
                                            <span class="sociallinks">SoundCloud</span>
                                            <span class="sociallinks">Snapchat</span>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-12 text-center pt-2">
                            <h1 class="cardinfo">We accept</h1>
                        </div>
                        <div class="col-6 offset-3 pt-2 pb-5">
                            <div class="row">
                                <div class="col text-center">
                                    <img src="<?=$resource_path?>payment_method_images/1.png" class="paymentmethods" alt="">
                                </div>
                                <div class="col text-center">
                                    <img src="<?=$resource_path?>payment_method_images/2.png" class="paymentmethods" alt="">
                                </div>
                                <div class="col text-center">
                                    <img src="<?=$resource_path?>payment_method_images/3.png" class="paymentmethods" alt="">
                                </div>
                                <div class="col text-center">
                                    <img src="<?=$resource_path?>payment_method_images/4.png" class="paymentmethods" alt="">
                                </div>
                                <div class="col text-center">
                                    <img src="<?=$resource_path?>payment_method_images/5.png" class="paymentmethods" alt="">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>
    <script src="<?=$home_page_script?>"></script>
</body>

</html>