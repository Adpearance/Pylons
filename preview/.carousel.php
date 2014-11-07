<!-- Carousel	-->


<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading" id="components-carousel">Owl Carousel</h4>
			<p><a href="#">Owl Carousel 2</a> is a touch enabled jQuery plugin.</p>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Slider</h4></div>
	</div>
	<div class="row">
		<div class="medium-6 columns">
			<div class="slider">
				<img src="http://placehold.it/500x150/7dfacb&text=1" />
				<img src="http://placehold.it/500x150/ed6c0f&text=2" />
				<img src="http://placehold.it/500x150/6f034d&text=3" />
				<img src="http://placehold.it/500x150/1dbbbd&text=4" />
				<img src="http://placehold.it/500x150/afef7f&text=5" />
				<img src="http://placehold.it/500x150/9d4538&text=6" />
				<img src="http://placehold.it/500x150/66f683&text=7" />
			</div>
		</div>
		<div class="medium-4 medium-offset-2 columns">
			<div class="panel">
				<p>
					
					<p><strong>SCSS</strong><br>Style the theme here: <kbd>vendors/_owl-carousel</kbd></p>
					<p><strong>Initialize Plugin</strong><br>Call the plugin with <code>$(".your-class").owlCarousel();</code></p>
					<p>See <a href="http://www.owlcarousel.owlgraphic.com/demos/demos.html">demos</a> for  for customisation and options usage.</p>
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Responsive Carousel</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="carousel">
				<img src="http://placehold.it/450x350/7dfacb&text=1" />
				<img src="http://placehold.it/450x350/ed6c0f&text=2" />
				<img src="http://placehold.it/450x350/6f034d&text=3" />
				<img src="http://placehold.it/450x350/1dbbbd&text=4" />
				<img src="http://placehold.it/450x350/afef7f&text=5" />
				<img src="http://placehold.it/450x350/9d4538&text=6" />
				<img src="http://placehold.it/450x350/66f683&text=7" />
			</div>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>
					The responsive carousel uses the <kbd>responsive</kbd> options, as well as <kbd>loop</kbd> and <kbd>margin</kbd>.  For more options, view the <a href="http://www.owlcarousel.owlgraphic.com/docs/api-options.html">API options</a>.
				</p>
			</div>
			
			<label>HTML</label>
			<textarea class="code">
<div class="carousel">
	<div></div>
	<div></div>
</div>				
			</textarea>
			<label>JS</label>
			<textarea class="code">
$('.class').owlCarousel(
	loop:true,
	margin:10,
	responsiveClass:true,
	responsive:{
		0:{
			items:1,
			nav:true
		},
	600:{
			items:3,
			nav:false
		},
		1024:{
			items:5,
			nav:true,
			loop:false
	 }
});
			</textarea>
		</div>
	</div>

</section>