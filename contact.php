<?php 
$page="contact";
include('inc/header.php');?>

	<div class="inner-header">
		<div class="container">
			<h1>Contact</h1>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="span9">
				<div id="page-content">
					<p class="lead">Whether you are stopping by just to say ‘hi’ or to talk about your next project, please fill out the form below and I will be in touch.</p>				
					
					<hr>
					
					<div id="message"></div>
										
					<form method="post" action="contact-process.php" name="contactform" id="contactform" class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="name"><span class="text-warning">*</span> What's your name?</label>
								<div class="controls">
									<input type="text" id="name" placeholder="Name" class="span5">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="email"><span class="text-warning">*</span> What's your email address?</label>
								<div class="controls">
									<input type="email" id="email" placeholder="Email" class="span5">
								</div>
							</div>
						  
							<div class="control-group">
								<label class="control-label" for="projecttype">Do you need help with a project?</label>
								<div class="controls">
									<select name="projecttype" id="projecttype" class="span5">
										<option value="Select a type">Select a project</option>
										<option value="Branding">Branding</option>
										<option value="Print">Print</option>
										<option value="Web Design">Web Design</option>
										<option value="Web Development">Web Development</option>
										<option value="Web Design + Web Development">Web Design + Web Development</option>
										<option value="Consulting">Consulting</option>
										<option value="Not sure what I need yet">Not sure what I need yet</option>
									</select>
								</div>
							</div>
								
							<div class="control-group">
								<label class="control-label" for="timeframe">What is your time frame?</label>
								<div class="controls">
									<select name="timeframe" id="timeframe" class="span5">
										<option value="Select a time frame">Select a time frame</option>
										<option value="Within 2 Months">Within 2 Months</option>
										<option value="Within 4 Months">Within 4 Months</option>
										<option value="Within 6 Months">Within 6 Months</option>
										<option value="Whenever">Whenever</option>
									</select>
								</div>
							</div>
								
							<div class="control-group">
								<label class="control-label" for="budget">What is your budget?</label>
								<div class="controls">
									<select name="budget" id="budget" class="span5">
										<option value="Select a budget">Select a budget</option>
										<option value="Under $1,000">Under $1,000</option>
										<option value="$1,000 to $5,000">$1,000 to $5,000</option>
										<option value="$5,000 to $10,000">$5,000 to $10,000</option>
										<option value="$10,000 to $15,000">$10,000 to $15,000</option>
										<option value="$15,000 +">$15,000 +</option>
									</select>
								</div>
							</div>
								
							<div class="control-group">
								<label class="control-label" for="comments"><span class="text-warning">*</span> What's on your mind?</label>
								<div class="controls">
									<textarea name="comments" id="comments" rows="8" class="span5"></textarea>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="verify"><span class="text-warning">*</span> What's two plus two?</label>
								<div class="controls">
									<input type="text" id="verify" class="span5"><br>
									<small class="muted">Just a simple test to verify that you're human.</small>
								</div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="submit"></label>
								<div class="controls">
									<button type="submit" id="submit" class="btn btn-primary btn-large">Send It</button>
								</div>
							</div>
					</form>
				
				</div>
			</div>
		
			<?php include('inc/sidebar.php');?>
		</div>
	</div>
<?php include('inc/footer.php');?>