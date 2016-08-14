<div class="sidebar-module">
	<h4>follow us</h4>
	<div class="wrap border-mandy">
		<h5>Sports news on social networks</h5>
		<p>Be up-to-date with your fav sports events via Facebook, Twitter & more!</p>
		@include('site.template.social-media')
	</div>
	<div class="wrap bg-gray">
		<h5>Sign up for sports updates!</h5>
		<p>Give us your email and you will be daily updated with latest sports events, in detail!</p>
		<!-- Rd Mailform result field-->
		<div class="rd-mailform-validate"></div>
		<!-- RD Mailform-->
		<form data-result-class="rd-mailform-validate" data-form-type="subscribe" method="post" action="bat/rd-mailform.php" class="rd-mailform subscribe">
			<input type="text" name="email" data-constraints="@NotEmpty @Email" placeholder="Your e-mail">
			<button class="btn btn-primary btn-sm full-width">Subscribe</button>
		</form>
	</div>
</div>