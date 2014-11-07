 <!-- GRID-->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Grid</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<p>Familiarize yourself with the Foundation grid system and avoid writing extra code. <a href="http://foundation.zurb.com/docs/components/grid.html" targe="_blank">View Documentation</a></p>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>base/_grid</kbd></p>
			</div>
		</div>
	</div>



	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Responsive Grid</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="row display">
				<div class="small-2 medium-3 large-4 columns">
					<span class="show-for-small-only">2</span>
					<span class="show-for-medium-only">3</span>
					<span class="show-for-large-up">4</span>
				</div>
				<div class="small-4 medium-5 large-3 columns ">
					<span class="show-for-small-only">4</span>
					<span class="show-for-medium-only">5</span>
					<span class="show-for-large-up">3</span>
				</div>
				<div class="small-6 medium-4 large-5 columns ">
					<span class="show-for-small-only">6</span>
					<span class="show-for-medium-only">4</span>
					<span class="show-for-large-up">5</span>
				</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<div class="row">
  <div class="small-2 medium-3 large-4 columns"></div>
  <div class="small-4 medium-5 large-3 columns"></div>
  <div class="small-6 medium-4 large-5 columns "></div>
</div>
			</textarea>
		</div>
	</div>




	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">Offsets</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="row display">
				<div class="small-1 columns">1</div>
				<div class="small-11 columns">11</div>
			</div>
			<div class="row display">
				<div class="small-1 columns">1</div>
				<div class="small-9 small-offset-2 columns">9, offset 2</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<div class="row">
  <div class="small-1 columns"></div>
  <div class="small-9 small-offset-2 columns"></div>
</div>
			</textarea>
		</div>
	</div>
	


	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">Centered</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="row display">
				<div class="small-6 medium-centered columns">6 centered</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<div class="row">
  <div class="small-6 medium-centered columns"></div>
</div>
			</textarea>
		</div>
	</div>
	


	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">Source Ordering</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<div class="row display">
				<div class="large-9 large-push-3 columns">9</div>
				<div class="large-3 large-pull-9 columns">3, last</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<div class="row display">
  <div class="large-9 large-push-3 columns">9</div>
  <div class="large-3 large-pull-9 columns">3, last</div>
</div>
			</textarea>
		</div>
	</div>


</section>