<!doctype html>
<!--

	From the team that brought you JSCamp.Asia 2012 and JSConf.Asia 2013.
	More info is on its way. Spread the word. Follow us on Twitter @cssconfasia

	If you want to help us out, drop thomas@cssconf.asia an email! ;)

//-->
<html lang="en" xmlns="http://www.w3.org/1999/xhtml"
      xmlns:og="http://ogp.me/ns#"
      xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<meta charset="UTF-8">
	<title>CSSConf.Asia Singapore 2014</title>
	<link href='http://fonts.googleapis.com/css?family=Doppio+One|Open+Sans|Sanchez|Great+Vibes' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/app.css" />
	<link rel="shortcut icon" href="favicon.png" >
	<?php if(!strpos($_SERVER['HTTP_USER_AGENT'],'iPad')) { ?>
	<meta name="viewport" content="width=500, user-scalable=no" />
	<?php } ?>
	<meta property="og:title" content="CSSConf.Asia Singapore 2014"/>
	<meta property="og:type" content="website"/>
	<meta property="og:url" content="http://cssconf.asia/"/>
	<meta property="og:image" content="http://cssconf.asia/assets/og_cssconfasia.jpg"/>
	<meta property="og:site_name" content="CSSConf.Asia"/>
	<meta property="og:description" content="Bridging web design and implementation. 19th Nov 2014, Amara Sanctuary, Sentosa, Singapore. Follow us on Twitter @cssconfasia"/>
	<meta name="title" content="JSConf.Asia Singapore 2014"/>
	<meta name="description" content="Bridging web design and implementation. 19th Nov 2014, Amara Sanctuary, Sentosa, Singapore. Follow us on Twitter @cssconfasia"/>
</head>
<body class="loading">
	<section id="background"></section>
	<section id="beams" style="opacity: 0;">
		<div id="beam1"><div class="beam">
		</div></div>
		<div id="beam2"><div class="beam">
		</div></div>
		<div id="beam3"><div class="beam">
		</div></div>
		<div id="beam4"><div class="beam">
		</div></div>
	</section>
	<section id="intro">
	<form id="subscribeForm" action="http://2014.cssconf.asia/addsubscriber.php" method="get">
		<div class="logo" style="opacity: 0;"><a href="http://facebook.com/cssconfasia"><img src="img/cssconfasia.png" alt="CSSConf.Asia 2014 Singapore" /></a></div>
		<div class="input"><span><input type="email" name="email" placeholder="E-Mail Address" autofocus /><input type="submit" value="Send" /></span></div>
		<div class="msg"><span></span></div>
		<div class="menu">
			<a href="http://twitter.com/cssconfasia">Get Updates</a> &nbsp; &#x2605; &nbsp;
			<a href="https://jsconfasia.wufoo.com/forms/cssconf-and-jsconfasia/">Call for Speakers</a> &nbsp; &#x2605; &nbsp;
			<a href="mailto:sponsor@jsconf.asia">Sponsorship</a>
		</div>
	</form>
	</section>
	<footer>
		<p class="desc">
			Bridging web design<br/>and implementation
		</p>
		<p class="date">
			<a href="http://sentosa.amarahotels.com/">Amara Sanctuary, Sentosa, Singapore</a><br/>
			19th November 2014
		</p>
		<p>
			CSSConf.Asia 2014 Singapore is part of<br/>Asia's most influential web developer festival.<br/><br/>
			A Nerdherd Pte. Ltd. event<br/>
			<a class="terms" href="terms.html">Terms &amp; Conditions</a><br/><br/>
		</p>
	</footer>

    <script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.3.js"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="js/jquery.min.js">\x3C/script>')</script>
	<script type="text/javascript" src="js/jquery.form.min.js"></script>
	<script src="js/app.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-31025490-5', 'cssconf.asia');
	  ga('send', 'pageview');

	</script>
</body>
</html>
