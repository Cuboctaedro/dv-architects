<ul>
    <?php foreach ($page->credits()->toStructure() as $credit): ?>
        <li class="border-t border-solid border-gray-500">
            <span class="font-titles text-sm uppercase tracking-wider text-gray-300 block pt-px"><?= $credit->creditlabel() ?>:</span>
            <span class="text-gray-100 text-sm leading-normal block pb-2 pt-1"><?= $credit->credittext() ?></span>
        </li>
    <?php endforeach; ?>
</ul>
