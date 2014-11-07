<!--	 Basic Field Types	-->
<section>
	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-pattern-heading">Forms</h4>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">HTML5 Fields</h4>
		</div>
	</div>

	<div class="row">
		<div class="medium-8 columns">

			<div class="row">
				<div class="medium-4 columns">
					
					<label for="textField">Text field</label>
					<input name="textField" type="text" placeholder="text" />

					<label for="emailField">Email field</label>
					<input name="emailField" type="email" autocapitalize="off" autocorrect="off" placeholder="email" />

					<label for="passwordField">Password field</label>
					<input name="passwordField" type="password" placeholder="password" />
					
					<label for="telField">Tel field</label>
					<input name="telField" type="tel" placeholder="tel" />

				</div>
				<div class="medium-4 columns">

					<label for="urlField">URL field</label>
					<input name="urlField" type="url" placeholder="url" />

					<label for="numberField">Number field</label>
					<input name="numberField" type="number" min="0" max="10" value="5" />

					<label for="searchField">Search field</label>
					<input name="searchField" type="search" placeholder="search" />

					<label for="dateField">Date field</label>
					<input name="dateField" type="date" />
				
				</div>
				<div class="medium-4 columns">

					<label for="textareaField">Textarea</label>
					<textarea name="textareaField" rows="" placeholder="Enter in your info"></textarea>	

					<label for="selectField">What is your name?</label>
					<select name="selectField">
						<option disabled selected>Select an option</option>
						<option value="Lancelot">Sir Lancelot of Camelot</option>
						<option value="Robin">Sir Robin of Camelot</option>
						<option value="Galahad">Sir Galahad of Camelot</option>
						<option value="Arthur">Arthur, King of the Britons</option>
					</select>

					<label>What is your quest?</label>
					<input id="checkbox1" type="checkbox" checked><label for="checkbox1">To seek the holy grail</label><br>
					<input id="checkbox3" type="checkbox"><label for="checkbox3">I don't know</label><br>
					
					<br>
					<label>What is the airspeed velocity of an unladen swallow?</label>
					<input type="radio" name="color" value="Blue" id="blue"><label for="blue">24 mph</label>
					<input type="radio" name="color" value="Yellow" id="red"><label for="red">I don't know</label>


				</div>
			</div>
		</div>
		<div class="medium-4 columns">
			<div class="spacer-20"></div>
			<div class="panel">
				<p>
					<strong>SCSS:</strong> <kbd>components/_forms</kbd>
				</p>
				<p>
					<strong>Important!</strong><br>
					Use the correct HTML5 input types.  The input type effects the keyboard shown on touch devices.
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Inline Labels</h4></div>
	</div>
	<div class="row">
		<div class="medium-5 columns">
			
			<div class="row">
				<div class="small-3 columns">
					<label for="right-label" class="right inline">Inline Label</label>
				</div>
				<div class="small-9 columns">
					<input type="text" id="right-label" placeholder="Inline Text Input">
				</div>
			</div>

		</div>
		<div class="medium-4 medium-offset-3 columns">
			<textarea class="code">
<div class="row">
  <div class="small-3 columns">
    <label for="right-label" class="right inline"></label>
  </div>
  <div class="small-9 columns">
    <input type="text" id="right-label" />
  </div>
</div>
			</textarea>
		</div>
	</div>



	<div class="row">
		<div class="medium-12 columns"><h4 class="styleguide-subpattern-heading">Error States</h4></div>
	</div>
	<div class="row">
		<div class="medium-5 columns">

			<label for="errorField" class="error">Error</label>
			<input name="errorField" type="text" class="error" />
			<small class="error">Put your error message here</small>

		</div>
		<div class="medium-4 medium-offset-3 columns">
			<div class="panel">
				<p>Add class <kbd>error</kbd> to label and input.</p>
				<p>Error message is wrapped in <kbd>small class="error"</kbd>.</p>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="small-12 columns">
			<h4 class="styleguide-subpattern-heading">Pre/Postfix Labels</h4>
		</div>
	</div>
	<div class="row">
		<div class="medium-4 columns">
			
			<label>Prefix element</label>
			<div class="row collapse">
				<div class="small-3 large-2 columns">
					<span class="prefix">http://</span>
				</div>
				<div class="small-9 large-10 columns">
					<input type="text" placeholder="Enter your URL...">
				</div>
			</div>

		</div>
		<div class="medium-4 columns">

			<label>Postfix element</label>
			<div class="row collapse">
				<div class="small-9 large-10 columns">
					<input type="text" placeholder="">
				</div>
				<div class="small-3 large-2 columns">
					<span class="postfix">.com</span>
				</div>
			</div>

		</div>
		<div class="medium-4 columns">
		<br>
			<textarea class="code">
<label>Prefix</label>
<div class="row collapse">
  <div class="small-3 large-2 columns">
    <span class="prefix"></span>
  </div>
  <div class="small-9 large-10 columns">
    <input type="text" />
  </div>
</div>
			</textarea>

			<textarea class="code">
<label>Postfix</label>
<div class="row collapse">
  <div class="small-3 large-2 columns">
    <span class="prefix"></span>
  </div>
  <div class="small-9 large-10 columns">
    <input type="text" />
  </div>
</div>
			</textarea>

		</div>
	</div>


</section>
