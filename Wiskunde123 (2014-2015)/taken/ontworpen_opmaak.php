<title>Schrijv(st)ers | Ontworpen opmaak</title>

<div class="container vaardigheden">

<!--het hoofdblok-->
<div class="bodytekst">

<!-- hoofdtekst -->
<h1>Ontworpen opmaak</h1>

<!-- theorie A -->
<div class="tekstblok theorie vaardigheden">
	<h3>Domeinen</h3>
	<p>
		Om een opmaak bij één van de domeinen op te roepen hebben we class="
		<ol>
			<li>
				<b>container</b> vaardigheden (#cce6ff), analyse (#ffe5cc), meetkunde (#ccffe5) of statistiek (#ffcce6) (deze zorgt voor de gekleurde rand om de taak)
			</li>
			<li>
				<b>tekstblok theorie</b> vaardigheden, analyse, meetkunde of statistiek (achtergrondkleur van een theorieblok en de kleur van h3)
			</li>
		</ol>
	</p>
</div>

<!-- opdracht -->
<div class="tekstblok opdracht">
	<h3>Tekstblok opdracht</h3>
	<p>
		Opdrachten krijgen geen extra kleur mee oid.
	</p>
	<p>
		Na afloop van een opgave, kan een antwoordenknop worden geplaatst. Eerst wordt de <b>hider</b> opgeroepen, dan de <b>showhide</b> en gelijk weer gesloten en dan wordt <b>antwoord</b> opgeroepen. In plaats van antwoord kan ook <b>hint</b> worden opgeroepen, deze verschilt alleen in het woord op de knop.
		<div class="hider">
			<div class="showhide">&rarr;</div>
			<div class="antwoord">
				<h3>Antwoord in h3</h3>
				<p>Bla</p>
			</div>
		</div>
		<div class="hider_hint">
			<div class="showhide_hint">&rarr;</div>
			<div class="hint">
				<h3>Hint in h3</h3>
				<p>Bla</p>
			</div>
		</div>
	</p>
</div>

<div class="tekstblok opdracht">
	<h3>Opdracht 13</h3>
	<p>
		Voorbeeld opgaven in dubbele kolom met tabel én listitems én gedefinieerde breedte (width). Met ' ol start="4" ' geef je aan dat de tweede kolom bij 'd' begint.
	</p>
	
	<table>
		<tr>
			<td width="300">
				<ol>
					<li>-(8 + 13) =</li>
					<li>-(16 - -14) =</li>
					<li>-(-8 × - 10) =</li>
				</ol>
			</td>
			<td width="300">
				<ol start="4">
					<li>-(-30 - - 7) =</li>
					<li>-(5 + - 10) + -(-8 - -4) =</li>
					<li>-(8 + -8) - (-16 × -2) =</li>
				</ol>
			</td>
		</tr>
	</table>
</div>

<!-- tabellen -->
<div class="tekstblok theorie analyse">
	<h3>Tabellen</h3>
	<p>
		De verschillende tabellen:
		<ol>
			<li>
				<b>Stappenplan</b>
				<table class="stappenplan">
					<tr>
						<td>Stap 1:</td>
						<td>Deze tabel heeft geen randen en de eerste kolom is altijd breed genoeg voor de tekst "Stap n:".</td>
					</tr>
				</table>
			</li>
			<li>
				Met de class <b>verhouding</b> hebben de th in de thead en tfoot geen randen, verder binnen de tabel (tr - td) wel randen. Tekst krijgt altijd een beetje "padding" mee.<br>
				De pijlen (lrpijlboven/-onder, rlpijlboven/-onder, obpijllinks/-rechts en bopijllinks/-rechts) staan direct onder afbeeldingen, niet in een map. Hieronder een voorbeeldje:<br>
				<table class="verhouding">
					<thead>
						<th></th>
						<th colspan="2">&times;2<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" width="50px"></th>
					</thead>
					<tr>
						<td>Pakken melk</td>
						<td>2</td>
						<td>4</td>
					</tr>
					<tr>
						<td>Geld in &euro;</td>
						<td>€1,72</td>
						<td>...</td>
					</tr>
					<tfoot>
						<th></th>
						<th colspan="2"><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlonder.png" width="50px"><br>&times;2</th>
					</tfoot>
				</table>
			</li>
			<li>
				Met de class <b>Pythagoras</b> komt er onder de eerste regel en boven de laatste regel een rand.
				<table class="pythagoras">
						<thead>
							<th colspan="2">
								kwadraat<br><img src="afbeeldingen/vaardigheden_verhoudingen/lrpijlboven.png" width="50px">
							</th>
						</thead>
						<tfoot>
							<th colspan="2">
								<img src="afbeeldingen/vaardigheden_verhoudingen/rlpijlonder.png" width="50px"><br>wortel
							</th>
						</tfoot>
					<tr>
						<td>zijde</td>
						<td>kwadraat</td>
					</tr>
					<tr>
						<td>3</td>
						<td>9</td>
					</tr>
					<tr>
						<td>...</td>
						<td>...</td>
					</tr>
					<tr>
						<td>5</td>
						<td>25</td>
					</tr>
				</table>
			</li>
			<li>
				Meike heeft geen idee wanneer <b>tabel_analyse</b> wordt gebruikt. Dit is hoe het eruit ziet. Er wordt wat gedaan met border: collapse, maar dat lijkt niet te werken. De tekstkleur in de tabel en in td is gedefinieerd als "green".
				<table class="tabel_analyse">
					<tr>
						<td>bla</td><td>bla</td>
					</tr>
					<tr>
						<td>150</td><td>50</td>
					</tr>
				</table>
			</li>
		</ol>
	</p>
</div>

<div class="tekstblok theorie meetkunde">
	<h3>Tekst</h3>
	<p>
		<div class="kolommen2">
			Wanneer <b>kolommen2</b> wordt opgeroepen in bijvoorbeeld een div of een p, wordt de tekst of de lijst in twee kolommen verdeeld. Tussen de twee kolommen is een automatische ruimte van +/- 5px.
		</div>
	</p>
	<p>
		Met <b>kolommen2</b> kun je automatisch een lange <b>list</b> laten opsplitsen. Er moet alleen nog iets met de bovenkant, het begin van de lijst heeft een padding, denk ik.
		<div class="kolommen2">
			<ol>
				<li>bla</li>
				<li>die</li>
				<li>bla</li>
				<li>bla</li>
				<li>die</li>
				<li>bla</li>
			</ol>
		</div>
	</p>
	<p>
		<div class="tekstballon_theorie">
			<p>Hier kun je kennis nog eens onder de aandacht brengen.</p>
		</div>
		In plaats van een denkwolk kan in elke bol <b>tekstballon_theorie</b> opgeroepen worden.
	</p>
</div>

<div class="tekstblok theorie statistiek">
	<h3>Wiskundige tekst</h3>
	<p>
		Meestal redden we ons met emphasis (em), maar niet met breuken. Tekst kan worden geplaatst tussen accenten (die ene onder de tilde), dan krijgt het de automatische opmaak van MathJax. Breuken kunnen ook opgemaakt worden in de math omgeving:<br>
	</p>
</div>

</div>