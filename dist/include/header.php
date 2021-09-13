<?php

include 'dist/include/db.php';

session_start();

?>

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
    <!-- END: CSS Assets-->

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
        <a href="" class="flex mr-auto">
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
        <a href="" class="intro-x flex items-center pl-5 pt-4">
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
                <?php if ($page == "file-manager.php") { ?>
                side-menu--active
                <?php } ?>">
                    <div class="side-menu__icon"><i data-feather="hard-drive"></i></div>
                    <div class="side-menu__title"> Documents</div>
                </a>
            </li>


            <li>
                <a href="forum.php" class="side-menu
                <?php if ($page == "forum.php") { ?>
                side-menu--active
                <?php } ?>">
                    <div class="side-menu__icon"><i data-feather="message-square"></i></div>
                    <div class="side-menu__title"> Forums</div>
                </a>
            </li>


        </ul>
    </nav>
    <!-- END: Side Menu -->