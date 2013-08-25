<html lang="en">
<head>
    <title>Race for Rescue</title>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/application.css" />
    <link  href="http://fotorama.s3.amazonaws.com/4.3.0/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
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
        <a class="navbar-brand" href="index.php">Race For Rescue</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="divider"></li>
          <li><a id="about" href="index.php#about">About</a></li>
          <li><a id="howPlay" href="index.php#howPlay">How to Play</a></li>
          <li><a id="sponsors" href="index.php#sponsors">Sponsors</a></li>  
          <li><a id="howSponsor" href="index.php#howSponsor">How to Sponsor</a></li>          
          <li><a id="news" href="index.php#news">In the News</a></li>
          <li><a href="photos.php">Photos</a></li>
          <li><a href="#contact" role="button" data-toggle="modal">Contact</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="http://www.facebook.com/RaceForRescue?fref=ts" target="_blank"><i class="icon-facebook-sign"></i> Facebook</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Contact Race for Rescue</h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" name="contactForm" method="post" action="includes/emailForm.php">

          <!-- Text input-->
          <div class="control-group">
          <label class="control-label" for="Email">Email:</label>
          <div class="controls">
          <input id="email" name="email" type="text" placeholder="" class="input-large">
          </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
          <label class="control-label" for="name">Name:</label>
          <div class="controls">
          <input id="name" name="name" type="text" placeholder="" class="input-large">

          </div>
          </div>

          <!-- Text input-->
          <div class="control-group">
          <label class="control-label" for="phoneNumber">Phone Number:</label>
          <div class="controls">
          <input id="phoneNumber" name="phoneNumber" type="text" placeholder="" class="input-large">

          </div>
          </div>

          <!-- Textarea -->
          <div class="control-group">
          <label class="control-label" for="comment">Comment/Question</label>
          <div class="controls"> 
          <textarea id="comment" name="comment"></textarea>
          </div>
          </div>
          <div class="modal-footer">
          <input type="submit" value="Submit" class="btn btn-primary">
          </div>
          </form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->