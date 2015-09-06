
<!-- Slider -->
<script src="{{ theme_url }}/assets/js/jquery.slides.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#slides').slidesjs({
			width: 970,
			height: 444,
			navigation: {
				active: false,
				effect: "fade"
			},
			pagination: {
				active: true,
				effect: "fade"
			},
			play: {
				active: false,
				effect: "fade",
				interval: 7000,
				auto: true,
				swap: false,
				pauseOnHover: false,
				restartDelay: 2500
			},
			effect: {
				slide: {
					speed: 200
				},
				fade: {
					speed: 700,
					crossfade: true
				}
			},
			callback: {
				loaded: function(number) {
					// Hide all captions
					$('.slider-caption').hide().css({right: -800});

					// Show only the initial caption
					var slidesjsIndex = number - 1;
					$(".slidesjs-slide[slidesjs-index=" + slidesjsIndex + "] .slider-caption").css({right: 0}).show();
				},
				start: function(number) {
					// Hide current caption
					var slidesjsIndex = number - 1;
					
					$(".slidesjs-slide[slidesjs-index=" + slidesjsIndex + "] .slider-caption")
						.animate({right: -800}, 200, function() { $(this).hide(); });
				},
				complete: function(number) {
					// Show next caption
					var slidesjsIndex = number - 1;
					
					$(".slidesjs-slide[slidesjs-index=" + slidesjsIndex + "] .slider-caption")
						.show()
						.animate({right: 0}, 300);
				}
			}
		});
	});
</script>


<!-- Our Team Page -->
<script src="{{ theme_url }}/assets/js/isotope.pkgd.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
		if ($("#bios-list").length) {

			// Disable links in the filter list
			$("#industries-nav a, #specialties-nav a").click(function(e) {
				e.preventDefault();

				// remove all classes
				$("#industries-nav a, #specialties-nav a").removeClass("selected");

				// add this class
				$(this).addClass("selected");

				// scroll into view
				var top = document.getElementById("bios-list").offsetTop;
				window.scrollTo(0, top);
			});

			// init Isotope
			var $container = $("#bios-list").isotope({
			  	itemSelector: ".item",
			  	layoutMode: "fitRows"
			});

			// filter items on button click
			$("#industries-nav li, #specialties-nav li").click(function(e) {

				var filterValue = "." + $(this).attr("id");
		
				$container.isotope({
					filter: filterValue,
					sortBy: 'random'
				});
			});
		}
	});
</script>
