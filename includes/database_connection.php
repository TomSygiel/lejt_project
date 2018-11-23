<?php
$options = [
        "PDO::ATTR_ERRMODE" => PDO::ERRMODE_EXCEPTION,
        "PDO::ATTR_DEFAULT_FETCH_MODE" => PDO::FETCH_ASSOC
        ];



$pdo = new PDO(
                   "mysql:host=localhost:8889;dbname=millhouse;charset=utf8",
                    "root",
                    "root",
                    $options
                    );
?>