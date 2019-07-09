<?php
$items = $site->pages()->listed();
if($items->isNotEmpty()):
?>

<nav aria-label="Main Menu" class="uppercase tracking-wider text-sm font-titles">
    <button class="border-l border-solid grayborder block h-12 px-4 sm:px-6 md:px-8  whitespace-no-wrap leading-12 lg:hidden menucolors" aria-expanded="false" data-toggle-menu="#main-menu" title="Menu Toggle">
        <?php snippet('icons/burger'); ?>
        <span class="visually-hidden">Menu</span>
    </button>
    <div class="absolute lg:static flex flex-col lg:flex-row shadow-2xl lg:shadow-none main-menu" id="main-menu" style="top:3rem;left:3rem;right:3rem;">

        <ul class=" flex flex-col lg:flex-row " >
        <?php foreach($items as $item): ?>
            <li class="w-full lg:border-l border-solid grayborder">
                <a class="block w-full h-12 px-4 sm:px-6 md:px-8 whitespace-no-wrap leading-12 menucolors <?php e($item->isOpen(), ' active ' )?>" href="<?= $item->url() ?>"><?= $item->title() ?></a>
            </li>
        <?php endforeach ?>
        </ul>

        <ul class="flex flex-col lg:flex-row">
        <?php foreach($kirby->languages() as $language): ?>
            <li class=" <?php e($kirby->language() == $language, ' font-bold ') ?> lg:border-l border-solid grayborder" >
                <a href="<?= $page->url($language->code()) ?>" hreflang="<?= $language->code() ?>" class="block w-full h-12 px-4 sm:px-6 md:px-8 whitespace-no-wrap leading-12 menucolors <?php e($kirby->language() == $language, ' active ') ?>">
                    <?= html($language->code()) ?>
                </a>
            </li>
        <?php endforeach ?>
        </ul>

    </div>
</nav>

<?php endif ?>
