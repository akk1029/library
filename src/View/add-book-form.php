<?php include 'templates/base-template.php'; ?>

<h2>Add New Book</h2>

<h3>Please change your image to base64 <a href="https://www.base64-image.de/" target="_blank">HERE.</a></h3>

<form method="post" action="?route=add">
    <table>

        <tr>
            <td><label for="title">Title:</label></td>
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
            <td><label for="published_year">Published Year:</label></td>
            <td><input type="number" name="published_year" required></td>
        </tr>
        
        <tr>
            <td><label for="published_year">Quantity:</label></td>
            <td><input type="number" name="quantity" required></td>
        </tr>

        <tr>
            <td><label for="published_year">Book Cover(base64):</label></td>
            <td><input type="text" name="book_cover" required></td>
        </tr>
        
        <tr>
            <td colspan="2"><button type="submit">Add Book</button></td>
        </tr>

    </table>
    
</form>

<?php include 'templates/base-template.php'; ?>
