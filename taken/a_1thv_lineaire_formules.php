<?php 
	//defineer titel
	$taaknaam ="Lineaire formules";
?>

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Van regel naar woordformules',
      '#theorieB' => 'Startgetal en regelmaat',
      '#theorieC' => 'Invoer en uitvoer',
      '#theorieD' => 'Van tabel naar woordformule',
      '#theorieE' => 'Afname is negatieve toename',
      '#theorieF' => 'Van woordformule naar grafiek',
      '#theorieG' => 'Van grafiek naar woordformule',
      '#theorieH' => 'Start- en hellingsgetal',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 1 | <?php echo $taaknaam; ?></title>

<!-- snippet uitwerkingen

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">

		</div>
	</div>	

-->

<div class="taakinhoud">

<div class="tekstblok theorie analyse" id="inleiding">
	<h3>Inleiding</h3>
	<p>
		Jasmijn wil graag de school een grote schoonmaakbeurt geven. Ze vindt de volgende advertenties op internet.
	</p>
	<div class="row">
		<div class="col-xs-6">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/schoonmaak1.png"/>
		</div>
		<div class="col-xs-6">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/schoonmaak2.png"/>
		</div>
	</div>

	<p>
		Hoe moet Jasmijn er nou achter komen welk bedrijf voor haar het gunstigst is?
	</p>		
	<p>
		Deze taak gaat over <b>lineaire verbanden</b>. Met deze verbanden kun je haar helpen een keuze te maken. 
	</p>
	
</div>	

<div class="tekstblok opdracht" id="1">
	<h3>Opdracht 1 Rijtjes</h3>
	<p>
		Neem de getallenrijen over, vul de ontbrekende getallen in en beantwoord de vraag.
	</p>
	<div class="row">
		<div class="col-xs-4">
			<ol>
				<li>
					3, 4, 5, 6, ... , ... 
					<br>
					Er komt steeds ... bij.
				</li>
				<li>
					6, 11, ... , 21, 26 , ...
					<br>
					Er komt steeds ... bij.
				</li>
				<li>
					-7, ... , -1, 2, ... , 8
					<br>
					Er komt steeds ... bij.
				</li>
			</ol>
		</div>
		<div class="col-xs-5">				
			<ol start="4">
				<li>
					... , ... , -148, -172, -196 , ...
					<br>
					Er komt steeds ... bij. 
				</li>
				<li>
					89, 78, 67, 56, ... , ...
					<br>
					Er komt steeds ... bij.
				</li>
				<li>
					10, ... , ... , 55, ... , ... , 100
					<br>
					Er komt steeds ... bij.
				</li>
			</ol>
		</div>
		<div class="col-xs-3">
			<p class="geeltje">
				`3` er af is `-3` erbij.
			</p>
		</div>
	</div>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<div class="row">
				<div class="col-xs-4">
					<ol>
						<li>
							3, 4, 5, 6, 7, 8 
							<br>
							Er komt steeds 1 bij.
						</li>
						<li>
							6, 11, 16, 21, 26, 31
							<br>
							Er komt steeds 5 bij.
						</li>
						<li>
							-7, -4, -1, 2, 5, 8
							<br>
							Er komt steeds 3 bij.
						</li>
					</ol>
				</div>
				<div class="col-xs-8">				
					<ol start="4">
						<li>
							-100, -124, -148, -172, -196, -220
							<br>
							Er komt steeds -24 bij.
						</li>
						<li>
							89, 78, 67, 56, 45, 34
							<br>
							Er komt steeds -11 bij.
						</li>
						<li>
							10, 25, 40, 55, 70, 85, 100
							<br>
							Er komt steeds 15 bij.
						</li>
					</ol>
				</div>
			</div>		
		</div>
	</div>	
	
</div>
	
<div class="tekstblok opdracht" id="2">
	<h3>Opdracht 2 Hoefijzers</h3>
	<p>
		Een paard heeft 4 benen. Dus voor één paard zijn er vier hoefijzers nodig.
	<br>
		Voor twee paarden reken je als volgt:<br>
		Er zijn 4 hoefijzers per paard, dus 4 keer 2 is 8 hoefijzers voor 2 paarden.
		</p>
	<ol>
		<li>
			Hoeveel hoefijzers zijn er nodig voor drie paarden? En hoeveel voor 5 paarden?
		</li>
		<li>
			Neem over en vul in.
			"<em>Het aantal hoefijzers is 4 keer het aantal ... .</em>"
		</li>
		<li>
			Hoeveel paarden kun je met 64 hoefijzers beslaan?
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					3 &times; 4 = 12<br>
					Voor 3 paarden zijn 12 hoefijzers nodig.<br>
					5 &times; 4 = 20<br>
					Voor 5 paarden zijn 20 hoefijzers nodig.
				</li>
				<li>
					"<em>Het aantal hoefijzers is 4 keer het aantal paarden.</em>"<br>
					Had je de zin overgenomen?
				</li>
				<li>
					64 : 4 = 16<br>
					Met 64 hoefijzer zou je genoeg moeten hebben voor 16 paarden.
				</li>
			</ol>
		</div>
	</div>	
</div>
	
<div class="tekstblok opdracht" id="3">
	<h3>Opdracht 3 Wisselautomaat</h3>
	<p>
		Een wisselautomaat wisselt euro's in muntstukken van 20 cent. 	
	</p>
	<ol>
		<li>
			Hoeveel stukken van 20 cent krijg je voor één euro?
		</li>
		<li>
			Joachim stopt drie munten van één euro in de automaat.<br>
			Hoeveel munten van 20 cent krijgt hij terug?
		</li>
		<li>
			Neem over en vul in.<br>
			"<em>Het aantal muntstukken van 20 cent is ... keer het aantal munten van één euro.</em>"
		</li>
		<li>
			Hoeveel munten van één euro moet je wisselen om 35 munten van 20 cent te krijgen?
		</li>
		<li>
			Hoeveel euro moet je wisselen om 27 munten van 20 cent te krijgen?
		</li>
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Je krijgt 5 stukken van 20 cent voor 1 euro.
				</li>
				<li>
					3 &times; 5 = 15<br>
					Voor 3 euro krijgt Jochem 15 stukken van 20 cent.
				</li>
				<li>
					"<em>Het aantal muntstukken van 20 cent is 5 keer het aantal munten van één euro.</em>"
				</li>
				<li>
					35 : 5 = 7<br>
					Om 35 munten van 20 cent te krijgen, zul je 7 euro's moeten wisselen.
				</li>
				<li>
					`27 : 5 = 5 2/5` <br> 
					Je zult dus 6 euro's moeten wisselen, want bij 5 euro's krijg je maar 25 stukken.
				</li>
			</ol>		
		</div>
	</div>

</div>
	
<div class="tekstblok opdracht" id="4">
	<h3>Opdracht 4 Tafelschikking</h3>
	<p>
		Hieronder zie je plaatjes van tafelschikkingen. In figuur 1 staat één tafel tegen de muur. Er om heen staan drie blauwe stoelen. Steeds wordt er een tafel met stoelen bijgezet.
	</p>
	<img src="afbeeldingen/analyse_leerjaar_1/tafelschikkingen_1.png" width="600" />
	<ol>
		<li>Teken figuur 4.</li>
		<li>Herken je de regelmaat? Hoeveel stoelen komen er steeds bij?</li>
		<li>Hoeveel stoelen heb je nodig voor de 6<sup>e</sup> figuur? </li>
		<li>En hoeveel stoelen voor de 10<sup>e</sup> figuur?</li>
		<li>Hoe bereken je het aantal stoelen als je het nummer van de figuur weet?</li>
		<li>
			Neem over en vul in.<br>
			"<em>Het aantal stoelen is ... keer het aantal tafels plus ... .</em>"
		</li>	
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>Een eigen tekening met 4 tafels met elk twee stoelen en aan het hoofdeinde één extra stoel erbij.</li>
				<li>De regelmaat is dat er steeds twee stoelen bijkomen.</li>
				<li>
					Manier 1: doortellen<br>
					De vierde figuur had al negen stoelen, daar komen 2 keer 2 stoelen bij.<br>
					Dus 9 + 2 + 2 geeft 13 stoelen.
					<br>
					Manier 2: uitrekenen<br>
					Per tafel 2 stoelen, dus 6 keer 2 is 12 stoelen, en nog 1 stoel aan kop geeft 13 stoelen.
				</li>
				<li>
					Manier 1: doortellen<br>
					De 6<sup>e</sup> figuur had al 13 stoelen, daar komen 4 keer 2 stoelen bij.<br>
					Dus 13+2+2+2+2 geeft 21 stoelen.
					<br>
					Manier 2: uitrekenen<br>
					Per tafel 2 stoelen, dus 10 keer 2 is 20 stoelen, en nog 1 stoel aan kop geeft 21 stoelen.
				</li>
				<li>
					In de eerste figuur heb je 2 stoelen aan de zijkanten en 1 aan kop. Bij de volgende figuur, dus als er een tafel bij komt, 
					komen er steeds twee stoelen bij. Dus als je 2 keer het nummer van de figuur doet en er 1 bij optelt heb je het totaal aantal stoelen.
				</li>
				<li>
					<em>Het aantal stoelen is 2 keer het aantal tafels plus 1.</em>
				</li>
			</ol>
		</div>
	</div>

</div>

<blockquote class="geeltje">
	<p>
		Figuur kan in de meeste betekenissen zowel een de-woord als een het-woord zijn. In de betekenissen 'gestalte, lichaamsvorm' en 'indruk die iemand maakt' is er een sterke tendens om het figuur te gebruiken.
	</p>
	<p>	
		In de andere betekenissen kunt u uw taalgevoel volgen, maar pas uw keuze wel consequent toe.	Als u de figuur zegt, zegt u ook die/deze figuur, elke figuur, onze figuur en als u het figuur zegt, zegt u ook dit/dat figuur, elk figuur, ons figuur.
	</p>
	<figcaption>
		Bron: <a href="http://www.taaltelefoon.be/figuur-de-figuur-het-figuur">Taaltelefoon</a>
	</figcaption>
</blockquote>



<div class="tekstblok opdracht" id="5">
	<h3>Opdracht 5 Sponsorloop</h3>	
	<div class="row">
		<div class="col-xs-6">
			<p>
				Harry doet mee aan een sponsorloop. Met deze sponsorloop verzamelt Harry geld voor een goed doel.
			</p>
			<p>
				Harry ontvangt een vast bedrag en een bedrag per rondje. In het schema hieronder heeft Harry al zijn sponsoren bij elkaar gezet.
			</p>
		</div>
		<div class="col-xs-6">
			<img src="afbeeldingen/analyse_leerjaar_1/sponsorloop.png"/>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6">
			<ol>
				<li>Bereken het vaste bedrag dat Harry ontvangt.</li>
				<li>Bereken het bedrag dat Harry in totaal per rondje krijgt.</li>
				<li>Hoeveel geld haalt Harry op voor het goede doel als hij 5 rondjes rent? Schrijf je berekening op.</li>
				<li>Hoeveel geld haalt Harry op voor het goede doel als hij 10 rondjes rent? Schrijf je berekening op.</li>
				<li>Hoe kun je het bedrag berekenen als je het aantal rondjes weet dat Harry rent?</li>
				<li>
					Neem over en vul in.<br>
					"<em>Het totale bedrag is ... keer het aantal rondjes plus ... .</em>"
				</li>		
			</ol>
		</div>
		<div class="col-xs-6">
			<img  src="afbeeldingen/analyse_leerjaar_1/tabel_sponsorloop.png"/>
		</div>
	</div>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						5,50 + 3,00 + 5,00 + 2,00 + 1,50 = € 17,-
					</li>
					<li>
						0,25 + 0,35 + 1,00 + 0,40 = € 2,-
					</li>
					<li>
						Harry krijgt per rondje 2 euro, dus voor 5 rondjes krijgt hij 10 euro. Daarbovenop  krijgt hij ook nog een vast bedrag van 17 euro, dus in totaal 10 + 17 = &euro; 27,-.
					</li>
					<li>
						Voor de rondjes &euro;2 keer 10 = € 20.<br>
					    Plus het vast bedrag van € 17,-<br>
					    20 + 17 = &euro; 37,-
					</li>
					<li>
						Je doet steeds &euro;2 maal het aantal rondjes en daar &euro;17 bij optellen.
					</li>
					<li>
						"<em>Het totale bedrag is 2 keer het aantal rondjes plus 17.</em>"
				</li>	
				</ol>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht" id="6">
	<h3>Opdracht 6 Sponsorloop vervolg (havo/vwo)</h3>	
	<ol start="7">
		<li>
			Bereken het bedrag als Harry 15 rondjes rent? Schrijf je berekening op.
		</li>
		<li>
			Waarom kan ik de antwoorden van 5c. en 5d. niet bij elkaar optellen om 15 rondjes uit te rekenen?
		</li>
		<li>
			Harry heeft in totaal 91 euro bij elkaar gerend. Hoeveel rondjes heeft hij daarvoor moeten rennen? Schrijf je berekening op.
		</li>
	</ol>
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol start="7">
				<li>
					2 &times; 15 + 17 = <br>
					30 + 17 = &euro;47.
				</li>
				<li>
					Als je de bedragen van 3c en 3d bij elkaar optelt, reken je tweemaal het vaste bedrag en dat was niet de afspraak.
				</li>	
				<li>
					Eerst het vaste bedrag eraf: &euro; 91 - &euro; 17 = &euro; 74.<br>
					Per rondje &euro; 2, dus 74 : 2 = 37 rondjes.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieA">
	<h3>Theorie A Van regel naar woordformule</h3>
	<p>
		In de bovenstaande opgaven heb je een bepaalde <b>regel</b> ontdekt. Van zo’n regel, kun je een zogenaamde <b>woordformule</b> maken. En met een woordformule kun je makkelijk rekenen.
	</p>
	<p>
		Kijk nog eens terug naar de tafelschikking. Nu met rode en groene stoelen.
	</p>
	<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/tafelschikkingen_3.png"/>
	<p>
		Per tafel komen er steeds <span id="hellingsgetal">2</span> stoelen bij. En aan de kop staat <span id="startgetal">1</span> stoel. 
	</p>
	<p>
		De <b>regel</b> is 
		<code class="code"> 
			<em>Het aantal stoelen is <span id="hellingsgetal">2</span> keer het aantal tafels plus  <span id="startgetal">1</span></em>
		</code>
	</p>
	<p>
		De <b>woordformule</b> is
		<code class="code">
			<em>aantal stoelen = <span id="hellingsgetal">2</span> &times;  aantal tafels +  <span id="startgetal">1</span></em>
		</code>
	</p>
