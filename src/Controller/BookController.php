<?php
class BookController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
 
    public function index() {
        require_once 'src/Model/Book.php';
        $bookModel = new Book($this->pdo);
        $books = $bookModel->getAllBooks();
        include 'src/View/book-list.php';
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $category = $_POST['category'];
            $publishedYear = $_POST['published_year'];
            $status = $_POST['status'];
            $book_cover = $_POST['book_cover'];
            $book_id = uniqid();
            require_once 'src/Model/Book.php';
            $bookModel = new Book($this->pdo);
            $bookModel->addBook($book_id, $title, $author, $category, $publishedYear, $status, $book_cover);
        }

        include 'src/View/add-book-form.php';
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];

            require_once 'src/Model/Book.php';
            $bookModel = new Book($this->pdo);
            $bookModel->deleteBook($title);
        }

        include 'src/View/delete-book-form.php';
    }

    public function search() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];

            require_once 'src/Model/Book.php';
           
            $bookModel = new Book($this->pdo);
            $book = $bookModel->searchBook($title);
        }

        include 'src/View/search-book-form.php';
    }
}
?>
