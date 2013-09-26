<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    			<div class="span12" id="s12top">
					<div class="span5 offset4">
						<img class="effect8" id="sandf" src="/searchandflick/join_files/images/sf.png" alt="Search and flick" />
					</div>
					<div class="row-fluid" id="row-fluid3">
						<div class="span6 offset3 well">
						<legend style="text-align:center">Login UnSuccessful, Try again</legend>
						<div class="centerform">
						<?php echo validation_errors('<p class="error">'); ?>
								 <?php echo form_open("login"); ?>
								  <label for="email_address">Your Email:</label>
								  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
								  </p>
								  <p>
								  <label for="password">Password:</label>
								  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
								  </p>
								  <p>
								  <input type="submit" class="greenButton" value="Submit" />
								  </p>
								  <p>
								 <?php echo form_close(); ?>
					   </div>
						</div> <!-- end span12 modal-block <div> -->
					</div> <!-- end row-fluid3 -->
				</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->