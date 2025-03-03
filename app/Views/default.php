<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('page_title', true) ?></title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

<header class="bg-orange-600 text-white py-8 px-2">
    <h1 class="text-xl uppercase"><?= $this->renderSection('page_title', true) ?></h1>
</header>

<div class="container mx-auto mt-8">
    <?= $this->renderSection('content') ?>
</div>

<footer>
    <?= $this->renderSection('footer') ?>
</footer>

</body>
</html>