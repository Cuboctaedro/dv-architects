<?php snippet('header') ?>

<div class="absolute inset-x-0 top-0">
    <?php snippet('images/full', ['pic' => $page->featuredimage()->toFile(), 'classes'=> ' w-full ']) ?>
</div>

<?php snippet('footer'); ?>
