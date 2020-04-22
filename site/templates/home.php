<?php snippet('header') ?>

<div class="relative z-10 home-hero">
    <?php $gallery = $page->featuredimage()->toFiles(); ?>
    <?php foreach ($gallery as $i => $pic ) : ?>
        <div class="absolute inset-0 z-0 slider-item ">
            <?php snippet('images/full', ['pic' => $pic, 'classes'=> ' w-full h-full object-cover']) ?>
        </div>
    <?php endforeach; ?>
</div>
<div class="font-titles text-lg text-center flex justify-center pt-6">
    <div class="slogan">
        <?= $page->slogan() ?>
    </div>
</div>
<div class="text-center flex justify-center py-6">
    <div class="text-sm leading-relaxed text-gray-200 max-w-3xl mx-auto">
        <?= $page->text()->kt(); ?>
    </div>
</div>
<?php snippet('footer'); ?>
