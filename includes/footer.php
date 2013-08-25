</body>
<!-- Bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>

<!-- Backstretch -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
<script>
    function scrollToAnchor(aid){
    var aTag = $("div[name='"+ aid +"']");
      $('html,body').animate({scrollTop: aTag.offset().top - 25},'slow');
    }

    $("#about").click(function() {
       scrollToAnchor('about');
    });

    $("#howPlay").click(function() {
       scrollToAnchor('howPlay');
    });

    $("#sponsors").click(function() {
       scrollToAnchor('sponsors');
    });

    $("#howSponsor").click(function() {
       scrollToAnchor('howSponsor');
    });

    $("#news").click(function() {
       scrollToAnchor('news');
    });

  	$.backstretch("assets/img/running.png");
  </script>
</html>