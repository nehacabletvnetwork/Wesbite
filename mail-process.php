
<?php
if(!empty($_REQUEST['Send'])){
$hostName=$_SERVER['HTTP_HOST']; 
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$message=$_REQUEST['message'];
$subject ="Enquiry from $hostName";
$message ="
<html>
<head>
<title>Mail</title>
</head>
<body>
<p>Enquiry From $hostName</p>
<table>
<tr><td><strong>Name:</strong> $name </td></tr>
<tr><td<strong>Email ID:</strong> $email</td></tr>
<tr><td<strong>Contact No.:</strong> $phone</td></tr>
<tr><td<strong>Message:</strong> $message</td></tr>
</table>
</body>
</html>
";
// Always set content-type when sending HTML email
$to = array('kumarvivek387@gmail.com');
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= "From: $name<$email>"."\r\n";
if(mail (implode(',',$to),$subject,$message,$headers)){
echo "<script type='text/javascript'> document.location = 'success.html'; </script>";
}}
?>