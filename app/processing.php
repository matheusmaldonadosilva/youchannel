<?php require_once('./includes/header.php') ?>
<?php require_once('./includes/navbar_vertical.php') ?>
<main>
  <?php require_once('./includes/navbar_horizontal.php') ?>
</main>

<?php

  if(!isset($_POST['uploadButton'])) {
    echo "No file sent to page.";
    exit();
  }

?>

<?php require_once('./includes/section.php') ?>
<?php require_once('./includes/footer.php') ?>