<?php
try {
    $pdo = new PDO('mysql:host=localhost', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Create the database
    $pdo->exec('CREATE DATABASE IF NOT EXISTS library_db');

    // Switch to the database
    $pdo->exec('USE library_db');

    // Create tables
    $pdo->exec('
    CREATE TABLE IF NOT EXISTS `books` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `book_id` VARCHAR(255) NOT NULL, 
        `title` TEXT NOT NULL,
        `author` TEXT NOT NULL,
        `category` TEXT NOT NULL,
        `year` INT NOT NULL,
        `quantity` INT NOT NULL,
        `available_quantity` INT NOT NULL,
        `image` TEXT NOT NULL,
        PRIMARY KEY (`id`),
        UNIQUE KEY (`book_id`) 
    ) ENGINE = InnoDB;
    ');

    $pdo->exec('
    CREATE TABLE IF NOT EXISTS `borrow` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `book_id` VARCHAR(255) NOT NULL,
        `borrow_id` VARCHAR(255) NOT NULL,
        `name` TEXT NOT NULL,
        `email` VARCHAR(255) NOT NULL,
        `borrow_date` DATE NOT NULL,
        `due_date` DATE NOT NULL,
        `return_date` DATE NOT NULL,
        PRIMARY KEY (`id`),
        INDEX (`book_id`),
        FOREIGN KEY (`book_id`) REFERENCES books(`book_id`),
        UNIQUE KEY (`borrow_id`) 
    ) ENGINE = InnoDB;
    ');

    $stmt = $pdo->prepare("SELECT COUNT(*) as count FROM books");
    $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $row['count'];

    if ($count == 0) {
        // Insert dummy data
        require_once('config/row.php');
    }

} 

catch (PDOException $e) {
    echo 'Could not create the database: ' . $e->getMessage();
    die();
}
?>
