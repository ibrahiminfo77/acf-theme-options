<?php 
	$email = get_field('email', 'option');
	if($email) : ?>

		<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
		
<?php endif; ?>