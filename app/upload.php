<?php require_once('./includes/header.php') ?>
<?php require_once('./includes/navbar_vertical.php') ?>
<main>
  <?php require_once('./includes/navbar_horizontal.php') ?>
  <?php require_once('./includes/class/VideoDetailsFormProvider.php') ?>


  <div class="form-video">

  <?php
    $formProvider = new VideoDetailsFormProvider($con);
    echo $formProvider->createUploadForm();

    ?>

  </div>


</main>
<?php require_once('./includes/section.php') ?>
<?php require_once('./includes/footer.php') ?>