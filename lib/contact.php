<?php
/**
 * contact form for lazymillennial.me
 */

if (isset($_POST['submit'])) {
	$to = 'mikehop@cox.net';
	$subject = '!!!! MIKE SELLS GEORGIA: NEW MESSAGE FROM: ' . $_POST['the_name'] . ' Looking to ' . $_POST['buysell'] .' a home !!!!';
	$message = 'Clients email: ' . $_POST['email'] . "\r\n" . 'Client is looking to: ' . $_POST['buysell'] . "\r\n" . $_POST['the_name'] . ' says: ' . $_POST['textbox'];
	$headers = array (
		'From' => 'kylewebdevmail@gmail.com',
		'Reply-To' => $_POST['email'],
		'X-Mailer' => 'PHP/' . phpversion()
		);

	mail($to, $subject, $message, $headers);
	Header('Location: /index.php?submitted'); 
}
if (isset($_GET['submitted'])) {
	?>
	<script> alert('Submitted! You should hear back from Mike soon!') </script>
<?php } ?>

<div id="contact-form">
	<form action="lib/contact.php" method="POST" />
		<label class="text-light mt-4" for="name"><input type="text" id="name" placeholder="Enter your name" name="the_name" class="textbox" required /></label>
		<br/>
		<label class="text-light mt-3 mb-4" for="email"><input type="email" placeholder="Enter email address" id="email" name="email" class="textbox" required /></label>
		<br/>
		<div class="buysell">
			<span>I'm looking to: &nbsp &nbsp </span>
			<label>Buy </label><input type="radio" id="buy" value="buy" name="buysell" class="ml-2 mr-2" checked />
			<label>Sell<input type="radio" id="sell" value="sell" name="buysell" class="ml-2 mr-2" /></label>
			<label>Rent<input type="radio" id="Rent" value="Rent" name="buysell" class="ml-2" /></label>
		</div>
		<label class="mt-3" for="textbox" required><textarea id="textbox" name="textbox" placeholder="How can I help you?"></textarea></label>
		<br/>
		<button type="submit" name="submit" value="submit" class="btn btn-secondary mt-3">Send to Mike!</button>
	</form>
</div>