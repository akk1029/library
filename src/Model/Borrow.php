<?php
class Borrow {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllBooks() {
        $stmt = $this->pdo->query('SELECT * FROM books');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function borrowBook($book_id, $name, $email, $borrow_date) {
        $return_date = clone $borrow_date;
        $return_date->modify('+7 day');
        $borrow_date = $borrow_date->format('Y-m-d');
        $return_date = $return_date->format('Y-m-d');
    
        $status = $this->pdo->prepare('SELECT available_quantity FROM books WHERE book_id = ? ');
        $status->execute([$book_id]);
        $quantity = $status->fetch(PDO::FETCH_ASSOC);
    
        if ($quantity['available_quantity'] > 0) {
            $stmt = $this->pdo->prepare('INSERT INTO borrow (book_id, name, email, borrow_date, return_date) VALUES (:insertValue1, :insertValue2, :insertValue3, :insertValue4, :insertValue5)');
            $stmt->bindParam(':insertValue1', $book_id);
            $stmt->bindParam(':insertValue2', $name);
            $stmt->bindParam(':insertValue3', $email);
            $stmt->bindParam(':insertValue4', $borrow_date);
            $stmt->bindParam(':insertValue5', $return_date);
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
}
?>
