<?php
$gdpr = $site->childrenAndDrafts()->find('gdpr');
$impressum = $site->childrenAndDrafts()->find('impressum');
?>

<nav aria-label="Footer Menu" class="uppercase tracking-wider text-sm font-titles">

        <ul class=" flex flex-col lg:flex-row " >

        <?php if($gdpr): ?>
            <li class="border-r border-solid grayborder">
                <a class="block h-12 px-4 sm:px-6 md:px-8 whitespace-no-wrap leading-12 menucolors <?php e($gdpr->isOpen(), ' active ' )?>" href="<?= $gdpr->url() ?>"><?= $gdpr->title() ?></a>
            </li>
        <?php endif ?>
        <?php if($impressum): ?>
            <li class="border-r border-solid grayborder">
                <a class="block h-12 px-4 sm:px-6 md:px-8 whitespace-no-wrap leading-12 menucolors <?php e($impressum->isOpen(), ' active ' )?>" href="<?= $impressum->url() ?>"><?= $impressum->title() ?></a>
            </li>
        <?php endif ?>
            <li class="border-r border-solid grayborder">
                <a class="block h-12 px-4 sm:px-6 md:px-8 whitespace-no-wrap leading-12 menucolors" href="https://www.cuboctaedro.eu/" target="_blank">Website by Cuboctaedro</a>
            </li>
        </ul>
</nav>
