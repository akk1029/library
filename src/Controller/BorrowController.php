<?php
class BorrowController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function view() {
        require_once 'src/Model/Borrow.php';
        $borrowModel = new Borrow($this->pdo);
        $borrows = $borrowModel->getAllBorrows();
        include 'src/View/borrow-list.php';
    }
 
    public function borrow() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once 'src/Model/Borrow.php';
            $book_id = $_POST['book_id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $borrow_date = $_POST['borrow_date'];
            $borrow_date = new DateTime($borrow_date);
            $borrow = new Borrow($this->pdo);
            $status = $borrow->borrowBook($book_id, $name, $email, $borrow_date);
        }
        include 'src/View/borrow-book-form.php';
    }

    public function return(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require_once 'src/Model/Borrow.php';
            $borrow_id = $_POST['borrow_id'];
            $return_date = $_POST['return_date'];
            $borrow = new Borrow($this->pdo);
            $status = $borrow->returnBook($borrow_id, $return_date);
        }
        include 'src/View/return-book.php';
    }

}
?>
