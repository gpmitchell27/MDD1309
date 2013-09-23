<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
			<div class="span12" id="s12top">
    			<div class="span4 offset4 well">
					<img class="effect8" id="sandf" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" />
						<legend class="center shadow">New to Search and Flick? Sign up!</legend>
							<div class="centeraddform">
								<?php echo validation_errors('<p class="error">'); ?>
								 <?php echo form_open("user/login"); ?>
								<label for="email">Email:</label>
								<input type="text" id="email" name="email" class="span9" value="" required/>
								<label for="password">Password:</label>
								<input type="password" id="pass" name="pass" class="span9" value="" required/>
								<input type="submit" class="btn-primary span9" value="Sign in" />
								<?php echo form_close(); ?>
						</div>
				</div> <!-- end span4 offset 3 -->
			</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
</div> <!-- end first row  -->