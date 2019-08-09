<?php snippet('header') ?>

<div class="">
    <?php snippet('nav/projects') ?>
</div>

<section class=" ">
    <header class="w-full p-4 sm:p-6 md:p-8">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <ul class="border-t border-solid grayborder">
        <?php foreach($page->children() as $item): ?>
            <li>
                <?php if ($item->projecttype() == 'true'): ?>
                    <?php snippet('featured-project', ['item' => $item]); ?>
                <?php else: ?>
                    <?php snippet('archived-project', ['item' => $item]); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>
    </ul>
</section>
<?php snippet('photoswipe'); ?>
<?php snippet('footer'); ?>
