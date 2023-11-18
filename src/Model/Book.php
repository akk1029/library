<?php
class Book {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAllBooks() {
        $stmt = $this->pdo->query('SELECT * FROM books');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function addBook($book_id, $title, $author, $category, $publishedYear, $quantity, $book_cover) {
        $stmt = $this->pdo->prepare('INSERT INTO books (book_id, title, author, category, year, quantity, available_quantity, image) VALUES  (?, ?, ?, ?, ?, ?, ?, ?)');
        $stmt->execute([$book_id, $title, $author, $category, $publishedYear, $quantity, $quantity, $book_cover]);
    }

    public function deleteBook($title){
        $stmt = $this->pdo->prepare('DELETE FROM books WHERE title=?');
        $stmt->execute([$title]);
    }
 
    public function searchBook($title){
        $stmt = $this->pdo->prepare('SELECT * FROM books WHERE title=?');
        $stmt->execute([$title]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
