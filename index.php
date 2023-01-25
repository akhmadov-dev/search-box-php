<?php include __DIR__ . '/template/_header.php' ?>
<?php include __DIR__ . '/functions/connect.php' ?>
<?php include __DIR__ . '/functions/search.php' ?>

<form>
    <input type="text" name="search" placeholder="Search" />
    <button type="submit" name="submit-search">Search</button>
</form>


<h1>Frotn page</h1>
<h2>All articles:</h2>

<div class="article-container">

    <?php

    if (isset($_GET['submit_search'])) {
        $search = $_GET['search'];
        $get_user = getUser($conn, $search);
    } else {
        $get_user = getUserAll($conn);
    }
    ?>

    <?php foreach ($get_user as $user) : ?>
        <a href="user.php?id=<?= $user['id'] ?>">
            <?= $user['first_name'] . ' ' . $user['last_name'] . ' ' . $user['middle_name'] ?>
        </a>
    <?php endforeach ?>

</div>

<?php include __DIR__ . '/template/_footer.php' ?>