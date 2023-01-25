<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

require __DIR__ . '/template/_header.php';
require __DIR__ . '/functions/search.php';

$conn = require __DIR__ . '/functions/connect.php';

if (isset($_POST['submit-search']) && !empty($_POST['search'])) {
    $search = $_POST['search'];
    $get_user = getUser($conn, $search);
} else {
    $search = '';
    $get_user = getUserAll($conn);
}
?>

<form method="post">
    <input type="text" name="search" value="<?= $search ?>" placeholder="Search" />
    <button type="submit" name="submit-search">Search</button>
</form>


<h1>Frotn page</h1>
<h2>All articles:</h2>

<div class="article-container">

    <?php foreach ($get_user as $user) : ?>
        <a href="user.php?id=<?= $user['id'] ?>">
            <?= $user['first_name'] . ' ' . $user['last_name'] . ' ' . $user['middle_name'] ?>
        </a>
    <?php endforeach ?>

</div>

<?php require __DIR__ . '/template/_footer.php' ?>