</div>

<div class="tekstblok opdracht" id="7">
	<h3>Opdracht 7 Tafelschikking uitrekenen</h3>
	<p>
		We gebruiken de situatie en de woordformule uit de theorie:<br>
		<em>aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>aantal tafels</em> + <span id="startgetal">1</span>
	</p>
	<ol>
		<li>
			Om te bereken hoeveel stoelen er bij 4 tafels horen, vul je in plaats van <em>aantal tafels</em> het getal `4` in in de woordformule. <br>
			Controleer je antwoord met je eigen tekening bij opdracht 4<em>a</em>.
		</li>
		<li>
			Bereken met woordformule hoeveel stoelen bij 10 tafels horen. Door in plaats van <em>aantal tafels</em> het getal `10` in te vullen in de woordformule.
		</li>
		<li>
			Bereken met woordformule hoeveel je voor 15 tafels nodig hebt. 
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<em>aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>aantal tafels</em> + <span id="startgetal">1</span><br>
					4 invullen op plek <em>aantal tafels</em> geeft:<br>
					<em>aantal stoelen</em> =<span id="hellingsgetal">2</span> &times; <em>4</em> + <span id="startgetal">1</span>= 8 + 1 = 9
				</li>
				<li>
					10 invullen op plek <em>aantal tafels</em> geeft:<br>
					<em>aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>10</em> + <span id="startgetal">1</span>= 20 + 1 = 21	
				</li>
				<li>
					15 invullen op plek <em>aantal tafels</em> geeft:<br>
					<em>aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>15</em> + <span id="startgetal">1</span>= 30 + 1 = 31	
				</li>
			</ol>
		</div>
	</div>	
		
</div>

<div class="tekstblok opdracht" id="8">
	<h3>Opdracht 8 Een andere tafelschikking</h3>
	<p>
		Hieronder zie je plaatjes van een andere tafelschikking. In figuur 1 staan vijf stoelen om één tafel.
	</p>
	<img src="afbeeldingen/analyse_leerjaar_1/tafelschikkingen_2.png" width="600" />
		<ol>
			<li>Teken figuur 4.</li>
			<li>Hoeveel stoelen heb je nodig voor de 5<sup>e</sup> figuur?</li>
			<li>
				Herken je de regel? Hoeveel stoelen komen er steeds bij?
			</li>
			<li>
				Neem over en vul in.<br>
				"<em>Het aantal stoelen is ... keer het aantal tafels plus ... .</em>"
			</li>
			<li>
				Maak de woordformule bij deze situatie.
			</li>
			<li>Gebruik de woordformule om het aantal stoelen bij 12 tafels te berekenen.</li>
			<li>Gebruik de woordformule om het aantal stoelen bij 36 tafels te berekenen.</li>
		</ol>
		
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<ol>
					<li>
						Teken figuur 4, eigen tekening, vergelijk met klasgenoot.<br>
						Als het goed is, heb je 14 stoelen getekend bij vier tafels.
					</li>
					<li>
						17 stoelen, 3 per tafel én 2 aan de kopse kanten.
					</li>
					<li>
						Er komen steeds drie stoelen bij en er staan twee stoelen aan de kopse kanten.
					</li>
					<li>
						"<em>Het aantal stoelen is 3 keer het aantal tafels plus 2.</em>"
					</li>
					<li>
						<em>aantal stoelen</em> = 3 &times; <em>aantal tafels</em>+ 2
					</li>
					<li>
						12 invullen voor <em>aantal tafels</em> geeft:<br>
						<em>aantal stoelen</em> =3 &times; <em>12</em> + 2 =36 + 2 = 38<br>
						Dus 38 stoelen bij 12 tafels.
					</li>
					<li>
						36 invullen voor <em>aantal tafels</em> geeft:<br>
						<em>aantal stoelen</em> =3 &times; <em>36</em> + 2 = 108 + 2= 110<br>
						Dus 110 stoelen bij 36 tafels.					
					</li>
				</ol>
			</div>
		</div>
</div>

<div class="tekstblok opdracht" id="9">
	<h3>Opdracht 9 Dropjes</h3>
	<p>
		Hieronder zie je figuren met dropjes. 
		<img src="afbeeldingen/analyse_leerjaar_1/dropjes_3keerfiguurplus4.png" >
	</p>
	<ol>
		<li>Hoeveel dropjes komen er steeds bij?</li>
		<li>Uit hoeveel dropjes bestaat de 4<sup>e</sup> figuur?</li>
		<li>En uit hoeveel dropjes bestaat de 7<sup>e</sup> figuur?</li>
		<li>
			Neem over en vul in.<br>
			"<em>Het aantal dropjes is ... keer het nummer van de figuur plus 4.</em>"
		</li>
		<li>Welke woordformule past bij de rij?</li>
		<li>Bereken met de woordformules het aantal dropjes van de 32<sup>e</sup> figuur.</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					3 dropjes
				</li>
				<li>
					13 + 3 = 16 dropjes (doortellen vanaf figuur 3)
				</li>
				<li>
					16 + 3 + 3 + 3= 25 dropjes (doortellen vanaf figuur 4)
				</li>
				<li>
					"<em>Het aantal dropjes is 3 keer het nummer van de figuur plus 4.</em>"
				</li>
				<li>
					<em>aantal dropjes</em> = 3 &times; <em>nummer figuur</em> + 4
				</li>
				<li>
					Invullen 32 voor <em>nummer figuur</em> geeft:<br>
					<em>aantal dropjes</em> = 3 &times; <em>32</em> + 4 = 96 + 4 = 100<br>
					De 32<sup>e</sup> figuur heeft 100 dropjes. Lekker!
				</li>
			</ol>
		</div>
	</div> 
</div>

<div class="tekstblok opdracht" id="10">
	<h3>Opdracht 10 Blokjes</h3>
	<p>
		<img src="afbeeldingen/analyse_leerjaar_1/blokjes.png">
	</p>
	<ol>
		<li>
			Uit hoeveel blokjes bestaat figuur 4?
		</li>
		<li>
			Hoeveel blokjes komen er steeds bij?
		</li>
	</ol>
	<p>
		We zouden ook nog een figuur <b>vóór</b> figuur nummer 1 kunnen leggen. Deze figuur noemen we dan <b>figuur nummer 0</b>.
	</p>
	<br>
	<ol start="3">
		<li>
			Uit hoeveel blokjes bestaat figuur nummer 0? 
		</li>
		<li>
			Neem de tabel over en vul in.<br>
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
						<td colspan="2"><span id="startgetal">...</span></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>

			</table>
			</div>
		</li>
		<li>
			Welke van de woordformules past bij deze situatie?
			<ol id="numbers">
				<li>
					<em>aantal blokjes</em> = 2 &times; <em>nummer figuur</em> + 3
				</li>	
				<li>
					<em>aantal blokjes</em> = 2 &times; <em>nummer figuur</em> + 1
				</li>
			</ol>
		</li>
		<li>
			Controleer de woordformule met figuur nummer 3 en 4.
		</li>
		<li>
			Bereken met behulp van de woordformule uit hoeveel blokjes de 17<sup>e</sup> figuur bestaat.
		</li>
		<li>
			Bestaat er een figuur met 28 blokjes? (havo/vwo)
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>9 blokken</li>
				<li>Er komen steeds 2 blokjes bij.</li>
				<li>1 blok</li>
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
									<td colspan="2">4</td>	
								</tr>
								<tr>
									<td><em>aantal blokjes</em></td>
									<td colspan="2"><span id="startgetal">1</span></td>
									<td colspan="2">3</td>
									<td colspan="2">5</td>
									<td colspan="2">7</td>
									<td colspan="2">9</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>
				<li>
					<em>aantal blokjes</em> = 2 &times; <em>nummer figuur</em> + 1
				</li>
				<li>
					Invullen 3 voor <em>nummer figuur</em> geeft:<br>
					<em>aantal blokjes</em> = 2 &times; <em>3</em> + 1 = 7 Klopt!<br>
					Invullen 4 voor <em>nummer figuur</em> geeft:<br>
					<em>aantal blokjes</em> = 2 &times; <em>4</em> + 1 = 9 Klopt ook!
				</li>
				<li>
					Invullen 17 voor <em>nummer figuur</em> geeft:<br>
					<em>aantal blokjes</em> = 2 &times; <em>17</em> + 1 = 34 + 1 = 35
				 </li>
				 <li>
				 	Als er een figuur met 28 blokjes bestaat, dan moet gelden dat:<br>
					2 &times; <em>nummer figuur</em> + 1 = 28<br>
					Dan moet gelden dat:<br>
					2 &times; <em>nummer figuur</em> = 27, want 27 + 1 = 28<br>
					Maar 27 is niet deelbaar door 2, dus er is géén figuur met 28 blokjes.<br>
					Je kunt ook beredeneren dat elk figuur een oneven aantal blokjes zal moeten hebben, want steeds vermenigvuldigen met 2 en dan 1 optellen is altijd oneven. Dus een figuur met 28 blokjes bestaat niet.
				 </li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieB">
	<h3>Theorie B Regelmaat en startgetal in een tabel</h3>
	<p>
		Als je een <b>tabel</b> maakt bij een situatie, kun je de <span id="hellingsgetal">regelmaat</span> en het <span id="startgetal">startgetal</span> snel herkennen. Zorg wel voor een zogenaamde 0<sup>e</sup> figuur!
	</p>
	<p>
		De tabel die bij de vorige opdracht hoort, is: 
	</p>
	<p>
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
		De <span id="hellingsgetal">regelmaat</span> is dat er steeds <span id="hellingsgetal">2</span> blokjes bij komen, zoals met pijlen is aangegeven.<br>
		Het <span id="startgetal">startgetal</span> is aantal blokjes van de <b>0<sup>e</sup> figuur</b>, in dit geval <span id="startgetal">1</span>.
	</p>
	<p>
		De regel is:<br>
		<code class="code"><em>Aantal blokjes is 2 keer het nummer van de figuur plus 1.</em></code>
	</p>
	<p>
		De woordformule die we hier bij kunnen maken is:<br>
		<code class="code"><em>aantal blokjes</em> = <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em> + <span id="startgetal">1</span></code>
	</p>
	<p>
		Als de toename regelmatig is, spreken we van een <b>lineair verband</b>. 	De woordformule van zo'n lineair verband maak je met de <span id="hellingsgetal">regelmaat</span> en het <span id="startgetal">startgetal</span>.
	</p>
</div>

