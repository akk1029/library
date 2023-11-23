<?php include 'templates/base-template.php'; ?>

<h2>Borrow Book</h2>
<br>

<form method="post" action="?route=borrow" style="text-align: center;">

    <label for="book_id">BOOK ID:</label>
    <input type="text" name="book_id" required><br>

    <h4>Please get the book id you want to borrow from book list or search page.</h4>


    <br><br><h2>Your Information</h2>

    <table>
        <tr>
            <td><label for="name">NAME:</label>
</td>
            <td><input type="text" name="name" required><br><br>
</td>
        </tr>
        <tr>
            <td><label for="email">Email Address:</label>
</td>
            <td><input type="email" name="email" required><br><br>
</td>
        </tr>
        <tr>
            <td><label for="borrow_date">Borrow Date:</label>
</td>
            <td><input type="date" name="borrow_date" required><br><br>
</td>
        </tr>
        <tr>
            <td colspan="2"><button type="submit">Borrow Book</button>
</td>
        </tr>
    </table>
    
        
</form>

<?php

    if(isset($status)){

        if($status == "available"){
            echo '<script>
                alert("Borrowed Successfully!");
            </script>';
        }

        else{
            echo '<script>
                alert("The book is out of stock.");
            </script>';
        } 
    }

    else{
        echo "";
    }

?>

<?php include 'templates/base-template.php'; ?>
