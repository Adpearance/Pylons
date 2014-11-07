 <!-- Equalizer -->

<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Equalizer</h4>
			<p>Equalizer is a Foundation plugin that creates equal height content on your page.</p>
		</div>
	</div>


	<div class="row">
		<div class="medium-8 columns">

			<div data-equalizer class="styleguide-equalizer">
				<div data-equalizer-watch>
					<strong>This content is the taller of the two elements.</strong> With the Equalizer data attributes, the other elements will be the same height of this one. In a hole in the ground there lived a hobbit. Not a nasty, dirty, wet hole, filled with the ends of worms and an oozy smell, nor yet a dry, bare, sandy hole with nothing in it to sit down on or to eat: it was a hobbit-hole, and that means comfort. 
				</div>
				<div data-equalizer-watch>
					This hobbit was a very well-to-do hobbit, and his name was Baggins. 
				</div>
				<div data-equalizer-watch>
					This is a story of how a Baggins had an adventure, found himself doing and saying things altogether unexpected.
				</div>
			</div>

		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>Apply the <kbd>data-equalizer</kbd> attribute to a parent container. Then apply the <kbd>data-equalizer-watch</kbd> attribute to each element you'd like to have an equal height. The height of <kbd>data-equalizer-watch</kbd> attribute will be equal to that of the tallest element.</p>
			</div>
			<textarea class="code">
<div data-equalizer>
  <div data-equalizer-watch>
    ...
  </div>
  <div data-equalizer-watch>
    ...
  </div>
</div>
			</textarea>	
		</div>
	</div>


</section>
