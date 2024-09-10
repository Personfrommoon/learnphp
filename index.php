<?php
$posts = [
  ['Title' => 'Title 1', 'body' => 'some body 1'],
  ['Title' => 'Title 2', 'body' => 'some body 2'],
  ['Title' => 'Title 3', 'body' => 'some body 3'],
  ['Title' => 'Title 4', 'body' => 'some body 4'],
  ['Title' => 'Title 5', 'body' => 'some body 5'],
]
?>


<?php include 'partials/header.php'; ?>

<main class="container">
  <?php include 'partials/hero.php'; ?>
  <?php include 'partials/featured.php'; ?>
  

  <div class="row g-5">
    <div class="col-md-8">
      <?php include 'partials/posts.php'; ?>

    </div>

    <div class="col-md-4">
      <?php include 'partials/side.php'; ?>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>