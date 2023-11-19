<?php include 'templates/base-template.php'; ?>

<h2>Book List</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Published Year</th>
            <th>Status</th>
            <th>Book Cover</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            $i = 1;
            foreach ($books as $book): 
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $book["book_id"] ?></td>
                <td><?php echo $book["title"] ?></td>
                <td><?php echo $book["author"] ?></td>
                <td><?php echo $book["category"] ?></td>
                <td><?php echo $book["year"] ?></td>
                <td><?php 

                if ($book["available_quantity"] == 0 ){
                    echo "Not available";
                }
                else{
                    echo "Available";
                }
                
                ?></td>
                <td><?php echo "<img src='".$book['image']."' alt='book_cover'> "?></td>
            </tr>
        <?php 
            $i += 1;
            endforeach;
         ?>
    </tbody>
    
    </table>

<?php include 'templates/base-template.php'; ?>
