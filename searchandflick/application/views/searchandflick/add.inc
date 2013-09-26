<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
			<div class="span12" id="s12top">
    			<div class="span4 offset4 well">
					<img class="effect8" id="sandf" src="/searchandflick/join_files/images/sf.png" alt="Search and flick" />
						<legend class="center shadow">You wanna add a new user?</legend>
							<div class="centeraddform">
								<?php echo validation_errors('<p class="error">'); ?>
								 <?php echo form_open("user/memberadd"); ?>
								  <p>
								  <label for="user_name">User Name:</label>
								  <input type="text" id="user_name" name="user_name" value="<?php echo set_value('user_name'); ?>" />
								  </p>
								  <p>
								  <label for="email_address">Your Email:</label>
								  <input type="text" id="email_address" name="email_address" value="<?php echo set_value('email_address'); ?>" />
								  </p>
								  <p>
								  <label for="password">Password:</label>
								  <input type="password" id="password" name="password" value="<?php echo set_value('password'); ?>" />
								  </p>
								  <p>
								  <label for="con_password">Confirm Password:</label>
								  <input type="password" id="con_password" name="con_password" value="<?php echo set_value('con_password'); ?>" />
								  </p>
								  <p>
								  <input type="submit" class="btn-primary span9" value="Submit"/>
								  </p>
								 <?php echo form_close(); ?>
							</div>
				</div> <!-- end span4 offset 3 -->
			</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
</div> <!-- end first row  -->