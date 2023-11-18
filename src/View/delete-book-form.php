<?php include 'templates/base-template.php'; ?>

<h2>Delete Book</h2>

<form method="post" action="?route=delete">
    <label for="title">Title:</label>
    <input type="text" name="title" required>
    <button type="submit">Delete Book</button>
</form>

<?php include 'templates/base-template.php'; ?>
