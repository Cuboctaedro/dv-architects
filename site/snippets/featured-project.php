<article class="flex flex-row flex-wrap lg:items-stretch border-b border-solid grayborder relative">
    <div class="w-full lg:w-1/3 xl:w-1/4 gutter flex-none max-h-full border-b md:border-b-0 border-solid grayborder p-4 sm:p-6 md:p-8">
        <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8">
            <a class="card-link" href="<?= $item->url() ?>">
                <?= $item->title() ?>
            </a>
        </h2>
        <?php snippet('projectcredits', $data = ['page' => $item])?>
    </div>
    <div class="w-full lg:w-2/3 xl:w-3/4 lg:border-l border-solid grayborder">
        <?php $featimage = $item->gallery()->toStructure()->first()->firstimage()->toFile(); ?>
        <picture>
            <source media="(max-width: 479px)" srcset="<?= $featimage->thumb([ 'width'=> 480,'height'=> 240,'crop'=> true])->url(); ?>">
            <source media="(max-width: 767px)" srcset="<?= $featimage->thumb([ 'width'=> 768,'height'=> 384,'crop'=> true])->url(); ?>">
            <source media="(max-width: 1023px)" srcset="<?= $featimage->thumb([ 'width'=> 1024,'height'=> 512,'crop'=> true])->url(); ?>">
            <source media="(max-width: 1339px)" srcset="<?= $featimage->thumb([ 'width'=> 1024,'height'=> 512,'crop'=> true])->url(); ?>">
            <source media="(max-width: 1600px)" srcset="<?= $featimage->thumb([ 'width'=> 1200,'height'=> 600,'crop'=> true])->url(); ?>">
            <source media="(min-width: 1601px)" srcset="<?= $featimage->thumb([ 'width'=> 1600,'height'=> 800,'crop'=> true])->url(); ?>">
            <img src="<?= $featimage->thumb([ 'width'=> 1600,'height'=> 800,'crop'=> true])->url(); ?>" class="block w-full h-auto lg:object-cover lg:h-full" />
        </picture>
    </div>
</article>
