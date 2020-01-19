<!DOCTYPE html>

<html lang = "en-gb" dir = "ltr">

<head>
	<title>Venue</title>
	<base href="/mes/" />
	<meta charset="utf-8">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name = "viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href = "style.css" />
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>

<!------------ACTIVE TAB STYLE-------------------->
<style>
	#venue-active {	
	    color: black !important;
	    background-color: white  !important;
	}

</style>



<!------------------------------------heading----------------------------------------->
	<div id="heading-placeholder">

	<?php
		$include_path = "/var/www/html/mes";
		$use_page="TRUE";
		include("$include_path/components/heading.php");
	?>

	</div>
<!---------------------------------end of heading------------------------------------->





<!---------------------------------Navigation bar------------------------------------->
	<div id="nav-placeholder">

	<?php
		include("$include_path/components/navigation-bar.php");
	?>

	</div>
<!-----------------------------end of Navigation bar----------------------------------->


<div class="container" id="maincontent">
	<div class="row">

	<!--------------------------------page main content------------------------------->
		<div class="col-md-8">


			<div class="row">
			</div>


			<div class="row" style=" padding: 0px 5px 0px 5px;">
				<div class="article-content clearfix" itemprop="articleBody">
					<br />
					<h2 class="no-margin"><strong style="font-size: 26px; color:teal;">Conference Venue </strong></h2>	
					<figure style="padding:	1px 0% 0% 0%">
						<h3>  Zakir Hussain Auditorium, University of Hyderabad. </h3>

			<!------------------------------------------------------------------------------------- -->			
						<address>
							<strong> Address : </strong> <br />
							Zakir Hussain Lecture Hall Complex, UPE Building <br />
							CUC, Gachibowli, Hyderabad-500046, India <br />
						</address>
			<!------------------------------------------------------------------------------------- -->

						<img src="media/venue/zakir_hussain.png" alt="Zakir Hussain Auditorium" width=100% >
						<figcaption  style="font-size:10px; text-align:right; padding: 4px 0% 0% 0%">Courtesy:  Sriram R Bhupathiraju (Google Maps)</figcaption>
					</figure>
				</div>
			</div>

<!------------------------------------------------------------------------------------- -->
<h3>  Map : </h3>
<div class="row" style=" padding: 0px 12% 0px 12%;">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1903.042293349083!2d78.32656906924423!3d17.455665099378738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb93052448b22d%3A0xf6a2e7f13f4750a7!2sZakir+Hussain+Lecture+Hall+Complex%2C+UPE+Building!5e0!3m2!1sen!2sin!4v1529601478896" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>				
<!------------------------------------------------------------------------------------- -->

	<br />	
	<br />	
	<br />		


				<div class="row" style=" padding: 0px 5px 0px 5px;">
					<h2 class="no-margin"><strong style="font-size: 26px; color:teal;">University of Hyderabad Photos </strong></h2>
					
						<br />
						<div id="c" class="carousel" aria-labelledby="carousel heading">
							<ul>
								<li class="slide" style="float:center;"><img src="media/uoh/uoh1.jpg" alt="a wall with University of Hyderabad on it" class="center"></li>
								<li class="slide"><img src="media/uoh/uoh3.jpg" alt="top view of University of Hyderabad" class="center"></li>								
								<li class="slide"><img src="media/uoh/peacock_lake_inside.jpg" alt="peacock lake at University of Hyderabad" class="center"></li>
								<li class="slide"><img src="media/uoh/33_big.jpg" alt="lake view at University of Hyderabad" class="center"></li>
								<li class="slide"><img src="media/uoh/mushroom.jpg" alt="Mushroom rock at University of Hyderabad" class="center"></li>
								<li class="slide"><img src="media/uoh/53.jpg" alt="a rocky outcrop" class="center"></li>
								<li class="slide"><img src="media/uoh/uoh4.jpg" alt="way leading to mushroom rock with lush green trees on both sides of the road. a bicycle is parked to the front" class="center"></li>
									
								
							</ul>			
							<div class="pager">
							</div>
						</div>
				</div>
		</div>


	<!------------------------end of page main content-------------------------------->
<script>
  /* focusin/out event polyfill (firefox) */
