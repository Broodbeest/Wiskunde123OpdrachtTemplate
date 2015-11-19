<?php
//Definieer sidebar
$doorverwijzingen = array(
     '#inleiding' => 'Kwadratische verbanden',
     '#theorieA' => 'Ontbinden en kwadratische vergelijkingen ',
	 '#theorieB' => 'Snijpunten met `x`- en `y`as ',
	 '#theorieC' => 'De ABC-formule',
	 '#theorieD' => 'Kwadratische vergelijkingen',
	 '#theorieE' => 'Top Parabool',
	 '#theorieE' => '',
	 '#theorieG' => '',
	 '#proeftoets' => 'Proeftoets');  
?>

<div class="taakinhoud">

<title>Leerjaar 3 | Kwadratische verbanden </title>



<div class="tekstblok theorie analyse" id="#inleiding">
	<h3>Kwadratische verbanden</h3>
	<div class="row">
		<div class="col-xs-8">
		<p>
			Enola trapt een bal heel hard weg.<br>
			In de grafiek is het verband tussen de <em>afstand</em> (in meters) en de <em>Hoogte</em> (in meters) van de bal weergegeven. De grafiek is een berg-parabool.
		</p>
		<p>
			De symmetrie-as is een verticale lijn door de top van de parabool.
		</p>
		<p>
			Het verband tussen het <em>aantal weken</em> en het <em>bedrag</em> is een <b>kwadratisch</b>. Bij dit verband kun je een <b>kwadratische</b> maken. 
		</p>
		<p>
			Om de grafiek te tekenen van een kwadratisch verband maak je een tabel met minstens vijf punten. In een tabel zie je dat het tweede verschil steeds hetzelfde is.
		</p>
		
		</div>
		<div class="col-xs-4">
			<img class="img-responsive" src="../afbeeldingen/analyse_kwadratische_verbanden_vmbo-t/opdracht_bal.png"  width="150px" class="rightfloat">
		</div>
	</div>
		
	<div class="table-responsive verhouding">
		<table class="verhouding">
						<thead>
							<tr>
								<th colspan="2"></th>
								<th colspan="2">+ 1<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">+ 1<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">+ 1<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">+ 1<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
								<th colspan="2">+ 1<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
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
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>	
								<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>

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
		
		</div>
	</div>		
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Ontbinden en kwadratische vergelijkingen</h3>
	<p>
		het vinden van de top m.b.v. vergelijkingen. Eerst snijpunt x-as dan snijpunt met c.
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
		Het <span id="hellingsgetal">hellingsgetal</span> is <span id="hellingsgetal">+2</span>, omdat er steeds <span id="hellingsgetal">2</span> bij komt, zoals met pijlen is aangegeven.
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
			<span id="hellingsgetal">a</span> = ... <br>
			<span id="startgetal">b</span> = ... 
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
					Uitwerkingen nog aan passen
					<li>14 blokken</li>
					<li>2 blokken</li>
					<li>
						<TABLE class= "verhouding" width="220px">
							<TR>
								<TD><em>Nummer</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
							</TR>
							<TR>
								<TD><em>Aantal blokken</em></TD><TD>2</TD><TD>5</TD><TD>8</TD><TD>11</TD>
							</TR>
						</TABLE>
					</li>
					<li>
						<table class="verhouding" style="background-color:white">
		
		<tbody>
			<tr class="borderbottom">
				<td><em>Nummer</em></td>
				<td colspan="2">0</td>
				<td colspan="2">1</td>
				<td colspan="2">2</td>
				<td colspan="2">3</td>	
			</tr>
			<tr>
				<td><em>Aantal blokken</em></td>
				<td colspan="2">2</td>
				<td colspan="2">5</td>
				<td colspan="2">8</td>
				<td colspan="2">11</td>
			</tr>			
		</tbody>
		<tfoot>
			<tr >
				<th colspan="2"></th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 3</th>
				<th></th>
			</tr>
		</tfoot>	
		</table><br>
		<em>Hellingsgetal</em> = `3`
						
					</li>
					<li>
						<em>Aantal blokken</em> = 3 × <em>nummer</em> + 2
					</li>
					<li>
						<em>Aantal blokken</em> = 3 × <em>4</em> + 2 = 14<br>
					    <em>Aantal blokken</em> = 3 × <em>5</em> + 2 = 17
					  </li>
					   <li>
					   	<em>Aantal blokken</em> = 3 × <em>17</em> + 2 = 53</li>
					   <li>Er zijn 2 vaste blokjes. 29 blokjes - 2 vaste blokjes geeft nog 27 blokjes.<br>
					   		Er komen er steeds 3 blokjes bij. 27 kan ik precies door 3 delen. Dus een figuur
					   		met 29 blokjes kan!
					   </li>
				</ol>
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_5">
	<h3>Opdracht 5 </h3>
	<div class="row">
		<div class="col-xs-7">
		<p>In de grafiek hiernaast lees je af dat bij x=-1 een uitkomst hoort van y=1</p>
		<ol>
			<li>
				Neem de tabel hieronder over en maak hem af.<br>
				<TABLE class="verhouding">
					<TR>
						<TD><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
					</TR>
					<TR>
						<TD><em>y</em></TD><TD></TD><TD></TD><TD></TD><TD></TD>
					</TR>
				</TABLE>
			</li>
			<li>Lees uit de tabel af welke uitkomst er hoort bij x=0. Dit is het <em>startgetal</em>. Neem over en vul in:<br>
				<em>startgetal</em> = ...
			</li>
			<li>
				Hoeveel komt er onder in je tabel steeds bij als je 1 stapje naar rechts gaat? Geef dit met pijlen aan in je tabel. Dit is het <em>hellingsgetal</em>. Neem over en vul in:<br>
				<em>hellingsgetal</em> = ...
			</li>
			<li>
				Hieronder staat de formule om de uitkomst, de y dus, te berekenen:   <nobr><em>y</em>= <em>hellingsgetal</em>  × <em>x</em> + <em>startgetal</em> </nobr><br>
				Vervang de woorden <em>start-</em> en <em>hellingsgetal</em> door de juiste getallen.
			</li>
			<li>
				Bereken met de formule hoe groot y is als x=5
			</li>
		</ol>
		</div>
		<div class="col-xs-5">
			<img src="afbeeldingen/analyse_leerjaar_2/regelmaat_3.png" class="rightfloat" width="200px">
		</div>
	</div>


