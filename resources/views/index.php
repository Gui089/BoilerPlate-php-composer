<?php require('includes/head.php'); ?>
<?php require('includes/top-nav.php');?>
<?php require('includes/header.php');?>

      <main>
          <div class="mx-auto max-w-7xl py-6 px-8">
              <ul>
                  <?php foreach ($products as $product): ?>
                   <li><?= $product['name']?> - <?= format_money($product['price']) ?></li>
                  <?php endforeach; ?>
              </ul>
          </div>
      </main>

<?php require('includes/footer.php');?>