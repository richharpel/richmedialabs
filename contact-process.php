<?php session_start();

if(!$_POST) exit;

	if (!defined("PHP_EOL")) define("PHP_EOL", "\r\n");

///////////////////////////////////////////////////////////////////////////

	// Simple Configuration Options
	
	// Enter the email address that you want to emails to be sent to.
	// Example $from_address = "joe.doe@yourdomain.com";
		 
    $from_address = "rich@richmedialabs.com";
	
	// END OF Simple Configuration Options

///////////////////////////////////////////////////////////////////////////

// Only edit below this line if either instructed to do so by the author or have extensive PHP knowledge.
// Please Note, we cannot support this file package if modifications have been made below this line.
 
	$name     		= $_POST['name'];
    $email    		= $_POST['email'];
    $projecttype	= $_POST['projecttype'];
	$timeframe		= $_POST['timeframe'];
	$budget			= $_POST['budget'];
    $comments 		= $_POST['comments'];
	$verify	  		= $_POST['verify'];
	
	$error = '';

		if(trim($name) == '') {
        	$error .= '<li>Your name is required.</li>';
		}
        
		if(trim($email) == '') {
        	$error .= '<li>Your e-mail address is required.</li>';
	    } elseif(!isEmail($email)) {
        	$error .= '<li>You have entered an invalid e-mail address.</li>';
        }
		
		if(trim($comments) == '') {
        	$error .= '<li>No really, what is on your mind?</li>';
        }
		
		if(trim($verify) <> '4' && trim($verify) <> 'four' && trim($verify) <> 'Four') {
	    	$error .= '<li>The verification answer you entered is incorrect.</li>';
	    }
		
		if($error != '') { 
			echo '<div class="alert alert-warning">';
			echo '<h3>Attention! Please correct the errors below.</h3>';
			echo '<ol>' . $error . '</ol>';
			echo '</div>';
		
		} else {
        
		if(get_magic_quotes_gpc()) { $comments = stripslashes($comments); }

         // Advanced Configuration Option.
         // i.e. The standard subject will appear as, "You've been contacted by John Doe."
		 
         $e_subject = 'Rich Media Labs Contact: ' . $name . '.';

         // Advanced Configuration Option.
		 // You can change this if you feel that you need to.
		 // Developers, you may wish to add more fields to the form, in which case you must be sure to add them here.
					
		 $msg  = "You have been contacted by $name." . PHP_EOL . PHP_EOL;
		 $msg .= "-------------------------------------------------------------------------------------------" . PHP_EOL;
		 $msg .= "Name: $name" . PHP_EOL;
		 $msg .= "Email: $email" . PHP_EOL;
		 $msg .= "Project: $projecttype" . PHP_EOL;
		 $msg .= "Time Frame: $timeframe" . PHP_EOL;
		 $msg .= "Budget: $budget" . PHP_EOL;
		 $msg .= "Comments:" . PHP_EOL;
		 $msg .= "------------------------------------------------" . PHP_EOL;
		 $msg .= "$comments" . PHP_EOL;

		
		$msg = wordwrap( $msg, 70 );
         
        $headers = "From: $email" . PHP_EOL;
		$headers .= "Reply-To: $email" . PHP_EOL;
		$headers .= "MIME-Version: 1.0" . PHP_EOL;
		$headers .= "Content-type: text/plain; charset=utf-8" . PHP_EOL;
		$headers .= "Content-Transfer-Encoding: quoted-printable" . PHP_EOL;

        if(mail($from_address, $e_subject, $msg, $headers)) {
		 
		 echo "<div class='alert alert-success'>";
		 echo "<h3>Your Email Was Sent Successfully</h3>";
		 echo "<p>Thank you <strong>$name</strong>, your message has been submitted. I will get in touch soon.</p>";
		 echo "</div>";
		 		 
		 } else {
		 
		 echo 'ERROR!'; // Dont Edit.
		 
		 }
                      
	}

function isEmail($email) { // Email address verification, do not edit.

return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i",$email));
		
}
?>