<?php include 'templates/base-template.php'; ?>

<h2>Delete Book By BOOK ID</h2><br>

<h4 style="text-align: center;">Note: Copy the book id of the book you want to delete in search.</h4><br>

<form method="post" action="?route=delete" style="text-align: center;">
    
    <table>
        <tr>
            <td><label for="book_id">BOOK ID:</label></td>
            <td><input type="text" name="book_id" required></td>
        </tr>
        <tr>
            <td colspan="2"><button class="cta-button" type="submit" onclick="remove()">Delete Book</button></td>
        </tr>
    </table>
    
    
</form>

<?php include 'templates/base-template.php'; ?>
