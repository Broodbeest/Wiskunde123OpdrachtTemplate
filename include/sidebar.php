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
		<h4>Andere uitleg en oefening:</h4>
		<ul>
			<li>
				<a href="http://www.beterrekenen.nl/website/index.php?pag=1">beterrekenen.nl</a>
			</li>
			<li>
				<a href="http://www.sommenfabriek.nl">sommenfabriek.nl</a>
			</li>
			<li>
				<a href="http://wiskundeacademie.nl">Wiskundeacademie.nl</a>
			</li>
			<li>
				<a href="http://www.studiowiskunde.nl">StudioWiskunde.nl</a>
			</li>
			<li>
				<a href="http://www.opzoekboekjewiskunde.nl/index.php">opzoekboekjewiskunde.nl</a>
			</li>
			<li>
				<a href="http://www.sommenprinter.nl">sommenprinter.nl</a>
			</li>
		</ul>
		<br>
		<h4>Andere methoden:</h4>
			<ul>
				<li>
					<a href="http://www.math4all.nl">math4all.nl</a>
				</li>
				<li>
					<a href="https://www.slimleren.nl/site">Slimleren.nl</a>
				</li>
				<li>
					<a href="http://nl.bettermarks.com">Bettermarks.nl</a>
				</li>
			</ul>
	</div>

	<div class="well tekstblok theorie">
		<!--<img src="../afbeeldingen/algemeen/bron1.jpg" alt="bron1" width="" height="" />-->
	</div>