<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<h3>Antwoorden bij opdracht 3</h3>
			<ol>
				<li>
					<TABLE class= "verhouding" width="220px">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD><TD>3</TD>
						</TR>
						<TR>
							<TD><em>y</em></TD><TD>3</TD><TD>5</TD><TD>7</TD><TD>9</TD>
						</TR>
					</TABLE>
				</li>
				<li>
					<em>Startgetal</em> = `3`
				</li>
				<li>
					<table class="verhouding" style="background-color:white">
	
	<tbody>
		<tr class="borderbottom">
			<td><em>x</em></td>
			<td colspan="2">0</td>
			<td colspan="2">1</td>
			<td colspan="2">2</td>
			<td colspan="2">3</td>	
		</tr>
		<tr>
			<td><em>y</em></td>
			<td colspan="2">3</td>
			<td colspan="2">5</td>
			<td colspan="2">7</td>
			<td colspan="2">9</td>
		</tr>			
	</tbody>
	<tfoot>
		<tr >
			<th colspan="2"></th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 2</th>
			<th></th>
		</tr>
	</tfoot>	
	</table><br>
	<em>Hellingsgetal</em> = `2`
				</li>
				<li>
					`y=2`&sdot;`x+3`
				</li>
				<li>
					`y=2`&sdot;`5+3`<br>
					`y=10+3`<br>
					`y=13`
				</li>
			</ol>
		</p>
	</div>
</div>
</div>

<div class="tekstblok opdracht" id="opdracht_6">
<p><img src="afbeeldingen/analyse_leerjaar_2/regelmaat_5.png" class="rightfloat" width="300px"></p>
	<h3>Opdracht 6</h3>
	<p>Hiernaast zie je een grafiek:</p>
	<ol>
		<li>
			Neem de tabel over en vul hem in.
			<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>x</em></TD><TD>0</TD><TD>2</TD><TD>4</TD>
				</TR>
				<TR>
					<TD><em>y</em></TD><TD></TD><TD></TD><TD></TD>
				</TR>
			</TABLE>
		</li>
		<li>De tabel maakt bovenin stapjes van twee! Neem over en vul in:<br>
			Als ik twee stapjes naar rechts ga, dan komt er bij de uitkomst .... bij.
		</li>
		<li>Voor het hellingsgetal moet ik kijken hoeveel er bij komt als ik één stapje naar rechts ga. Neem over en vul in:<br>
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
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<TABLE class= "verhouding" width="220px">
							<TR>
								<TD><em>x</em></TD><TD>0</TD><TD>2</TD><TD>4</TD>
							</TR>
							<TR>
								<TD><em>y</em></TD><TD>-4</TD><TD>-2</TD><TD>0</TD>
							</TR>
						</TABLE>
				</li>
				<li>
					Als ik twee stapjes naar rechts ga, dan komt er bij de uitkomst `2` bij.
				</li>
				<li>
					Als ik één stapje naar rechts ga, dan komt er bij de uitkomst `1` bij.
				</li>
				<li>
					<em>Hellingsgetal</em> =`1`<br>
					<em>Startgetal</em> = `-4`
				</li>
				<li>
					`y=1x-4`
				</li>
			</ol>
				
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="opdracht_7">
	<p><img src="afbeeldingen/analyse_leerjaar_2/regelmaat_6.png" class="rightfloat" width="200px"></p>
	<h3>Opdracht 7</h3>
	<p>Hiernaast zie je een grafiek:</p>
	<ol>
		<li>
			Neem de tabel over en vul hem in.
			<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>x</em></TD><TD>0</TD><TD>2</TD><TD>4</TD>
				</TR>
				<TR>
					<TD><em>y</em></TD><TD></TD><TD></TD>
				</TR>
			</TABLE>
		</li>
		<li>Hoeveel komt er bij als ik één stapje naar rechts ga?<br>
			<b>Let op</b>: De tabel gaat bovenin met stappen van twee!
		</li>
		<li>
			Neem over en vul in:<br>
			Hellingsgetal = .....<br>
			Startgetal = ........<br>
		</li>
		<li>
			Maak nu de formule voor de rechte lijn. Neem over en vul in:<br>
			y = 
		</li>
	</ol>

