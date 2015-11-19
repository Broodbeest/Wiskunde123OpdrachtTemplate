<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Lineaire verbanden',
	 '#theorieA' => 'Lineaire formules',
	 '#theorieB' => 'Van tabel naar formule',
	 '#theorieC' => 'Formules bij grafieken maken',
	 '#theorieD' => 'Grafieken tekenen met behulp van een tabel',
	 '#proeftoets' => 'Proeftoets');  
?>

<div class="taakinhoud">

<!-- nog toevoegen aan het einde: grafiek tekenen rechtstreeks uit de formule door juiste interpretatie hellingsgetal. En meer oefeningen en visueel met van een opzij hellingsgetal omhoog. -->




<title>Leerjaar 2 | Lineaire verbanden (havo/vwo)</title>

<!-- eventueel extra assenstelsels met meerdere grafieken door elkaar, zoals bv uit toetsmateriaal g&R 1hv en 1v over dit onderwerp, en meer opgaven met minder tussenstappen/invul oefeningen -->

<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Lineaire verbanden</h3>
	<div class="row">
		<div class="col-xs-8">
		<p>
			In de grafiek is het verband tussen de <em>tijd</em> (aantal weken) en het <em>Bedrag</em> (euro's) weergegeven. De grafiek is een rechte lijn.
		</p>
		<p>
			Het verband tussen het <em>aantal weken</em> en het <em>bedrag</em> is een <b>lineair verband</b>. Bij dit verband kun je een <b>lineaire formule</b> maken. Voor een lineaire formule is een <span id="hellingsgetal">hellingsgetal</span> en een <span id="startgetal">startgetal</span> nodig.
		</p>
		<p>
			Het <span id="hellingsgetal">hellingsgetal</span> is de regelmaat van het verband. In de grafiek zie je dat aan de rechte lijn. In een tabel zie je dat <em>B</em> telkens met 2 groeit, als <em>w</em> met 1 toeneemt. 
		</p>
		<p>
			Het <span id="startgetal">startgetal</span> is de <em>y</em>-coördinaat van het snijpunt van de grafiek met de verticale as. In de tabel kun je dit getal aflezen onder <em>w</em> = 0.
		</p>
		</div>          
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_2/lineair_verband.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>
		
	<div class="table-responsive verhouding">
		<table class="verhouding">
			<thead>
				<tr>
					<th colspan="2"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th colspan="2">+ 1<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr class="borderbottom">
					<td><em>w</em></td>
					<td colspan="2">0</td>
					<td colspan="2">1</td>
					<td colspan="2">2</td>
					<td colspan="2">3</td>
					<td colspan="2">4</td>
					<td colspan="2">5</td>
				</tr>
				<tr>
					<td><em>B</em></td>
					<td colspan="2"><span id="startgetal">5</span></td></td>
					<td colspan="2">7</td>
					<td colspan="2">9</td>
					<td colspan="2">11</td>
					<td colspan="2">13</td>
					<td colspan="2">15</td>
				</tr>			
			</tbody>
			<tfoot>
				<tr >
					<th colspan="2"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>	
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
					<th></th>
				</tr>
			</tfoot>	
		</table>
	</div>
	<p>
	 	Bij dit lineair verband kun je de volgende <b>formule</b> maken:
	 </p>
	<p>
		<em>B</em> = <span id="hellingsgetal">2</span><em>w</em> +  <span id="startgetal">5</span>
	</p>
	<p>
		Met <code>B</code> voor het <code>bedrag in €</code> en <code>w</code> voor het <code>aantal weken</code>.
	</p>
	<p class="geeltje">
		Merk op dat <em>2w</em> staat voor <em>2</em> &times; <em>w</em> of <em>2</em> &sdot; <em>w</em>. Het maalteken moet je weglaten.
	</p>	
</div>

<div class="tekstblok opdracht" id="opdracht_1">
	<h3>Opdracht 1 Sterren</h3>
	<p>
		Hieronder zie je een rij met sterren. 
		<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_1.png" width="600px">
	</p>
	<ol>
		<li>Hoeveel sterren komen er steeds bij?</li>
		<li>Wat is het hellingsgetal?</li>
		<li>Uit hoeveel sterren bestaat de 6<sup>e</sup> figuur?</li>
		<li>Neem de tabel over en vul hem verder in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>nummer figuur</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
						</tr>
						<tr>
							<td><em>aantal sterren</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>	
						<tfoot>
							<tr >
								<th colspan="2">
									
								</th>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span>
								</th>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span>
								</th>
								<th colspan="2">
									<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span>
								</th>	
								<th>
									
								</th>
							</tr>
						</tfoot>			
					</tbody>
				</table>
			</div>	
		</li>
		<li>
			Hoeveel sterrren heeft het 0<sup>e</sup> figuur?
		</li>
		<li>
			Wat is het startgetal?
		</li>
		</li>
		<li>Welke formule past bij de rij?</li>
			<ol id="numbers">
				<li><em>S</em> = <span id="hellingsgetal">1</span><em>f</em> + <span id="startgetal">2</span></li>
				<li><em>S</em> = <span id="hellingsgetal">2</span><em>f</em> + <span id="startgetal">1</span></li>
			</ol>
		<li>
			Controleer je antwoord van de 6<sup>e</sup> figuur met de formule. Laat je berekening zien.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>2 sterren</li>
					<li>2</li>
					<li>13 sterren</li>
					<li>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>nummer figuur</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
									</tr>
									<tr>
										<td><em>aantal sterren</em></td>
										<td colspan="2"><span id="startgetal">1</span></td>
										<td colspan="2">3</td>
										<td colspan="2">5</td>
										<td colspan="2">7</td>
									</tr>	
									<tfoot>
										<tr >
											<th colspan="2">
												
											</th>
											<th colspan="2">
												<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span>
											</th>
											<th colspan="2">
												<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span>
											</th>
											<th colspan="2">
												<img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span>
											</th>	
											<th>
												
											</th>
										</tr>
									</tfoot>			
								</tbody>
							</table>
						</div>
					</li>
					<li>1 ster</li>
					<li>1</li>
					<li><em>S</em> = <span id="hellingsgetal">2</span><em>f</em> + <span id="startgetal">1</span></li>
					<li>2 x 6 + 1 = 13</li>
				</ol>
		</div>
	</div> 
</div>

<div class="tekstblok opdracht" id="opdracht_2">
	<h3>Opdracht 2 Spaargeld</h3>
	<p>	
		Stephan gaat naar de kermis. Hij moet entree betalen én per attractie. De entree is 5 euro. Alle attracties kosten 2 euro.
	</p> 
	<ol>
		<li>
			Stephan gaat in de botsauto's en het spookhuis. Hoeveel euro is hij kwijt?
		</li>
		<li>
			Hoeveel is hij kwijt als hij in 4 attracties gaat?
		</li>
		<li>
			Welke formules passen er bij dit verhaal?
			<div class="row">
				<div class="col-sm-6">
					<ol id="numbers">	
						<li><em>K</em> = <span id="hellingsgetal">5</span><em>a</em> + <span id="startgetal">2</span></li>
						<li><em>K</em> = <span id="hellingsgetal">2</span><em>a</em> + <span id="startgetal">5</span></li>
						<li><em>K</em> = <span id="hellingsgetal">5</span><em>a</em> + <span id="startgetal">7</span></li>
					</ol>
				</div>
				<div class="col-sm-6">
					<ol id="numbers" start="4">		
						<li><em>K</em> = <span id="hellingsgetal">7</span><em>a</em> + <span id="startgetal">5</span></li>
						<li><em>K</em> = 7 + <em>a</em></li>
						<li><em>K</em> = <span id="startgetal">5</span> + <span id="hellingsgetal">2</span><em>a</em></li>
					</ol>
				</div>
			</div>
		</li>
		<li>
			In hoeveel attracties kan hij als hij 22 euro mee heeft?
		</li>	
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				Stephan is dan 9 euro kwijt, want de twee attracties kosten samen 4 euro, maar dan moet hij ook nog de entree betalen van 5. En 4 + 5 = 9.
			</li>
			<li>
				`4 &times; 2 + 5 = 13`<br>
				Voor vier attracties is Stephan in totaal 13 euro kwijt.
			</li>
			<li>
				De volgende twee formules passen bij het verhaal:
				<ol id="numbers" start="2">	
					<li><em>K</em> = <span id="hellingsgetal">2</span><em>a</em> + <span id="startgetal">5</span></li>
				</ol>
				<ol id="numbers" start="6">		
					<li><em>K</em> = <span id="startgetal">5</span> + <span id="hellingsgetal">2</span><em>a</em></li>
				</ol>
			</li>
			<li>
				Voor 22 euro kan hij in acht attracties.<br>
				Als hij de entree betaald heeft, houdt hij `22 - 5 = 17`euro over.<br>
				Voor 17 euro kan hij acht attracties in. `17 : 2 = 8 1/2`<br>
				Hij houdt nog één euro over. 
			</li>	
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Lineaire formules</h3>
	<p>
		Bij een lineair verband kun je een <b>lineaire formule</b> maken. De <b>algemene vorm</b> van een lineaire formule is:
	</p>
	<p class="text-center">
		<nobr><em>y</em> = <span id="hellingsgetal">a</span><em>x</em> + <span id="startgetal">b</span></nobr>
	</p>
	<p>
		Waarbij <span id="hellingsgetal">a</span> het <span id="hellingsgetal">hellingsgetal</span> is en <span id="startgetal">b</span> het <span id="startgetal">startgetal</span>.
	</p>
	<br>
	<p>
		<u>Voorbeeld</u>:
	</p>	
	<p>
		<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>x</em> (<em>invoer</em>)</td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
					</tr>
					<tr>
						<td><em>y</em> (<em>uitvoer</em>)</td>
						<td colspan="2"><span id="startgetal">1</span></td>
						<td colspan="2">3</td>
						<td colspan="2">5</td>
						<td colspan="2">7</td>
						<td colspan="2">9</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
	</p>
	<p>
		Het <span id="startgetal">startgetal</span> is de <em>y</em>-waarde onder <em>x</em> = 0, in dit geval <span id="startgetal">1</span>. <br>
		Het <span id="hellingsgetal">hellingsgetal</span> is <span id="hellingsgetal">2</span>, omdat er steeds <span id="hellingsgetal">2</span> bij komt, zoals met pijlen is aangegeven.
	</p>
	<p>
		De formule bij dit lineaire verband is: <nobr><em>y</em> = <span id="hellingsgetal">2</span><em>x</em> + <span id="startgetal">1</span></nobr>
	</p>
	<p class="geeltje">
		Merk op dat <nobr><em>y</em> = <span id="hellingsgetal">2</span><em>x</em> + <span id="startgetal">1</span></nobr> gelijk is aan <nobr><em>y</em> = <span id="startgetal">1</span> + <span id="hellingsgetal">2</span><em>x</em></nobr>.
		<br>
		De formule met eerst het <span id="hellingsgetal">hellingsgetal</span> volgt de algemene formule en heeft de voorkeur.
	</p>
	
</div>

<div class="tekstblok opdracht" id="opdracht_3">
	<h3>Opdracht 3 Dropjes</h3>
	<p>
		<img src="afbeeldingen/analyse_leerjaar_2/dropjes.png"  width="300px">
	</p>
	<ol>
		<li>Uit hoeveel dropjes bestaat figuur 4?</li>
		<li>
			Uit hoeveel dropjes bestaat het 0<sup>e</sup> figuur? 
			<br>Neem over en vul in: <span id="startgetal">startgetal b</span> = ... 	
		</li>
		<li>
			Neem de tabel hieronder over en vul hem in.<br>
			<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>nummer figuur</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
					</tr>
					<tr>
						<td><em>aantal dropjes</em></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
		</li>
		<li>
			Neem over en vul in: <span id="hellingsgetal">hellingsgetal a</span> = ...
		</li>
		<li>
			Pas de formule <nobr><em>y</em> = <span id="hellingsgetal">a</span><em>x</em> + <span id="startgetal">b</span></nobr> aan zodat die klopt bij deze situatie. Neem <em>d</em> voor het <em>aantal dropjes</em> en <em>f</em> voor <em>nummer figuur</em>.
		</li>
		<li>
			Controleer je formule met de waarden van figuur nummer 3.
		</li>
		<li>
			Bereken met behulp van de formule uit hoeveel dropjes de 17<sup>e</sup> figuur bestaat.
		</li>
		
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>13 dropjes</li>
					<li><span id="startgetal">startgetal b</span> = <span id="startgetal">5</span></li>
					<li>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>nummer figuur</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
									</tr>
									<tr>
										<td><em>aantal dropjes</em></td>
										<td colspan="2"><span id="startgetal">5</span></td>
										<td colspan="2">7</td>
										<td colspan="2">9</td>
										<td colspan="2">11</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2"></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
										<th></th>
									</tr>
								</tfoot>	
							</table>
						</div>
					</li>
					<li>
						<span id="hellingsgetal">hellingsgetal a</span> = <span id="hellingsgetal">2</span>	
					</li>
					<li>
						<nobr><em>d</em>= <span id="hellingsgetal">2</span><em>f</em> + <span id="startgetal">5</span></nobr>
					</li>
					<li>
					<nobr><em>d</em>= <span id="hellingsgetal">2</span> &times; <em>3</em> + <span id="startgetal">5</span>= 11</nobr>
					</li>
					<li>
						<nobr><em>d</em>= <span id="hellingsgetal">2</span> &times; <em>17</em>  + <span id="startgetal">5</span> = 39</nobr>
					 </li>
				</ol>
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_4">
	<h3>Opdracht 4 Blokjes</h3>
	<p>
		<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_2.png" class="rightfloat" width="300px">
	</p>
	<ol>
		<li>
			Neem de tabel hieronder over en maak hem af.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>nummer figuur</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
						</tr>
						<tr>
							<td><em>aantal blokjes</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
		</li>
		<li>
			Neem over en vul in:<br>
			<span id="hellingsgetal">hellingsgetal a</span> = ... <br>
			<span id="startgetal">startgetal b</span> = ... 
		</li>
		<li>
			Maak de bijbehorende formule.
		</li>
		<li>
			Controleer je formule met figuur nummer 3.
		</li>
		<li>
			Bereken met behulp van de formule uit hoeveel blokken de 7<sup>e</sup> figuur bestaat.
		</li>
		<li>
			Zoek uit of er een figuur is met 29 blokjes. Schrijf op hoe je aan je antwoord bent gekomen.
			Neem over en vul in: Er bestaat wel/geen figuur met 29 blokjes.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Neem de tabel hieronder over en maak hem af.<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>nummer figuur</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
								</tr>
								<tr>
									<td><em>aantal blokjes</em></td>
									<td colspan="2"><span id="startgetal">2</span></td>
									<td colspan="2">5</td>
									<td colspan="2">8</td>
									<td colspan="2">11</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					Neem over en vul in:<br>
					<span id="hellingsgetal">hellingsgetal a</span> = 3<br>
					<span id="startgetal">startgetal b</span> = 2 
				</li>
				<li>
					`b=3f+ 2` (voorkeur)<br>
					of `b=2+3f`
				</li>
				<li>
					Als `f=3`, dan `b = 3 &times; 3 + 2 = 11`. Klopt met het plaatje!
				</li>
				<li>
					Als `f=7`, dan `b = 3 &times; 7 + 2 = 23`.	
				</li>
				<li>
					Er zijn 2 vaste blokjes. 29 blokjes - 2 vaste blokjes geeft nog 27 blokjes.<br>
					Er komen er steeds 3 blokjes bij. 27 kan ik precies door 3 delen.<br>
					Dus een figuur met 29 blokjes kan!
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_5">
	<h3>Opdracht 5 Formule maken</h3>
	<div class="row">
		<div class="col-xs-7">
		<p>
			Op de rode grafiek ligt het punt (-1, 1). Dat betekent dat voor <em>x</em> = -1 geldt dat <em>y</em> = 1.
		</p>
		<ol>
			<li>
				Neem de tabel hieronder over en maak hem af.<br>
				<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>x</em></td>
							<td colspan="2">-1</td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
			</li>
			<li>
				Lees het hellings- en startgetal uit de tabel af. 
			</li>
			<li>
				Geef de formule bij dit lineaire verband.
			</li>
			<li>
				Bereken <em>y</em> voor <em>x</em> = 5 met behulp van de formule.
			</li>
		</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_3.png">
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-1</td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>

								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">1</td>
									<td colspan="2"><span id="startgetal">3</span></td>
									<td colspan="2">5</td>
									<td colspan="2">7</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					<span id="hellingsgetal">a</span> = 2<br>
					<span id="startgetal">b</span> = 3 (Let op: het startgetal vind je onder `x=0`)
				</li>
				<li>
					`y = 2x + 3`
				</li>
				<li>
					Als `x = 5`, dan:<br>
					`y=2 &times; 5+3 = 13`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_6">
	<h3>Opdracht 6 Formule maken</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Bekijk de rode grafiek.
			</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					Neem over en vul in:<br>
					Hellingsgetal = .....<br>
					Startgetal = ........<br>
				</li>
				<li>
					Maak nu de formule voor de rode lijn.
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 5.
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_7.png">
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">10</td>
									<td colspan="2">7</td>
									<td colspan="2">4</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 3</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					<em>Hellingsgetal</em> = `-3`<br>
					<em>Startgetal</em> = `10`
				</li>
				<li>
					`y=-3x+10`
				</li>
				<li>
					Als `x = 5`, dan: <br>
					`y = -3 &times; 5 + 10 = -5`
				</li>
			</ol>
	
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Van tabel naar formule</h3>
		<p>
			Om een formule te maken bij een tabel, doe je het volgende:
		</p>
		<ol class="numbers">
			<li>bepaal het <span id="startgetal">startgetal</span>;</li>
			<li>bepaal het <span id="hellingsgetal">hellingsgetal</span>;</li>
			<li>gebruik <em>x</em> en <em>y</em> of kort je de woorden bij invoer en uitvoer af;</li>
			<li>vul alles in in de algemene formule.</li>
		</ol>
		<p>
			Meestal kun je het <span id="hellingsgetal">hellingsgetal</span> direct aflezen of snel bepalen, maar soms moet je een berekening maken.
		</p>
		<p>
			Als voorbeeld bepalen we de formule bij de volgende tabel:
		</p>
		<table class="verhouding">
			<tbody>
				<tr class="borderbottom">
					<td><em>tijd in weken</em></td>
					<td colspan="2">0</td>
					<td colspan="2">4</td>
					<td colspan="2">8</td>
					<td colspan="2">12</td>	
				</tr>
				<tr>
					<td><em>Bedrag in euro's</em></td>
					<td colspan="2"><span id="startgetal">32</span></td>
					<td colspan="2">52</td>
					<td colspan="2">72</td>
					<td colspan="2">92</td>
				</tr>			
			</tbody>
			<tfoot>
				<tr >
					<th colspan="2"></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
					<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
					<th></th>
				</tr>
			</tfoot>	
		</table>
		<p>
			Er komt steeds 20 euro per 4 weken bij. Maar wat is nu het <span id="hellingsgetal">hellingsgetal</span>? 
		</p>
		<p class="geeltje">
			Afspraak: het <span id="hellingsgetal">hellingsgetal</span> is de toename per 1 in de bovenste rij.
		</p>
		<p>
			+20 per 4 is gelijk aan +5 per 1, want `20:4 = 5`. Dan is het <span id="hellingsgetal">hellingsgetal</span> +5. Om de <b>formule</b> te maken, hebben we nog het <span id="startgetal">startgetal</span> nodig en een <b>afkorting</b> van de woorden.
		</p>
		<table class="table">
			<tbody>
					<tr>
						<td width="60">Stap 1</td>
						<td width="240">Bepaal het <span id="startgetal">startgetal</span>.</td>
						<td width="200">startgetal = 32</td>
					</tr>
					<tr>
						<td>Stap 2</td>
						<td>Bepaal het <span id="hellingsgetal">hellingsgetal</span>.</td>
						<td>hellingsgetal = +5</td>
					</tr>
					<tr>
						<td>Stap 3</td>
						<td>Afkorten.</td>
						<td><em>t</em> = <em>tijd in weken</em><br>
								<em>B</em> = <em>Bedrag in euro's</em>
						</td>
					</tr>
					<tr>
						<td>Stap 4</td>
						<td>Verwerk in de <b>standaardformule</b>.</td>
						<td><nobr><em>B</em> = <span id="hellingsgetal">5</span><em>t</em> + <span id="startgetal">32</span></nobr> </td>
					</tr>
				</tbody>
		</table>
		<p class="geeltje">
			Merk op dat <em>5t</em> staat voor <em>5</em> &times; <em>t</em> of <em>5</em> &sdot; <em>t</em>. Het maalteken moet je weglaten.
		</p>
	</div>

<div class="tekstblok opdracht" id="opdracht_7">
	<h3>Opdracht 7 Formule bij tabel</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>Bekijk de blauwe grafiek.</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					De tabel maakt bovenin stapjes van twee! Neem over en vul in:<br>
					Als ik twee stapjes naar rechts ga, dan komt er bij de uitkomst .... bij.
				</li>
				<li>
					Voor het hellingsgetal moet ik kijken hoeveel er bij komt als ik één stapje naar rechts ga. Neem over en vul in:<br>
					Als ik één stapje naar rechts ga, dan komt er bij de uitkomst .... bij.
				</li>
				<li>
					Neem over en vul in:<br>
					Hellingsgetal = .....<br>
					Startgetal = ........<br>
				</li>
				<li>
					Maak nu de formule voor de rechte lijn. Neem over en vul in:<br>
					y = ...x + ....
				</li>
				<li>
					Controleer je formule door <em>x</em> = 2 en <em>x</em> = 4 in te vullen. <br>
					Hoe weet je of de formule klopt?
				</li>
				<li>
					Waarom moet je minstens 2 punten in vullen om de formule te controleren?
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 12
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_5.png">
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">-4</td>
									<td colspan="2">-2</td>
									<td colspan="2">0</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					De tabel maakt bovenin stapjes van twee! Neem over en vul in:<br>
					Als ik twee stapjes naar rechts ga, dan komt er bij de uitkomst 2 bij.
				</li>
				<li>
					Voor het hellingsgetal moet ik kijken hoeveel er bij komt als ik één stapje naar rechts ga. Neem over en vul in:<br>
					Als ik één stapje naar rechts ga, dan komt er bij de uitkomst 1 bij.
				</li>
				<li>
					Hellingsgetal = 1<br>
					Startgetal = -4<br>
				</li>
				<li>
					`y = 1x + -4`, dus:<br>
					`y = x - 4`
				</li>
				<li>
					Als `x = 2`, dan `y = 2 - 4 = -2`. Klopt met de grafiek.<br>
					Als `x = 4`, dan `y = 4 - 4 = 0`. Klopt met de grafiek.<br>
					Je weet of de formule klopt als de waarden kloppen met de grafiek.
				</li>
				<li>
					De grafiek van een lineaire verband is een rechte lijn. Een rechte lijn wordt bepaald door twee punten.
				</li>
				<li>
					Als `x = 12`, dan `y = 12 - 4 = 8`.
				</li>
			</ol>			
		</div>
	</div>
</div>
	
<div class="tekstblok opdracht" id="opdracht_8">
	<h3>Opdracht 8 Formule bij tabel</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Bekijk de groene grafiek.
			</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-2</td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					Neem over en vul in:<br>
					Hellingsgetal = .....<br>
					Startgetal = ........<br>
				</li>
				<li>
					Maak de formule voor de rechte lijn. 
				</li>
				<li>
					Controleer je formule door waarden voor <em>x</em> uit de tabel in te vullen.
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 20.
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_6.png">
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-2</td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">2</td>
									<td colspan="2">8</td>
									<td colspan="2">14</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 6</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					<em>Hellingsgetal</em> = `6/2` = `3`<br>
					<em>Startgetal</em> = `8`
				</li>
				<li>
					`y=3x+8`
				</li>
				<li>
					Als `x = 20`, dan `y = 3 &times; 20 + 8 = 68`.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_9">
	<h3>Opdracht 9 Zonder grafiek</h3>
	<p>
		Bepaal de formule bij de volgende tabel:
	</p>
	<div class="table-responsive verhouding">
		<table class="verhouding" >
			<tbody>
				<tr class="borderbottom">
					<td><em>x</em></td>
					<td colspan="2">0</td>
					<td colspan="2">3</td>
					<td colspan="2">6</td>
					<td colspan="2">9</td>
				</tr>
				<tr>
					<td><em>y</em></td>
					<td colspan="2">28</td>
					<td colspan="2">22</td>
					<td colspan="2">16</td>
					<td colspan="2">10</td>
				</tr>			
			</tbody>	
		</table>
	</div>
	<ol>
		<li>
			Bepaal het startgetal.
		</li>
		<li>
			Bepaal het hellingsgetal.
		</li>
		<li>
			Vul de getallen in in de standaardformule.
		</li>
		<li>
			Bereken <em>y</em> voor <em>x</em> = 13.
		</li>
	</ol>
	
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">3</td>
									<td colspan="2">6</td>
									<td colspan="2">9</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">28</td>
									<td colspan="2">22</td>
									<td colspan="2">16</td>
									<td colspan="2">10</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 6</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 6</th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
					</li>
					<li>
						startgetal = 28
					</li>
					<li>
						Over de <em>y</em>-as: van 28 naar 22 is -6 stappen<br>
						over de <em>x</em>-as: van 0 naar 3 is 3 stappen<br>
						`-6 : 3 = -2`<br>
						hellingsgetal = -2
					</li>
					<li>
						`y=-2x+28`
					</li>
					<li>
						Als `x = 13`, dan:<br> 
						`y = -2 &times; 13 + 28 = 2`
					</li>
				</ol>
		
			</div>
		</div>		 
</div>

<div class="tekstblok opdracht" id="opdracht_10">
	<h3>Opdracht 10 Formules maken</h3>
	<p>
		
		Bepaal de formules bij de tabellen.
	
	</p>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>g</em></td>
									<td colspan="2">0</td>
									<td colspan="2">4</td>
									<td colspan="2">8</td>
								</tr>
								<tr>
									<td><em>B</em></td>
									<td colspan="2">16</td>
									<td colspan="2">24</td>
									<td colspan="2">32</td>
								</tr>			
							</tbody>	
						</table>
					</div>
				</li>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>g</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
								</tr>
								<tr>
									<td><em>S</em></td>
									<td colspan="2">-8</td>
									<td colspan="2">7</td>
									<td colspan="2">22</td>
								</tr>			
							</tbody>	
						</table>
					</div>
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<ol start="3">
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>p</em></td>
									<td colspan="2">0</td>
									<td colspan="2">10</td>
									<td colspan="2">20</td>
								</tr>
								<tr>
									<td><em>q</em></td>
									<td colspan="2">95</td>
									<td colspan="2">45</td>
									<td colspan="2">-5</td>
								</tr>			
							</tbody>	
						</table>
					</div>
				</li>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">-8</td>
									<td colspan="2">-4</td>
									<td colspan="2">0</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
								</tr>			
							</tbody>	
						</table>
					</div>
				</li>
			</ol>			
		</div>
	</div>
			
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-md-6">
					<ol>
						<li>
							hellingsgetal = `8/4 = 2`<br>
							`B=2g+16`
						</li>
						<li>
							hellingsgetal = `15/5 = 3`<br>
							`S= 3g - 8`
						</li>
					</ol>
				</div>
				<div class="col-md-6">
					<ol start="3">
						<li>
							hellingsgetal = `-50/10 = -5`<br>
							`q=-5p+95`
						</li>
						<li>
							hellingsgetal = `1/4`<br>
							`y= 1/4 x + 3`
						</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_11">	
		<h3>Opdracht 11 Startgetal onbekend</h3>
		<ol>
			<li>
		Waarom kun je in de tabel hieronder niet gelijk aflezen wat het startgetal is?
		<br>
		<div class="table-responsive verhouding">
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>x</em></td>
						<td colspan="2">2</td>
						<td colspan="2">4</td>
						<td colspan="2">6</td>
					</tr>
					<tr>
						<td><em>y</em></td>
						<td colspan="2">16</td>
						<td colspan="2">24</td>
						<td colspan="2">32</td>
					</tr>			
				</tbody>
			</table>
		</div>
	</li>
			<li>
				Neem de tabel over en vul hem in:
				<div class="table-responsive verhouding">
					<table class="verhouding">
						<thead>
							<tr>
								<th colspan="2"></th>
								<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="borderbottom">
								<td><em>x</em></td>
								<td colspan="2">0</td>
								<td colspan="2">2</td>
								<td colspan="2">4</td>
								<td colspan="2">6</td>
							</tr>
							<tr>
								<td><em>y</em></td>
								<td colspan="2">...</td>
								<td colspan="2">16</td>
								<td colspan="2">24</td>
								<td colspan="2">32</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</div>	
			</li>
			<li>
				Maak de formule die hoort bij de tabel.
			</li>
		</ol>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			
			<ol>
				<li>
					Omdat er in de tabel geen `x=0` staat!
				</li>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding">
							<thead>
								<tr>
									<th colspan="2"></th>
									<th colspan="2">+ 2<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">+ 2<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">+ 2<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
									<td colspan="2">6</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2"><span id="startgetal">8</span></td>
									<td colspan="2">16</td>
									<td colspan="2">24</td>
									<td colspan="2">32</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 8</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 8</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 8</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>						
				</li>
				<li>
					<em>Hellingsgetal</em> = `8/2 = 4`<br>
					<em>Startgetal</em> = `8`<br>
					`y=4x+8`
			</li>
			</ol>

		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_12">
	<h3>Opdracht 12 Startgetal onbekend</h3>
	<ol>
		<li>
			Neem de tabel hieronder over, <b>maar</b> maak hem aan de voorkant 
			langer zodat ook boven in de tabel het getal 0 komt te staan!
			<div class="table-responsive verhouding">
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>w</em></td>
							<td colspan="2">10</td>
							<td colspan="2">15</td>
							<td colspan="2">20</td>
						</tr>
						<tr>
							<td><em>B</em></td>
							<td colspan="2">350</td>
							<td colspan="2">300</td>
							<td colspan="2">250</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>
		<li>
			Maak de formule bij de tabel.
		</li>
	
	</ol>
		
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
					<div class="table-responsive verhouding">
						<table class="verhouding">
							<thead>
								<tr>
									<th colspan="2"></th>
									<th colspan="2">+ 5<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">+ 5<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">+ 5<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">+ 5<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="borderbottom">
									<td><em>w</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>
									<td colspan="2">20</td>
								</tr>
								<tr>
									<td><em>B</em></td>
									<td colspan="2"><span id="startgetal">450</span></td>
									<td colspan="2">400</td>
									<td colspan="2">350</td>
									<td colspan="2">300</td>
									<td colspan="2">250</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 50</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>	
					</li>
					<li>
						<em>Hellingsgetal</em> = `(-50)/5 = -10`<br>
						<em>Startgetal</em> = `450`<br>
						`B=-10w+450`
				</li>
				</ol>
			</div>
		</div>	
</div>

<div class="tekstblok opdracht" id="opdracht_13">
	<h3>Opdracht 13 Formule maken mix</h3>
	<p>
		Maak de formules bij de volgende tabellen. 
	</p>	
	<ol>
		<li>
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>u</em></td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
					</tr>
					<tr>
						<td><em>N</em></td>
						<td colspan="2">7</td>
						<td colspan="2">10</td>
						<td colspan="2">13</td>
						<td colspan="2">16</td>
					</tr>			
				</tbody>
			</table>
		</li>
		<li>
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>x</em></td>
						<td colspan="2">4</td>
						<td colspan="2">6</td>
						<td colspan="2">8</td>
						<td colspan="2">10</td>	
					</tr>
					<tr>
						<td><em>y</em></td>
						<td colspan="2">120</td>
						<td colspan="2">80</td>
						<td colspan="2">40</td>
						<td colspan="2">0</td>
					</tr>			
				</tbody>
			</table>
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					`N=3u+4`
				</li>
				<li>
					`y=-20x +200`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_14">
	<h3>Opdracht 14 Formules maken bij grafieken</h3>
	<p>Hieronder zie je een assenstelsel met twee grafieken:</p>
	<p><img src="afbeeldingen/analyse_leerjaar_2/regelmaat_9.png" width="500px"></p>
	<ol>
		<li>
			Hieronder zie je de tabel die hoort bij de rode grafiek. Neem over en vul hem in:<br>
			<TABLE class= "verhouding">
				<TR>
					<TD><em>t</em> in uren</TD><TD>0</TD><TD>4</TD><TD>8</TD>
				</TR>
				<TR>
					<TD><em>T</em> in graden celsius</TD><TD></TD><TD></TD><TD></TD>
				</TR>
			</TABLE>
		</li>
		<li>
			Waarom staat er in de bovenste rij bij het tweede vakje x = 4 en niet bijvoorbeeld x = 2? Tip: Kijk naar je grafiek!
		</li>
	</ol>
	<p>
		Om de waarden precies te kunnen aflezen, kiezen we voor roosterpunten. De coördinaten van die roosterpunten zetten we in de tabel. Met behulp van die tabel kunnen we de formule van een grafiek bepalen.
	</p>
	<ol start="3">
		<li>
			Zoek in de blauwe grafiek twee roosterpunten en schrijf deze op:<br>(0, ...) en (..., ...).
		</li>
		<li>
			Neem de tabel hieronder over en vul hem in.<br>
			<TABLE class= "verhouding">
				<TR>
					<TD><em>t</em> in uren</TD><TD></TD><TD></TD>
				</TR>
				<TR>
					<TD><em>T</em> in graden celsius</TD><TD></TD><TD></TD>
				</TR>
			</TABLE>
		</li>
		<li>
			Bereken voor de rode en de blauw grafiek het hellingsgetal en startgetal.
		</li>
		<li>
			Maak voor iedere grafiek de formule. Let op: welke letters staan er bij de assen?
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>t</em> in uren</td>
									<td colspan="2">0</td>
									<td colspan="2">4</td>
									<td colspan="2">8</td>
								</tr>
								<tr>
									<td><em>T</em> in graden Celsius</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>
				<li>
					Bij `t=4` hoort het roosterpunt (4, 10). Je kunt dus precies aflezen welke `T`-waarde erbij hoort!
				</li>
				<li>
					(`0,20`) en (`10,-10`). Het tweede roosterpunt kan bij jou verschillen. Dan zijn de berekeningen hieronder ook anders. Het hellingsgetal zou wel hetzelfde moeten zijn.
				</li>
				<li>
					<TABLE class= "verhouding">
						<TR>
							<TD><em>t</em> in uren</TD><TD>0</TD><TD>10</TD>
						</TR>
						<TR>
							<TD><em>T</em> in graden celsius</TD><TD>20</TD><TD>-10</TD>
						</TR>
					</TABLE>
				</li>
				<li>
					<em>Hellingsgetal</em>:<br>
					rood `= 5/4 = 1,25`<br>
					blauw `=(-30)/10 = -3`<br>
					<br>
					<em>Startgetal</em><br>
					rood `= 5`<br>
					blauw `=20`
				</li>
				<li>
					Formules:<br>
					rood: `T = 1,25t+5`<br>
					blauw: `T = -3t+20`
				</li>
			</ol>
			
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Formules bij grafieken maken</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Voor een formule heb je altijd een <span id="startgetal">startgetal</span> en een <span id="hellingsgetal">hellingsgetal</span> nodig.
			</p>
			<p>
				Je bepaalt de formule bij een grafiek door <b>twee mooie roosterpunten</b> te kiezen en in een tabel te zetten.
			</p>
			<p>
			 	Vanuit die tabel stel je de formule op.
			</p>
			<p>
				Hiernaast lezen we de punten (0, 5) en (4, 7). Deze punten zetten we in een tabel. Merk op dat de <b>horizontale as</b> in de <b>bovenste rij</b> wordt gezet.
			</p>
		</div>
		<div class="col-xs-5">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/grafiek_A_u.png" alt="grafiek_A_u" width="" height="" />
		</div>
	</div>	
	<p class="geeltje">
		Let op: het <span id="hellingsgetal">hellingsgetal</span> is de toename per 1 in de bovenste rij.
	</p>
	<div class="row">
		<div class="col-xs-8">
			<p>
				Het <span id="startgetal">startgetal</span> is de <em>y</em>-coördinaat van het snijpunt met de <em>y</em>-as. In dit geval: <span id="startgetal">5</span>. <br>
				Het <span id="hellingsgetal">hellingsgetal</span> vind je door de toename van 2 per 4 om te rekenen naar <span id="hellingsgetal">`1/2`</span> per 1, want 2 : 4 = `1/2`.
			</p>
			<p>
				De formule wordt dan:	`A=1/2 u + 5`
			</p>
		</div>
		<div class="col-xs-4">
			<table class="verhouding">
				<thead>
					<tr>
						<th colspan="2"></th>
						<th colspan="2">+ 4<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
						<th></th>
					</tr>
				</thead>
						<tbody>
					<tr class="borderbottom">
						<td><em>u</em></td>
						<td colspan="2">0</td>
						<td colspan="2">4</td>
					</tr>
					<tr>
						<td><em>A</em></td>
						<td colspan="2">5</td>
						<td colspan="2">7</td>
					</tr>			
				</tbody>
						<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
						<th></th>
					</tr>
				</tfoot>	
				</table>
			</div>
	</div>	 
</div>

<div class="tekstblok opdracht" id="opdracht_15">
	<h3>Opdracht 15 Formules maken </h3>
	<p>
		Hieronder zie je een assenstelsel met een rode en een groene grafiek.
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/zelfde_startgetal.png">
	<br>
	<div class="row">
		<div class="col-sm-6">
				<ol>
					<li>
						Neem over en vul in:<br>
						<div class="table-responsive verhouding">
								<table class="verhouding">
									<thead>
										<tr>
											<th colspan="2"></th>
											<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="borderbottom">
											<td><em>x</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>
										<tr>
											<td><em>y</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>			
									</tbody>
									<tfoot>
										<tr >
											<th colspan="2"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
											<th></th>
										</tr>
									</tfoot>	
								</table>
							</div>
						<em>Startgetal</em> rode grafiek = ...<br>
						<em>Hellingsgetal</em> rode grafiek = ...<br>
						Formule rode grafiek: <em>y</em> = .....
					</li>
				</ol>
			</div>
		<div class="col-sm-6">
				<ol start="2">
					<li>
						Neem over en vul in:<br>
						<div class="table-responsive verhouding">
								<table class="verhouding">
									<thead>
										<tr>
											<th colspan="2"></th>
											<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="borderbottom">
											<td><em>x</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>
										<tr>
											<td><em>y</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>			
									</tbody>
									<tfoot>
										<tr >
											<th colspan="2"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
											<th></th>
										</tr>
									</tfoot>	
								</table>
							</div>
						<em>Startgetal</em> groene grafiek = ...<br>
						<em>Hellingsgetal</em> groene grafiek = ...<br>
						Formule rode grafiek: <em>y</em> = .....
					</li>
				</ol>
			</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<p>
					Kies in je tabellen sowieso punt (0, 5). Het tweede punt naar eigen inzicht.
				</p>
				<ol>
					<li>
						Formule rode grafiek: `y =2x+5`
					</li>
					<li>
						Formule groene grafiek: `y = -5x+5`	
					</li>
				</ol>
			</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_16">
	<h3>Opdracht 16 Formules maken</h3>
	<p>
		Hieronder zie je een assenstelsel met een rode en een groene grafiek.
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/zelfde_hellingsgetal.png">
	<br>
	<div class="row">
		<div class="col-sm-6">
			<ol>
				<li>
						Neem over en vul in:<br>
						<div class="table-responsive verhouding">
								<table class="verhouding">
									<thead>
										<tr>
											<th colspan="2"></th>
											<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="borderbottom">
											<td><em>x</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>
										<tr>
											<td><em>y</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>			
									</tbody>
									<tfoot>
										<tr >
											<th colspan="2"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
											<th></th>
										</tr>
									</tfoot>	
								</table>
							</div>
						<em>Startgetal</em> rode grafiek = ...<br>
						<em>Hellingsgetal</em> rode grafiek = ...<br>
						Formule rode grafiek: <em>y</em> = .....
					</li>
			</ol>
		</div>
		<div class="col-sm-6">
			<ol start="2">
				<li>
						Neem over en vul in:<br>
						<div class="table-responsive verhouding">
								<table class="verhouding">
									<thead>
										<tr>
											<th colspan="2"></th>
											<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
											<th></th>
										</tr>
									</thead>
									<tbody>
										<tr class="borderbottom">
											<td><em>x</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>
										<tr>
											<td><em>y</em></td>
											<td colspan="2">...</td>
											<td colspan="2">...</td>
										</tr>			
									</tbody>
									<tfoot>
										<tr >
											<th colspan="2"></th>
											<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
											<th></th>
										</tr>
									</tfoot>	
								</table>
							</div>
						<em>Startgetal</em> groene grafiek = ...<br>
						<em>Hellingsgetal</em> groene grafiek = ...<br>
						Formule rode grafiek: <em>y</em> = .....
					</li>
			</ol>
		</div>
	</div>
	<ol start="3">
		<li>
			Een derde lijn is niet zichtbaar in het assenstelsel. De lijn snijdt de `y`-as in punt (0, 90) en loopt evenwijdig aan de groene en rode lijn.<br>
			Geef de formule van deze lijn.
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						Formule rode grafiek: `y = 4x + 10`
					</li>
					<li>
						Formule groene grafiek: `y = 4x + 30`
					</li>
					<li>
						Formule onzichtbare grafiek: `y = 4x + 90`
					</li>
				</ol>
			</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_17">
	<h3>Opdracht 17 Formules maken</h3>
	<p>
			Hieronder zie je een assenstelsel met drie grafieken:
		</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/regelmaat_8.png" >
	<p>
			Maak bij iedere grafiek de formules. Je mag gebruik maken van de tabellen.
		</p>
	<br>
	<div class="row">
			<div class="col-sm-4">
				<p>Groene grafiek</p><br>
					<div class="table-responsive verhouding">
						<table class="verhouding">
							<thead>
								<tr>
									<th colspan="2"></th>
									<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="borderbottom">
									<td><em>...</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>
								<tr>
									<td><em>...</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
									<th></th>
								</tr>
							</tfoot>	
					</table>
				</div>		
			</div>
			<div class="col-sm-4">
				<p>Rode grafiek</p><br>
				
							<div class="table-responsive verhouding">
								<table class="verhouding">
						<thead>
							<tr>
								<th colspan="2"></th>
								<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="borderbottom">
								<td><em>...</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>
							<tr>
								<td><em>...</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
							</div>
						
			</div>
			<div class="col-sm-4">
				<p>Blauwe grafiek</p><br>
				
							<div class="table-responsive verhouding">
								<table class="verhouding">
						<thead>
							<tr>
								<th colspan="2"></th>
								<th colspan="2">...<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr class="borderbottom">
								<td><em>...</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>
							<tr>
								<td><em>...</em></td>
								<td colspan="2">...</td>
								<td colspan="2">...</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
							</div>
						
			</div>
		</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Startgetal:<br>
				groen = `-2`<br>
				rood = `1`<br>
				blauw = `3`
			</p>
			<p>	
				Hellingsgetal:<br>
				<TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>1</TD>
						</TR>
						<TR>
							<TD><em>y groen</em></TD><TD>-2</TD><TD>2</TD>
						</TR>
						
				</TABLE><br>
				<em>Hellingsgetal</em> groene grafiek = `4/1 = 4`<br>
				<br>
				<TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>3</TD>
						</TR>
						<TR>
							<TD><em>y rood</em></TD><TD>1</TD><TD>2</TD>
						</TR>
						
				</TABLE><br>
				<em>Hellingsgetal</em> rode grafiek = `1/3 = 1/3`<br>
				<br>
				<TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>2</TD>
						</TR>
						<TR>
							<TD><em>y blauw</em></TD><TD>3</TD><TD>2</TD>
						</TR>
				</TABLE><br>
				<em>Hellingsgetal</em> blauwe grafiek = `(-1)/2 = -1/2`<br>
			</p>
			<p>
				groen: `y = 4x - 2`<br>
				rood: `y = 1/3 x + 1`<br>
				blauw: `y = -1/2 x + 3`
			</p>	
		</div>
	</div>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 18 Formules maken</h3>
	<p>
		Hieronder zie je een assenstelsel met twee grafieken:
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/opgave_stijn_hatice.png">
	<p>In de grafieken kan je aflezen hoeveel Stijn en Hatice met hun bijbaantje verdienen.</p>

	<ol>
		<li>
			Noteer voor iedere grafiek het startgetal.
		</li>
		<li>
			Bereken voor iedere grafiek het hellingsgetal. Je mag een tabel gebruiken. 
		</li>
		<li>
			Maak voor iedere grafiek de formule. Door naar de assen te kijken, weet je welke letters je moet gebruiken in de formules.
		</li>
		<li>
			Bij hoeveel uur werken verdienen Hatice en Stijn evenveel?
		</li>
		<li> 
			Hoeveel hebben ze dan samen verdiend?
		</li>
	</ol>
	<p>
		Voor het goede doel werken Stijn en Hatice zo lang mogelijk.<br>
		Ze houden het beiden 20 uur vol.<br>
	</p>
	<ol start="6">
		<li>
			Gebruik de formules om te berekenen hoeveel Hatice en Stijn <b>samen</b> verdienen voor het goede doel.<br>
		</li>
		<li>
			Maak een formule waarmee je in één keer kunt uitrekenen hoeveel ze samen verdienen.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>Startgetal</em>:<br>
					Stijn `=10`<br>
					Hatice `=5`
				</li>
				<li>
					<TABLE class= "verhouding">
							<TR>
								<TD><em>tijd</em></TD><TD>0</TD><TD>4</TD>
							</TR>
							<TR>
								<TD><em>Inkomsten Stijn</em></TD><TD>10</TD><TD>15</TD>
							</TR>
							<TR>
								<TD><em>Inkomsten Hatice</em></TD><TD>5</TD><TD>15</TD>							</TR>
						</TABLE><br>
					<em>Hellingsgetal</em> Stijn = `5/4 = 1,25`<br>
					<em>Hellingsgetal</em> Hatice = `10/4 = 2,5`<br>
				</li>
				<li>
					`I` <sub>Stijn</sub> `=1,25t+10`<br>
					`I` <sub>Hatice</sub> `=2,5t+5`
				</li>
				<li>
					Bij 4 uur werken.
				</li>
				<li>
					Ze hebben dan elk € 15,- verdiend. Samen € 30,-.
				</li>
				<li>
					`I` <sub>Stijn</sub> `=1,25`&sdot;`20+10`<br>
					`I` <sub>Stijn</sub> `=25+10 = 35`<br>
					<br>
					`I` <sub>Hatice</sub> `=2,5`&sdot;`20+5`<br>
					`I` <sub>Hatice</sub> `=50+5 = 55`<br>
					<br>
					Samen verdienen ze: `35 + 55 = 90` euro.
				</li>
				<li>
					Tel de start- en hellingsgetallen bij elkaar op.<br>
					Startgetal = 10 + 5 = 15 <br>
					Hellingsgetal = 1,25 + 2,5 = 3,75<br>
					`I` <sub>samen</sub> `=3,75t + 15`
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_19">
	<h3>Opdracht 19 Kaarsen</h3>
	<p>
		Stel bij beide grafieken de formule op waarin het verband wordt uitgedrukt tussen de lengte van de kaars en de tijd.
	</p>
	<br>
	<img src="../afbeeldingen/analyse_leerjaar_2/blauwe_kaars_groene_kaars.png" alt="blauwe_kaars_groene_kaars">
	<br>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Formule bij <em>Blauwe kaars</em>:<br>
				`l = -5u + 20`<br>
				Met <em>l</em> voor de <em>lengte in cm</em> en <em>u</em> voor de <em>tijd in uren</em>.
			</p>
			<p>
				Formule bij <em>Groene kaars</em>:<br>
				`l = -6u + 30`<br>
				Met <em>l</em> voor de <em>lengte in cm</em> en <em>u</em> voor de <em>tijd in uren</em>.
			</p>
		</div>
		</div>
</div>

<div class="tekstblok opdracht" id="opdracht_20">
	<h3>Opdracht 20 Op tijd?</h3>
	<p>
		Hannah moet 15 kilometer fietsen naar school. Daar doet ze precies 1 uur over. <br>
		Als Hannah een 20 minuten weg is, merkt haar vader dat ze haar tas vergeten is. Hij springt direct op zijn scooter en probeert haar in te halen.
		Zijn scooter rijdt 30 km/uur. 
	</p>
	<p>
		Je gaat onderzoeken of de vader van Hannah op tijd is om Hannah de tas te bezorgen voor ze bij school arriveert.<br>
		Je kan daarbij de volgende vragen/tips als hulp gebruiken:<br>
		<ul>
			<li>Hoe laat is Hannah op school?</li>
			<li>Kan ik de gegevens in een grafiek zetten?</li>
		</ul>
	</p>
	<p>
		Wil je wat hulp? Kijk eens bij de <a href="index_taken.php?p=a_2t_lineaire_verbanden#uitdaging">vmbo-t versie</a> voor meer tussenstappen.
	</p>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						-
					</li>
					<li>
						Voor Hannah geldt: bij 	`t=0` hoort `A=0`
					</li>
					<li>
						Voor Hannah geldt: bij `t=60` hoort `A=15`
					</li>
					<li>
						<TABLE class= "verhouding">
							<TR>
								<TD><em>t in minuten</em></TD><TD>0</TD><TD>60</TD>
							</TR>
							<TR>
								<TD><em>A Hannah in kilometers</em></TD><TD>0</TD><TD>15</TD>
							</TR>
						</TABLE><br>
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_leerjaar_2/Hannah_1_grafiek.png" width="300px">	
					</li>
					<li>
						Hannah is om 09.00 uur op school.
					</li>
					<li>
						Voor vader geldt: bij `t=20` hoort `A=0`
					</li>
					<li>
						Maak een verhoudingstabel:<br>
						Zet de snelheid in het eerste vakje en werk via "`1`".
						 <table class="verhouding" style="background-color:white">
							<thead>
								<tr>
									<th colspan="2"></th>
									<th colspan="2">: 60<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th colspan="2">x 10<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr class="borderbottom">
									<td><em>Minuten</em></td>
									<td colspan="2">60</td>
									<td colspan="2">1</td>
									<td colspan="2">10</td>
								</tr>
								<tr>
									<td><em>Kilometers</em></td>
									<td colspan="2">30</td>
									<td colspan="2">0,5</td>
									<td colspan="2">5</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr >
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>: 60</th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>x 10</th>
									<th></th>
								</tr>
							</tfoot>	
							</table>
						</li>							
						<li>
							<TABLE class= "verhouding">
										<TR>
											<TD><em>t in minuten</em></TD><TD>20</TD><TD>30</TD>
										</TR>
										<TR>
											<TD><em>A vader in kilometers</em></TD><TD>0</TD><TD>5</TD>
										</TR>
							</TABLE><br>
						</li>
						<li><br>
							<img src="afbeeldingen/analyse_leerjaar_2/Hannah_2_grafiek.png" width="300px">	
						</li>
						<li>
							Vader haalt Hannah in op `t=40`. Hannah heeft dan 10 kilometer gefietst. Vader is dus op tijd want ze moet nog 5 kilometer fietsen naar school.
						</li>
					</ol>							
		</div>
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Grafieken tekenen met behulp van een tabel</h3>
	<p>	
		De grafiek bij een lineair verband is het rechte lijn. Voor het tekenen van deze grafiek heb je slechts twee punten nodig. Het is overzichtelijk om die twee punten in een tabel te zetten.
	</p>
	<p>
		Als voorbeeld wordt de grafiek van de formule `N = 2 1/2 u - 3` getekend.
	</p>
	<table class="table">
			<tbody>
				<tr>
					<th>
						<u>Stap 1:</u><br>
					</th>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						Maak een tabel met twee invoer- en uitvoerwaarden. Zodat er twee coördinatenparen ontstaan.
						<br>
						Kies je waarden voor <em>u</em> dusdanig dat de waarden van <em>N</em> mooi uitkomen, bijvoorbeeld 0 en 2.

					</td>
					<td>
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>u</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
								</tr>
								<tr>
									<td><em>N</em></td>
									<td colspan="2"><span id="startgetal">-3</span></td>
									<td colspan="2">2</td>
								</tr>			
							</tbody>
						</table>
						<br>
						<p class="geeltje">
							`x=0` geeft het snijpunt met de <em>y</em>-as.
						</p>
					</td>
				</tr>
				<tr>
					<th>
						<u>Stap 2:</u>
					</th>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						Maak van de getallen uit de tabel coördinatenparen.
					</td>
					<td>
						(0, -3) en (2, 2)
					</td>
				</tr>
				<tr>
					<th>
						<u>Stap 3:</u>
					</th>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						Bepaal per as de stapgrootte en de lengte. Maak het assenstelsel en benoem de beide assen. 
						<br>
						Zet de punten in het assenstelsel en trek een <b>rechte</b> lijn door de punten (geodriehoek). Zet de formule bij de lijn. 
					</td>
					<td>
						<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_2/grafiek_Nis2komma5umin3.png" alt="grafiek_Nis2komma5umin3" id="small-img" />
					</td>
				</tr>
			</tbody>
		</table>
</div>

<div class="tekstblok opdracht" id="opdracht_21">
	<h3>Opdracht 21 Grafieken tekenen</h3>
		<p>
		Teken de grafiek van de formule `y = 4x + 6` met behulp van een tabel.
	</p>
	<ol>
	<li>Neem de tabel over en vul in: 
		<table class="verhouding">
			<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
			<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
		</table>
	</li>
	<li>
		Waarom is het genoeg om in de tabel maar twee waarden voor `x` te gebruiken?
	</li>
	<li>
		Waarom is het handig om als eerste waarde in de tabel `x=0` te kiezen?
	</li>			
	<li>
		Waarom is het niet handig om als tweede waarde `x=1` te kiezen?
	</li>
	<li>
		Teken de grafiek bij de formule. Maak daarvoor eerst een geschikt assenstelsel.
	</li>
</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<div class="row">
			<div class="col-xs-7">
				<ol>
					<li>
						<table class="verhouding">
							<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
							<tr><td><em>y</em></td><td>6</td><td>26</td></tr>
						</table>
					</li>
					<li>Je hoeft maar twee waarden voor `x` te gebruiken omdat de grafiek een rechte lijn wordt.</li>
					<li>`x = 0` rekent makkelijk, je hebt gelijk het startgetal en het snijpunt met de <nobr><em>y</em>-as: (0, 6)</nobr>.</li>
					<li>Omdat de twee punten dan heel dicht tegen elkaar zitten in het assenstelsel. Het is dan lastiger om de lijn nauwkeurig te tekenen.</li>
				</ol>
			</div>
			<div class="col-xs-5">
				<ol start="5">
					<li>
						<br>
						<img src="afbeeldingen/analyse_leerjaar_2/opdracht_16.png" width="150px">
					</li>
				</ol>
			</div>
		</div>
	</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_22">
	<h3>Opdracht 22 Grafieken tekenen</h3>
	<p>
		Teken de grafiek van de formule `y = -4x + 14` met behulp van een tabel.
	</p>
	<ol>
		<li>Neem de tabel over en vul in: 
		<table class="verhouding">
			<tr><td ><em>x</em></td><td>...</td><td>...</td></tr>
			<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
		</table>
	</li>
		<li>
		Teken de grafiek bij de formule. Maak daarvoor eerst een geschikt assenstelsel.
	</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

		<ol>
			<li>
				<table class="verhouding">
					<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
					<tr><td><em>y</em></td><td>14</td><td>-6</td></tr>
				</table>
			</li>
			<li><br>
				<img src="afbeeldingen/analyse_leerjaar_2/opdracht_17.png" width="250px">
			</li>
			</ol>
	</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_23">
	<h3>Opdracht 23 Grafieken tekenen</h3>
	<p>
		Teken de grafiek van de formule `y=-4 + 1/3 x` met behulp van een tabel.
	</p>
	<ol>
		<li>Neem de tabel over en vul in: 
		<table class="verhouding">
			<tr><td ><em>x</em></td><td>0</td><td>12</td></tr>
			<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
		</table>
	</li>
		<li>
		Waarom is het handig om als tweede waarde `x=12` te kiezen?
	</li>
		<li>
		Teken de grafiek bij de formule. Maak daarvoor eerst een geschikt assenstelsel.
	</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				<table class="verhouding">
					<tr><td ><em>x</em></td><td>0</td><td>12</td></tr>
					<tr><td><em>y</em></td><td>-4</td><td>0</td></tr>
				</table>
			</li>
			<li>Omdat je dan op een heel getal, dus een roosterpunt uitkomt. En op de `x`-as.</li>
			<li><br>
				<img src="afbeeldingen/analyse_leerjaar_2/opdracht_18.png" width="350px">
			</li>
		</ol>
	</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_24">
		<h3>Opdracht 24 Grafiek tekenen</h3>
		<p>
			Teken de grafiek van de formule `y = 14 - 4x` met behulp van een tabel.
		</p>
		<ol>
			<li>Neem de tabel over en vul in: 
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>x</em></td>
							<td colspan="2">0</td>
							<td colspan="2">...</td>	
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</li>
			<li>
				Teken de grafiek bij de formule. Maak daarvoor eerst een geschikt assenstelsel.
			</li>
		</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>	
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2"><span id="startgetal">14</span></td>
									<td colspan="2">-6</td>
								</tr>			
							</tbody>
						</table>
				</li>
				<li>
					<img src="afbeeldingen/analyse_leerjaar_2/opdracht_17.png" width="250px">
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_25">
	<h3>Opdracht 25 Grafiek tekenen</h3>
	<p>
		We gaan de grafiek van de volgende formule tekenen:<br>
		`y=-3/5x + 2`
	</p>
		<ol>
			<li>Neem de tabel over en vul in: 
				<table class="verhouding">
					<TR><TD ><mi>x</mi></TD><TD><mn></mn></TD><TD><mi></mn></TD></TR>
					<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR>
				</TABLE>
			</li>
			<li>
				Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.
			</li>
			</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">

				<ol>
					<li>
						<table class="verhouding">
							<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>10</mn></TD></TR>
							<TR><TD><mi>y</mi></TD><TD>2</TD><TD>-4</TD></TR>
						</TABLE>
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_leerjaar_2/opdracht_21.png" width="350px">
					</li>
				</ol>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht" id="opdracht_26">
	<h3>Opdracht 26 Grafieken tekenen</h3>
	<p>
		Teken de grafiek van de formule `y = 2/3x + 7` met behulp van een tabel.
	</p>
	<ol>
		<li>Neem de tabel over en vul in: 
		<TABLE class="verhouding">
			<TR class="borderbottom"><TD><mi>x</mi></TD><TD><mn></mn></TD><TD><mn></mn></TD></TR>
			<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR>
		</TABLE>
	</li>
		<li>
		Waarom is het handig om als tweede waarde een veelvoud van drie te kiezen?
	</li>
		<li>
		Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.
	</li>
	</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

				<ol>
					<li>
						<table class="verhouding">
								<TR class="borderbottom">
									<TD><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mn>9</mn></TD>
								</TR>
								<TR>
									<TD><mi>y</mi></TD><TD>7</TD><TD>13</TD>
								</TR>
						</TABLE>
					</li>
					<li>
						Omdat je dan een heel getal voor <em>y</em> krijgt. Hele waarden kun je nauwkeuriger in je assenstelsel tekenen.
					</li>
					<li>
						<br>
						<img src="afbeeldingen/analyse_leerjaar_2/grafiek_opdracht_26.png"  width="400px">
					</li>
				</ol>

			</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_27">
	<h3>Opdracht 27 Grafieken tekenen</h3>
	<p>
		Teken de grafiek bij de volgende formule:<br>
		`y=2/7x - 5`
	</p>	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

			<ol>
				<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
							<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>70</mn></TD></TR>
							<TR><TD><mi>y</mi></TD><TD>-5</TD><TD>15</TD></TR></TABLE></li>
				<li><br><img src="afbeeldingen/analyse_leerjaar_2/grafiek_opdracht20.png" width="400px"></li>
			</ol>

		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_28">
		<h3>Opdracht 28 Kaars</h3>
		<p>
			Lara heeft een kaars van 30 cm lang.<br>
			Ieder uur dat de kaars brandt, wordt de kaars 2 cm korter.
		</p>
		<ol>
			<li>
				Maak de formule bij het verband af:<br>
				<em>lengte kaars in cm</em> = ......... – ......... x <em>brandtijd in uren</em>
			</li>
			<li>
				Toon aan met een berekening dat de kaars na 15 uur is opgebrand.
			</li>
		</ol>
				
				<div class="row">
					<div class="col-xs-6">
					<ol start="3">
						<li>
							Vul de tabel in en teken de grafiek bij het verband.<br>
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>brandtijd</em></td>
									<td colspan="2">0</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">15</td>	
								</tr>
								<tr>
									<td><em>lengte</em></td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
									<td colspan="2">...</td>
								</tr>			
							</tbody>
						</table><br>
						</li>
						<li>
							Hoe kun je aan de tabel zien dat het verband tussen de brandtijd en de lengte een lineair verband is? En hoe in de grafiek?
						</li>
					</ol>
					</div>
					<div class="col-xs-6">
					<img src="../afbeeldingen/analyse_leerjaar_2/assenstelsel_kaars_van_30cm.png" alt="assenstelsel_kaars_van_30cm" id="small=img" />
					</div>
				</div>
			
		
		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
			<li>
				Maak de formule bij het verband af:<br>
				<em>lengte kaars in cm</em> = 30 – 2 x <em>brandtijd in uren</em>
			</li>
			<li>
				<em>lengte kaars in cm</em> = 30 – 2 x <em>15</em><br>
				<em>lengte kaars in cm</em> = 30 - 30 = 0
			</li>
			<li>
				Vul de tabel in en teken de grafiek bij het verband.<br>
				<div class="row">
					<div class="col-xs-6">
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>brandtijd</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>	
								</tr>
								<tr>
									<td><em>lengte</em></td>
									<td colspan="2">30</td>
									<td colspan="2">20</td>
									<td colspan="2">10</td>
									<td colspan="2">0</td>
								</tr>			
							</tbody>
						</table>
					</div>
					<div class="col-xs-6">
					<img src="../afbeeldingen/analyse_leerjaar_2/grafiek_kaars_van_30cm.png" alt="assenstelsel_kaars_van_30cm" id="small=img" />
					</div>
				</div>
			</li>
			<li>
				In de tabel is er regelmaat: per 5 uur wordt de kaars 10 cm korter. De grafiek is een rechte lijn. Denk nog even als ezelsbruggetje aan de liniaal (lineair) waarmee je een rechte lijn trekt. 
			</li>
		</ol>
		</div>
	</div>
	</div>

<div class="tekstblok opdracht" id="opdracht_29">
	<h3>Opdracht 29 Abonnementen</h3>
	<p>
		<em>Belsnel</em> en <em>Goedbellen</em> zijn aanbieders van mobiele telefonie.
	</p>
	<p>
		Bij <em>Belsnel</em> betaal je per minuut € 0,10 en is er een vast tarief van € 15,-. <br>Bij <em>Goedbellen</em> is het vaste tarief € 10,- en betaal je per minuut € 0,15.
	</p>
	<ol>
		<li>
			Maak één passend assenstelsel over en teken beide grafieken in dat assenstelsel.
		</li>
		<li>
			Maak bij beide aanbieders de formule waarmee je de belkosten kunt uitrekenen.
		</li>
		<li>
			Tamira zoekt een abonnement, ze belt ongeveer 120 minuten per maand. Welke aanbieder zou jij haar aanraden? Licht je antwoord toe.
		</li>
	</ol>
								
		<div class="hider">
		<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>belminuten</em></td>
							<td colspan="2">0</td>
							<td colspan="2">20</td>
							<td colspan="2">40</td>
							<td colspan="2">60</td>
							<td colspan="2">80</td>	
							<td colspan="2">100</td>
							<td colspan="2">120</td>
							<td colspan="2">140</td>
						</tr>
						<tr>
							<td><em>kosten Belsnel</em></td>
							<td colspan="2">15</td>
							<td colspan="2">17</td>
							<td colspan="2">19</td>
							<td colspan="2">21</td>
							<td colspan="2">23</td>
							<td colspan="2">25</td>
							<td colspan="2">27</td>
							<td colspan="2">29</td>
						</tr>	
						<tr>
							<td><em>kosten Goedbellen</em></td>
							<td colspan="2">10</td>
							<td colspan="2">13</td>
							<td colspan="2">16</td>
							<td colspan="2">19</td>
							<td colspan="2">22</td>
							<td colspan="2">25</td>
							<td colspan="2">28</td>
							<td colspan="2">31</td>
						</tr>			
					</tbody>
				</table>
					<br>
						<img src="../afbeeldingen/analyse_leerjaar_2/grafiek_belsnel_goedbellen.png" alt="grafiek_belsnel_goedbellen"/>
					</li>
					<li>
					<em>Belsnel</em>: <em>belkosten in €</em> = 15 + 0,10 &times; <em>aantal belminuten</em><br>
					<em>Goedbellen</em>: <em>belkosten in €</em> = 10 + 0,15 &times; <em>aantal belminuten</em>
					</li>
					<li>
						Wat kosten betreft zou ik Tamira <em>Belsnel</em> aanraden. Die is dan namelijk goedkoper. Natuurlijk kunnen andere redenen de doorslag geven om toch voor <em>Goedbellen</em> te kiezen.
					</li>
					
				</ol>
					
			</div>
		</div>
	
	</div>

<!-- tot hier gecheckt -->

<div class="tekstblok opdracht" id="opdracht_30">
	<h3>Opdracht 30 Formule opstellen</h3>
	<p>Gegeven zijn de punten A(0,2) en B(4,14).
	<ol>
		<li>
			Teken in een assenstelsel de lijn door de punten A(0,2) en B(4,14). Laat de lijn niet 
			stoppen bij de punten, het is namelijk geen lijnstuk, maar een lijn.
		</li>
		<li>
			Als de x-coördinaat met 4 toeneemt, dan neemt de y-coördinaat met … toe.
		</li>
		<li>
			Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met … toe.
		</li>
		<li>
			Wat is y als x=0?
		</li>
		<li>
			Maak de formule bij de grafiek `y=`...`x+`...
		</li>
	</ol>

	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
						<ol>
							<li>
								<br>
								<img class="img-small" src="afbeeldingen/analyse_leerjaar_2/opdracht_23.png"/>
							</li>
							<li>
								Als de x-coördinaat met 4 toeneemt, dan neemt de y-coördinaat met 12 toe.
							</li>
							<li>
								Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met 3 toe.
							</li>
							<li>
								Als `x=0` dan is `y=2`
							</li>
							<li>
								`y=3x+2`
							</li>
						</ol>

					

			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht" id="opdracht_31">
	<h3>Opdracht 31 Formule opstellen</h3>
	<p>
		Sterre maakt een formule van de grafiek evenwijdig aan de grafiek van de vorige opdracht. Haar formule gaat door (0, 9). Welke formule heeft zij gemaakt?	
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Evenwijdig aan de grafiek van `y=3x+2` betekent dat het hellingsgetal van de grafiek van Sterre ook `3` is.<br>
				De grafiek van Sterre gaat door (0, 9), dus het startgetal is `9`.<br>
				de formule van de grafiek van Sterre is: `y=3x+9`.
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_32">
	<h3>Opdracht 32 Formule opstellen</h3>
	<p>
		Sam wil een grafiek tweemaal zo steil als die van Sterre maken. De grafiek snijdt wel op hetzelfde punt de <em>y</em>-as. Welke formule moet hij maken?	
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				hellingsgetal bij Sterre is 3, dus hellingsgetal bij Sam is 6, want 2 &times; 3 = 6.<br>
				Het snijpunt met de <em>y</em>-as is (0, 9), dus het startgetal is `9`.
				De formule van van Sam is dan: `y = 6x + 9`.<br>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_33">
	<h3>Opdracht 33 Formule opstellen</h3>
	<p>
		Gegeven is de formule `y = 7x - 5`.<br>
		Maak een formule die half zo steil is én door (0, 2) gaat.
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				`a = 7/2 = 3 1/2`<br>
				`b = 2`<br>
				`y = 3 1/2 x + 2`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_34">
	<h3>Opdracht 34 (uitdaging)</h3>
	<p>
		Gegeven is de formule `y = 2x + 13`.<br>
		Maak de formule die driemaal zo steil is én door (-1, -12) gaat.
	</p>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Driemaal zo steil dus: `a = 3 * 2 = 6`<br>
				Vanaf punt (-1, -12) één stap naar rechts en zes omhoog is punt (0, -6).<br>
				Dat is snijpunt met de <em>y</em>-as, dus startgetal `= -6`.<br>
				Formule: `y = 6x - 6`
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_35">
	<h3>Opdracht 35 (uitdaging)</h3>
	<p>Gegeven zijn de punten A(-3,32) en B(7,2).<br>
		Maak de formule die door beide punten gaat.
	</p>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Van -3 naar 7 is 10 stappen over de <em>x</em>-as.<br>
				Van 32 naar 2 is 30 stappen over de <em>y</em>-as omlaag, oftewel -30.<br>
				Dus `a = (-30)/10 = -3`.<br>
				Van punt <em>A</em> is 3 stappen op de <em>y</em>-as, dan ook driemaal hellingsgetal voor <em>y</em>-waarde.<br>
				Dus `b = 32 - 3 * 3 = 23`.<br>
				Formule: `y=-3x+23`
			</p>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Maak de <a href="https://docs.google.com/a/vathorstcollege.nl/document/d/1f5Wa_CYXslMtTa1D5-waLrsEIFWd15hlrllKwCkCTHk/edit?usp=sharing" target="_blank">proeftoets</a> om je voor te bereiden op de echte.
	</p>
</div>











</div>