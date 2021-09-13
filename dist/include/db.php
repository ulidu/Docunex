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
