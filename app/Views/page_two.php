<?= $this->extend('default') ?>

<?= $this->section('page_title') ?>
Blog Posts
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<span class="right"><a href="/"><< BACK</a></span>

<h1 class="text-xl font-bold italic mb-8">All blog posts</h1>

<div class="grid gap-4 grid-cols-2 grid-rows-1">
<?php foreach ($posts as $post): ?>
    <div class="p-4 border-2">
        <h2><?php echo $post['title']; ?></h2>
        <img src="<?php echo $post['image']; ?>" alt="An Image">
        <p><?php echo $post['excerpt']; ?></p>
    </div>
    <?php endforeach; ?>
</div>

<?= $this->endSection() ?>