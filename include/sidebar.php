<!-- Blog Sidebar Widgets Column -->


	<!-- Blog Search Well 
		<div class="well tekstblok theorie">
		<h4>Zoek</h4>
		<div class="input-group">
			<input type="text" class="form-control">
			<span class="input-group-btn">
				<button class="btn btn-default" type="button">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			</span>
		</div>
		
	</div>
	-->

	<!-- Blog Categories Well -->
	<div class="well tekstblok theorie">
		<h4 id="inhoud">							<?php 
								echo $taaknaam;
								?></h4>

<p>
				<ul>
					<?php
						foreach($doorverwijzingen as $link => $tekst)
						{
						?>
						<li><a href="<?php echo $link;?>"><?php echo $tekst; ?></a></li>
						<?php
						}
					?>
				</ul>
</p>
	
	
	</div>

	<!-- Side Widget Well -->
	<div class="well tekstblok theorie">
		<img src="../afbeeldingen/algemeen/bron1.jpg" alt="bron1" width="" height="" />
	</div>


