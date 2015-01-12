<?php
/**
* 1. Copy this file to ".env.local.php".
* 2. Inside ".env.local.php", set values below according to your local environment.
* 3. Never commit your ".env.local.php" or everyone will hate you :)
*/

return array(
	// See app/config/app.php
	'ENCRYPTION_KEY' => "your_encryption_key",

	// See app/config/database.php
	'DB_HOST' 		=> "your_database_hostname",
	'DB_NAME' 		=> "your_database_name",
	'DB_USER' 		=> "your_database_username",
	'DB_PASSWORD'	=> "your_database_password",

	// See app/config/mail.php
	// If you don't have time to set up mail server in development environment, sign up for Mailgun (mailgun.org), and put it's configuration here
	'MAIL_HOST'			=> "your_email_server_hostname",
	'MAIL_PORT'			=> "your_email_server_port_number (without quotes)",
	'MAIL_USERNAME'		=> "your_email_server_username",
	'MAIL_PASSWORD'		=> "your_email_server_password",
);
?>
