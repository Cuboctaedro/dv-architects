<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">
<head>
    <title><?= e(!$page->isHomePage(), $page->title(). ' | ' , '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= $page->metadescription()?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>"/>
    <?php if($kirby->multilang()): ?>
        <?php foreach($kirby->languages() as $lang): ?>
            <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    <?php snippet('meta');?>

    <!-- <link href="https://fonts.googleapis.com/css?family=Literata:400,400i,700|Play:400,700&display=swap&subset=greek" rel="stylesheet"> -->

    <link rel="stylesheet" href="https://use.typekit.net/uwv4bxv.css">
    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-white bg-gray-700 " >

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="flex flex-col min-h-screen flex-none ">

        <div class="w-full flex-none flex flex-row flex-wrap justify-between h-12 z-10 bg-gray-700 text-gray-300 ">
            <div>
                <?php if ($page->isHomePage()): ?>
                    <h1 class="h-12 leading-12 px-4 sm:px-6 md:px-8 font-titles uppercase tracking-wider whitespace-no-wrap border-r border-solid grayborder"><?= $site->title() ?></h1>
                <?php else: ?>
                    <a href="<?= $site->url() ?>" class="block h-12 leading-12 px-4 sm:px-6 md:px-8 font-titles uppercase tracking-wider whitespace-no-wrap border-r border-solid grayborder menucolors"><?= $site->title() ?></a>
                <?php endif; ?>
            </div>
            <div class="flex flex-row">
                <?php snippet('nav/single'); ?>
            </div>
        </div>

        <main class="flex-auto border-t border-solid grayborder" id="main">