<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">

		<ol>
			<li>
				<TABLE class= "verhouding" width="220px">
			<TR>
				<TD><em>x</em></TD><TD>0</TD><TD>2</TD><TD>4</TD>
			</TR>
			<TR>
				<TD><em>y</em></TD><TD>8</TD><TD>14</TD><TD>20</TD>
			</TR>
				</TABLE>
			</li>
			<li>
				Als ik twee stapjes naar rechts ga, dan komt er bij de uitkomst `6` bij.<br>
				Als ik één stapje naar rechts ga, dan komt er bij de uitkomst `3` bij.
			</li>
			<li>
				<em>Hellingsgetal</em> = `3`<br>
				<em>Startgetal</em> = `8`
			</li>
			<li>
				`y=3x+8`
			</li>
		</ol>

	</div>
</div>
</div>

<div class="tekstblok opdracht" id="opdracht_8">
	<p><img src="afbeeldingen/analyse_leerjaar_2/regelmaat_7.png" class="rightfloat" width="250px"></p>
	<h3>Opdracht 8</h3>
	<p>Hiernaast zie je een grafiek:</p>
	
	
	<ol>
		<li>
			Neem de tabel over en vul hem in.
			<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD>
				</TR>
				<TR>
					<TD><em>y</em></TD><TD></TD><TD></TD><TD></TD>
				</TR>
			</TABLE>
		</li>
		<li>
			Neem over en vul in:<br>
			Hellingsgetal = .....<br>
			Startgetal = ........<br>
		</li>
		<li>
			Maak nu de formule voor de rechte lijn.
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<TABLE class= "verhouding" width="220px">
				<TR>
					<TD><em>x</em></TD><TD>0</TD><TD>1</TD><TD>2</TD>
				</TR>
				<TR>
					<TD><em>y</em></TD><TD>10</TD><TD>7</TD><TD>4</TD>
				</TR>
					</TABLE>
				</li>
				<li>
					<em>Hellingsgetal</em> = `-3`<br>
					<em>Startgetal</em> = `10`
				</li>
				<li>
					`y=-3x+10`
				</li>
			</ol>
	
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse">
<h3>Theorie A Van tabel naar formule</h3>
<p>
	De standaardformule van een lineair verband is: <nobr><em>y</em> = <b>hellingsgetal</b> &sdot; <em>x</em> + <b>startgetal</b></nobr>.
</p>
<p>
	Om een formule uit een tabel af te leiden:
	<ol class="numbers">
		<li>bepaal je het startgetal;</li>
		<li>bepaal je het hellingsgetal;</li>
		<li>vul je de gevonden getallen in in de algemene formule.</li> 
	</ol>
</p>

<p>
	Als voorbeeld bepalen we de formule bij de volgende tabel:
	<table frame="void" rules="all"  width="300px" style="text-align: center" >
		<tr>
			<td><em>x</em>	</td>
			<td>0</td>
			<td>3</td>
			<td>6</td>
			<td>9</td>				
		</tr>
		<tr>
			<td><em>y</em></td>
			<td>28</td>
			<td>22</td>
			<td>16</td>
			<td>10</td>
		</tr>
	</table>
</p>
		<table class="stappenplan">
		<tbody>
			<tr>
				<td width="60">Stap 1</td>
				<td width="240">Bepaal het startgetal.<br> Kijk onder <em>x</em> =  0.</td>
				<td width="200">startgetal = `28`</td>
			</tr>
			<tr>
				<td>Stap 2</td>
				<td>Bepaal het hellingsgetal.<br>
					over de <em>y</em>-as:<br>
					van 28 naar 22 is -6 stappen<br>
					over de <em>x</em>-as:<br>
					van 0 naar 3 is 3 stappen<br>
					-6 per 3 is -2 per 1<br>
				<td>hellingsgetal = `-2`</td>
			</tr>
			<tr>
				<td>Stap 3</td>
				<td>Vul de getallen in in <br>de standaardformule.</td>
				<td><em>y</em> = -2<em>x</em> + 28</td>
			</tr>
		</tbody>
	</table>	 
</div>

<!--opdracht 7-->
<div class="tekstblok opdracht">

<h3>Opdracht 7</h3>
<ol>
<li>
	Bereken de formule die hoort bij de tabel hieronder:
	<TABLE class= "verhouding" width="220px">
			<TR>
				<TD><em>x</em></TD><TD>0</TD><TD>4</TD><TD>8</TD>
			</TR>
			<TR>
				<TD><em>y</em></TD><TD>16</TD><TD>24</TD><TD>32</TD>
			</TR>
	</TABLE>

