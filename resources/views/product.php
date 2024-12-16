<?php require('includes/head.php'); ?>
<?php require('includes/top-nav.php');?>
<?php require('includes/header.php');?>

<main>
    <div class="mx-auto max-w-7xl py-6 px-8">
        <h2 class="text-xl leading-6 font-bold text-gray-600">
            <?= $product['name']?>
        </h2>
        <img
                class=""
                src="<?= $product['image']?>"
                alt="imagem do produto"
        >
    </div>
</main>

<?php require('includes/footer.php');?>
