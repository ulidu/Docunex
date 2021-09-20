<?php

// DB Configuration
$db['db_host'] = 'localhost';
$db['db_username'] = 'root';
$db['db_password'] = '';
$db['db_name'] = 'docunex';
$db['db_port'] = '3306';

foreach ($db as $key => $value) {
    define(strtoupper($key), $value);
}
$con = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);

if (isset($_POST["submit"]))
{

    $content = $_POST["content"];
    $caption = $_POST["caption"];
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];
    $tname = $_FILES["files"]["tmp_name"];
    $uploads_dir ='/documents';
    $upload_by = $_POST["upload_by"];
    $post_date = $_POST["post_date"];
    $tags = $_POST["tags"];
    $publish_status = $_POST["publish_status"];
    $author_name_status = $_POST["author_name_status"];

    move_uploaded_file($tname, $uploads_dir.'/'.$pname);

    $sql = "INSERT into documents(content,caption,document, upload_by, post_date, tags, publish_status, author_name_status) 
    VALUES('$content', '$caption', '$pname', '$upload_by', '$post_date', '$tags', '$publish_status', '$author_name_status')";

    if (mysqli_query($con, $sql)){
        echo "File uploaded successfully";
    }
    else{
        echo "Error";
    }
}



if ($con) {
} else {
    ?>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600&display=swap');
    </style>
    <center><img width="60%" src="https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif"></center>


    <?php
    die('<p style="font-size: 40px; font-weight: bold; text-align: center; margin-top: -10%; font-family: \'Playfair Display\', serif;"><span style="font-size: 48px;">404</span> Page Not Found</p><p style="margin-top:-8px; font-size: 24px; text-align: center; font-family: \'Playfair Display\', serif;">Sorry for the inconvenience caused.</p>');


}
?>
