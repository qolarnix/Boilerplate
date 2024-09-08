<?php 

declare(strict_types=1);

echo $view->render('header');

$users = get_users();
?>

<section class="py-12 px-6 border-b border-sky-700">
    <div class="mx-auto max-w-7xl">
        <?php foreach($users as $user): ?>
            <p class="text-white">
                <?php echo $view->escape($user['username'], 'uppercase'); ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>

<section class="py-12 px-6">
    <div class="mx-auto max-w-7xl">
        <?php foreach($items as $item): ?>
            <p class="text-white">
                <?php echo $view->escape($item, 'randomize'); ?>
            </p>
        <?php endforeach; ?>
    </div>
</section>

<?php
echo $view->render('footer');