<?php require("../includes/header.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<div id="contact" class="container-fluid no-padding no-margin">
	<div id="head" class="container-fluid">
		<h1>Contact Us</h1>
		<hr>
		<div class="row">
			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
				<h2>Executive Board Members</h2>
				<div class="list-group">
					<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Brett Oberg" data-whatever="bjoberg@wisc.edu"
					href="#" class="list-group-item">
					<h4 class="list-group-item-heading">President</h4>
					<h5>Brett Oberg</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> bjoberg@wisc.edu</span></p>
					</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Phil Proft" data-whatever="philproft@gmail.com" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Vice President</h4>
					<h5>Phil Proft</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> philproft@gmail.com</span></p>
				</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Jacob Putzier"data-whatever="jputzier@wisc.edu" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Financial Advisor</h4>
					<h5>Jacob Putzier</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> jputzier@wisc.edu</span></p>
				</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Soon Len Teoh" data-whatever="steoh@wisc.edu" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Events Coordinator</h4>
					<h5>Soon Len Teoh</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> steoh@wisc.edu</span></p>
				</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Eric Arndt" data-whatever="etarndt@wisc.edu" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Events Coordinator</h4>
					<h5>Eric Arndt</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> etarndt@wisc.edu</span></p>
				</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Angela Prevetti" data-whatever="prevetti@wisc.edu" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Outreach Committee Chair</h4>
					<h5>Angela Prevetti</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> prevetti@wisc.edu</span></p>
				</a>
				<a type="button" data-toggle="modal" data-target="#emailModal" data-name="Jeremy Rose" data-whatever="jhrose2@wisc.edu" href="#" class="list-group-item">
					<h4 class="list-group-item-heading">Senator</h4>
					<h5>Jeremy Rose</h5>
					<p class="list-group-item-text"><i class="fa fa-envelope"></i> jhrose2@wisc.edu</span></p>
				</a>

			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<h2>General Contact Information</h2>
			<h4>Facebook</h4>
			<i class="fa fa-facebook-square fa-2x" style="color:#3B5998;"></i><a id="colorA" href="#">&nbsp;Association of Information Systems Professionals</a>
			<br>

			<h4>Twitter</h4>
			<i class="fa fa-twitter-square fa-2x" style="color:#4099FF;"></i><a id="colorA" href="#">&nbsp;@AISP</a>
			<br>

			<h4>Email</h4>
			<p><a href="mailto:aisp@rso.wisc.edu"><i class="fa fa-envelope"></i>   aisp@rso.wisc.edu</a></p>
			<h4>Address</h4>
			<a href="#"><i class="fa fa-map-marker"></i>   975 University Ave. Madison, WI 53706</a>

			<div style="opacity:.95; align:right" id="mapConatiner">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2914.514147184445!2d-89.40388078504489!3d43.07268499779241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8807accbbf274a7b%3A0x280e53f563bcca2d!2s975+University+Ave%2C+Madison%2C+WI+53706!5e0!3m2!1sen!2sus!4v1446757392059"
				width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<!-- /container -->

<div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 style="color:black" class="modal-title" id="exampleModalLabel">New message</h4>
			</div>


			<div class="modal-body">
				<form name="sentMessage" id="contactForm" novalidate>
					<div class="form-group">
						<label for="recipient-name" class="control-label">Recipient:</label>
						<input type="text" class="form-control" id="email" placeholder="" disabled formnovalidate>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Full Name:</label>
							<input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Phone Number:</label>
							<input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Email Address:</label>
							<input type="email" class="form-control" id="from" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Message:</label>
							<textarea class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999"></textarea>
						</div>
					</div>
					<div class="modal-footer" id="success"></div>
					<!-- For success/fail messages -->
					<button type="submit" class="btn btn-primary">Send Message</button>
				</form>
			</div>
		</div>
	</div>

	<script>
	$(function(){
		$('#emailModal').on('show.bs.modal', function (event) {
  			var button = $(event.relatedTarget) // Button that triggered the modal
  			var recipient = button.data('whatever')
  			var name = button.data('name')                     // Extract info from data-* attributes
  			// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  			// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  			var modal = $(this)
  			modal.find('.modal-title').text('New message to ' + name)
  			modal.find('.modal-body #email').val(recipient)
		});
	});
	</script>

	<!-- Contact Form JavaScript -->
	<!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
	<script src="./js/jqBootstrapValidation.js"></script>
	<script src="./js/contact_me.js"></script>
</div>
<?php require("../includes/footer.php"); ?>