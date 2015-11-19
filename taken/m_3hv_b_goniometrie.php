<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Sinus, Cosinus en Tangens',
      '#theorieB' => 'Rekenmachine',
      '#theorieC' => 'SosCasToa',
      '#theorieD' => '',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar 3 | Goniometrie - SosCasToa</title>

<div class="taakinhoud"><!-- de taak zelf -->
	<div class="tekstblok theorie meetkunde"  id="inleiding">
		<h3>Inleiding Goniometrie</h3>
		<p>
			De tak Goniometrie van de wiskunde is belangrijk in heel veel natuurwetenschappelijke toepassingen.<br>
			De voorkennis die je daarbij nodig hebt is met name jouw kennis van rechthoekige driehoeken, dus ook de stelling van Pythagoras. In deze taak is het nodig dat je vaardig bent met je passer en geodriehoek.
		</p>
		<p>
		</p>
	</div>

	<!-- opdracht 1-->
	<div class="tekstblok opdracht">
		<h3>Opdracht 1 Rechthoekige driehoeken</h3>
		<p>
			Herhaling + introductie aanliggende en overstaande zijde.
		</p>
		<!-- uitwerkingen -->
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">				   	
			</div>
		</div>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 2 Pythagoras</h3>
		<p>
			Toepassen op en aantonen van rechthoekige driehoek.
		</p>
		<!-- uitwerkingen -->
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">				   	
			</div>
		</div>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 3 Kwartcirkel en tabel</h3>
		<p>
			In deze opdracht ga je in drie stappen de verhoudingen neerschrijven die de basis zijn van de Goniometrie.
			<ol>
				<li>Maak een assenstelsel met daarin een kwartcirkel:
					<ul>
						<li>Teken op een verder leeg vel een positieve <em>x</em>- en een positieve <em>y</em>-as die ieders ongeveer 10 cm lang zijn (en uiteraard loodrecht op elkaar staan).</li>
						<li>Neem je passer en stel in op een straal tussen 5 en 10 cm (je bent vrij deze zelf te kiezen).</li>
						<li>Cirkel om vanuit de oorsprong, zodat je ten minste de kwartcirkel tussen de positieve <em>x</em>- en de positieve <em>y</em>-as hebt getekend.</li>
					</ul>
				</li>
				<li>Maak hoeken van 10&deg; t/m 90&deg; en vul daarmee de tabel hieronder in:
					<ul>
						<li>Gebruik je geodriehoek om lijnen vanuit de oorsprong te tekenen die een hoek van 10, 20, 30, ... , 80 en 90 graden maakt met de <em>x</em>-as.</li>
						<li>Neem de tabel hieronder over en vul in.</li>
					</ul>
				</li>
			</ol>
			<table>
				<tr>
					<td>graden</td><td>Aanliggende zijde</td><td>Overstaande zijde</td><td>Schuine zijde</td><td>`text{Overstaande zijde}/text{Schuine zijde}`</td><td>`text{Aanliggende zijde}/text{Schuine zijde}`</td><td>`text{Overstaande zijde}/text{Aanliggende zijde}`</td>
				</tr>
				<tr>
					<td>10&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>20&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>30&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>40&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>50&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>60&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>70&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>80&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
				<tr>
					<td>90&deg;</td><td></td><td></td><td></td><td></td><td></td><td></td>
				</tr>
			</table>
		</p>
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">		   	
				<table>
					<tr>
						<td>graden</td><td>Aanliggende zijde</td><td>Overstaande zijde</td><td>Schuine zijde</td><td>`text{Overstaande zijde}/text{Schuine zijde}`</td><td>`text{Aanliggende zijde}/text{Schuine zijde}`</td><td>`text{Overstaande zijde}/text{Aanliggende zijde}`</td>
					</tr>
					<tr>
						<td>10&deg;</td><td>*</td><td>*</td><td>*</td><td>0,174</td><td>0,985</td><td>0,176</td>
					</tr>
					<tr>
						<td>20&deg;</td><td></td><td></td><td></td><td>0,342</td><td>0,940</td><td>0,394</td>
					</tr>
					<tr>
						<td>30&deg;</td><td></td><td></td><td></td><td>0,500</td><td>0,866</td><td>0,577</td>
					</tr>
					<tr>
						<td>40&deg;</td><td></td><td></td><td></td><td>0,643</td><td>0,766</td><td>0.839</td>
					</tr>
					<tr>
						<td>50&deg;</td><td></td><td></td><td></td><td>0,766</td><td>0,643</td><td>1,192</td>
					</tr>
					<tr>
						<td>60&deg;</td><td></td><td></td><td></td><td>0,866</td><td>0,500</td><td>1,732</td>
					</tr>
					<tr>
						<td>70&deg;</td><td></td><td></td><td></td><td>0,940</td><td>0,342</td><td>2,748</td>
					</tr>
					<tr>
						<td>80&deg;</td><td></td><td></td><td></td><td>0,985</td><td>0,174</td><td>5,671</td>
					</tr>
					<tr>
						<td>90&deg;</td><td></td><td></td><td></td><td>1</td><td>0</td><td>ERROR</td>
					</tr>
				</table>
				* De lengtes van de aanliggende, overstaande en schuine zijdes zijn helemaal afhankelijk van de straal die jij gekozen hebt. Als het goed is, zijn jouw antwoorden in de laatste drie kolommen wel ongeveer hetzelfde als in bovenstaande tabel.
			</div>
		</div>
	</div>

	<!-- theorie A-->
	<div class="tekstblok theorie meetkunde" id="theorieA">
		<h3>Theorie A Sinus, cosinus en tangens</h3>
		<p>
			In de opdracht hiervoor heb jij de verhoudingen gevonden die respectievelijk sinus, cosinus en tangens heten. Hoe groot de schuine zijde (de straal) van jouw kwartcirkel is, heeft geen invloed op de <a href="index_taken.php?p=""">verhoudingen</a> die sinus, cosinus en tangens heten.<br>
			Dus de sinus van 30&deg; van de drie driehoeken hiernaast is steeds weer 0,5 groot.
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 4 Gelijkvormige driehoeken</h3>
		<p>
			De drie driehoeken hiernaast zijn gelijkvormig.<br>
			Als twee driehoeken gelijkvormig zijn, zijn overeenkomstige hoeken even groot.
			<ol>
				<li>Waarom denk je dat je zegt &Delta;<em>ABC</em> &sim; &Delta;<em>DFE</em><br>
					en niet &Delta;<em>ABC</em> &sim; &Delta;<em>DEF</em>
				</li>
				<li>Bereken de verhouding tussen de aanliggende en schuine zijdes vanuit de hoekpunten <em>A</em>, <em>D</em> en <em>M</em>.<br>
					Valt je wat op aan de uitkomsten?</li>
				<li>..</li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 5 Verhoudingen gebruiken</h3>
		<p>
			Bekijk de afbeelding hiernaast en gebruik de tabel bij de kwartcirkel uit opdracht 3.<br>
			Van verhouding naar hoek.
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 6 Verhoudingen gebruiken</h3>
		<p>
			Bekijk de afbeelding hiernaast en gebruik de tabel bij de kwartcirkel uit opdracht 3.<br>
			Van hoek naar zijde.
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 7 Welke verhouding?</h3>
		<p>
			Bekijk de afbeelding hiernaast en gebruik de tabel bij de kwartcirkel uit opdracht 3.<br>
			Sinus, cosinus of tangens?
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- theorie B -->
	<div class="tekstblok theorie meetkunde" id="theorieB">
		<h3>Theorie B Rekenmachine</h3>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht"> 
		<h3>Opdracht 8 Sos, Cas of Toa?</h3>
		<p>
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- theorie C -->
	<div class="tekstblok theorie meetkunde" id="theorieC">
		<h3>Theorie C SosCasToa</h3>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 9 Toepassen</h3>
		<p>
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 10 Toepassen</h3>
		<p>
			Bekijk de afbeelding hiernaast en gebruik de tabel bij de kwartcirkel uit opdracht 3.
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 11 Wiskunde B</h3>
		<p>
			Link tangens en helling bij lineair verband.
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 12 Toepassen</h3>
		<p>
			<ol>
				<li></li>
			</ol>
		</p>
	</div>

		
