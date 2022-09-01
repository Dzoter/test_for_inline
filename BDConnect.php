<?php

try {
    return $db = new PDO('mysql:host=localhost;dbname=inline', 'root', '');
} catch (PDOException $e) {
    die($e->getMessage());
}

