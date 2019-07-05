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
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans:400,400i,700|Jura:400,700&display=swap&subset=greek" rel="stylesheet">

    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-white bg-gray-600 " >

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="flex flex-col min-h-screen flex-none ">

        <div class="fixed w-full flex-none flex flex-row flex-wrap justify-between  h-12 mb-6 sm:mb-12 z-10">
            <?php snippet('nav/single'); ?>
            <?php snippet('nav/languages'); ?>
        </div>

        <main class="flex-auto pt-24" id="main">
