<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox" >
    <div class="item active">
      <img src="<?php echo base_url(); ?>assets/images/uno.jpg" alt="..." width="550px" height="100px" >
      <div class="carousel-caption">
        Trato Cordial
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/hotel2.jpg" alt="..." height="700px" width="850px">
      <div class="carousel-caption">
        Visitanos
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/images/hotel1.jpg" alt="..." height="700px" width="850px" >
      <div class="carousel-caption">
        Servicios
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>