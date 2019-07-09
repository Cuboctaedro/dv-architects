<ul>
    <?php foreach ($page->credits()->toStructure() as $credit): ?>
        <li class="border-t border-solid border-gray-500">
            <span class="font-titles text-sm uppercase tracking-wider text-gray-300 block"><?= $credit->creditlabel() ?>:</span>
            <span class="text-gray-100 leading-tight block py-2"><?= $credit->credittext() ?></span>
        </li>
    <?php endforeach; ?>
</ul>