</li>
<li>
	Bereken de formule die hoort bij de tabel hieronder:
	<TABLE class= "verhouding" width="220px">
			<TR>
				<TD><em>tijd</em></TD><TD>0</TD><TD>5</TD><TD>10</TD>
			</TR>
			<TR>
				<TD><em>Afstand</em></TD><TD>-8</TD><TD>7</TD><TD>22</TD>
			</TR>
	</TABLE>
</li>
</ol>

<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<h3>Antwoorden bij opdracht 7</h3>
		<ol>
			<li>
				<em>Hellingsgetal</em> = `8/4 = 2`<br>
				<em>Startgetal</em> = `16`<br>
				`y=2x+16`
			</li>
			<li>
				<em>Hellingsgetal</em> = `15/5 = 3`<br>
				<em>Startgetal</em> = `-8`<br>
				<em>Afstand</em>`=3`&sdot;<em>tijd</em>`-8`
			</li>

		</ol>
	</div>
</div>

</div>

<!--opdracht 8-->
<div class="tekstblok opdracht">

<h3>Opdracht 8</h3>
<ol>
<li>
	Waarom kan je in de tabel hieronder niet gelijk aflezen wat het startgetal is?
	<TABLE class= "verhouding" width="220px">
			<TR>
				<TD><em>x</em></TD><TD>2</TD><TD>4</TD><TD>6</TD>
			</TR>
			<TR>
				<TD><em>y</em></TD><TD>16</TD><TD>24</TD><TD>32</TD>
			</TR>
	</TABLE>
</li>
<li>
	Neem de tabel over en vul hem in:
	<table class="verhouding" style="background-color:white">
	<thead>
		<tr>
			<th colspan="2"></th>
			<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
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
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
			<th></th>
		</tr>
	</tfoot>	
	</table>
</li>
<li>
	Bereken de formule die hoort bij de tabel.
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
				<table class="verhouding" style="background-color:white">
				<thead>
					<tr>
						<th colspan="2"></th>
						<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
						<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
						<th colspan="2">+ 2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
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
						<td colspan="2">8</td>
						<td colspan="2">16</td>
						<td colspan="2">24</td>
						<td colspan="2">32</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr >
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
						<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
						<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>+ 8</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</li>
		<li>
				<em>Hellingsgetal</em> = `8/2 = 4`<br>
				<em>Startgetal</em> = `8`<br>
				`y=4x+8`
		</li>

	</div>
</div>
</div>

<!--opdracht 9-->
<div class="tekstblok opdracht">

<h3>Opdracht 9</h3>
<ol>
<li>
	Neem de tabel hieronder over <b>maar</b> maak hem aan de voorkant 
	langer zodat ook boven in de tabel het getal 0 komt te staan!
	<TABLE class= "verhouding" width="220px">
			<TR>
				<TD><em>x</em></TD><TD>10</TD><TD>15</TD><TD>20</TD>
			</TR>
			<TR>
				<TD><em>y</em></TD><TD>350</TD><TD>300</TD><TD>250</TD>
			</TR>
	</TABLE>
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
				<table class="verhouding" style="background-color:white">
	<thead>
		<tr>
			<th colspan="2"></th>
			<th colspan="2">+ 5<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">+ 5<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">+ 5<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">+ 5<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<tr class="borderbottom">
			<td><em>x</em></td>
			<td colspan="2">0</td>
			<td colspan="2">5</td>
			<td colspan="2">10</td>
			<td colspan="2">15</td>
			<td colspan="2">20</td>	

		</tr>
		<tr>
			<td><em>y</em></td>
			<td colspan="2">450</td>
			<td colspan="2">400</td>
			<td colspan="2">350</td>
			<td colspan="2">300</td>
			<td colspan="2">250</td>
		</tr>			
	</tbody>
	<tfoot>
		<tr >
			<th colspan="2"></th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 50</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 50</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 50</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>- 50</th>
			<th></th>
		</tr>
	</tfoot>	
	</table>
</li>
<li>
				<em>Hellingsgetal</em> = `(-50)/5 = -10`<br>
				<em>Startgetal</em> = `450`<br>
				`y=-10x+450`
		</li>
			
	</div>
</div>

</div>

<div class="tekstblok opdracht">
<p><img src="afbeeldingen/analyse_leerjaar_2/zelfde_startgetal.png" width="400px" class="rightfloat"></p>
<h3>Opdracht 10 </h3>

<p>Hiernaast zie je een assenstelsel met twee grafieken:</p>
<br>
<ol>
	<li>
		Neem over en vul in:<br>
		<em>Startgetal</em> rode grafiek = <br>
		<em>Startgetal</em> groene grafiek = 

	</li>
	<li>
		 Neem over en vul in:<br>
		<em>Hellingsgetal</em> rode grafiek = <br>
		<em>Hellingsgetal</em> groene grafiek = <br>
		 Je mag een tabel gebruiken voor het berekenen van het hellingsgetal. 
	</li>
	<li>
		Neem over en vul in:<br>
		Formule rode grafiek: `y = `....<br>
		Formule groene grafiek: `y =`....	
	</li>
