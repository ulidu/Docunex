<?php include 'dist/include/header.php' ?>

<?php

if ($_GET['f_id'] != null) {
    $f_id_get = $_GET['f_id'];
} else {

    echo '<script type="text/javascript">
           window.location = "error-page.php"
      </script>';

}

$query_f_details = "SELECT * FROM forum f LEFT JOIN forum_reply r ON f.forum_ID = r.forum_ID WHERE f.forum_ID='$f_id_get' order by f.forum_ID desc";

if (!empty($con)) {

    $run_query_f_details = mysqli_query($con, $query_f_details);

}

$count_get_chat_details = mysqli_num_rows($run_query_f_details);

if ($count_get_chat_details == 0) {

    echo '<script type="text/javascript">
           window.location = "error-page.php"
      </script>';

}

while ($row = mysqli_fetch_assoc($run_query_f_details)) {

    $get_forum_ID = $row['forum_ID'];
    $get_topic_title = $row['topic_title'];
    $get_topic_content = $row['topic_content'];
    $get_topic_author = $row['topic_author'];
    $get_topic_created_date = $row['topic_created_date'];
    $get_topic_category = $row['topic_category'];
    $get_topic_sub_category = $row['topic_sub_category'];
    $get_forum_status = $row['forum_status'];

    $get_reply_ID = $row['reply_ID'];
    $get_reply_date = $row['reply_date'];
    $get_reply_content = $row['reply_content'];
    $get_replied_by = $row['replied_by'];


    $_SESSION['get_forum_ID'] = $get_forum_ID;
    $_SESSION['get_topic_title'] = $get_topic_title;
    $_SESSION['get_topic_content'] = $get_topic_content;
    $_SESSION['get_topic_author'] = $get_topic_author;
    $_SESSION['get_topic_created_date'] = $get_topic_created_date;
    $_SESSION['get_topic_category'] = $get_topic_category;
    $_SESSION['get_topic_sub_category'] = $get_topic_sub_category;
    $_SESSION['get_forum_status'] = $get_forum_status;

    $_SESSION['get_reply_ID'] = $get_reply_ID;
    $_SESSION['get_reply_date'] = $get_reply_date;
    $_SESSION['get_reply_content'] = $get_reply_content;
    $_SESSION['get_replied_by'] = $get_replied_by;

}

$get_forum_ID = $_SESSION['get_forum_ID'];
$get_topic_title = $_SESSION['get_topic_title'];
$get_topic_content = $_SESSION['get_topic_content'];
$get_topic_author = $_SESSION['get_topic_author'];
$get_topic_created_date = $_SESSION['get_topic_created_date'];
$get_topic_category = $_SESSION['get_topic_category'];
$get_topic_sub_category = $_SESSION['get_topic_sub_category'];
$get_forum_status = $_SESSION['get_forum_status'];

$get_reply_ID = $_SESSION['get_reply_ID'];
$get_reply_date = $_SESSION['get_reply_date'];
$get_reply_content = $_SESSION['get_reply_content'];
$get_replied_by = $_SESSION['get_replied_by'];

