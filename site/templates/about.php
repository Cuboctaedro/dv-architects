<?php snippet('header') ?>

<section class="w-full ">
    <header class="w-full border-b border-solid grayborder p-4 sm:p-6 md:p-8">
        <h1 class="heading-1"><?= $page->title() ?></h1>
    </header>
    <div class="flex flex-row flex-wrap border-b border-solid grayborder">
        <article class="w-full lg:w-1/2 p-4 sm:p-6 md:p-8 generated lg:border-r border-solid grayborder">
            <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8"><?= t('profile') ?></h2>
            <?= $page->text()->kt() ?>
        </article>
        <div class="w-full lg:w-1/2   ">
            <article class="p-4 sm:p-6 md:p-8 generated border-b border-solid grayborder">
                <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8"><?= t('awards') ?></h2>
                <table>
                    <tr class="hidden">
                        <th><?= t('year') ?></th>
                        <th><?= t('project') ?></th>
                        <th><?= t('award') ?></th>
                        <th><?= t('architects') ?></th>
                    </tr>
                    <?php foreach ($page->awards()->toStructure() as $row) : ?>
                        <tr class="flex flex-row flex-wrap border-t border-solid border-gray-500 py-1  text-gray-300">
                            <td class="tablecell w-full sm:w-1/12 pr-1"><?= $row->year() ?></td>
                            <td class="tablecell w-full sm:w-5/12 pr-1 font-titles text-gray-100"><?= $row->title() ?></td>
                            <td class="tablecell w-full sm:w-2/12 pr-1"><?= $row->award() ?></td>
                            <td class="tablecell w-full sm:w-4/12 "><?= $row->architects() ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </article>

            <article class="p-4 sm:p-6 md:p-8 ">
                <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8"><?= t('team') ?></h2>
                <?php foreach ($page->children()->filterBy('intendedTemplate', 'person') as $person) : ?>
                    <div class="flex flex-row flex-wrap border-t border-solid border-gray-500 pt-4 text-gray-300">
                        <div class="w-1/2 sm:w-1/3 lg:w-1/4 sm:pr-3 pb-4">
                            <?php if ($pic = $person->featuredimage()->toFile()) : ?>
                                <img data-src="<?= $pic->thumb(['width' => 320])->url(); ?>" class="block lazyload " alt="Portrait <?= $person->title(); ?>" />
                            <?php endif; ?>
                        </div>
                        <div class="w-full sm:w-2/3 lg:w-3/4 sm:pl-3">
                            <h3 class="font-titles text-lg text-gray-100 mt-0 pb-4 "><?= $person->title(); ?></h3>
                            <div class="generated">
                                <?= $person->text()->kt(); ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </article>

        </div>
    </div>
</section>

<?php snippet('footer'); ?>