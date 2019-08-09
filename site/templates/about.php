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
        <aside class="w-full lg:w-1/2 p-4 sm:p-6 md:p-8 generated ">
            <h2 class="font-titles text-2xl leading-tight mb-4 sm:mb-6 md:mb-8"><?= t('awards') ?></h2>
            <table>
                <tr class="hidden">
                    <th><?= t('year') ?></th>
                    <th><?= t('project') ?></th>
                    <th><?= t('award') ?></th>
                    <th><?= t('architects') ?></th>
                </tr>
            <?php foreach($page->awards()->toStructure() as $row): ?>
                <tr class="flex flex-row flex-wrap border-t border-solid border-gray-500 py-1 font-titles text-gray-300">
                    <td class="tablecell w-full sm:w-1/12 pr-1"><?= $row->year() ?></td>
                    <td class="tablecell w-full sm:w-5/12 pr-1 text-gray-100"><?= $row->title() ?></td>
                    <td class="tablecell w-full sm:w-2/12 pr-1"><?= $row->award() ?></td>
                    <td class="tablecell w-full sm:w-4/12 "><?= $row->architects() ?></td>
                </tr>
            <?php endforeach; ?>
            </table>
        </aside>
    </div>
</section>

<?php snippet('footer'); ?>
