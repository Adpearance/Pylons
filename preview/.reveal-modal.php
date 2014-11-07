<!-- Modal	-->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading" id="components-modal">Reveal Modal</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<p>We use the Foundation Reveal jQuery modal plugin to modal dialogs (or pop-up windows).</p>
			
			
			<a href="#" data-reveal-id="myModal" class="button">Click Me For A Modal</a>
			<div id="myModal" class="reveal-modal" data-reveal>
				<a class="close-reveal-modal">&times;</a>
				<h2>Awesome. I have it.</h2>
				<p class="lead">Your couch.  It is mine.</p>
				<p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
			</div>

		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>components/_reveal</kbd></p>
				<p> The anchor tag with the <kbd>reveal-modal-id</kbd> is what triggers the Reveal.</p>
			</div>
			<textarea class="code">
<a href="#" data-reveal-id="myModal">Click For Modal</a>
<div id="myModal" class="reveal-modal" data-reveal>
  <p>Content in the modal</p>
  <a class="close-reveal-modal">&times;</a>
</div>
			</textarea>
		</div>
	</div>
</section>