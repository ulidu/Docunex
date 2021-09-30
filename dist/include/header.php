<?php

include 'dist/include/db.php';

session_start();

date_default_timezone_set('Asia/Colombo');

$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

?>

<!--

Document Management System 8 Components

Forum - Tacit
1. Create a new topic - @ulidu
2. Closing a forum - @ulidu
3. Search a forum topic - @fasliya
4. Make replies to a topic - @fasliya

Document - Explicit
5. Create Folders - @thilina
6. Delete documents - @thilina
7. Add documents by category (images, documents, videos) - For new interns, guide documents - @aruni
8. Search documents - @tharushika

-->

<!DOCTYPE html>
<html lang="en" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">

    <link rel="apple-touch-icon" sizes="180x180" href="dist/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="dist/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="dist/favicon/favicon-16x16.png">
    <link rel="manifest" href="dist/favicon/site.webmanifest">
    <link rel="mask-icon" href="dist/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#2b5797">
    <meta name="theme-color" content="#ffffff">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Docunex - Document Management System">
    <meta name="author" content="Docunex">

    <title>Docunex</title>

    <!-- BEGIN: CSS Assets-->

    <link rel="stylesheet" href="dist/css/app.css"/>


    <link rel="stylesheet" href="dist/css/toastr.min.css"/>
    <link rel="stylesheet" href="dist/css/jquery-ui.min.css" type="text/css">

    <!-- END: CSS Assets-->

    <style>

        .preloader-js {
            display: inline-block;
            position: fixed;
            top: 50%;
            left: 50%;
            width: 64px;
            height: 64px;
            transform: translate(-50%, -50%);
        }

        .preloader-js div {
            box-sizing: border-box;
            display: block;
            position: absolute;
            width: 51px;
            height: 51px;
            margin: 10px;
            border: 2px solid black;
            border-radius: 50%;
            animation: preloader-js 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
            border-color: #ffc200 transparent transparent transparent;
        }

        .preloader-js div:nth-child(1) {
            animation-delay: -0.45s;
        }

        .preloader-js div:nth-child(2) {
            animation-delay: -0.3s;
        }

        .preloader-js div:nth-child(3) {
            animation-delay: -0.15s;
        }

        @keyframes preloader-js {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        .preloader-js-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
        }

        .preloader-js-container .shadow {
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

    </style>

</head>

<!-- END: Head -->
<body class="main">

<?php

$link = $_SERVER['PHP_SELF'];
$link_array = explode('/', $link);
$page = end($link_array);

?>

<!-- BEGIN: Mobile Menu -->
<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="index.php" class="flex mr-auto">
            <img class="w-8" src="dist/images/logo.png">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-feather="bar-chart-2"
                                                            class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-theme-29 py-5 hidden">


        <ul>
            <li>
                <a href="index.php" class="side-menu side-menu--active">
                    <div class="side-menu__icon"><i data-feather="home"></i></div>
                    <div class="side-menu__title">
                        Dashboard
                    </div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>

            <li>
                <a href="file-manager.php" class="side-menu">
                    <div class="side-menu__icon"><i data-feather="hard-drive"></i></div>
                    <div class="side-menu__title"> Documents</div>
                </a>
            </li>


            <li>
                <a href="side-menu-light-chat.html" class="side-menu">
                    <div class="side-menu__icon"><i data-feather="message-square"></i></div>
                    <div class="side-menu__title"> Forum</div>
                </a>
            </li>


        </ul>


    </ul>
</div>
<!-- END: Mobile Menu -->
<div class="flex">
    <!-- BEGIN: Side Menu -->
    <nav class="side-nav">
        <a href="index.php" class="intro-x flex items-center pl-5 pt-4">
            <img class="w-8" src="dist/images/logo.png">
            <span class="hidden xl:block text-white text-lg ml-3" style="letter-spacing: 0.05rem;">
                Docunex</span>
        </a>
        <div class="side-nav__devider my-6"></div>
        <ul>
            <li>
                <a href="index.php" class="side-menu
                <?php if ($page == "index.php") { ?>
                side-menu--active
                <?php } ?>">

                    <div class="side-menu__icon"><i data-feather="home"></i></div>
                    <div class="side-menu__title">
                        Dashboard
                    </div>
                </a>
            </li>
            <li class="side-nav__devider my-6"></li>

            <li>
                <a href="file-manager.php" class="side-menu
                <?php if ($page == "file-manager.php" || $page == "new-doc.php") { ?>
                side-menu--active
                <?php } ?>">
                    <div class="side-menu__icon"><i data-feather="hard-drive"></i></div>
                    <div class="side-menu__title"> Documents</div>
                </a>
            </li>


            <li>
                <a href="forum.php" class="side-menu
                <?php if ($page == "forum.php" || $page == "new-forum.php" || $page == "forum_chat.php") { ?>
                side-menu--active
                <?php } ?>">
                    <div class="side-menu__icon"><i data-feather="message-square"></i></div>
                    <div class="side-menu__title"> Forums</div>
                </a>
            </li>


        </ul>
    </nav>
    <!-- END: Side Menu -->