<?php require (__DIR__.'/../partials/head.php')?>
 
<?php require (__DIR__ .'/../partials/nav.php')?>

<?php require (__DIR__ .'/../partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
  <?php foreach ($notes as $note) : ?>
    <a href="/note? id= <?= $note['id'] ?>" class = "text-blue-500 hover:underline">
    <li> <?= htmlspecialchars($note['body'])?></li>
    </a>
  <?php endforeach ?>
  <p class = "mt-6">
  <a href ="/notes/create" class = "text-blue-500 hover:underline"> Create Note </a>
  </p>
    <div class="px-4 py-6 sm:px-0">
      <div class="h-96 rounded-lg border-4 border-dashed border-gray-200"></div>
    </div>
    <!-- /End replace -->
  </div>
</main>

<?php require  base_path('views/partials/foot.php') ?>




