<!doctype html>
<html lang="<?= $kirby->language()->code() ?>">

<head>
    <title><?= e(!$page->isHomePage(), $page->title() . ' | ', '') ?><?= $site->title() ?></title>
    <meta name="Description" content="<?= $page->metadescription() ?>">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="<?= $page->url() ?>" />
    <?php if ($kirby->multilang()) : ?>
        <?php foreach ($kirby->languages() as $lang) : ?>
            <link rel="alternate" hreflang="<?= $lang->code() ?>" href="<?= $page->url($lang->code()) ?>" />
        <?php endforeach; ?>
    <?php endif; ?>
    <?php snippet('meta'); ?>

    <link href="https://fonts.googleapis.com/css2?family=Jura:wght@600&family=Open+Sans:ital@0;1&display=swap" rel="stylesheet">


    <?= mix('/app.css') ?>
</head>

<body class="font-sans text-base text-white bg-gray-700 ">

    <a class="skip-link" href="#main">Skip to content</a>

    <div class="flex flex-col min-h-screen flex-none ">

        <div class="w-full flex-none flex flex-row flex-wrap justify-between h-16 z-10 bg-gray-700 text-gray-300 relative z-20">
            <div>
                <?php if ($page->isHomePage()) : ?>
                    
                    <div class="border-r border-solid grayborder h-16 px-4 sm:px-6 flex">
                        <?php if ( $site->logoimage()->isNotEmpty() ) : ?>
                            <div class="pr-4 sm:pr-6 py-px h-16"><img src="<?= $site->logoimage()->toFile()->url(); ?>" class="w-auto h-full block" /></div>
                        <?php endif; ?>
                        <h1 class=" leading-16 font-titles uppercase tracking-wider whitespace-no-wrap"><?= $site->title() ?></h1>
                    </div>
                    
                <?php else : ?>

                    <a class="border-r border-solid grayborder h-16 px-4 sm:px-6 flex menucolors" href="<?= $site->url() ?>">
                        <?php if ( $site->logoimage()->isNotEmpty() ) : ?>
                            <div class="pr-4 sm:pr-6 py-px h-16"><img src="<?= $site->logoimage()->toFile()->url(); ?>" class="h-full" /></div>
                        <?php endif; ?>
                        <div class=" leading-16 font-titles uppercase tracking-wider whitespace-no-wrap"><?= $site->title() ?></div>
                    </a>
                <?php endif; ?>
            </div>
            <div class="flex flex-row">
                <?php snippet('nav/single'); ?>
            </div>
        </div>

        <main class="flex-auto border-t border-solid grayborder" id="main">