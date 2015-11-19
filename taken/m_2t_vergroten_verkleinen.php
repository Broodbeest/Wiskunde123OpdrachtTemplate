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


<title>Leerjaar 2 | Vergroten en verkleinen</title>

<div class="taakinhoud">

	<!-- inleiding -->
	<div class="tekstblok theorie meetkunde">
		<h3>Taak in wording</h3>
	</div>
	
	<!-- opdracht 37 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 37 Opstap oppervlakte</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hiernaast zie je een tekening op ruitjespapier.
					<ol>
						<li>
							Teken de figuur na, maar nu twee keer zo breed en twee keer zo lang.
						</li>
						<li>
							Elk hokje is 1 cm<sup>2</sup>. Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur hiernaast.
						</li>
						<li>
							Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur in jouw schrift.
						</li>
						<br>
						<li>
							Teken de afbeelding nog een keer, maar nu half zo groot. Tel weer hoeveel cm<sup>2</sup> de oppervlakte is.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/ruitjestekening_opdr.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/ruitjestekening_antw.png" width="300px" class="rightfloat"><br>
				<ol>
					<li>Zie het linker huisje hiernaast.</li>
					<li>Het origineel is 5 cm<sup>2</sup> groot</li>
					<li>Het huisje dat twee keer zo hoog en twee keer zo breed is, heeft een oppervlakte van 20 cm<sup>2</sup>.</li>
					<li>Het kleinste huisje is 1,25 cm<sup>2</sup> groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie I -->
	<div class="tekstblok theorie meetkunde" id="theorieI">
		<h3>Theorie I Twee dimensies</h3>
		<p>
			Oppervlakte is twee dimensionaal, dus als een figuur vergroot wordt met een groeifactor 3, betekent dat dat de lengte drie keer zo groot wordt en de breedte ook drie keer zo groot.
		</p>
		<p>
			De formule om oppervlakte te berekenen is `text{lengte}&sdot;text{breedte}`. Dus als de lengte 3 keer zo groot wordt en de breedte ook 3 keer zo groot, wordt de oppervlakte 3&sdot;3 = 9 keer zo groot.
		</p>
		<p>
			`text{Opp oud}&sdot;text{groeifactor}^2=text{Opp nieuw}`
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					<u>Voorbeeld</u>:<br>
					Krimpie Dinky is een plastic vel waarop je kunt tekenen. Daarna knip je de tekening uit en verwarm je het in de oven. Door de warmte krimpt het vel. Een lijn van 5,9 cm op het plastic vel wordt een lijntje van 2,3 cm.
					<ol type="a">
						<li>
							Bereken de groeifactor.
						</li>
						<br>
						Een heel vel Krimpie is 25 bij 20 cm groot, dus de oppervlakte is 500 cm<sup>2</sup>.
						<li>
							Bereken de oppervlakte van dit vel nadat het in de oven is gekrompen.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/krimpie_th.jpg">
			</div>
		</div>
		<p>
			<u>Stappenplan</u>:<br>
			<ol type="a">
				<li>
					Nieuw is de kleine, oud is het plastic vel. Dus `\text{nieuw}/\text{oud}=(2,3)/(5,9)&asymp;0,3898`.
				</li>
				<li>
					De oppervlakte wordt in de lengte én in de breedte 0,3898 keer zo groot.<br>
					`500&sdot;0,3898&sdot;0,3898 = 500&sdot;0,3898^2&asymp;75,97202`cm<sup>2</sup>.
				</li>
			</ol>
		</p>
	</div>

	<!-- opdracht 38 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 38</h3>
		<p>
			Bereken hoeveel keer groter de oppervlakte groter wordt met een factor...
			<ol>
				<li>3</li>
				<li>1,5</li>
				<li>0,75</li>
				<li>0,6</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>3<sup>2</sup> = 9 keer zo groot.</li>
					<li>1,5<sup>2</sup> = 2,25 keer zo groot.</li>
					<li>0,75<sup>2</sup> = 0,5625 keer zo groot.</li>
					<li>0,6<sup>2</sup> = 0,36 keer zo groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 39 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 39 Nijntje vergroten</h3>
		<p>
			Hiernaast zie je een afbeelding van Nijntje. Door de lengte en de breedte van deze afbeelding te veranderen, kun je de oppervlakte van het vierkant <em>ABCD</em> vergroten of verkleinen.<br>
			<iframe class="rightfloat" scrolling="no" src="https://tube.geogebra.org/material/iframe/id/1300633/width/461/height/549/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/auto" width="420px" height="500px" style="border:0px;"> </iframe>
			<ol>
				Halveer de oppervlakte door de alleen de lengte te veranderen.
				<li>
					Waarom is Nijntje nu niet meer gelijkvormig met eerst?
				</li>
				<br>
				Zet de lengte op 3 en de breedte ook. Dan is de oppervlakte 9.
				<li>
					Onderzoek wat de lengte en de breedte moeten worden om de oppervlakte een vierkant dat tien keer groter is te laten zijn.
				</li>
				<li>
					Bereken wat de groeifactor is.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>De oppervlakte was 36. De lengte moet 3 worden, want 3&sdot;6 = 18 en 18 is de helft van 36.<br>
						Nijntje is niet meer gelijkvormig met de Nijntje die 6 bij 6 groot was, omdat de lengte en breedt niet meer dezelfde verhouding hebben als eerst.</li>
					<li>De oppervlakte was 9 en moet dus 90 worden. Als lengte = breedte = 9,5 is de oppervlakte 90,25.</li>
					<li>Oude lengte was 3, nieuwe lengte is 9,5. Dus de groeifactor is `(9,5)/3&asymp;3,167`</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 40 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 40 A4</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Van een A4 zijn de afmetingen altijd 21,0 bij 29,7 cm.
					<ol>
						<li>
							Bereken de oppervlakte van het A4.
						</li>
						<br>
						Vouw het A4 eerst in de lengte in tweeën en daarna in de andere richting door de helft (zie de afbeelding hiernaast).
						<li>
							Wat zijn de afmetingen van het opgevouwen papier?
						</li>
						<li>
							Bereken de oppervlakte.
						</li>
						<li>
							Beredeneer waarom een A4 in vieren gevouwen gelijkvormig is met een A4.
						</li>
						<li>
							Hoeveel keer groter is de oppervlakte geworden?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/a4_th.png">
			</div>
		</div>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>
						21,0&sdot;29,7 = 623,7.
					</li>
					<li>
						De zijden zijn dan 21,0&sdot;0,5 = 10,5 cm en 29,7&sdot;0,5 = 14,85.
					</li>
					<li>
						De oppervlakte is dan 10,5&sdot;14,85 = 130,925<br>
						Of: 623,7&sdot;0,5 = 155,925 cm<sup>2</sup>.
					</li>
					<li>
						Alle zijden zijn gehalveerd en hebben daarom dezelfde verhouding met elkaar als bij het ongevouwen A4.
					<li>
						De oppervlakte is 0,5<sup>2</sup> = 0,25 keer zo groot.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 41 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 41 iPhony 6</h3>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Leslie heeft een iPhony 6 gekocht, maar is stiekem nog aan het twijfelen over de grotere iPhony 6 Plus.<br>
					De afmetingen van het scherm van de iPhony 6 zijn 4,09 bij 2,30 inch en het display heeft een diagonaal van 4,7 inch.<br>
					<ol>
						<li>
							Bereken de oppervlakte van de iPhony 6.
						</li>
						<br>
						Op een vergelijkingssite leest Leslie, dat het scherm van de iPhony 6 Plus een factor 1,17 groter is dan de iPhony 6.
						<li>
							Bereken de oppervlakte van de iPhony 6 Plus zoals in de theorie hierboven.
						</li>
						<li>
							Bereken hoeveel keer groter de oppervlakte van de iPhony 6 Plus is dan de iPhony 6 Plus.
						</li>
						<li>
							Bereken de de afmetingen van het scherm van de iPhony 6 Plus.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/iphony6_opdr.png">
			</div>
		</div>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>4,09&sdot;2,30 = 9,407 inch<sup>2</sup></li>
					<li></li>
				</ol>
			</div>
		</div -->
	</div>

	<!-- opdracht 42 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 42 Verhuiskaart</h3>
		<p>
			Michiel gaat verhuizen en heeft op een A4 een verhuiskaart getekend. De tekening heeft afmetingen van 18 bij 25 cm. 
			<ol>
				Hij wil de tekening verkleinen zodat de kaart de afmetingen heeft van 10,5 bij 14,85 cm en dus vier keer op een A4 afgedrukt kan worden.
				<li>
					Bereken de factor waarmee de kaart moet worden verkleind in vier decimalen nauwkeurig.
				</li>
				<br>
				Hij wil de kaart ook een keer vergroten om in zijn plakboek te plakken. Hij wil dat de oppervlakte twee keer zo groot wordt.
				<li>
					Hoeveel keer groter wordt de oppervlakte dan?
				</li>
				<li>
					Neem over en vul in:<br>
					<table style="background-color:#ccffe5">
						<tr>
							<td align="center">Opp tekening</td><td></td><td colspan="2" align="center">Opp vergroting</td>
						</tr>
						<tr>
							<td align="center"> ... </td><td align="center">&sdot;groeifactor<sup>2</sup> =</td><td align="center">... </td>
						</tr>
					</table>
				</li>
				<li>
					Bereken de groeifactor.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>18 cm hoort bij 10,5. Dus de groeifactor zou dan `text{nieuw}/text{oud}=(10,5)/18 =0,5833</li>
					<li>2</li>
					<li>
						<table style="background-color:#ccffe5">
							<tr>
								<td align="center">Opp tekening</td><td></td><td colspan="2" align="center">Opp vergroting</td>
							</tr>
							<tr>
								<td align="center"> 18&sdot;25 </td><td align="center">&sdot;groeifactor<sup>2</sup> =</td><td align="center"> 2&times; 18&sdot;25 </td>
							</tr>
						</table>
					</li>
					<li>
						450&sdot;groeifactor<sup>2</sup> = 900<br>
						groeifactor<sup>2</sup> = 2<br>
						groeifactor = `sqrt(2)` &asymp; 1,41
					</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 43 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 43 Uitdaging</h3>
		<p>
			Een oppervlakte wordt vergroot van 100 cm<sup>2</sup> naar 325 cm<sup>2</sup>. De formule die daar bij hoort is:<br>
			`100&times;text{groeifactor}^2=325`
			<ol>
				<li>
					Neem over en vul in:<br>
					<div class="row">
						<div class="col-xs-8">
							<img src="afbeeldingen/meetkunde_leerjaar_2/pijlenketting_opdr.png">
						</div>
					</div>
				</li>
				<li>
					Maak de omgekeerde pijlenketting.
				</li>
				<li>
					Schrijf de formule op waarmee de groeifactor berekend kan worden.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li><img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/pijlenketting_antw.png" height="45px"></li>
					<li><img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/omgekeerde_pijlenketting_antw.png" height="45px"></li>
					<li>`text{groeifactor}=sqrt{325/100}`</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie J -->
	<div class="tekstblok theorie meetkunde" id="theorieJ">
		<h3>Theorie J Groeifactor als oppervlakte bekend is</h3>
		<p>
			Om te berekenen wat de groeifactor is als de oppervlakte wordt vergroot, gebruiken we dezelfde formule als in theorie B, maar dan omgekeerd.
		</p>
		<p>
			`text{Opp oud}&sdot;text{groeifactor}^2=text{Opp nieuw}`<br>
			wordt dan<br>
			`text{groeifactor}=sqrt{text{Opp nieuw}/text{Opp oud}}`
		</p>
	</div>

	<!-- opdracht 44 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 44</h3>
		<p>
			Bereken de groeifactor (eventueel in 3 decimalen nauwkeurig) als de oppervlakte groter wordt met een factor...
			<ol>
				<li>9</li>
				<li>2</li>
				<li>0,5</li>
				<li>27</li>
				<li>0,343</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{2}{9}&asymp;3`.</li>
					<li>`root{2}{2}&asymp;1,414`.</li>
					<li>`root{2}{(0,5)}&asymp;0,707`.</li>
					<li>`root{2}{27}&asymp;5,196`.</li>
					<li>`root{2}{(0,343)}&asymp;0,586`.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 45 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 45 Stoeptegels</h3>
		<div class="row">
			<div class="col-xs-8">
				<p>
					Hayat laat haar achtertuin opnieuw betegelen, ze heeft gekozen voor het patroon dat je hiernaast kunt zien. Er passen 9 van de kleine tegels in één grote tegel.
					<ol>
						<li>
							Hoeveel keer groter is de oppervlakte van de grote tegel dan de kleine?
						</li>
						<br>
						De afmetingen van de grote tegel zijn 65 bij 65 cm, dus hebben een oppervlakte van 4225 cm<sup>2</sup>.
						<li>
							Wat is de oppervlakte van de kleine tegel?
						</li>
						<li>
							Wat zijn de afmetingen van de kleine tegel?
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-4">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/stoeptegels_opdr.png">
			</div>
		</div>
	</div>

	<!-- theorie K -->
	<div class="tekstblok theorie meetkunde" id="theorieK">
		<h3>Theorie K Drie dimensionaal (inhoud)</h3>
		<p>
			De inhoud van een kubus met zijden van 3 cm is 27 keer groter dan de inhoud van een kubus met zijden van 1 cm. Dat komt omdat de formule van de inhoud van een kubus `text{zijde}^3` is.
		</p>
		<div class="tekstballon_theorie">
			<p style="font-size: 12pt"><u>spreek je uit als...</u><br>
				`...^2` (... kwadraat /<br>
				... tot de macht twee)<br>
				`...^3` (... tot de macht drie)<br>
				`root{2}{...}` (tweedemachtswortel van ...)<br>
				`root{3}{...}` (derdemachtswortel van ...)<br>
			</p>
		</div>
		<p>
			Voor ruimtefiguren gelden daarom de formules:<br>
			`text{Inhoud oud}&sdot;text{groeifactor}^3=text{Inhoud nieuw}`<br>
			en omgekeerd:<br>
			`text{groeifactor}=root{3}{text{Inhoud nieuw}/text{Inhoud oud}}`
		</p>
		<p>
			Eigenlijk zou je `sqrt{...}` moeten schrijven als `root{2}{...}`.<br>
			De `root{2}{...}` is de tegenovergestelde bewerking van `...^2`.
			<br>
			Zo is de tegenovergestelde bewerking van `...^3` om `root{3}{...}` te berekenen.
		</p>
		<div class="row">
			<div class="col-xs-6">
				<p>
					Hoe je `root{3}{8}` met je rekenmachine uitrekent staat in het plaatje hiernaast.
				</p>
				<p>
					<u>Voorbeeld</u>:<br>
					Een balk heeft de afmetingen 30 bij 26 bij 6 cm. De inhoud is daarom 4680 cm<sup>3</sup>.
					<ol type="a">
						<li>
							Als de balk wordt vergroot/verkleind met groeifactor 0,5, wat is dan de inhoud?
						</li>
						<li>
							Met welke groeifactor moeten de zijden van de nieuwste balk vermenigvuldigt worden zodat de balk een inhoud heeft van 73,125 cm<sup>3</sup>.
						</li>
					</ol>
				</p>
				<p>
					<u>Uitwerking</u>:<br>
					<ol type="a">
						<li>
							4680&times;0,5<sup>3</sup> = 585 cm<sup>3</sup>.
						</li>
						<li>
							De inhoud wordt factor `(73,125)/585=0,125` groter. Dus de groeifactor is `root{3}{0,125}=0,5`.
						</li>
					</ol>
				</p>
			</div>
			<div class="col-xs-6">
				<img class="img-responsive" src="afbeeldingen/meetkunde_leerjaar_2/wortel_hogere_macht_texas_casio.png">
			</div>
		</div>
	</div>

	<!-- opdracht 46 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 46 Droog</h3>
		<p>
			Bereken de nieuwe inhoud als de oude inhoud...
			<ol>
				<li>3 mm<sup>3</sup> is en de vergrotingsfactor 1,2.</li>
				<li>5 cm<sup>3</sup> is en de vergrotingsfactor 0,75.</li>
				<li>de oude inhoud 100 cl was en de vergrotingsfactor 2.</li>
			</ol>
		</p>
		<p>
			Bereken de groeifactor als de oude inhoud...
			<ol start="4">
				<li>30 m<sup>3</sup> en de nieuwe inhoud 40 m<sup>3</sup> is.</li>
				<li>150 cm<sup>3</sup> en de nieuwe inhoud 50 cm<sup>3</sup> is.</li>
				<li>1 liter en de nieuwe inhoud 500 ml is.</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>3&sdot;1,2<sup>3</sup> = 5,184 mm<sup>3</sup>.</li>
					<li>5&sdot;0,75<sup>3</sup> = 2,109375 cm<sup>3</sup>.</li>
					<li>100&sdot;2<sup>3</sup> = 800 cl.</li>
					<li>`root{3}(40/30) &asymp; 1,1006`.</li>
					<li>`root{3}(50/150) &asymp; 0,6934`.</li>
					<li>`root{3}((0,5)/1) &asymp; 0,7937`.</li>
				</ol>
			</div>
		</div>
	</sup>

	<!-- opdracht 47 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 47</h3>
		<p>
			Bereken de groeifactor (eventueel in 3 decimalen nauwkeurig) als de inhoud groter wordt met een factor...
			<ol>
				<li>9</li>
				<li>2</li>
				<li>0,5</li>
				<li>27</li>
				<li>0,343</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{3}9&asymp;2,080`.</li>
					<li>`root{3}2&asymp;1,260`.</li>
					<li>`root{3}(0,5)&asymp;0,794`.</li>
					<li>`root{3}27=3`.</li>
					<li>`root{3}(0,343) =0,7`.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- opdracht 48 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 48 Melkpak</h3>
		<p>
			In de supermarkt kun je melk kopen in verpakkingen van 1 en 0,5 liter. De verpakkingen zijn een vergroting van elkaar.<br>
			De afmetingen van de liter-verpakking zijn 7 bij 7 bij 20 cm.
			<ol>
				<li>
					Bereken de groeifactor.
				</li>
				<li>
					Bereken de afmetingen van de halve-liter-verpakking.
				</li>
				<br>
				De oppervlakte van het karton waarvan 1 melkpak gemaakt wordt is <nobr>899 cm<sup>2</sup></nobr>.
				<li>
					Bereken de oppervlakte van het karton waarvan een halve liter pak gemaakt kan worden gevouwen.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<!-- opdracht 49 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 49 Frisdrank</h3>
		<p>
			Sommige frisdrankmerken verkopen ook de kleine pakjes met een rietje erop geplakt.<br>
			We vergelijken van een merk frisdrak een groot pak van 1,5 liter en een klein pakje van 200 ml. De verhoudingen van de pakken zijn gelijk.
			<ol>
				<li>
					Bereken de groeifactor.
				</li>
				<br>
				De afmetingen van een klein pakje zijn 4 bij 5,5 bij 9,5 cm.
				<li>
					Bereken de afmetingen van het anderhalve-liter-pak.
				</li>
				<br>
				<li>
					Doe een schatting van hoeveel vierkante centimeter karton er nodig is om één klein pakje van 200 ml van te vouwen.
				</li>
				<li>
					Gebruik de groeifactor om te berekenen hoeveel vierkante centimeter karton nodig zal zijn om een anderhalve-liter-pak van te vouwen.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<!-- opdracht 50 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 50 Trap van het metriek stelsel</h3>
		<p>
			Een kubus waarvan de inhoud 1 liter (= 1 dm<sup>3</sup>) is, heeft zijden van 1 dm.
			<ol>
				<li>
					Maak in je schrift een schets van een kubus.
				</li>
				<li>
					Schrijf bij de zijden hoe lang ze zijn met eenheid cm.
				</li>
				<li>
					Bereken de inhoud in cm<sup>3</sup>.
				</li>
				<br>
				De oppervlakte van de kubus is 6 &sdot; 1 dm&sdot;1 dm = 6 dm<sup>2</sup>.
				<li>
					Doe de berekening van hierboven na maar dan met de eenheid centimeter.
				</li>
			</ol>
		</p>
	</div>

	<!-- div class="tekstblok opdracht">
		<h3>Opdracht </h3>
		<p>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div>
	</div -->

	<!-- oefentoets -->
			<div class="tekstblok theorie meetkunde" id="proeftoets">
				<h3>Proeftoets</h3>
				<p>
				Voor een proeftoets inclusief uitwerkingen, klik op:	<a href="afbeeldingen/meetkunde_vergroten/1415_2HV_Thema 12_procenten_procentuele_groei_vergroten_en_verkleinen_oefentoets.pdf" alt="thema_12_toets_hv.pdf" target="_blank">Proeftoets</a>.
				<br>                                                                 
					De proeftoets is iets langer dan de echte toets. Maak de toets in 50 minuten met behulp van je eigen rekenmachine, pennen, potloden en geodriehoek.
				</p>
			</div>
		</div>
			
	</div><!-- /de taak zelf -->

	<div class="tekstblok theorie meetkunde">
		<h3>Theorie A Groeifactor bij gelijkvormigheid</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/gelijkvormig_opdr1.png" width="300px" class="rightfloat">
			Twee vlakke figuren heten <b>gelijkvormig</b> als ze dezelfde vorm hebben. Van figuren waarvan de vorm gelijk is, zijn de overeenkomstige hoeken even groot.<br>
			Als twee vlakke figuren gelijkvormig zijn, hebben alle lengtes die bij elkaar horen steeds dezelfde <a href="index2.php?p=vaar_verhoudingen" target="_blank">verhouding</a> tot elkaar.
		</p>
		<p>
			In de opdracht hiervoor zag je dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>PQR</em>. In een verhoudingstabel (maar dan op zijn zij) ziet dat er zo uit:<br>
			<table class="verhouding">
				<tr>
					<td rowspan="2">&times;2 <img src="afbeeldingen/bopijllinks.png" height="50px"></td>
					<td><b>&Delta;<em>ABC</em></b></td>
					<td><em>AB</em> = 2</td>
					<td><em>AC</em> = ...</td>
					<td><em>BC</em> = 3</td>
					<td rowspan="2"><img src="afbeeldingen/bopijlrechts.png" height="50px"> &times;2</td>
				</tr>
				<tr>
					<td><b>&Delta;<em>PQR</em></b></td>
					<td><em>PQ</em> = ...</td>
					<td><em>PR</em> = 7,21</td>
					<td><em>QR</em> = 6</td>
				</tr>
			</table>
		</p>
		<p>
			De factor &times;2 heet ook wel de <b>vergrotingsfactor</b> of <b>groeifactor</b>, en doet precies hetzelfde als de groeifactor in <a href="index2.php?p=vaar_procentuele_groei" target="_blank">procentuele groei</a>.
		</p>
		<p>
			<u>Voorbeeld</u>:<br>
			<img src="afbeeldingen/meet_vergroten_2thv/gelijkvormig_th.png" width="300px" class="rightfloat">
			Gegeven is dat de driehoeken <em>ABC</em> en <em>EFG</em> van hiernaast gelijkvormig zijn.
			<ol type="a">
				<li>
					Bepaal de groeifactor.
				</li>
				<li>
					Bereken de lengte van <em>DF</em>.
				</li>
				<li>
					Bereken de lengte van <em>BC</em>.
				</li>
			</ol>
		</p>
		<p>
			<u>Uitwerking</u>:<br>
			<div class="tekstballon_theorie" style="width: 250px !important">
				<p>
					`text{Groeifactor} = text{nieuw}/text{oud}`
				</p>
			</div>
			<ol type="a">
				<li>
					Zijde <em>AB</em> hoort bij zijde <em>DE</em> en zijn allebei bekend (<em>AB</em> = 4 en <em>DE</em> = 3), dus daarmee moet de groeifactor worden bepaald.<br>
					<em>AB</em> &times; <em>groeifactor</em> = <em>DE</em><br>
					`text{groeifactor}=text{DE}/text{AB}=3/4=0,75`
				</li>
				<li>
					De bijbehorende zijde van <em>DF</em> is <em>AC</em>.<br>
					<em>DF</em> = <em>AC</em> &times; 0,75<br>
					<em>DF</em> = 4,5&sdot;0,75 = 3,375<br>
				</li>
				<li>
					De bijbehorende zijde van <em>BC</em> is <em>EF</em>.<br>
					<em>BC</em> &times; 0,75 = <em>EF</em><br> 
					<em>BC</em> = `text{EF}/(0,75)` <br>
					<em>BC</em> = `(2,7)/(0,75)` = 3,6.
				</li>
			</ol>
		</p>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 4 Gelijkvormig</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/gelijkvormig_opdr2.png" class="rightfloat" width="250px">
			Gegeven is dat de driehoeken &Delta;<em>ABC</em> en &Delta;<em>DEF</em> van hiernaast gelijkvormig zijn.
			<ol>
				<li>
					Bereken hoe groot &ang;<em>A</em> in &Delta;<em>ABC</em> is.
				</li>
				<li>
					Hoe groot zal &ang;<em>E</em> in &Delta;<em>DEF</em> zijn?<br>En hoe groot is &ang;<em>F</em>?
				</li>
				<table class="verhouding">
					<tr>
						<td rowspan="2">
							&times;...<img src="afbeeldingen/obpijllinks.png" height="50px">
						</td>
						<td>
							<b>&Delta;<em>ABC</em></b>
						</td>
						<td>
							<em>AB</em> = ...
						</td>
						<td>
							<em>AC</em> = ...
						</td>
						<td>
							<em>BC</em> = ...
						</td>
						<td rowspan="2">
							<img src="afbeeldingen/obpijlrechts.png" height="50px">&times;...
						</td>
					</tr>
					<tr>
						<td>
							<b>&Delta;<em>DEF</em></b>
						</td>
						<td>
							<em>DE</em> = ...
						</td>
						<td>
							<em>EF</em> = ...
						</td>
						<td>
							<em>DF</em> = ...
						</td>
					</tr>
				</table>
				<li>
					Neem de tabel over en vul de lengtes in van de lijnstukken die je weet.
				</li>
				<li>
					Laat met een berekening zien dat een zijde uit &Delta;<em>DEF</em> met 1,5 moet worden vermenigvuldigt om de lengte van de bijbehorende zijde uit &Delta;<em>ABC</em> te krijgen.
				</li>
				<li>
					Bereken hoe groot <em>AC</em> en <em>AB</em> zijn.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>De hoekensom in een driehoek is altijd 180&deg;.<br>
						&ang;<em>A</em> + &ang;<em>B</em> + &ang;<em>C</em> = 180&deg;.<br>
						&ang;<em>A</em> + 37,7&deg; + 97,4&deg; = 180&deg;<br>
						&ang;<em>A</em> = 44,9&deg;</li>
					<li>De twee driehoeken zijn gelijkvormig, dus &ang;<em>DEF</em> heeft ook een hoek van 97,7, 44,9 en 37,7 graden.<br>
						&ang;<em>E</em> is stomp dus die zal 97,7&deg; zijn. Dan is &ang;<em>F</em> = 44,9&deg;</li>
					<li>
						<table class="verhouding">
							<tr>
								<td rowspan="2">
									&times;...<img src="afbeeldingen/obpijllinks.png" height="50px">
								</td>
								<td>
									<b>&Delta;<em>ABC</em></b>
								</td>
								<td>
									<em>AB</em> = ...
								</td>
								<td>
									<em>AC</em> = ...
								</td>
								<td>
									<em>BC</em> = 3
								</td>
								<td rowspan="2">
									<img src="afbeeldingen/obpijlrechts.png" height="50px">&times;...
								</td>
							</tr>
							<tr>
								<td>
									<b>&Delta;<em>DEF</em></b>
								</td>
								<td>
									<em>DF</em> = 2,71
								</td>
								<td>
									<em>EF</em> = `1 2/3`
								</td>
								<td>
									<em>DE</em> = 2
								</td>
							</tr>
						</table>
					</li>
					<li>
						<em>DE</em> = 2 en 2&sdot;1,5 = 3. Dus het klopt, want <em>BC</em> = 3.<br>
						Een andere manier is de volgende.
						<table class="verhouding">
							<thead>
								<th></th><th colspan="2">&divide;2<br><img src="afbeeldingen/lrpijlboven.png" width="50px"></th><th colspan="2">&times;3<br><img src="afbeeldingen/lrpijlboven.png" width="50px"></th>
							</thead>
							<tr>
								<td colspan="2"><em>DE</em> = 2</td><td colspan="2">1</td><td><em>BC</em> = 3</td>
							</tr>
						</table>
					</li>
					<li>
						<em>AC</em> = <em>DF</em>&sdot;1,5 = 4,065<br>
						<em>AB</em> = <em></em>&sdot;1,5 = 2,5.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 5 Snavelfiguur</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/snavelfiguur1_opdr.png" width="300px" class="rightfloat">
			De afmetingen van &Delta;<em>ABC</em> kun je gemakkelijk aflezen: <nobr><em>AB</em> = 5</nobr> en <nobr><em>BC</em> = 4</nobr>. De lengte van <nobr><em>DE</em> = 3</nobr>.
			<ol>
				<li>
					Toon aan dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>ADE</em>.
				</li>
				<li>
					Bereken de groeifactor als je &Delta;<em>ABC</em> als origineel beschouwd.
				</li>
				<li>
					Gebruik jouw groeifactor om de lengte van <em>AD</em> te berekenen.
				</li>
				<li>
					<em>AE</em> is ongeveer 4,8 lang. Hoe lang is <em>AC</em>?
				</li>
				<li>
					Bereken de lengte van <em>AC</em> door gebruik te maken van de stelling van Pythagoras.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>&ang;<em>A</em> in &Delta;<em>ABC</em> is even groot als &Delta;<em>ADE</em> (obviously!). &ang;<em>B</em> en &ang;<em>D</em> zijn ook even groot, want beiden recht. Vanwege de hoekensom zijn beide overgebleven hoeken ook even groot.</li>
					<li><em>DE</em> hoort bij <em>BC</em>. De groeifactor is daarom `3/4=0,75`</li>
					<li><em>AD</em> hoort bij <em>AB</em>. Dus `AD = 5 &sdot; 0,75 = 3,75`.</li>
					<li>`AC = (AE)/(0,75) = (4,8)/(0,75) = 6,4`</li>
					<li>Met Pythagoras wordt de lengte van <em>AC</em> `= sqrt(5^2+4^2) &asymp; 6`,`40`</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 6 Snavelfiguur?</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/snavelfiguur2_opdr.png" width="200px" class="rightfloat">
			De figuur uit de afbeelding hiernaast lijkt heel erg op die van de vorige opgave. <nobr><em>PQ</em> = 3</nobr> en <nobr><em>PR</em> = 4</nobr>.
			<ol>
				<li>
					Toon aan dat &Delta;<em>PQR</em> gelijkvormig is met &Delta;<em>PRS</em>.
				</li>
				<li>
					Bereken met de stelling van Pythagoras de lengte van <em>QR</em>.
				</li>
				<li>
					Beredeneer dat <em>QR</em> in &Delta;<em>PQR</em> hoort bij <em>PR</em> in &Delta;<em>PRS</em>.
				</li>
				<li>
					Bereken de groeifactor als &Delta;<em>PQR</em> het origineel is.
				</li>
				<li>
					Bereken de lengte van <em>PS</em> en <em>QS</em>.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>
						&ang;<em>P</em> = &ang; <em>S</em> (beide zijn recht)<br>
						&ang;<em>R</em> = &ang; <em>R</em> (zelfde hoek)<br>
						Van de twee driehoeken zijn twee hoeken evengroot, dus:<br>
						&Delta;<em>PQR</em> is gelijkvormig met &Delta;<em>SQR</em>.
					</li>
					<li>
						`QR^2 = PQ^2 + PR^2` <br>
						`QR=  sqrt(3^2+4^2) = 5`
					</li>
					<li>
						Beide driehoeken zijn rechthoekige driehoeken.<br>
						In &Delta;<em>PQR</em> is <em>QR</em> de zijde die tegenover de rechte hoek ligt.<br>
						In &Delta;<em>PRS</em> is juist <em>PR</em> de zijde die tegenover de rechte hoek ligt.
						
					</li>
					<li>
						De groeifactor = `(PR)/(PQ) = 4/5 = 0`,`8` 
					</li>
					<li>
						`PS = 0`,`8 * `<br>
						`QS = 0`,`8 * PQ`<br>
						Bereken de lengte van <em>PS</em> en <em>QS</em>.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 7 Gelijkvormig</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/gelijkvormig_opdr3.png" width="300px" class="rightfloat">
			<ol>
				<li>
					Bereken met de stelling van Pythagoras de lengte van <em>AC</em>.
				</li>
				<li>
					Toon aan dat &Delta;<em>ABC</em> gelijkvormig is met &Delta;<em>AED</em>.
				</li>
				<li>
					Bereken de groeifactor.
				</li>
				<li>
					Bereken de lengtes van <em>AD</em> en <em>AE</em>.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`AB^2+BC^2=AC^2`<br>
						`4^2+3^2=AC^2` dus<br>
						`AC=sqrt(16+9)=5`.
					</li>
					<li>Vanwege het klavertje in de hoeken <em>A</em> is zeker dat &ang;<em>A</em> in &Delta;<em>ABC</em> even groot is als &ang;<em>A</em> in &Delta;<em>AED</em>.<br>
						&ang;<em>B</em> = &ang;<em>E</em>, want beiden recht<br>
						Dus vanwege de hoekensom geldt dat &ang;<em>C</em> = &ang;<em>D</em>.<br>
						Dus ze zijn gelijkvormig
					</li>
					<li>In &Delta;<em>AED</em> is alleen bekend dat <em>DE</em> = 4,5, en <em>DE</em> hoort bij <em>BC</em>.<br>
						De groeifactor is `text(nieuw)/text(oud)=(4,5)/3=1,5`.
					</li>
					<li>
						`AD=AB&sdot;1,5`<br>
						`AD=4&sdot;1,5=6`<br>
						en<br>
						`AE=AC&sdot;1,5`<br>
						`AE=5&sdot;1,5=7,7`
					</li>
				</ol>
			</div>
		</div>
	</div>


	<div class="tekstblok opdracht">
		<h3>Opdracht 8 Vlaggenmast</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/vlaggenmast_opdr.png" width="250px" class="rightfloat">
			In de schets hiernaast zie je Anne die de lengte van de vlaggenmast gaat berekenen.
		</p>
		<p>
			Eerst laat ze haar eigen schaduw op hetzelfde punt te laten eindigen als de schaduw van de vlaggenmast.<br>
			Anne is zelf 1,67 meter en haar schaduw is 1,35 meter. De lengte van de schaduw van de vlaggenmast is 2,97 meter.
			<ol>
				<li>
					Anne maakt een rechte hoek met haar schaduw en de vlaggenmast ook. Schets de twee driehoeken bij deze situatie en schrijf zoveel mogelijk lengtes erbij.
				</li>
				<li>
					Bereken de groeifactor in 5 decimalen nauwkeurig als je Anne en haar schaduw beschouwt als origineel.
				</li>
				<li>
					Bereken de lengte van de vlaggenmast.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>-</li>
					<li>`text{nieuw}/text{oud}=(2,97)/(1,35)=2,2`</li>
					<li>Anne&sdot;groeifactor = vlaggenmast<br>
						1,67&sdot;2,2 = 3,674</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 9 Grens</h3>
		<p>
			Susanna wil graag met een bootje over de Frans-Zwitserse grens in het Meer van Geneve varen. Ze gebruikt onderstaande foto van Google-maps om uit te zoeken hoe lang die grens is.<br>
			<img src="afbeeldingen/meet_vergroten_2thv/kaartschaal_opdr.png" width="600px"><br>
			<ol>
				<li>
					Bepaal wat de groeifactor is. Gebruik daarvoor de schaal rechtsonderin het plaatje op het <a href="afbeeldingen/meet_vergroten_2thv/werkblad_vergroten.pdf" target="_blank">werkblad</a>.
				</li>
				<li>
					Meet hoe lang de grens is op het <a href="afbeeldingen/meet_vergroten_2thv/werkblad_vergroten.pdf" target="_blank">werkblad</a>.
				</li>
				<li>
					Bereken hoe lang de grens in het echt zal zijn.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 10 iPhony 5</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/iphony5_opdr.png" width="300px" class="rightfloat">
			Isar heeft een iPhony 5 gekocht, maar is stiekem nog aan het twijfelen over de grotere iPhony 6.<br>
				Van de iPhony 6 weet Isar dat de afmetingen van het scherm 4,1 bij 2,3 inch zijn. En het display een diagonaal heeft van 4,7 inch.
		</p>
		<p>
				Bereken de afmetingen van de iPhony5.
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">

			</div>
		</div-->
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 11 Opstap oppervlakte</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/ruitjestekening_opdr.png" width="200px" class="rightfloat">
			Hiernaast zie je een tekening op ruitjespapier.
			<ol>
				<li>
					Teken de figuur na, maar nu twee keer zo breed en twee keer zo lang.
				</li>
				<li>
					Elk hokje is 1 cm<sup>2</sup>. Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur hiernaast.
				</li>
				<li>
					Tel hoeveel cm<sup>2</sup> de oppervlakte is van de figuur in jouw schrift.
				</li>
				<br>
				<li>
					Teken de afbeelding nog een keer, maar nu half zo groot. Tel weer hoeveel cm<sup>2</sup> de oppervlakte is.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<img src="afbeeldingen/meet_vergroten_2thv/ruitjestekening_antw.png" width="300px" class="rightfloat"><br>
				<ol>
					<li>Zie het linker huisje hiernaast.</li>
					<li>Het origineel is 5 cm<sup>2</sup> groot</li>
					<li>Het huisje dat twee keer zo hoog en twee keer zo breed is, heeft een oppervlakte van 20 cm<sup>2</sup>.</li>
					<li>Het kleinste huisje is 1,25 cm<sup>2</sup> groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde">
		<h3>Theorie B Twee dimensies</h3>
		<p>
			Oppervlakte is twee dimensionaal, dus als een figuur vergroot wordt met een groeifactor 3, betekent dat dat de lengte drie keer zo groot wordt en de breedte ook drie keer zo groot.
		</p>
		<p>
			De formule om oppervlakte te berekenen is `text{lengte}&sdot;text{breedte}`. Dus als de lengte 3 keer zo groot wordt en de breedte ook 3 keer zo groot, wordt de oppervlakte 3&sdot;3 = 9 keer zo groot.
		</p>
		<p>
			`text{Opp oud}&sdot;text{groeifactor}^2=text{Opp nieuw}`
		</p>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/krimpie_th.jpg" class="rightfloat" width="250px">
			<u>Voorbeeld</u>:<br>
			Krimpie Dinky is een plastic vel waarop je kunt tekenen. Daarna knip je de tekening uit en verwarm je het in de oven. Door de warmte krimpt het vel. Een lijn van 5,9 cm op het plastic vel wordt een lijntje van 2,3 cm.
			<ol type="a">
				<li>
					Bereken de groeifactor.
				</li>
				<br>
				Een heel vel Krimpie is 25 bij 20 cm groot, dus de oppervlakte is 500 cm<sup>2</sup>.
				<li>
					Bereken de oppervlakte van dit vel nadat het in de oven is gekrompen.
				</li>
			</ol>
		</p>
		<p>
			<u>Stappenplan</u>:<br>
			<ol type="a">
				<li>
					Nieuw is de kleine, oud is het plastic vel. Dus `\text{nieuw}/\text{oud}=(2,3)/(5,9)&asymp;0,3898`.
				</li>
				<li>
					De oppervlakte wordt in de lengte én in de breedte 0,3898 keer zo groot.<br>
					`500&sdot;0,3898&sdot;0,3898 = 500&sdot;0,3898^2&asymp;75,97202`cm<sup>2</sup>.
				</li>
			</ol>
		</p>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 12</h3>
		<p>
			Bereken de nieuwe oppervlakte, als de oude oppervlakte
			<ol>
				<li>100 cm<sup>2</sup> was en de groeifactor 3.</li>
				<li>200 mm<sup>2</sup> was en de groeifactor 1,5.</li>
				<li>10 m<sup>2</sup> was en de groeifactor 0,75.</li>
				<li>100 cm<sup>2</sup> was en de groeifactor 0,6.</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>100&sdot;3<sup>2</sup> = 100&sdot;9 = 900 cm<sup>2</sup>.</li>
					<li>200&sdot;1,5<sup>2</sup> = 200&sdot;2,25 = 450 mm<sup>2</sup>.</li>
					<li>10&sdot;0,75<sup>2</sup> = 5,625 m<sup>2</sup></li>
					<li>100&sdot;0,6<sup>2</sup> = 36 cm<sup>2</sup>.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 13 (Uitdaging)</h3>
		<p>
			Bereken hoeveel keer groter de oppervlakte groter wordt met een factor...
			<ol>
				<li>3</li>
				<li>1,5</li>
				<li>0,75</li>
				<li>0,6</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>3<sup>2</sup> = 9 keer zo groot.</li>
					<li>1,5<sup>2</sup> = 2,25 keer zo groot.</li>
					<li>0,75<sup>2</sup> = 0,5625 keer zo groot.</li>
					<li>0,6<sup>2</sup> = 0,36 keer zo groot.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 13 Nijntje vergroten</h3>
		<p>
			Hiernaast zie je een afbeelding van Nijntje. Door de lengte en de breedte van deze afbeelding te veranderen, kun je de oppervlakte van het vierkant <em>ABCD</em> vergroten of verkleinen.<br>
			<iframe class="rightfloat" scrolling="no" src="https://tube.geogebra.org/material/iframe/id/1300633/width/461/height/549/border/888888/rc/false/ai/false/sdz/true/smb/false/stb/false/stbh/true/ld/false/sri/true/at/auto" width="420px" height="500px" style="border:0px;"> </iframe>
			<ol>
				Halveer de oppervlakte door de alleen de lengte te veranderen.
				<li>
					Waarom is Nijntje nu niet meer gelijkvormig met eerst?
				</li>
				<br>
				Zet de lengte op 3 en de breedte ook. Dan is de oppervlakte 9.
				<li>
					Onderzoek wat de lengte en de breedte moeten worden om de oppervlakte een vierkant dat tien keer groter is te laten zijn.
				</li>
				<li>
					Bereken wat de groeifactor is.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>De oppervlakte was 36. De lengte moet 3 worden, want 3&sdot;6 = 18 en 18 is de helft van 36.<br>
						Nijntje is niet meer gelijkvormig met de Nijntje die 6 bij 6 groot was, omdat de lengte en breedt niet meer dezelfde verhouding hebben als eerst.</li>
					<li>De oppervlakte was 9 en moet dus 90 worden. Als lengte = breedte = 9,5 is de oppervlakte 90,25.</li>
					<li>Oude lengte was 3, nieuwe lengte is 9,5. Dus de groeifactor is `(9,5)/3&asymp;3,167`</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 14 A4</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/a4_th.png" width="200px" class="rightfloat">
			Van een A4 zijn de afmetingen altijd 21,0 bij 29,7 cm.
			<ol>
				<li>
					Bereken de oppervlakte van het A4.
				</li>
				<br>
				Vouw het A4 eerst in de lengte in tweeën en daarna in de andere richting door de helft (zie de afbeelding hiernaast).
				<li>
					Wat zijn de afmetingen van het opgevouwen papier?
				</li>
				<li>
					Bereken de oppervlakte.
				</li>
				<li>
					Beredeneer waarom een A4 in vieren gevouwen gelijkvormig is met een A4.
				</li>
				<li>
					Hoeveel keer groter is de oppervlakte geworden?
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>
						21,0&sdot;29,7 = 623,7.
					</li>
					<li>
						De zijden zijn dan 21,0&sdot;0,5 = 10,5 cm en 29,7&sdot;0,5 = 14,85.
					</li>
					<li>
						De oppervlakte is dan 10,5&sdot;14,85 = 130,925<br>
						Of: 623,7&sdot;0,5 = 155,925 cm<sup>2</sup>.
					</li>
					<li>
						Alle zijden zijn gehalveerd en hebben daarom dezelfde verhouding met elkaar als bij het ongevouwen A4.
					<li>
						De oppervlakte is 0,5<sup>2</sup> = 0,25 keer zo groot.
					</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 15 iPhony 6</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/iphony6_opdr.png" width="300px" class="rightfloat">
			Leslie heeft een iPhony 6 gekocht, maar is stiekem nog aan het twijfelen over de grotere iPhony 6 Plus.<br>
			De afmetingen van het scherm van de iPhony 6 zijn 4,09 bij 2,30 inch en het display heeft een diagonaal van 4,7 inch.<br>
			<ol>
				<li>
					Bereken de oppervlakte van de iPhony 6.
				</li>
				<br>
				Op een vergelijkingssite leest Leslie, dat het scherm van de iPhony 6 Plus een factor 1,17 groter is dan de iPhony 6.
				<li>
					Bereken de oppervlakte van de iPhony 6 Plus zoals in de theorie hierboven.
				</li>
				<li>
					Bereken hoeveel keer groter de oppervlakte van de iPhony 6 Plus is dan de iPhony 6 Plus.
				</li>
				<li>
					Bereken de de afmetingen van het scherm van de iPhony 6 Plus.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>4,09&sdot;2,30 = 9,407 inch<sup>2</sup></li>
					<li></li>
				</ol>
			</div>
		</div -->
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 16 Verhuiskaart</h3>
		<p>
			Michiel gaat verhuizen en heeft op een A4 een verhuiskaart getekend. De tekening heeft afmetingen van 18 bij 25 cm. 
			<ol>
				Hij wil de tekening verkleinen zodat de kaart de afmetingen heeft van 10,5 bij 14,85 cm en dus vier keer op een A4 afgedrukt kan worden.
				<li>
					Bereken de factor waarmee de kaart moet worden verkleind in vier decimalen nauwkeurig.
				</li>
				<br>
				Hij wil de kaart ook een keer vergroten om in zijn plakboek te plakken. Hij wil dat de oppervlakte twee keer zo groot wordt.
				<li>
					Hoeveel keer groter wordt de oppervlakte dan?
				</li>
				<li>
					Neem over en vul in:<br>
					<table style="background-color:#ccffe5">
						<tr>
							<td align="center">Opp tekening</td><td></td><td colspan="2" align="center">Opp vergroting</td>
						</tr>
						<tr>
							<td align="center"> ... </td><td align="center">&sdot;groeifactor<sup>2</sup> =</td><td align="center">... </td>
						</tr>
					</table>
				</li>
				<li>
					Bereken de groeifactor.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>18 cm hoort bij 10,5. Dus de groeifactor zou dan `text{nieuw}/text{oud}=(10,5)/18 =0,5833</li>
					<li>2</li>
					<li>
						<table style="background-color:#ccffe5">
							<tr>
								<td align="center">Opp tekening</td><td></td><td colspan="2" align="center">Opp vergroting</td>
							</tr>
							<tr>
								<td align="center"> 18&sdot;25 </td><td align="center">&sdot;groeifactor<sup>2</sup> =</td><td align="center"> 2&times; 18&sdot;25 </td>
							</tr>
						</table>
					</li>
					<li>
						450&sdot;groeifactor<sup>2</sup> = 900<br>
						groeifactor<sup>2</sup> = 2<br>
						groeifactor = `sqrt(2)` &asymp; 1,41
					</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 17 Uitdaging</h3>
		<p>
			Een oppervlakte wordt vergroot van 100 cm<sup>2</sup> naar 325 cm<sup>2</sup>. De formule die daar bij hoort is:<br>
			`100&times;text{groeifactor}^2=325`
			<ol>
				<li>
					Neem over en vul in:<br>
					<img src="afbeeldingen/meet_vergroten_2thv/pijlenketting_opdr.png" height="45px">
				</li>
				<li>
					Maak de omgekeerde pijlenketting.
				</li>
				<li>
					Schrijf de formule op waarmee de groeifactor berekend kan worden.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li><img src="afbeeldingen/meet_vergroten_2thv/pijlenketting_antw.png" height="45px"></li>
					<li><img src="afbeeldingen/meet_vergroten_2thv/omgekeerde_pijlenketting_antw.png" height="45px"></li>
					<li>`text{groeifactor}=sqrt{325/100}`</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok theorie meetkunde">
		<h3>Theorie C Groeifactor als oppervlakte bekend is</h3>
		<p>
			Om te berekenen wat de groeifactor is als de oppervlakte wordt vergroot, gebruiken we dezelfde formule als in theorie B, maar dan omgekeerd.
		</p>
		<p>
			`text{Opp oud}&sdot;text{groeifactor}^2=text{Opp nieuw}`<br>
			wordt dan<br>
			`text{groeifactor}=sqrt{text{Opp nieuw}/text{Opp oud}}`
		</p>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 18 Vmbo-t</h3>
		<p>
			Bereken de groeifactor in de volgende situaties.
			<ol>
				<li>
					Als de oppervlakte eerst 10 cm<sup>2</sup> was en de nieuwe oppervlakte 90 cm<sup>2</sup>.
				</li>
				<li>
					Als de oppervlakte eerst 5 m<sup>2</sup> was en de nieuwe oppervlakte 1,25 m<sup>2</sup>.
				</li>
				<li>
					Als de oppervlakte eerst 50 m<sup>2</sup> was en de nieuwe oppervlakte 12,5 m<sup>2</sup>.
				</li>
				<li>
					Als de oppervlakte eerst 10 m<sup>2</sup> was en de nieuwe oppervlakte 5 m<sup>2</sup>.<br>
					Rond af op 3 decimalen.
				</li>
				<li>
					Als de oppervlakte eerst 1 <u>cm<sup>2</sup></u> was en de nieuwe oppervlakte 25 <u>dm<sup>2</sup></u>.<br>
					Rond af op 3 decimalen.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`90/10=9` en `root{2}{9}=3`.</li>
					<li>`1,25/5=0,25` en `root{2}{(0,25)}=0,5`.</li>
					<li>`(12,5)/50=0,25` en `root{2}{(0,25)}=0,5`.</li>
					<li>`5/10=0,5` en `root{2}{(0,5)}&asymp;0,707`.</li>
					<li>`50/(0,001)=50000` en `root{2}{50000}&asymp;223,607`.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 18 Havo/Vwo</h3>
		<p>
			Bereken de groeifactor (eventueel in 3 decimalen nauwkeurig) als de oppervlakte groter wordt met een factor...
			<ol>
				<li>9</li>
				<li>2</li>
				<li>0,5</li>
				<li>27</li>
				<li>0,343</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{2}{9}&asymp;3`.</li>
					<li>`root{2}{2}&asymp;1,414`.</li>
					<li>`root{2}{(0,5)}&asymp;0,707`.</li>
					<li>`root{2}{27}&asymp;5,196`.</li>
					<li>`root{2}{(0,343)}&asymp;0,586`.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 19 Stoeptegels</h3>
		<p>
			<img src="afbeeldingen/meet_vergroten_2thv/stoeptegels_opdr.png" width="250px" class="rightfloat">
			Hayat laat haar achtertuin opnieuw betegelen, ze heeft gekozen voor het patroon dat je hiernaast kunt zien. Er passen 9 van de kleine tegels in één grote tegel.
			<ol>
				<li>
					Hoeveel keer groter is de oppervlakte van de grote tegel dan de kleine?
				</li>
				<br>
				De afmetingen van de grote tegel zijn 65 bij 65 cm, dus hebben een oppervlakte van 4225 cm<sup>2</sup>.
				<li>
					Wat is de oppervlakte van de kleine tegel?
				</li>
				<li>
					Wat zijn de afmetingen van de kleine tegel?
				</li>
			</ol>
		</p>
	</div>

	<div class="tekstblok theorie meetkunde">
		<h3>Theorie D Drie dimensionaal (inhoud)</h3>
		<p>
			De inhoud van een kubus met zijden van 3 cm is 27 keer groter dan de inhoud van een kubus met zijden van 1 cm. Dat komt omdat de formule van de inhoud van een kubus `text{zijde}^3` is.
		</p>
		<div class="tekstballon_theorie">
			<p style="font-size: 12pt"><u>spreek je uit als...</u><br>
				`...^2` (... kwadraat /<br>
				... tot de macht twee)<br>
				`...^3` (... tot de macht drie)<br>
				`root{2}{...}` (tweedemachtswortel van ...)<br>
				`root{3}{...}` (derdemachtswortel van ...)<br>
			</p>
		</div>
		<p>
			Voor ruimtefiguren gelden daarom de formules:<br>
			`text{Inhoud oud}&sdot;text{groeifactor}^3=text{Inhoud nieuw}`<br>
			en omgekeerd:<br>
			`text{groeifactor}=root{3}{text{Inhoud nieuw}/text{Inhoud oud}}`
		</p>
		<p>
			Eigenlijk zou je `sqrt{...}` moeten schrijven als `root{2}{...}`.<br>
			De `root{2}{...}` is de tegenovergestelde bewerking van `...^2`.
			<br>
			Zo is de tegenovergestelde bewerking van `...^3` om `root{3}{...}` te berekenen.
		</p>
		<p>
			Hoe je `root{3}{8}` met je rekenmachine uitrekent staat in het plaatje hiernaast.
			<img src="afbeeldingen/meet_vergroten_2thv/wortel_hogere_macht_texas_casio.png" width="300px" class="rightfloat">
		</p>
		<p>
			<u>Voorbeeld</u>:<br>
			Een balk heeft de afmetingen 30 bij 26 bij 6 cm. De inhoud is daarom 4680 cm<sup>3</sup>.
			<ol type="a">
				<li>
					Als de balk wordt vergroot/verkleind met groeifactor 0,5, wat is dan de inhoud?
				</li>
				<li>
					Met welke groeifactor moeten de zijden van de nieuwste balk vermenigvuldigt worden zodat de balk een inhoud heeft van 73,125 cm<sup>3</sup>.
				</li>
			</ol>
		</p>
		<p>
			<u>Uitwerking</u>:<br>
			<ol type="a">
				<li>
					4680&times;0,5<sup>3</sup> = 585 cm<sup>3</sup>.
				</li>
				<li>
					De inhoud wordt factor `(73,125)/585=0,125` groter. Dus de groeifactor is `root{3}{0,125}=0,5`.
				</li>
			</ol>
		</p>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 20 Droog</h3>
		<p>
			Bereken de nieuwe inhoud als de oude inhoud...
			<ol>
				<li>3 mm<sup>3</sup> is en de vergrotingsfactor 1,2.</li>
				<li>5 cm<sup>3</sup> is en de vergrotingsfactor 0,75.</li>
				<li>de oude inhoud 100 cl was en de vergrotingsfactor 2.</li>
			</ol>
		</p>
		<p>
			Bereken de groeifactor als de oude inhoud...
			<ol start="4">
				<li>30 m<sup>3</sup> en de nieuwe inhoud 40 m<sup>3</sup> is.</li>
				<li>150 cm<sup>3</sup> en de nieuwe inhoud 50 cm<sup>3</sup> is.</li>
				<li>1 liter en de nieuwe inhoud 500 ml is.</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>3&sdot;1,2<sup>3</sup> = 5,184 mm<sup>3</sup>.</li>
					<li>5&sdot;0,75<sup>3</sup> = 2,109375 cm<sup>3</sup>.</li>
					<li>100&sdot;2<sup>3</sup> = 800 cl.</li>
					<li>`root{3}(40/30) &asymp; 1,1006`.</li>
					<li>`root{3}(50/150) &asymp; 0,6934`.</li>
					<li>`root{3}((0,5)/1) &asymp; 0,7937`.</li>
				</ol>
			</div>
		</div>
	</sup>

	<div class="tekstblok opdracht">
		<h3>Opdracht 21 Droog</h3>
		<p>
			Bereken de groeifactor in de volgende situaties.
			<ol>
				<li>
					Als de inhoud eerst 10 cm<sup>3</sup> was en de nieuwe inhoud 270 cm<sup>3</sup>.
				</li>
				<li>
					Als de inhoud eerst 10 m<sup>3</sup> was en de nieuwe inhoud 1,25 m<sup>3</sup>.
				</li>
				<li>
					Als de inhoud eerst 100 m<sup>3</sup> was en de nieuwe inhoud 12,5 m<sup>3</sup>.
				</li>
				<li>
					Als de inhoud eerst 10 m<sup>3</sup> was en de nieuwe inhoud 5 m<sup>3</sup>.<br>
					Rond af op 3 decimalen.
				</li>
				<li>
					Als de inhoud eerst 1 <u>cm<sup>3</sup></u> was en de nieuwe inhoud 50 <u>dm<sup>3</sup></u>.<br>
					Rond af op 3 decimalen.
				</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`270/10=27` en `root{3}27 = 3`.</li>
					<li>`1,25/10=0,125` en `root{3}(0,125) = 0,5`.</li>
					<li>`(12,5)/100=0,125` en `root{3}(0,125) = 0,5`.</li>
					<li>`5/10=0,5` en `root{3}(0,5) &asymp; 0,794`.</li>
					<li>`50/(0,001)=50000` en `root{3}50000 &asymp; 36,840`.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 22 Droog (Uitdaging)</h3>
		<p>
			Bereken de groeifactor (eventueel in 3 decimalen nauwkeurig) als de inhoud groter wordt met een factor...
			<ol>
				<li>9</li>
				<li>2</li>
				<li>0,5</li>
				<li>27</li>
				<li>0,343</li>
			</ol>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{3}9&asymp;2,080`.</li>
					<li>`root{3}2&asymp;1,260`.</li>
					<li>`root{3}(0,5)&asymp;0,794`.</li>
					<li>`root{3}27=3`.</li>
					<li>`root{3}(0,343) =0,7`.</li>
				</ol>
			</div>
		</div>
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 22 Melkpak</h3>
		<p>
			In de supermarkt kun je melk kopen in verpakkingen van 1 en 0,5 liter. De verpakkingen zijn een vergroting van elkaar.<br>
			De afmetingen van de liter-verpakking zijn 7 bij 7 bij 20 cm.
			<ol>
				<li>
					Bereken de groeifactor.
				</li>
				<li>
					Bereken de afmetingen van de halve-liter-verpakking.
				</li>
				<br>
				De oppervlakte van het karton waarvan 1 melkpak gemaakt wordt is <nobr>899 cm<sup>2</sup></nobr>.
				<li>
					Bereken de oppervlakte van het karton waarvan een halve liter pak gemaakt kan worden gevouwen.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 23 Frisdrank</h3>
		<p>
			Sommige frisdrankmerken verkopen ook de kleine pakjes met een rietje erop geplakt.<br>
			We vergelijken van een merk frisdrak een groot pak van 1,5 liter en een klein pakje van 200 ml. De verhoudingen van de pakken zijn gelijk.
			<ol>
				<li>
					Bereken de groeifactor.
				</li>
				<br>
				De afmetingen van een klein pakje zijn 4 bij 5,5 bij 9,5 cm.
				<li>
					Bereken de afmetingen van het anderhalve-liter-pak.
				</li>
				<br>
				<li>
					Doe een schatting van hoeveel vierkante centimeter karton er nodig is om één klein pakje van 200 ml van te vouwen.
				</li>
				<li>
					Gebruik de groeifactor om te berekenen hoeveel vierkante centimeter karton nodig zal zijn om een anderhalve-liter-pak van te vouwen.
				</li>
			</ol>
		</p>
		<!-- div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div -->
	</div>

	<div class="tekstblok opdracht">
		<h3>Opdracht 23 Trap van het metriek stelsel</h3>
		<p>
			Een kubus waarvan de inhoud 1 liter (= 1 dm<sup>3</sup>) is, heeft zijden van 1 dm.
			<ol>
				<li>
					Maak in je schrift een schets van een kubus.
				</li>
				<li>
					Schrijf bij de zijden hoe lang ze zijn met eenheid cm.
				</li>
				<li>
					Bereken de inhoud in cm<sup>3</sup>.
				</li>
				<br>
				De oppervlakte van de kubus is 6 &sdot; 1 dm&sdot;1 dm = 6 dm<sup>2</sup>.
				<li>
					Doe de berekening van hierboven na maar dan met de eenheid centimeter.
				</li>
			</ol>
		</p>
	</div>

	<!-- div class="tekstblok opdracht">
		<h3>Opdracht </h3>
		<p>
		</p>
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
			</div>
		</div>
	</div -->

</div>