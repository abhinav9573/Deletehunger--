<?php

//Add your information here
$recipient = "info@deletehunger.online";

//Don't edit anything below this line

//import form information
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$name=stripslashes($name);
$email=stripslashes($email);
$subject=stripslashes($subject);
$message=stripslashes($message);

$jobtitle=stripslashes($jobtitle);
$message= " [Contact_DETAILS] \n\n name:$name \n\n email:$email \n\n
subject:$subject \n\n message=$message ";

/*
Simple form validation
check to see if an email and message were entered
*/

//if no message entered and no email entered print an error
if (empty($message) && empty($email)){
print "No email address and no message was entered. <br>Please include an email and a message";
}
//if no message entered send print an error
elseif (empty($message)){
print "No message was entered.<br>Please include a message.<br>";
}
//if no email entered send print an error
elseif (empty($email)){
print "No email address was entered.<br>Please include your email. <br>";
}


//mail the form contents
if(mail("$recipient", "$subject","$message", "From: $email" )) {

	// Email has sent successfully, echo a success page.

	echo '<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f8f9fa;
		color: #333;
		text-align: center;
		padding: 50px;
	}
	h1 {
		font-size: 36px;
		margin-bottom: 10px;
	}
	p {
		font-size: 18px;
		margin-top: 5px;
	}
	a {
		color: #007bff;
		text-decoration: none;
	}
</style>
</head>
<body>
<h1>ThankYou!!!</h1>
<p>Email Sent Successfully! We Will get back to you shortly</p>
<p>Go back to <a href="/">home</a>.</p>
</body>
    
		';

	} else {

	echo 'ERROR!';

	}

