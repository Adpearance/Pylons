<!--  Images	-->
<section><div class="row"><div class="small-12 columns"><h4 class="styleguide-pattern-heading">Images</h4></div></div></section>


<!-- Interchangeable Responsive Images -->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">Interchangeable Responsive Images</h4>
			<p>Interchange uses media queries to dynamically load responsive content that is appropriate for different users' browsers. <a href="http://foundation.zurb.com/docs/components/interchange.html">Documentation</a></p>
		</div>
	</div>
	<div class="row">
		<div class="small-8 columns">
			<img data-interchange="[../lib/images/demo/interchange-small.jpg, (default)], [../lib/images/demo/interchange-medium.jpg, (medium)], [../lib/images/demo/interchange-large.jpg, (large)]" />
			<!--  Use noscript for browsers with JavaScript disabled --><noscript><img src="/path/to/default.jpg"></noscript>
			<div class="spacer-20"></div>
			<p><strong>Image Example</strong><br>
			<kbd>data-interchange="[path/to/image-small.jpg, (default)], [path/to/image-medium.jpg, (medium)], [path/to/image-large.jpg, (large)]"</kbd></p>
		</div>
		<div class="small-4 columns">
			<div class="panel">
				<p>Use the <kbd>data-interchange</kbd> attribute on a markup container (like a div or img).</p> 
				<p>Each rule passed to data-interchange is comma delimited and encapsulated in square brackets, and each argument within a rule is also comma delimited. The first parameter is the path to your image, and the second parameter is your media query, surrounded by parenthesis.</p>
				<p><strong>The last rule that evaluates to true will be the image that gets loaded.</strong></p>
			</div>
			<textarea class="code">
data-interchange="[image_path, (media query)], [image_path, (media query)]"
			</textarea>

		</div>
	</div>
</section>
