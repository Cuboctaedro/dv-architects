<?php
$projectspage = $pages->find('projects');
$categories = $projectspage->categories()->toStructure();
if (!isset($cat)) {
    $cat = false;
}
if (!isset($showall)) {
    $showall = false;
}

 ?>

<nav class="uppercase tracking-wider text-sm font-titles flex flex-col sm:flex-row justify-end border-b border-solid grayborder" aria-label="Projects Menu" >

    <a href="<?= $projectspage->url() ?>" class="<?php e($showall == false && $cat == false, ' active ' )?> block h-12 px-4 sm:px-6 md:px-8 leading-12  border-b sm:border-l sm:border-r sm:border-b-0 border-solid grayborder menucolors"><?= t('featuredprojects') ?></a>

    <div class="relative">
        <button class="w-full sm:w-auto h-12 px-4 sm:px-6 md:px-8 leading-12 uppercase tracking-wider flex flex-row items-center justify-between <?php e($cat != false, ' active ' )?> menucolors" aria-expanded="false" data-toggle-submenu="#projects-menu" title="Project Types Toggle">
            <span class="pr-1"><?= t('bytype') ?></span>
            <?php snippet('icons/down'); ?>
        </button>
        <ul class="absolute shadow-2xl z-20 min-w-64 right-0 bg-gray-700 border-t border-l border-r border-solid grayborder" id="projects-menu" hidden >
            <?php foreach($categories as $category): ?>
                <li class="border-b border-solid grayborder">
                    <a href="<?= url($projectspage->url(), ['params' => ['category' => $category->slug()]]) ?>" class="<?php e($cat == $category->slug(), ' active ' )?> h-12 px-4 sm:px-6 md:px-8 leading-12 block whitespace-no-wrap bg-gray-700 hover:bg-gray-500 hover:text-gray-100 menueffect"><?= $category->title() ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <a href="<?= url($projectspage->url(), ['params' => ['all' => 'true']]) ?>" class="<?php e($showall == true, ' font-bold text-gray-100', 'text-gray-300' )?> block h-12 px-4 sm:px-6 md:px-8 leading-12  border-b sm:border-l sm:border-r sm:border-b-0 border-solid grayborder menucolors"><?= t('allprojects') ?></a>


</nav>
