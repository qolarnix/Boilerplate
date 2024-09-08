<?php

declare(strict_types=1);

echo $view->render('header');
?>

<section class="px-6">
    <div class="mx-auto max-w-7xl">

        <div class="flex flex-col gap-6 items-center justify-center h-screen">
            <h1 class="text-5xl font-extralight font-display">Glacial</h1>

            <div>
                <p class="text-center">read the <a href="https://github.com/qolarnix/Boilerplate/" target="_block" class="border-b border-cyan-300">docs</a></p>
            </div>
        </div>

    </div>
</section>

<?php
echo $view->render('footer');