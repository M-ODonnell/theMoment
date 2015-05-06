<?php
	require_once('authenticate.php');
	require_once('header.php');
?>
<div class="container">
    <div class="row">
        <div class="u-full-width">
            <div class="white">
			<img style="float: right;" src="images/jigglyCropped.gif" alt="Jiggle Animation" />
		<form action="emotrack.php" method="POST">
			<legend>Survey</legend>

			<label for="esleep"><span class="label-body">Do you get enough sleep?</span>
			<br />

				<span class="label-body">
					<input type="radio" name="esleep" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="esleep" id="no" value="no" />
				No</span>
			</label>


			<label for="osleep"><span class="label-body">Do you sometimes oversleep?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="osleep" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="osleep" id="no" value="no" />
				No</span>
			</label>


			<label for="sad"><span class="label-body">Do you sometimes feel sad or depressed?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="sad" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="sad" id="no" value="no" />
				No</span>
			</label>


			<label for="aggro"><span class="label-body">Are you easily aggravated?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="aggro" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="aggro" id="no" value="no" />
				No</span>
			</label>


			<label for="high"><span class="label-body">Do you often get high?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="high" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="high" id="no" value="no" />
				No</span>
			</label>


			<label for="drunk"><span class="label-body">Do you often get drunk?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="drunk" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="drunk" id="no" value="no" />
				No</span>
			</label>


			<label for="stress"><span class="label-body">Do you ever stress over school work?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="stress" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="stress" id="no" value="no" />
				No</span>
			</label>


			<label for="fitin"><span class="label-body">Do you feel like you don't fit in?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="fitin" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="fitin" id="no" value="no" />
				No</span>
			</label>


			<label for="breakup"><span class="label-body">Have you recently gone through a break up?</span>
				<br />

				<span class="label-body">
					<input type="radio" name="breakup" id="yes" value="yes" />
				Yes</span>

				<span class="label-body">
					<input type="radio" name="breakup" id="no" value="no" />
				No</span>
			</label>



			<p>
			<input type="submit" name="submit" Value="Submit" />
			</p>
		</form>
            </div>
        </div>
    </div>
</div>