?>

    <form class="content" action="" method="post" name="new_reply" id="new_reply">

            <!-- BEGIN: Top Bar -->
            <div class="top-bar">
                <!-- BEGIN: Breadcrumb -->
                <div class="-intro-x breadcrumb mr-auto hidden sm:flex"><a href="">Application</a> <i
                            data-feather="chevron-right" class="breadcrumb__icon"></i> <a href=""
                                                                                          class="breadcrumb--active">Forums</a>
                </div>
                <!-- END: Breadcrumb -->

                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in"
                         role="button" aria-expanded="false">
                        <img alt="" src="dist/images/2.png">
                    </div>
                    <div class="dropdown-menu w-56">
                        <div class="dropdown-menu__content box bg-theme-26 dark:bg-dark-6 text-white">
                            <div class="p-4 border-b border-theme-27 dark:border-dark-3">
                                <div class="font-medium">Denzel Washington</div>
                                <div class="text-xs text-theme-28 mt-0.5 dark:text-gray-600">Software Engineer</div>
                            </div>

                            <div class="p-2 border-t border-theme-27 dark:border-dark-3">
                                <a href="login.php"
                                   class="flex items-center block p-2 transition duration-300 ease-in-out hover:bg-theme-1 dark:hover:bg-dark-3 rounded-md">
                                    <i data-feather="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            <!-- END: Top Bar -->

            <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                <h2 class="text-xl font-medium mr-auto">
                    Forums
                </h2>
                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                    <a href="new-forum.php" class="btn btn-primary shadow-md mr-2">Create a New Topic</a>
                    <div class="dropdown ml-auto sm:ml-0">
                        <button class="dropdown-toggle btn px-2 box text-gray-700 dark:text-gray-300"
                                aria-expanded="false">
                        <span class="w-5 h-5 flex items-center justify-center"> <i class="w-4 h-4"
                                                                                   data-feather="plus"></i> </span>
                        </button>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                <a href=""
                                   class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="users" class="w-4 h-4 mr-2"></i> Create Group </a>
                                <a href=""
                                   class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                    <i data-feather="settings" class="w-4 h-4 mr-2"></i> Settings </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="intro-y chat grid grid-cols-12 gap-5 mt-5">

                <!-- BEGIN: Chat Side Menu -->
                <div class="col-span-12 lg:col-span-4 xxl:col-span-3">

                    <div class="intro-y pr-1">
                        <div class="box p-2">
                            <div class="chat__tabs nav nav-tabs justify-center" role="tablist">
                                <a id="chats-tab" data-toggle="tab" data-target="#chats" href="javascript:;"
                                   class="flex-1 py-2 rounded-md text-center active" role="tab" aria-controls="chats"
                                   aria-selected="true">General</a>
                                <a id="friends-tab" data-toggle="tab" data-target="#friends" href="javascript:;"
                                   class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="friends"
                                   aria-selected="false">Dev</a>
                                <a id="profile-tab" data-toggle="tab" data-target="#profile" href="javascript:;"
                                   class="flex-1 py-2 rounded-md text-center" role="tab" aria-controls="profile"
                                   aria-selected="false">Training</a>
                            </div>
                        </div>
                    </div>

                    <div class="tab-content">

                        <div id="chats" class="tab-pane active" role="tabpanel" aria-labelledby="chats-tab">
                            <div class="pr-1">
                                <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">


                                    <div class="relative text-gray-700 dark:text-gray-300">
                                        <input type="text"
                                               class="globalInputSearch form-control py-3 px-4 border-transparent bg-gray-200 pr-10 placeholder-theme-13"
                                               placeholder="Search Forum Topics">
                                        <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0"
                                           data-feather="search"></i>
                                    </div>
                                    <button type="button" class="btn btn-primary w-full mt-3">Search Forums</button>

                                    <div class="overflow-x-auto scrollbar-hidden">
                                        <div class="flex mt-5">

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- General Start -->
                            <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">


                                <div class="mt-4 text-gray-600 hide-title">HR</div>

                                <?php

                                $query_g_hr = "select * from forum where topic_category='General' and topic_sub_category='HR' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_g_hr = mysqli_query($con, $query_g_hr);

                                }

                                $count_h_hr = mysqli_num_rows($run_query_g_hr);

                                if ($count_h_hr == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                while ($row = mysqli_fetch_assoc($run_query_g_hr)) {

                                $forum_ID = $row['forum_ID'];
                                $topic_title = $row['topic_title'];
                                $topic_content = $row['topic_content'];
                                $topic_author = $row['topic_author'];
                                $topic_created_date = $row['topic_created_date'];
                                $topic_category = $row['topic_category'];
                                $topic_sub_category = $row['topic_sub_category'];

                                ?>

                                <!-- list -->
                                <ul class="globalTargetList">

                                    <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php

                                    }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Finance</div>

                                    <?php

                                    $query_g_finance = "select * from forum where topic_category='General' and topic_sub_category='Finance' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_finance = mysqli_query($con, $query_g_finance);

                                    }

                                    $count_g_finance = mysqli_num_rows($run_query_g_finance);

                                    if ($count_g_finance == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_finance)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>

                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>

                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Marketing</div>
                                    <?php

                                    $query_g_marketing = "select * from forum where topic_category='General' and topic_sub_category='Marketing' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_marketing = mysqli_query($con, $query_g_marketing);

                                    }

                                    $count_g_marketing = mysqli_num_rows($run_query_g_marketing);

                                    if ($count_g_marketing == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_marketing)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>

                                    <div class="mt-4 text-gray-600 hide-title">Technical</div>

                                    <?php

                                    $query_g_technical = "select * from forum where topic_category='General' and topic_sub_category='Technical' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_technical = mysqli_query($con, $query_g_technical);

                                    }

                                    $count_g_technical = mysqli_num_rows($run_query_g_technical);

                                    if ($count_g_technical == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_technical)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Pickbox Project</div>

                                    <?php

                                    $query_g_pickbox = "select * from forum where topic_category='General' and topic_sub_category='Pickbox Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_pickbox = mysqli_query($con, $query_g_pickbox);

                                    }

                                    $count_g_pickbox = mysqli_num_rows($run_query_g_pickbox);

                                    if ($count_g_pickbox == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_pickbox)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Aurea Project</div>

                                    <?php

                                    $query_g_aurea = "select * from forum where topic_category='General' and topic_sub_category='Aurea Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_aurea = mysqli_query($con, $query_g_aurea);

                                    }

                                    $count_g_aurea = mysqli_num_rows($run_query_g_aurea);

                                    if ($count_g_aurea == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_aurea)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Nishtshade Project</div>

                                    <?php

                                    $query_g_nishtshade = "select * from forum where topic_category='General' and topic_sub_category='Nishtshade Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_nishtshade = mysqli_query($con, $query_g_nishtshade);

                                    }

                                    $count_g_nishtshade = mysqli_num_rows($run_query_g_nishtshade);

                                    if ($count_g_nishtshade == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_nishtshade)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Development</div>

                                    <?php

                                    $query_g_development = "select * from forum where topic_category='General' and topic_sub_category='Development' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_development = mysqli_query($con, $query_g_development);

                                    }

                                    $count_g_development = mysqli_num_rows($run_query_g_development);

                                    if ($count_g_development == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_g_development)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Quality Assurance</div>

                                    <?php

                                    $query_g_quality = "select * from forum where topic_category='General' and topic_sub_category='Quality Assurance' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_g_quality = mysqli_query($con, $query_g_quality);

                                    }

                                    $count_g_quality = mysqli_num_rows($run_query_g_quality);

                                    if ($count_g_quality == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                    while ($row = mysqli_fetch_assoc($run_query_g_quality)) {

                                    $forum_ID = $row['forum_ID'];
                                    $topic_title = $row['topic_title'];
                                    $topic_content = $row['topic_content'];
                                    $topic_author = $row['topic_author'];
                                    $topic_created_date = $row['topic_created_date'];
                                    $topic_category = $row['topic_category'];
                                    $topic_sub_category = $row['topic_sub_category'];

                                    ?>
                                    <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <?php

                            }
                            }

                            ?>


                            </div>
                            <!-- General End -->

                        </div>

                        <div id="friends" class="tab-pane" role="tabpanel" aria-labelledby="friends-tab">
                            <div class="pr-1">
                                <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">


                                    <div class="relative text-gray-700 dark:text-gray-300">
                                        <input type="text"
                                               class="globalInputSearch form-control py-3 px-4 border-transparent bg-gray-200 pr-10 placeholder-theme-13"
                                               placeholder="Search Forum Topics">
                                        <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0"
                                           data-feather="search"></i>
                                    </div>
                                    <button type="button" class="btn btn-primary w-full mt-3">Search Forums</button>

                                    <div class="overflow-x-auto scrollbar-hidden">
                                        <div class="flex mt-5">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Dev Start -->
                            <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">

                                <div class="mt-4 text-gray-600 hide-title">HR</div>

                                <?php

                                $query_d_hr = "select * from forum where topic_category='Dev' and topic_sub_category='HR' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_d_hr = mysqli_query($con, $query_d_hr);

                                }

                                $count_d_hr = mysqli_num_rows($run_query_d_hr);

                                if ($count_d_hr == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                while ($row = mysqli_fetch_assoc($run_query_d_hr)) {

                                $forum_ID = $row['forum_ID'];
                                $topic_title = $row['topic_title'];
                                $topic_content = $row['topic_content'];
                                $topic_author = $row['topic_author'];
                                $topic_created_date = $row['topic_created_date'];
                                $topic_category = $row['topic_category'];
                                $topic_sub_category = $row['topic_sub_category'];

                                ?>
                                <!-- list -->
                                <ul class="globalTargetList">

                                    <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>
                                    </li>
                                    <?php

                                    }
                                    }

                                    ?>

                                    <div class="mt-4 text-gray-600 hide-title">Finance</div>

                                    <?php

                                    $query_d_finance = "select * from forum where topic_category='Dev' and topic_sub_category='Finance' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_finance = mysqli_query($con, $query_d_finance);

                                    }

                                    $count_d_finance = mysqli_num_rows($run_query_d_finance);

                                    if ($count_d_finance == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_finance)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>

                                    <div class="mt-4 text-gray-600 hide-title">Marketing</div>

                                    <?php

                                    $query_d_marketing = "select * from forum where topic_category='Dev' and topic_sub_category='Marketing' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_marketing = mysqli_query($con, $query_d_marketing);

                                    }

                                    $count_d_marketing = mysqli_num_rows($run_query_d_marketing);

                                    if ($count_d_marketing == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_marketing)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Technical</div>

                                    <?php

                                    $query_d_technical = "select * from forum where topic_category='Dev' and topic_sub_category='Technical' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_technical = mysqli_query($con, $query_d_technical);

                                    }

                                    $count_d_technical = mysqli_num_rows($run_query_d_technical);

                                    if ($count_d_technical == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_technical)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Pickbox Project</div>

                                    <?php

                                    $query_d_pickbox = "select * from forum where topic_category='Dev' and topic_sub_category='Pickbox Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_pickbox = mysqli_query($con, $query_d_pickbox);

                                    }

                                    $count_d_pickbox = mysqli_num_rows($run_query_d_pickbox);

                                    if ($count_d_pickbox == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_pickbox)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>

                                    <div class="mt-4 text-gray-600 hide-title">Aurea Project</div>

                                    <?php

                                    $query_d_aurea = "select * from forum where topic_category='Dev' and topic_sub_category='Aurea Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_aurea = mysqli_query($con, $query_d_aurea);

                                    }

                                    $count_d_aurea = mysqli_num_rows($run_query_d_aurea);

                                    if ($count_d_aurea == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_aurea)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Nishtshade Project</div>

                                    <?php

                                    $query_d_nishtshade = "select * from forum where topic_category='Dev' and topic_sub_category='Nishtshade Project' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_nishtshade = mysqli_query($con, $query_d_nishtshade);

                                    }

                                    $count_d_nishtshade = mysqli_num_rows($run_query_d_nishtshade);

                                    if ($count_d_nishtshade == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_nishtshade)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Development</div>

                                    <?php

                                    $query_d_development = "select * from forum where topic_category='Dev' and topic_sub_category='Development' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_development = mysqli_query($con, $query_d_development);

                                    }

                                    $count_d_development = mysqli_num_rows($run_query_d_development);

                                    if ($count_d_development == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                        while ($row = mysqli_fetch_assoc($run_query_d_development)) {

                                            $forum_ID = $row['forum_ID'];
                                            $topic_title = $row['topic_title'];
                                            $topic_content = $row['topic_content'];
                                            $topic_author = $row['topic_author'];
                                            $topic_created_date = $row['topic_created_date'];
                                            $topic_category = $row['topic_category'];
                                            $topic_sub_category = $row['topic_sub_category'];

                                            ?>
                                            <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                                <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                                    <div class="w-12 h-12 flex-none image-fit mr-1">
                                                        <img alt="" class="rounded-full"
                                                             src="dist/images/profile-10.png">
                                                    </div>
                                                    <div class="ml-2 overflow-hidden">
                                                        <div class="flex items-center">
                                                            <a href="javascript:;"
                                                               class="font-medium"><?php echo $topic_title; ?></a>
                                                        </div>
                                                        <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                        </div>
                                                        <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                                    </div>
                                                </div>
                                            </li>
                                            <?php

                                        }
                                    }

                                    ?>


                                    <div class="mt-4 text-gray-600 hide-title">Quality Assurance</div>

                                    <?php

                                    $query_d_quality = "select * from forum where topic_category='Dev' and topic_sub_category='Quality Assurance' order by forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_d_quality = mysqli_query($con, $query_d_quality);

                                    }

                                    $count_d_quality = mysqli_num_rows($run_query_d_quality);

                                    if ($count_d_quality == 0) {

                                        echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                    } else {

                                    while ($row = mysqli_fetch_assoc($run_query_d_quality)) {

                                    $forum_ID = $row['forum_ID'];
                                    $topic_title = $row['topic_title'];
                                    $topic_content = $row['topic_content'];
                                    $topic_author = $row['topic_author'];
                                    $topic_created_date = $row['topic_created_date'];
                                    $topic_category = $row['topic_category'];
                                    $topic_sub_category = $row['topic_sub_category'];

                                    ?>
                                    <li onclick="location.href='forum_chat.php?f_id=<?php echo $forum_ID; ?>';">
                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            <?php

                            }
                            }

                            ?>

                            </div>
                            <!-- Dev End -->

                        </div>
                        <div id="profile" class="tab-pane" role="tabpanel" aria-labelledby="profile-tab">
                            <div class="pr-1">
                                <div class="box px-5 pt-5 pb-5 lg:pb-0 mt-5">


                                    <div class="relative text-gray-700 dark:text-gray-300">
                                        <input type="text"
                                               class="globalInputSearch form-control py-3 px-4 border-transparent bg-gray-200 pr-10 placeholder-theme-13"
                                               placeholder="Search Forum Topics">
                                        <i class="w-4 h-4 hidden sm:absolute my-auto inset-y-0 mr-3 right-0"
                                           data-feather="search"></i>
                                    </div>
                                    <button type="button" class="btn btn-primary w-full mt-3">Search Forums</button>

                                    <div class="overflow-x-auto scrollbar-hidden">
                                        <div class="flex mt-5">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Training Start -->
                            <div class="chat__chat-list overflow-y-auto scrollbar-hidden pr-1 pt-1 mt-4">

                                <div class="mt-4 text-gray-600 hide-title">HR</div>

                                <?php

                                $query_t_hr = "select * from forum where topic_category='Training' and topic_sub_category='HR' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_hr = mysqli_query($con, $query_t_hr);

                                }

                                $count_t_hr = mysqli_num_rows($run_query_t_hr);

                                if ($count_t_hr == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_hr)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Finance</div>

                                <?php

                                $query_t_finance = "select * from forum where topic_category='Training' and topic_sub_category='Finance' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_finance = mysqli_query($con, $query_t_finance);

                                }

                                $count_t_finance = mysqli_num_rows($run_query_t_finance);

                                if ($count_t_finance == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_finance)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Marketing</div>

                                <?php

                                $query_t_marketing = "select * from forum where topic_category='Training' and topic_sub_category='Marketing' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_marketing = mysqli_query($con, $query_t_marketing);

                                }

                                $count_t_marketing = mysqli_num_rows($run_query_t_marketing);

                                if ($count_t_marketing == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_marketing)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Technical</div>

                                <?php

                                $query_t_technical = "select * from forum where topic_category='Training' and topic_sub_category='Technical' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_technical = mysqli_query($con, $query_t_technical);

                                }

                                $count_t_technical = mysqli_num_rows($run_query_t_technical);

                                if ($count_t_technical == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_technical)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Pickbox Project</div>

                                <?php

                                $query_t_pickbox = "select * from forum where topic_category='Training' and topic_sub_category='Pickbox Project' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_pickbox = mysqli_query($con, $query_t_pickbox);

                                }

                                $count_t_pickbox = mysqli_num_rows($run_query_t_pickbox);

                                if ($count_t_pickbox == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_pickbox)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>

                                <div class="mt-4 text-gray-600 hide-title">Aurea Project</div>

                                <?php

                                $query_t_aurea = "select * from forum where topic_category='Training' and topic_sub_category='Aurea Project' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_aurea = mysqli_query($con, $query_t_aurea);

                                }

                                $count_t_aurea = mysqli_num_rows($run_query_t_aurea);

                                if ($count_t_aurea == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_aurea)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>

                                <div class="mt-4 text-gray-600 hide-title">Nishtshade Project</div>

                                <?php

                                $query_t_nishtshade = "select * from forum where topic_category='Training' and topic_sub_category='Nishtshade Project' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_nishtshade = mysqli_query($con, $query_t_nishtshade);

                                }

                                $count_t_nishtshade = mysqli_num_rows($run_query_t_nishtshade);

                                if ($count_t_nishtshade == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_nishtshade)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Development</div>

                                <?php

                                $query_t_development = "select * from forum where topic_category='Training' and topic_sub_category='Development' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_development = mysqli_query($con, $query_t_development);

                                }

                                $count_t_development = mysqli_num_rows($run_query_t_development);

                                if ($count_t_development == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_development)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>


                                <div class="mt-4 text-gray-600 hide-title">Quality Assurance</div>

                                <?php

                                $query_t_quality = "select * from forum where topic_category='Training' and topic_sub_category='Quality Assurance' order by forum_ID desc";

                                if (!empty($con)) {

                                    $run_query_t_quality = mysqli_query($con, $query_t_quality);

                                }

                                $count_t_quality = mysqli_num_rows($run_query_t_quality);

                                if ($count_t_quality == 0) {

                                    echo "<div class='text-gray-500 text-muted no-small-mute'><small>There are no topics available for this category.</small></div>";

                                } else {

                                    while ($row = mysqli_fetch_assoc($run_query_t_quality)) {

                                        $forum_ID = $row['forum_ID'];
                                        $topic_title = $row['topic_title'];
                                        $topic_content = $row['topic_content'];
                                        $topic_author = $row['topic_author'];
                                        $topic_created_date = $row['topic_created_date'];
                                        $topic_category = $row['topic_category'];
                                        $topic_sub_category = $row['topic_sub_category'];

                                        ?>

                                        <div class="intro-x cursor-pointer box relative flex items-center p-5 mt-5">
                                            <div class="w-12 h-12 flex-none image-fit mr-1">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-10.png">
                                            </div>
                                            <div class="ml-2 overflow-hidden">
                                                <div class="flex items-center">
                                                    <a href="javascript:;"
                                                       class="font-medium"><?php echo $topic_title; ?></a>
                                                </div>
                                                <div class="w-full truncate text-gray-600 mt-0.5"><?php echo $topic_author; ?>

                                                </div>
                                                <div class="text-xs text-gray-500 ml-auto"><?php echo $topic_created_date; ?></div>
                                            </div>
                                        </div>

                                        <?php

                                    }
                                }

                                ?>

                            </div>
                            <!-- Training End -->

                        </div>

                    </div>

                </div>
                <!-- END: Chat Side Menu -->

                <!-- BEGIN: Chat Content -->
                <div class="intro-y col-span-12 lg:col-span-8 xxl:col-span-9">
                    <div class="chat__box box">
                        <!-- BEGIN: Chat Active -->
                        <div class="h-full flex flex-col">
                            <div class="flex flex-col sm:flex-row border-b border-gray-200 dark:border-dark-5 px-5 py-4">
                                <div class="flex items-center">
                                    <div class="w-10 h-10 sm:w-12 sm:h-12 flex-none image-fit relative">
                                        <img alt="" class="rounded-full"
                                             src="dist/images/profile-6.png">
                                    </div>
                                    <div class="ml-3 mr-auto">
                                        <div class="font-medium text-base"><?php echo $get_topic_title; ?></div>
                                        <div class="text-gray-600 text-xs sm:text-sm"><?php echo $get_topic_author; ?>
                                            <span
                                                    class="mx-1">•</span> <?php echo $get_topic_category . ' • ' . $get_topic_sub_category; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center sm:ml-auto mt-5 sm:mt-0 border-t sm:border-0 border-gray-200 pt-3 sm:pt-0 -mx-5 sm:mx-0 px-5 sm:px-0">
                                    <div class="dropdown ml-auto sm:ml-3">
                                        <a href="javascript:;" class="dropdown-toggle w-5 h-5 text-gray-600"
                                           aria-expanded="false"> <i data-feather="more-vertical" class="w-5 h-5"></i>
                                        </a>
                                        <div class="dropdown-menu w-40">
                                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2">
                                                <button type="submit" id="submitclose" name="submitclose"
                                                        class="flex items-center block p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md">
                                                    <i data-feather="x" class="w-4 h-4 mr-2"></i> Close Forum
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-y-scroll scrollbar-hidden px-5 pt-5 flex-1">
                                <div class="chat__box__text-box flex items-end float-left mb-4">
                                    <div class="w-10 h-10 hidden sm:block flex-none image-fit relative mr-5">
                                        <img alt="" class="rounded-full"
                                             src="dist/images/profile-6.png">
                                    </div>
                                    <div class="bg-gray-200 dark:bg-dark-5 px-4 py-3 text-gray-700 dark:text-gray-300 rounded-r-md rounded-t-md">
                                        <?php echo $get_topic_content; ?>
                                        <div class="mt-1 text-xs text-gray-600"><?php echo $get_topic_created_date; ?></div>
                                    </div>

                                </div>


                                <?php

                                if ($get_reply_ID == null) {


                                } else {

                                    if ($_GET['f_id'] != null) {
                                        $f_id_get = $_GET['f_id'];
                                    } else {

                                        echo '<script type="text/javascript">
           window.location = "error-page.php"
      </script>';

                                    }

                                    $query_fa_details = "SELECT * FROM forum f LEFT JOIN forum_reply r ON f.forum_ID = r.forum_ID WHERE f.forum_ID='$f_id_get' order by f.forum_ID desc";

                                    if (!empty($con)) {

                                        $run_query_fa_details = mysqli_query($con, $query_fa_details);

                                    }

                                    $count_geta_chat_details = mysqli_num_rows($run_query_fa_details);

                                    if ($count_geta_chat_details == 0) {

                                        echo '<script type="text/javascript">
           window.location = "error-page.php"
      </script>';

                                    }

                                    while ($row = mysqli_fetch_assoc($run_query_fa_details)) {

                                        $get_reply_ID = $row['reply_ID'];
                                        $get_reply_datea = $row['reply_date'];
                                        $get_reply_contenta = $row['reply_content'];
                                        $get_replied_by = $row['replied_by'];

                                        ?>

                                        <div class="clear-both"></div>

                                        <div class="chat__box__text-box flex items-end float-right mb-4">

                                            <div class="bg-theme-1 px-4 py-3 text-white rounded-l-md rounded-t-md">
                                                <?php echo $get_reply_contenta; ?>
                                                <div class="mt-1 text-xs text-theme-21"><?php echo $get_reply_datea; ?></div>
                                            </div>
                                            <div class="w-10 h-10 hidden sm:block flex-none image-fit relative ml-5">
                                                <img alt="" class="rounded-full"
                                                     src="dist/images/profile-3.jpg">
                                            </div>
                                        </div>

                                        <?php
                                    }
                                }
                                ?>


                            </div>





                                <?php if ($get_forum_status == 'closed'){


                                    ?>

                                    <div class="alert alert-primary show mb-5 ml-5 mr-5" role="alert"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> This forum has been closed by the owner !</div>

                                    <?php

                                }else{

                                    ?>

                            <div class="pt-4 pb-10 sm:py-4 flex items-center border-t border-gray-200 dark:border-dark-5">

                            <textarea name="reply_content_message" id="reply_content_message"
                                      class="chat__box__input form-control dark:bg-dark-3 h-16 resize-none border-transparent px-5 py-3 shadow-none focus:ring-0"
                                      rows="1" placeholder="Type your message..."></textarea>

                                <button type="submit" name="submit_reply" id="submit_reply"
                                        class="w-8 h-8 sm:w-10 sm:h-10 block bg-theme-1 text-white rounded-full flex-none flex items-center justify-center mr-5">
                                    <i data-feather="send" class="w-4 h-4"></i></button>


                            </div>

                                <?php } ?>



                        </div>
                        <!-- END: Chat Active -->
                        <!-- BEGIN: Chat Default -->
                        <div class="hidden h-full flex items-center">
                            <div class="mx-auto text-center">
                                <div class="w-16 h-16 flex-none image-fit rounded-full overflow-hidden mx-auto">
                                    <img alt="" src="dist/images/profile-6.jpg">
                                </div>
                                <div class="mt-3">
                                    <div class="font-medium">Hey, Leonardo DiCaprio!</div>
                                    <div class="text-gray-600 mt-1">Please select a chat to start messaging.</div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Chat Default -->
                    </div>
                </div>
                <!-- END: Chat Content -->

            </div>

    </form>

<?php


if (isset($_POST["submit_reply"])) {

    date_default_timezone_set('Asia/Colombo');

    $string = date("Y-m-d");
    $date = DateTime::createFromFormat("Y-m-d", $string);
    $date_now = date_format($date, 'Y-m-d H:i:s');

    $reply_content_message = $_POST['reply_content_message'];

    $query_reply_add = "INSERT INTO forum_reply(forum_ID, reply_date, reply_content, replied_by) VALUES('$f_id_get', '$date_now', '$reply_content_message', 'John Doe')";

    if (!empty($con)) {

        $create_query_reply_add = mysqli_query($con, $query_reply_add);

    }

    echo "<meta http-equiv='refresh' content='0'>";

}

?>

    <!-- END: Content -->
<?php

?>

<?php include 'dist/include/footer.php' ?>