<div class="tekstblok opdracht" id="11">
	<h3>Opdracht 11 Sterretjes</h3>
	<p>
		Bekijk de volgende rij met sterretjes:
		<br>
		<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/sterretjes.png" alt="sterretjes" width="" height="" />
		<br>
	</p>
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
		<p><br></p>
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
						<td><em>aantal sterren</em></td>
						<td colspan="2">...</td>
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
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br>...</th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
		</li>
		<li>
			Met hoeveel sterretjes begint de rij? Dus wat is het <span id="startgetal">startgetal</span>?
		</li>
		<li>
			Hoeveel sterren komen er elke keer bij? Geef dit bij de pijlen onder de tabel aan. Dus wat is de <span id="hellingsgetal">regelmaat</span>?
		</li>
		<li>
			Welke woordformule past bij deze rij?
			<ol id="numbers">
				<li><em>aantal sterretjes</em> = 3 &times; <em>nummer figuur</em></li>
				<li><em>aantal sterretjes</em> = 2 &times; <em>nummer figuur</em></li>
				<li><em>aantal sterretjes</em> = 3 &times; <em>nummer figuur</em> + 2</li>
				<li><em>aantal sterretjes</em> = 2 &times; <em>nummer figuur</em> + 3</li>
			</ol>
		</li>
		<li>
			Bereken met behulp van de woordformule het aantal sterretjes in de 13<sup>e</sup> figuur.
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
									<td><em>nummer figuur</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>	
								</tr>
								<tr>
									<td><em>aantal sterren</em></td>
									<td colspan="2"><span id="startgetal">3</span></td>
									<td colspan="2">5</td>
									<td colspan="2">7</td>
									<td colspan="2">9</td>
									<td colspan="2">11</td>
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
				</li>
				<li>
					De rij begint met <span id="startgetal">3</span> sterretjes. Dus het startgetal is 3.
				</li>
				<li>
					Steeds <span id="hellingsgetal">2</span> erbij. Dus de regelmaat is 2.
				</li>
				<li>
					<em>aantal stoelen</em> = <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em> + <span id="startgetal">3</span>
				</li>
				<li>
					13 invullen voor <em>nummer figuur</em> geeft:<br>
					<em>aantal sterretjes</em> = <span id="hellingsgetal">2</span> &times; <em>13</em> + <span id="startgetal">3</span> = 26 + 3 = 29<br>
					Figuur 13 heeft 29 sterretjes.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="12">
	<h3>Opdracht 12 Stapels blokken</h3>
	<p>
		Bekijk de afbeeldingen hieronder. Let op: je ziet figuur nummer 3, 4 en 5!
	
		<img class="img-medium" src="afbeeldingen/analyse_leerjaar_1/gestapelde blokken.png">
	</p>
	<ol>
		<li>
			Neem de tabel over en vul hem verder in.
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
						<td colspan="2">5</td>
						<td colspan="2">6</td>	
					</tr>
					<tr>
						<td><em>aantal blokken</em></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">11</td>
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
			Hoeveel komt er elke keer bij, geef dit met pijlen aan in de tabel.
		</li>
		<li>
			Uit hoeveel blokjes bestaat figuur 0?
		</li>
		<li>
			Wat is de regelmaat en wat is het startgetal?
		</li>
		<li>
			Maak de woordformule af:<br>
			<em>aantal blokken</em> = ... &times; <em>nummer figuur</em> + ...
		</li>
		<li>
			Bereken met behulp van de woordformule het aantal blokken van figuur 14.
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
									<td><em>nummer figuur</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>aantal blokken</em></td>
									<td colspan="2"><span id="startgetal">5</span></td>
									<td colspan="2">7</td>
									<td colspan="2">9</td>
									<td colspan="2">11</td>
									<td colspan="2">13</td>
									<td colspan="2">15</td>
									<td colspan="2">17</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
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
				</li>
				<li>Er komt steeds 2 bij.</li>
				<li>Figuur 0 bestaat uit 5 blokken</li>
				<li>
					<span id="hellingsgetal">regelmaat</span> = 2 en 	<span id="startgetal">startgetal</span> = 5
				</li>
				<li>
					<em>aantal blokken</em> = <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em> +  <span id="startgetal">5</span>
				</li>
				<li>
					14 invullen voor <em>nummer figuur</em> geeft:<br>
					<em>aantal blokken</em> = <span id="hellingsgetal">2</span> &times; <em>14</em> + <span id="startgetal">5</span> = 28 + 5 = 33<br>
					Figuur 14 bestaat uit 33 blokjes.
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieC">
	<h3>Theorie C Invoer en uitvoer</h3>
	<div class="row">
		<div class="col-xs-4">
			<p>
				Een formule kun je zien als een fabriek waar getallen worden ingevoerd.<br>
				Die getallen worden dan bewerkt en vervolgens weer uitgevoerd.
			</p>
		</div>
		<div class="col-xs-8">
			<img src="afbeeldingen/analyse_leerjaar_1/invoer-uitvoer.png" alt="invoer-uitvoer" />
		</div>
	</div>
	<div class="row">
		<div class="col-xs-4">
			<p>
				De algemene lineaire woordformule is dan:
			</p>
		</div>
		<div class="col-xs-8">
			<p class="geeltje" style="text-align: center;">
				<em>uitvoer</em> = <span id="hellingsgetal">regelmaat</span> &times; <em>invoer</em> + <span id="startgetal">startgetal</span>
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="13">
	<h3>Opdracht 13 Van tabel naar woordformule</h3>
	<p>
	 	Bij een situatie is een tabel gemaakt:
	</p>
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
						<td colspan="2"><span id="startgetal">40</span></td>
						<td colspan="2">43</td>
						<td colspan="2">46</td>
						<td colspan="2">49</td>
						<td colspan="2">52</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
	 <ol>
	 	<li>
	 		Bepaal de regelmaat en het startgetal.
	 	</li>
	 	<li>
	 		Neem over en vul in.<br>
	 		<em>uitvoer</em> = ... &times; <em>invoer</em> + ...
	 	</li>
	 </ol>
	 
	 <div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					In de tabel staat het <span id="startgetal">startgetal</span> onder <em>invoer</em> 0. Ook de <span id="hellingsgetal">regelmaat</span> is mooi af te lezen.:<br>
					<span id="startgetal">startgetal</span> = 40<br>
					<span id="hellingsgetal">regelmaat</span> = 3
				</li>
				<li>
					De woordformule die bij deze situatie hoort, wordt dan:<br>
					<em>uitvoer</em> = <span id="hellingsgetal">3</span> &times; <em>invoer</em> + <span id="startgetal">40</span>
				</li>
			</ol>			
		</div>
	</div>

</div>
			
<p class="geeltje">
	In een tabel staat de <b>invoer</b> in de <b>bovenste</b> en de <b>uitvoer</b> in de <b>onderste rij</b>.
</p>
			
<div class="tekstblok opdracht" id="14">
	<h3>Opdracht 14 Woordformule maken</h3>
	<p>
		Bij een verder onbekende situatie hoort de tabel hieronder. <br>
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
						<td colspan="2"><span id="startgetal">-12</span></td>
						<td colspan="2">...</td>
						<td colspan="2">-4</td>
						<td colspan="2">...</td>
						<td colspan="2">4</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
	</p>
	<ol>
		<li>
			Neem de tabel over en vul de ontbrekende waarden in de tabel in.
		</li>
		<li>
			Hoeveel neemt de uitvoer steeds toe?<br>
			Neem over en vul in: "regelmaat = ...".
		</li>
		<li>
			Wat is de uitvoer als de invoer 0 is? Dit is het begin van de formule.<br>
			Neem over en vul in: "startgetal = ...".
		</li>
		<li>
			Maak de woordformule bij deze situatie.<br>
			Neem over en vul in: <em>uitvoer</em> = … × <em>invoer</em> + ... .
		</li>
		<li>
			Controleer je formule: reken twee uitkomsten na met behulp van de formule.
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
									<td><em>invoer</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>	
								</tr>
								<tr>
									<td><em>uitvoer</em></td>
									<td colspan="2"><span id="startgetal">-12</span></td>
									<td colspan="2">-8</td>
									<td colspan="2">-4</td>
									<td colspan="2">0</td>
									<td colspan="2">4</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</li>
				<li>
					regelmaat = + 4
				</li>
				<li>
					startgetal = -12
				</li>
				<li>
					<em>uitvoer</em> = 4 × <em>invoer</em> - 12<br>
					Let op: `+ - 12 = -12`.
				</li>
				<li>
					zelf doen
				</li>			
			</ol>

		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieD">
	<h3>Theorie D Van tabel naar woordformule</h3>
	<p>
		Als het verband tussen invoer en uitvoer regelmatig is, dan noem je dit een <b>lineair verband</b>.	Is er in een tabel sprake van regelmatige toename of afname, dan hoort die tabel bij een lineair verband. 
	 </p>

	<p>
		De algemene formule van een lineair verband is: <br>
		<em>uitvoer</em> = <span id="hellingsgetal">regelmaat</span> &times; <em>invoer</em> + <span id="startgetal">startgetal</span>
	</p>				
	
	<p class="geeltje">
		Afspraak: de regelmaat is de toename per 1 in de bovenste rij van een tabel.
	</p>
	
	<p>
		Om een formule uit een tabel af te leiden:
		<ol class="numbers">
			<li>bepaal je de uitvoer;</li>
			<li>bepaal je de invoer;</li>
			<li>bepaal je de regelmaat;</li>
			<li>bepaal je het startgetal;</li>
			<li>vul je de gevonden getallen in in de algemene formule.</li> 
		</ol>
	</p>
		
	<p>
		Als voorbeeld bepalen we de formule bij de volgende tabel:
	</p>
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
						<td colspan="2"><span id="startgetal">10</span></td>
						<td colspan="2">13</td>
						<td colspan="2">16</td>
						<td colspan="2">19</td>
						<td colspan="2">22</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>
	



		<table class="table">
		<tbody>
			<tr>
				<td width="80">Stap 1</td>
				<td width="200">Bepaal uitvoer<br>Zie onderin tabel</td>
				<td width="300">uitvoer = <em>Bedrag in €</em></td>
			</tr>
			<tr>
				<td>Stap 2</td>
				<td>Bepaal invoer<br>Zie bovenin tabel</td>
				<td>invoer = <em>aantal weken</em></td>
			</tr>
			<tr>
				<td>Stap 3</td>
				<td>Bepaal regelmaat<br>Er komt steeds 3 bij</td>
				<td>regelmaat = 3</td>
			</tr>
			<tr>
				<td>Stap 4</td>
				<td>Bepaal startgetal.<br> Kijk onder invoer 0</td>
				<td>startgetal = 10</td>
			</tr>
			<tr>
				<td>Stap 5</td>
				<td>Vul de getallen in in <br>de standaard formule</td>
				<td><em>Bedrag in €</em> = 3 x <em>aantal weken</em> + 10</td>
			</tr>
		</tbody>
	</table>	
</div>

<div class="tekstblok opdracht" id="15">
	<h3>Opdracht 15 Woordformule maken</h3>
	<p>
		Coralie krijgt 80 euro op haar verjaardag. Ze neemt zich voor om te gaan sparen voor een nieuwe fiets. Elke week stopt ze al haar zakgeld in het fietspotje. Na één week heeft ze 90 euro, na twee weken 100 euro en na drie weken al 110 euro.
	</p>
	<ol>
		<li>
			Neem de tabel bij deze situatie over.<br>
			<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>aantal weken sparen</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">3</td>	
					</tr>
					<tr>
						<td><em>bedrag in fietspotje</em></td>
						<td colspan="2"><span id="startgetal">...</span></td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
					</tr>			
				</tbody>
				<tfoot>
					<tr>
						<th colspan="2"></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						<th></th>
					</tr>
				</tfoot>	
			</table>
		</div>	
		</li>
		<li>
			Vul de tabel verder in.
		</li>
		<li>
			Hoeveel euro zakgeld krijgt Coralie per week?
		</li>
		<li>
		 	En met welk bedrag start ze haar spaarproject?
		</li>
		</li>
		<li>
			Hoeveel geld zit er na vier weken in het fietspotje?
		</li>
		<li>
			Wat is de uitvoer en invoer in deze situatie?
		</li>
		<li>
			Wat is de regelmaat in deze situatie? Het wat het startgetal?
		</li>
		<li>
			Maak de woordformule bij deze situatie.
		</li>
		<li>
			Bereken met de woordformule het bedrag na 20 weken in het fietspotje.
		</li>
		<!--
		<li>
			Neem het assenstelsel over en maak de bijbehorende grafiek.
		</li>-->
	</ol>
	
	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Neem de tabel bij deze situatie over.<br>
					<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>aantal weken sparen</em></td>
								<td colspan="2">0</td>
								<td colspan="2">1</td>
								<td colspan="2">2</td>
								<td colspan="2">3</td>	
							</tr>
							<tr>
								<td><em>bedrag in fietspotje</em></td>
								<td colspan="2"><span id="startgetal">80</span></td>
								<td colspan="2">90</td>
								<td colspan="2">100</td>
								<td colspan="2">110</td>
							</tr>			
						</tbody>
						<tfoot>
							<tr>
								<th colspan="2"></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
								<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 10</span></th>
								<th></th>
							</tr>
						</tfoot>	
					</table>
				</div>	
				</li>
				<li>
					zie tabel
				</li>
				<li>
					10 euro
				</li>
				<li>
				 	80 euro
				</li>
				</li>
				<li>
					120 euro
				</li>
				<li>
					uitvoer = <em>bedrag in fietspotje</em><br>
					invoer = <em>aantal weken sparen</em>
				</li>
				<li>
					regelmaat = +10<br>
					startgetal = +80
				</li>
				<li>
					<em>uitvoer</em> = 10 &times; <em>invoer</em> + 80
				</li>
				<li>
					Vul 20 in voor <em>invoer</em>.<br>
					<em>uitvoer</em> = 10 &times; 20 + 80 = 200 + 80 = € 280,-<br>
					Na 20 weken heeft Coralie 280 euro in haar fietspotje.
				</li>
				<!--
				<li>
					Neem het assenstelsel over en maak de bijbehorende grafiek.
				</li>-->
			</ol>
		</div>
	</div>
	
	
