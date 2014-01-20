<!DOCTYPE html>

<html>
	<head>
		<title> Contact Me! </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="author" content="Amish Patel">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
		<link href='http://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Simonetta:400,900|Balthazar">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="responsive.css">
	</head>
	
	<body>
		<div id="fb-root"></div>
<script>window.fbAsyncInit = function() {
    FB.init({
        appId: '232894623452511',
        status: true,
        cookie: true,
        xfbml: true,
        oauth: true,
    });
};
(function(d) {
    var js, id = 'facebook-jssdk';
    if (d.getElementById(id)) {
        return;
    }
    js = d.createElement('script');
    js.id = id;
    js.async = true;
    js.src = "//connect.facebook.net/en_US/all.js";
    d.getElementsByTagName('head')[0].appendChild(js);
}(document));</script>

		<header class="mainHeader">
			<nav>
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="index.html">Resume</a></li>
					<li><a href="aboutme.html">About me</a></li>
					<li class="active"><a href="contactme.php">Contact Me</a></li>
				</ul>
			</nav>
		</header>

		<h1>My Facebook!</h1>
		<!-- Facebook Badge START --><a href="https://www.facebook.com/amishp3" target="_TOP" style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; font-variant: normal; font-style: normal; font-weight: normal; color: #3B5998; text-decoration: none;" title="Amish Patel">Amish Patel</a><span style="font-family: &quot;lucida grande&quot;,tahoma,verdana,arial,sans-serif; font-size: 11px; line-height: 16px; font-variant: normal; font-style: normal; font-weight: normal; color: #555555; text-decoration: none;">&nbsp;|&nbsp;</span><br/><a href="https://www.facebook.com/amishp3" target="_TOP" title="Amish Patel"><img src="https://badge.facebook.com/badge/548207039.4863.1650762113.png" style="border: 0px;" /></a><!-- Facebook Badge END -->
		

		<a href="https://www.facebook.com/amishp3" target="_blank"><img src="http://static.viewbook.com/images/social_icons/facebook_32.png"/></a>

		<a href="http://www.linkedin.com/pub/amish-patel/64/8a3/a55"><img src="http://static.viewbook.com/images/social_icons/linkedin_32.png"></a>

		<br />

		<form method="post" action="email_script.php">

			<p>
				<label for="name">What is your name?<br>
					<input type="text" name="name" id="name" size="25" maxlength="50">
				</label>
			</p>

			<p>
				<label for="email">What is your e-mail address?<br>
					<input type="text" name="email" id="email" size="35" maxlength="60">
				</label>
			</p>

			<p>
				<label for="message">What is your message?<br>
					<textarea input type="text" name="message" id="message" cols="60" rows="8" maxlength="5000"></textarea>
				</label>
			</p>

			<input type="submit" value="Send Comments">


		</form>


	</body>
</html>