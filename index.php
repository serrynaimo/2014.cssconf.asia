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
	    <div>
    	    <div class="logo" style="opacity: 0;"><a href="http://twitter.com/cssconfasia"><img src="img/cssconfasia.png" alt="CSSConf.Asia 2014 Singapore" /></a></div>
    	    <p>
    		<a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
    			Get your ticket
    			<span>1 day - S$280</span>
    		</a>
    	    </p>
    		<div class="menu">
    			<a href="#schedule">Schedule</a> &nbsp; &#x2605; &nbsp;
                <a href="#about">About</a> &nbsp; &#x2605; &nbsp;
    			<a href="#sponsors">Sponsors</a> &nbsp; &#x2605; &nbsp;
    			<a href="http://facebook.com/cssconfasia">Get Updates</a>
    		</div>
	    </div>
	</section>
	<section id="body">
		<section id="info">
		<p class="desc">
			Bridging web design<br/>and implementation
		</p>
		<p class="date">
			<a href="http://sentosa.amarahotels.com/">Amara Sanctuary, Sentosa, Singapore</a><br/>
			19th November 2014
		</p>
		<p>

			sponsored by<br/>
			<a href="http://www.pocketmath.com" target="_blank"><img src="img/sponsors/pocketmath.svg"  height="40" /></a>
		</p>
		</section>
        <a name="schedule"></a>
		<section id="speakers">
			<h2>Schedule</h2>
			<p>
				We’re very proud to have some of the finest CSS developers sharing their stories and experiences. <a href="http://twitter.com/cssconfasia">Follow us on Twitter</a> for regular updates around the event and CSS.
			</p>
		    <div class="column">
    			<div class="speaker dot">
    				<span>9 AM</span>
    				<h4>Thomas Gorissen <a href="https://twitter.com/serrynaimo" target="_blank">@serrynaimo</a></h4>
    				<h3>transition: all 15m ease-in</h3>
    				<p></p><p></p>
    			</div>
    			<div class="speaker">
    				<span>9:15 AM</span>
    				<img src="img/speakers/karolina.jpg" />
    				<h4>Karolina Szczur <a href="https://twitter.com/fox" target="_blank">@fox</a></h4>
    				<h3>No More Tools</h3>
    				<p>
    					As creatives we constantly search for ways to optimise and streamline workflows. Currently we’re being bombarded with more tools than ever. But how do we know that we reached a tipping point, when the apparatus we pick introduces more complexity and wastes way more time that it was supposed to save? As craftspeople, how do we maintain simplicity and learn to rely on bare-bones solutions?

    					We’ll have a look at up-to-date front-end tooling and analyse alternative approaches to compiling, building and automation processes.
    				</p>
    				<p>
    					Karolina is a designer, developer, photographer and wannabe writer working with her friends at &amp;yet.
    					She’s an editor at Smashing Magazine and Open Source fan. She owns a cat and an excessive amount of books on typography.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>9:45 AM</span>
    				<img src="img/speakers/mathias.jpg" />
    				<h4>Mathias Bynens <a href="https://twitter.com/mathias" target="_blank">@mathias</a></h4>
    				<h3>3.14 things I didn’t know about CSS</h3>
    				<p>
    					This talk will showcase a series of obscure CSS fun facts, such as CSS syntax gimmicks and quirks, weird tricks that involve CSS in one way or another, and security vulnerabilities that are enabled by (ab)using CSS in unexpected ways.
    				</p>
    				<p>
    					Mathias is a Belgian web standards freak. He likes HTML, CSS, JavaScript, Unicode, performance,
    					and security. At Opera Software he’s a member of the Developer Relations team.
    				</p>
    			</div>
    			<div class="speaker break">
    				<span>10:30 AM</span>
    				<h3>Morning Snack</h3>
    			</div>
    			<div class="speaker">
    				<span>11:15 AM</span>
    				<img src="img/speakers/ryan.jpg" />
    				<h4>Ryan Seddon <a href="https://twitter.com/ryanseddon" target="_blank">@ryanseddon</a></h4>
    				<h3>Performant UIs using CSS magic</h3>
    				<p>
    					Performance doesn’t end with making our sites load fast it’s also crucial in improving perceived speed and creating delight with silky smooth animations that creates beautiful UX for our websites and web apps.<br/>
                        In this talk we’ll explore how you can identify and improve performance using the various dev tools as well as techniques used to make sure animations run at the golden standard of 60fps.
    				</p>
    				<p>
    					Ryan is a Tech Lead at Zendesk. Hailing from Melbourne Australia, he has an unnatural obsession with CSS,
    					JavaScript and the many places it runs. In his spare time he’s either hiking, writing for his blog
    					thecssninja.com or committing code to github.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>11:45 AM</span>
    				<img src="img/speakers/christian.jpg" />
    				<h4>Christian Lilley <a href="https://twitter.com/xmlilley" target="_blank">@xmlilley</a></h4>
    				<h3>Build Scalable, Automated CSS Both You and Your ’Back-End’ Coders Can Love</h3>
    				<p>
    					Why don’t ’back-end’ coders get CSS?!? They call it an ’anti-language full of black magic’, and post GIFs making fun of our craft. Let’s kill two birds with one stone: learn how to evangelize CSS to them, and to make our CSS-Foo better and stronger by understanding both what makes them crazy, and what they bring to the table in terms of building scalable, maintainable applications.
    					<br/>
    					We’ll take the bad with the good: purge from your own repertoire the habits (like over-use of floats) that never should have caught on. And acquire new habits (like naming conventions and preprocessors) that make your own code vastly more readable and maintainable. Finally, we’ll look at how automation with life-changing tools like Node, Grunt and Compass can not only grant you new super-powers, but also make your whole working style vastly more familiar to  the server-side guys. By the end of our talk, you’ll be on a path to enlightenment, and the gear-heads down the hall will look at you in a whole new light.
    				</p>
    				<p>
    					Christian is a UI Architect at McKinsey Digital Labs and turns theoretical
    					business-y stuff into real useful blinky-lights.
    					He digs rapid-prototyping with AngularJS, agile
    					and co-founded the Data Visualization NY meetup. Now he lives in KL, whishing there was
    					better GeoViz to find the best hawker stalls.
    				</p>
    			</div>
    			<div class="speaker break">
    				<span>12:30 PM</span>
    				<h3>Buffet Lunch<br/><br/></h3>
    			</div>
			</div>
            <div class="column">
    			<div class="speaker">
    				<span>1:45 PM</span>
    				<img src="img/speakers/fiona.jpg" />
    				<h4>Fiona Tay <a href="https://twitter.com/MsFionaTay" target="_blank">@msfionatay</a></h4>
    				<h3>Inside the Airbnb brand evolution</h3>
    				<p>
    					You siao ah?! That was my reaction when the Airbnb marketing team told me in January that my team of three would be redesigning the entire airbnb.com site in just six months. I didn’t know how we could rewrite thousands of lines of HTML, written over six years by many different developers, while the rest of the engineering team continued to develop new features.
    					<br/>
    					In this talk, I’ll share how we created and rolled out a new CSS framework based on Object-Oriented CSS principles to launch a fresh new look while keeping our sanity!
    				</p>
    				<p>
    					Fiona is an engineer on the Core Web team at Airbnb, where she builds
    					tooling for the web platform. She has previously worked on rolling out
    					an internal OOCSS framework across airbnb.com, scaling email
    					infrastructure, and making airbnb.com mobile friendly. She likes
    					design, testing and biking.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>2:15 PM</span>
    				<img src="img/speakers/joshua.jpg" />
    				<h4>Joshua Koo <a href="https://twitter.com/blurspline" target="_blank">@blurspline</a></h4>
    				<h3>Cascading Perspectives with THREE.CSS3DRenderer</h3>
    				<p>
    					One of the interesting ways to create 3-dimensional content in browsers is by CSS 3D transforms.
    					While three.js has been popularly known as the javascript library for webgl,
    					its modular design supports rendering with 3D transforms using CSS and that has been nothing short of disappointing.
    					This talk takes you through the history, the workings, the possibilities and the creativity (and possibly the future) of three.js and the CSS3DRenderer.
    				</p>
    				<p>
    					Joshua is random. Codes. Cycles. Climbs. Cold jokes. Organizes creative coding meetups.
    					He uses .random() frequently in code and experiments on random ideas in his free time.
    					At random moments, he gains inspiration to share and open source his works. He’s from
    					Singapore and is employee #12 of Zopim (now Zendesk) where he leads the integration team.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>2:45 PM</span>
    				<img src="img/speakers/ricostacruz.jpg" />
    				<h4>Rico Sta. Cruz <a href="https://twitter.com/ricostacruz" target="_blank">@ricostacruz</a></h4>
    				<h3>Building a modern mobile web UI</h3>
    				<p>
    					Adapting to new screen sizes doesn’t need to be hard. We’ll explore how to use modern CSS to build clean, responsive mobile app interfaces with flexbox.
    				</p>
    				<p>
    					Rico is a Ruby/JS developer and CSS afficionado from the Philippines whose passion lies in building
    					great web applications and slick user interfaces. He is the co-founder of a small web development
    					team in Manila called Nadarei, a coding book author and maintains plenty of open-source projects.
    				</p>
    			</div>
    			<div class="speaker break">
    				<span>3:15 PM</span>
    				<h3>Afternoon Snack</h3>
    			</div>
    			<div class="speaker">
    				<span>4 PM</span>
    				<img src="img/speakers/kushagra.jpg" />
    				<h4>Kushagra Gour <a href="https://twitter.com/chinchang457" target="_blank">@chinchang457</a></h4>
    				<h3>10 Commandments for efficient CSS architecture</h3>
    				<p>
    					CSS is a very funny language. That is something we all have realised at some point or the other while working with it. If not used correctly, a language used to make things look good can itself start looking bad and we can end up with CSS that is hard to manage and extend. My talk will be about 10 things which I have learnt from experience can make one’s CSS manageable and easy to extend, specially in large scale applications. Plus there is a fun CSS game for everyone to play along during the talk! Lets have fun with CSS together.
    				</p>
    				<p>
    					Kushagra is a front-end developer on VWO, a Wingify product, a CSS freak and author of Hint.css. He likes to create things that use existing concepts in new ways. Also sometimes called as the PJ king (beware!), he likes to beatbox and doodle sketches in spare time.
    				</p>
    			</div>
    			<div class="speaker">
    				<span>4:30 PM</span>
    				<img src="img/speakers/benschwarz.jpg" />
    				<h4>Ben Schwarz <a href="https://twitter.com/benschwarz" target="_blank">@benschwarz</a></h4>
    				<h3>What are we doing, anyway?</h3>
    				<p>
    					A ten year story. Following the path of least resistance for your career is the most comfortable and absolutely the easiest to explain to your parents. But, If we don’t do that... What exactly the hell are we doing?
    				</p>
    				<p>
    					Ben is an independent web dude from Melbourne. He’s 1/5th of CSSConfAU, a percentage of JSConf
    					(We all know how good JavaScript is at numbers), a bower team member and a swag of other stupid projects.
    				</p>
    			</div>
    			<div class="speaker break">
    				<span>5:30 PM</span>
    				<h3>Developer Island<br/>After-Party with Redmart</h3>
    			</div>
            </div>
			<a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
				Get your ticket
				<span>1 day - S$280</span>
			</a>
		</section>
        <section id="about">
            <h2>About</h2>
            <p>
            <i>CSSConf is where design meets developers to inspire, educate and entertain around building the world’s most engaging user interfaces.</i>
            </p>
            <h3>We haz the Speakers, the Wifis, the foods, the parties...</h3>
            <p>
            ...or what we consider the essentials for a great event. You just learn so much better when you’re happy and connected.
            </p>
            <p>
            <a href="http://www.jimmymonkey.com/" target="_blank"><img src="img/jimmy.png" style="float: right; margin: 0 -25px 0 20px;"height="138" /></a>
            Jimmy Monkey will be there for 8 hours of non-stop coffee brewing and pulling shots. They craft maybe the most sophisticated espresso based coffees in all of Singapore and will be running our café. But don’t worry: It’s not that the conference content will be tiring... ;-)
            </p>
            <h3>It’s for you!</h3>
            <p>
            Together with <a href="http://2014.jsconf.asia">JSConf</a>, we want to make community events that bring Southeast-Asia’s best web designers together in a playful and informal environment. It’s gonna be a great setting for learning and exchange and we can’t wait to see you there!
            </p>
            <p align="right">
                <a href="https://twitter.com/serrynaimo" target="_blank"><img src="img/thomas.png" alt="Thomas" height="40" /></a> &nbsp; &nbsp; &nbsp; &nbsp;
                <a href="https://twitter.com/thedesignnomad" target="_blank"><img src="img/melissa.png" alt="Melissa" height="37" valign="top" /></a> &nbsp; &nbsp;
                <a href="https://twitter.com/ramanshalupau" target="_blank"><img src="img/raman.png" alt="Raman" height="35" valign="top" /></a>
            </p>
            <form id="subscribeForm" action="http://2014.cssconf.asia/addsubscriber.php" method="get">
                <div class="input"><span><input type="email" name="email" placeholder="E-Mail Address" /><input type="submit" value="Subscribe" /></span></div>
                <div class="msg"><span></span></div>
            </form>
        </section>
		<section id="sponsors">
			<h2>Sponsors</h2>
			<div class="sponsor">
				<h3>The boss</h3>
				<p>
					<a href="http://www.pocketmath.com" target="_blank" style="background: #fff; display: inline-block; padding: 12px 12px 5px; width: 262px;"><img src="img/sponsors/pocketmath.svg"  height="40" /></a>
				</p>
				<p>
					PocketMath makes it easy to buy media, real time, across mobile website, apps and games. We’re found in Singapore and San Francisco, with a presence in Australia and India! Check us out at <a href="http://www.pocketmath.com" target="_blank">www.pocketmath.com</a>
                    <br/><br/>
                    PocketMath brings the world’s mobile inventory to your fingertips.
				</p>
			</div>
			<div class="supporter">
				<h3>The Supporters</h3>
				<p>
					<a href="http://about.redmart.com" target="_blank" style="background: #fff; display: inline-block; padding: 7px 0 3px; width: 176px;"><img src="img/sponsors/redmart.svg" height="40" /></a>
				</p>
				<p>
					<a href="https://www.github.com" target="_blank" style="background: #fff; display: inline-block; padding: 4px 2px 0;"><img src="img/sponsors/github.png" height="50" /></a>
				</p>
				<p>
					<a href="https://www.digitalocean.com" target="_blank" style="background: #fff; display: inline-block; padding: 12px 12px 8px;"><img src="img/sponsors/digitalocean.png"  height="40" /></a>
				</p>
				<p>
					<a href="https://www.paypal.com" target="_blank" style="background: #fff; display: inline-block; padding: 9px 13px 8px;"><img src="img/sponsors/paypal.png"  height="40" /></a>
				</p>
				<p>
					<a href="https://www.mozilla.com" target="_blank" style="background: #fff; display: inline-block; padding: 6px 8px 4px;"><img src="img/sponsors/mozilla.png"  height="42" /></a>
				</p>
				<p>
					<a href="http://www.dot.asia/" target="_blank" style="background: #fff; display: inline-block; padding: 8px 10px 2px;"><img src="img/sponsors/asia.png" height="44" /></a>
				</p>
				<p>
					<a href="http://www.piktochart.com" target="_blank" style="background: #fff; display: inline-block; padding: 4px 12px 0;"><img src="img/sponsors/piktochart.png" style="margin: 8px 0;" height="42" /></a>
				</p>
                <p>
                    <a href="http://www.mig.me" target="_blank" style="background: #fff; display: inline-block; padding: 9px 9px 1px 6px;"><img src="img/sponsors/migme.png" height="46" /></a>
                </p>
				<p>
					<a href="http://www.opera.com" target="_blank" style="background: #fff; display: inline-block; padding: 7px 9px 3px 6px;"><img src="img/sponsors/opera.png" height="46" /></a>
				</p>
				<p>
					<br/>
					If you’re interested in supporting the web developer community as well, please <a href="mailto:sponsors@cssconf.asia?subject=CSSConf Sponsorship">write us a mail</a>!
				</p>
			</div>
			<a href="https://eventnook.com/event/register/22634" target="_blank" class="button">
				Get your ticket
				<span>1 day - S$280</span>
			</a>
		</section>
		<footer>
			<p>
				<a href="http://2014.devfest.asia"><img src="img/devfest.png" height="100" alt="Singapore DevFest.Asia 2014"/></a>
			</p>
			<p>
				CSSConf.Asia is proudly part of Asia’s first<br/> community organized web developer festival.<br/><br/>

				Checkout CSSConf in the<br/><a href="http://cssconf.com">United States</a>, <a href="http://cssconf.eu">Europe</a> and <a href="http://cssconf.com.au">Australia</a>

				<br/><br/><br/>
				A Nerdherd Pte. Ltd. event<br/>
				<a class="terms" href="terms.html">Terms &amp; Conditions</a><br/><br/>
			</p>
		</footer>
	</section>
	<nav>
		<img src="assets/cssconfasia_icon.png" height="48" /><br/>
        <a href="#schedule">Schedule</a> &nbsp; &#x2605; &nbsp;
        <a href="#about">About</a> &nbsp; &#x2605; &nbsp;
		<a href="#sponsors">Sponsors</a> &nbsp; &#x2605; &nbsp;
		<a href="http://facebook.com/cssconfasia">Get Updates</a>
	</nav>
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
