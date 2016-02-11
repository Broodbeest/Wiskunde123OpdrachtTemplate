<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Lineaire verbanden herhaling',
	 '#theorieA' => 'Vergelijken en vergelijkingen',
	 '#theorieB' => 'Nulpunt',
	 '#theorieC' => 'Ongelijkheden',
	 '#theorieD' => 'som/verschil grafieken',
	 '#theorieE' => 'som/verschil formules',
	 '#theorieF' => 'translaties',
	 '#proeftoets' => 'Proeftoets');

?>

<div class="taakinhoud">

<title>Leerjaar 3 | Lineaire verbanden vwo)</title>

<!--
<div class="tekstblok opdracht" id="opdracht_leeg">
	<h3>Opdracht </h3>
	<p>

	</p>
		
		<ol>
			<li>
				
			</li>
		</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>

formeler met toename verticaal / toename horizontaal-->

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
	<h3>Opdracht 1 Festival</h3>
	<p>	
		Ray gaat naar een Festival. Hij moet entree betalen én muntjes om consumpties te kunnen halen. De entree is `7,50` euro. De muntjes kosten `2` euro. Ieder drankje kost één muntje.
	</p> 
	<ol>
		<li>
			Hoeveel is Ray kwijt als hij het festival bezoekt en daar 3 drankjes koopt?
		</li>
		<li>Neem de tabel over en vul hem verder in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal muntjes</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
						</tr>
						<tr>
							<td><em>Bedrag</em></td>
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
			Teken de grafiek bij de tabel.
		</li>
	</ol>
	<p>
		Bij het verhaal kan je een lineaire formule maken.
	</p>
	<ol start="4">
		<li>
			Neem over en vul in:<br>
			`B=...m+...` <br>
			 Hierin is `B` het bedrag in euro's en `m` het aantal muntjes. 
		</li>
	</ol>
	<p>
		Ray is met 7 vrienden op het festival. Hij is jarig en trakteert als zijn vrienden op twee drankjes. Uiteraard drinkt hij zelf ook twee drankjes.
	</p>
	<ol start="4">
		<li>
			Bereken met de formule hoeveel euro Ray kwijt is.
		</li>
		<li>
			Ray heeft `55` euro meegenomen. Hoeveel drankjes kan hij daarvoor halen. Leg uit hoe je aan je antwoord bent gekomen.
		</li>	
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="opdracht_2">
	<p>
		Formule uit verhaaltje zoals kaars
	</p>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Formules opstellen bij een grafiek</h3>
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


<div class="tekstblok opdracht" id="opdracht_3">
	<h3>Opdracht 2 Formule bij grafiek</h3>
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
			<img src="afbeeldingen/analyse_leerjaar_3/formule_bij_grafiek.png">
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

<div class="tekstblok opdracht" id="opdracht_3">	
		<h3>Opdracht 3 Startgetal onbekend</h3>
		<ol>
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

<!--formule lijn opstellen-->
<div class="tekstblok theorie analyse" id="theorie">
	<h3>De formule van een lijn opstellen</h3>
	<p>
		Je kunt de formule van een rechte lijn opstellen als je van twee punten de coördinaten weet. Je berekent dan hellings- en startgetal en vult deze in de algemene formule in:<br>
		`y=ax+b`
	</p>

	<p>
		Voorbeeld:<br>
		Stel de formule op van de lijn `l` door de punten `A(6,10)` en `B(10,20)`<br>
	</p>
	<div class="row">
		<div class="col-xs-7">
			<p>
				In een tabel kun je snel de verticale en horizontale toename bepalen door de coördinaten in te vullen. 			</p>
			<p>
				Het hellingsgetal is nu `10/4 = 2,5`
			</p>
		</div>
		<div class="col-xs-5">
			<table class="verhouding">
				<thead>
					<tr>
						<th colspan="2"></th>
						<th colspan="2">+4<br><img src="afbeeldingen/algemeen/lrpijlboven.png" height="10px" class="centerfloat"></th>
						<th></th>
					</tr>
				</thead>
						<tbody>
					<tr class="borderbottom">
						<td><em>u</em></td>
						<td colspan="2">6</td>
						<td colspan="2">10</td>
					</tr>
					<tr>
						<td><em>A</em></td>
						<td colspan="2">10</td>
						<td colspan="2">20</td>
					</tr>			
				</tbody>
						<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>+10</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
	</div>		
	<div class="row">
		<div class="col-xs-7">
			<p>
				Je berekent de verticale toename door de <em>y</em>-waarden van punt <em>A</em> en <em>B</em> van elkaar af te trekken. De horizontale toename bereken je door de <em>x</em>-waarden van punt <em>A</em> en <em>B</em> van elkaar af te trekken.
			</p>
			<br>
			<p>
				`a=\text{verticale toename}/\text{horizontale toename}`
				`a=\text{yB-yA}/\text{xB-xA}`<br>
				`a=(20-10)/(10-6) = 10/4 = 2,5`
			</p>
		</div>
		<div class="col-xs-5">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/theorie_formule_opstellen.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>
	

				<p>
					Bereken nu het stargetal:<br>
					De lijn gaat door `A(6,10)`. Vul dit punt in de formule in om `b` te berekenen.<br>
					`10=2,5*6+b`<br>
					`10=15+b`<br>
					`b=-5`<br>
					<br>
					De 
					formule: `y=2,5x-5`
				</p>

			
</div>

<div class="tekstblok opdracht" id="opdracht_4">
	<h3>Opdracht 4 Formule bij grafiek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>Bekijk de grafiek van lijn `l`.</p>
			<ol>
				<li>
					Lees twee roosterpunten af.
				</li>
				<li>
					Stel de formule op voor lijn `l`.
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 12
				</li>
				<li>
					Stel de formule op voor lijn `m` die evenwijdig loopt met `l` en door het punt (10,6) gaat.
				</li>

			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/opdracht_3.png">
		</div>
		
		<p>Nienke, havo: tip evenwijdigheid is gelijk hellingsgetal.</p>
		
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



