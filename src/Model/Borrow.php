<?php
class Borrow {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllBorrows() {
        $stmt = $this->pdo->query('SELECT * FROM borrow');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function result($book_id){
        $stmt = $this->pdo->prepare('SELECT * FROM books WHERE book_id = :borrowId ');
        $stmt->bindParam(':borrowId', $book_id);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function borrowBook($book_id, $name, $email, $borrow_date) {
        $due_date = clone $borrow_date;
        $due_date->modify('+7 day');
        $borrow_date = $borrow_date->format('Y-m-d');
        $due_date = $due_date->format('Y-m-d');
        $borrow_id = uniqid();
    
        $status = $this->pdo->prepare('SELECT available_quantity FROM books WHERE book_id = ? ');
        $status->execute([$book_id]);
        $quantity = $status->fetch(PDO::FETCH_ASSOC);
    
        if ($quantity['available_quantity'] > 0) {
            $stmt = $this->pdo->prepare('INSERT INTO borrow (book_id, borrow_id, name, email, borrow_date, due_date) VALUES (:insertValue1, :insertValue2, :insertValue3, :insertValue4, :insertValue5, :insertValue6)');
            $stmt->bindParam(':insertValue1', $book_id);
            $stmt->bindParam(':insertValue2', $borrow_id);
            $stmt->bindParam(':insertValue3', $name);
            $stmt->bindParam(':insertValue4', $email);
            $stmt->bindParam(':insertValue5', $borrow_date);
            $stmt->bindParam(':insertValue6', $due_date);
            $stmt->execute();
    
            $newQuantity = $quantity['available_quantity'] - 1;
            $stock = $this->pdo->prepare('UPDATE books SET available_quantity = :insertValue1 WHERE book_id = :insertValue2');
            $stock->bindParam(':insertValue1', $newQuantity);
            $stock->bindParam(':insertValue2', $book_id);
            $stock->execute();
    
            return 'available';
        } 
        
        else {
            return 'unavailable';
        }
    }


    public function returnBook($borrow_id, $return_date){

        $condition = $this->pdo->prepare('SELECT * FROM borrow WHERE borrow_id = ?');
        $condition->execute([$borrow_id]);
        $status = $condition->fetch(PDO::FETCH_ASSOC);

        if ($status["return_date"] == "0000-00-00"){
            $stmt = $this->pdo->prepare('UPDATE borrow SET return_date = :insertValue1 WHERE borrow_id = :insertValue2');
            $stmt->bindParam(':insertValue1', $return_date);
            $stmt->bindParam(':insertValue2', $borrow_id);
            $stmt->execute();

            $stmtGetQuantity = $this->pdo->prepare('SELECT book_id FROM borrow WHERE borrow_id = :borrowId');
            $stmtGetQuantity->bindParam(':borrowId', $borrow_id);
            $stmtGetQuantity->execute();

            $book_id = $stmtGetQuantity->fetchColumn();

            $stmtUpdateQuantity = $this->pdo->prepare('UPDATE books SET available_quantity = available_quantity + 1 WHERE book_id = :bookId');
            $stmtUpdateQuantity->bindParam(':bookId', $book_id);
            $stmtUpdateQuantity->execute();

            return "successful";
        }

        else{
            return "pre-exist";
        }
    }


}
?>
