<?php
    define('HOST', 'mistorydyvadmin.mysql.db');
    define('DB_NAME', 'mistorydyvadmin');
    define('USER', 'mistorydyvadmin');
    define('PASS', 'RemyRemy07');

    try{
        $db = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASS);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch (PDOException $error){
        echo $error;
    }