</div>

<div class="tekstblok opdracht" id="16">
	<h3>Opdracht 16 Woordformule maken</h3>
	<p>
		Een taxichauffeur rekent €7,- voorrijkosten en kosten per kilometer. Een ritje van 3 kilometer kost inclusief voorrijkosten 13 euro. Een ritje van 5 kilometer kost 17 euro.
	</p>
	<ol>
		<li>
			Maak de tabel af bij deze situatie.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal kilometers</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>	
						</tr>
						<tr>
							<td><em>Ritprijs</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">13</td>
							<td colspan="2">...</td>
							<td colspan="2">17</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div> 
		</li>
		<li>
			Bepaal uitvoer, invoer, startgetal en regelmaat bij deze situatie en maak een woordformule waarmee je de ritprijs kunt berekenen als je het aantal gereden kilometers weet.
		</li> 
		<li>
			Bereken met de woordformule de kosten van een ritje van 50 kilometer.
		</li>
		<!--<li>
			Maak een assenstelsel met horizontaal van 0 tot 50 kilometer en teken de grafiek bij deze situatie in dat assenstelsel. Gebruik niet meer dan 10 vakjes horizontaal.
		</li>-->
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Maak de tabel af bij deze situatie.<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>aantal kilometers</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>	
								</tr>
								<tr>
									<td><em>Ritprijs</em></td>
									<td colspan="2"><span id="startgetal">7</span></td>
									<td colspan="2">9</td>
									<td colspan="2">11</td>
									<td colspan="2">13</td>
									<td colspan="2">15</td>
									<td colspan="2">17</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 2</span></th
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
					<em>Ritprijs</em> = 2 &times; <em>aantal kilometers</em> + 7
				</li> 
				<li>
					<em>Ritprijs</em> = 2 &times; <em>50</em> + 7 = 100 + 7 = 107<br>
					Een ritje van 50 kilometer kost € 107,-
				</li>
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht " id="17">
	<h3>Opdracht 17 Woordformules maken</h3>
	<ol>
		<li>
			Neem de tabellen over, vul de ontbrekende waarden in en maak daarna de bijbehorende woordformule.
			<ol>
	<li>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal rondjes</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">5</td>			
						</tr>
						<tr>
							<td><em>Sponser-bedrag in €</em></td>
							<td colspan="2">...</td>
							<td colspan="2">5</td>
							<td colspan="2">8</td>
							<td colspan="2">11</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
	</li>
	<li>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal uren</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">...</td>			
						</tr>
						<tr>
							<td><em>Verdiensten in €</em></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">10</td>
							<td colspan="2">15</td>
							<td colspan="2">20</td>
							<td colspan="2">...</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
						</tr>
					</tfoot>		
				</table>
			</div>
	</li>
	<li>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>tijd in minuten</em>	</td>
							<td colspan="2">...</td>
							<td colspan="2">1</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">4</td>
							<td colspan="2">...</td>				
						</tr>
						<tr>
							<td><em>Schapen over de dam</em></td>
							<td colspan="2">...</td>
							<td colspan="2">7</td>
							<td colspan="2">...</td>
							<td colspan="2">15</td>
							<td colspan="2">19</td>
							<td colspan="2">...</td>
						</tr>
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ ...</span></th>
							<th></th>
						</tr>
					</tfoot>	
				</table>
			</div>
	</li>	
</ol>
		</li>
	</ol>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<p>
					<em>Sponsor-bedrag in €</em> = 3 &times; <em>aantal rondjes</em> + 2
					<br>
					<div class="table">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>aantal rondjes</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>			
								</tr>
								<tr>
									<td><em>Sponser-bedrag in €</em></td>
									<td colspan="2">2</td>
									<td colspan="2">5</td>
									<td colspan="2">8</td>
									<td colspan="2">11</td>
									<td colspan="2">14</td>
									<td colspan="2">17</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>

				</p>
				</li>
			</ol>
			<ol start="2">
				<li>
				<p>
					<em>Verdiensten in €</em> = 5 &times; <em>aantal uren</em><br>
					Let op: als het startgetal gelijk is aan 0, zet je er dus niets bij.
					<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>aantal uren</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>			
								</tr>
								<tr>
									<td><em>Verdiensten in €</em></td>
									<td colspan="2">0</td>
									<td colspan="2">5</td>
									<td colspan="2">10</td>
									<td colspan="2">15</td>
									<td colspan="2">20</td>
									<td colspan="2">25</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 5</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 5</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 5</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 5</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 5</span></th>
								</tr>
							</tfoot>		
						</table>
					</div>
				</p>
				</li>
			</ol>
			<ol start="3">
				<li>
				<p>
					<em>Schapen over de dam</em> = 4 &times; <em>tijd in minuten</em> + 3
					<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>tijd in minuten</em>	</td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>				
								</tr>
								<tr>
									<td><em>Schapen over de dam</em></td>
									<td colspan="2">3</td>
									<td colspan="2">7</td>
									<td colspan="2">11</td>
									<td colspan="2">15</td>
									<td colspan="2">19</td>
									<td colspan="2">23</td>
								</tr>
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 4</span></th>
									<th></th>
								</tr>
							</tfoot>	
						</table>
					</div>
				</p>
				</li>	
			</ol>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="18">
	<h3>Opdracht 18 Driehoeken</h3>
	<p>Hieronder zie je steeds groter wordende driehoeken.</p>
	<img class="img-responsive"  src="afbeeldingen/analyse_leerjaar_1/driehoeken.png">
	<p>
		<ol>
			<li>Neem de tabel over en vul hem verder in.
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tr>
							<td>Nummer driehoek</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
						</tr>
						<tr>
							<td>Coördinaten hoogste punt</td>
							<td>(..., ...)</td>
							<td>(-1, 2)</td>
							<td>(..., ...)</td>
							<td>(..., ...)</td>
						</tr>
						<tr>
							<td><em>x</em>-coördinaat hoogste punt</td>
							<td>-3</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
						<tr>
							<td><em>y</em>-coördinaat hoogste punt</td>
							<td>1</td>
							<td>...</td>
							<td>...</td>
							<td>...</td>
						</tr>
					</table>
				</div>
			</li>
			<li>Schrijf de <em>x</em>-coördinaat op van de 7<sup>e</sup> driehoek, geef er uitleg bij.</li>
			<li>Schrijf de <em>y</em>-coördinaat op van de 10<sup>e</sup> driehoek, geef er uitleg bij.</li>
			<li>
				Schrijf een woordformule op waarmee je de <em>x</em>-coördinaat kunt berekenen als je het nummer van de figuur weet. <br>
				Tip: maak een 0<sup>e</sup> driehoek in je tabel.
			</li>
			<li>
				Schrijf ook een woordformule voor het berekenen van de <em>y</em>-coördinaat op.
			</li>
			<li>
				Bereken de coördinaten van het hoogste punt van de 63<sup>e</sup> figuur.
			</li>
		</ol>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<p>
					<ol>
						<li>
							<div class="table-responsive verhouding">
						<table class="verhouding" >
								<tr>
									<td>Nummer driehoek</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
								<tr>
									<td>Coördinaten hoogste punt</td><td>(-3, 1)</td><td>(-1, 2)</td><td>(1, 3)</td><td>(3, 4)</td></tr>
								<tr>
									<td><em>x</em>-coördinaat hoogste punt</td><td>-3</td><td>-1</td><td>1</td><td>3</td></tr>
								<tr>
									<td><em>y</em>-coördinaat hoogste punt</td><td>1</td><td>2</td><td>3</td><td>4</td></tr>
							</table>
					</div>
						</li>
						<li>Bij de <em>x</em>-coördinaten komt er bij elke driehoek steeds 2 bij. Dus 6 &times; 2 - 3 = 9.</li>
						<li>Bij de <em>y</em>-coördinaten komt er steeds 1 bij. Dus 9 &times; 1 + 1 = 10.</li>
						<li>
							<em>x</em>-coördinaat = <span id="hellingsgetal">2</span> &times; <em>nummer figuur</em> - <span id="startgetal">5</span>
						</li>
						<li>
							<em>y</em>-coördinaat = <em>nummer figuur</em><br>
							Je zou natuurlijk kunnen opschrijven dat:<br>
							<em>y</em>-coördinaat = <span id="hellingsgetal">1</span> &times; <em>nummer figuur</em> + <span id="startgetal">0</span>,<br>
							maar die 0 is overbodig en de 1 laten we weg in een vermenigvuldiging.
						</li>
						<li>
							<em>x</em>-coördinaat = -5 + 2 &times; 63 = 121<br>
							<em>y</em>-coördinaat: 63.<br>
							Dus het coördinatenpaar van het hoogst punt van figuur 63 is (121, 63).
						</li>
					</ol>
				</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok theorie analyse" id="theorieE">
	<h3>Theorie E Afname is negatieve toename</h3>
	<div class="row">
		<div class="col-xs-8">
			<p>
				De man in de afbeelding loopt achteruit. Wiskundigen zouden dit omschrijven als negatief vooruitlopen. Vergelijk dit met bijvoorbeeld een schuld, die kun je beschouwen als negatief bezit.
			</p>
			<p>
				Een afname van `2` schrijf je als een toename van `-2`.
			</p>
			<p>
				Met andere woorden: een <b>afname</b> is een <b>negatieve toename</b>. Een afname van 4 is een toename van -4.
			</p>
		</div>
		<div class="col-xs-4">
			<img src="afbeeldingen/analyse_leerjaar_1/achteruitlopen.JPG" alt="achteruitlopen" />
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="19">	
<h3>Opdracht 19 Cijferreeksen</h3>
<ol>
	<li>
		Neem de rijtjes over en voeg de volgende drie getallen toe.
		<p>A: 2, 5, 8, ... , ..., ...</p>
		<p>B: 12, 7, 2, ... , ..., ...</p>
		<p>C: 5, 9, 13, ... , ..., ...</p>
		<p>D: 22, 13, 4, ... , ..., ...</p>
	</li>  
	<li>
		Geef bij elk rijtje aan of er sprake is van positieve of negatieve toename.
	</li>
	<li>
		Geef bij elk rijtje de toename aan als positief of negatief getal.
	</li>
	 <li>
		Welke toename is gelijk aan een negatieve afname van 4? 
	</li>
