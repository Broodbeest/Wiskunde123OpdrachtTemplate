<!-- Super Meike! -->

<?php
	//Definieer sidebar
	$doorverwijzingen = array(
      '#inleiding' => 'Inleiding',
	  '#theorieA' => 'Titel 1',
      '#theorieB' => '',
      '#theorieC' => '',
      '#theorieD' => '',
      '#proeftoets' => 'Proeftoets');                                                      
?>

<title>Leerjaar ? | !Taaktitel</title>

<div class="taakinhoud"><!-- de taak zelf -->
	<div class="tekstblok theorie vaardigheden/meetkunde/statistiek/analyse"  id="inleiding">
		<h3>!Taaktitel</h3>
		<p>
		</p>
	</div>

	<!-- opdracht 1 -->
	<div class="tekstblok opdracht">
		<h3>Opdracht 1</h3>
		<p>
		</p>
		<div class="hider"><!-- uitwerkingen -->
			<div class="showhide">&rarr;</div>
			<div class="antwoord">				   	
			</div>
		</div><!-- uitwerkingen sluiten -->
	</div><!-- opddracht suiten -->


	<!-- theorie A-->
	<div class="tekstblok theorie vaardigheden" id="theorieA">
		<h3>Theorie A Titel 1</h3>
	</div>


	<!-- opdracht  -->
	<div class="tekstblok opdracht">
		<h3>Opdracht </h3>
		<p>
		</p>
		<div class="hider"><!-- uitwerkingen -->
			<div class="showhide">&rarr;</div>
			<div class="antwoord">				   	
			</div>
		</div><!-- uitwerkingen sluiten -->
	</div><!-- opddracht suiten -->

	<!-- theorie A-->
	<div class="tekstblok theorie vaardigheden" id="theorieA">
		<h3>Theorie A Titel 1</h3>
	</div>
		
</div><!-- /de taak zelf -->

<div><!-- verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->
	<div id="open_doelen" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Doelen</h3>
			<ol>
				<li>...;</li>
				<li></li>
			</ol>
		</div>
	</div>
	<div id="open_voorkennis" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<h3>Voorkennis</h3>
			<ol>
				<li>...;</li>
				<li></li>
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
				</ol>
			</p>
		</div>
	</div>
</div><!-- /verwijzingen naar doelen, voorkennis, werkwijze en benodigdheden -->