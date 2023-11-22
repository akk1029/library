<?php include 'templates/base-template.php'; ?>

<h2>Borrow History</h2>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Borrow ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Borrow Date</th>
            <th>Due Date</th>
            <th>Return Date</th>
            <th>Book Title</th>
            <th>Book Cover</th>
        </tr>
    </thead>

    <tbody>
        <?php 
            $i = 1;
            foreach ($borrows as $borrow): 
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $borrow["borrow_id"] ?></td>
                <td><?php echo $borrow["name"] ?></td>
                <td><?php echo $borrow["email"] ?></td>
                <td><?php echo $borrow["borrow_date"] ?></td>
                <td><?php echo $borrow["due_date"] ?></td>
                <td><?php 
                    if ($borrow["return_date"] == "0000-00-00"){
                        echo "Not returned";
                    }
                    else{
                        echo $borrow["return_date"];
                    }
                ?></td>

                <?php
                    $results = $borrowModel->result($borrow["book_id"]);
                    foreach ($results as $result):
                ?>

                    <td><?php echo $result["title"] ?></td>
                    <td><?php echo "<img src='".$result['image']."' alt='book_cover'> "?></td>
                    <?php endforeach ?>
            </tr>
        <?php 
            $i += 1;
            endforeach;
         ?>
    </tbody>
    
    </table>

<?php include 'templates/base-template.php'; ?>
