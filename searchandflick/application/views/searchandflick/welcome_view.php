<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    			<div class="span12" id="s12top">
					<div class="span5 offset4">
						<img class="effect8" id="sandf" src="/searchandflick/join_files/images/sf.png" alt="Search and flick" />
					</div>
					<div class="row-fluid" id="row-fluid3">
						<div class="span6 offset3">
							<h2>Welcome Back, <?php echo $this->session->userdata('user_name'); ?>!</h2>
  							<p class="shadow">This section represents the area that only logged in members can access.</p>
							<p class="green">What would you like to do?.</p>
							<div class="pushleftmore">
								<a href="logout">Logout</a> | <a href="gallery">Continue</a> | <a href="memberadd">Add User</a> | <a href="deleteuser">Delete User</a> | <a href="showdetails">Show Details</a>
							</div>						
						</div> <!-- end span12 modal-block <div> -->
					</div> <!-- end row-fluid3 -->
				</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->