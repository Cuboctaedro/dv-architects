<?php snippet('header') ?>

<article class="w-full ">
    <div class="flex flex-row flex-wrap items-stretch border-t border-b border-solid border-gray-500 mb-12">
        <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/4 gutter pt-4">
            <h1 class="font-titles text-4xl uppercase tracking-wide leading-none p-4 "><?= $page->title() ?></h1>
            <div class="flex flex-row flex-wrap">
                <div class="w-full sm:w-1/2 lg:w-full px-4 ">
                    <p class=" border-t border-solid border-gray-500 py-4"><?= $page->subtitle() ?></p>
                    <p class=" border-t border-b border-solid border-gray-500 py-4"><?= $page->location() ?></p>
                </div>
                <div class="w-full sm:w-1/2 lg:w-full px-4 py-8">
                    <img src="<?= $page->diagram()->toFile()->url(); ?>" class="" />
                </div>
            </div>
        </div>
        <div class="w-full md:w-2/3 lg:w-2/3 xl:w-3/4 md:border-l border-solid border-gray-500">
            <img src="<?= $page->gallery()->toStructure()->first()->firstimage()->toFile()->url(); ?>" class="object-cover w-full h-full" />
        </div>
    </div>

    <div class="flex flex-row flex-wrap border-t border-b border-solid border-gray-500 mb-12">
        <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/4 md:order-last gutter">
            <ul class="px-4 py-8 ">
                <?php foreach ($page->credits()->toStructure() as $credit): ?>
                    <li class="py-1 border-b border-solid border-gray-500">
                        <span class="font-titles text-sm font-bold uppercase tracking wider text-gray-400 pr-1"><?= $credit->creditlabel() ?>:</span>
                        <span class=""><?= $credit->credittext() ?></span>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="w-full md:w-2/3 lg:w-2/3 xl:w-3/4 md:border-r border-solid border-gray-500">
            <img src="<?= $page->gallery()->toStructure()->nth(1)->firstimage()->toFile()->url(); ?>" class="object-cover w-full h-full" />
        </div>
    </div>

    <div class="flex flex-row flex-wrap items-stretch border-t border-solid border-gray-500 ">
        <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/4 gutter border-b border-solid border-gray-500">
            <div class="py-8 px-4 generated"><?= $page->text()->kt() ?></div>
        </div>
        <ul class="w-full md:w-2/3 lg:w-2/3 xl:w-3/4 md:border-l border-solid border-gray-500">
            <?php foreach ($page->gallery()->toStructure()->offset(2) as $row): ?>
                <li class="w-full relative border-b border-solid border-gray-500">
                    <?php if($row->rowtype() == 'true'): ?>
                        <div class="flex flex-row flex-wrap items-stretch ">
                            <div class="w-full md:w-1/2">
                                <img src="<?= $row->firstimage()->toFile()->url(); ?>" class="object-cover w-full h-full" />
                            </div>
                            <div class="w-full md:w-1/2">
                                <img src="<?= $row->secondimage()->toFile()->url(); ?>" class="object-cover w-full h-full" />
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="w-full">
                            <img src="<?= $row->firstimage()->toFile()->url(); ?>" class="block w-full " />
                        </div>
                    <?php endif; ?>
                    <div class="absolute inset-x-0 bottom-0 gutter py-2 text-center text-gray-200 text-sm uppercase tracking-wider font-titles" style="background-color:rgba(105,102,97,.5);">
                        <?= $row->caption() ?>
                    </div>
                </li>
        <?php endforeach ; ?>
        </ul>
    </div>


</article>

<?php snippet('footer'); ?>
