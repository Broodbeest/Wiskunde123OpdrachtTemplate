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

<h3>Taak in wording</h3>

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

	<!-- theorie K -->
	<div class="tekstblok theorie meetkunde" id="theorieK">
		<h3>Theorie K Groeifactor als oppervlakte bekend is</h3>
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
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`9` x</li>
					<li>`4225/9=469,44444444` cm<sup>2</sup></li>
					<li>`root{2}{(469,44444444)}&asymp;21,667` cm.</li>
				</ol>
			</div>
		</div>
	</div>

	<!-- theorie L -->
	<div class="tekstblok theorie meetkunde" id="theorieL">
		<h3>Theorie L Drie dimensionaal (inhoud)</h3>
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
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{3}(1/0.5) &asymp; 1,26`.</li>
					<li>`7/(1,26)  &asymp; 5,56`<br>`20/(1,26) &asymp; 15,87`<br>De afmetingen zijn dus 5,56 bij 5,56 bij 15,87 cm.</li>
					<li>`899/(1,26)<sup>2</sup> &asymp; (566,26)`<br> Dus ongeveer 566 cm<sup>2</sup> </li>
				</ol>
			</div>
		</div>
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
		<div class="hider">
			<div class="showhide"></div>
			<div class="antwoord">
				<ol>
					<li>`root{3}((1,5)/(0,2) &asymp; 1,96`.</li>
					<li>`4/(1,96)=(2,04)`<br>`20/(1,26) &asymp; (15,87)`<br>De afmetingen zijn dus 5,56 bij 5,56 bij 15,87 cm.</li>
					<li>`899/(1,26)<sup>2</sup> &asymp; (566,26)`<br> Dus ongeveer 566 cm<sup>2</sup> </li>
				</ol>
			</div>
		</div>
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




</div>