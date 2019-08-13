<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>About-Sun Weddings Portugal</title>
	<meta name="description" content="Wedding planning is our business and we've got a load of experience at it. If you want a professional Irish businesswoman, I'm here for you :) ">
	<!-- From CSS-tricks -->
	<!-- facebook and Twitter-->
	<meta property="og:title" content="About Sun Weddings Portugal">
	<meta property="og:description" content=Wedding planning is our business and we have got a load of experience at it. If you want a professional Irish businesswoman, I am here for you :)">
	<meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
	<meta property="og:url" content="http://euro-travel-example.com/index.htm">
	<meta property="og:type" content="website">
	<meta name="twitter:card" content="summary_large_image">
	<!-- Reconciling the guidelines for the image is simple: follow Facebook's recommendation of a minimum dimension of 1200x630 pixels and an aspect ratio of 1.91:1, but adhere to Twitter's file size requirement of less than 1MB.  -->
	
	<!-- favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="icons/site.webmanifest">
	
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>


<body>
	<header class="banner">
		<p class="top-text">Algarve's Elite  Event &amp; Wedding Planners</p>
	
		<div class="tile_and_menu">
		<p class="title">
			SUN WEDDINGS PORTUGAL
		</p>
	

<div class="menu">
	
<!-- menu from css-tricks-->

<nav>
  <a href="index.php">Home</a>
  <a href="about.php">About</a>
  <a href="services.php">Services</a>
  <a href="venues.php">Venues</a>
  <a href="blog.php">Blog</a>
  <a href="contact.php">Contact</a>
</nav>
</div></div>
</header>		
	
{}
<?php
	
	
	
	
<!-- php formscript __>	
// OPTIONS - PLEASE CONFIGURE THESE BEFORE USE!

$yourEmail = "petethepilot69@gmail.com"; // the email address you wish to receive these mails through
$yourWebsite = "sunweddingsportugal.algarvecamera.com"; // the name of your website
$thanksPage = 'sunweddingsportugal.algarvecamera.com/thanks.php'; // URL to 'thanks for sending mail' page; leave empty to keep message on the same page 
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4
$requiredFields = "name,email,enquiry"; // names of the fields you'd like to be required as a minimum, separate each field with a comma


// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

