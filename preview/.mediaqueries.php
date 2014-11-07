 <!-- Media Queries -->

<section>
	<div class="row">
		<div class="small-12 columns"><h4 class="styleguide-pattern-heading">Media Queries</h4></div>
	</div>
	<div class="row">
		<div class="medium-12 columns">
			<p>Much of the heavy lifting comes from the fluid responsive nature of the percentage-based grid. Use the following media queries in SCSS.</p>
		</div>
	</div>
	<div class="row">
		<div class="medium-6 columns">    
			<div class="panel">
				<label>SCSS</label>
				<p><kbd>@media #{$small-up} { }</kbd><br>
				<kbd>@media #{$small-only} { }</kbd></p>
				
				<p><kbd>@media #{$medium-up} { }</kbd><br>
				<kbd>@media #{$medium-only} { }</kbd></p>

				<p><kbd>@media #{$large-up} { }</kbd><br>
				<kbd>@media #{$large-only} { }</kbd></p>

				<p><kbd>@media #{$xlarge-up} { }</kbd><br>
				<kbd>@media #{$xlarge-only} { }</kbd></p>

				<p><kbd>@media #{$xxlarge-up} { }</kbd><br>
				<kbd>@media #{$xxlarge-only} { }</kbd></p>
			</div>
		</div>
		<div class="medium-4 medium-offset-1 end columns">
			<p><strong>Media queries are built using ems in Foundation.</strong></p>
			<p>
				$small-range: (0em, 40em); /* 0, 640px */<br>
				$medium-range: (40.063em, 64em); /* 641px, 1024px */<br>
				$large-range: (64.063em, 90em); /* 1025px, 1440px */<br>
				$xlarge-range: (90.063em, 120em); /* 1441px, 1920px */<br>
				$xxlarge-range: (120.063em);
			</p>

		</div>
	</div>

</section>
