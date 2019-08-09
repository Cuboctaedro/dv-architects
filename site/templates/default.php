<?php snippet('header') ?>

<article class="w-full ">
    <header class="w-full border-b border-solid grayborder p-4 sm:p-6 md:p-8">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap border-b border-solid grayborder">
        <div class="w-full lg:w-1/2 p-4 sm:p-6 md:p-8 generated lg:border-r border-solid grayborder">
            <?= $page->text()->kt() ?>
        </div>
        <div class="w-full lg:w-1/2">
            <?php if ($page->file('map.png')): ?>
                <a class="block" href="https://www.google.com/maps/place/Neochoriou+18,+Athina+113+63/@37.9974982,23.7475292,17z/data=!4m5!3m4!1s0x14a1a2b05842b43b:0xf5a15f70f9b6e3b2!8m2!3d37.9975659!4d23.7485055" target="_blank">
                    <img src="<?= $page->file('map.png')->url()?>" class="block w-full" />
                </a>
            <?php endif; ?>
        </div>
    </div>
</article>

<?php snippet('footer'); ?>
