<?php
include 'config/database.php';
include 'includes/header.php';

$route = $_GET['route'] ?? '';

switch ($route) {
    case 'books':
        require_once 'src/Controller/BookController.php';
        $bookController = new BookController($pdo);
        $bookController->view();
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
    case 'borrow':
        require_once 'src/Controller/BorrowController.php';
        $borrowController = new BorrowController($pdo);
        $borrowController->borrow();
        break;
    case 'borrow-list':
        require_once 'src/Controller/BorrowController.php';
        $borrowController = new BorrowController($pdo);
        $borrowController->view();
        break;
    case 'return':
        require_once 'src/Controller/BorrowController.php';
        $borrowController = new BorrowController($pdo);
        $borrowController->return();
        break;
    case '':
        echo "<br>This is the home page.";
        include 'includes/land.php';
        break;
    default:
        echo "<br>Error 404: Page not found!"; 
}

include 'includes/footer.php';
?>
