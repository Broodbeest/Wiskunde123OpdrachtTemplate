<!doctype html>
<html>
		
				<?php 
					if(isset($_GET['p']) && !empty($_GET['p']))							
						{	
						include('include/header.php');	
						?>
	
	<div class="row"><!-- dit is de row waarin de taak met de sidebar zit -->
	
			<div class="col-md-8"><!-- dit is de div waarin de taak -->	
					<?php 			
							include('taken/'.$_GET['p'].'.php');		
							?>
			</div><!-- /dit is de div waarin de taak -->
			
			<div class="col-md-4"><!-- dit is de div waarin de sidebar zit -->
					<?php
							include('include/sidebar.php');
							?>
			</div><!-- /dit is de div waarin de sidebar zit -->
			
	</div><!-- /dit is de row waarin de taak met de sidebar zit -->
				
					<?php
							include('include/footer.php');
							}
							?>		
						
</html>


<!--  De opbouw van de pagina is als volgt: eerst wordt de header opgehaald, dan wordt er een row aangemaakt, waarin de taak en de sidebar staan. Dan wordt die row afgesloten. En tot slot wordt de footer aangeroepen.