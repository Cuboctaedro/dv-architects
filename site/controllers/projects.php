<?php

return function ($page) {

    $categorylist = $page->categories()->toStructure();

    $allprojects = $page->children()->listed();

    $projects = $page->children()->listed()->filterBy('projecttype', '==', 'true');

    $otherprojects = $page->children()->listed()->filterBy('projecttype', '!=', 'true');

    $pagetitle = t('featuredprojects');

    $cat = false;

    $showall = false;

    if($cat = param('category')) {
        $projects = $allprojects->filterBy('category', $cat);
        $pagetitle = $categorylist->findBy('slug', $cat)->title();
    }

    if(param('all')) {
        $showall = true;
        $projects = $projects->add($otherprojects);
        $pagetitle = t('allprojects');
    }

    return compact('projects', 'cat', 'showall', 'pagetitle');

};
