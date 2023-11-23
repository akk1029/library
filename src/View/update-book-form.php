<?php include 'templates/base-template.php'; ?>

<h2>Update Existing Book</h2>

<h3>Please change your image to base64 <a href="https://www.base64-image.de/" target="_blank">HERE.</a></h3>

<form method="post" action="?route=update">

    <label for="book_id">BOOK ID:</label>
    <input type="text" name="book_id" required><br>

    <p>Please get the book id you want to modify from book list or search page.</p>


    <h2>MODIFY HERE</h2>

    <label for="title">Title:</label>
    <input type="text" name="title" required><br><br>

    <label for="author">Author:</label>
    <input type="text" name="author" required><br><br>

    <label for="author">Category:</label>
    <input type="text" name="category" required><br><br>

    <label for="published_year">Published Year:</label>
    <input type="number" name="published_year" required><br><br>

    <label for="published_year">Quantity:</label>
    <input type="number" name="quantity" required><br><br>

    <label for="published_year">Book Cover(base64):</label>
    <input type="text" name="book_cover" required></td><br><br>

    <button type="submit" onclick="update()">Update Book</button>
        
</form>

<?php include 'templates/base-template.php'; ?>
