<?php
/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */


$to         = "enquiries@source4networks.org.uk;gary@barclay.works";
$subject    = "Feedback from S4N site";
$_POST  	= filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
$message    = $_POST['feedback'];

if(mail($to,$subject,$message))
{
	echo "Message Sent";
}
else
{
	echo "Message Not Sent";
}