!function(){
  var w = window,
  d = w.document;

  if( w.onfocusin === undefined ){
    d.addEventListener('focus' ,addPolyfill ,true);
    d.addEventListener('blur' ,addPolyfill ,true);
    d.addEventListener('focusin' ,removePolyfill ,true);
    d.addEventListener('focusout' ,removePolyfill ,true);
  }
  function addPolyfill(e){
    var type = e.type === 'focus' ? 'focusin' : 'focusout';
    var event = new CustomEvent(type, { bubbles:true, cancelable:false });
    event.c1Generated = true;
    e.target.dispatchEvent( event );
  }
  function removePolyfill(e){
if(!e.c1Generated){ // focus after focusin, so chrome will the first time trigger tow times focusin
  d.removeEventListener('focus' ,addPolyfill ,true);
  d.removeEventListener('blur' ,addPolyfill ,true);
  d.removeEventListener('focusin' ,removePolyfill ,true);
  d.removeEventListener('focusout' ,removePolyfill ,true);
}
setTimeout(function(){
  d.removeEventListener('focusin' ,removePolyfill ,true);
  d.removeEventListener('focusout' ,removePolyfill ,true);
});
}
}();

var myCarousel = (function() {

  var carousel, slides, index, slidenav, settings, timer, setFocus, animationSuspended;

  function forEachElement(elements, fn) {
    for (var i = 0; i < elements.length; i++)
      fn(elements[i], i);
  }

  function removeClass(el, className) {
    if (el.classList) {
      el.classList.remove(className);
    } else {
      el.className = el.className.replace(new RegExp('(^|\\b)' + className.split(' ').join('|') + '(\\b|$)', 'gi'), ' ');
    }
  }

  function hasClass(el, className) {
    if (el.classList) {
      return el.classList.contains(className);
    } else {
      return new RegExp('(^| )' + className + '( |$)', 'gi').test(el.className);
    }
  }

  function init(set) {
    settings = set;
    carousel = document.getElementById(settings.id);
    slides = carousel.querySelectorAll('.slide');

    carousel.className = 'active carousel';

    var ctrls = document.createElement('ul');

    ctrls.className = 'controls';
    ctrls.innerHTML = '<li>' +
        '<button type="button" class="btn-prev" aria-label="Previous Image">&laquo;</button>' +
      '</li>' +
      '<li>' +
        '<button type="button" class="btn-next" aria-label="Next Image">&raquo;</button>' +
      '</li>';

    ctrls.querySelector('.btn-prev')
      .addEventListener('click', function () {
        prevSlide(true);
      });
    ctrls.querySelector('.btn-next')
      .addEventListener('click', function () {
        nextSlide(true);
      });

    carousel.appendChild(ctrls);

    if (settings.slidenav || settings.animate) {
      slidenav = document.createElement('ul');

      slidenav.className = 'slidenav';

      if (settings.animate) {
        var li = document.createElement('li');

        if (settings.startAnimated) {
          li.innerHTML = '<button data-action="stop"><span class="visuallyhidden">Stop Animation </span>￭</button>';
        } else {
          li.innerHTML = '<button data-action="start"><span class="visuallyhidden">Start Animation </span>▶</button>';
        }

        slidenav.appendChild(li);
      }

      if (settings.slidenav) {
        forEachElement(slides, function(el, i){
          var li = document.createElement('li');
          var klass = (i===0) ? 'class="current" ' : '';
          var kurrent = (i===0) ? ' <span class="visuallyhidden">(Current)</span>' : '';

          li.innerHTML = '<button '+ klass +'data-slide="' + i + '" aria-label="Image '+ (i+1)+ '"><span class="visuallyhidden"></span> ' + (i+1) + kurrent + '</button>';
          slidenav.appendChild(li);
        });
      }

      slidenav.addEventListener('click', function(event) {
        var button = event.target;
        if (button.localName == 'button') {
          if (button.getAttribute('data-slide')) {
            stopAnimation();
            setSlides(button.getAttribute('data-slide'), true);
          } else if (button.getAttribute('data-action') == "stop") {
            stopAnimation();
          } else if (button.getAttribute('data-action') == "start") {
            startAnimation();
          }
        }
      }, true);

      carousel.className = 'active carousel with-slidenav';
      carousel.appendChild(slidenav);
    }

    var liveregion = document.createElement('div');
    liveregion.setAttribute('aria-live', 'polite');
    liveregion.setAttribute('aria-atomic', 'true');
    liveregion.setAttribute('class', 'liveregion visuallyhidden');
    carousel.appendChild(liveregion);

      slides[0].parentNode.addEventListener('transitionend', function (event) {
        var slide = event.target;
        removeClass(slide, 'in-transition');
        if (hasClass(slide, 'current'))  {
          if(setFocus) {
            slide.setAttribute('tabindex', '-1');
            slide.focus();
            setFocus = false;
          }
        }
      });

      carousel.addEventListener('mouseenter', suspendAnimation);
      carousel.addEventListener('mouseleave', function(event) {
        if (animationSuspended) {
          startAnimation();
        }
      });

      carousel.addEventListener('focusin', function(event) {
        if (!hasClass(event.target, 'slide')) {
          suspendAnimation();
        }
      });
      carousel.addEventListener('focusout', function(event) {
        if (!hasClass(event.target, 'slide') && animationSuspended) {
          startAnimation();
        }
      });

    index = 0;
    setSlides(index);

     if (settings.startAnimated) {
      timer = setTimeout(nextSlide, 5000);
    }
  }

  function setSlides(new_current, setFocusHere, transition, announceItemHere) {
    setFocus = typeof setFocusHere !== 'undefined' ? setFocusHere : false;
    announceItem = typeof announceItemHere !== 'undefined' ? announceItemHere : false;
    transition = typeof transition !== 'undefined' ? transition : 'none';

    new_current = parseFloat(new_current);

    var length = slides.length;
    var new_next = new_current+1;
    var new_prev = new_current-1;

    if(new_next === length) {
      new_next = 0;
    } else if(new_prev < 0) {
      new_prev = length-1;
    }

    for (var i = slides.length - 1; i >= 0; i--) {
      slides[i].className = "slide";
    }

    slides[new_next].className = 'next slide' + ((transition == 'next') ? ' in-transition' : '');
    slides[new_next].setAttribute('aria-hidden', 'true');

    slides[new_prev].className = 'prev slide' + ((transition == 'prev') ? ' in-transition' : '');
    slides[new_prev].setAttribute('aria-hidden', 'true');


    slides[new_current].className = 'current slide';
    slides[new_current].removeAttribute('aria-hidden');


    if (announceItem) {
      //carousel.querySelector('.liveregion').textContent = 'Item ' + (new_current + 1) + ' of ' +   slides.length;
			carousel.querySelector('.liveregion').textContent = slides[new_current].querySelector('img').getAttribute('alt');
			//console.log(slides[new_current].querySelector('img').getAttribute('alt'));
    }

    if(settings.slidenav) {
      var buttons = carousel.querySelectorAll('.slidenav button[data-slide]');
      for (var j = buttons.length - 1; j >= 0; j--) {
        buttons[j].className = '';
        buttons[j].innerHTML = '' + (j+1);
      }
      buttons[new_current].className = "current";
      buttons[new_current].innerHTML = '' + (new_current+1) + ' <span class="visuallyhidden"></span>';
    }

    index = new_current;

  }

  function nextSlide(announceItem) {
    announceItem = typeof announceItem !== 'undefined' ? announceItem : false;

    var length = slides.length,
    new_current = index + 1;

    if(new_current === length) {
      new_current = 0;
    }

    setSlides(new_current, false, 'prev', announceItem);

    if (settings.animate) {
      timer = setTimeout(nextSlide, 5000);
    }

  }

  function prevSlide(announceItem) {
    announceItem = typeof announceItem !== 'undefined' ? announceItem : false;

    var length = slides.length,
    new_current = index - 1;

    if(new_current < 0) {
      new_current = length-1;
    }

    setSlides(new_current, false, 'next', announceItem);

  }

  function stopAnimation() {
    clearTimeout(timer);
    settings.animate = false;
    animationSuspended = false;
    _this = carousel.querySelector('[data-action]');
    _this.innerHTML = '<span class="visuallyhidden">Start Animation </span>▶';
    _this.setAttribute('data-action', 'start');
  }

  function startAnimation() {
    settings.animate = true;
    animationSuspended = false;
    timer = setTimeout(nextSlide, 5000);
    _this = carousel.querySelector('[data-action]');
    _this.innerHTML = '<span class="visuallyhidden">Stop Animation </span>￭';
    _this.setAttribute('data-action', 'stop');
  }

  function suspendAnimation() {
    if(settings.animate) {
      clearTimeout(timer);
      settings.animate = false;
      animationSuspended = true;
    }
  }

  return {
    init:init,
    next:nextSlide,
    prev:prevSlide,
    goto:setSlides,
    stop:stopAnimation,
    start:startAnimation
  };
});

var c = new myCarousel();
c.init({
  id: 'c',
  slidenav: true,
  animate: true,
  startAnimated: true
});

</script>


	<!------------------------------------sidebar------------------------------------>
		<div class="col-md-4">
			<div class="row">
				<div id="sidebar-dates-placeholder">
				
				<?php	
					include("$include_path/components/sidebar-dates.php");
				?>

				</div>
			</div>

			<div class="row">
		
			<?php	
				include("$include_path/components/poster.php");
			?>

			</div>
		</div>
	<!---------------------------------end ofsidebar-------------------------------->
	
	</div>
</div>


<!-----------------footer---------------------------->
	<div id="footer-placeholder">
	<?php
		include("$include_path/components/footer.php");
	?>
	</div>
<!------------end of footer-------------------------->

</body>

</html>

