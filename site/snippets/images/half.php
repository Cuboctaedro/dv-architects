<?php
if (!isset($classes)) {
    $classes = ' ';
}
if($pic->caption()->isNotEmpty()) {
    $alt = $pic->caption(); 
} else {
    $alt = $page->title() . ' - ' . $pic->filename() ;
}
?>
<picture>
    <source media="(max-width: 479px)" data-srcset="<?= $pic->thumb([ 'width'=> 480])->url(); ?>">
    <source media="(max-width: 767px)" data-srcset="<?= $pic->thumb([ 'width'=> 768])->url(); ?>">
    <source media="(max-width: 1023px)" data-srcset="<?= $pic->thumb([ 'width'=> 512])->url(); ?>">
    <source media="(max-width: 1600px)" data-srcset="<?= $pic->thumb([ 'width'=> 600])->url(); ?>">
    <source media="(min-width: 1601px)" data-srcset="<?= $pic->thumb([ 'width'=> 800])->url(); ?>">
    <img data-src="<?= $pic->thumb([ 'width'=> 1600])->url(); ?>" class="block lazyload <?= $classes ?>" alt="<?= $alt ?>" />
</picture>