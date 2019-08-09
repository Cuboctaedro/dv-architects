<?php

return function ($page) {

    $projects = $page->children()->children()->filterBy('projecttype', '==', 'true');
    $showall = false;
    $pagetitle = t('featuredprojects');
   
    if($all = param('all')) {
        $projects = $page->children()->children();
        $showall = true;
        $pagetitle = t('allprojects');
    }



    return compact('projects', 'pagetitle', 'showall');

};
