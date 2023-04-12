<?php require(__DIR__ . '/../partials/head.php') ?>

<?php require(__DIR__ . '/../partials/nav.php') ?>

<?php require(__DIR__ . '/../partials/banner.php') ?>

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">

    <a href="/note? id= <?= $note['id'] ?>" class="text-blue">
      <p> <?= htmlspecialchars($note['msg']) ?></p>
    </a>


    <footer class="mt-6 "> <a class = "inline-flex justify-center rounded-md border border-transparent bg-gray-500 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2" href='/note/edit?id= <?= $note['id']?>' class="text-gray-500 border border-current px-3 py-2 rounded"> Edit </a> </footer>

    <div class="px-4 py-6 sm:px-0">
      <div class="h-96 rounded-lg border-4 border-dashed border-gray-200"></div>
    </div>


    <!-- /End replace -->
  </div>
</main>

<?php require  base_path('views/partials/foot.php') ?>