<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht  Formule bij grafiek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>Bekijk de grafiek van lijn `l`.</p>
			<ol>
				
				<li>
					Stel de formule op voor lijn `l`.
				</li>
				<li>
					Bereken `y` voor `x=32`
				</li>
				<li>
					Bereken `y` voor `x=-1 1/2`
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/formule_twee_punten_dalend.png">
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


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Formule door twee punten</h3>
			<p>
				Lijn `l` gaat door de punten `A(3,42)` en `B(5,5;12)`.
			</p>
		<ol>
				<li>
					Stel de formule op voor lijn `l`.
				</li>
				<li>
					Bereken `y` voor `x=-4`
				</li>
				<li>
					Bereken `y` voor `x=1/3`
				</li>
		</ol>

		<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
				</li>
			</ol>			
		</div>
	</div>
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht </h3>
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


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Formule opstellen</h3>
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

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht </h3>
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


<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie Notatie</h3>
	<p>
	<div class="row">
		<div class="col-xs-8">
		<p>
			In de assenstelsel zijn de grafieken getekend van de lijnen `l` en `m`.
			Als we de formules gaan opstellen  moeten we weten welke formule bij welke grafiek hoort.
		</p>
		<p>
			Daarom noteren we de naam van de lijn bij de formule.
		</p>
		<p>
			De formule die hoort bij lijn `l` is `y=2x+3` <br>
			Kort genoteerd is dit `l: y=2x+3`	
		</p>
		<p>
			De formule van de lijn `m` is dus `m: y=-0,5x+6`
		</p>
		</div>          
	<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/theorie_formele_notatie.png" alt="lineair_verband" width="" height="" />
	</div>
		</div>
	</p>	
</div>



<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht  Formule door twee punten</h3>
			<p>
				Lijn `m` gaat door de punten `A(9,18)` en `B(16,60)`.
			</p>
		<ol>
				<li>
					Stel de formule op voor lijn `m`.
				</li>
				<li>
					Bereken `y` voor `x=11`
				</li>
		</ol>
		
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					
				</li>
				
				</li>
			</ol>			
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_5">
	<h3>Opdracht 5 Formules maken</h3>
	<p>
		Hieronder zie je een assenstelsel met de grafieken van lijn `l` en lijn `m`.
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_3/opdracht_twee_lijnen.png">
	<br>
	<ol>		
		<li>
			Stel de formule op van lijn `l`.
		</li>
		<li>
			Stel de formule op van lijn `m`.
		</li>
		<li>
			Wat zijn de coordinaten van het snijpunt van de twee lijnen?
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

<div class="tekstblok opdracht" id="opdracht_6">
	<h3>Opdracht 6 Formule bij grafiek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Bekijk de rode grafiek.
			</p>
			<ol>
				<li>
					Maak de formule voor de rechte lijn. 
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 30.
				</li>
			</ol>
				<br>
			<p>
				In het assenstelsel is een groene horizontale lijn getekend. De formule van deze groene grafiek is `y=15`
			</p>	
				<br>
			<ol>
				<li start="3"> 
					Lees de coordinaten van het snijpunt af uit de grafiek.
				</li>
				<li>
					Los op:<br>
					`-2x+4=15`
				</li>
				<li>
					Wat heb je bij opgave e. uitgerekend?
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/opdracht_2a.png">
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

<div class="tekstblok opdracht" id="opdracht_7">
	<h3>Opdracht 7 Formule bij grafiek</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Bekijk de groene grafiek.
			</p>
			<ol>
				<li>
					Maak de formule voor de rechte lijn. 
				</li>
				<li>
					Bereken <em>y</em> voor <em>x</em> = 30.
				</li>
				<li>
					Neem het assenstelsel en de grafiek over en teken in hetzelfde assenstelsel de lijn `y=20`
				</li>
				<li>
					Lees de coordinaten van het snijpunt af uit de grafiek.
				</li>
				<li>
					Los op:<br>
					`4x-5=20`
				</li>
				<li>
					Wat heb je bij opgave f. uitgerekend?
				</li>
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/opdracht_2.png">
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


<div class="tekstblok opdracht" id="opdracht_8">
	<h3>Opdracht </h3>
	<p>
		Een lineaire vergelijking kun je altijd met de balansmethode oplossen!<br>
		Als in de vergelijking nog maar één variabele (letter) voorkomt dan kan je een bordje gebruiken.<br>
		Hieronder staan `6` vergelijkingen.<br>
	</p>
	<p>
		<ol class="numbers">
			<li>
				`9(x+16)=72`
			</li>
			<li>
				`5a-43=8a+14`
			</li>
			<li>
				`102-10p=42`
			</li>
			<li>
				`36=-2(3b+1)`
			</li>
			<li>
				`18-4w=w+2`
			</li>
			<li>
				`-6(2t-8)-2=4+3(4-9t)`
			</li>
		</ol>
	</p>
	<p>	
		<ol>
			<li>
				Welk van de vergelijkingen hierboven kun je met de bordjesmethode oplossen? Los deze vergelijkingen eerst op.
			</li>
			<li>
				Los nu met de balansmethode de andere vergelijkingen op.
			</li>
		</ol>
	</p>
	
				
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht </h3>
	<p>
		Los de volgende vergelijkingen op met de <a href="http://wiskunde.vathorstcollege.nl/index_taken.php?p=a_2hv_vergelijkingen_oplossen">balansmethode en/of bordjesmethode</a>.
	</p>
		<ol>
			<li>
				`8x+5=29`
			</li>
			<li>
				`8x+7=3x+32`
			</li>
			<li>
				`2(3x-4)=12`
			</li>			
			<p Class="geeltje">
			Vermenigvuldig de vergelijking met het kleinste gemeenschappelijke veelvoud van de noemers van de breuken.<br>
			Dus:
				`5/6 x + 2/3 = 1/2 x - 1/6`<br>
				Vermenigvuldig alles met 6 (het KGV van 2, 3 en 6)<br>
				`5x + 4 = 3x - 1`<br>
				`2x  = - 5`<br>
				`x  = - 5/2 = -2 1/2`
			</p>
			<li>
				`2/3 x + 3/8 = -2x + 1 1/8`
			</li>
			<li>
				`2 1/2 x - 1/4 = 1 3/4 x + 1 2/3`
			</li>
		</ol>
		
		

			

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
		<ol>
			<li>

			</li>
			<li>

			</li>
			<li>

			</li>
			
			<li>
				`2/3 x + 3/8 = -2x + 1 1/8`<br>
				Vermenigvuldig met 24<br>
				`16 x + 9 = -48x + 27`<br>
				`64 x  = 18`<br>
				`x  = 18/64 = 9/32`
			</li>
			<li>
				`2 1/2 x - 1/4 = 1 3/4 x + 1 2/3`<br>
				Vermenigvuldig alles met 12<br>
				`30 x - 3 = 21 x + 20`<br>
				`9 x  = 23`<br>
				`x  = 23/9 = 2 5/9`
			</li>
		</ol>
			</div>		
		</div>
