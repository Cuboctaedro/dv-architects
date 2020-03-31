<?php snippet('header') ?>

<div class="relative z-10">
    <?php $gallery = $page->featuredimage()->toFiles(); ?>
    <?php foreach ($gallery as $i => $pic ) : ?>
        <div class="absolute inset-x-0 top-0 z-0 slider-item">
            <?php snippet('images/full', ['pic' => $pic, 'classes'=> ' w-full ']) ?>
        </div>
    <?php endforeach; ?>
    <div class="font-titles text-center relative z-10 slogan">
        <span class=" ">
            <?= $page->slogan() ?>
        </span>
    </div>
</div>
<?php snippet('footer'); ?>
