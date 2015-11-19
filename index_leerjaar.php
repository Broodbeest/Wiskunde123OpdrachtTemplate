<!doctype html>
<html>
		

		<?php 
			if(isset($_GET['p']) && !empty($_GET['p']))							
			{	
				include('include/header.php');				
				include('leerjaar/'.$_GET['p'].'.php');

				include('include/footer.php');
			}
		?>		
								
</html>
