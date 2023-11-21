<?php include 'templates/base-template.php'; ?>

<h2>Borrow Book</h2>


<form method="post" action="?route=borrow">

    <label for="book_id">BOOK ID:</label>
    <input type="text" name="book_id" required><br>

    <p>Please get the book id you want to borrow from book list or search page.</p>


    <h2>Your Information</h2>

    <label for="name">NAME:</label>
    <input type="text" name="name" required><br><br>

    <label for="email">Email Address:</label>
    <input type="email" name="email" required><br><br>

    <label for="borrow_date">Borrow Date:</label>
    <input type="date" name="borrow_date" required><br><br>

    <button type="submit">Borrow Book</button>
        
</form>

<?php

    if(isset($status)){

        if($status == "available"){
            echo "<br>Borrow success";
        }

        else{
            echo "<br>The boook is out of stock";
        } 
    }

    else{
        echo "";
    }

?>

<?php include 'templates/base-template.php'; ?>
