<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
			<div class="span12" id="s12top">
    			<div class="span4 offset4 well">
					<img class="effect8" id="sandf" src="/join_files/images/sf.png" alt="Search and flick" />
						<legend class="center shadow">You wanna add a new user?</legend>
							<div class="centeraddform">
								<?php
									echo validation_errors('<p class="error">');
									echo form_open('user/memberadd');
									echo '<label for="username">Username:</label>';
									echo form_input('username');
									echo '<label for="email">Email:</label>';
									echo form_input('email', set_value('email', ''));
									echo '<label for="password">Password:</label>';
									echo form_password('password', '');
									echo '<label for="password2">Password Confirmation:</label>';
									echo form_password('password2', '');
									echo form_submit('submit', 'Submit', 'class="btn-primary span9"');
									echo form_close();
								?>
							</div>
				</div> <!-- end span4 offset 3 -->
			</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->
</div> <!-- end first row  -->