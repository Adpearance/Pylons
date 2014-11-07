 <!-- TABS -->

<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading" id="components-tabs">Tabs</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Basic</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
				
			<ul class="tabs" data-tab role="tablist">
				<li class="tab-title active"><a href="#panel1-1" role="tab" tabindex="0" aria-selected="true" controls="panel1-1">Tab 1</a></li>
				<li class="tab-title" role="presentational" ><a href="#panel1-2" role="tab" tabindex="0"aria-selected="false" controls="panel1-2">Tab 2</a></li>
				<li class="tab-title" role="presentational"><a href="#panel1-3" role="tab" tabindex="0" aria-selected="false" controls="panel1-3">Tab 3</a></li>
				<li class="tab-title" role="presentational" ><a href="#panel1-4" role="tab" tabindex="0" aria-selected="false" controls="panel1-4">Tab 4</a></li>
			</ul>
			<div class="tabs-content">
				<section role="tabpanel" aria-hidden="false" class="content active" id="panel1-1">
					<p>First panel content goes here...</p>
					<div class="row collapse">
						<div class="medium-4 columns">
							<img src="http://placehold.it/250x150" alt="" />
						</div>
						<div class="medium-8 columns">
							<p>Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
							<p>Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Curabitur blandit tempus porttitor.</p>
						</div>
					</div>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel1-2">
					<p>Second panel content goes here...</p>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel1-3">
					<p>Third panel content goes here...</p>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel1-4">
					<p>Fourth panel content goes here...</p>
				</section>
			</div>

		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>components/_tabs.</kbd></p>
				<p>Please use fully accessible markup below, complete with ARIA tags. The tabs are keyboard accessible meaning that a user can use the tab key or arrow keys to navigate through them. The role of tablist tells a screen reader what the element is and reads the necessary content.</p>
			</div>
			<textarea class="code">
<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational" ><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Tab 1</a></li>
  <li class="tab-title" role="presentational" ><a href="#panel2-2" role="tab" tabindex="0"aria-selected="false" controls="panel2-2">Tab 2</a></li>
  <li class="tab-title" role="presentational"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" controls="panel2-3">Tab 3</a></li>
  <li class="tab-title" role="presentational" ><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" controls="panel2-4">Tab 4</a></li>
</ul>
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
    First panel content goes here...
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
    Second panel content goes here...
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
    Third panel content goes here...
  </section>
  <section role="tabpanel" aria-hidden="true" class="content" id="panel2-4">
    Fourth panel content goes here...
  </section>
</div>
			</textarea>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Vertical Tabs</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			
			<ul class="tabs vertical" data-tab role="tablist">
				<li class="tab-title active"><a href="#panel2-1" role="tab" tabindex="0" aria-selected="true" controls="panel2-1">Tab 1</a></li>
				<li class="tab-title" role="presentational" ><a href="#panel2-2" role="tab" tabindex="0"aria-selected="false" controls="panel2-2">Tab 2</a></li>
				<li class="tab-title" role="presentational"><a href="#panel2-3" role="tab" tabindex="0" aria-selected="false" controls="panel2-3">Tab 3</a></li>
				<li class="tab-title" role="presentational" ><a href="#panel2-4" role="tab" tabindex="0" aria-selected="false" controls="panel2-4">Tab 4</a></li>
			</ul>
			<div class="tabs-content">
				<section role="tabpanel" aria-hidden="false" class="content active" id="panel2-1">
					<p>First panel content goes here...</p>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel2-2">
					<p>Second panel content goes here...</p>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel2-3">
					<p>Third panel content goes here...</p>
				</section>
				<section role="tabpanel" aria-hidden="true" class="content" id="panel2-4">
					<p>Fourth panel content goes here...</p>
				</section>
			</div>

		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>You can create a group of vertical tabs using minimal markup. Just adding the class <kbd>.vertical</kbd> changes the orientation of horizontal tabs.</p>
			</div>
			<textarea class="code">
<dl class="tabs vertical" data-tab>
  <dd class="active"><a href="#panel1">Tab 1</a></dd>
  <dd><a href="#panel2">Tab 2</a></dd>
  <dd><a href="#panel3">Tab 3</a></dd>
  <dd><a href="#panel4">Tab 4</a></dd>
</dl>
<div class="tabs-content">
  <div class="content active" id="panel1">
    This is the first panel.
  </div>
  <div class="content" id="panel2">
    This is the second panel.
  </div>
  <div class="content" id="panel3">
    This is the third panel.
  </div>
  <div class="content" id="panel4">
    This is the fourth panel.
  </div>
</div>
			</textarea>
		</div>
	</div>

</section>


