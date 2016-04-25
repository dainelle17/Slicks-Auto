<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$to       = 'slicksproject@gmail.com';
	$subject  = 'A new contact form has been submitted';
	$message  = 'Name: '.$_POST['name']."\n";
	$message .= 'Email Address: '.$_POST['email']."\n";
	$message .= 'Phone: '.$_POST['phone']."\n";
	$message .= 'Message: '.$_POST['message'];
	$headers = 'From: slickswebsite.com' . "\r\n" .
	    'Reply-To: slickswebsite.com' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	if(mail($to, $subject, $message, $headers)){
		echo '<h3 style="text-align:center;color:white;display:block;margin:20px">Contact form has been submitted</h3><br>';
	}else{
		echo '<h3 style="text-align:center;color:red;display:block;margin:20px">Unable to send contact form</h3><br>';
	}
}
?>






<img  class="twelve columns"  src="<?php bloginfo('url'); echo '/images/contactus-page.png';?>"/>
<div class="twelve columns">
	<div class="twelve columns">
		<form method="POST" class="contact-form twelve columns">
			<div class="four columns space">
				<h3 class="twelve columns"></h3>
			</div>
			<div class="four columns">
				<input type="hidden" name="submit-contact" value="1">
				<input type="text" name="name" placeholder="Full Name" class="twelve columns">
				<input type="email" name="email" placeholder="Email Address" class="twelve columns">
				<input type="text" name="phone" placeholder="Phone Number" class="twelve columns">
				<textarea type="text" class="twelve columns" name="message"></textarea>
				<div class="white-button twelve columns submit-contact-button">SEND</div>
			</div>
			<div class="four columns space">
				<h3 class="twelve columns"></h3>
			</div>

		</form>

	</div>
</div>