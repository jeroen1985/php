<?

$post = (isset($_POST))?$_POST:'';

if($post){
	$name= (isset($post['name']))?$post['name']:'';
	$cname= (isset($post['cname']))?$post['cname']:'';
	$email= (isset($post['email']))?$post['email']:'';
	$number= (isset($post['number']))?$post['number']:'';
	$message= (isset($post['message']))?$post['message']:'';
	// server side validation

	if (preg_match("/^[a-zA-Z0-9.!#$%&'*+?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)+$/",$email) && preg_match("/^([0-9\-\+\(\) ]+)$/",$number) && !$name=='' && !$number=='' && !$message=='') {

	$subject="Stevenstechnologies.ca - ".$name;  	
  	$emessage="";
  	$emessage.="Name:".$name."|";	
  	$emessage.="Company name:".$cname."|";
  	$emessage.="Email:".$email."|";
  	$emessage.="Phone number:".$number."|";
  	$emessage.="Message:".$message."|";
  	$emsg = wordwrap($emessage,70);
  	$from = "From: ".$email."\n";
	}else{

	$subject="Stevenstechnologies.ca - INVALID:".$name;  	
 	$emsg="Invalid use of form by".$email;	
 	$from = "From: ".$email."\n";
	}

// mailto script
$result = mail("**********@********.**",$subject,$emsg,$from);

}

?>
 <div class="col-a">
 	<table class="contact-form">
<?
if ($result){ 
?>
<p style="font-size:1.4em">Thank you for your message. We will reply as soon as possible.</p>
<?
}else{
?> 
		<form id="contactForm" action="/contact" method="post">
			<tr><td><label for="name">Name (*):</label></td><td><input type="text" name="name" id="contact_name" maxlength="128"  /><span class="error"> This field is required</span></td></tr>
			<tr><td><lable for="cname">Company name:</label></td><td><input type="text" name="cname" id="contact_cname" maxlength="128"/><span class="error"> This field is required</span></td></tr>
			<tr><td>Email (*): </td><td><input type="text" name="email" id="contact_email" maxlength="256" placeholder=" e.g. info@stevenstechnologies.ca"/><span class="error"> A valid email address is required</span></td></tr>
			<tr><td>Phone number (*): </td><td><input type="text" name="number" id="contact_number" maxlength="32" placeholder=" e.g. (778) 238 1180"/><span class="error">A valid phone number is required</span></td></tr>
			<tr><td>Message (*): </td><td><textarea name="message" id="contact_message" maxlength="2048"></textarea><span class="error"><br>This field is required</br></span></td></tr>
		 	<tr><td></td><td><div id="contact_submit"><button type="submit">Submit</button></div></td></tr>
		 	<tr><td>* Required</td><td></td></tr>
		 </form>
<?
}
?>

	</table>
 </div>
 <div class="col-b divider2">
 	<div class="services">
		<p class="heading"><b>front-end development</b></p>
		<p class="icon"><img src="images/front_end_development.png" /></p>
	</div>
	 <div class="services">
		<p class="heading"><b>back-end development</b></p>
		<p class="icon"><img src="images/back_end_development.png" /></p>
	</div>
	 <div class="services">
		<p class="heading"><b>web consulting </b></p>
		<p class="icon"><img src="images/web_consulting.png" /></p>
	</div>
 </div>
