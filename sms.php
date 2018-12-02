<?php



	
	include ( "NexmoMessage.php" );
	include ( "regiss.php" );
    echo $mobile = $_POST['mobile']; 

	/**
	 * To send a text message.
	 *
	 */

	// Step 1: Declare new NexmoMessage.
	$nexmo_sms = new NexmoMessage('b58445ed', 'HMECAa86rqIMmOn6');

	// Step 2: Use sendText( $to, $from, $message ) method to send a message. 
	$info = $nexmo_sms->sendText( '94$mobile', 'udskuhfkuds', 'nghgjgjgjjhgjhhjfj!' );

	// Step 3: Display an overview of the message
	echo $nexmo_sms->displayOverview($info);

	// Done!

?>