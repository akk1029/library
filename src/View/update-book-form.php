<?php include 'templates/base-template.php'; ?>

<h2>Update Existing Book</h2><br>

<h4 style="text-align: center;">Please change your image to base64 <a href="https://www.base64-image.de/" target="_blank">HERE.</a></h4>

<form method="post" action="?route=update" style="text-align: center;">

    <label for="book_id">BOOK ID:</label>
    <input type="text" name="book_id" required><br><br><br>

    <h4>Note: Please get the book id you want to modify from book list or search page.</h4><br>


    <h2>MODIFY HERE</h2>

    <table>
        <tr>
            <td><label for="title">Title:</label> </td>
            <td><input type="text" name="title" required></td>
        </tr>
        <tr>
            <td><label for="author">Author:</label></td>
            <td><input type="text" name="author" required></td>
        </tr>
        <tr>
            <td><label for="author">Category:</label></td>
            <td><input type="text" name="category" required></td>
        </tr>
        <tr>
            <td> <label for="published_year">Published Year:</label></td>
            <td> <input type="number" name="published_year" required></td>
        </tr>
        <tr>
            <td><label for="published_year">Quantity:</label></td>
            <td><input type="number" name="quantity" required></td>
        </tr>
        <tr>
            <td><label for="published_year">Book Cover(base64):</td>
            <td><input type="text" name="book_cover" required></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;"> <button class="cta-button" type="submit" onclick="update()">Update Book</button></td>
        </tr>
    </table>
        
</form>

<?php include 'templates/base-template.php'; ?>
