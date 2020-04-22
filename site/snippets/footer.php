        </main>

        <footer class="flex-none border-t border-solid grayborder flex flex-row">
            <?php snippet('nav/footer'); ?>
            <div class="flex ml-auto">
            <?php foreach ( $site->footerimages()->toFiles() as $pic ) : ?>
            <div class="px-2 py-px h-12">
                <img src="<?= $pic->thumb([ 'height'=> 72 ])->url(); ?>" class="h-full w-auto block" />
            </div>
            <?php endforeach; ?>

            </div>
        </footer>

    </div>
<?= mix('/app.js') ?>
</body>
</html>


