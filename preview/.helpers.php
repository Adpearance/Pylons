 <!-- HELPERS -->

<section>
	<div class="row">
		<div class="small-12 columns"><h4 class="styleguide-pattern-heading">Additional Helpers</h4></div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<h4 class="styleguide-subpattern-heading">Spacers</h4>
			<p>Avoid using non-semantic <kbd>br</kbd> line breaks and use these spacers.</p>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">		
			<div class="styeguide-display">
				<div class="spacer-20 styeguide-display">margin:20px 0;<br></div>
			</div>
			<div class="spacer-20"></div>
			<div class="styeguide-display">
				<div class="spacer-40 styeguide-display">margin:40px 0;<br></div>
			</div>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>base/_base</kbd></p>
			</div>
			<textarea class="code">
<div class="spacer-20"></div>
<div class="spacer-40"></div>				
			</textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="medium-12 columns">
			<h4 class="styleguide-subpattern-heading">Floats</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="left styeguide-display" style="width: 300px; padding: 20px;">Float left</div>
			<div class="right styeguide-display" style="width: 300px; padding: 20px;">Float right</div>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<kbd>.left</kbd><br><br>
				<kbd>.right</kbd>
			</div>	
		</div>
	</div>


	<div class="row">
		<div class="medium-12 columns">
			<h4 class="styleguide-subpattern-heading">Text Align Classes</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-4 columns">
			<p class="text-left"><strong>This text is left aligned.</strong> The Hitchhiker’s Guide to the Galaxy has a few things to say on the subject of towels. A towel, it says, is about the most massively useful thing an interstellar hitch hiker can have. Partly it has great practical value — you can wrap it around you for warmth as you bound across the cold moons of Jaglan Beta.</p>
			<p class="text-right"><strong>This text is right aligned.</strong> You can lie on it on the brilliant marble‐sanded beaches of Santraginus V, inhaling the heady sea vapours; you can sleep under it beneath the stars which shine so redly on the desert world of Kakrafoon; use it to sail a mini raft down the slow heavy river Moth; wet it for use in hand‐to‐hand‐combat.</p>
		</div>
		<div class="medium-4 columns">
			<p class="text-center"><strong>This text is center aligned.</strong> Wrap it round your head to ward off noxious fumes or to avoid the gaze of the Ravenous Bugblatter Beast of Traal (a mindbogglingly stupid animal, it assumes that if you can't see it, it can't see you — daft as a bush, but very ravenous); You can wave your towel in emergencies as a distress signal, and of course dry yourself off with it if it still seems to be clean enough.</p>
			<p class="text-justify"><strong>This text is justified.</strong> More importantly, a towel has immense psychological value. Any man that can hitch the length and breadth of the Galaxy, rough it, slum it, struggle against terrible odds, win through and still know where his towel is, is clearly a man to be reckoned with.</p>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>
					<kbd>.text-left</kbd><br>
					<kbd>.text-right</kbd><br>
					<kbd>.text-justify</kbd><br>
					<kbd>.text-center</kbd>
				</p>
				<p><strong>With Media Queries</strong><br> You can apply the text alignment class to a specified size screen or larger (see below examples). Full list <a href="http://foundation.zurb.com/docs/utility-classes.html">here</a>.</p>
				<p>
					<kbd>.small-only-text-center</kbd><br>
					<kbd>.medium-text-left</kbd><br>
				</p>
			</div>	
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns">
			<h4 class="styleguide-subpattern-heading">Misc.</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-6 columns">
			<div class="debug" style="padding: 25px 30px 10px;">
				<p>When debugging CSS, sometimes it helps to see the area of your element.  Add the class <kbd>.debug</kbd> and a semi-transparent red background, as well as a 1px red bolder will be applied.</p>
			</div>
		</div>
		<div class="medium-5 medium-offset-12 columns">
			<p>You can add the class <kbd>.hide</kbd> to an element to hide it. This will add the property display: none to the element.</p>
		</div>
	</div>


</section>
