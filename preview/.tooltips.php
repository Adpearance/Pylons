<!-- Tooltips -->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading" id="components-tooltips">Tooltips</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-7 columns">
			<p>The tooltips can be positioned on the <a data-tooltip aria-haspopup="true" class="has-tip" title="I'm on bottom and the default position.">"tip-bottom"</a>, which is the default position, <a data-tooltip aria-haspopup="true" class="has-tip tip-top" title="I'm on the top.">"tip-top"</a>, <a data-tooltip aria-haspopup="true" class="has-tip tip-left" title="I'm on the left!">"tip-left"</a>, or <a data-tooltip aria-haspopup="true" class="has-tip tip-right" title="I'm on the right!">"tip-right"</a> of the target element by adding the appropriate class to them.</p>
			
			<p>You can also use data-options to allow your show on <kbd>small</kbd>, <kbd>medium</kbd>, or <kbd>large</kbd>. For instance, this <span data-tooltip aria-haspopup="true" class="has-tip" data-options="show_on:large" title="Large Screen Sizes">this tooltip will only show on...</span>.</p>

			<p>Tool tips are <a data-tooltip aria-haspopup="true" class="has-tip" title="...which is great!">accessible</a> by using the appropriate ARIA tag.</p>
		</div>
		<div class="medium-4 medium-offset-1 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>components/_tooltips</kbd></p>
				<p>You can add your own custom class to style each tip differently. <strong>On a small device, the tooltips are full-width and bottom aligned.</strong></p>
			</div>
			<textarea class="code">
<a data-tooltip aria-haspopup="true" class="has-tip" title="Content within tooltip">has tool tip link</a>	
			</textarea>
		</div>
	</div>
</section>
