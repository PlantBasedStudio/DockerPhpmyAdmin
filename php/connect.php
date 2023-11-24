<?php 

const DBHOST = 'db';
const DBUSER = 'root';
const DBPASSWORD = 'pass';
const DBNAME = 'test';

$dsn = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
try{
    $db = new PDO($dsn, DBUSER, DBPASSWORD);

    echo "Connection established";
}catch(PDOException $e){
    echo 'Error: ' . $e->getMessage();
    die;
}