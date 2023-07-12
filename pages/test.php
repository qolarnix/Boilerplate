<?php declare(strict_types=1);

get_template('header');

$users = get_users();
?>


<?php foreach($users as $user): ?>
    <p class="text-white"><?php echo $user['username']; ?></p><br>
<?php endforeach; ?>

<h1 class="text-3xl font-bold text-white"><?php echo $domain . ':' . $port; ?></h1>