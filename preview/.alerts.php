 <!-- ALERTS -->

<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Alerts</h4>
			<p>Alerts are closable notification boxes.</p>
		</div>
	</div>

	<div class="row">
		<div class="medium-4 columns">
		
			<!-- standard -->
			<div data-alert class="alert-box" tabindex="0" aria-live="assertive" role="dialogalert">
				This is a standard alert.
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>
			
			<!-- secondary -->
			<div data-alert class="alert-box secondary" tabindex="0" aria-live="assertive" role="dialogalert">
				These aren't the droids you're looking for. <kbd>.secondary</kbd>
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>
			
			<!-- info -->
			<div data-alert class="alert-box info" tabindex="0" aria-live="assertive" role="dialogalert">
				Speak, friend, and enter. <kbd>.info</kbd>
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>
		
		</div>
		<div class="medium-4 columns">
			
			<!-- success	 -->
			<div data-alert class="alert-box success" tabindex="0" aria-live="assertive" role="dialogalert">
				The only winning move is not to play. <kbd>.success</kbd>
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>
			
			<!-- alert -->
			<div data-alert class="alert-box alert" tabindex="0" aria-live="assertive" role="dialogalert">
				Danger, Will Robinson! <kbd>.alert</kbd>
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>
			
			<!-- warning -->
			<div data-alert class="alert-box warning" tabindex="0" aria-live="assertive" role="dialogalert">
				Beware the ides of March. <kbd>.warning</kbd>
				<a href="#" class="close" tabindex="0" aria-label="Close Alert">&times;</a>
			</div>

		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>
					<strong>SCSS:</strong> <kbd>components/_alerts</kbd>
				</p>
				<p><strong>Accessibility</strong><br>To make your alerts conform to accessibility standards, use the markup below, which adds a handful of ARIA attributes to the alert container.</a>
			</div>
			<textarea class="code">
<div data-alert class="alert-box" tabindex="0" aria-live="assertive" role="dialogalert">
  Your content goes here
  <a href="#" tabindex="0" class="close" aria-label="Close Alert">&times;</a>
</div>
			</textarea>
		</div>
	</div>
</section>


