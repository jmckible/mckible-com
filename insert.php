<?php 
if($_REQUEST['name'])
{
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$question=$_REQUEST['msg'];
if($question=='MESSAGE')
$question='';


$content = '<table width="75%" border="0" cellpadding="2" cellspacing="0">
			
			<tr>
			<td>Name:</td>
			<td>'.$name.'</td>
			</tr>
			
			<tr>
			<td>Phone:</td>
			<td>'.$phone.'</td>
			</tr>
			
			<tr>
			<td>Email:</td>
			<td>'.$email.'</td>
			</tr>
			
			<tr>
			<td>Message:</td>
			<td>'.$question.'</td>
			</tr>
</table>';
				$subject = "Contact Form :";
				$to = "kuldeep@planetwebsolution.com";
			    $headers  =  "From:".$email."\r\n".'MIME-Version: 1.0' . "\r\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
				if( mail($to, $subject, $content, $headers) )
				  {
				   header("Location:thanks.html");
				  }
}	      			 
?> 