</div>


<div class="tekstblok opdracht" id="opdracht_8">
	<h3>Opdracht 8 Kaarsen vergelijken</h3>
	<p>
		Je hebt twee cilindervormige kaarsen. De éne kaars is blauwe en 27 cm lang, 
		de andere is geel en 17 cm lang. De blauwe kaars wordt 4,5 cm per uur korter en de gele kaars wordt elk uur 2 cm korter. 
	</p>
		<ol>
			<li>
				Hoe lang is de blauwe kaars als hij 4 uur heeft gebrand?
			</li>
			<li>
				Stel een formule op waarmee je de lengte van de blauwe kaars kunt berekenen als je weet hoeveel uur hij heeft gebrand.<br>
				Gebruik `L` voor lengte kaars in cm en `t` voor tijd in uren.
			</li>
			<li>
				Hoe lang is de gele kaars als deze 4 uur heeft gebrand?
			</li>
			<li>
				Meike blaast de kaars uit als hij nog `8,5` cm is. Hoe lang heeft de kaars gebrand?
			<li>
				Stel een formule op waarmee je de lengte van de gele kaars kunt berekenen als je weet hoeveel uur hij heeft gebrand.<br>
				Gebruik `L` voor lengte kaars in cm en `t` voor tijd in uren.
			</li>	
			<li>
				Zoek eens uit na hoeveel uur branden de kaarsen even lang zijn?
			</li>
		</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>


<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie Functievoorschrift</h3>
	<p>
		In de opgave met de kaarsen gebruikte je de formule `L=-2t+17`.<br>
		Je zegt ook wel dat `L` een <b>functie</b> is van `t`.
		De formule geschreven als <b>functievoorschrift</b> is dan:<br>
		`L(t)=-2t+17`<br>
		De `t` tussen de haakjes geeft aan dat `L`, de lengte van de kaars, afhangt van `t`, de tijd in uren.<br>
		Met `L(5)` bedoel je de waarde van `L` bij `t=5`. Dus:<br>
		`L(5)=-2*5+17`<br>
		`L(5)=7`<br>
		De kaars is na `5` uur branden nog `7` cm hoog.
	</p>	
</div>


<div class="tekstblok opdracht" id="opdracht_8">
	<h3>Opdracht Petjes</h3>
	<p>
		Een reclamebedrijf maakt `60 000` autostickers voor het EK 2016. 
		Het aantal autostickers `a` dat men per dag kan verkopen is afhankelijk van de prijs per autosticker in euro's.
		Uit ervaring van eerdere EK's weet het bedrijf dat bij benadering de formule `p(a)=7,5-0,001a` geldt.
		Bij een slecht resultaat van het elftal daalt de verkoop enorm. Daarom wil het bedrijf voor de aanvan van het EK alle `60 000` autostickers verkopen. 
		De prijs van een autosticker wordt €`5,50`.
	</p>
		<ol>
			<li>
				Bereken `p(5000)`.
			<li>
				Hoeveel dagen voor het begin van het EK moet de verkoop beginnen?
			</li>
		</ol>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>


<div class="tekstblok opdracht" id="opdracht_8">
	<h3>Opdracht 8 rekening gasleiding vergelijken</h3>
	<p>
		De maandelijkse gaskosten bestaan uit variabele kosten voor het aantal m<sup>3</sup> gas dat je afneemt, en vaste kosten voor het gebruik van de meter. 
		Meneer Mans vraagt zich af hoeveel hij betaalt per m<sup>3</sup> gas en wat de vaste kosten zijn. Hij heeft twee jaarrekeningen gevonden.
		In `2014` gebruikte Mans `1490` m<sup>3</sup> gas. Hij betaalde daarvoor `909,40` euro.<br>
		In `2015` gebruikte Mans `1612` m<sup>3</sup> gas. Hij betaalde daarvoor `977,72` euro.<br>
		Je mag er van uit gaan dat de prijs van gas ten opzichte van 2014 in 2015 niet gestegen is.
	</p>
		<ol>
			<li>
				Stel een functievoorschrift op waarmee je de maandelijkse gaskosten kunt berekenen als je weet hoeveel m<sup>3</sup> gas hij heeft afgenomen.<br>
				Gebruik `K` voor  kosten in euro's en `a` voor hoeveelheid gas in m<sup>3</sup>.
			</li>
			<li>
				Wat betaalt meneer Mans voor zijn gas per m<sup>3</sup>?
			</li>
			<li>
				Wat betaalt meneer Mans voor het gebruik van de meter?
			</li>
			<li>
				Bereken `K(1750)`
			</li>
		</ol>
		<p>
			Bedrijf B berekent maandelijkse gaskosten met formule:
		</p>
		<ol start="4">
			<li>
				Zoek eens uit bij welk verbruik de kosten even hoog zijn?
			</li>
			<li>
				Als we letten op het verbruik van `2015` welk advies geef je Mans dan?
			</li>
		</ol>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Vergelijkingen</h3>
	<div class="row">
		<div class="col-xs-8">
		<p>
			 Je ziet hier de grafieken van twee cilindervormige kaarsen die op hetzelfde moment zijn aangestoken. 
			 In de grafiek zie je dat ze steeds korter worden. De bijbehorende formules zijn:<br>
			 Rode kaars    `r: h=20−4t`<br>
			 Groene kaars  `g: h=30−7,5t`<br>
			 <br>
			 met `h` de lengte van de kaars in cm en `t` de tijd in uren.<br>
		</p>
		<p>
			  De grafieken snijden elkaar. Dit is het <FONT color="green"><b>snijpunt</b></FONT> van de grafieken.
			  Beide kaarsen zijn dan even lang, dus de hoogte van de groene kaars is gelijk aan de
			  hoogte van de rode kaars. <br>
			  Als je het bijbehorende tijdstip wilt bepalen dan kan je de coordinaten van het snijpunt <b>aflezen</b> uit de grafieken. 
		</p>
		<p>			 
			  Een meer nauwkeurige manier is het <b>berekenen</b> van het snijpunt. Je lost dan de vergelijking `20−4t=30−7,5t` op.
			  De formule van de rode kaars gelijk is gesteld aan die van de groene. 
		</p>
		<p>  
			  Een formule waar een = teken in voorkomt heet een <b>vergelijking</b>. 
			  Wat links van het = teken staat is evenveel als wat rechts van het = teken staat.
			  Ga na dat voor t=5 de vergelijking waar is. `t=5` heet <b>oplossing van de vergelijking</b>.
		</p>
		<p class="geeltje">
		Let op: Een lineaire vergelijking kun je altijd met de balansmethode oplossen!<br>
		Als in de vergelijking nog maar één variabele (letter) voorkomt dan kan je een bordje gebruiken.
		</p>
		</div>          
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/theorie_vergelijkingen.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>
</div>



