<?= $this->extend('default') ?>

<?= $this->section('page_title') ?>
Blog Posts
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<span class="right"><a href="/"><< BACK</a></span>

<h1 class="text-xl font-bold italic mb-8">All Star Wars Movies</h1>

<div class="grid gap-4 grid-cols-2 grid-rows-1">

    <table class="border-2 w-full" style="width: 100%;">
        <thead>
            <th>Episode No</th>
            <th>Name</th>
            <th>Excerpt</th>
            <th>Release Date</th>
        </thead>
        <tbody>
        <?php
            foreach ($films['results'] as $film) {
                exit(var_dump($film));
                if(rating($film)){
            ?>
                <tr>
                    <td class="border-2"> <?php echo $film['episode_id']; ?></td>
                    <td class="border-2"> <?php echo $film['title']; ?></td>
                    <td class="border-2"> <?php echo $film['opening_crawl']; ?></td>
                    <td class="border-2"> <?php echo $film['released_at']; ?></td>
                </tr>
            <?php
                }
            }
        ?>

        </tbody>
    </table>

</div>

<?= $this->endSection();

function rating($film): bool
{
    if ($film['episode_id'] > 3) {
        return true;
    }
}

?>