</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<p>A, positieve toename, dus 3: 2, 5, 8, 11, 14, 17</p>
				<p>B, negatieve toename, dus -5: 12, 7, 2, -3, -8, -13</p>
				<p>C, positieve toename, dus 4: 5, 9, 13, 17, 21, 25</p>
				<p>D, negatieve toename, dus -9: 22, 13, 4, -5, -14, -23</p>
				<p>
					Een negatieve afname is gelijk aan een (positieve) toename.<br>
					Een afname van -4 is gelijk aan een toename van 4.
				</p>	
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="20">
	<h3>Opdracht 20 Woordformules maken</h3>
	<p>
		Neem de tabellen over, vul de ontbrekende waarden in en maak de bijbehorende woordformules.
	</p>
	<ol>
		<li>
			<table frame="void" rules="all"  width="500px" style="text-align: center">
				<tr>
					<td><em>invoer</em>	</td>
					<td>0</td>
					<td>...</td>
					<td>2</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>6</td>				
				</tr>
				<tr>
					<td><em>uitvoer</em></td>
					<td>8</td>
					<td>6</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>-4</td>
				</tr>
			</table>
		</li>
		<li>
			<table frame="void" rules="all"  width="500px" style="text-align: center">
				<tr>
					<td><em>invoer</em>	</td>
					<td>...</td>
					<td>1</td>
					<td>...</td>
					<td>3</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>				
				</tr>
				<tr>
					<td><em>uitvoer</em></td>
					<td>...</td>
					<td>-3</td>
					<td>-9</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>-33</td>
				</tr>
			</table>
		</li>
		<li>
			<table frame="void" rules="all"  width="500px" style="text-align: center">
				<tr>
					<td><em>invoer</em>	</td>
					<td>-6</td>
					<td>-5</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>				
				</tr>
				<tr>
					<td><em>uitvoer</em></td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>...</td>
					<td>-57</td>
					<td>...</td>
					<td>-81</td>
				</tr>
			</table>
		</li>	
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<table frame="void" rules="all"  width="500px" style="text-align: center">
						<tr>
							<td><em>invoer</em>	</td>
							<td>0</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>				
						</tr>
						<tr>
							<td><em>uitvoer</em></td>
							<td>8</td>
							<td>6</td>
							<td>4</td>
							<td>2</td>
							<td>0</td>
							<td>-2</td>
							<td>-4</td>
						</tr>
					</table>
					<br>
					<em>uitvoer</em> = -2 &times; <em>invoer</em> + 8
				</li>
				<li>
					<table frame="void" rules="all"  width="500px" style="text-align: center">
						<tr>
							<td><em>invoer</em>	</td>
							<td>0</td>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
							<td>5</td>
							<td>6</td>				
						</tr>
						<tr>
							<td><em>uitvoer</em></td>
							<td>3</td>
							<td>-3</td>
							<td>-9</td>
							<td>-15</td>
							<td>-21</td>
							<td>-27</td>
							<td>-33</td>
						</tr>
					</table>
					<br>
					<em>uitvoer</em> = -6 &times; <em>invoer</em> + 3
				</li>
				<li>
					<table frame="void" rules="all"  width="500px" style="text-align: center">
						<tr>
							<td><em>invoer</em>	</td>
							<td>-6</td>
							<td>-5</td>
							<td>-4</td>
							<td>-3</td>
							<td>-2</td>
							<td>-1</td>
							<td>0</td>				
						</tr>
						<tr>
							<td><em>uitvoer</em></td>
							<td>-9</td>
							<td>-21</td>
							<td>-33</td>
							<td>-45</td>
							<td>-57</td>
							<td>-69</td>
							<td>-81</td>
						</tr>
					</table>
					<br>
					<em>uitvoer</em> = -12 &times; <em>invoer</em> - 81
				</li>
			</ol>
		</div>
	</div>
		
</div>

<div class="tekstblok theorie analyse" id="theorieF">
	<h3>Theorie F Van woordformule naar grafiek</h3>
	<p>
		De grafiek bij een lineair verband is een rechte lijn. Om van een woordformule en grafiek te maken, volg je de volgende stappen:
	</p>
	<ol class="numbers">
		<li>maak een tabel bij de woordformule;</li>
		<li>bepaal de assen;</li>
		<li>zet punten en teken de grafiek.</li> 
	</ol>
	<p>
		Als voorbeeld tekenen we de grafiek bij de volgende woordformule: 
	</p>
	<p>
		<em>Bedrag in €</em> = 4 &times; <em>aantal uren</em> + 22
	</p>
	<br>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 1</p>
		</div>
		<div class="col-xs-10">
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>	
						</tr>
						<tr>
							<td><em>Bedrag in €</em></td>
							<td colspan="2"><span id="startgetal">22</span></td>
							<td colspan="2">26</td>
							<td colspan="2">30</td>
							<td colspan="2">34</td>
							<td colspan="2">38</td>
							<td colspan="2">42</td>
						</tr>			
					</tbody>
				</table>
			</div>
		
		</div>
	</div>	
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 2</p>
			<br>
			<p>Stap 3</p>
		</div>
		<div class="col-xs-5">
			<p>
				<b>horizontaal</b> de <em>tijd in uren</em>, <b>verticaal</b> het <em>bedrag in €</em>
			</p>
			<p>
				zet de punten in het assenstelsel en<br>
				trek een rechte lijn door de punten
			</p>
		</div>
		<div class="col-xs-5">
			<img class="img-medium" src="../afbeeldingen/analyse_leerjaar_1/grafiek_bij_woordformule.png" alt="grafiek_bij_woordformule" width="" height="" />
		</div>
	</div>			
	<p>
		Omdat de getallen in de onderste rij van 22 tot en met 42 gaan, is hier een <b>zaagtand</b> gebruikt en een <b>stapgrootte</b> van 2 langs de vertiale as.
	</p>
	<p class="geeltje">
		In een grafiek staat de <b>invoer</b> langs de <b>horizontale</b> en de <b>uitvoer</b> langs de <b>verticale as</b>.
	</p>
</div>

<div class="tekstblok opdracht" id="21">
	<h3>Opdracht 21 Grafiek tekenen</h3>
	<p>
		Renate laat haar foto's afdrukken bij "Fotomania".<br>
		Dat kost haar € 0,25 per foto én € 3,- bezorgkosten.
	</p>
	<ol>
		<li>
			Hoeveel kost het afdrukken én bezorgen van 10 foto's in totaal?
		</li>
		<li>
			Maak een woordformule waarmee je de totale kosten in euro's per bestelling kunt berekenen.
		</li>
		<li>
			Neem de tabel over en vul in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal foto's</em></td>
							<td colspan="2">0</td>
							<td colspan="2">20</td>
							<td colspan="2">40</td>
							<td colspan="2">60</td>
							<td colspan="2">80</td>
							<td colspan="2">100</td>	
						</tr>
						<tr>
							<td><em>Totale kosten in €</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>			 
		</li>
		<li>
			Maak een assenstelsel. Neem horizontaal stapgrootte 20 en verticaal stapgrootte 4. Zet grootheden en eenheden bij de assen.
		</li>
		<li>
			Zet de punten uit de tabel in het assenstelsel en teken de grafiek door een rechte lijn door die punten te trekken.
		</li>
	</ol>
	
	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
		<ol>
			<li>
				10 &times; 0,25 + 3 = 2,50 + 3 = 5,50<br>
				Het afdrukken en bezorgen van 10 foto's kost € 5,50.
			</li>
			<li>
				<em>Totale kosten in €</em> = 0,25 &times; <em>aantal foto's</em> + 3
			</li>
			<li>
				Neem de tabel over en vul in.<br>
				<div class="table-responsive verhouding">
					<table class="verhouding" >
						<tbody>
							<tr class="borderbottom">
								<td><em>aantal foto's</em></td>
								<td colspan="2">0</td>
								<td colspan="2">20</td>
								<td colspan="2">40</td>
								<td colspan="2">60</td>
								<td colspan="2">80</td>
								<td colspan="2">100</td>	
							</tr>
							<tr>
								<td><em>Totale kosten in €</em></td>
								<td colspan="2"><span id="startgetal">3</span></td>
								<td colspan="2">8</td>
								<td colspan="2">13</td>
								<td colspan="2">18</td>
								<td colspan="2">23</td>
								<td colspan="2">28</td>
							</tr>			
						</tbody>
					</table>
				</div>			 
			</li>
			<li>
				zie e.
			</li>
			<li>
				<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kosten_aantal_foto.png" alt="grafiek_kosten_aantal_foto" width="" height="" />
			</li>
		</ol>

		</div>
	</div>		
		
</div>

<div class="tekstblok opdracht" id="22">
	<h3>Opdracht 22 Huurprijs</h3>
	<p>
		Een verhuurbedrijf rekent de huurprijs aan klanten met behulp van de volgende formule.
	</p>
	<p>
		<em>Huurprijs in €</em> = 12 &times; aantal dagen + 50
	</p>
	<ol>
		<li>
			Neem de tabel over en vul in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>...</em></td>
							<td colspan="2">0</td>
							<td colspan="2">2</td>
							<td colspan="2">4</td>
							<td colspan="2">6</td>
							<td colspan="2">8</td>
							<td colspan="2">10</td>	
						</tr>
						<tr>
							<td><em>...</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
				</table>
			</div>
		</li>
		<li>
			Teken een geschikt assenstelsel en daarin de grafiek bij deze formule.
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
									<td><em>aantal dagen</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
									<td colspan="2">6</td>
									<td colspan="2">8</td>
									<td colspan="2">10</td>	
								</tr>
								<tr>
									<td><em>Huurprijs in €</em></td>
									<td colspan="2"><span id="startgetal">50</span></td>
									<td colspan="2">74</td>
									<td colspan="2">98</td>
									<td colspan="2">122</td>
									<td colspan="2">146</td>
									<td colspan="2">170</td>
								</tr>			
							</tbody>
						</table>
					</div>
				</li>
				<li>
					<img class="img-small" src="../afbeeldingen/analyse_leerjaar_1/grafiek_huurprijs_dagen.png" alt="grafiek_huurprijs_dagen" width="" height="" />
				</li>
			</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="23">
	<h3>Opdracht 23 Uitvoer en invoer</h3>
	<p>
		Bij een formule is een tabel gemaakt:
		<div class="table-responsive verhouding">
			<table class="verhouding" >
				<tbody>
					<tr class="borderbottom">
						<td><em>invoer</em></td>
						<td colspan="2">0</td>
						<td colspan="2">1</td>
						<td colspan="2">2</td>
						<td colspan="2">...</td>
						<td colspan="2">...</td>
						<td colspan="2">5</td>	
					</tr>
					<tr>
						<td><em>uitvoer</em></td>
						<td colspan="2"><span id="startgetal">...</span></td>
						<td colspan="2">22</td>
						<td colspan="2">...</td>
						<td colspan="2">14</td>
						<td colspan="2">10</td>
						<td colspan="2">6</td>
					</tr>			
				</tbody>
			</table>
		</div>
	</p>
	<ol>
		<li>
			De uitkomsten nemen af. De toename is dus een negatief getal. Wat is de toename?
		</li>
		<li>
			Wat is hier de regelmaat?
		</li>
		<li>
			Welke uitkomst hoort er bij 0?
		</li>
		<li>
			Wat is dus het startgetal?
		</li>
		<li>
			Maak de woordformule die hoort bij de tabel hierboven: <em>uitvoer</em> =.........
		</li>
		<li>
			Bereken met de woordformule de uitvoer als de invoer 1 is.<br>
			Bereken ook de uitvoer voor invoer = 5.
		</li>
		<li>
			Maak een passend assenstelsel en teken de grafiek bij deze tabel.
		</li>	
	</ol>

	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Je had de tabel kunnen afmaken om jezelf te helpen bij het beantwoorden van de vragen.
			</p>
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
						<td colspan="2">5</td>	
					</tr>
					<tr>
						<td><em>uitvoer</em></td>
						<td colspan="2"><span id="startgetal">26</span></td>
						<td colspan="2">22</td>
						<td colspan="2">18</td>
						<td colspan="2">14</td>
						<td colspan="2">10</td>
						<td colspan="2">6</td>
					</tr>			
				</tbody>
			</table>
		</div>
			<ol>
				<li>toename = -4</li>
				<li>regelmaat = -4</li>
				<li>26</li>
				<li>
					startgetal = 26<br>
					Mogelijke berekening: startgetal - 4 = 22, dus startgetal = 22 + 4 = 26<br>
				</li>
				<li><em>uitvoer</em> = -4 x <em>invoer</em> + 26</li>
				<li><em>uitvoer</em> = -4 x 1 + 26 = -4 + 26 = 22<br>
					Dus invoer 1 geeft met de formule uitvoer 22. Dit klopt als je in de tabel bij invoer 1 kijkt.<br>
					<br>
					<em>uitvoer</em> = -4 x 5 + 26 = -20 + 26 = 6<br>
					Dus invoer 5 geeft met de formule uitvoer 6. Dit klopt als je in de tabel bij invoer 5 kijkt.
					</li>
					<li>
						<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_uitvoer_invoer_start26.png" alt="grafiek_uitvoer_invoer_start26" width="" height="" />
					</li>
			</ol>
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="24">
	<h3>Opdracht 24 Kaars</h3>
	<p>
		Patije koopt een kaars van 20 centimeter. Thuis steekt hij de kaars aan. Ieder uur dat de kaars brandt, wordt de kaars twee centimeter korter.
	</p>
	<ol>
		<li>
		 	Neem de tabel over en vul hem in.<br>
		 	<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal branduren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>
							<td colspan="2">7</td>
							<td colspan="2">8</td>
							<td colspan="2">9</td>
							<td colspan="2">10</td>
						</tr>
						<tr>
							<td><em>lengte kaars in cm</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
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
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
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
			Wat is de toename (afname!) per uur?
		</li>
		<li>
			Maak de woordformule bij deze situatie. 
		</li>
		<li>
			Maak een assenstelsel met horizontaal de tijd van 0 tot 15 uur en verticaal de lengte van de kaars van 0 tot 20 centimeter.<br>
			Let op: houd deze maten aan!
		</li>
		<li>
			Teken de grafiek in dit assenstelsel.
		</li>
		<li>
			Na hoeveel uur is de kaars op?
		</li>
		<li>
			Hoe zie je dat in de grafiek terug?
		</li>
	</ol>
	
	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
		<li>
		 	Neem de tabel over en vul hem in.<br>
		 	<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal branduren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>
							<td colspan="2">7</td>
							<td colspan="2">8</td>
							<td colspan="2">9</td>
							<td colspan="2">10</td>
						</tr>
						<tr>
							<td><em>lengte kaars in cm</em></td>
							<td colspan="2"><span id="startgetal">20</span></td>
							<td colspan="2">18</td>
							<td colspan="2">16</td>
							<td colspan="2">14</td>
							<td colspan="2">12</td>
							<td colspan="2">10</td>
							<td colspan="2">8</td>
							<td colspan="2">6</td>
							<td colspan="2">4</td>
							<td colspan="2">2</td>
							<td colspan="2">0</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 2</span></th>
						<th></th>
						</tr>
					</tfoot>	
				</table>
			</div> 
		</li>
		<li>
			De toename is `-2` per uur.
		</li>
		<li>
			<em>lengte kaars in cm</em> = -2 &times; <em>aantal branduren</em> + 20 
		</li>
		<li>
			zie e.
		</li>
		<li>
			<img class="img-small" src="../afbeeldingen/analyse_leerjaar_1/grafiek_lengtekaars_branduren.png" alt="grafiek_lengtekaars_branduren" width="" height="" />
		</li>
		<li>
			Na 10 uur is de kaars opgebrand.
		</li>
		<li>
			Bij 10 uur raakt de grafiek de horizontale as.
		</li>
	</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="25">
	<h3>Opdracht 25 Andere kaars</h3>
	<p>
		Patije vond dat de kaars veel te snel op was en koopt een nieuwe kaars. De verkoper biedt hem een kaars van 15 centimeter aan die veel dikker is dan de vorige. Deze kaars brandt slechts 1 centimeter per uur.
	</p>
	<ol>
		<li>
			Maak een tabel bij deze situatie.
		</li>
		<li>
			Maak de bijbehorende woordformule.
		</li>
		<li>
			Na hoeveel uur is deze kaars op?
		</li>
		<li>
			Teken de grafiek bij deze formule in het assenstelsel van de vorige opdracht.
		</li>
		<li>
			Wanneer zijn ze even lang?
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
									<td><em>aantal branduren</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>
									<td colspan="2">7</td>
									<td colspan="2">8</td>
									<td colspan="2">9</td>
									<td colspan="2">10</td>
									<td colspan="2">11</td>
									<td colspan="2">12</td>
									<td colspan="2">13</td>
									<td colspan="2">14</td>
									<td colspan="2">15</td>
								</tr>
								<tr>
									<td><em>lengte kaars in cm</em></td>
									<td colspan="2"><span id="startgetal">15</span></td>
									<td colspan="2">14</td>
									<td colspan="2">13</td>
									<td colspan="2">12</td>
									<td colspan="2">11</td>
									<td colspan="2">10</td>
									<td colspan="2">9</td>
									<td colspan="2">8</td>
									<td colspan="2">7</td>
									<td colspan="2">6</td>
									<td colspan="2">5</td>
									<td colspan="2">4</td>
									<td colspan="2">3</td>
									<td colspan="2">2</td>
									<td colspan="2">1</td>
									<td colspan="2">0</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">- 1</span></th>
								<th></th>
								</tr>
							</tfoot>	
						</table>
					</div> 
				</li>
				<li>
					<em>lengte andere kaars in cm</em> `= -`<em>aantal branduren</em> + 15 	
					<p class="geeltje">
						Let op: -<em>aantal branduren</em> = `-1 &times;` <em>aantal branduren</em>
					</p>			
				</li>
				<li>
					Deze andere kaars is na 15 uur opgebrand.
				</li>
				<li>
					<img img class="img-small" src="../afbeeldingen/analyse_leerjaar_1/grafiek_lengteanderekaars_branduren.png" alt="grafiek_lengteanderekaars_branduren" width="" height="" />
				</li>
				<li>
					Na 5 uur zijn ze even lang.
				</li>
			</ol>
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="26">
	<h3>Opdracht 26 Brandsnelheid</h3>
	<p>
		Patije heeft inmiddels twee kaarsen gebrand. De kaarsen branden met verschillende snelheid op. Hoe zie je dat verschil in brandsnelheid terug in de grafieken die je hebt getekend?
	</p>
	
 	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Dat zie je aan de helling van de lijnen: hoe steiler, hoe sneller de kaars opbrandt.
			</p>
		</div>
	</div>	