<div class="tekstblok opdracht" id="opdracht_9">
	<h3>Opdracht 9 Vergelijking bij twee snijdende lijnen</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Hiernaast zijn de grafieken getekend van `l: y=8x+3` en `m: y=5x+18`.
			</p>
			<br>
			<ol>
				<li>
					Stel de vergelijking op die hoort bij het snijpunt van de lijnen.
				</li>
				<li>
					Los de vergelijking op.
				</li>
			</ol>
				<br>
			<p>
				Je kan hier de `y`-coordinaat van het snijpunt niet precies, exact, aflezen. We moeten hem dus berekenen met de formules.
			</p>
			<ol start="3">
				<br>
				
				<li>
					Maakt het uit welke formule je gebruikt om de `y`-coordinaat uit te rekenen? Waarom wel/niet?
				</li>
				<li>
					Bereken de `y`-coordinaat van het snijpunt. Rond je antwoord af op één decimaal.<br>
				</li>
				<li>
					Neem over en vul in:<br>
					De coordinaten van het snijpunt zijn:  S(...;...) .
				</li>
				
			
			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/vergelijking_snijdende_lijnen.png">
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

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht snijpunt </h3>
	<p>
		Gegeven zijn de lijnen:<br>
		`m: y=2x+7,5` en<br>
		`n: y=-4x-4,5`
	</p> 
		<ol>
				<li>
					Stel de vergelijking op die hoort bij het snijpunt van de lijnen.
				</li>
				<li>
					Los de vergelijking op.
				</li>					
				<li>
					Bereken de `y`-coordinaat van het snijpunt. 
				</li>
				<li>
					Neem over en vul in:<br>
					De coordinaten van het snijpunt zijn:  S(...;...) .
				</li>
				
		</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="opdracht_leeg">
	<h3>Opdracht </h3>
	<p>
		De jaarlijkse kosten K (in euro) voor het rijden met een auto met benzinemotor bestaan uit:

   		<ol class="numbers">
   			<li>
   				Brandstofkosten `B` (in euro).
   			</li>
   			<li>
   				Onderhoud (in euro).
   			</li>
   			<li>
   				Overige vaste kosten voor afschrijving, APK-keuring, wegenbelasting en verzekering (in euro).
   			</li>
   		</ol>
			Mevrouw Jansen heeft een auto die ze voor haar werk gebruikt. Gemiddeld verbruikt haar auto 8 liter benzine per 100 gereden kilometer en 
			is de benzineprijs € 1,75 per liter. `a` is het aantal gereden km per jaar.
	</p>
		<ol>
			<li>
				Stel een formule op voor B afhankelijk van a.
			</li>
		</ol>
	<p>
		In de totale autokosten K moeten ook de overige kosten worden verwerkt. Mw. Jansen schat de onderhoudskosten op € 0,01 per km. 
		En de overige vaste kosten op € 2500,= per jaar.
	</p>
		<ol start="2">
			<li>
				Stel nu een formule op voor K afhankelijk van a.
			</li>
		</ol>
	<p>
		Van haar werkgever krijgt Mw Jansen een kilometervergoeding van € 0,19 per werkkilometer.
	</p>
		<ol start="3">
			<li>
				Bereken bij welke aantallen gereden kilometer per jaar mw. Jansen geld over houdt van haar kilometervergoeding.
			</li>
		</ol>

	<p>
		Opgave komt uit math4all.nl
	</p>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht </h3>
	<p>
		In de zeventiger jaren van de vorige eeuw bestonden er verschillende tarieven voor het gebruik van aardgas. 
		(Voor het gemak zijn de bedragen omgerekend in euro). In het Westland werd als volgt betaald:<br>
		<ol class="numbers">
			<li>
				bij een jaarverbruik tot 600 m3 gas : vaste kosten € 21,= per jaar en daarbij € 0,13 per verbruikte m3 gas;
			</li>
			<li>
			    bij een jaarverbruik vanaf 600 m3 gas : vaste kosten € 48,= per jaar en daarbij € 0,08 per verbruikte m3 gas;
			 </li>
		</ol>
	</p>

		<ol>
			<li>
				Teken een grafiek van de jaarlijkse kosten `K` voor een gasverbruik `a` lopend van `0` tot `1500` m<sup>3</sup>.
			</li>
		</ol>
	<p>
		De grafiek van K valt in twee delen uiteen. Voor elk van die delen zijn de jaarlijkse kosten `K` een lineaire functie van `a`, 
		de hoeveelheid verbruikte m<sup>3</sup> gas.
	</p>
		<ol start="2">
			<li>
				Geef voor elk van die lineaire functies een formule.
			</li>
			<li>
				Een tuinder die aan de meterstand zag dat hij op een jaarverbruik van ongeveer 590 m3 uit zou komen, ging gas afbranden, 
				dus onnodig extra gas verbruiken. Waarom deed hij dat?
			</li>
			<li>
				Vanaf welk jaarverbruik leverde toen het onnodig meer gas verbruiken toch een besparing op?
			</li>
			<li>
				Welke prijsmaatregelen kon het gasbedrijf nemen om onnodig gas verbruiken te voorkomen?
			</li>
		</ol>

	<p>
		Opgave uit math4all.nl
	</p>

		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht (uitdaging)</h3>
	<p>
		`300` brugklassers bestellen via school een rekenmachine. Er zijn twee soorten rekenmachines toegestaan, soort A van € 15,= en soort B van € 12,=. 
		Dat kost in totaal € 4320,=. Je wilt weten hoeveel rekenmachines van elke soort er zijn gekocht.
	</p>
	<ol>
		<li>
			Noem `a` het aantal rekenmachines van soort A en `b` dat van soort B. Welke twee formules gelden er?
		</li>
		<li>
			De grafieken bij deze twee formules zijn rechte lijnen. Bereken het snijpunt van deze lijnen.
		</li>
		<li>
			Hoeveel rekenmachines van elke soort heeft de school besteld?
		</li>
	</ol>

	<p>
		Opgave uit math4all.nl
	</p>
		
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						
					</li>
				</ol>
			</div>
	</div>
