<? include 'templates/header.html'; ?>

		<div class="container">


<div id="carouselIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselIndicators" data-slide-to="1"></li>
    <li data-target="#carouselIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 " href="singleproduct.html" src="gondola.jpg" alt="Artists" style="width: 10rem;">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 background-size:contain;"  href="singleproduct.html" src="flamingoforrest.jpg" alt="Pick of the week">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 "  href="singleproduct.html" src="london.jpg" alt="Recently Added">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="row text recentlyadded ">
	<div class="col-sm mt-4">
	<p> Catergories </p>
</div>
</div>

	<div class="row mt-5 mb-5">

		<div class="col-sm-3">
<div class="card text">
  <img class="card-img-top" src="img/lady.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Scultures</h4>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <a href="personilised.html" class="btn bodybutton"> browse</a>
  </div>
</div>
		</div>

		<div class="col-sm-3">
		<div class="card text">
  <img class="card-img-top" src="img/lampost.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Limited Editions</h4>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <a href="limitededitions.html" class="btn bodybutton">browse</a>
  </div>
</div>
		</div>


		<div class="col-sm-3">
	<div class="card text ">
  <img class="card-img-top" src="img/bench.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title"> Personilised</h4>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <a href="paintings.html" class="btn bodybutton">browse</a>
  </div>
</div>
		</div>

		<div class="col-sm-3">
		<div class="card text">
  <img class="card-img-top" src="img/waves.jpg" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">Paintings</h4>
    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
    <a href="sculptures.html" class="btn bodybutton">browse</a>
  </div>
</div>
		</div>

		</div>



	</div>


  <? include 'templates/footer.html'; ?>
