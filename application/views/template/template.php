<?php 
	include_once('template_header.php');
?>
<div id="inner_wrapper" style="margin-top:2%;">  		
	<?php $this -> load -> view($content_view); ?>       
</div>
<div id="bottom_ribbon">
	<div id="footer">
	<?php 
		include_once('template_footer.php');
	?>
	</div>
</div>
