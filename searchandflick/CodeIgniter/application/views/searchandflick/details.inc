<div class="row-fluid" id="first_row">
	<header class="span12 hero-unit effect8" id="header_class">
		<div class="row-fluid" id="row-fluid2">
			<p class="shadow grey2" id="pstyle">An educational application for FullSail University made by Greg Mitchell. Flickr Api to pull images from flickr.com</p>
    			<div class="span12" id="s12top">
    				
					<div class="span5 offset4">
						<img class="effect8" id="sandf" src="/searchandflick/CodeIgniter/join_files/images/sf.png" alt="Search and flick" />
					</div>
					<a href='welcome'>Home</a> | 
            	<a href='logout'>Logout</a>
					<div class="row-fluid" id="row-fluid3">
						
					<?php
					echo "<div class='list'>";
					foreach($mydata['mydata'] as $data){

        		echo "<div class='pull-left addforms well'><form action='updateuser' method='post'>
                <p style='text-align:right'>Username: <input type='text' name='id' value='$data->username'</p>
                <p style='text-align:right'>Address: <input type='text' name='address' size='20' value='$data->address'</p>
                <p style='text-align:right'>City: <input type='text' name='city' value='$data->city'</p>
                <p style='text-align:right'>State: <input type='text' name='state' value='$data->state'</p>
                <p style='text-align:right'>Phone: <input type='text' name='phone' value='$data->phone'</p>
                <p style='text-align:right'>Favorite color: <input type='text' name='favcolor' value='$data->favcolor'</p>
                <p style='text-align:right'>Zodiac: <input type='text' name='zodiac' value='$data->zodiac'</p>
                <p style='text-align:right'>Status: <input type='text' name='status' value='$data->status'</p>

                <br />
                <input type='submit' name='submit' value='submit'/>
                <input type='submit' name='delete' value='delete'/><br />                
            	</form>
           		 </div>";    
           		}
					?>
					</div> <!-- end span12 modal-block <div> -->
				</div> <!-- end row-fluid3 -->
			</div> <!-- end row-fluid -->
		</div> <!-- end row-fluid2 -->
	</header> <!-- end header -->