 <!-- Dropdown -->

<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Dropdowns</h4>
		</div>
	</div>

	
	<div class="row">
		<div class="medium-8 columns">
			
			<h4 class="styleguide-subpattern-heading">Basic</h4><br>

			<!-- Link Dropdown -->
			<button data-dropdown="drop1a">Dropdown with list of links</button>
			<ul id="drop1a" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>
			&nbsp;

			<!-- Content Dropdown -->
			<button data-dropdown="drop2a">Dropdown with content</button>
			<div id="drop2a" class="medium f-dropdown content" data-dropdown-content >
				<div class="row">
					<div class="medium-4 columns">
						<img src="http://cl.ly/image/1R2d0O1p0D3z/beet.jpg" alt="" />
					</div>
					<div class="medium-8 columns"><p>The beet is the most intense of vegetables. The radish, admittedly, is more feverish, but the fire of the radish is a cold fire, the fire of discontent not of passion. Tomatoes are lusty enough, yet there runs through tomatoes an undercurrent of frivolity. Beets are deadly serious.</p></div>
				</div>
			</div>
			
			<div class="spacer-20"></div>

			<p>
				<strong>Advanced Styles:</strong> Additional classes can be added to your dropdown to change its appearance.
				<ul>
					<li><kbd>.tiny</kbd> max-width of 200px</li>
					<li><kbd>.small</kbd> max-width of 300px</li>
					<li><kbd>.medium</kbd> max-width of 500px</li>
					<li><kbd>.large</kbd> max-width of 800px</li>
					<li><kbd>.mega</kbd> full 100% width</li>
					<li><kbd>.content</kbd> for better-looking content</li>
				</ul>
			</p>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>
					<strong>SCSS:</strong> <kbd>components/_dropdowns</kbd>
				</p>
				<p>Dropdowns are a universal Foundation plugin that will attach dropdowns or popovers to whatever element you need. <strong>On a small device, the tooltips are full-width and bottom aligned.</strong></p>
			</div>

			<label>Link Dropdown</label>
			<textarea class="code">
<a data-dropdown="drop1">Dropdown with list of links</a>
<ul id="drop1" class="f-dropdown" data-dropdown-content>
	<li><a href="#">This is a link</a></li>
	<li><a href="#">This is another</a></li>
</ul>
			</textarea>

			<label>Content Dropdown</label>
			<textarea class="code">
<a data-dropdown="drop2">Dropdown with content</a>
<div id="drop2" class="f-dropdown content" data-dropdown-content>
	<p>Dropdown content</p>
</div>
			</textarea>
		</div>
	</div>
	
	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Directions</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<p>You can position dropdowns by specifiying the <kbd>align</kbd> property in <kbd>data-options</kbd> of the target element. The default position is bottom.</p>

			<!-- top	 -->
			<a href="#" class="button" data-dropdown="topDrop" data-options="align:top">Top</a>
			<ul id="topDrop" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>

			<!-- left -->
			<a href="#" class="button" data-dropdown="leftDrop" data-options="align:left">Left</a>
			<ul id="leftDrop" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>

			<!-- down -->
			<a href="#" class="button" data-dropdown="downDrop">Down</a>
			<ul id="downDrop" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>

			<!-- right -->
			<a href="#" class="button" data-dropdown="rightDrop" data-options="align:right">Right</a>
			<ul id="rightDrop" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>
		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<a href="#" data-options="align:left" data-dropdown="drop" class="button">Left Dropdown</a>
<ul id="drop" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
</ul>
			</textarea>
		</div>
	</div>
	

	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">On Hover</h4></div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<p>If you'd rather have your dropdown be accessible by hover, you can add <kbd>is_hover:true</kbd> to the <kbd>data-option</kbd> of the target element.</p>
			
			<a href="#" data-dropdown="hover1" data-options="is_hover:true">Has Hover Dropdown</a>
			<ul id="hover1" class="f-dropdown" data-dropdown-content>
				<li><a href="#">This is a link</a></li>
				<li><a href="#">This is another</a></li>
				<li><a href="#">Yet another</a></li>
			</ul>


		</div>
		<div class="medium-4 columns">
			<textarea class="code">
<ul id="hover1" class="f-dropdown" data-dropdown-content>
  <li><a href="#">This is a link</a></li>
  <li><a href="#">This is another</a></li>
  <li><a href="#">Yet another</a></li>
</ul>
			</textarea>
		</div>
	</div>

</section>


