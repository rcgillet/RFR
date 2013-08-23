<html lang="en">
<head>
    <title>Race for Rescue</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootswatch.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/application.css" />

    <link rel="stylesheet" href="assets/css/blueimp/blueimp-gallery.min.css">
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Race For Rescue</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li class="divider"></li>
          <li><a id="about" href="index.html#about">About</a></li>
          <li><a id="howPlay" href="index.html#howPlay">How to Play</a></li>
          <li><a id="howSponsor" href="index.html#howSponsor">How to Sponsor</a></li>          
          <li><a id="news" href="index.html#news">In the News</a></li>
          <li><a href="photos.php">Photos</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <div class="container pageContainer">
    <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
        <div class="slides"></div>
        <h3 class="title"></h3>
        <a class="prev">&#8249;</a>
        <a class="next">&#8250;</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
    </div>
    <div id="links" style="display:none">
      <?php
        $dirname = "assets/img/gallery/";
        $images = scandir($dirname);
        shuffle($images);
        $ignore = Array(".", "..");
        foreach($images as $curimg) {
          if(!in_array($curimg, $ignore)) {
            echo "<a href='".$dirname.$curimg."'><img src='".$dirname.$curimg."' alt='' style='height:200px'/></a>";
          }
        }           
      ?>
    </div>
  </div>

  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="assets/js/blueimp/blueimp-gallery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
  <script>
    function scrollToAnchor(aid){
    var aTag = $("div[name='"+ aid +"']");
    console.log(aTag);
      $('html,body').animate({scrollTop: aTag.offset().top - 25},'slow');
    }

    $("#about").click(function() {
       scrollToAnchor('about');
    });

    $("#howPlay").click(function() {
       scrollToAnchor('howPlay');
    });

    $("#howSponsor").click(function() {
       scrollToAnchor('howSponsor');
    });

    $("#news").click(function() {
       scrollToAnchor('news');
    });

    $.backstretch("assets/img/running.png");

    blueimp.Gallery(
        document.getElementById('links').getElementsByTagName('a'),
        {
            container: '#blueimp-gallery-carousel',
            carousel: true
        }
    );
  </script>
</body>
</html>