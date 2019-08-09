<?php snippet('header') ?>

<div class="relative">
    <div class="absolute inset-x-0 top-0 z-0">
        <?php snippet('images/full', ['pic' => $page->featuredimage()->toFile(), 'classes'=> ' w-full ']) ?>
    </div>
    <div class="font-titles text-center relative z-10 slogan">
        <span class=" ">
            <?= $page->slogan() ?>
        </span>
    </div>
</div>
<?php snippet('footer'); ?>