function clean($data) {
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}
function isBot() {
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
		if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
			return true;

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
		return true;
	
	return false;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	if (isBot() !== false)
		$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];
		
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score.. 
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)
	$points = (int)0;
	
	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
		if (
			strpos(strtolower($_POST['comments']), $word) !== false || 
			strpos(strtolower($_POST['name']), $word) !== false
		)
			$points += 2;
	
	if (strpos($_POST['comments'], "http://") !== false || strpos($_POST['comments'], "www.") !== false)
		$points += 2;
	if (isset($_POST['nojs']))
		$points += 1;
	if (preg_match("/(<.*>)/i", $_POST['comments']))
		$points += 2;
	if (strlen($_POST['name']) < 3)
		$points += 1;
	if (strlen($_POST['comments']) < 15 || strlen($_POST['comments']) > 1500)
		$points += 2;
	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $_POST['comments']))
		$points += 1;
	// end score assignments

	if ( !empty( $requiredFields ) ) {
		foreach($requiredFields as $field) {
			trim($_POST[$field]);
			
			if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
				$error_msg[] = "Please fill in all the required fields and submit again.";
		}
	}

	if (!empty($_POST['name']) && !preg_match("/^[a-zA-Z-'\s]*$/", stripslashes($_POST['name'])))
		$error_msg[] = "The name field must not contain special characters.\r\n";
	if (!empty($_POST['email']) && !preg_match('/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i', strtolower($_POST['email'])))
		$error_msg[] = "That is not a valid e-mail address.\r\n";
	if (!empty($_POST['url']) && !preg_match('/^(http|https):\/\/(([A-Z0-9][A-Z0-9_-]*)(\.[A-Z0-9][A-Z0-9_-]*)+)(:(\d+))?\/?/i', $_POST['url']))
		$error_msg[] = "Invalid website url.\r\n";
	
	if ($error_msg == NULL && $points <= $maxPoints) {
		$subject = "Automatic Form Email";
		
		$message = "You received this e-mail message through your website: \n\n";
		foreach ($_POST as $key => $val) {
			if (is_array($val)) {
				foreach ($val as $subval) {
					$message .= ucwords($key) . ": " . clean($subval) . "\r\n";
				}
			} else {
				$message .= ucwords($key) . ": " . clean($val) . "\r\n";
			}
		}
		$message .= "\r\n";
		$message .= 'IP: '.$_SERVER['REMOTE_ADDR']."\r\n";
		$message .= 'Browser: '.$_SERVER['HTTP_USER_AGENT']."\r\n";
		$message .= 'Points: '.$points;

		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win")) {
			$headers   = "From: $yourEmail\r\n";
		} else {
			$headers   = "From: $yourWebsite <$yourEmail>\r\n";	
		}
		$headers  .= "Reply-To: {$_POST['email']}\r\n";

		if (mail($yourEmail,$subject,$message,$headers)) {
			if (!empty($thanksPage)) {
				header("Location: $thanksPage");
				exit;
			} else {
				$result = 'Your mail was successfully sent.';
				$disable = true;
			}
		} else {
			$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';
		}
	} else {
		if (empty($error_msg))
			$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';
	}
}
function get_data($var) {
	if (isset($_POST[$var]))
		echo htmlspecialchars($_POST[$var]);
}
<!-- end of php form scipt -  >
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>My Email Form</title>
	
	<style type="text/css">
		p.error, p.success {
			font-weight: bold;
			padding: 10px;
			border: 1px solid;
		}
		p.error {
			background: #ffc0c0;
			color: #900;
		}
		p.success {
			background: #b3ff69;
			color: #4fa000;
		}
	</style>
</head>
<body>

<!--
	Free PHP Mail Form v2.4.5 - Secure single-page PHP mail form for your website
	Copyright (c) Jem Turner 2007-2017
	http://jemsmailform.com/

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	To read the GNU General Public License, see http://www.gnu.org/licenses/.
-->

<?php
if (!empty($error_msg)) {
	echo '<p class="error">ERROR: '. implode("<br />", $error_msg) . "</p>";
}
if ($result != NULL) {
	echo '<p class="success">'. $result . "</p>";
}
?>

<!-- From CodePen -->
<!end of Code Pen -->

<div class="submission-form">
<form action="<?php echo basename(__FILE__); ?>" method="post">
<noscript>
		<p><input type="hidden" name="nojs" id="nojs" /></p>
</noscript>
<p>
	<label for="name">Name: *</label> 
		<input type="text" name="name" id="name" value="<?php get_data("name"); ?>" /><br />
	
	<label for="email">E-mail: *</label> 
		<input type="text" name="email" id="email" value="<?php get_data("email"); ?>" /><br />
	
<!--	<label for="url">Website URL:</label> 
		<input type="text" name="url" id="url" value="<?php get_data("url"); ?>" /><br />
		
	<label for="location">Location:</label>
		<input type="text" name="location" id="location" value="<?php get_data("location"); ?>" /><br />
-->	
	<label for="comments">Your enquiry: *</label>
		<textarea name="comments" id="comments" rows="5" cols="50"><?php get_data("comments"); ?></textarea><br />
</p>
<p>
	<input type="submit" name="submit" id="submit" value="Send" <?php if (isset($disable) && $disable === true) echo ' disabled="disabled"'; ?> />
</p>
</form>

<p class="credit">This form is totaly secure and powered by <a href="http://jemsmailform.com/">Jem's PHP Mail Form</a></p>

</div>
</body>
</html>