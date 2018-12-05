<?php

?>

<div class="container">
	<div class="col-12 mx-auto text-center mt-2">
		<div class="btn-group" role="group" aria-label="functions">
		  <button type="button" id="adview" class="btn btn-dark">ADMIN VIEW</button>
		  <button type="button" id="userview" class="btn btn-dark">USER MANAGEMENT</button>
		</div>
	</div>
</div>


<script>

	$("#adview").click(function(){
    	$("#user_management").hide(500);
    	$("#admin_content").show(500);
	});

	$("#userview").click(function(){
    	$("#admin_content").hide(500);
    	$("#user_management").show(500);
	});

</script>

<?php

?>