</ol>


<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<ol>
	<li>
		<em>Startgetal</em> rode grafiek = `5`<br>
		<em>Startgetal</em> groene grafiek = `5` 

	</li>
	<li>
		 Neem over en vul in:<br>
		 <TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>5</TD>
						</TR>
						<TR>
							<TD><em>y rode grafiek</em></TD><TD>5</TD><TD>15</TD>
						</TR>
						
		</TABLE><br>
		<em>Hellingsgetal</em> rode grafiek = `10/5 = 2`<br>
		<TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>1</TD>
						</TR>
						<TR>
							<TD><em>y groene grafiek</em></TD><TD>5</TD><TD>0</TD>
						</TR>
						
		</TABLE><br>
		<em>Hellingsgetal</em> groene grafiek = `(-5)/1 = -5`<br>
		
	</li>
	<li>
		Neem over en vul in:<br>
		Formule rode grafiek: `y = 2x+5`<br>
		Formule groene grafiek: `y = -5x+5`	
	</li>
</ol>	
	</div>
</div>

</div>


<div class="tekstblok opdracht">
<p><img src="afbeeldingen/analyse_leerjaar_2/zelfde_hellingsgetal.png" width="300px" class="rightfloat"></p>
<h3>Opdracht 11</h3>
<p>Hiernaast zie je een assenstelsel met twee grafieken:</p>
<br>
<ol>
	<li>
		Neem over en vul in:<br>
		<em>Startgetal</em> rode grafiek = <br>
		<em>Startgetal</em> groene grafiek = 

	</li>
	<li>
		 Neem over en vul in:<br>
		<em>Hellingsgetal</em> rode grafiek = <br>
		<em>Hellingsgetal</em> groene grafiek = <br>
		 Je mag een tabel gebruiken voor het berekenen van het hellingsgetal. 
	</li>
	<li>
		Neem over en vul in:<br>
		Formule rode grafiek: `y = `....<br>
		Formule groene grafiek: `y =`....	
	</li>
</ol>

<div class="hider">
	<div class="showhide">&rarr;</div>
	<div class="antwoord">
		<ol>
	<li>
		Neem over en vul in:<br>
		<em>Startgetal</em> rode grafiek = `10`<br>
		<em>Startgetal</em> groene grafiek = `30`

	</li>
	<li>
		<TABLE class= "verhouding">
						<TR>
							<TD><em>x</em></TD><TD>0</TD><TD>10</TD>
						</TR>
						<TR>
							<TD><em>y rode grafiek</em></TD><TD>10</TD><TD>50</TD>
						</TR>
						<TR>
							<TD><em>y groene grafiek</em></TD><TD>30</TD><TD>70</TD>							</TR>
					</TABLE><br>
		<em>Hellingsgetal</em> rode grafiek = `40/10 = 4`<br>
		<em>Hellingsgetal</em> groene grafiek = `40/10 = 4`<br>
	</li>
	<li>
		Neem over en vul in:<br>
		Formule rode grafiek: `y = 4x+10`<br>
		Formule groene grafiek: `y = 4x+30`	
	</li>
</ol>
			
	</div>
</div>

</div>

<!--opdracht 12-->
<div class="tekstblok opdracht">

<h3>Opdracht 12</h3>
<p>Hieronder zie je een assenstelsel met drie grafieken:</p>
<p><img src="afbeeldingen/analyse_leerjaar_2/regelmaat_8.png" width="500px"></p>
<ol>
	<li>
		Noteer voor iedere grafiek het startgetal.
	</li>
	<li>
		Bereken voor iedere grafiek het hellingsgetal. Je mag een tabel gebruiken. 
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
				Startgetal:<br>
				groen = `-2`<br>
				rood = `1`<br>
				blauw = `3`
			</li>
			<li>
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
							<TD><em>y blauwe grafiek</em></TD><TD>3</TD><TD>2</TD>
						</TR>
						
				</TABLE><br>
				<em>Hellingsgetal</em> blauwe grafiek = `(-1)/2 = -1/2`<br>
			
	</div>
</div>

</div>


<!--opdracht 13-->
<div class="tekstblok opdracht">
<h3>Opdracht 13</h3>
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
				<TD><em>t</em> (in uren)</TD><TD></TD><TD></TD>
			</TR>
			<TR>
				<TD><em>T</em> (in graden celsius)</TD><TD></TD><TD></TD>
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
		<h3>Antwoorden bij opdracht 13</h3>
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
				rood: `T = 1,25t+5`<br>
				blauw: `T = -3t+20`
			</li>
		</ol>
		
	</div>
</div>
</div>


<div class="tekstblok opdracht">
<h3>Opdracht 14</h3>
<p>
	Hieronder zie je een assenstelsel met twee grafieken:
