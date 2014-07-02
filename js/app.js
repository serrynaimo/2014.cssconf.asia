console.log('Always be learning!');

$("#subscribeForm").ajaxForm({
	url: "http://2014.cssconf.asia/addsubscriber.php",
	dataType: "html",
	beforeSubmit: function() {
		$("#subscribeForm").removeClass("failure success").addClass("load");
		$("#subscribeForm .msg").removeClass("play");
	},
	success: function(r) {
		if(r.substr(0,6) != "Thanks") {
			$("#subscribeForm").removeClass("load").addClass("failure");
			$("#subscribeForm .msg span").text(r.substr(0,r.indexOf('<br/>')));
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm").removeClass("failure");
				$("#subscribeForm input[name='email']").focus();
			},5000);
		}
		else {
			$("#subscribeForm").removeClass("load").addClass("success");
			$("#subscribeForm .msg span").text("Thanks. We'll keep you updated!");
			$("#subscribeForm .msg").addClass("play");
			setTimeout(function() {
				$("#subscribeForm input[name='email']").val("");
				$("#subscribeForm").removeClass("success active");
				$("#subscribeForm .msg").removeClass("play");
			},3000);
			setTimeout(function() {
				window.location = "http://facebook.com/cssconfasia";
			},3200);
		}
	},
	error: function(r, s) {
		$("#subscribeForm").removeClass("load").addClass("failure");
		$("#subscribeForm .msg span").text("Something went utterly wrong...");
		setTimeout(function() {
			$("#subscribeForm").removeClass("failure");
		},4000);
	}
});

$("#subscribeForm .msg").click(function() {
	$("#subscribeForm").removeClass("failure success");
	$("#subscribeForm input[name='email']").focus();
});

setTimeout(function() {
	$("body").removeClass("loading");
}, 1400);

var goUp,
	dheight,
	wheight,
	animating,
	touching,
	snapTimer,
	bottom = -320,
	$layer = $('#jsconf');

var scrollBack = function() {
	animating = true;
	$layer.animate({
        bottom: bottom
    }, 500, function() {
	    animating = false;
    });
}, turnPage = function() {
	animating = true;
	$layer.animate({height: 1500}, 800, function() {
		location = "/2014.jsconf.asia";
	});	
};
	
document.onreadystatechange = function () {
	dheight = $(document).height();
	goUp = bottom;
};

$(window).on('scroll touchmove', function(e) {
	wheight = $(window).height();
	
	var fromBottom = dheight - wheight - window.pageYOffset;
	
	if(!animating && fromBottom < 20) {
		clearTimeout(snapTimer);
		
		if(!touching) {
			window.scrollTo(0, dheight - wheight - 20)
		}
		
		goUp += 10;
		if(goUp >= 0) {
			turnPage();
		}
		else {
			$layer.css({bottom: goUp});
			snapTimer = setTimeout(scrollBack, 800);
		}
	}
}).on('touchstart', function() {
	touching = true;
}).on('touchend', function() {
	setTimeout(function() {
		touching = false;
		window.scrollTo(0, dheight - wheight - 20)
	}, 500);
});