</div>

<div class="tekstblok opdracht" id="27">
<!-- Uit moderne Wiskunde 1A VWO blz. 178 -->

	<div class="row">
		<div class="col-md-8">
			<h3>Opdracht 27 Watertonnen</h3>
			<p>
				Twee tonnen A en B worden gevuld met water.<br>
				In het assenstelsel is voor beide tonnen de veranderende waterhoogte getekend.
			</p>
			<p>
			 	De blauwe grafiek hoort bij ton A, de groene bij ton B.
			</p>
		</div>
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_waterhoogte_tijd.png" alt="grafiek_waterhoogte_tijd" width="" height="" />
		</div>
	</div>
	<ol>
		<li>
			Vul voor ton A de tabel hieronder verder in.
						<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>tijd in minuten</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
						</tr>
						<tr>
							<td><em>Waterhoogte in cm</em></td>
							<td colspan="2"><span id="startgetal">0</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
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
			
		</li>
		<li>
			Geef de woordformule waarmee je voor ton A de waterhoogte kunt berekenen als je de tijd in minuten invult.
		</li>
		<li>
			Kijk naar de grafiek van ton B.<br>
			Waaraan kun je zien dat ton B in het begin niet leeg was?
		</li>
		<li>
			Hoe hoog stond het water toen het vullen van de ton begon?
		</li>
		<li>
			Met hoeveel centimeter per minuut steeg het water in ton B?
		</li>
		<li>
			Maak ook voor ton B een woordformule waarmee je de waterhoogte kunt berekenen.
		</li>
		<li>
			Hoe hoog staat het water als beide tonnen even vol zijn?
		</li>
	</ol>
	
 	<div class="hider">
		<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Vul voor ton A de tabel hieronder verder in.
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>tijd in minuten</em></td>
										<td colspan="2">0</td>
										<td colspan="2">1</td>
										<td colspan="2">2</td>
										<td colspan="2">3</td>
										<td colspan="2">4</td>
									</tr>
									<tr>
										<td><em>Waterhoogte in cm</em></td>
										<td colspan="2"><span id="startgetal">0</span></td>
										<td colspan="2">20</td>
										<td colspan="2">40</td>
										<td colspan="2">60</td>
										<td colspan="2">80</td>
									</tr>			
								</tbody>
								<tfoot>
									<tr>
										<th colspan="2"></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>
										<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 20</span></th>	
									<th></th>
									</tr>
								</tfoot>	
			
							</table>
						</div>
					</li>
					<li>
						Ton A: <em>Waterhoogte in cm</em> = 20 &times; <em>tijd in minuten</em>
					</li>
					<li>
						De lijn begint niet in de Oorsprong.<br>
						De Oorsprong is punt (0, 0).
					</li>
					<li>
						De grafiek begint bij punt (0, 20), dus op tijdstip 0 is het water al 20 cm hoog.
					</li>
					<li>
						Het water stijgt daar met 10 cm per uur.
					</li>
					<li>
						Ton B: <em>Waterhoogte in cm</em> = 10 &times; <em>tijd in minuten</em> + 20
					</li>
					<li>
						Als beide tonnen even vol zijn, staat het water 40 cm hoog.
					</li>
				</ol>
		</div>
	</div>	
</div>

<div class="tekstblok theorie analyse" id="theorieG">
	<h3>Theorie G Van grafiek naar woordformule</h3>
	<p>
		De grafiek van een lineair verband is een rechte lijn. Door de punten van die lijn in een tabel te zetten, kun je de woordformule bij de grafiek vinden.
	</p>
	<div class="row">
		<div class="col-xs-7">

			<p>
				Om bij een grafiek de woordformule te maken, volg je de volgende stappen:
			</p>
			<ol>
				<li>
					maak een tabel bij de grafiek;
				</li>
				<li>
					bepaal startgetal en regelmaat;
				</li>
				<li>
					vul uitvoer, invoer, startgetal en regelmaat in in de standaard formule.
				</li>
			</ol>

			<p class="geeltje">
				In een grafiek staat de <b>invoer</b> langs de <b>horizontale</b> en de <b>uitvoer</b> langs de <b>verticale as</b>.
			</p>
		</div>
		<div class="col-xs-5">
			<img src="../afbeeldingen/analyse_leerjaar_1/van_grafiek_naar_woordformule.png" alt="van_grafiek_naar_woordformule" width="" height="" />
		</div>
	</div>	
	<p>Als voorbeeld maken we de woordformule bij de grafiek van het verband tussen <em>Bedrag in €</em> en <em>tijd in uren</em>.</p>
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 1</p>
		</div>
		<div class="col-xs-10">
			<p>
				Maak een tabel bij de grafiek:
			</p>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>aantal uren</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>	
						</tr>
						<tr>
							<td><em>Bedrag in €</em></td>
							<td colspan="2"><span id="startgetal">4</span></td>
							<td colspan="2">7</td>
							<td colspan="2">10</td>
							<td colspan="2">13</td>
							<td colspan="2">16</td>
							<td colspan="2">19</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 3</span></th>		
						<th></th>
						</tr>
					</tfoot>	

				</table>
			</div>
		</div>
	</div>	
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 2</p>
		</div>
		<div class="col-xs-10">
			<p>
				Bepaal regelmaat en startgetal:<br>
				Regelmaat = 3 en startgetal = 4
			</p>
		</div>
	</div>			
	<div class="row">
		<div class="col-xs-2">
			<p>Stap 3</p>
		</div>
		<div class="col-xs-10">
			<p>
				Vul in in de standaard formule:</br>
				<em>Bedrag in €</em> = 3 &times; <em>aantal uren</em> + 4
			</p>
		</div>
	</div>
	<p class="geeltje">
		Standaard formule: 	<em>uitvoer</em> = <span id="hellingsgetal">regelmaat</span> &times; <em>invoer</em> + <span id="startgetal">startgetal</span>
	</p>


</div>

<div class="tekstblok opdracht" id="28">
	<div class="row">
		<div class="col-md-6">
			<h3>Opdracht 28 Kleine Henk </h3>
			<p>
				Kleine Henk probeert wat bij te verdienen met kleine klusjes. Hij gebruikt de volgende grafiek bij het maken van offertes. In de grafiek staan de kosten en het aantal man-uren werk.
			</p>
		</div>
		<div class="col-md-6">
			<br>
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kosten_manurenwerk.png" alt="grafiek_kosten_manurenwerk" width="" height="" />
		</div>
	</div>
	<ol>
		<li>
			Neem de tabel over en vul in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>man-uren werk</em></td>
							<td colspan="2">0</td>
							<td colspan="2">1</td>
							<td colspan="2">2</td>
							<td colspan="2">3</td>
							<td colspan="2">4</td>
							<td colspan="2">5</td>
							<td colspan="2">6</td>	
						</tr>
						<tr>
							<td><em>Kosten in €</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
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
			Bepaal regelmaat en startgetal.
		</li>
		<li>
			Maak de woordformule bij deze grafiek.
		</li>
		<li>
			Bereken met de formule welke prijs Kleine Henk moet  rekenen voor een klus van 10 uur werk?
		</li>
	</ol>
	
	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Neem de tabel over en vul in.<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>man-uren werk</em></td>
									<td colspan="2">0</td>
									<td colspan="2">1</td>
									<td colspan="2">2</td>
									<td colspan="2">3</td>
									<td colspan="2">4</td>
									<td colspan="2">5</td>
									<td colspan="2">6</td>	
								</tr>
								<tr>
									<td><em>Kosten in €</em></td>
									<td colspan="2"><span id="startgetal">50</span></td>
									<td colspan="2">62,50</td>
									<td colspan="2">75,-</td>
									<td colspan="2">87,50</td>
									<td colspan="2">100,-</td>
									<td colspan="2">112,50</td>
									<td colspan="2">125,-</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>	
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">+ 12,50</span></th>	
								<th></th>
								</tr>
							</tfoot>	
		
						</table>
					</div>
				</li>
				<li>
					Regelmaat: + 12,50<br>
					Startgetal: + 50
				</li>
				<li>
					<em>Kosten in €</em> = 12,50 &times; <em>man-uren werk</em> + 50<br>
					<p class="geeltje">
						Omdat het over bedragen gaat, gebruiken we getallen op twee decimalen afgerond.
					</p>
				</li>
				<li>
					<em>Kosten in €</em> = 12,50 &times; 10 + 50 = € 175,-
				</li>
			</ol>		
		</div>
	</div>

</div>

