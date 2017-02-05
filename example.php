<?php
/** 
 * Validate Email Addresses Via SMTP 
 * This queries the SMTP server to see if the email address is accepted. 
 * @copyright http://naitiksakhiya.in - Please keep this comment intact 
 * @author contact@naitiksakhiya.in
 * @version 0.1
 */  
require_once("smtpvalidateclass.php");
$emails = array("example1@abc.com","example2@abc.com","example3@abc.com");  
$SMTPValidateEmail = new SMTPValidateEmail();  
// do the validation
for($i=0;$i<count($emails);$i++){  
	$result = $SMTPValidateEmail->validate(array($emails[$i]));
	if($result){
		if($result[$emails[$i]]!="" && $result[$emails[$i]]!=0){
			// valid Email
		}else{
			// Invalid Email
		}
	}
	var_dump($result); 			
	echo $email.' is '.($result ? 'valid' : 'invalid')."\n";   
	// send email?   
	if ($result) {  
	  //mail(...);  
	}
} 

?>  
