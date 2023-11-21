<?php
class BorrowController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
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

}
?>
