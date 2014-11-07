<!-- Lists -->
<section>
	<div class="row">
		<div class="small-12 columns"><h4 class="styleguide-pattern-heading">Lists</h4></div>
	</div>	
	<div class="row">
		<div class="medium-3 columns">
			<h4 class="styleguide-subpattern-heading">Inline Lists</h4>
		</div>
		<div class="medium-3 columns">
			<h4 class="styleguide-subpattern-heading">Definition List</h4>
		</div>
		<div class="medium-2 columns">
			<h4 class="styleguide-subpattern-heading">Inline List</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-3 columns">
			<ul>
				<li>This is a list item in an unordered list</li>
				<li>An unordered list is a list in which the sequence of items is not important. And this is a long list item in an unordered list that can wrap onto a new line. </li>
				<li>
					Lists can be nested inside of each other
					<ul>
						<li>This is a nested list item</li>
						<li>This is another nested list item</li>
					</ul>
				</li>
				<li>This is the last list item</li>
			</ul>
			<ol>
				<li>This is a list item in an ordered list</li>
				<li>An ordered list is a list in which the sequence of items is important.</li>
				<li>
					Lists can be nested inside of each other
					<ol>
						<li>This is a nested list item</li>
						<li>This is another nested list item</li>
					</ol>
				</li>
				<li>This is the last list item</li>
			</ol>
		</div>
		<div class="medium-3 columns">
			<dl>
				<dt>Definition List</dt>
				<dd>A number of connected items or names written or printed consecutively, typically one below the other.</dd>

				<dt>This is a term.</dt>
				<dd>This is the definition of that term, which both live in a <code>dl</code>.</dd>

				<dt>Here is another term.</dt>
				<dd>And it gets a definition too, which is this line.</dd>

				<dt>Here is term that shares a definition with the term below.</dt>
				<dd>And it gets a definition too, which is this line.</dd>
			</dl>
		</div>
		<div class="medium-2 columns">
			<ul class="inline-list">
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
				<li><a href="#">Link</a></li>
			</ul>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p>
					<strong>SCSS:</strong> <kbd>base/_type</kbd>
				</p>
			</div>
			<textarea class="code">
<ul>
  <li></li>
</ul>				
			</textarea>
			<textarea class="code">
<ol>
  <li></li>
</ol>					
			</textarea>
			<textarea class="code">
<dl>
  <dt></dt>
  <dd></dd>
</dl>				
			</textarea>
			<textarea class="code">
<ul class="inline-list">
  <li></li>
</ul>			
			</textarea>
		</div>
	</div>
</section>
