<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
			<div class="span12" id="s12top">
    				<div class="span4 offset4 well">
						<img id="sflogo" class="effect8" id="sandf" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" />
						<?php echo validation_errors(); ?>
					   	<?php echo form_open('verifylogin'); ?>
					     <label for="username">Username:</label>
					     <input type="text" size="20" id="username" name="username"/>
					     <br/>
					     <label for="password">Password:</label>
					     <input type="password" size="20" id="passowrd" name="password"/>
					     <br/>
					     <input type="submit" value="Login"/>
					   </form>
					</div> <!-- end span4 offset 3 -->
			</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
</div> <!-- end first row  -->