</div><!-- /de taak zelf -->

<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
	<div id="open_doelen" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Doelen</h3>
			<ol>
				<li>Goniometrische verhoudingen ontdekken;</li>
				<li>Toepassen van goniometrische verhoudingen;</li>
				<li>SosCasToa kennen en kunnen toepassen;</li>
				<li>Gebruik maken van de sinus, cosinus en tangens op de rekenmachine;</li>
				<li>Sinus, cosinus en tangens toepassen op verhaaltjessommen.</li>
			</ol>
		</div>
	</div>
	<div id="open_voorkennis" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Voorkennis</h3>
			<ol>
				<li>Kennis van bijzondere driehoeken, met name de rechthoekige driehoek;</li>
				<li>Verhoudingen;</li>
				<li>Gebruik van geo-driehoek en passer;</li>
				<li>Gebruik van rekenmachine.</li>
			</ol>
		</div>
	</div>
	<div id="open_werkwijze" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Werkwijze</h3>
			<p>
				Je maakt de opdrachten uit de taak in je schrift. Zorg voor een nette kantlijn en zet opgaven uit een opdracht steeds onder elkaar. Kijk nog even op de <a href="afbeeldingen/algemeen/voorbeeldbladzijde_wiskundeschrift.pdf" target="_blank">voorbeeldbladzijde</a> als je niet meer weet hoe je schrift eruit moet zien.
			</p>
			<p>
				Sommige opdrachten verwijzen naar de DWO. Maak de gevraagde activiteiten. Let op: eindtoetsen kun je maar eenmaal maken, bij andere activiteiten kun je meestal eindeloos oefenen met steeds nieuwe opgaven.
			</p>
		</div>
	</div>
	<div id="open_benodigdheden" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Benodigdheden</h3>
			<p>
				In deze taak heb je nodig:
				<ol>
					<li>Schrift, pen, potlood en gum.</li>
					<li>Geo-driehoek en passer;</li>
					<li>Rekenmachine.</li>
				</ol>
			</p>
		</div>
	</div>
</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->