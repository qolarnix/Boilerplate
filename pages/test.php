<?php declare(strict_types=1);

echo $view->render('header.php');


$users = get_users();
?>


<?php foreach($users as $user): ?>
    <p class="text-white"><?php echo $user['username']; ?></p><br>
<?php endforeach; ?>

<h1 class="text-3xl font-bold text-white">
    <?= $view->escape($domain) . ':' . $view->escape($port); ?>
</h1>

<?php
echo $view->render('footer.php');