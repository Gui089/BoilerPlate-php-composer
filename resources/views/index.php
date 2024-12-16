<?php require('includes/head.php'); ?>
<?php require('includes/top-nav.php'); ?>
<?php require('includes/header.php'); ?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-8">

        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-10 ">
            <?php foreach ($products as $product): ?>
                <div class="p-4 bg-white rounded-lg shadow-md">
                    <div class="relative">
                        <div class="relative max-h-[242px] w-full overflow-hidden rounded-lg">
                            <img alt="Product image" src="<?= $product['image'] ?>" class="max-h-[242px] w-full">
                        </div>

                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-600">
                                <?= $product['name'] ?>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">
                                <?= $product['description'] ?>
                            </p>
                            <div class="text-sm font-medium text-gray-400 pt-3">
                                <?= format_money($product['price']) ?>
                            </div>
                        </div>
                    </div>

                    <div class="mt-4">
                        <a 
                           class="flex items-center justify-center rounded-md border border-transparent bg-gray-200 px-8 py-2 text-sm font-medium
                           hover:bg-gray-300 transition duration-150 ease-in-out"
                           href="/product?id=<?= $product['id'] ?>">
                           View Product
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</main>

<?php require('includes/footer.php'); ?>