</p>
<img src="afbeeldingen/analyse_leerjaar_2/opgave_stijn_hatice.png" width="300px" class="rightfloat">
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
		<h3>Antwoorden bij opdracht 14</h3>
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
				<em>`I` Stijn</em> `=1,25t+10`<br>
				<em>`I` Hatice</em> `=2,5t+5`
			</li>
			<li>
				Bij 4 uur werken.
			</li>
			<li>
				Ze hebben dan €15 verdiend.
			</li>
			<li>
				`I` <em>Stijn</em> `=1,25`&sdot;`20+10`<br>
				`I` <em>Stijn</em> `=25+10 = 35`<br>
				<br>
				`I` <em>Hatice</em> `=2,5`&sdot;`20+5`<br>
				`I` <em>Hatice</em> `=50+5 = 55`<br>
				<br>
				Samen verdienen ze: `35 + 55 = 90` euro.
			</li>
		</ol>

	</div>
</div>
</div>

<div class="tekstblok opdracht">
<h3>Opdracht 15</h3>
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
	Vind je het lastig? Kijk eens bij de <a href="index2.php?p=analyse_lineaire_formules_2t#opdracht_15">vmbo-t versie</a>. Hier staat ook het antwoord op deze onderzoeksvraag.
</p>
</div>
<!--
<ol>
	<li>
		<img src="afbeeldingen/analyse_leerjaar_2/Hannah_leeg.png" class="rightfloat" width="300px">
		Neem het assenstelsel hiernaast over. Zet bij de horizontale as <em>Tijd in minuten</em>
		en bij de verticale as <em>Afstand in kilometers</em>.
			
	</li>
	<li>
		Op `t=0` vertrekt Hannah van huis.<br>
		Neem over en vul in:<br>
		Voor Hannah geldt: bij 	`t=0` hoort `A=`...
	</li>
	<li>
		Hannah rijdt `15` kilometer per uur.<br>
		Neem over en vul in:<br>
		Voor Hannah geldt: bij `t=60` hoort `A=`...
	</li>
	<li>
		Neem de tabel over en vul in:<br><br>
		<TABLE class= "verhouding">
					<TR>
						<TD><em>Tijd in minuten</em></TD><TD>0</TD><TD>60</TD>
					</TR>
					<TR>
						<TD><em>Afstand Hannah in kilometers</em></TD><TD></TD><TD></TD>
					</TR>
		</TABLE><br>
	</li>
	<li>
		Teken de grafiek van Hannah in het assenstelsel van opgave a. Zet langs de grafiek haar naam.
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
						<TD><em>Tijd in minuten</em></TD><TD>20</TD><TD>30</TD>
					</TR>
					<TR>
						<TD><em>Afstand vader in kilometers</em></TD><TD></TD><TD></TD>
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
			<h3>Antwoorden bij opdracht 15</h3>
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
							<TD><em>Tijd in minuten</em></TD><TD>0</TD><TD>60</TD>
						</TR>
						<TR>
							<TD><em>Afstand Hannah in kilometers</em></TD><TD>0</TD><TD>15</TD>
						</TR>
					</TABLE><br>
				</li>
				<li><br>
					<img src="afbeeldingen/analyse_leerjaar_2/Hannah_1_grafiek.png" width="300px">	
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
			<th colspan="2">: 60<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
			<th colspan="2">x 10<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" height="10px" class="centerfloat"></th>
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
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>: 60</th>
			<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" height="10px" class="centerfloat"><br>x 10</th>
			<th></th>
		</tr>
	</tfoot>	
	</table>
</li>							
	<li>
		<TABLE class= "verhouding">
					<TR>
						<TD><em>Tijd in minuten</em></TD><TD>20</TD><TD>30</TD>
					</TR>
					<TR>
						<TD><em>Afstand vader in kilometers</em></TD><TD>0</TD><TD>5</TD>
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

-->



<div class="tekstblok theorie analyse">
<h3>Theorie B Grafieken tekenen met behulp van een tabel</h3>
<p>	
	We gaan de grafiek van de formule `y = 2x + 1` met behulp van een tabel tekenen.
</p>
<p>
	<u>Stap 1:</u><br>
	Omdat we voor een rechte lijn slechts twee punten nodig hebben,  maken een tabel met twee invoer- en uitvoerwaarden.<br>
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>...</td><td>...</td></tr>
		<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
	</table>
</p>
<p>
	<u>Stap 2:</u><br>
		De invoer bepalen we zelf. We kiezen voor makkelijke getallen die zorgen voor <b>roosterpunten</b>. <br>
		De 0 is bijna altijd handig omdat dat ten eerste makkelijk rekent en dan ten tweede meteen het snijpunt met de `y`-as is bepaald. Voor het tweede invoergetal kiezen we nu 5 omdat we zo een tweede punt krijgen dat redelijk van het eerste afligt. Dat maakt het tekenen van de grafiek straks makkelijker en nauwkeuriger.
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
		<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
	</table>
