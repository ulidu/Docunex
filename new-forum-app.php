<?php

include 'dist/include/db.php';

date_default_timezone_set('Asia/Colombo');

$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_POST['author'];
$created_date = $_POST['created_date'];
$main_category = $_POST['main_category'];
$sub_category = $_POST['sub_category'];

$query_forum_add = "INSERT INTO forum(topic_title, topic_content, topic_author, topic_created_date, topic_category, topic_sub_category) VALUES('$title', '$content', '$author', '$created_date', '$main_category', '$sub_category')";

if (!empty($con)) {

    $create_query_forum_add = mysqli_query($con, $query_forum_add);

}

if ($create_query_forum_add) {

    echo 1;

} else {

    echo 0;

}

?>
