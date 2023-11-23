<?php include 'templates/base-template.php'; ?>

<h2>Return Book with BORROW ID</h2>

<h4>Note: Copy the borrow id form borrow history.</h4>

<form method="post" action="?route=return">
    <label for="borrow_id">BORROW ID:</label>
    <input type="text" name="borrow_id" required><br><br>

    <label for="return_date">Return Date:</label>
    <input type="date" name="return_date" required><br><br>

    <button type="submit">Return Book</button>
</form>

<br><br>

<?php

if(isset($status)){

    if($status == "successful"){
        echo '<script>
            alert("Returned Successfully!");
        </script>';
    }

    else{
        echo '<script>
            alert("The book is already returned.");
        </script>';
    } 
}

else{
    echo "";
}

?>

<?php include 'templates/base-template.php'; ?>