</p>
<p>
	<u>Stap 3:</u><br>
	Bereken de uitvoerwaarden door de invoer in te vullen in de formule:<br>
	Bij `x=0` hoort `y = 2*0 + 1 = 1` <br>
	Bij `x=0` hoort `y = 2*5 + 1 = 11` <br>
	<table class="verhouding">
		<tr><td ><em>x</em></td><td>0</td><td>5</td></tr>
		<tr><td><em>y</em></td><td>1</td><td>11</td></tr>
	</table>
</p>
<p>
	Uit de tabel halen we de punten (0, 1) en (5, 11). We maken een assenstelsel waar we deze punten inzetten. Zorg dat je assenstelsel groot genoeg is. Verbind tenslotte je punten met een mooie rechte lijn.
	<table bgcolor="white" width="97%">
		<tr>
			<td>
				<img src="../afbeeldingen/analyse_4/theorie_I_punten.png" alt="theorie_I_punten" width="250px" height="" />
			</td>
			<td>
				<img src="../afbeeldingen/analyse_4/theorie_I_grafiek.png" alt="theorie_I_grafiek" width="250px" height="" />
			</td>
		</tr>
		<tr style="text-align:center";>
			<td>
				markeer de punten
			</td>
			<td>
				verbind met een rechte lijn
			</td>
		</tr>
	</table>
</p>
<p>				
	Denk eraan dat je tekent met potlood en geodriehoek. Zet de formule bij de grafiek en zet de namen van de assen op de juiste plek. 
</p>
</div>


16-->
<div class="tekstblok opdracht">
<h3>Opdracht 16</h3>
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
	<h3>Antwoorden bij opdracht 16</h3>
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
			<li><br>
				<img src="afbeeldingen/analyse_leerjaar_2/opdracht_16.png" width="150px">
		</ol>
	</div>
</div>
</div>

<!--Opdracht 17-->
<div class="tekstblok opdracht">
<h3>Opdracht 17</h3>
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
	<h3>Antwoorden bij opdracht 17</h3>
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

<div class="tekstblok opdracht">
<h3>Opdracht 18</h3>
<p>
	Teken de grafiek van de formule `y=1/4x+6` met behulp van een tabel.
</p>
<ol>
	<li>Neem de tabel over en vul in: 
		<table class="verhouding">
			<tr><td ><em>x</em></td><td>0</td><td>16</td></tr>
			<tr><td><em>y</em></td><td>...</td><td>...</td></tr>
		</table>
	</li>
	<li>
		Waarom is het handig om als tweede waarde `x=16` te kiezen?
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
					<tr><td ><em>x</em></td><td>0</td><td>16</td></tr>
					<tr><td><em>y</em></td><td>6</td><td>10</td></tr>
				</table>
			</li>
			<li>Omdat je dan op een heel getal, dus een roosterpunt uitkomt.</li>
			<li><br>
				<img src="afbeeldingen/analyse_leerjaar_2/opdracht_18.png" width="350px">
			</li>
		</ol>
	</div>
</div>
</div>


<div class="tekstblok opdracht">
<h3>Opdracht 19</h3>
<p>
	Teken de grafiek van de formule `y = 2/3x + 7` met behulp van een tabel.
</p>
<ol>
	<li>Neem de tabel over en vul in: 
		<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
			<TR><TD><mi>x</mi></TD><TD><mn></mn></TD><TD><mn></mn></TD></TR>
			<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR>
		</TABLE>
	</li>
	<li>
		Waarom is het handig om als tweede waarde een <a href="index2.php?p=vaar_tafels_van_vermenigvuldiging">veelvoud</a> van drie te kiezen?
	</li>
	<li>
		Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.
	</li>
</ol>
	
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden bij opdracht 19</h3>
				<ol>
					<li>
						<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR>
									<TD><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mn>9</mn></TD>
								</TR>
								<TR>
									<TD><mi>y</mi></TD><TD>7</TD><TD>13</TD>
								</TR>
						</TABLE>
					</li>
					<li>
						Omdat je dan een heel getal voor <em>y</em> krijgt. Hele waarden kan je nauwkeuriger in je assenstelsel tekenen.
					</li>
					<li>
						<br>
						<img src="afbeeldingen/analyse_4/grafiek_opdracht19_manier1.png"  width="400px">
					</li>
				</ol>

			</div>
		</div>

</div>

<div class="tekstblok opdracht">
<h3>Opdracht 20</h3>
<p>
	We gaan de grafiek van de volgende formule tekenen:<br>
	`y=2/7x - 5`
</p>
<ol>
	<li>Neem de tabel over en vul in: 
		<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
						<TR><TD ><mi>x</mi></TD><TD><mn></mn></TD><TD><mn></mn></TD></TR>
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
		<h3>Antwoorden bij opdracht 20</h3>
			<ol>
				<li><TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
							<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>70</mn></TD></TR>
							<TR><TD><mi>y</mi></TD><TD>-5</TD><TD>15</TD></TR></TABLE></li>
				<li><br><img src="afbeeldingen/analyse_4/grafiek_opdracht20.png" width="400px"></li>
			</ol>

		</div>
	</div>

