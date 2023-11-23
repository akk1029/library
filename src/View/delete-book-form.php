<?php include 'templates/base-template.php'; ?>

<h2>Delete Book By BOOK ID</h2>

<h4>Note: Copy the book id of the book you want to delete in search.</h4>

<form method="post" action="?route=delete">
    <label for="book_id">BOOK ID:</label>
    <input type="text" name="book_id" required>
    <button type="submit" onclick="remove()">Delete Book</button>
</form>

<?php include 'templates/base-template.php'; ?>
