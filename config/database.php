<?php
try {
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $pdo->exec('CREATE DATABASE IF NOT EXISTS library_db');

    // Switch to the database
    $pdo->exec('USE library_db');

    // Create a table
    $pdo->exec('
        CREATE TABLE IF NOT EXISTS `books` (
            `id` INT NOT NULL AUTO_INCREMENT,
            `book_id` TEXT NOT NULL , 
            `title` TEXT NOT NULL , 
            `author` TEXT NOT NULL , 
            `category` TEXT NOT NULL , 
            `year` INT NOT NULL , 
            `quantity` INT NOT NULL , 
            `available_quantity` INT NOT NULL , 
            `image` TEXT NOT NULL,
            PRIMARY KEY (`id`) 
        ) ENGINE = InnoDB;
    ');

} 

catch (PDOException $e) {
    echo 'Could not create the database: ' . $e->getMessage();
    die();
}
?>
