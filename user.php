<?php
error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);

require __DIR__ . '/template/_header.php';
require __DIR__ . '/functions/search.php';

$conn = require __DIR__ . '/functions/connect.php';
?>

<div class="article-container">

    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $user = getUserOne($conn, $id);
    } else {
        header('Location: index.php');
    }
    ?>

    <h1>Ism: <?= $user['first_name'] ?></h1>
    <h1>Familiya: <?= $user['last_name'] ?></h1>
    <h1>Otasining ismi: <?= $user['middle_name'] ?></h1>
    <h1>Tug'ilgan sana: <?= $user['birth_date'] ?></h1>
    <h1>Manzil: <?= $user['address'] ?></h1>
    <br>
    <h1><a href="index.php">Bosh sahifa</a></h1>

</div>

<?php require __DIR__ . '/template/_footer.php' ?>