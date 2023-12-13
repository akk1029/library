<?php

// Create dummy data
$book_id1 = uniqid();
$title = "Wuthering Heights";
$author = "Emily Brontë";
$category = "novel";
$year = 1847;
$quantity = 2;
$available_qty = $quantity;
$cover = "text";

$stmt = $pdo->prepare("INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([$book_id1, $title, $author, $category, $year, $quantity, $available_qty, $cover]);



$book_id2 = uniqid();
$title = "The Catcher in the Rye";
$author = "J.D.Salinger";
$category = "young-adult fiction";
$year = 1945;


$stmt = $pdo->prepare("INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([$book_id2, $title, $author, $category, $year, $quantity, $available_qty, $cover]);





$book_id3 = uniqid();
$title = "Little Women";
$author = "Louisa May Alcott";
$category = "novel";
$year = 1868;


$stmt = $pdo->prepare("INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([$book_id3, $title, $author, $category, $year, $quantity, $available_qty, $cover]);





$book_id4 = uniqid();
$title = "Animal Farm";
$author = "George Orwell";
$category = "political satire";
$year = 1945;


$stmt = $pdo->prepare("INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([$book_id4, $title, $author, $category, $year, $quantity, $available_qty, $cover]);
    



$book_id5 = uniqid();
$title = "Harry Potter and the Philosopher's Stone";
$author = "J.K.Rowling";
$category = "fantasy";
$year = 1997;



$stmt = $pdo->prepare("INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([$book_id5, $title, $author, $category, $year, $quantity, $available_qty, $cover]);