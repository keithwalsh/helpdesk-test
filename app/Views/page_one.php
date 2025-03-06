<?= $this->extend('default') ?>

<?= $this->section('page_title') ?>
A blog post
<?= $this->endSection() ?>

<?= $this->section('content') ?>

<span class="right"><a href="/"><< BACK</a></span>

<h1 class="text-xl font-bold italic mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur quam erat, id efficitur nibh dapibus id. Sed tellus dolor.</h1>

<div class="grid gap-4 grid-cols-2 grid-rows-1">
    <div class="p-4 border-2">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur efficitur quam erat, id efficitur nibh dapibus id. Sed tellus dolor, lacinia sit amet purus non, blandit viverra felis. Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue. Ut ullamcorper porttitor odio, sit amet venenatis nisi ullamcorper nec. Etiam aliquet ornare mauris, ut sollicitudin nibh luctus at. Sed imperdiet hendrerit erat, vel commodo mi viverra et. Integer tincidunt mi at laoreet mollis. Donec in ex hendrerit, condimentum leo id, imperdiet lectus. Etiam finibus gravida orci sagittis dignissim. Duis placerat enim quis commodo sodales. Curabitur at urna sem. Pellentesque sit amet elit odio. Nulla varius dui lectus, et dictum justo congue ut. Cras justo leo, aliquet eu ipsum sit amet, sagittis mattis elit. Praesent fringilla nibh viverra mauris condimentum, eget aliquam odio rhoncus.
    </div>
    <div>
        <img src="https://picsum.photos/800/300" alt="An Image">
    </div>
</div>

<div class="grid gap-4 grid-col-3 grid-rows-2">
    <div class="my-8">
        <h2 class="text-xl font-bold">Title</h2>
        <img src="https://picsum.photos/500/200" alt="An Image">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div>
    <div class="my-8">
        <h2 class="text-xl font-bold">Another Title</h2>
        <img src="https://picsum.photos/500/200" alt="An Image">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div><div class="my-8">
        <h2 class="text-xl font-bold">Three words</h2>
        <img src="https://picsum.photos/500/200">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div><div class="my-8">
        <h2 class="text-xl font-bold">A story</h2>
        <img src="https://picsum.photos/500/200" alt="An Image">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div><div class="my-8">
        <h2 class="text-xl font-bold">Post Title</h2>
        <img src="https://picsum.photos/500/200" alt="An Image">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at.</p>
        <p class="font-bold mb-4">Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div><div class="my-8">
        <h2 class="text-xl font-bold">Another story</h2>
        <img src="https://picsum.photos/500/200" alt="An Image">
        <p class="mb-4">Nulla condimentum dolor nunc, at condimentum mauris volutpat at. Phasellus id ante tristique, feugiat libero eu, sodales augue.</p>
        <a href="#" class="rounded bg-orange-600 text-white p-4 mt-4">Read More</a>
    </div>
</div>
<?= $this->endSection() ?>

