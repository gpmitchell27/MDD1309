</div>
<footer>
	<div class="footerleft">&copy Bootstrap.com</div>
</footer>

<script src="/searchandflick/CodeIgniter/join_files/js/bootstrap.min.js"></script>
<script src="/searchandflick/CodeIgniter/join_files/js/jquery.reveal.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="/searchandflick/CodeIgniter/join_files/js/jquery.reveal.js"></script>
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
</body>
</html>