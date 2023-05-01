<?php
define('HOST', 'localhost');
define('DATABASE', 'database_web_2');
define('USERNAME', 'root');
define('PASSWORD', '');
// $mysqli = new mysqli("127.0.0.1", "root", "", "database_web_2");
$mysqli = new mysqli(HOST,USERNAME,PASSWORD,DATABASE);

// Check connection
if ($mysqli->connect_errno) {
    echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
    exit();
}
