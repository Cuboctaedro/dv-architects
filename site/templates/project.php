<?php snippet('header') ?>
<div class="">
    <?php snippet('nav/projects') ?>
</div>

<article class="w-full ">
    <header class="w-full border-b border-solid grayborder p-4 sm:p-6 md:p-8">
        <h1 class="heading-1"><?= $page->title() ?></h1>
        <p class="font-titles text-lg mb-1"><?= $page->subtitle() ?></p>
        <p class="font-titles text-lg"><?= $page->location() ?></p>
    </header>

    <div class="flex flex-row flex-wrap items-stretch border-b border-solid grayborder">
        <div class="w-full lg:w-1/4 p-4 sm:p-6 md:p-8">
            <?php snippet('projectcredits') ?>
        </div>
        <div class="w-full lg:w-3/4 lg:border-l border-solid grayborder">
            <img src="<?= $page->gallery()->toStructure()->first()->firstimage()->toFile()->url(); ?>" class="object-cover w-full h-full" />
        </div>
    </div>

    <div class="flex flex-row justify-center ">
        <?php if($page->diagram()->isNotEmpty()): ?>
        <div class="h-48 w-64 lg:w-1/4 m-8">
            <img src="<?= $page->diagram()->toFile()->url(); ?>" class="object-contain w-full h-full" />
        </div>
        <?php endif; ?>
    </div>

    <div class="flex flex-row flex-wrap items-stretch border-t border-solid grayborder ">
        <div class="w-full lg:w-1/4 p-4 sm:p-6 md:p-8 border-b border-solid grayborder md:order-last">

            <div class="generated "><?= $page->text()->kt() ?></div>
        </div>
        <ul class="w-full lg:w-3/4 lg:border-r border-solid grayborder">
            <?php foreach ($page->gallery()->toStructure()->offset(1) as $row): ?>
                <li class="w-full border-b border-solid border-gray-500">
                    <?php if($row->rowtype() == 'true'): ?>
                        <div class="flex flex-row flex-wrap items-stretch ">
                            <div class="w-full md:w-1/2">
                                <picture>
                                    <source media="(max-width: 479px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 480])->url(); ?>">
                                    <source media="(max-width: 767px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 768])->url(); ?>">
                                    <source media="(max-width: 1023px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 512])->url(); ?>">
                                    <source media="(max-width: 1339px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 512])->url(); ?>">
                                    <source media="(max-width: 1600px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 600])->url(); ?>">
                                    <source media="(min-width: 1601px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 800])->url(); ?>">
                                    <img src="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 800])->url(); ?>" class="object-cover w-full h-full" />
                                </picture>
                            </div>
                            <div class="w-full md:w-1/2">
                                <picture>
                                    <source media="(max-width: 479px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 480])->url(); ?>">
                                    <source media="(max-width: 767px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 768])->url(); ?>">
                                    <source media="(max-width: 1023px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 512])->url(); ?>">
                                    <source media="(max-width: 1339px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 512])->url(); ?>">
                                    <source media="(max-width: 1600px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 600])->url(); ?>">
                                    <source media="(min-width: 1601px)" srcset="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 800])->url(); ?>">
                                    <img src="<?= $row->secondimage()->toFile()->thumb([ 'width'=> 800])->url(); ?>" class="object-cover w-full h-full" />
                                </picture>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="w-full">
                            <picture>
                                <source media="(max-width: 479px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 480])->url(); ?>">
                                <source media="(max-width: 767px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 768])->url(); ?>">
                                <source media="(max-width: 1023px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 1024])->url(); ?>">
                                <source media="(max-width: 1339px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 1024])->url(); ?>">
                                <source media="(max-width: 1600px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 1200])->url(); ?>">
                                <source media="(min-width: 1601px)" srcset="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 1600])->url(); ?>">
                                <img src="<?= $row->firstimage()->toFile()->thumb([ 'width'=> 1600])->url(); ?>" class="block w-full h-auto lg:object-cover lg:h-full" />
                            </picture>
                        </div>
                    <?php endif; ?>
                    <div class="w-full h-10 border-t border-b border-solid grayborder gutter py-2 text-center text-gray-800 italic text-sm" >
                        <?= $row->caption() ?>
                    </div>
                </li>
        <?php endforeach ; ?>
        </ul>
    </div>


</article>

<?php snippet('footer'); ?>
