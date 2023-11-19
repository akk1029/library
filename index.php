<?php
include 'config/database.php';
include 'includes/header.php';

$route = $_GET['route'] ?? '';

switch ($route) {
    case 'books':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->index();
        break;
    case 'add':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->add();
        break;
    case 'delete':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->delete();
        break;
    case 'search':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->search();
        break;
    case 'update':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->update();
        break;
    case '':
        echo "<br>This is the home page.";
        break;
    default:
        echo "<br>Error 404: Page not found!"; 
}

include 'includes/footer.php';
?>