<div class="tekstblok opdracht" id="29">
	<div class="row">
		<div class="col-md-6">
			<h3>Opdracht 29 Bad legen</h3>
			<p>
				Barbara laat haar bad leeglopen.
			</p>
			<ol>
				<li>
					Lees in de grafiek de waterhoogte af op het moment dat ze de stop uit het bad trekt.
				</li>
				<li>
					Lees uit de grafiek af hoeveel minuten het duurt voordat het bad leeg is.
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<br>
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_waterhoogte_tijd_dalend.png" alt="grafiek_kosten_manurenwerk" width="" height="" />
		</div>
	</div>
	<ol start="3">
		<li>
			Neem de tabel over en vul in.<br>
			<div class="table-responsive verhouding">
				<table class="verhouding" >
					<tbody>
						<tr class="borderbottom">
							<td><em>tijd in minuten</em></td>
							<td colspan="2">0</td>
							<td colspan="2">2</td>
							<td colspan="2">4</td>
							<td colspan="2">6</td>
							<td colspan="2">8</td>
							<td colspan="2">10</td>
							<td colspan="2">12</td>	
						</tr>
						<tr>
							<td><em>Waterhoogte in cm</em></td>
							<td colspan="2"><span id="startgetal">...</span></td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
							<td colspan="2">...</td>
						</tr>			
					</tbody>
					<tfoot>
						<tr>
							<th colspan="2"></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
							<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
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
			Met hoeveel cm per minuut loopt het bad leeg?
		</li>
		<li>
			Maak de woordformule bij deze grafiek waarmee je de waterhoogte berekent als je het aantal minuten weet.
		</li>
		<li>
			Controleer je formule door bij de tijd 8 minuten in te vullen en de bijbehorenden waterhoogte uit te rekenen.
		</li>
		<li>
			Waarom is de regelmaat in de formule anders dan die in de tabel?
		</li>
	</ol>
	
	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					60 cm hoog
				</li>
				<li>
					12 minuten
				</li>
				<li>
					Neem de tabel over en vul in.<br>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
							<tbody>
								<tr class="borderbottom">
									<td><em>tijd in minuten</em></td>
									<td colspan="2">0</td>
									<td colspan="2">2</td>
									<td colspan="2">4</td>
									<td colspan="2">6</td>
									<td colspan="2">8</td>
									<td colspan="2">10</td>
									<td colspan="2">12</td>	
								</tr>
								<tr>
									<td><em>Waterhoogte in cm</em></td>
									<td colspan="2"><span id="startgetal">60</span></td>
									<td colspan="2">50</td>
									<td colspan="2">40</td>
									<td colspan="2">30</td>
									<td colspan="2">20</td>
									<td colspan="2">10</td>
									<td colspan="2">0</td>
								</tr>			
							</tbody>
							<tfoot>
								<tr>
									<th colspan="2"></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
									<th colspan="2"><img src="afbeeldingen/algemeen/lrpijlonder.png" height="10px" class="centerfloat"><br><span id="hellingsgetal">...</span></th>
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
					60 cm in 12 minuten<br>
					`60/12 = 5`<br>
					Het water loopt met 5 cm per minuut weg.
				</li>
				<li>
					<em>Waterhoogte in cm</em> = -5 &times; <em>tijd in minuten</em> + 60
				</li>
				<li>
					<em>Waterhoogte in cm</em> = -5 &times; <em>8</em> + 60 = -40 + 60 = 20<br>
					Na 8 minuten zou het water 20 cm hoog moeten zijn. Dat klopt met de tabel en de grafiek.
				</li>
				<li>
					De regelmaat van een formule is altijd per 1. In de tabel is die in dit geval per 2.
				</li>
			</ol>		
		</div>
	</div>
	
</div>

<div class="tekstblok opdracht" id="30">
	<h3>Opdracht 30</h3>
	<div class="row">
		<div class="col-md-6">
		<p>
			Bepaal per auto de woordformule waarmee je kunt uitrekenen hoeveel kilometers ze kunnen rijden als je de hoeveelheid brandstof weet.
		</p>
		</div>
		<div class="col-md-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kilometers_benzine.png" alt="grafiek_kilometers_benzine" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Toyota previa:<br>
				<em>Aantal kilometers</em> = 9 &times; <em>liters benzine</em>
			<br>
				Audi a4<br>
				<em>Aantal kilometers</em> = 15 &times; <em>liters benzine</em>
			<br>
				VW Golf:<br>
				<em>Aantal kilometers</em> = 20 &times; <em>liters benzine</em>
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="31">
	<h3>Opdracht 31</h3>
	<div class="row">
		<div class="col-md-4">
			<p>
				Soumaia verkoopt kaarsen van verschillende lengte en dikte.<br>
				Bepaal met behulp van de grafieken hoelang elke kaars is en hoe snel ze branden.
			</p>
		</div>
		<div class="col-md-8">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_hoogte_tijd_drie_kaarsen.png" alt="grafiek_hoogte_tijd_drie_kaarsen" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Kaars I (blauw): <br>
					beginlengte 26 cm<br>
					brandsnelheid `26/13= 2` cm per uur
			</p>
			<p>
				Kaars II (groen): <br>
					beginlengte 35 cm<br>
					brandsnelheid `35/10 = 3 1/2` cm per uur
			</p>
			<p>
				Kaars III (geel): <br>
					beginlengte 18 cm<br>
					brandsnelheid `8/16 = 1/2` cm per uur
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="32">
	<h3>Opdracht 32</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Olga bezoekt in haar vakantie drie verschillende pretparken. In een assenstelsel heeft zij getekend hoeveel ze moest betalen naarmate ze meer attracties deed.
			</p>
			<ol>
				<li>
					Bij welk pretpark betaalde ze geen entreekosten? Hoe zie je dat aan de grafiek?
				</li>
				<li>
					Bij pretpark <em>Playfield</em> is de grafiek een horizontale rechte lijn.<br>
					Wat betekent dat?
				</li>
				<li>
					Bepaal per pretpark een woordformule waarmee je de totale kosten uitrekent als je het aantal attracties weet.
				</li>
			</ol>
				
		</div>
		<div class="col-md-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kosten_attracties.png" alt="grafiek_kosten_attracties" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					De grafiek van <em>Funtronic</em> start in de Oorspong. Dus bij <em>Funtronic</em> betaalt ze geen entreekosten.
				</li>
				<li>
					Bij <em>Playfield</em> betaal je alleen entreekosten, eenmaal binnen kun je overal in zonder bij te betalen.
				</li>
				<li>
					Kidsparc: <em>totale kosten in €</em> = 2,50 &times; <em>aantal attracties</em> + 12,50<br>
					Playfield: <em>totale kosten in €</em> = 28,00<br>
					Funtronic: <em>totale kosten in €</em> = 4,00 &times; <em>aantal attracties</em>
				</li>
			</ol>					
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="33">
	<h3>Opdracht 33</h3>
	<!-- variatie op opdracht 27 uit Moderne wiskunde 1A vwo leerjaar 1, blz. 179 -->
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					Het startpunt van grafiek A ligt op de verticale as.<br>
					Schrijf van dat punt de tweede of <em>y</em>-coördinaat op.
				</li>
				<li>
					Wat heeft deze coördinaat met het startgetal van de formule bij A te maken?
				</li>
				<li>
					Hoeveel verandert in grafiek A de hoogte in één uur?
				</li>
				<li>
					Grafiek B is een dalende grafiek. Hoeveel verandert deze grafiek per uur?
				</li>
				<li>
					Maak de woordformule bij beide grafieken.
				</li>
				<li>
					Uitdaging:<br>
					Na hoeveel uur snijden de grafieken elkaar?<br>
					Geef ook de coördinaten van dat snijpunt.
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_hoogte_tijd.png" alt="grafiek_hoogte_tijd" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Startpunt (0, 3)<br>
					<em>y</em>-coördinaat = 3
				</li>
				<li>
					De <em>y</em>-coördinaat van het snijpunt is het startgetal.
				</li>
				<li>
					Bij grafiek A wordt de hoogte 3 cm groter per uur.
				</li>
				<li>
					Bij grafiek B daalt de grafiek met 6 cm per uur.
				</li>
				<li>
					Grafiek A: <em>hoogte in cm</em> = 3 &times; <em>tijd in uren</em> + 3<br>
					Grafiek B: <em>hoogte in cm</em> = -6 &times; <em>tijd in uren</em> + 15
				</li>
				<li>
					Na 1 uur en 20 minuten.<br>
					De coördinaten zijn (`1 1/3`, `7`)<br>
					Let op: 20 minuten = `1/3` uur
				</li>
			</ol>		
		</div>
	</div>
</div>

<div class="tekstblok theorie analyse" id="theorieH">
	<h3>Theorie H Start- en hellingsgetal</h3>
	<p>
		Grafieken van lineaire formules zijn altijd rechte lijnen. Die lijnen hebben verschillende regelmaat en/of startgetal.
	</p>
	<div class="row">
		<div class="col-md-8">
			<p>
				Het <span id="startgetal">startgetal</span> van een grafiek is de <span id="startgetal"><em>y</em>-coördinaat</span> van het punt waar de lijn de verticale as snijdt.	
			</p>
			<p>
				Bij de rode grafiek is dat punt (0, 1), dus het startgetal is `1`. Bij de groene is dat punt (0; 1,5), dus het startgetal is `1,5`. Bij de blauwe is dat punt (0; 2,8), dus het startgetal is `2,8`.
			</p>
			<p>
				De woordformule bij de blauwe lijn is: <em>uitvoer</em> = 2,8<br>
				De <em>invoer</em> valt weg, immers 0 &times; <em>invoer</em> = 0.<br>
				Je kunt ook bedenken dat wat je ook invoert, de uitvoer constant is, namelijk 2,8.
			</p>
		</div>
		<div class="col-md-4">

			<br>
			<img src="../afbeeldingen/analyse_leerjaar_1/verschillend_startgetal.png" alt="verschillend_startgetal" width="" height="" />
		</div>
	</div>

	<div class="row">
		<div class="col-md-8">
			<p>
				De <span id="hellingsgetal">regelmaat</span> van een grafiek is de helling van de lijn. Een stijgende lijn heeft een positief helling, een dalende lijn een negatieve. We gebruiken voortaan het woord <span id="hellingsgetal">hellingsgetal</span> in plaats van regelmaat. 
			</p>
			<p>
				De rode grafiek heeft hellingsgetal `2`. De groene grafiek heeft hellingsgetal `1`. De blauwe grafiek heeft hellingsgetal -`1/2`.
			</p>
			<p>
				De formule bij de blauwe lijn is: <em>uitvoer</em> = -`1/2` &times; <em>invoer</em> + 1
			</p>
		</div>
		<div class="col-md-4">
			<br>
			<img src="../afbeeldingen/analyse_leerjaar_1/verschillend_hellingsgetal.png" alt="verschillend_hellingsgetal" width="" height="" />
		</div>
	</div>
	<p class="geeltje">
		Afspraak: het hellingsgetal is de stijging per één stap horizontaal!
	</p>
	<p>
		Hieronder staan drie grafieken. Elke grafiek heeft een andere helling. Het hellingsgetal kun je makkelijk aflezen als je een driehoekje maakt met horizontaal een stap van 1. Het hellingsgetal is dan het aantal stappen naar boven tot aan de grafiek.
	</p>
	<div class="row">
		<div class="col-xs-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/theorie_G_grafiek_A.png" alt="theorie_G_grafiek_A" width="" height="" />
		</div>
		<div class="col-xs-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/theorie_G_grafiek_B.png" alt="theorie_G_grafiek_B" width="" height="" />
		</div>
		<div class="col-xs-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/theorie_G_grafiek_C.png" alt="theorie_G_grafiek_C" width="" height="" />
		</div>	
	</div>

</div>

<!-- uitwerkingen bij gewerkt -->

