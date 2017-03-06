<?php
    /*define("DSN","mysql:dbname=workshop6_2;host=localhost");
    define("DBUSER","iplezab");
    define("DBPASS","iplezab");*/
define("DSN","mysql:dbname=web;host=localhost");
define("DBU","web");
define("DBPWD","123456789");
try{
        $con=new PDO(DSN,DBU,DBPWD);
    }catch (PDOException $e){
        echo 'Connection failed: '.$e->getMessage();
    }
 sfefeefefe
sfafhkaff
    ?>