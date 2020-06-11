<!DOCTYPE html>
<html lang="de">
<head>
	<title>Greenbike Graz - EBikes für jedermann</title>
	<link rel="icon" type="image" href="pictures/favicon.ico" />

	<!-- Forces UTF-8 for umlaut support -->
	<meta charset="UTF-8">

	<!-- Sets the width to the devices width you are viewing it in.  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Meta tagging for SEO -->
	<meta name="description" content="Das ist Greenbike - ein junges Unternehmen mit speziell für E-Bikes ausgebildeten Fachkräften, die sich gerne für Sie Zeit nehmen. Unser Betrieb zeichnet sich durch die persönliche Beratung in unserem Fahrrad-Shop, der praktischen und kostengünstigen Vermietung von E-Bikes und unserer Fachwerkstätte für E-Bike Wartung und Service aus."/>


	<!-- SCRIPTS and CSS -->

		<!-- jQuery - req. for bootstrap -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<script src="js/smoothscrolling.js"></script>
		<script src="js/submit_form.js"></script>

		<!-- Local Stylesheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
	<!-- HEADER PREDIV -->
	<div id="preheader"></div>

	<!-- LOGO HEADER -->
	<img src="pictures/logo.svg" class="logoheader" alt="Greenbike - Logo"/>

	<!-- SLIDER CAROUSEL -->
	<section id="section-maincarousel">
		<div id="mainCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#mainCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mainCarousel" data-slide-to="1"></li>
				<li data-target="#mainCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="pictures/slideshow1.jpg" class="centerzoom" alt="Slideshow - Bikes">
				</div>

				<div class="item">
					<img src="pictures/slideshow2.jpg" class="centerzoom" alt="Slideshow - Bikes">
				</div>

				<div class="item">
					<img src="pictures/slideshow3.jpg" class="centerzoom" alt="Slideshow - Bikes">
				</div>
			</div>
		</div>
	</section>

	<!-- NAVBAR -->
	<nav id="section-navbar">
		<nav class="navbar navbar-default" role="navigation">
			<div class="bg-dark container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1"><span class="sr-only">Navigation aktivieren</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="#section-aboutus"><h1>ÜBER UNS</h1></a></li>
						<li><a href="#section-leistungen"><h1>LEISTUNGEN</h1></a></li>
						<li><a href="#section-produkte"><h1>PRODUKTE</h1></a></li>
						<li><a href="#section-kontakt"><h1>KONTAKT</h1></a></li>
					</ul>
				</div>
			</div>
		</nav>
	</nav>
	
	<!-- ABOUTUS -->
	<section id="section-aboutus">
		<div class="container bg-light">
			<div class="row">
				<div class="col-sm-12">
					<img src="pictures/aboutus.jpg" class="centerzoom" alt="Fahrradwerkstatt">
					<div class="textarea">
						<h2>ÜBER UNS</h2>
						<p>Das ist Greenbike - ein junges Unternehmen mit speziell für E-Bikes ausgebildeten Fachkräften, die sich gerne für Sie Zeit nehmen. Unser Betrieb zeichnet sich durch die persönliche Beratung in unserem Fahrrad-Shop, der praktischen und kostengünstigen Vermietung von E-Bikes und unserer Fachwerkstätte für E-Bike Wartung und Service aus. Frei nach unserem Leitsatz "Greenbike - Schnell und Günstig" gestaltet sich unser Geschäftsmodell. Flexibilität für jedermann, direkt im Univiertel, praktische Erreichbarkeit mit öffentlichen Verkehrsmitteln, sowie Parkmöglichkeiten sind vorhanden. Die Greenbike GmbH beschäftigt derzeit vier Mitarbeiter, die sich kompetent und zuverlässig um alle Ihre Fragen und Anliegen rund um das Thema E-Bike kümmern.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<br>

	<!-- LEISTUNGEN -->
	<section id="section-leistungen">
		<div class="container bg-dark darkpadding">
			<div class="col-sm-12">
				<img src="pictures/EBike-Workshop.jpg" alt="E-Bike Workshop" class="centerzoom">
				<div class="textarea">
					<h2 class="h2-light">LEISTUNGEN</h2>
					<p class="p-light">
						Wir bieten modernste E-Bikes von der Vermietung bis zum Kauf, sowie eine hauseigene Fachwerkstätte zur Wartung für Ihre E-Bikes:
					</p>
					<br>
					<h3 class="h3-light">SERVICECENTER</h3>
					<p class="p-light">
						Unsere hochqualifizierten Mitarbeiter un unserem E-Bike Servicecenter arbeiten mit höchster Präzision daran, Ihre Kundenwünsche zu erfüllen. Vom einfachen Service bis zu Wartung. Weiteres bieten wir für unsere Kunden eine gratis Aufpumpstation für Ihre Fahrräder in unserem Haus an.
					</p>
					<br>
					<h3 class="h3-light">VERMIETUNG</h3>
					<p class="p-light">
						Unsere Vermietung spricht für sich, indem wir Flexibilität zu geringen Preisen mit speziellen Preisvorteilen verbinden. Sie können aus einer großen Auswahl an moderensten E-Bikes aus unserem weiten Produktsortiment wählen. Wir beraten Sie gerne, ihr Wunsch-E-Bike zum besten Preis für Sie zu finden.
					</p>
					<br>
					<h3 class="h3-light">VERKAUF</h3>
					<p class="p-light">
						Mit unseren generalüberholten und hochqualitativen E-Bike aus zweiter Hand erwerben Sie ein topaktuelles, neuwertiges E-Bike von Spitzenherstellern mit Bestpreisgarantie. Unsere E-Bikes werden von unserem hauseigenen Serviepersonal gewartet und geprüft, bevor Sie diese zum Vorzugspreis kaufen können. Wir bieten Ihnen auch die Möglichkeit, Ihr Wunsch-Rad vor dem Kauf Probe zu fahren, um sich so von der Qualtiät unserer Fahrräder zu überzeugen. Umweltfreundliche Fortbewegung, fachmännische Beratung, beste Preise - dass erhalten Sie nur bei Greenbike.
					</p>
					<br>
					<br>
				</div>
			</div>
		</div>
	</section>
	
	<br>
	<br>

	<!-- PRODUKTE -->
	<section id="section-produkte">
		<div class="container bg-light">
			<div class="row">
				<div class="col-sm-12">
					<img src="pictures/Greenbike-Location.jpg" class="centerzoom" alt="Greenbike - Store">
					<div class="textarea">
						<h2>PRODUKTE</h2>
						<p>Wenn Sie in Graz unterwegs sind, denken Sie nicht, dass es hier nur öffentliche Verkehrsmittel gibt. Das E-Bike ist umweltfreundlich und bringt Ihnen viel Freude. Egal ob Sie überlegen, ein E-Bike zu kaufen oder einfach Ihren Urlaubsort auf eine ganz neue Art erkunden möchten - wir haben das passende E-Bike für Sie! Bei uns erwarten Sie eine Vielzahl an hochwertigen Marken E-Bikes. Wenn Sie sich unschlüssig sind, welches E-Bike am besten zu Ihnen passt, zögern Sie nicht uns zu kontaktieren. Wir helfen Ihnen gerne! Um sicherzustellen, dass wir an ihrem Wunschtermin das richtige Bike für Sie haben, rufen Sie uns an oder besuchen Sie uns in der Merangasse 82.</p>
						


						<h3>Unsere Empfehlungen für Sie:</h3>
						<br>
					</div>
				</div>
			</div>
		</div>
	
		<div id="carousel_products" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel_products" data-slide-to="0" class="active"></li>
				<li data-target="#carousel_products" data-slide-to="1"></li>
				<li data-target="#carousel_products" data-slide-to="2"></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="pictures/Bike1slideshow.png" class="productzoom" alt="Slideshow - Bike">
				</div>
				<div class="item">
					<img src="pictures/Bike2slideshow.png" class="productzoom" alt="Slideshow - Bike">
				</div>
				<div class="item">
					<img src="pictures/Bike3slideshow.png" class="productzoom" alt="Slideshow - Bike">
				</div>
			</div>
		</div>
	</section>

	<br>
	<br>

	<!-- ANGEBOTE -->
	<section id="section-angebote">
		<div class="container bg-dark darkpadding">
			<div class="col-sm-12 max-h">
				<img src="pictures/Studentenkarte.jpg" alt="Unsere Studentenkarte" class="centerzoom">
					<div class="textarea">
						<h3 class="h3-light">SCHÜLER UND STUDENTEN AUFGEPASST!</h3>
						<p class="p-light">Wir bei Greenbike legen einen großen Wert auf Jugendliche, daher haben wir verschiedene Angebot für all diejenigen die Nachweisen können das sie studieren beziehungsweise in die Schule gehen. Sie bekommen dann eine Greenbike Karte mit dem man verschiedene E-Bikes günstiger mieten kann. Greenbike Mitglieder können auch bei verschiedenen Events mitmachen die über das ganze Jahr stattfinden und tolle Preise gewinnen!</p>
						<p class="p-light"> Für mehr Fragen wenden Sie sich bei uns per E-Mail oder rufen Sie uns an!</p>
					</div>
				</div>
				<div class="col-sm-12 angebote-sector">
					<div class="col-sm-6 angebote-table">
						<div class="max-h">

						<!-- PRICE TABLE -->
							<table class="max-w">
								<tr>
									<th id="tab-head" colspan="3">Greenbike Kundenkartenangebot</th>
								</tr>
								<tr>
									<td colspan="3" id="form-blank"> </td>
								</tr>
								<tr>
									<th>E-Bike</th>
									<th>Normalpreis</th>
									<th>Angebot</th>
								</tr>
								<tr>
									<td>CT Hybrid One</td>
									<td>1,50 €/Std</td>
									<td>0,50 €/Std</td>
								</tr>
								<tr>
									<td>S Bear Rock</td>
									<td>1,90 €/Std</td>
									<td>0,70 €/Std</td>
								</tr>
								<tr>
									<td>B Wave</td>
									<td>2,00 €/Std</td>
									<td>0,80 €/Std</td>
								</tr>
								
							</table>
						</div>
					</div>
					<div class="col-sm-6 angebote-logos">
						<img id="img-unilogos" src="pictures/LogosUni.svg" alt="Uni-Logos">
					</div>
					<div class="col-sm-12">
						<br>
						<img src="pictures/Mobile_app.jpg" alt="Unsere Studentenkarte" class="centerzoom">
						<div class="textarea">
							<h3 class="h3-light">COMING SOON: UNSERE PRAKTISCHE HANDYAPP!</h3>
							<p class="p-light">Wir wollen Ihnen immer das beste Erlebnis bieten, deshalb sind wir gerade dabei eine App zu entwickeln, die genau dies noch weiter ausbauen wird. Buchungen können somit noch bequemer durchgeführt, Werkstatttermine noch einfacher vereinbart und die Mietzeiten noch besser im Auge behalten werden.</p>
							<br>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</section>

	<br><br>

	<!-- KONTAKT -->
	<section id="section-kontakt">
		<div class="bg-light container">
			<div class="col-sm-12">
				<h3 id="formular-head">Haben Sie noch Fragen? Dann zögern Sie nicht!</h3>
				<!-- FORM -->
				<form name ="form" class="formular" id="kontakt"> 
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputVorname">*Vorname:</label>
							<input name="vorname" type="text" pattern="[a-zA-Z]+"  class="form-control" id="inputVorname" placeholder="Vorname" name="vorname" required>
						</div>
						<div class="form-group col-md-6">
							<label for="inputNachname">*Nachname:</label>
							<input name="nachname" type="text" pattern="[a-zA-Z]+"  class="form-control" id="inputNachname" placeholder="Nachname" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputAdresse">*Adresse:</label>
							<input name="adresse" type="text" pattern="[a-zA-Z0-9\sÄÖÜäöüß]+" maxlength="20" class="form-control" id="inputAdresse" placeholder="Adresse" required>
						</div>
						<div class="form-group col-md-2">
							<label for="inputPlz">*PLZ:</label>
							<input name="plz" pattern="\d{4}" maxlength="4" type="text" class="form-control" id="inputPlz" placeholder="PLZ" required>
						</div>
						<div class="form-group col-md-4">
							<label for="inputOrt">*Ort:</label>
							<input name="ort" type="text" pattern="[a-zA-ZÄÖÜäöüß]+" maxlength="20" class="form-control" id="inputOrt" placeholder="Ort" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputTelefon">*Telefon/Mobile:</label>
							<input name="telefon" type="tel" class="form-control" pattern="\d{11}" id="inputTelefon" placeholder="06641234567" required>
						</div>
						<div class="form-group col-md-6">
							<label for="email">*Email:</label>
							<input name="email" type="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" maxlength="25" id="email" placeholder="Email" required>
						</div>
					</div>
					<div>
					<!-- TEXTAREA FORM -->
						<div class="form-group col-md-12">
							<label for="from-textarea">Ihre Nachricht:</label>
							<textarea class="form-control" id="form-textarea" rows="10" maxlength="400"></textarea>
						</div>
						<p>Wir speichern Ihre persönlichen Daten für die Zusendung von Infomaterial und es gilt für die Verarbeitung Ihrer Daten die DSGVo. Alle Eingabefelder, die mit * gekennzeichnet sind MÜSSEN ausgefüllt werden. Auf Ihren Wunsch werden die Daten jederzeit aus unserer Datenbank gelöscht. Bitte bestätigen Sie Ihr Einverständnis mit der nachfolgenden Checkbox.</p>
						<div class="checkbox">
							<label class="checkbox-inline"><input id="dsgvo" type="checkbox" value="zustimmen" required><p id="accept-form">Ich bestätige, dass Greenbike meine persönlichen Daten für den angedachten E-Mailverkehr speichern und nutzen darf.</p></label>
						</div>
						<div class="form-group">
							<div class="col-md-12 buttonspace">
								<button id="send-form" value="Submit" type="submit" class="btn btn-primary btn-lg btn-block form-submit">ABSCHICKEN</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>

	<br><br><br><br>

	<footer>
		<div class="col-md-12 footercontainer"></div>
		<!-- FOOTER SITEMAP & DATA -->
		<div class="container text-md-left">
			<div class="row">
			 	<div class="col-md-4 mx-auto">
					<h3 class="font-weight-bold text-uppercase mt-3 mb-4">Sitemap</h3>
					<ul class="list-unstyled">
						<li>
							<a href="#section-aboutus">ÜBER UNS</a>
						</li>
						<li>
							<a href="#section-leistungen">LEISTUNGEN</a>
						</li>
						<li>
							<a href="#section-produkte">PRODUKTE</a>
						</li>
						<li>
							<a href="#section-kontakt">KONTAKT</a>
						</li>
					</ul>
				</div>
				<div class="col-md-4 mx-auto">
					<h3 class="mt-3 mb-4">Kontaktdaten</h3>
					Greenbike GmbH<br>
					Merangasse 82<br>
					8010 Graz<br>
					p: +43 3123 31242<br>
					w: greenbike.bplaced.net<br>
				</div>
				<div class="col-md-4 mx-auto">
					<h3 class="mt-3 mb-4">Datenschutz & Copyright</h3>
					© 2020 greenbike.bplaced.net<br>
					Alle Rechte vorbehalten.<br>
					Für den Inhalt verantwortlich - greenbike.bplaced.net<br>
					Bilder von stockphoto, für externe Links wird keine Haftung übernommen. Es gilt die DSGVo.<br>
					<strong>Diese Webseite ist ein Maturaprojekt, es handelt sich um kein reales Unternehmen.<strong><br>
				</div>
			</div>
		</div>
		<br>
		<!-- FOOTER SOCIAL LINKS -->
		<div class="col-md-12 footercontainer">
			<a href="https://www.facebook.com/"><img src="pictures/Facebook.svg" class="first-social-img" alt="Facebook"></a>
			<a href="https://www.instagram.com/"><img src="pictures/Instagram.svg" class="social-img" alt="Instagram"></a>
			<a href="https://twitter.com/"><img src="pictures/Twitter.svg" class="social-img" alt="Twitter"></a>
			<a href="https://www.youtube.com/"><img src="pictures/Youtube.svg" class="social-img" alt="Youtube"></a>
		</div>
	</footer>
	
	<script data-account="SRb1TPxPYM" src="https://cdn.userway.org/widget.js"></script>
</body>
</html>