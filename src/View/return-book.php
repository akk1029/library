<?php include 'templates/base-template.php'; ?>

<h2>Return Book with BORROW ID</h2><br>

<h4 style="text-align: center;">Note: Copy the borrow id form borrow history.</h4>

<form method="post" action="?route=return" style="text-align: center;">
    <table>
        <tr>
            <td><label for="borrow_id">BORROW ID:</label></td>
            <td><input type="text" name="borrow_id" required></td>
        </tr>
        <tr>
            <td><label for="return_date">Return Date:</label></td>
            <td><input type="date" name="return_date" required></td>
        </tr>
        <tr>
            <td colspan="2"><button class="cta-button" type="submit">Return Book</button></td>
        </tr>
    </table>
    
    
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