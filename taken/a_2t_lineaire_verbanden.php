<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Lineaire verbanden',
	 '#theorieA' => 'Lineaire formules',
	 '#theorieB' => 'Van tabel naar formule',
	 '#theorieC' => 'Het hellingsgetal is per 1',
	 '#theorieD' => 'Dalende lijnen',
	 '#theorieE' => 'Formules bij grafieken maken',
	 '#theorieF' => 'Grafieken tekenen met behulp van een tabel',
	 '#proeftoets' => 'Proeftoets');  
?>

<title>Leerjaar 2 | Lineaire verbanden (vmbo-t)</title>

<div class="taakinhoud">

<div class="tekstblok theorie analyse" id="inleiding">
		<h3>Lineaire verbanden</h3>
		<div class="row">
			<div class="col-xs-8">
			<p>
				In de grafiek is het verband tussen de <em>tijd</em> (aantal weken) en het <em>Bedrag</em> (euro's) weergegeven. De grafiek is een rechte lijn.
			</p>
			<p>
				Het verband tussen het <em>aantal weken</em> en het <em>bedrag</em> is een <b>lineair verband</b>. 
			</p>
			<p>
				Bij een lineair verband hoort <span id="hellingsgetal">regelmaat</span>. In de grafiek zie je dat aan de rechte lijn. In een tabel zie je de regelmaat terug in de gelijke stappen: als het <em>aantal weken</em> met 1 toeneemt, neemt het <em>Bedrag</em> telkens met 2 euro toe. 
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
								<td><em>aantal weken</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>
								<td colspan="2">5</td>
							</tr>
							<tr>
								<td><em>Bedrag in €</em></td>
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
			 Bij dit lineair verband kun je de volgende <b>woordformule</b> maken:
		</p>
		<p>
			<em>Bedrag in €</em> = <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>aantal weken</em>
		</p>
		<p>
			De <span id="hellingsgetal">regelmaat</span> bij een lineair verband wordt het <span id="hellingsgetal">hellingsgetal</span> genoemd. De <span id="startgetal">5</span> is het <span id="startgetal">startgetal</span>, je kunt deze waarde als het begin zien.
		</p>
	</div>

<div class="tekstblok opdracht" id="1">
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
		<li>Welke woordformule past bij de rij?</li>
			<ol id="numbers">
				<li><em>aantal sterren</em> = <span id="startgetal">2</span> + <span id="hellingsgetal">1</span> &times; <em>nummer figuur</em></li>
				<li><em>aantal sterren</em> = <span id="startgetal">1</span> + <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em></li>
			</ol>
		<li>Controleer je antwoord van de 6<sup>e</sup> figuur met de formule. Laat je berekening zien.</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>2 sterren</li>
					<li>2</li>
					<li>13 sterren</li>
					<li>
					<TABLE FRAME="void" RULES="all" style="text-align: center" width="500px" >
					<TR>
						<TD width="150"><em>nummer figuur</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD width="150"><em>aantal sterren</TD><TD>1</TD><TD>3</TD><TD>5</TD><TD>7</TD>
					</TR>
					</TABLE>
					</li>
					<li>1 ster</li>
					<li>1</li>
					<li><em>aantal sterren</em> = <span id="startgetal">1</span> + <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em></li>
					<li>1 + 2 x 6 = 13</li>
				</ol>
		</div>
	</div> 
</div>

<div class="tekstblok opdracht" id="2">
		<h3>Opdracht 2 Spaargeld</h3>
		<p>	
			Olivier gaat naar de kermis. Hij moet entree betalen én per attractie. De entree is 5 euro. Alle attracties kosten 2 euro.
		</p> 
		<ol>
			<li>
				Olivier gaat in de botsauto's en het spookhuis. Hoeveel euro is hij kwijt?
			</li>
			<li>
				Hoeveel is hij kwijt als hij in 4 attracties gaat?
			</li>
			<li>
				Welke woordformule past er bij dit verhaal?
				<ol id="numbers">
					<li><em>kosten in €</em> = <span id="startgetal">2</span> + <span id="hellingsgetal">5</span> &times; <em>aantal attracties</em></li>
					<li><em>kosten in €</em> = <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>aantal attracties</em></li>
					<li><em>kosten in €</em> = <span id="startgetal">7</span> + <em>aantal attracties</em></li>

				</ol>
			</li>
			<li>
				Controleer je antwoord van vraag <em>b</em> door <em>4</em> in te vullen in de formules.
			</li>
			<li>
				In hoeveel attracties kan hij als hij 21 euro mee heeft?
			</li>
			
		</ol>


	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Olivier gaat in de botsauto's en het spookhuis. Hoeveel euro is hij kwijt?
				</li>
				<li>
					Hoeveel is hij kwijt als hij in 4 attracties gaat?
				</li>
				<li>
					Welke woordformule past er bij dit verhaal?
					<ol id="numbers">
						<li><em>kosten in €</em> = <span id="startgetal">2</span> + <span id="hellingsgetal">5</span> &times; <em>aantal attracties</em></li>
						<li><em>kosten in €</em> = <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>aantal attracties</em></li>
						<li><em>kosten in €</em> = <span id="startgetal">7</span> + <em>aantal attracties</em></li>
	
					</ol>
				</li>
				<li>
					Controleer je antwoord van vraag <em>b</em> door <em>4</em> in te vullen in de formules.
				</li>
				<li>
					In hoeveel attracties kan hij als hij 21 euro mee heeft?
				</li>
			</ol>
		</div>
	</div>
		
		
	</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Lineaire formules</h3>
	<p>
		Als je in een verhaal, tabel of grafiek regelmaat vindt, kun je er een <b>woordformule</b> bij maken.
	</p>
	<p>
		Voor het maken van een woordformule is een <span id="startgetal">startgetal</span> en een <span id="hellingsgetal">hellingsgetal</span> nodig.
	</p>
	<p>
		De <b>algemene vorm</b> van een woordformule is:
	</p>
	<p>
		<em>uitvoer</em> = <span id="startgetal">startgetal</span> + <span id="hellingsgetal">hellingsgetal</span> &times; <em>invoer</em>
	</p>
	<br>	
	<p>
		<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>invoer</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
					</tr>
					<tr>
						<td><em>uitvoer</em></td>
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
		Het <span id="startgetal">startgetal</span> is de <b>uitvoer</b> van de 0<sup>e</sup> figuur, in dit geval <span id="startgetal">1</span>. <br>
		Het <span id="hellingsgetal">hellingsgetal</span> is <span id="hellingsgetal">+2</span>, omdat er steeds <span id="hellingsgetal">2</span> bij komt, zoals met pijlen is aangegeven.
	</p>
	<p>
		De woordformule die we hier bij kunnen maken is:<br>
		<em>uitvoer</em> = <span id="startgetal">1</span> + <span id="hellingsgetal">2</span> &times; <em>invoer</em>
	</p>
	<br>
	<p>
		Een <b>woordformule</b> beschrijft altijd het <span id="startgetal">begin</span> en de <span id="hellingsgetal">regelmaat</span> van een situatie.<br>
		Als de regelmaat <b>constant</b> is, spreek je van een <b>lineair verband</b>.
	</p>
</div>

<div class="tekstblok opdracht" id="3">
		<h3>Opdracht 3 Dropjes</h3>
		<p>
			<img src="afbeeldingen/analyse_leerjaar_2/dropjes.png"  width="300px">
		</p>
	<ol>
		<li>Uit hoeveel dropjes bestaat figuur 4?</li>
		<li>
			Uit hoeveel dropjes bestaat het 0<sup>e</sup> figuur? 
			<br>Neem over en vul in: <span id="startgetal">startgetal</span> = ... 	
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
			Neem over en vul in:<span id="hellingsgetal">hellingsgetal</span> = ...
		</li>
		<li>
			Hieronder staat de woordformule om het aantal dropjes te berekenen:   <br>
			<nobr><em>aantal dropjes</em>= <span id="startgetal">startgetal</span> + <span id="hellingsgetal">hellingsgetal</span> &times; <em>nummer van de figuur</em></nobr><br>
			Vervang de woorden <span id="startgetal">startgetal</span> en <span id="hellingsgetal">hellingsgetal</span> door de juiste getallen.
		</li>
		<li>
			Controleer je formule met figuur nummer 4.
		</li>
		<li>
			Bereken met behulp van de formule uit hoeveel blokken de 17<sup>e</sup> figuur bestaat.
		</li>
		
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>13 dropjes</li>
					<li>5 dropjes</li>
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
										<td colspan="2">5</td>
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
						<span id="hellingsgetal">hellingsgetal</span> = + 2. De <code style="color:black">+</code> moet erbij.	
					</li>
					<li>
						<nobr><em>aantal dropjes</em>= <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>nummer van de figuur</em></nobr>
					</li>
					<li>
					<nobr><em>aantal dropjes</em>= <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>4</em> = 13</nobr>
					</li>
					<li>
						<nobr><em>aantal dropjes</em>= <span id="startgetal">5</span> + <span id="hellingsgetal">2</span> &times; <em>17</em> = 39</nobr>
					  </li>
				</ol>
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Blokjes</h3>
	<p>
		<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_2.png" class="rightfloat" width="300px">
	</p>
	<ol>
		<li>Uit hoeveel blokken bestaat figuur 0?</li>
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
			<span id="startgetal">startgetal</span> = ... <br>
			 <span id="hellingsgetal">hellingsgetal</span> = ... 
		</li>
		<li>
			Maak de bijbehorende woordformule.
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
					Figuur 0 bestaat uit 2 blokken.
				</li>
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
					<span id="startgetal">startgetal</span> = 2 <br>
					 <span id="hellingsgetal">hellingsgetal</span> = 3
				</li>
				<li>
					<em>aantal blokjes</em> = 2 + 3 &times; <em>nummer figuur</em>
				</li>
				<li>
					Als <em>nummer figuur</em> =  3, dan<br>
					<em>aantal blokjes</em> = 2 + 3 &times; 3 = 11. Klopt!
				</li>
				<li>
					Als <em>nummer figuur</em> =  7, dan<br>
					<em>aantal blokjes</em> = 2 + 3 &times; 7 = 24.
				</li>
				<li>
					Er zijn 2 vaste blokjes. 29 blokjes - 2 vaste blokjes geeft nog 27 blokjes.<br>
					Er komen er steeds 3 blokjes bij. 27 kan ik precies door 3 delen. Dus een figuur
					met 29 blokjes kan!<br>
					Er bestaat wel een figuur met 29 blokjes.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieB">
			<h3>Theorie B Van tabel naar formule</h3>
			<p>
			De standaard woordformule is:<br>
			<nobr><em>uitvoer</em> = <span id="startgetal">startgetal</span> + <span id="hellingsgetal">hellingsgetal</span> &times; <em>invoer</em></nobr>
		</p>
			<p>
			In plaats van de woorden <b>invoer</b> en <b>uitvoer</b>, gebruiken we voortaan een <b>afkorting</b>. De woordformule wordt dan een <b>formule</b>.
			</p>
			<p>
				Bijvoorbeeld <em>aantal blokjes</em> korten we af met een <em>b</em> en <em>nummer figuur</em> met een <em>n</em>.  De formule bij deze situatie wordt dan: <br><nobr><em>b</em> = <span id="startgetal">startgetal</span> + <span id="hellingsgetal">hellingsgetal</span> &sdot; <em>n</em></nobr>.
		</p>
			<p>
			Om een formule te maken bij een tabel, doe je het volgende:
		</p>
			<ol class="numbers">
			<li>bepaal het <span id="startgetal">startgetal</span>;</li>
			<li>bepaal het <span id="hellingsgetal">hellingsgetal</span>;</li>
			<li>kort de woorden af;</li>
			<li>vul de gevonden getallen in in de standaard formule.	</li> 
		</ol>
		<hr>
			<p>
			Als voorbeeld bepalen we de formule bij de volgende tabel:
		</p>
		<br>
		<table class="verhouding">
		
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
				<td colspan="2"><span id="startgetal">8</span></td>
				<td colspan="2">11</td>
				<td colspan="2">14</td>
				<td colspan="2">17</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th></th>
			</tr>
		</tfoot>	
		</table>
		<table class="table">
				<tbody>
					<tr>
						<td width="60">Stap 1</td>
						<td width="240">Bepaal het <span id="startgetal">startgetal</span>.<br> Kijk onder <em>nummer figuur</em> = 0.</td>
						<td width="200"><span id="startgetal">startgetal</span> = 8</td>
					</tr>
					<tr>
						<td>Stap 2</td>
						<td>Bepaal het <span id="hellingsgetal">hellingsgetal</span>.<br>Als ik 1 stapje naar rechts ga, dan komt er onderin 3 bij.
						</td>
						<td><span id="hellingsgetal">hellingsgetal</span> = +3</td>
					</tr>
					<tr>
						<td>Stap 3</td>
						<td>Afkorten.</td>
						<td><em>n</em> = <em>nummer figuur</em><br>
								<em>b</em> = <em>aantal blokjes</em>
						</td>
					</tr>
					<tr>
						<td>Stap 4</td>
						<td>Zet alles in de standaardformule.</td>
						<td><nobr><em>b</em> = <span id="startgetal">8</span> + <span id="hellingsgetal">3</span><em>n</em></nobr> </td>
					</tr>
				</tbody>
			</table>
	</div>

<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Blokjes</h3>
		<div class="row">
			<div class="col-md-8">
					<p>
						Gegeven is de volgende tabel:
					</p>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>nummer figuur</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
						</tr>
						<tr>
							<td><em>aantal blokjes</em></td>
							<td colspan="2">4</td>
							<td colspan="2">9</td>
							<td colspan="2">14</td>
							<td colspan="2">19</td>
							<td colspan="2">24</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+5</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 5</th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
			<ol>
				<li>
					Neem over en vul in:<br>
					<span id="startgetal">startgetal</span> = ... <br>
					<span id="hellingsgetal">hellingsgetal</span> = ... 				
				</li>
				<li>
					Kort <em>nummer figuur</em> en <em>aantal blokjes</em> af met één letter.
				</li>
				<li>
					Maak de bijbehorende formule.
				</li>
				<li>
					Hoe kun je controleren of je formule klopt?
				</li>
				<li>
					Bereken met de formule uit hoeveel blokjes de 9<sup>e</sup> figuur bestaat.
				</li>
			</ol>
			<div class="hider">
				<div class="showhide">&rarr;</div>
				<div class="antwoord">
					<ol>
						<li>
							<span id="startgetal">startgetal</span> = 4 <br>
							<span id="hellingsgetal">hellingsgetal</span> = 5 				
						</li>
						<li>
							<em>nummer figuur</em> = <em>f</em><br>
							<em>aantal blokjes</em> = <em>b</em>
						</li>
						<li>
							`b= 4 + 5f`
						</li>
						<li>
							Door twee combinaties uit de tabel na te rekenen met de formule.<br>
							Ik kies (1, 9) en (2, 14).<br>
							Als `f=1`, dan `b= 4 + 5 * 1 = 9`. Klopt!<br>
							Als `f=2`, dan `b= 4 + 5 * 2 = 14`. Klopt ook!
						</li>
						<li>
							Als `f=9`, dan `b= 4 + 5 * 9 = 4 + 45 = 49`.<br>
							De 9<sup>e</sup> figuur bestaat uit 49 blokjes.
						</li>
					</ol>
			</div>
		</div>
	</div>
			<div class="col-md-4">
					<p class="geeltje">
						Bij een <b>woordformule</b> gebruik je woorden.<br>
						Bij een <b>formule</b> gebruik je <b>letters</b>.
					</p>
				</div>
		</div>
</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Spaargeld</h3>
	<div class="row">
			<div class="col-xs-8">
				<p>
					In de grafiek lees je af dat in 4 weken tijd het bedrag van 4 naar 14 euro is gegroeid. In de tabel zie je onder 4 bij <em>aantal weken</em> 14 staan bij <em>Bedrag in €</em>.
				</p>
				<br>
				<ol>
					<li>
						Neem de tabel hieronder over en maak hem af.<br>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>aantal weken</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>
									</tr>
									<tr>
										<td><em>Bedrag in €</em></td>
										<td colspan="2">...</td>
										<td colspan="2">6,5</td>
										<td colspan="2">9</td>
										<td colspan="2">...</td>
										<td colspan="2">14</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2"></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
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
						<span id="startgetal">startgetal</span> = ... <br>
						<span id="hellingsgetal">hellingsgetal</span> = ... 				
					</li>
					<li>
						Maak de bijbehorende formule.
					</li>
					<li>
						Hoe kun je controleren of je formule klopt?
					</li>
					<li>
						Bereken met de formule welk bedrag er na 8 weken is gespaard.
					</li>
				</ol>
			</div>
			<div class="col-xs-4">
				<img src="afbeeldingen/analyse_leerjaar_2/spaargeld.png" class="img-responsive" width="40%">
			</div>
		</div>	
	
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
										<td><em>aantal weken</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>
									</tr>
									<tr>
										<td><em>Bedrag in €</em></td>
										<td colspan="2">4</td>
										<td colspan="2">6,5</td>
										<td colspan="2">9</td>
										<td colspan="2">11,5</td>
										<td colspan="2">14</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2"></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2,50</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2,50</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2,50</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2,50</th>
										<th></th>
									</tr>
								</tfoot>	
							</table>
						</div>
					</li>
					<li>
						Neem over en vul in:<br>
						<span id="startgetal">startgetal</span> = 4 <br>
						<span id="hellingsgetal">hellingsgetal</span> = 2,5  				
					</li>
					<li>
						B = 4 + 2,5w<br>
						met <em>B</em> voor <em>Bedrag in €</em> en <em>w</em> voor <em>aantal weken</em><br>
						Let op: `2,5w=2,5*w`.
					</li>
					<li>
						Twee combinaties uit de tabel narekenen.<br>
						Ik kies voor (1; 6,5) en (2, 9).<br>
						Bij <em>w = 1</em> hoort <em>B</em> = 6,5.<br>
						Controle: `B=4 + 2,5*1 = 6,5` klopt.<br>
						Bij <em>w = 2</em> hoort <em>B</em> = 9.<br>
						Controle: `B=4 + 2,5*2 = 9` klopt.<br>
					</li>
					<li>
						Bij <em>w = 8</em> hoort `B=4 + 2,5*8 = 4 + 20 = 24`.<br>
						Na 8 weken is er 24 euro gespaard.
					</li>
				</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="7">
		<h3>Opdracht 7 Vermogen</h3>	
		<div class="row">
			<div class="col-xs-8">
				<p>Hiernaast zie je een grafiek:</p>
				<ol>
					<li>
						Neem de tabel over en vul hem in.
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>tijd in weken</em></td>
										<td colspan="2">0</td>
										<td colspan="2">2</td>
										<td colspan="2">4</td>
										<td colspan="2">6</td>

									</tr>
									<tr>
										<td><em>Bedrag in euro's</em></td>
										<td colspan="2">-25</td>
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
					<li>De tabel maakt bovenin stapjes van twee! Neem over en vul in:<br>
						In twee weken tijd, komt er ... euro bij.
					</li>
					<li>Voor het hellingsgetal moet ik kijken hoeveel er in één week bij komt. Neem over en vul in:<br>
						In één week komt er ... euro bij.
					</li>
					<li>
						Neem over en vul in:<br>
						<span id="startgetal">startgetal</span> = ... <br>
						<span id="hellingsgetal">hellingsgetal</span> = ... 	
					</li>
					<li>
						Maak nu de formule voor de rechte lijn. Neem over en zet de juiste getallen op de plek van <span id="startgetal">startgetal</span> en <span id="hellingsgetal">hellingsgetal</span>,<br>
						y = <span id="startgetal">startgetal</span> + <span id="hellingsgetal">hellingsgetal</span> &sdot; x
					</li>
				</ol>
			</div>
			<div class="col-xs-4">
				<img src="afbeeldingen/analyse_leerjaar_2/vermogen.png" class="img-responsive">
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
										<td><em>tijd in weken</em></td>
										<td colspan="2">0</td>
										<td colspan="2">2</td>
										<td colspan="2">4</td>
										<td colspan="2">6</td>

									</tr>
									<tr>
										<td><em>Bedrag in euro's</em></td>
										<td colspan="2">-25</td>
										<td colspan="2">-15</td>
										<td colspan="2">-5</td>
										<td colspan="2">5</td>

									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2"></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 10</th>
										<th></th>
									</tr>
								</tfoot>	
							</table>
						</div>
					</li>
					<li>
						In twee weken tijd, komt er 10 euro bij.
					</li>
					<li>
						In één week komt er 5 euro bij.
					</li>
					<li>
						<span id="startgetal">startgetal</span> = -25 <br>
						<span id="hellingsgetal">hellingsgetal</span> = 5 	
					</li>
					<li>
						<em>B</em> = <span id="startgetal">-25</span> + <span id="hellingsgetal">5</span><em>t</em>
					</li>
				</ol>				
		</div>
	</div>
		</div>

<div class="tekstblok theorie analyse" id="theorieC">
		<h3>Theorie C Het hellingsgetal is per 1</h3>
		<p>
			Om een formule te maken bij een tabel, doe je het volgende:
		</p>
		<ol class="numbers">
			<li>bepaal je het <span id="startgetal">startgetal</span>;</li>
			<li>bepaal je het <span id="hellingsgetal">hellingsgetal</span>;</li>
			<li>kort je de woorden bij invoer en uitvoer af;</li>
			<li>vul alles in in de standaard formule.</li>
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
						<td><nobr><em>B</em> = <span id="startgetal">32</span> + <span id="hellingsgetal">5</span><em>t</em></nobr> </td>
					</tr>
				</tbody>
		</table>
		<p class="geeltje">
			Merk op dat <em>5t</em> staat voor <em>5</em> &times; <em>t</em> of <em>5</em> &sdot; <em>t</em>. Het maalteken moet je weglaten.
		</p>
	</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Formule maken</h3>
	<p>
		Maak de formules bij de volgende tabellen:
	</p>
	<br>	
	<ol>
		<li>
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
				<td colspan="2"><span id="startgetal">10</span></td>
				<td colspan="2">20</td>
				<td colspan="2">30</td>
				<td colspan="2">40</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th></th>
			</tr>
		</tfoot>	
	</table>
		</li>
		<li>
			<table class="verhouding">
		<tbody>
			<tr class="borderbottom">
				<td><em>tijd in weken</em></td>
				<td colspan="2">0</td>
				<td colspan="2">5</td>
				<td colspan="2">10</td>
				<td colspan="2">15</td>	
			</tr>
			<tr>
				<td><em>Bedrag in euro's</em></td>
				<td colspan="2"><span id="startgetal">8</span></td>
				<td colspan="2">18</td>
				<td colspan="2">28</td>
				<td colspan="2">38</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
				<th></th>
			</tr>
		</tfoot>	
	</table>
		</li>
		<li>
			<table class="verhouding">
		<tbody>
			<tr class="borderbottom">
				<td><em>tijd in weken</em></td>
				<td colspan="2">0</td>
				<td colspan="2">2</td>
				<td colspan="2">4</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>Bedrag in euro's</em></td>
				<td colspan="2"><span id="startgetal">3</span></td>
				<td colspan="2">6</td>
				<td colspan="2">9</td>
				<td colspan="2">12</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
				<th></th>
			</tr>
		</tfoot>	
	</table>
		</li>
		<li>
			<table class="verhouding">
		<tbody>
			<tr class="borderbottom">
				<td><em>tijd in weken</em></td>
				<td colspan="2">0</td>
				<td colspan="2">10</td>
				<td colspan="2">20</td>
				<td colspan="2">30</td>	
			</tr>
			<tr>
				<td><em>Bedrag in euro's</em></td>
				<td colspan="2"><span id="startgetal">40</span></td>
				<td colspan="2">70</td>
				<td colspan="2">100</td>
				<td colspan="2">130</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 30</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 30</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 30</span></th>
				<th></th>
			</tr>
		</tfoot>	
	</table>
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					startgetal = 10<br>
					hellingsgetal = 10 : 4 = 2,5<br>
					B = 10 + 2,5t
				</li>
				<li>
					startgetal = 8<br>
					hellingsgetal = 10 : 5 = 2<br>
					B = 8 + 2t
				</li>
				<li>
					startgetal = 3<br>
					hellingsgetal = 3 : 2 = 1,5<br>
					B = 3 + 1,5t
				</li>
				<li>
					startgetal = 40<br>
					hellingsgetal = 30 : 10 = 3<br>
					B = 40 + 3t
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieD">
		<h3>Theorie D Dalende lijnen</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
				In het geval van een afname of daling is het <span id="hellingsgetal">hellingsgetal</span> <b>negatief</b>.
			</p>
				<p>
					Als je een kaars brandt, dan wordt de kaars steeds kleiner. Het verband tussen de tijd dat de kaars brandt en de lengte van de kaars is lineair én neemt af.
				</p>
				<p>
					Om een formule op te stellen, maken we eerst een kleine tabel. Voor de juiste getallen kijken we in de grafiek <em>Kaars</em>.
				</p>
			</div>
			<div class="col-xs-4">
				<img src="afbeeldingen/analyse_leerjaar_2/kaars.png" alt="kaars" />
			</div>
		</div>
		<br>
			<div class="table-responsive verhouding">
				<table class="verhouding">
		<tbody>
			<tr class="borderbottom">
				<td><em>aantal uren</em></td>
				<td colspan="2">0</td>
				<td colspan="2">2</td>
				<td colspan="2">4</td>
				<td colspan="2">6</td>	
			</tr>
			<tr>
				<td><em>lengte in cm</em></td>
				<td colspan="2"><span id="startgetal">24</span></td>
				<td colspan="2">16</td>
				<td colspan="2">8</td>
				<td colspan="2">0</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 8</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 8</span></th>

<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 8</span></th>

				<th></th>
			</tr>
		</tfoot>	
	</table>
			</div>		
		<p>
			De kaars had een <span id="startgetal">beginlengte</span> van <span id="startgetal">24</span> cm en verbrandt 8 cm in 2 uur. Per uur is dat 4 cm. Het <span id="hellingsgetal">hellingsgetal</span> is nu <span id="hellingsgetal">-4</span> omdat de lengte afneemt. 
			</p>
			<p>
				De formule bij dit verband wordt dan:

				<nobr><em>l</em> = <span id="startgetal">24</span> - <span id="hellingsgetal">4</span><em>u</em></nobr>
			</p>
		
	</div>	

<div class="tekstblok opdracht" id="9">
		<h3>Opdracht 9 Kaarsen</h3>
		<p>
			Vul bij de grafieken eerst de tabellen in en stel daarna de formules op.
		</p>
		<br>
			<img src="../afbeeldingen/analyse_leerjaar_2/blauwe_kaars_groene_kaars.png" alt="blauwe_kaars_groene_kaars" width="" height="" />
		<br>
		<p>
			Blauwe kaars
		</p>
		<br>
		<div class="table-responsive verhouding">
				<table class="verhouding">
		<tbody>
			<tr class="borderbottom">
				<td><em>aantal uren</em></td>
				<td colspan="2">0</td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>
				<td colspan="2">4</td>	
			</tr>
			<tr>
				<td><em>lengte in cm</em></td>
				<td colspan="2"><span id="startgetal">20</span></td>
				<td colspan="2">...</td>
				<td colspan="2">...</td>
				<td colspan="2">...</td>
				<td colspan="2">...</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
				<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>

<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
				<th></th>
			</tr>
		</tfoot>	
	</table>
			</div>
		<br>
		<p>
			Groene kaars
		</p>
		<br>
		<div class="table-responsive verhouding">
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>	
							<td colspan="2">4</td>
						</tr>
						<tr>
							<td><em>lengte in cm</em></td>
							<td colspan="2"><span id="startgetal">30</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">6</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr >
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
			
			<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
			<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
		<br>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Blauwe kaars
			</p>
			<br>
			<div class="table-responsive verhouding">
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>	
						</tr>
						<tr>
							<td><em>lengte in cm</em></td>
							<td colspan="2"><span id="startgetal">20</span></td>
							<td colspan="2">15</td>
							<td colspan="2">10</td>
							<td colspan="2">5</td>
							<td colspan="2">0</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr >
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 5</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 5</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 5</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 5</span></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
				</div>
			<br>
			<p>
				Formule bij <em>Blauwe kaars</em>:<br>
				`l = 20 -5u`<br>
				Met <em>l</em> voor de <em>lengte in cm</em> en <em>u</em> voor de <em>tijd in uren</em>.
			</p>
			<br>
			<hr>
			<br>
			<p>
				Groene kaars
			</p>
			<br>
			<div class="table-responsive verhouding">
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>aantal uren</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>	
								<td colspan="2">4</td>
							</tr>
							<tr>
								<td><em>lengte in cm</em></td>
								<td colspan="2"><span id="startgetal">30</span></td>
								<td colspan="2">24</td>
								<td colspan="2">18</td>
								<td colspan="2">12</td>
								<td colspan="2">6</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr >
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 6</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 6</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 6</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 6</span></th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
					<p>
						Formule bij <em>Groene kaars</em>:<br>
						`l = 30 -6u`<br>
						Met <em>l</em> voor de <em>lengte in cm</em> en <em>u</em> voor de <em>tijd in uren</em>.
					</p>
				</div>
		</div>
	</div>
		
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 Formule maken mix</h3>
	<p>
		Maak de formules bij de volgende tabellen. 
	</p>
	<br>	
	<ol>
		<li>
			<table class="verhouding">
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
						<td colspan="2"><span id="startgetal">-10</span></td>
						<td colspan="2">5</td>
						<td colspan="2">20</td>
						<td colspan="2">35</td>
					</tr>			
				</tbody>
			</table>
		</li>
		<li>
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>t</em></td>
						<td colspan="2">0</td>
						<td colspan="2">5</td>
						<td colspan="2">10</td>
						<td colspan="2">15</td>	
					</tr>
					<tr>
						<td><em>B</em></td>
						<td colspan="2"><span id="startgetal">38</span></td>
						<td colspan="2">28</td>
						<td colspan="2">18</td>
						<td colspan="2">8</td>
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
					startgetal = -10<br>
					hellingsgetal = 15 : 3 = 5<br>
					`y = -10 + 5x`
				</li>
				<li>
					startgetal = 38<br>
					hellingsgetal = -10 : 5 = -2<br>
					`y = 38 - 2t`
				</li>
			</ol>
		</div>
	</div>
</div>	

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Grafiek met dalende lijn</h3>
	<div class="row">
		<div class="col-xs-6">
			<p>Hiernaast zie je een grafiek:</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in.
					<table class="verhouding">
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
					</table>
				</li>
				<li>
					Maak nu de formule voor de rechte lijn. 
				</li>
			</ol>
		</div>
		<div class="col-xs-6">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/regelmaat_7.png">
		</div>
	</div>
	
	<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Neem de tabel over en vul hem in.
						<table class="verhouding">
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
						</table>
					</li>
					<li>
						Startgetal = 10<br>
						Hellingsgetal = -3<br>
						`y=10 -3x` 
					</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="12">
		<h3>Opdracht 12 Grafiek met stijgende lijn</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>Hiernaast zie je een grafiek:</p>
				<ol>
					<li>
						Neem de tabel over en vul hem in.
						<table class="verhouding">
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
					</table>
				</li>
				<li>
					Maak nu de formule voor de rechte lijn. 
				</li>
			</ol>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_2/regelmaat_6.png" width="50%">
			</div>
		</div>
		
				<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Neem de tabel over en vul hem in.
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>x</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
								</tr>
								<tr>
									<td><em>y</em></td>
									<td colspan="2">8</td>
									<td colspan="2">14</td>
									<td colspan="2">20</td>
								</tr>			
							</tbody>
						</table>
					</li>
					<li>
						Startgetal = 8<br>
						Hellingsgetal = 6 : 2 = 3 <br>
						`y= 8 + 3x` 
					</li>
				</ol>
			</div>
		</div>
	</div>

<div class="tekstblok opdracht" id="13">
	
	<h3>Opdracht 13 Formule maken bij tabellen</h3>
<ol>
	<li>
		Maak de formule die hoort bij de tabel hieronder:
		<br>
		<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>x</em></TD><TD>0</TD><TD>4</TD><TD>8</TD>
				</TR>
				<TR>
					<TD><em>y</em></TD><TD>16</TD><TD>24</TD><TD>32</TD>
				</TR>
		</TABLE>

	</li>
	<br>
	<li>
		Maak de formule die hoort bij de tabel hieronder:
		<br>
		<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>tijd</em></TD><TD>0</TD><TD>5</TD><TD>10</TD>
				</TR>
				<TR>
					<TD><em>Afstand</em></TD><TD>-8</TD><TD>7</TD><TD>22</TD>
				</TR>
		</TABLE>
	</li>
	<br>
	<li>
		Maak de formule die hoort bij de tabel hieronder:
		<br>
		<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>uren</em></TD><TD>0</TD><TD>10</TD><TD>20</TD>
				</TR>
				<TR>
					<TD><em>Lengte kaars</em></TD><TD>60</TD><TD>30</TD><TD>0</TD>
				</TR>
		</TABLE>
	</li>
</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>Hellingsgetal</em> = `8/4 = 2`<br>
					<em>Startgetal</em> = `16`<br>
					`y=16 + 2x`
				</li>
				<li>
					<em>Hellingsgetal</em> = `15/5 = 3`<br>
					<em>Startgetal</em> = `-8`<br>
					`A= -8 + 3t`
				</li>
				<li>
					<em>Hellingsgetal</em> = `(-30)/10 = -3`<br>
					<em>Startgetal</em> = `60`<br>
					`k = 60 - 3u`
				</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="14">	
	<h3>Opdracht 14 Startgetal onbekend</h3>
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
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 8</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 8</span></th>
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
					Omdat er boven in de tabel geen `x=0` staat!
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
					`y=8+4x`
			</li>
			</ol>

		</div>
	</div>
</div>
	
<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Startgetal onbekend</h3>
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
						`B=450 - 10w`
				</li>
				</ol>
			</div>
		</div>
	
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Formule maken mix</h3>
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
					`N=4 + 3u`
				</li>
				<li>
					`y=200 -20x`
				</li>
			</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="17">
<h3>Opdracht 17 Formules maken bij grafieken</h3>
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
			Waarom staat er in de bovenste rij bij het derde vakje x = 4 en niet bijvoorbeeld x = 2? Tip: Kijk naar je grafiek!
		</li>

	<p>
		Om de waarden precies te kunnen aflezen, kiezen we voor roosterpunten. De coördinaten van die roosterpunten zetten we in de tabel. Met behulp van die tabel kunnen we de formule van een grafiek bepalen.
	</p>

		<li>
			Zoek in de blauwe grafiek twee roosterpunten en schrijf deze op:<br>(..., ...) en (..., ...).
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
					<TABLE class= "verhouding">
						<TR>
							<TD><em>t</em> in uren</TD><TD>0</TD><TD>4</TD><TD>8</TD>
						</TR>
						<TR>
							<TD><em>T</em> in graden celsius</TD><TD>5</TD><TD>10</TD><TD>15</TD>
						</TR>
					</TABLE>
				</li>
				<li>
					Bij `t=4` hoort een roosterpunt. Je kan dus precies aflezen welke `T`-waarde erbij hoort!
				</li>
				<li>
					(`0,20`) en (`10,-10`)
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
					rood: `T = 5 + 1,25t`<br>
					blauw: `T = 20 -3t`
				</li>
			</ol>
			
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
		<h3>Theorie E Formules bij grafieken maken</h3>
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
			Afspraak: het <span id="hellingsgetal">hellingsgetal</span> is de toename per 1 in de bovenste rij.
		</p>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Het <span id="startgetal">startgetal</span> vind je onder de 0 in de bovenste rij en is <span id="startgetal">5</span>. <br>
					Het <span id="hellingsgetal">hellingsgetal</span> vind je door de toename van 2 per 4 om te rekenen naar <span id="hellingsgetal">`1/2`</span> per 1, want 2 : 4 = `1/2`.
				</p>
				<p>
					De formule wordt dan:	<em>A</em> = 5 + `1/2`<em>u</em>
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

<div class="tekstblok opdracht" id="18">
		<h3>Opdracht 18 Formules maken </h3>
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
					Formule rode grafiek: `y =5 + 2x`<br>
					Formule groene grafiek: `y = 5 - 5x`	
				</p>
			</div>
		</div>
	</div>

<div class="tekstblok opdracht" id="19">
		<h3>Opdracht 19 Formules maken</h3>
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
	
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					Formule rode grafiek: `y = 10 + 4x`<br>
					Formule groene grafiek: `y = 30 + 4x`	
				</p>
			</div>
		</div>
	</div>

<div class="tekstblok opdracht" id="20">
		<h3>Opdracht 20 Formules maken</h3>
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
				groen: `y = - 2 + 4x`<br>
				rood: `y = 1 + 1/3 x`<br>
				blauw: `y = 3 - 1/2 x`
			</p>	
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Formules maken</h3>
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
			Hoeveel hebben ze dan verdiend?
		</li>
	
		<p>
			Voor het goede doel werken Stijn en Hatice zo lang mogelijk.<br>
			Ze houden het beiden 20 uur vol.<br>
		</p>

		<li>
			Gebruik de formules om te berekenen hoeveel Hatice en Stijn <b>samen</b> verdienen voor het goede doel.<br>
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
					`I` <sub>Stijn</sub> `=10+1,25t`<br>
					`I` <sub>Hatice</sub> `=5+2,5t`
				</li>
				<li>
					Bij 4 uur werken.
				</li>
				<li>
					Ze hebben dan €15 verdiend.
				</li>
				<li>
					`I` <sub>Stijn</sub> `=10 + 1,25 &times;20`<br>
					`I` <sub>Stijn</sub> `=10 + 25 = 35`<br>
					<br>
					`I` <sub>Hatice</sub> `=5 + 2,5 &times; 20`<br>
					`I` <sub>Hatice</sub> `=5 + 50 = 55`<br>
					<br>
					Samen verdienen ze: `35 + 55 = 90` euro.
				</li>
			</ol>

		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="22">
		<h3>Opdracht 22 Fietsen naar school (uitdaging)</h3>
		<p>
			Hannah moet 15 kilometer fietsen naar school. Daar doet ze precies 1 uur over. <br>
			Als Hannah een 20 minuten weg is, merkt haar vader dat ze haar tas vergeten is. Hij springt direct op zijn scooter en probeert haar in te halen.
			Zijn scooter rijdt 30 km/uur. 
		</p>
		<p>
			We gaan onderzoeken of de vader van Hannah op tijd is om Hannah de tas te bezorgen voor ze bij school komt.<br>
		</p>
		<ol>
			<li>
				<img src="afbeeldingen/analyse_leerjaar_2/Hannah_leeg.png" class="rightfloat" width="300px">
				Neem het assenstelsel hiernaast over. Zet bij de horizontale as de <em>t in minuten</em>. 
				en bij de verticale as <em>A in kilometers</em>.	
			</li>
			<li>
				Op `t=0` vertrekt Hannah van huis. Het is dan `08.00` uur.<br>
				Neem over en vul in:<br>
				Voor Hannah geldt: bij 	`t = 0` hoort `A=`...
			</li>
			<li>
				Hannah rijdt `15` kilometer per uur.<br>
				Neem over en vul in:<br>
				Voor Hannah geldt: bij `t=60` hoort `A = `...
			</li>
			<li>
				Neem de tabel over en vul in:<br><br>
				<TABLE class= "verhouding">
							<TR>
								<TD><em>t</em></TD><TD>0</TD><TD>60</TD>
							</TR>
							<TR>
								<TD><em>A Hannah kilometers</em></TD><TD></TD><TD></TD>
							</TR>
				</TABLE><br>
			</li>
			<li>
				Teken de grafiek van Hannah in het assenstelsel van opgave a. Zet langs de grafiek haar naam.
			</li>
			<li>
				Hoe laat is Hannah op school?
			</li>
			<li>
				De vader van Hannah springt na 20 minuten op zijn scooter.<br>
				Neem over en vul in:<br>
				Voor vader geldt: bij `t=20` hoort `A=`...
			</li>
			<li>
				De scooter gaat 30 kilometer per uur. Hoeveel kilomter heeft vader gereden na 10 minuten?
			</li>
			<li>
				Neem de tabel hieronder over en vul in:<br><br>
				<TABLE class= "verhouding">
							<TR>
								<TD><em>t in minuten</em></TD><TD>20</TD><TD>30</TD>
							</TR>
							<TR>
								<TD><em>A vader in kilometers</em></TD><TD></TD><TD></TD>
							</TR>
				</TABLE><br>
			</li>
			<li>
				Teken in het assenstelsel van opgave a. de grafiek van vader. Zet vader bij de grafiek.
			</li>
			<li>
				Kijk naar de grafieken. Heeft de vader van Hannah haar ingehaald voor ze op school is?
			</li>
		</ol>

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

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F Grafieken tekenen met behulp van een tabel</h3>
	<p>	
		We gaan de grafiek van de formule `N = 1 + 2u` met behulp van een tabel tekenen.
	</p>
	
		<table class="table">
			<tbody>
				<tr>
					<th>
						<u>Stap 1:</u>
					</th>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						Neem de tabel over en vul hem in.<br>
						Bij `u=0` hoort `N = 1 + 2 &times; 0 = 1` <br>
						Bij `u=1` hoort `N = 1 + 2 &times; 1 = 3` <br>
						et cetera
					</td>
					<td>
						<table class="verhouding">
							<tbody>
								<tr class="borderbottom">
									<td><em>u</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>	
								</tr>
								<tr>
									<td><em>N</em></td>
									<td colspan="2"><span id="startgetal">1</span></td>
									<td colspan="2">3</td>
									<td colspan="2">5</td>
									<td colspan="2">7</td>
									<td colspan="2">9</td>
								</tr>			
							</tbody>
						</table>
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
						(0, 1), (1, 3), (2, 5), (3, 7) en (4, 9)
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
					</td>
					<td>
						<img src="../afbeeldingen/analyse_leerjaar_2/assenstelsel_u_N.png" alt="assenstelsel_u_N" id="small-img" />
					</td>
				</tr>
				<tr>
					<th>
						<u>Stap 4:</u>
					</th>
					<td>
					</td>
				</tr>
				<tr>
					<td>
						Zet de punten in het assenstelsel en trek een <b>rechte</b> lijn door de punten (geodriehoek). Zet de formule bij de lijn.
					</td>
					<td>
						<img src="../afbeeldingen/analyse_leerjaar_2/assenstelsel_u_N_grafiek.png" alt="assenstelsel_u_N_grafiek" id="small-img" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>

<div class="tekstblok opdracht" id="23">
		<h3>Opdracht 23 Grafieken tekenen</h3>
		<p>
			Teken de grafiek van de formule `A = 6 + 4t` met behulp van een tabel.
		</p>
		<ol>
			<li>
				Neem de tabel over en vul in: 
				<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>t</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>
						<td colspan="2">4</td>	
					</tr>
					<tr>
						<td><em>A</em></td>
						<td colspan="2"><span id="startgetal">...</span></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
			</table>
			</li>
			<li>
				Waarom is het handig om als eerste waarde in de tabel `t = 0` te kiezen?
			</li>			
			<li>
				Maak de coördinatenparen zodat je weet welke punten je gaat tekenen.
			</li>
			<li>
				Teken een geschikt assenstelsel en benoem de beide assen.
			</li>
			<li>
				Teken de grafiek en zet de formule erbij.
			</li>
		</ol>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Neem de tabel over en vul in: 
						<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>t</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>
								<td colspan="2">4</td>	
							</tr>
							<tr>
								<td><em>A</em></td>
								<td colspan="2"><span id="startgetal">6</span></td>
								<td colspan="2">10</td>
								<td colspan="2">14</td>
								<td colspan="2">18</td>
								<td colspan="2">22</td>
							</tr>			
						</tbody>
					</table>
					</li>
					<li>
						Bij `t=0` vind je het <span id="startgetal">startgetal</span>.
					</li>			
					<li>
						(0, 6), (1, 10), (2, 14), (3, 18) en (4, 22)
					</li>
					<li>
						zie grafiek
					</li>
					<li>
						zie grafiek<br>
						<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_2/Ais6plus4t.png" alt="Ais6plus4t" />
					</li>
				</ol>				
			</div>
		</div>
	</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Taxibedrijf James</h3>
	<p>
		Taxibedrijf <em>James</em> gebruikt voor het berekenen van de ritprijs de volgende formule:
	</p>
	<p>
		<em>P</em> = 7,50 + 2,50 &times; <em>a</em>
	</p>
	<p>
		Met <em>P</em> voor de <em>ritprijs is euro's</em> en <em>a</em> voor de <em>afstand in kilometers</em>.
	</p>
	<ol>
		<li>Neem de tabel over en vul in: 
			<table class="verhouding">
				<tbody>
					<tr class="borderbottom">
						<td><em>a</em></td>
						<td colspan="2">0</td>
						<td colspan="2">10</td>
						<td colspan="2">20</td>
						<td colspan="2">30</td>
						<td colspan="2">40</td>	
						<td colspan="2">50</td>
					</tr>
					<tr>
						<td><em>P</em></td>
						<td colspan="2"><span id="startgetal">...</span></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
			</table>
		</li>
	</ol>
	<div class="row">
		<div class="col-sm-6">
			<ol start="2">
				<li>
					Bepaal de coördinaten van de zes punten uit de tabel.
				</li>
				<li>
					Zet de juiste waarde en namen in het assenstelsel en teken de grafiek bij de formule.
					
				</li>
				
			</ol>
		</div>
		<div class="col-sm-6">
			<img src="../afbeeldingen/analyse_leerjaar_2/taxibedrijf_James_leeg.png" alt="verband_afstand_ritprijs" width="" height="" id="small-img"/>
		</div>
	</div>		
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>Neem de tabel over en vul in: 
					<table class="verhouding">
						<tbody>
							<tr class="borderbottom">
								<td><em>a</em></td>
								<td colspan="2">0</td>
								<td colspan="2">10</td>
								<td colspan="2">20</td>
								<td colspan="2">30</td>
								<td colspan="2">40</td>	
								<td colspan="2">50</td>
							</tr>
							<tr>
								<td><em>P</em></td>
								<td colspan="2"><span id="startgetal">7,50</span></td>
								<td colspan="2">17,50</td>
								<td colspan="2">27,50</td>
								<td colspan="2">37,50</td>
								<td colspan="2">47,50</td>
								<td colspan="2">57,50</td>
							</tr>			
						</tbody>
					</table>
				</li>
			</ol>
			<div class="row">
				<div class="col-sm-6">
					<ol start="2">
						<li>
							(0; 7,5), (10; 17,5), (20; 27,5), (30; 37,5), (40; 47,5) en (50; 57,5),
						</li>
						<li>
							Zet de juiste waarde en namen in het assenstelsel en teken de grafiek bij de formule.
			
						</li>
					</ol>
				</div>
				<div class="col-sm-6">
					<img src="../afbeeldingen/analyse_leerjaar_2/taxibedrijf_James.png" alt="verband_afstand_ritprijs" width="" height="" id="small-img"/>
				</div>
			</div>		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="25">
		<h3>Opdracht 25 Grafiek tekenen</h3>
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
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>	
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
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

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Grafiek tekenen</h3>
	<p>
		Teken de grafiek van de formule `y = -4 + 1/3x`, met behulp van een tabel.
	</p>
	<ol>
		<li>Neem de tabel over en vul in: 
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>x</em></td>
							<td colspan="2">0</td>
							<td colspan="2">3</td>
							<td colspan="2">6</td>
							<td colspan="2">9</td>
							<td colspan="2">12</td>	
						</tr>
						<tr>
							<td><em>y</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
		</li>
		<li>
			Waarom is het handig om als tweede waarde `x = 3` te kiezen?
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

<div class="tekstblok opdracht" id="27">
		<h3>Opdracht 27 Kaars</h3>
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

<div class="tekstblok opdracht" id="28">
		<h3>Opdracht 28 Abonnementen</h3>
		<p>
			<em>Belsnel</em> en <em>Goedbellen</em> zijn aanbieders van mobiele telefonie.
		</p>
		<p>
			Bij <em>Belsnel</em> betaal je per minuut € 0,10 en is er een vast tarief van € 15,-. <br>Bij <em>Goedbellen</em> is het vaste tarief € 10,- en betaal je per minuut € 0,20.
		</p>
		<ol>
			<li>
				Vul de tabel in voor beide aanbieders.
				<br>
				<table class="verhouding">
					<tbody>
						<tr class="borderbottom">
							<td><em>belminuten</em></td>
							<td colspan="2">0</td>
							<td colspan="2">10</td>
							<td colspan="2">20</td>
							<td colspan="2">20</td>
							<td colspan="2">40</td>	
							<td colspan="2">50</td>
							<td colspan="2">60</td>
							<td colspan="2">70</td>
							<td colspan="2">80</td>	
						</tr>
						<tr>
							<td><em>kosten Belsnel</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>	
						<tr>
							<td><em>kosten Goedbellen</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</li>
		</ol>
		<div class="row">
		<div class="col-sm-6">
			<ol start="2">
		<li>
			Neem het assenstelsel over en teken beide grafieken in het assenstelsel.
		</li>
		<li>
			Maak bij beide aanbieders de formule waarmee je de belkosten kunt uitrekenen.
		</li>
		<li>
			Tamira zoekt een abonnement, ze belt ongeveer 120 minuten per maand. Welke aanbieder zou jij haar aanraden? Licht je antwoord toe.
		</li>
	</ol>
		</div>
		<div class="col-sm-6">
			<img src="../afbeeldingen/analyse_leerjaar_2/grafiek_belsnel_goedbellen_leeg.png" alt="grafiek_belsnel_goedbellen_leeg" width="" height="" id="small-img"/>
		</div>
	</div>
						
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
					</li>
					<li>
						<img src="../afbeeldingen/analyse_leerjaar_2/grafiek_belsnel_goedbellen.png" alt="grafiek_belsnel_goedbellen" width="" height="" id="small-img"/>
					</li>
					<li>
					<em>Belsnel</em>: <em>belkosten in €</em> = 15 + 0,10 &times; <em>aantal belminuten</em><br>
					<em>Goedbellen</em>: <em>belkosten in €</em> = 10 + 0,20 &times; <em>aantal belminuten</em>
					</li>
					<li>
						Wat kosten betreft zou ik Tamira <em>Belsnel</em> aanraden. Die is dan namelijk goedkoper. Natuurlijk kunnen andere redenen de doorslag geven om toch voor <em>Goedbellen</em> te kiezen.
					</li>
					
				</ol>
					
			</div>
		</div>
	
	</div>

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Maak de <a href="https://drive.google.com/open?id=1xDsTmeB8W9EezlwqoxcjNQB2ZK96H05XOH0TBDTKgHs" _target="blank">proeftoets</a> om je voor te bereiden op de echte.
	</p>
</div>

</div>


<!-- 	<p>
	dit is voornamelijk herhaling, herhaling uit leerjaar 1
	<ol>
		<li>
			opdrachten vervangen (korte herhaling lineaire verbanden en (minder) verdieping dan hv);
		</li>
		<li>
			doelen bepalen
		<li>
			laatste opdrachten: van gegeven punten formule maken?;
		</li>
		<li>
			grafieken tekenen direct vanuit formule adv a en b?;
		</li>
		<li>
			formule uit grafiek en tabel opstellen;
		</li>
		<li>
			finetuning moeilijkheidgraad laatste analyse taak leerjaar 1
		</li>
	</ol>
</p>

: het maken van lineaire formules uit een verhaal, tabel of grafiek en het tekenen van een grafiek bij een lineaire formule.

-->
