<?php
$posts = [
  ['Title' => 'Title 6', 'body' => 'some body 6'],
  ['Title' => 'Title 7', 'body' => 'some body 7'],
  ['Title' => 'Title 8', 'body' => 'some body 8'],
  ['Title' => 'Title 9', 'body' => 'some body 9'],
  ['Title' => 'Title 10', 'body' => 'some body 10'],
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