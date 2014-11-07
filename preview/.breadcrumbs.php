<!-- Breadcrumbs	-->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Breadcrumbs</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-8 columns">
			<p>Add a class of <kbd>.breadcrumbs</kbd> to a nav or ul element. List items will automatically be styled, and you can add <kbd>.current</kbd> or <kbd>.unavailable</kbd> classes to list items to denote their state.</p>
			
			<nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
				<li role="menuitem"><a href="#">Home</a></li>
				<li role="menuitem"><a href="#">Parent Category</a></li>
				<li role="menuitem" class="unavailable" role="button" aria-disabled="true"><a href="#">Subcategory</a></li>
				<li role="menuitem" class="current"><a href="#">Page Title</a></li>
			</nav>


		</div>
		<div class="medium-4 columns">
			<div class="panel">
				<p><strong>SCSS:</strong> <kbd>components/_breadcrumbs</kbd></p>
				<p><strong>Accessibility</strong><br> Use the ARIA attributes in the markup to make breadcrumbs more screen reader friendly.</p>
			</div>
			<textarea class="code">
<nav class="breadcrumbs" role="menubar" aria-label="breadcrumbs">
  <li role="menuitem"><a href="#">Home</a></li>
  <li role="menuitem"><a href="#">Parent Category</a></li>
  <li role="menuitem" class="unavailable" role="button" aria-disabled="true"><a href="#">Subcategory</a></li>
  <li role="menuitem" class="current"><a href="#">Page Title</a></li>
</nav>				
			</textarea>
		</div>
	</div>
</section>