<div class="tekstblok opdracht" id="34">
	<h3>Opdracht 34 Helling</h3>
	<div class="row">
		<div class="col-md-6">
			<ol>
				<li>
					Wat is de verticale toename per 1 horizontaal?
				</li>
				<li>
					Wat is het snijpunt met de verticale as?
				</li>
				<li>
					Neem over en vul in.<br>
					<em>uitvoer</em> = ... &times; <em>invoer</em> + ...
				</li>
			</ol>
		</div>
		<div class="col-md-6">
		<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_yisxplus1.png" alt="grafiek_yisxplus1" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					De verticale toename per 1 horizontaal = 1.
				</li>
				<li>
					Het snijpunt met de verticale as is (0, 1)
				</li>
				<li>
					<em>uitvoer</em> = 1 &times; <em>invoer</em> + 1<br>
					Maar die <em>1 &times;</em> schrijven we niet op, dus:<br>
					<em>uitvoer</em> = <em>invoer</em> + 1<br>
				</li>
			</ol>		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="35">
	<h3>Opdracht 35 Helling</h3>
	<ol>
		<li>
			Bepaal bij elke grafiek de verticale toename per 1 horizontaal.
		</li>
		<li>
			Bepaal bij elke grafiek het snijpunt met de verticale as.
		</li>
		<li>
			Geef bij elke grafiek de bijbehorende woordformule. Gebruik <em>invoer</em> en <em>uitvoer</em>.
		</li>
	</ol>
	<div class="row">
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_yis2xplus1.png" alt="grafiek_yis2xplus1" width="" height="" />			
		</div>
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_yis3xplus1.png" alt="grafiek_yis3xplus1" width="" height="" />
		</div>
		<div class="col-md-4">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_yis4xplus1.png" alt="grafiek_yis4xplus1" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Van links naar rechts:<br>
					helling = 2, helling = 3, helling = 4
				</li>
				<li>
					Bij alledrie: (0, 1)
				</li>
				<li>
					Van links naar rechts:<br>
					<em>uitvoer</em> = 2 &times; <em>invoer</em> + 1<br>
					<em>uitvoer</em> = 3 &times; <em>invoer</em> + 1<br>
					<em>uitvoer</em> = 4 &times; <em>invoer</em> + 1
				</li>
			</ol>		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="36">
	<h3>Opdracht 36 Formule</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Bepaal bij elke grafiek de woordformule.
			</p>
		</div>
		<div class="col-md-6">
		<img src="../afbeeldingen/analyse_leerjaar_1/assenstelsel_met_drie_grafieken.png" alt="assenstelsel_met_drie_grafieken" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<p>
				Rood: <em>hoogte in cm</em> = 2 &times; <em>tijd in uren</em> + 2<br>
				Blauw: <em>hoogte in cm</em> = - `1/2` &times; <em>tijd in uren</em> + 2<br>
				Groen: <em>hoogte in cm</em> = `1/4` &times; <em>tijd in uren</em> - 1
			</p>
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="37">
	<h3>Opdracht 37 Helling nul</h3>
	<div class="row">
		<div class="col-md-6">
			<p>
				Elke grafiek in het assenstelsel heeft een helling van 0.
			</p>
			<ol>
				<li>
					Bepaal de snijpunten met de verticale as.
				</li>
				<li>
					Geef bij elke grafiek de woordformule.
				</li>
			</ol>
		</div>
		<div class="col-md-6">
			<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_yisconstante.png" alt="grafiek_yisconstante" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					(0; 2,5), (0, 1), (0, 0) en (0, -1)
				</li>
				<li>
					<em>uitvoer</em> = 2,5<br>
					<em>uitvoer</em> = 1<br>
					<em>uitvoer</em> = 0<br>
					<em>uitvoer</em> = -1
				</li>
			</ol>		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="38">
	<h3>Opdracht 38 Kanovijver</h3>
	<div class="row">
		<div class="col-md-9">
			<p>
				Samira verhuurt kano's. <br>
				Ze berekent de kosten met de volgende formule:<br>
				<em>kosten in €</em> = 6 &times; <em>aantal uren</em> + 12.
			</p>
				<ol>
					<li>
						Neem over en vul in.<br>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>aantal uren</em></td>
										<td colspan="2">0</td>
										<td colspan="2">2</td>
										<td colspan="2">4</td>
										<td colspan="2">6</td>
										<td colspan="2">8</td>
									</tr>
									<tr>
										<td><em>Kosten in €</em></td>
										<td colspan="2"><span id="startgetal">...</span></td>
										<td colspan="2">...</td>
										<td colspan="2">...</td>
										<td colspan="2">...</td>
										<td colspan="2">...</td>
									</tr>			
								</tbody>
							</table>
						</div>
					</li>
					<li>
						Maak een passend assenstelsel en teken de grafiek bij deze tabel.
					</li>
					<li>
						Na hoeveel uur moet je meer dan 30 euro betalen?<br>
						Hoe zie je dat in de grafiek?
					</li>
				</ol> 
		</div>
		<div class="col-md-3">
		<img src="../afbeeldingen/analyse_leerjaar_1/Kvijver04.jpg" alt="Kvijver04" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
				<ol>
					<li>
						Neem over en vul in.<br>
						<div class="table-responsive verhouding">
							<table class="verhouding" >
								<tbody>
									<tr class="borderbottom">
										<td><em>aantal uren</em></td>
										<td colspan="2">0</td>
										<td colspan="2">2</td>
										<td colspan="2">4</td>
										<td colspan="2">6</td>
										<td colspan="2">8</td>
									</tr>
									<tr>
										<td><em>Kosten in €</em></td>
										<td colspan="2"><span id="startgetal">12</span></td>
										<td colspan="2">24</td>
										<td colspan="2">36</td>
										<td colspan="2">48</td>
										<td colspan="2">60</td>
									</tr>			
								</tbody>
							</table>
						</div>
					</li>
					<li>
						<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kanovijver.png" alt="grafiek_kanovijver" width="" height="" />
					</li>
					<li>
						Na 3 uur betaal je meer dan 30 euro. In de grafiek kun je dat zien door een horizontale lijn vanuit 30 op de kosten-as te trekken en dan te kijken bij welke tijd dat hoort door loodrecht omlaag te gaan, zie afbeelding:
						<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_kanovijver_30euro.png" alt="grafiek_kanovijver_30euro" width="" height="" />
					</li>
				</ol> 		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="39">
	<h3>Opdracht 39 Jasmijn</h3>
	<p>
		Jasmijn wil graag de school een grote schoonmaakbeurt geven. Ze vindt de volgende advertenties op internet.
	</p>
	<div class="row">
		<div class="col-xs-6">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/schoonmaak1.png"/>
		</div>
		<div class="col-xs-6">
			<img class="img-responsive" src="afbeeldingen/analyse_leerjaar_1/schoonmaak2.png"/>
		</div>
	</div>
		<ol>
			<li>
				Maak bij elk schoonmaakbedrijf een woordformule waarmee je de kosten kunt uitrekenen als je het aantal uren schoonmaken weet.
			</li>
			<li>
				Maak twee tabellen waarmee je de kosten voor het schoonmaken van 0 werkuren tot en met 4 werkuren.
			</li>
			<li>
				Maak een assenstelsel en teken daarin de grafieken.
			</li>
			<li>
				Jasmijn denkt 3 uur werk te hebben voor het bedrijf.<br>
				Welk bedrijf is het voordeligst?
			</li>
			<li>
				Uitdaging:<br>
				Het andere bedrijf past onmiddellijk de prijzen aan. <br>
				Hoeveel euro per uur moet het bedrijf minder rekenen om net zo voordeling te zijn?
			</li>
		</ol>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					Properen pluisje: <em>Totale kosten in €</em> = 37,50 &times; <em>aantal werkuren</em> + 25,00<br>
					Spons en Co: <em>Totale kosten in €</em> = 25,00 &times; <em>aantal werkuren</em> + 50,00				
				</li>
				<li>
					<p>Properen pluisje:</p>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
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
									<td><em>Kosten in €</em></td>
									<td colspan="2"><span id="startgetal">25</span></td>
									<td colspan="2">62,50</td>
									<td colspan="2">100</td>
									<td colspan="2">137,50</td>
									<td colspan="2">175,00</td>
								</tr>			
							</tbody>
						</table>
					</div>
					<p>Spons en Co.</p>
					<div class="table-responsive verhouding">
						<table class="verhouding" >
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
									<td><em>Kosten in €</em></td>
									<td colspan="2"><span id="startgetal">50</span></td>
									<td colspan="2">75</td>
									<td colspan="2">100</td>
									<td colspan="2">125</td>
									<td colspan="2">150</td>
								</tr>			
							</tbody>
						</table>
					</div>

				</li>
				<li>
					<img src="../afbeeldingen/analyse_leerjaar_1/grafiek_properenpluisje_en_sponsenco.png" alt="grafiek_properenpluisje_en_sponsenco" width="" height="" />
				</li>
				<li>
					Spons en Co. is voor 3 uur het voordeligst.
				</li>
				<li>
					Uitdaging:<br>
					<em>Spons en Co.</em> rekent voor 3 uur:
					<em>Totale kosten in €</em> = 25,00 &times; <em>3</em> + 50,00 = € 125,-<br>
					Dus <em>Properen pluisje</em> moet voor 3 uur ook € 125,- rekenen.<br>
					Het starttarief is 25 euro, dus voor 3 uur moeten ze 100 euro rekenen, dat is `100/3 = 33`,`33` euro per uur.<br>
					Dus per uur 37,50 - 33,33 = 4,17.<br>
					Dus <em>Properen pluisje</em> moet € 4,17 per uur minder rekenen.
				</li>
			</ol>		
		</div>
	</div>
</div>

<div class="tekstblok opdracht" id="40">
	<h3>Opdracht 40 Uitdaging</h3>
	<div class="row">
		<div class="col-md-8">
			<p>
				Een autoverhuurbedrijf rekent jou 380 euro voor het huren van een auto. Je hebt 100 kilometer gereden. Jouw moeder heeft bij hetzelfde bedrijf gehuurd. Zij kreeg een rekening van 120 euro voor 20 kilometer.
			</p>
			<ol>
				<li>
					Zoek uit met welke woordformule je de rekening kunt berekenen als je het aantal gereden kilometers weet.
				</li>
				<li>
					De volgende keer betaal je 224 euro.<br>
					Hoeveel kilometer heb je gereden?
				</li>
			</ol> 
		</div>
		<div class="col-md-4">
		<img src="../afbeeldingen/analyse_leerjaar_1/images-2.jpeg" alt="images-2" width="" height="" />
		</div>
	</div>

	<div class="hider">
	<div class="showhide">&rarr;</div>
		<div class="antwoord">
			<ol>
				<li>
					<p>
						Voor 80 kilometer meer, moet je 260 euro meer betalen.<br>
						Dat is `260/80 = 3`,`25` per kilometer.<br>
						Moeders heeft voor `20 &times; 3`,`25 = 65` euro aan kilometers gereden.<br>
						Ze betaalde in totaal 120 euro.<br>
						`120 - 65 = 55`<br>
						Ze heeft dus 65 voor de gereden kilometers betaald en 55 als vaste kosten, bijvoorbeeld administratiekosten en verzekering.<br>
						<em>Kosten in €</em> = 3,25 &times; <em>aantal kilometers</em> + 55
					</p>
				</li>
				<li>
					<p>
						De vaste kosten zijn € 55,- die betaal je sowieso.<br>
						Dat betekent dat je 224 - 55 = 169 euro betaalt voor de kilometers.<br>
						Per kilometer betaal je 3,25.<br>
						169 : 3,25 = 52 <br>
						Dus je hebt 52 kilometers gereden.
					</p>
				</li>
			</ol>
		</div>
	</div>
</div>

<!-- opdracht met geogedrb: verplaat grafiek met vaste helling zo dat die door punt ... gaat, het startgetal wordt. En vast startgetal, verander de helling zo dat die door punt .. gaat -->

<div class="tekstblok opdracht" id="proeftoets">
	<h3>Proeftoets</h3>
	<p>
		Ga naar de map <a href="https://drive.google.com/a/vathorstcollege.nl/folderview?id=0B-EzZiYS_HciOW5CTldLNFNUNXc&usp=sharing">Proeftoetsen leerjaar 1 Wiskunde123</a> en open daar de juiste proeftoets.
	</p>
</div>

<!--
<div class="tekstblok opdracht">
<p>maak een formule vanuit plaatje met tabel maken dan formule</p>
<p>verhaalt -> tabel -> formule</p>
<p>voor later in de taak, lijn</p>
<p>tabel wordt tabel met twee punten (tabel altij nog met begin waarde)</p>
<p>topniveau met (2, 5) en (17, -8) dus zonder (0, b)</p>

</div>



<div class="tekstblok theorie analyse">
<h3>Theorie F De letters `x` en `y`, `a` en `b`</h3>
 <p>
 	Wiskundigen vinden de woorden <em>invoer</em>, <em>uitvoer</em>, <em>hellingsgetal</em> en <em>startgetal</em> veel te lang. Waar mogelijk maken we gebruik van vaste letters.
 </p>
 <p>
 	We spreken af dat we gebruiken maken van de `x` voor invoer, de `y` voor uitvoer, de `a` voor hellingsgetal en de `b` voor startgetal.
 	<br>
 	`x` = <em>invoer</em><br>
 	`y` = <em>uitvoer</em> (spreek uit als "ei") <br>
 	`a` = <em>hellingsgetal</em><br>
 	`b` = <em>startgetal</em>
 </p>
<p>
	De standaard formule van een lineaire formule was:<br>
	<nobr><em>uitvoer</em> = <b>hellingsgetal</b> x <em>invoer</em> + <b>startgetal</b></nobr>.
</p> 
 <p>
  	Deze standaard formule kunnen we nu een stuk korter opschrijven:
  </p>  
  <p>
  	`y = ax  + b`
 </p>
 	
</div>
-->

</div>
