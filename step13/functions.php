<?php

function connectToDb()
{
    try { // the best practice is allways use pdo to connect to the database
        return new PDO('mysql:host=127.0.0.1;dbname=php-learning', '(username)', '(password)');
    } catch (PDOException $e) {
        die ($e->getMessage());
    }    
}

function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}