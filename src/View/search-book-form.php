<?php include 'templates/base-template.php'; ?>

<h2>Search Books by Title</h2>

<form method="post" action="?route=search">
    <label for="title">Title:</label>
    <input type="text" name="title" required>

    <button type="submit">Search Book</button>
</form>

<?php 
    if(isset($book)){

        if(empty($book)){
            echo "<br>There is no such book";
        }

        else{
            foreach ($book as $item):
                echo "<br><br>ROW ID".$item['id'].". ".$item['title']." by  ".$item['author']." (".$item['year'].")<br><br>";
                echo "BOOK ID: ".$item['book_id']."<br><br>";
                echo "<img width='150px' src='".$item['image']."' alt='book_cover'> <br><br>";
            endforeach;
        } 
    }

    else{
        echo "";
    }
?>
