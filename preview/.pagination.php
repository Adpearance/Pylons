<!-- Pagination	-->

<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Pagination</h4>
		</div>
	</div>

	<div class="row">
		<div class="medium-4 columns">
			
			<h4 class="styleguide-subpattern-heading">Basic</h4>
			
			<hr>
			<ul class="pagination" role="menubar" aria-label="Pagination">
				<li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
				<li class="current"><a href="">1</a></li>
				<li><a href="">2</a></li>
				<li><a href="">3</a></li>
				<li><a href="">4</a></li>
				<li class="arrow"><a href="">Next &raquo;</a></li>
			</ul>

			<h4 class="styleguide-subpattern-heading">Centered</h4>
			<hr>
			<div class="pagination-centered">
				<ul class="pagination" role="menubar" aria-label="Pagination">
					<li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
					<li class="current"><a href="">1</a></li>
					<li><a href="">2</a></li>
					<li><a href="">3</a></li>
					<li><a href="">4</a></li>
					<li class="arrow"><a href="">Next &raquo;</a></li>
				</ul>
			</div>	

		</div>


		<div class="medium-4 columns">
			<p>Add a <kbd>.pagination</kbd> class to a ul to get started, then add list items with links or buttons in them.</p>
			<p>
				<ul>
					<li><kbd>.current</kbd> Add to list item for current page</li>
					<li><kbd>.unavailable</kbd> Add to list item to make it not clickable</li>
					<li><kbd>.arrow</kbd> Add to the first and last list items</li>
				</ul>
			</p>

			<p><strong>To center</strong>: Wrap your ul.pagination with an element that has the <kbd>.pagination-centered</kbd> class.</p>
		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>components/_pagination</kbd></p>
				
				<p><strong>Accessibility</strong><br>
					Use the markup and aria attributes to give context to a screen reader.  <em>Note: This component still needs keyboard accessibility through arrow keys.</em> 
				</p>
			</div>
			<textarea class="code">
<ul class="pagination" role="menubar" aria-label="Pagination">
  <li class="arrow unavailable" aria-disabled="true"><a href="">&laquo; Previous</a></li>
  <li class="current"><a href="">1</a></li>
  <li><a href="">2</a></li>
  <li><a href="">3</a></li>
  <li><a href="">4</a></li>
  <li class="arrow"><a href="">Next &raquo;</a></li>
</ul>					
			</textarea>
		</div>
	</div>

</section>