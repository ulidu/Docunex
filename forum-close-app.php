<?php

include 'dist/include/db.php';

date_default_timezone_set('Asia/Colombo');

$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

$forumid = $_POST['forumid'];

$query_forum_close = "UPDATE forum SET forum_status='closed' WHERE forum_ID = '$forumid'";

if (!empty($con)) {

    $create_query_forum_close = mysqli_query($con, $query_forum_close);

}

if ($create_query_forum_close) {

    echo 1;

} else {

    echo 0;

}

?>