</div>



<!--Theorie nulpunt-->
<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Nulpunt</h3>
	<div class="row">
		<div class="col-xs-8">
		<p>
			 Je ziet hier nog een keer de grafieken van twee cilindervormige kaarsen die op hetzelfde moment zijn aangestoken. 
			 In de grafiek zie je dat ze steeds korter worden. De bijbehorende formules zijn:<br>
			 Rode kaars    `r: h=20−4t`<br>
			 Groene kaars  `g: h=30−7,5t`<br>
			 <br>
			 met `h` de lengte van de kaars in cm en `t` de tijd in uren.<br>
			 <br>
			  Je kan berkenen na hoeveel uur de rode kaars is opgebrand. Dat is het punt waarin h=0. 
			  Dit punt heet een <FONT color="red"><b>nulpunt</b></FONT>. 
			  Je lost op `h=0` dus `20−4t=0`.<br>
			  <br>
			  Bij het berekenen van het nulpunt stel je de formule gelijk aan nul. De oplossing van deze vergelijking is het nulpunt.
		</p>
		</div>          
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/theorie_nulpunt.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht 9 Zeespiegel</h3>
	<div class="row">
		<div class="col-xs-7">
			<p>
				Je ziet hier hoe de temperatuur T in graden celsius afhangt van de hoogte h in kilometer boven de zeespiegel. 

			</p>
			<ol>
				<li>
					Welke formule hoort bij het lineaire verband tussen T en h? 
				</li>
			
				<li>
					Bereken het nulpunt van de grafiek.
				</li>
				<li>
					Stel een vergelijking op waarmee ik kan berekenen hoe hoog ik moet zijn om een temperatuur van 15 graden te hebben.
				</li>
				<li>
					Los de vergelijking op.
				</li>

			</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_3/temperatuur_zeespiegel.png">
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


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Aquarium </h3>
	<div class="row">
		<div class="col-xs-8">
		<p>
			In een aquarium staat het water `40`cm hoog. Het aquarium wordt leeg gehaald. Hierbij stroomt het water met een constante snelheid weg.
			Na 10 minuten is het aquarium helemaal leeg.
		<ol>
			<li>
				Stel de fomrule op die het verband weergeeft tussen de waterhoogte `h` in cm en de tijd `t` in minuten.
			</li>
			<li>
				Hoe hoog staat het water na 7 minuten>
			</li>
			<li>
				Hoe lang duur het voordat het bad voor de helft is leeg gelopen?
			</li>
		</ol>

		</div>
	
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/aquarium.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<p>
			
		</p>
		
		</div>
	</div>		
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht 10 Reparatiekosten </h3>
	<p>
		Meneer van Beest wil graag zijn schuurtje laten ombouwen tot kantoor. 
		De firma Prada rekent `20` euro per uur en eenmalig `50` voorrijkosten.
		De firma Klara rekent `25` euro per uur en eenmalig `15` euro voorrijkosten.
	</p> 
	<ol>
		<li>
			Stel de formule op voor beide firma's. Gebruik de letter `t` voor het uurtarief en de 
			letter `K` voor de kosten in euro's.
		</li>
		<li>
			Stel de vergelijking op waarmee je kunt berekenen bij welke reparatietijd de firma's even duur zijn.
		</li>
		<li>
			Bereken bij welke reparatietijd de firma's even duur zijn.
		</li>
	</ol>
	<p>
		De klus van meneer van Beest duurt `8` uur. 
	</p>
	<ol start="3">
		<li>
			Bij welke firma is Van Beest het goedkoopst uit?
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht 11 Grind </h3>
	<p>
		Mevrouw van Overeem wil graag grind laten storten op haar oprit. 
		Firma Grind-stort.nl rekent voor het "Ardenner Split" 106 euro per m<sup>3</sup> en een vast bezorgtarief van `32` euro.
		De firma grindhandel.nl rekent voor het "Ardenner Split" 99 euro per m<sup>3</sup> en een vast bezorgtarief van `60` euro.
	</p> 
	<ol>
		<li>
			Mevrouw van Overeem heeft 6 m<sup>3</sup> grind nodig. Bereken bij welke firma zij het goedkoopst uit is.
		</li>
		<li>
			Stel een vergelijking op waarmee je kunt berekenen bij hoeveel m<sup>3</sup> de beide firma's even duur zijn.
		</li>
		<li>
			Los de vergelijking op.
		</li>
		<li>
			Bij welke aantallen grind ben je bij Grind-stort.nl goedkoper uit?
		</li>

	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>



<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht verjaardagsraadsel (Uitdaging)</h3>
	<div class="row">
		<div class="col-xs-8">
		<ol>
			<li>
				Schrijf het nummer op van de maand waarin je jarig bent, maar laat het niet aan je medeleerling zien. 
				Vermenigvuldig dit getal met 5. Tel er 6 bij op en vermenigvuldig het resultaat met 4. 
				Tel er 1 bij op en vermenigvuldig de uitkomstmet 5. Tel daar tenslotte het nummer van de 
				dag bij waarop je jarig bent en trek er nog 125 van af. Als je mij nu de einduitkomst vertelt, 
				weet ik op welke datum je jarig bent. 
			</li>
			<li>
				Joop en Myrthe zijn samen 91 jaar oud. Toen Joop even oud was als Myrthe nu is, was zij 26 jaar.
				Hoe oud zijn beiden nu?
			</li>
		</ol>

		</div>
	
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_leerjaar_3/taart.png" alt="lineair_verband" width="" height="" />
		</div>
	</div>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<p>
			Als je jarig bent in maand m en op dag d, dan gebeurt er dit:
			m→5m→5m+6→20m+24→20m+25→100m+125→100m+125+d→100m+d
			Ben je bijvoorbeeld op 19 december jarig, dan komt er zo 1219 uit. 
			De eerste twee cijfers geven de maand weer en de laatste twee de dag. 
		</p>
		
		</div>
	</div>		
