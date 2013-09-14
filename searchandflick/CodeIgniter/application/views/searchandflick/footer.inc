
</div> <!-- end container-fluid -->
</div> <!-- end firstrow -->
<footer> <!-- end footer -->
	<div class="footer left">&copy; 2013 Searchandflick.com Powered by <span class="green">Flickr</span></div>
</footer>
<script src="/searchandflick/CodeIgniter/join_files/js/bootstrap.min.js"></script>
<script src="/searchandflick/CodeIgniter/join_files/js/jquery.reveal.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/searchandflick/CodeIgniter/join_files/js/jquery.reveal.js"></script>
<script>
    $(document).ready(function()
    {
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
    e.stopPropagation();
    });
    });
    </script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#button').click(function(e) { // Button which will activate our modal
			$('#modal').reveal({ // The item which will be opened with reveal
				animation: 'fade',                   // fade, fadeAndPop, none
				animationspeed: 600,                       // how fast animtions are
				closeonbackgroundclick: true,              // if you click background will modal close?
				dismissmodalclass: 'close'    // the class of a button or element that will close an open modal
			});
		return false;
		});
	});
</script>
<script type="text/javascript">
	$('form')[0].reset();
</script>
</body>
</html>