<?php include 'includes/header.php'; ?>

  <div class="container pageContainer">
    <div class="fotorama" id="fotorama-slideshow" data-autoplay="3000" data-stop-autoplay-on-touch="false" data-width="100%" data-ratio="800/600" data-nav="thumbs" data-autoplay="true" data-nav-position="top">
      <?php
        $dirname = "assets/img/gallery/";
        $images = scandir($dirname);
        shuffle($images);
        $ignore = Array(".", "..");
        foreach($images as $curimg) {
          if(!in_array($curimg, $ignore)) {
            echo "<a href='".$dirname.$curimg."'></a>";
          }
        }           
      ?>
    </div>
  </div>

  <!-- jQuery -->
  <script src="//code.jquery.com/jquery-latest.min.js"></script>

  <!-- Fotorama -->
  <script src="http://fotorama.s3.amazonaws.com/4.3.0/fotorama.js"></script>
<?php include 'includes/footer.php'; ?>