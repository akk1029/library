<?php include 'templates/base-template.php'; ?>

<h2>Search Books by Title</h2>

<form method="post" action="?route=search">
    <table>
        <tr>
            <td><label for="title">Title:</label></td>
            <td><input type="text" name="title" required></td>
        </tr>

        <tr>
            <td colspan="2" style="text-align: center;"><button class="cta-button" type="submit">Search Book</button></td>
        </tr>
    </table>

    
</form>

<?php 
    if(isset($book)){

        if(empty($book)){
            echo "<br>There is no such book";
        }

        else{
            foreach ($book as $item):
                echo "<br><br>ROW ID".$item['id'].".<br><br> ".$item['title']." by  ".$item['author']." (".$item['year'].")<br><br>";
                echo "BOOK ID: ".$item['book_id']."<br><br>";
                echo "<img style='display:block; margin-left:10px;' width='150px' src='".$item['image']."' alt='book_cover'> <br><br>";
                echo "<hr>";
            endforeach;
        } 
    }

    else{
        echo "";
    }
?>
 