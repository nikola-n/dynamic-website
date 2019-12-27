<?php


try {
$db = new PDO("mysql:host=localhost;dbname=webpage", "nikola", "nick7!", array(PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION));
}catch (PDOException $e) {
    echo $e->getMessage();
    die();
}
