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
						<legend style="text-align:center">Registration Successful! Login</legend>
							<div class="centerformmore">
								<?php echo form_open("user/login"); ?>
								  <label for="email">Email:</label>
								  <input type="text" id="email" name="email" class="span7" value="" />
								  <label for="pass">Password:</label>
								  <input type="password" id="pass" name="pass" class="span7" value="" />
								  <br />
								  <input type="submit" class="btn-primary span7" value="Sign in" />
								 <?php echo form_close(); ?>
						   </div>
						</div> <!-- end span12 modal-block <div> -->
					</div> <!-- end row-fluid3 -->
				</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->