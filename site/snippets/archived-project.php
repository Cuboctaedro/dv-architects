<article class="flex flex-row flex-wrap items-stretch border-b border-solid grayborder ">
    <div class="w-full lg:w-1/3 xl:w-1/4 gutter p-4 sm:p-6 md:p-8 flex-none max-h-full border-b md:border-b-0 border-solid grayborder">
        <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8"><?= $item->title() ?></h2>
        <?php snippet('projectcredits', $data = ['page' => $item])?>
    </div>
    <div class="w-full lg:w-2/3 xl:w-3/4 md:border-l border-solid grayborder flex flex-row flex-wrap gutter pt-8 photoswipe-gallery" itemscope itemtype="http://schema.org/ImageGallery">
        <?php foreach($item->images()->limit(4) as $image): ?>
            <figure class="px-4 sm:px-6 md:px-8 mb-4 sm:mb-6 md:mb-8" itemprop="associatedMedia" itemscope itemtype="http://schema.org/ImageObject">
                <a href="<?= $image->url() ?>" itemprop="contentUrl" data-size="<?= $image->width() ?>x<?= $image->height() ?>">
                    <img src="<?= $image->thumb(['height'  => 260])->url() ?>" itemprop="thumbnail" alt="<?= $image->caption() ?>" />
                </a>
                <figcaption itemprop="caption description"><?= $image->caption() ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</article>
