<div class="row">    
	<div class="col-md-12">
	<?php
		$hal = $_GET['hal'];
		if(!empty($hal)) {
			include_once $hal.'.php';
		} else {
			include_once $hal.'home.php';
		}
		?>
	</div>
</div>