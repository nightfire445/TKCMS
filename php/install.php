<?php
require "./connect.php"

try{

$create_users = "CREATE TABLE IF NOT EXISTS users (
                  username varchar(50) PRIMARY KEY,
                  salt varchar(100) NOT NULL,
                  password varchar(100) NOT NULL
                ) COLLATE utf8_unicode_ci;";


//$create_cms = "CREATE TABLE IF NOT EXISTS cms (				)"

 $result_1 = $dbconn->query($create_users);
}

catch (Exception $e){
    echo "Error: " . $e->getMessage();
}

?>