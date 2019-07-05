<?php snippet('header') ?>

<article class=" ">
    <header class="gutter mb-12">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <section >
        <ul class="border-t border-solid border-gray-500">
            <?php foreach($page->children() as $item): ?>
                <li class="flex flex-row flex-wrap items-stretch border-b border-solid border-gray-500 ">
                    <div class="w-full md:w-1/3 lg:w-1/3 xl:w-1/4 gutter pt-4 flex-none max-h-full border-b md:border-b-0 border-solid border-gray-500">
                        <h1 class="font-titles text-2xl leading-tight p-4 "><?= $item->title() ?></h1>
                        <ul class="px-4 py-8 ">
                            <?php foreach ($item->credits()->toStructure() as $credit): ?>
                                <li class="py-1 border-b border-dotted border-gray-500">
                                    <span class="font-titles text-sm font-bold uppercase tracking wider text-gray-400 pr-1"><?= $credit->creditlabel() ?>:</span>
                                    <span class=""><?= $credit->credittext() ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="w-full md:w-2/3 lg:w-2/3 xl:w-3/4 md:border-l border-solid border-gray-500 flex flex-row flex-wrap gutter pt-8 photoswipe-gallery" itemscope itemtype="http://schema.org/ImageGallery">
                        <?php foreach($item->images() as $image): ?>
                            <figure class="gutter mb-8 " itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                                <a href="<?= $image->url() ?>" itemprop="contentUrl" data-size="<?= $image->width() ?>x<?= $image->height() ?>">
                                    <img src="<?= $image->thumb(['height'  => 260])->url() ?>" itemprop="thumbnail" alt="<?= $image->caption() ?>" />
                                </a>
                                <figcaption itemprop="caption description"><?= $image->caption() ?></figcaption>
                            </figure>
                        <?php endforeach; ?>
                    </div>

                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</article>
<?php snippet('photoswipe'); ?>
<?php snippet('footer'); ?>
