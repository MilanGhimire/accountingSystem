<?php
$title = 'Home';
$active = 'home';
$path = '';
include_once 'assets/layouts/header.php';
?>
<!-- Navigation Bar Ends-->

<div class="container">
  <div id="myCarousel" class="carousel slide" style="height: 450px; margin-bottom: 50px;" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="height: 100%">
      <div class="item active">
        <img src="assets/image/SERVICES.jpg" alt="" style="width:100%; height: 100%;"/>
      </div>

      <div class="item">
        <img src="assets/image/banner-inside-a.jpg" alt="" style="width:100%; height: 100%;"/>
      </div>
    
      <div class="item">
        <img src="assets/image/bookkeeping-certificate-kirtland.jpg" alt="" style="width:100%; height: 100%;"/>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<?php include_once 'assets/layouts/footer.php'; ?>
</body>
<script type="text/javascript">
    $(document).ready(function () {
        //console.log("hello world");
    })
</script>
</html>