</div>

<!--Opdracht kleur de de x-as waar l grotere y heeft dan m-->

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Ongelijkheden</h3>
	<p>
		Vespa Rent verhuurt scooters voor 7 euro per dag met een startbedrag van 4 euro.<br>
		Scootah verhuurt scooters voor 5 euro per dag met een startbedrag van 10 euro.<br>
		<br>
		Tot nu zijn we steeds bezig geweest met de vraag:<br>
		Bij hoeveel dagen huren zijn de twee verhuurbedrijven even duur?<br>
		Daarvoor los je de vergelijking `7d+4=5d+10` op.
	</p>
	<p>
		Peter wil een scooter huren voor `2` dagen. Welk verhuurbedrijf moet hij kiezen? Je berekent wat het bij beide bedrijven kost.<br>
		Bij Vespa Rent kost het: `7*2+4=18` dus `18` euro.<br>
		Bij Scootah kost het: `5*2+10=20` dus `20` euro.<br>
		Peter is goedkoper uit bij Vespa Rent.
	</p>
	<p>		
		Hoe berekenen we nu het omslagpunt? Dus vanaf wanneer is Scootah goedkoper dan Vespa?<br>
		Hiervoor los je de <b>ongelijkheid</b> `7d+4>5d+10` op. <br>
		<br>
		Oplossing ongelijkheid:<br>
		`7d+4>5d+10`<br>
		`2d>6`<br>
		`d>3`<br>
		<br>
		Dus Scootah is goedkoper dan Vespa Rent als ik meer dan 3 dagen een scooter huur.<br>
		Peter kan dus het best zijn sooter huren bij verhuurbedrijf Vespa Rent.
	</p>
	<p>
		Bekijk de volgende instructiefilm.
		<iframe width="600" height="338" src="https://www.youtube.com/embed/VCkilZ2bmlc" frameborder="0" allowfullscreen></iframe>
	</p>
	<p>
		Er zijn vier verscillende ongelijktekens:<br>
		`x`&ge;`5` betekent `x` is groter of gelijk aan `5`<br>
		`x`&le;`5` betekent  `x` is kleiner of gelijk aan `5`<br>
		`x>5` betekent `x` is groter dan `5`<br>
		`x<5` betekent `x` is kleiner dan `5`<br>
	</p>
	<p>
		Werkschema: het oplossen van lineaire ongelijkheden<br>
		<ol class="numbers">
			<li>
				Werk haakjes en breuken weg.
			</li>
			<li>
				Breng alle termen met `x` naar links, de rest naar rechts.
			</li>
			<li>
				Herleid beide kanten van het =-teken.
			</li>
			<li>
				Deel beide kanten door het getal dat voor `x` staat. 
			</li>
		</ol>
	</p>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht droge ongelijkheden</h3>
	<p>
		Los de volgende ongelijkheden op. 
	</p>
		<ol>
				<li>
					`8x+5>29`
				<li>
					`8x+7<3x+32`
				</li>
				<li>
					`7(x+4)&ge;2x+19`
				</li>					
				<li>
					`3 1/2x-12>3x+8`
				</li>
				<li>
					`5 1/2(2x+3)&le;9x+2`
				</li>
				<li>
					`2 1/3(1/2 x+ 3/4)<1/12 x +2 1/2`
				</li>
		</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht  welk bedrijf goedkoper </h3>
	<p>
		Stel je hebt een loodgieter nodig. Bedrijf A rekent € 25,00 per uur en € 30,00 voorrijkosten. 
		Bedrijf B rekent € 27,50 per uur en € 18,00 voorrijkosten. 
		De klus lijkt minstens een dagdeel te duren, welke van beide bedrijven is dan het voordeligst?
		Om te berekenen vanaf hoeveel uur bedrijf A goedkoper is dan B kun je een lineaire ongelijkheid oplossen. 
	</p>
	<ol>
		<li>
			Hoe kan je zien welk bedrijf bij hele kleine klussen goedkoper is en welk bedrijf bij grote klussen? Tip: maak een schets van de grafieken!
		</li>
		<li>
			Stel de ongelijkheid op waarmee je kunt berekenen vanaf hoeveel uur bedrijf A goedkoper is dan bedrijf B?
		</li>
		<li>
			Los de ongelijkheid op.
		</li>
		<li>
			Hoe lang moet een klus duren om voor bedrijf A te kiezen? Geef je antwoord in minuten nauwkeurig.
		</li>
		
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht  Winst? </h3>
	<p>
		Een verfhandelaar heeft een mengmachine van € 1900,00 gekocht. De inkoopprijs van de verf en de kosten voor het mengen samen 
		kost op € 5,00 per liter. 
		Hij verkoopt zijn verf voor € 9,25 per liter.
	</p>
	<ol>
		<li>
			Hoeveel Kosten maakt de verfhandelaar als hij in totaal 150 liter verf verkoopt?
		</li>
		<li>
			Hoeveel is zijn opbrenst als hij 150 liter verf verkoopt?
		</li>
		<li>
			Moet de verfhandelaar meer, of minder dan 150 liter verf verkopen om geen verlies te draaien?
		</li>
	</ol>
	<p>
		De verfhandelaar maakt winst als de opbrengst  groter is dan de totale kosten. 
		We kunnen een formule maken voor de totale kosten. Gebruik voor het aantal lietr verkochte verf de letter `a` ,
		en de totalen kosten TK.  
	</p>
	<ol start="4">
		<br>
		<li>
			Maak een formule voor de totale kosten.
		</li>
		<li>
			Maak nu ook een formule voor de totale opbrangst (TO).
		<li>
			Stel een ongelijkheid op waarmee je kunt berekenen bij hoeveel liter verf de verfhandelaar winst gaat maken.
		</li>
		<li>
			Los de ongelijkheid op.
		</li>
		
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht  kopieren </h3>
	<p>
		De huurprijs van een kopieerapparaat bedraagt € 250,00 per maand. Het maken van een kopie kost € 0,06. 
		Op school staat zo’n apparaat speciaal voor gebruik door leerlingen. De leerlingen betalen € 0,10 per kopie.
	</p>
	<ol>
		<li>
			Geef een formule voor de prijs per kopie ( P) als functie van het aantal kopieën ( a).
		</li>
		<li>
			Bij welk aantal kopieën per maand verdient de school aan het apparaat?
		</li>
		
		
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>


