<?php declare(strict_types=1);

echo $view->render('header');


$users = get_users();
?>

<section class="py-12 px-6">
    <div class="container mx-auto">

        <?php foreach($users as $user): ?>
            <p class="text-white">
                <?php echo $view->escape($user['username'], 'uppercase'); ?>
            </p>
            <br>
        <?php endforeach; ?>

        <h1 class="text-3xl font-bold text-white">
            <?= $view->escape($domain) . ':' . $view->escape($port); ?>
        </h1>

    </div>
</section>

<section class="py-12 px-6">
    <div class="container mx-auto">
        <?php 
            foreach($items as $item) {
                echo $view->escape($item, 'randomize') . '&nbsp;';
            }
        ?>
    </div>
</section>

<?php
echo $view->render('footer');