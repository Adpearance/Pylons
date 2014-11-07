<!-- Favicon -->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Favicons</h4>
		</div>
	</div>

	<div class="row">
		<div class="medium-8 columns">
			<div class="row">
				<div class="medium-12 columns">
				<p>Use the following favicon templates to generate mobile-, tablet-, and desktop-friendly favicons and app icons.</p>
			</div>
			</div>
			<div class="row">
				<div class="medium-2 columns">
					<!-- favicon -->
					<h4 class="styleguide-subpattern-heading">Favicon</h4><br>
					<img src="/favicon.png" alt="" />
				</div>
				<div class="medium-2 columns">	
					<!-- touch icon -->
					<h4 class="styleguide-subpattern-heading">Touch Icon</h4><br>
					<img src="/apple-touch-icon-precomposed.png" alt="" />
				</div>
				<div class="medium-3 medium-offset-1 columns">
					<!-- windows tile	 -->
					<h4 class="styleguide-subpattern-heading">Windows Tile Image</h4><br>
					<img src="/mstile.png" alt="" />
					
				</div>
				<div class="medium-4 columns">
					<br>
					<p>You may specifiy the background color of the app tile. Suggested for the Windows Metro UI:</p>
					<ul class="styleguide-favicon-tiles">
						<li><span style="background:#00aba9;">#00aba9</span></li>
						<li><span style="background:#2b5797;">#2b5797</span></li>
						<li><span style="background:#9f00a7;">#9f00a7</span></li>
						<li><span style="background:#603cba;">#603cba</span></li>
						<li><span style="background:#b91d47;">#b91d47</span></li>
						<li><span style="background:#da532c;">#da532c</span></li>
						<li><span style="background:#ffc40d;">#ffc40d</span></li>
						<li><span style="background:#00a300;">#00a300</span></li>
						<li><span style="background:#2d89ef;">#2d89ef</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>For an easy auto-generator, use <a href="http://realfavicongenerator.net/">RealFaviconGenerator</a>. You will need to place the following sizes and files from the generated set of icons at the root of your project at a minimum:</p>
				<p>
					<ul>
						<li>favicon.png &mdash; 32x32 </li>
						<li>favicon.ico &mdash; <em>multiple sizes saved within file</em></li>
						<li>apple-touch-icon-precomposed.png &mdash; 180x180</li>
						<li>mstile.png &mdash; 144x144</li>
					</ul>
				</p>
			</div>
			<label>Place the following within <kbd>head</kbd></label>
			<textarea class="code">
<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
<link rel="icon" href="favicon.png"><!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
<meta name="msapplication-TileColor" content="#FFC40D">
<meta name="msapplication-TileImage" content="mstile.png">
			</textarea>
		</div>
	</div>
</section>