<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Ongelijkheden 2</h3>
	<p>
		Bekijk de volgende instructiefilm.
		<iframe width="600" height="338" src="https://www.youtube.com/embed/t9SpvcA3ffY" frameborder="0" allowfullscreen></iframe>
	</p>
	<p>
		Werkschema: het oplossen van lineaire ongelijkheden<br>
		<ol class="numbers">
			<li>
				Werk haakjes en breuken weg.
			</li>
			<li>
				Breng alle termen met `x` naar links, de rest naar rechts.
			</li>
			<li>
				Herleid beide kanten van het =-teken.
			</li>
			<li>
				Deel beide kanten door het getal dat voor `x` staat. Als dit een negatief getal is, moet je het teken > of < omklappen.<br>
				Bedenk: -8<7 maar als we beiden door -1 delen staat er 8<-7 en dit is niet waar! Dus teken omklappen: 8>-7.
			</li>
		</ol>
	</p>
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht droge ongelijkheden</h3>
	<p>
		Los de volgende ongelijkheden op. 
	</p>
		<ol>
				<li>
					`5(x+2)>9x-2(x-5)`
				<li>

				</li>
				<li>
					
				</li>					
				<li>
					
				</li>
				<li>
					
				</li>
				
		</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
			</li>
			<li>
			<li>
			</li>
			<li>
			</li>	
		</ol>
		</div>
	</div>		
</div>



<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Som/verschil grafieken</h3>
	<p>
		<div class="row">
			<div class="col-xs-8">
			<p>
				Soms staan er meerdere grafieken in één assenstelsel. Dat kan alleen als de grafieken een verband tussen dezelfde grootheden beschrijven.
				Soms heeft het betekenis de grafieken bij elkaar "op te tellen" of van elkaar "af te trekken" . 
				De grafiek hiernaast gaat over de grootheid aantal woningen.
				Het aantal huurwoningen plus het aantal koopwoningen is (ongeveer) het totaal aantal woningen.
				 
			</p>
			</div>
			<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_3/som_verschil_grafiek_theorie.png" width="200px">
			</div>
		</div>
	</p>
	<p>
			Om de somgrafiek te tekenen maak je eerst een tabel met het aantal huurwoningen en het aantal koopwoningen 
			per jaar en dan tel je deze waarden in de tabel bij elkaar op.
	</p>
	<p>
					<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tr>
							<td>jaartal</td>
							<td>1975</td>
							<td>1980</td>
							<td>1985</td>
							<td>1990</td>
							<td>1995</td>
							<td>2000</td>
							<td>2005</td>
						</tr>
						<tr>
							<td>aantaal huurwoningen</td>
							<td>5900</td>
							<td>5900</td>
							<td>6150</td>
							<td>6000</td>
							<td>6000</td>
							<td>5500</td>
							<td>5400</td>
						</tr>
						<tr>
							<td>aantal koopwoningen</td>
							<td>1250</td>
							<td>1950</td>
							<td>2200</td>
							<td>2360</td>
							<td>2500</td>
							<td>2600</td>
							<td>3100</td>
						</tr>
						<tr>
							<td>totaal aantal woningen</td>
							<td><FONT color="red">7150</FONT></td>
							<td><FONT color="red">7850</FONT></td>
							<td><FONT color="red">8350</FONT></td>
							<td><FONT color="red">8360</FONT></td>
							<td><FONT color="red">8500</FONT></td>
							<td><FONT color="red">8100</FONT></td>
							<td><FONT color="red">8500</FONT></td>
						</tr>
					</table>
				</div>
	</p>	
		<div class="row">
			<div class="col-xs-8">
				<p>
					Zet de punten van het totaal aantal woningen in het assenstelsel. Teken de somgrafiek.
				</p>
			</div>
			<div class="col-xs-4">
					<img src="afbeeldingen/analyse_leerjaar_3/som_verschil_grafiek_theorie2.png" width="50px">
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Lichaamslengte</h3>
		<div class="row">
		<div class="col-xs-6">
		<p>
			 Je ziet hier grafieken over de groei van het lichaam van een meisje. Er is een grafiek voor de beenlengte,
			 één voor de lengte van de romp (inclusief de nek) en één over de lengte van het hoofd. 
			 Ook zie je de totale lichaamslengte.
		</p>
		<ol>
			<li>
				Hoe kun je de waarden van de totale lengte berekenen uit de bijpassende waarden voor beenlengte, 
				romplengte en hoofdlengte?
			</li>
			<li>
				Waarom kun je de grafiek van de lichaamslengte een somgrafiek noemen?
			</li>
			<li>
				Teken de somgrafiek van de beenlengte en de romplengte. Leg uit hoe je te werk gaat.
			</li>
			<li>
				Wat stelt de verschilgrafiek van de lichaamslengte en de grafiek bij c voor?
			</li>
		</ol>
		</div>

		<div class="col-xs-6">
			<img src="afbeeldingen/analyse_leerjaar_3/som_verschil_grafiek_lichaamslengte.png" width="200px">
		</div>
	</div>
</div>



