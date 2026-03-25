<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<div class="">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
        <h2 class="font-bold text-5xl mb-4 uppercase text-gray-700">Gallery</h2>
        <div class="grid grid-cols-1 gap-y-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-2">
            <?php foreach ($images as $image): ?>
                <a href="/books/gallery_project/image?id=<?= $image['id'] ?>" class="group">
                    <img src="<?= $image['image_path'] ?>" alt="<?= $image['title'] ?>" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<?php require("partials/footer.php") ?>