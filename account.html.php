<? include 'templates/header.html'; ?>


<div class="container text">
<div class="row recentlyadded">

							<div class="col-sm">
									<img src="img/head.jpg" alt="John" >
									<h1> John Smith</h1>
							</div>

							<div class="col-sm">
								<button class="btn socialbutton">Add Art</button>
								<button class="btn socialbutton" data-toggle="modal" data-target="#exampleModal">Contact</button>
							</div>

							<div class="col-sm">
								<p> Hey there, Follow me for more content!</p>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-facebook"></i></a>
							</div>

</div>

</div>

<div class="container">

<div class="row text">
	<div class="col recentlyadded">
<p> Recently Added</p>
</div>
</div>

<div class="row recentlyadded">

					<div class="col-sm mb-2">
						<img src="img/pop.jpg">
					</div>

					<div class="col-sm mb-2">
					<img src="img/pop.jpg">
					</div>

					<div class="col-sm mb-2">
					<img src="img/pop.jpg">
					</div>

		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
					<form>

	  <div class="form-group">
	    <label for="exampleFormControlTextarea1">Example textarea</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	  </div>
	</form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>

	<? include 'templates/footer.html'; ?>
