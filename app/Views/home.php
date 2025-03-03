<?= $this->extend('default') ?>

<?= $this->section('page_title') ?>
<?= esc($page_title) ?>
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<h1 class="text-xl">This is just a very simple app</h1>

<p>There are some test pages to view.</p>

<div>Page 1 - There are 4 errors in the code for this page.  <a href="/pages/one" class="text-blue-900 underline">How many can you resolve?</a></div>
<div>Page 2 - The page should show a grid of posts based upon the array data. There is also an issue to resolve. <a href="/pages/two" class="text-blue-900 underline">Can you fix the error and display the data in the view?</a></div>
<div>Page 3 - Display the Star wars movies table.
    <ul>
        <li>Why is the page broken, are you able to fix it?</li>
        <li>Can you limit the excerpt to 200 characters?</li>
    </ul>
<a href="/pages/three" class="text-blue-900 underline">View page</a>
</div>

<p>Please fork the repository and send us details of your repository for us to view.</p>
<p>Please include a document which details the issues you found and resolved.</p>
<p>Also include a screenshot of each competed page.</p>
<p>Please <strong>DO NOT</strong> use AI to complete this test.</p>

<?= $this->endSection() ?>