<?php

include 'dist/include/db.php';

date_default_timezone_set('Asia/Colombo');

$string = date("Y-m-d");
$date = DateTime::createFromFormat("Y-m-d", $string);
$date = date_format($date, 'Y-m-d H:i:s');

$title = $_POST['title'];
$content = $_POST['content'];
$caption = $_POST['caption'];
$author = $_POST['author'];
$created_date = $_POST['created_date'];
$category = $_POST['category'];
$tags = $_POST['tags'];

$query_document_add = "INSERT INTO documents(document_title, document_content, document_caption, document_author, document_created_date, document_category, document_tag) 
VALUES('$title', '$content', '$caption', '$author', '$created_date', '$category', '$tags')";

if (!empty($con)) {

    $create_query_document_add = mysqli_query($con, $query_document_add);

}

if ($create_query_document_add) {

    echo 1;

} else {

    echo 0;

}

?>