<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Somformule</h3>

		<div class="row">
			<div class="col-xs-7">
			<p>
				Hiernaast zie je de grafiek van de functie `l: y= x` en `k: y=3`
			</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in:
					<br>
					<table class="verhouding" >
						<tr>
							<td>`x`</td>
							<td>0</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						<tr>
							<td>`x`</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
						<tr>
							<td>`3`</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
						<tr>
							<td>somgrafiek</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
					</table>
					<br>
				</li>
				<li>
					Stel met behulp van de tabel de formule op voor de somgrafiek.
				</li>
				<li>
					Vergelijk de formules van de lijnen `l` en `m` met de formule van de somgrafiek.<br>
					Wat valt je op?
				</li>
			</ol>
			</div>
			<div class="col-xs-5">
			<p>
				<img src="afbeeldingen/analyse_leerjaar_3/introductie_somformule_makkelijk.png" width="50px">
			</p>
			</div>
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Translaties</h3>
	<p>
		Als je bij een lineaire grafiek de horizontale lijn `y=4` optelt, verschuift de grafiek `4` omhoog. <br>
		Het hellingsgetal blijft gelijk alleen het startgetal veranderd.	
	</p>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Verschilformule</h3>

		<div class="row">
			<div class="col-xs-7">
			<p>
				Hiernaast zie je de grafiek van de functie `l: y= 1/2 x + 3` en `m: y= 1/2 x + 1`
			</p>
			<ol>
				<li>
					Neem de tabel over en vul hem in:
					<br>
					<table class="verhouding" >
						<tr>
							<td>`x`</td>
							<td>0</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
						</tr>
						<tr>
							<td>`1/2 x + 3`</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
						<tr>
							<td>`1/2 x + 1`</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
						<tr>
							<td>verschilgrafiek</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
					</table>
					<br>
				</li>
				<li>
					Stel met behulp van de tabel de formule op voor de verschilgrafiek.
				</li>
				<li>
					Vergelijk de formules van de lijnen `l` en `m` met de formule van de verschilgrafiek.<br>
					Wat valt je op als je naar de grafieken kijkt?
				</li>
			</ol>
			</div>
			<div class="col-xs-5">
			<p>
				<img src="afbeeldingen/analyse_leerjaar_3/introductie_somformule.png" width="50px">
			</p>
			</div>
		</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie  Som/verschil formule</h3>
	<p>
		Stel de somformule op van <FONT color="red">`l(x)=2x+5`</FONT> en <FONT color="green">`m(x)=4x+3`</FONT>
	</p>
	<p>
		Voor het opstellen van de <b>somformule</b > `s(x)` tel je de formules van de twee grafieken bij elkaar op.<br>
		Dus somformule:<br>
		`s(x)= `<FONT color="red"> `l(x)`</FONT>`+` <FONT color="green">`m(x)`</FONT> <br>
		`s(x)= `<FONT color="red">`2x + 5`</FONT> `+`  <FONT color="green">`4x + 3`</FONT><br>
		`s(x)= 6x + 8`
	</p>
	<p>
		Voor het opstellen van de <b>verschilformule</b > `v(x)` trek je de formules van de twee grafieken van elkaar af.<br>
		Er zijn twee verschilformules:<br>
	</p>
	<p>
		<div class="row">
			<div class="col-xs-6">
			
				`l(x)-m(x)`<br>
				`2x+5-(4x+3)`<br>
				`2x+5-4x-3`<br>
				Dus verschilformule:<br>
				`v(x)=-2x+2`
			</div>
			<div class="col-xs-6">
			
				`m(x)-l(x)`<br>
				`4x+3-(2x+5)`<br>
				`4x+3-2x-5`<br>
				Dus verschilformule:<br>
				`v(x)=2x-2`
			</div>
		</div>
	</p>
	<p>	
		Let op dat het belangrijk is om bij verschilformules haakjes te gebruiken!
	</p>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Somformule</h3>
	<p>
		Stel steeds de formule op van de somformule.
	</p>
	<ol>
		<li>

		</li>
		<li>

		</li>
		<li>

		</li>
		<li>

		</li>
	</ol>
</div>


<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Verschilformule</h3>
	<p>
		Stel steeds de formule op van de verschilformule.
	</p>
	<ol>
		<li>

		</li>
		<li>

		</li>
		<li>

		</li>
		<li>

		</li>
	</ol>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Som/Verschilformules</h3>
	<p>
		Gegeven zijn de functies:<br>
		`f(x)=3x+8`<br>
		`g(x)=-5x+3`<br>
		`h(x)=1 1/2 x-3`

	</p>
	<ol>
		<li>
			Bereken `f(x)+g(x)`
		</li>
		<li>

		</li>
		<li>

		</li>
		<li>

		</li>
	</ol>
</div>

<div class="tekstblok opdracht" id="opdracht_">
	<h3>Opdracht Verschilformule</h3>
	<p>
		olie 2014 vmbot examen
		De totale hoeveelheid geproduceerde olie in de wereld zal volgens deskundigen na het jaar 2015 afnemen.  
		Je kunt in de grafiek aflezen dat er in 2015 volgens de verwachting van de deskundigen 4000 miljoen ton olie 
		geproduceerd zal worden en in 2040 nog maar 1500 miljoen ton. 
		<img src="afbeeldingen/analyse_leerjaar_3/olie.png" width="50px">
	</p>
	<ol>
		<li>

		</li>
		<li>

		</li>
	</ol>
	<p>
		De landen waarin olie geproduceerd wordt, gebruiken een deel van de olie zelf. In de grafiek zie je het 
		eigen gebruik van olie van één van deze landen in de afgelopen jaren. Bij deze grafiek hoort een lineair verband.
		<img src="afbeeldingen/analyse_leerjaar_3/olie_lineair.png" width="50px">
	</p>
	<ol start="3">
		<li>
			Geef een formule die hoort bij de grafiek. Neem voor het aantal jaren na 2000 de letter t
 			en voor het eigen gebruik in duizend tonnen de letter G.  
		</li>
		<li>

		</li>
		<li>

		</li>
	</ol>
	<p>
		     Hieronder zie je de grafiek van het eigen gebruik nogmaals. In 
		     hetzelfde assenstelsel staat ook de grafiek van de hoeveelheid olie die 
		     het land geproduceerd heeft. Ook bij deze grafiek hoort een lineair verband. 
			 De geproduceerde olie die overbleef na eigen gebruik werd door dit land 
			 verkocht aan het buitenland. 
			 <img src="afbeeldingen/analyse_leerjaar_3/olie_somgrafiek.png" width="50px">
	</p>
	<ol start="5">
		<li> Moet: Stel formule op van .. en daarmee formule voor hoeveelheid olie die verkocht werd..
  			Teken op de uitwerkbijlage de grafiek van de hoeveelheid olie die 
			tussen 2000 en 2008 aan het buitenland verkocht werd.  
		</li>
	</ol>
	
</div>



<!--nog bekijken-->






<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Maak de <a href="#">proeftoets</a> om je voor te bereiden op de echte.
	</p>
</div>

</div>