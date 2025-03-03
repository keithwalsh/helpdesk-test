<?= $this->extend('default') ?>

<?= $this->section('page_title') ?>
Blog Posts
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<span class="right"><a href="/"><< BACK</a></span>

<h1 class="text-xl font-bold italic mb-8">All blog posts</h1>

<div class="grid gap-4 grid-cols-2 grid-rows-1">
    <div class="p-4 border-2">
        <h2>The Title</h2>
        <img src="https://picsum.photos/800/300" alt="An Image">
        <p>The excerpt</p>
    </div>
</div>

<?= $this->endSection() ?>