<?php require("partials/header.php") ?>
<?php require("partials/nav.php") ?>

<!-- <div class="">
    <div class="mx-auto max-w-2xl px-4 py-8 sm:px-6 sm:py-10 lg:max-w-7xl lg:px-8">
        <h2 class="font-bold text-3xl mb-4 uppercase text-gray-700"><?= htmlspecialchars($image['title']) ?></h2>
        <div class="grid grid-cols-1 gap-y-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-2">
            <img src="<?= $image['image_path'] ?>" alt="<?= $image['title'] ?>" class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8" />
        </div>

    </div>
</div> -->
<div class=" mt-20 flex items-center justify-center">
    <div class="max-w-5xl w-full bg-white overflow-hidden">
        <div class="flex flex-col md:flex-row">

            <!-- Image Section -->
            <div class="md:w-1/2">
                <img
                    src=<?= $image['image_path'] ?>
                    alt="<?= $image['title'] ?>"
                    class="w-full h-full object-cover">
            </div>

            <!-- Text Section -->
            <div class="md:w-1/2 p-8 flex flex-col justify-center">
                <h1 class="text-3xl font-bold text-gray-800 mb-4">
                    <?= htmlspecialchars($image['title']) ?>
                </h1>
                <small class="-mt-4 text-gray-500">Uploaded by: <span class="text-blue-600"><?= htmlspecialchars($image['owner']) ?></span></small>
                <small class="text-gray-500">Date uploaded: <?= htmlspecialchars($formatedDate) ?></small>
                <p class="text-gray-600 mt-2 leading-relaxed">
                    <?= htmlspecialchars($image['description']); ?>
                </p>
            </div>

        </div>
    </div>
</div>

<?php require("partials/footer.php");
