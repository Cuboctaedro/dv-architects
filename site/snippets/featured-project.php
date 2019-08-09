<article class="flex flex-row flex-wrap lg:items-stretch border-b border-solid grayborder relative">
    <div class="w-full lg:w-1/3 xl:w-1/4 gutter flex-none max-h-full border-b md:border-b-0 border-solid grayborder p-4 sm:p-6 md:p-8">
        <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8">
            <?= $item->title() ?>
        </h2>
        <?php snippet('projectcredits', $data = ['page' => $item])?>
        <a href="<?= $item->url() ?>" class="card-link inline-block px-3 py-1 my-2 menutext bg-gray-100 text-gray-900 hover:bg-orange-500 hover:text-gray-900 menueffect" ><?= t('more') ?></a>
    </div>
    <div class="w-full lg:w-2/3 xl:w-3/4 lg:border-l border-solid grayborder">
        <?php snippet('images/full', ['pic' => $item->gallery()->toStructure()->first()->firstimage()->toFile(), 'classes'=> ' w-full h-auto lg:object-cover lg:h-full ']) ?>
    </div>
</article>