</div>


<div class="tekstblok opdracht">
	<h3>Opdracht 21</h3>
	<p>
		We gaan de grafiek van de volgende formule tekenen:<br>
		`y=-3/5x + 2`
	</p>
		<ol>
			<li>Neem de tabel over en vul in: 
				<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn></mn></TD><TD><mi></mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD></TD><TD></TD></TR>
				</TABLE>
			</li>
			<li>
				Teken de grafiek bij de formule. Maar daarvoor eerst een geschikt assenstelsel.
			</li>

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden bij opdracht 21</h3>
				<ol>
					<li>
						<TABLE FRAME="void" RULES="all"  width="200px" style="text-align: center">
								<TR><TD ><mi>x</mi></TD><TD><mn>0</mn></TD><TD><mi>10</mn></TD></TR>
								<TR><TD><mi>y</mi></TD><TD>2</TD><TD>-4</TD></TR>
						</TABLE>
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_21.png" width="350px">
					</li>
				</ol>
			</div>
		</div>
	</p>
</div>


<div class="tekstblok opdracht analyse">
	<h3>Opdracht 22</h3>
		<ol>
			<li>Teken een assenstelsel. Teken de x-as van 0 t/m 8 met stapgrootte 1 en de y-as van 0 t/m 15 neem stapgrootte 1 op de verticale as.</li>
			<li>We gaan nu de grafiek tekenen bij de formule `y=2x+5. Wat is het startgetal in de formule? Dit is het punt waar de grafiek op de verticale as begint.  Teken dit punt in je assenstelsel.</li>
			<li>Wat is het hellingsgetal in de formule?</li>
			<li>Het hellingsgetal betekende dat als <em>x</em> 1 groter wordt, de <em>y</em>, in dit geval, 2 groter wordt.<br>
			Ga nu met je potlood op het startgetal in je grafiek staan. Schuif 1 hokje naar rechts en houdt je potlood op je papier. Nu is de <em>x</em>  1 groter. Hoeveel moet ik omhoog /omlaag om bij mijn volgende punt van de grafiek te komen? Teken dit punt.</li>
			<li>Teken nu de grafiek door de twee punten met een lijn te verbinden.</li>
	
<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden opdracht 22</h3>
				<ol>
					<li><br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_22_a.png" width="350px">
					</li>
					<li>
						Het startgetal = `5`<br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_22_b.png" width="350px">
					</li>
					<li>
						Het hellingsgetal = `2`
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_22_d.png" width="350px">
					</li>
					<li><br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_22_e.png" width="350px">
					</li>
					
					
					</ol>
			</div>
		</div>
	</p>
</div>


<div class="tekstblok opdracht analyse">
	<h3>Opdracht 23</h3>
	<p>We gaan de formule opstellen van de lijn die gaat door de punten A(0,2) en B(4,14).
	<ol>
		<li>
			Teken in een assenstelsel de lijn door de punten A(0,2) en B(4,14). Laat de lijn niet 
			stoppen bij de punten, het is geen lijnstuk, maar trek hem door.
		</li>
		<li>
			Als de x-coördinaat met 2 toeneemt, dan neemt de y-coördinaat met … toe.
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
			<h3>Antwoorden</h3>
				<ol>
					<li>
						<br>
						<img src="afbeeldingen/analyse_lineaire_formules_2hv/opdracht_23.png" width="250px">
					</li>
					<li>
						Als de x-coördinaat met 2 toeneemt, dan neemt de y-coördinaat met 12 toe.
					</li>
					<li>
						Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met 6 toe.
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

<div class="tekstblok opdracht analyse">
	<h3>Opdracht 24</h3>
	<p>Gegeven zijn de punten A(-3,32) en B(7,2).</p>
	<ol>
		<li>Hoeveel neemt de x-coordinaat toe van punt A naar punt B?</li>
		<li>Hoeveel neemt de y-coördinaat toe van punt A naar punt B?</li>
		<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met … toe.</li>
		<li>Wat is y als x=0?</li>
		<li>Maak de formule bij de grafiek `y=`...`x+`...
		</li>
	</ol>
	

		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
			<h3>Antwoorden bij opdracht 24</h3>
				<ol>
					<li>De x-coördinaat neemt met 10 toe.</li>
					<li>De y-coördinaat neemt met -30 toe.</li>
					<li>Als de x-coördinaat met 1 toeneemt, dan neemt de y-coördinaat met `(-30)/10 = -3` toe.</li>
					<li>Ik moet vanuit punt A(-3,32) drie stappen naar rechts om bij x=0 te komen. Eén stap naar rechts betekent `-3` erbij op de y-coördinaat. Dus drie stappen naar rechts betekent `-9` erbij op de y-coördinaat. De y-coördinaat was 32.<br>
					Startgetal: `32 + -9 = 23`</li>
					<li>`y=-3x+23`</li>
				</ol>
			</div>
		</div>
	</p>

</div>




</div>


</div>

</div>