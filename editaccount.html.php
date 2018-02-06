<? include 'templates/header.html'; ?>

<div class ='container text'>
	<div class="row">

		<div class="col-sm">

			<form class="text">

			  <div class="form-group">
				  <label for="InputEmail"> Current Email address</label>
			    <input type="curemail" class="form-control" id="InputEmail"  placeholder="johnsmith@gmail.com">
			  </div>
</div>

<div class="col-sm">
				<div class="form-group">
					<label for="InputEmail"> New Email address</label>
					<input type="newemail" class="form-control" id="InputEmail"  placeholder="newemail@.com">
				</div>
</div>


<div class="col-sm">
				<div class="form-group">
					<label for="InputOldPassword"> Old Password </label>
					<input type="Oldpassword" class="form-control" id="Oldpassword"  placeholder="Old Password">
				</div>
</div>

<div class="col-sm">
				<div class="form-group">
					<label for="InputPassword"> New Password </label>
					<input type="newpassword" class="form-control" id="InputPassword"  placeholder="New Password">
				</div>
</div>

</div>
</div>

<div class="container text">
	<div class="row">
<div class="col-sm">
				<div class="form-group">
					<label for="firstname"> Name </label>
					<input type="newname" class="form-control" id="firstname"  placeholder="John">
				</div>
</div>

<div class="col-sm">
				<div class="form-group">
					<label for="lastname"> Last Name </label>
					<input type="newlastname" class="form-control" id="lastname"  placeholder="Smith">
				</div>
</div>

</div>

<div class="row">
	<div class="col-sm">
		<div class="form-group">
			<label for="address"> Address </label>
			<input type="address" class="form-control" id="address"  placeholder="">
		</div>
	</div>



<div class="col-sm">
<div class="form-group">
	<label for="postcode"> Post Code </label>
	<input type="postcode" class="form-control" id="postcode"  placeholder="">
</div>
</div>
</div>

<div class="row">
<div class="col-sm recentlyadded">
<button type="submit" class="btn bodybutton">Save Changes</button>
</form>
</div>
</div>


</div>

<? include 'templates/footer.html'; ?>
