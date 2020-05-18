<!DOCTYPE html>
<html>

<head>

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">


	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<title>Greenbike Graz</title>
</head>

<body>
	<!-- HEADER PREDIV -->
	<div id="preheader">
	</div>
	<!-- LOGO HEADER -->
	<div class="col-sm-12" id="logoheader">
	</div>
	<!-- SLIDER CAROUSEL -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="pictures/slideshow1.jpg" class="carousel-img" alt="Slideshow - Bikes">
			</div>

			<div class="item">
				<img src="pictures/slideshow2.jpg" class="carousel-img" alt="Slideshow - Bikes">
			</div>

			<div class="item">
				<img src="pictures/slideshow3.jpg" class="carousel-img" alt="Slideshow - Bikes">
			</div>
		</div>

		<!-- Left and right controls 
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			</a>-->
	</div>
	<!-- NAVBAR -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="bg-dark container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="#aboutus">
							<h1>ÜBER UNS</h1>
						</a></li>
					<li><a href="#leistungen">
							<h1>LEISTUNGEN</h1>
						</a></li>
					<li><a href="#produkte">
							<h1>PRODUKTE</h1>
						</a></li>
					<li><a href="#kontakt">
							<h1>KONTAKT</h1>
						</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container bg-light">
		<div class="row">
			<div class="col-sm-12" id="aboutus">
				<img src="pictures/aboutus.jpg" class="max-wh">
				<div class="textarea">
					<h2>ÜBER UNS</h2>
					<p>Das ist Greenbike - ein junges Unternehmen mit speziell für E-Bikes ausgebildeten Fachkräften, die sich gerne für Sie Zeit nehmen. Unser Betrieb zeichnet sich durch die persönliche Beratung in unserem Fahrrad-Shop, der praktischen und kostengünstigen Vermietung von E-Bikes und unserer Fachwerkstätte für E-Bike Wartung und Service aus. Frei nach unserem Leitsatz "Greenbike - Schnell und Günstig" gestaltet sich unser Geschäftsmodell. Flexibilität für jedermann, direkt im Univiertel, praktische Erreichbarkeit mit öffentlichen Verkehrsmitteln, sowie Parkmöglichkeiten sind vorhanden. Die Greenbike GmbH beschäftigt derzeit vier Mitarbeiter, die sich kompetent und zuverlässig um alle Ihre Fragen und Anliegen rund um das Thema E-Bike kümmern.</p>
				</div>
			</div>
		</div>
	</div>
	<br>


	<!-- Leistungen-section-->
	<div class="container bg-dark" id="leistungen-head">
		<div class="col-sm-12">
			<img id="workshop-img" src="pictures/EBike-Workshop.jpg" alt="E-Bike Workshop">
				<div id="leistungen" class="textarea">
					<h2 class="h2-light">LEISTUNGEN</h2>
					<p class="p-light">Wir bieten modernste E-Bikes an, von der Vermietung bis zum Kauf an, sowie eine hauseigene Fachwerkstätte zu Wartung und Service für Ihre E-Bikes</p>
					<h3 class="h3-light">SERVICECENTER</h3>
					<p class="p-light">Unsere hochqualifizierten Mitarbeiter un unserem E-Bike Servicecenter arbeiten mit höchster Präzision daran, Ihre Kundenwünsche zu erfüllen. Vom einfachen Service bis zu Wartung. Weiteres bieten wir für unsere Kunden eine gratis Aufpumpstation für Ihre Fahrräder in unserem Haus an.</p>
					<h3 class="h3-light">VERMIETUNG</h3>
					<p class="p-light">Unsere Vermietung spricht für sich, indem wir Flexibilität zu geringen Preisen mit speziellen Preisvorteilen verbinden. Sie können aus einer großen Auswahl an moderensten E-Bikes aus unserem weiten Produktsortiment wählen. Wir beraten Sie gerne, ihr Wunsch-E-Bike zum besten Preis für Sie zu finden.</p>
					<h3 class="h3-light">VERKAUF</h3>
					<p class="p-light">Mit unseren generalüberholten und hochqualitativen E-Bike aus zweiter Hand erwerben Sie ein topaktuelles, neuwertiges E-Bike von Spitzenherstellern mit Bestpreisgarantie. Unsere E-Bikes werden von unserem hauseigenen Serviepersonal gewartet und geprüft, bevor Sie diese zum Vorzugspreis kaufen können. Wir bieten Ihnen auch die Möglichkeit, Ihr Wunsch-Rad vor dem Kauf Probe zu fahren, um sich so von der Qualtiät unserer Fahrräder zu überzeugen. Umweltfreundliche Fortbewegung, fachmännische Beratung, beste Preise - dass erhalten Sie nur bei Greenbike.</p>
					<br>
				</div>
			</div>
		</div>
	<br>
	<br>
	<div class="container bg-light">
		<div class="row">
			<div class="col-sm-12" id="produkte">
				<img src="pictures/Greenbike-Location.jpg" class="max-wh">
				<div class="textarea">
					<h2>PRODUKTE</h2>
					<p>Wenn Sie in Graz unterwegs sind, denken Sie nicht, dass es hier nur öffentliche Verkehrsmittel gibt. Das E-Bike ist umweltfreundlich und bringt Ihnen viel Freude. Egal ob Sie überlegen, ein E-Bike zu kaufen oder einfach Ihren Urlaubsort auf eine ganz neue Art erkunden möchten - wir haben das passende E-Bike für Sie! Bei uns erwarten Sie eine Vielzahl an hochwertigen Marken E-Bikes. Wenn Sie sich unschlüssig sind, welches E-Bike am besten zu Ihnen passt, zögern Sie nicht uns zu kontaktieren. Wir helfen Ihnen gerne! Um sicherzustellen, dass wir an ihrem Wunschtermin das richtige Bike für Sie haben, rufen Sie uns an oder besuchen Sie uns in der Merangasse 82.</p>
					


					<h3>Unsere Empfehlungen für Sie:</h3>
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
								<img src="pictures/Bike1slideshow.png" class="carousel-img" alt="Slideshow - Bike">
							</div>

							<div class="item">
								<img src="pictures/Bike2slideshow.png" class="carousel-img" alt="Slideshow - Bike">
							</div>

							<div class="item">
								<img src="pictures/Bike3slideshow.png" class="carousel-img" alt="Slideshow - Bike">
							</div>
						</div>
					</div>
				</div>
				<br>
			</div>
		</div>
	</div>
	<br>
	
	<!--Studentenangebot-section -->
	<div class="container bg-dark">
		<div class="col-sm-12" style="margin-bottom: 8%">
			<img id="stud-img" src="pictures/Studentenkarte.jpg">
			<div class="textarea">
			<h3 class="h3-light">LIEBE SCHÜLER/INNEN UND STUDENTEN/INNEN, AUFGEPASST!</h3>
		<p class="p-light">Wir bei Greenbike legen einen großen Wert auf Jugendliche, daher haben wir verschiedene Angebot für all diejenigen die Nachweisen können das sie studieren beziehungsweise in die Schule gehen. Sie bekommen dann eine Greenbike Karte mit dem man verschiedene E-Bikes günstiger mieten kann. Greenbike Mitglieder können auch bei verschiedenen Events mitmachen die über das ganze Jahr stattfinden und tolle Preise gewinnen!</p>
		<p class="p-light"> Für mehr Fragen wenden Sie sich bei uns per E-Mail oder rufen Sie uns an!</p>
			</div>
		</div>
	<div id="container-tab">
		<table id="stud-tab">
			<tr>
				<th id="tab-head" colspan="3">Greenbike Schüler/Studenten Angebot</th>
				
			</tr>
			<tr>
				<td colspan="3" style="background-color: #5E6966"> </td>
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
		<img id="img-logo" src="pictures/LogosUni.svg">
	</div>
	
	</div>
	<br>

<!--form-->
<div class="bg-light container" style="padding-bottom: 300px;">
	<div class="col-sm-12">
		<h3 id="formular-head">Haben Sie noch Fragen dann zögern Sie nicht!</h3>
	<form class="formular" id="kontakt">
	<div class="form-row">
	<div class="form-group col-md-6">
	  <label for="inputVorname">*Vorname:</label>
	  <input type="text" class="form-control" id="inputVorname" placeholder="Vorname" required>
	</div>
	<div class="form-group col-md-6">
	  <label for="inputNachname">*Nachname:</label>
	  <input type="text" class="form-control" id="inputNachname" placeholder="Nachname" required>
	</div>
  </div>
  
  <div class="form-row">
	<div class="form-group col-md-6">
	  <label for="inputAdresse">*Adresse:</label>
	  <input type="text" class="form-control" id="inputAdresse" placeholder="Adresse" required>
	</div>
	<div class="form-group col-md-2">
		<label for="inputPlz">*PLZ:</label>
		<input style="width: 80px;" type="text" class="form-control" id="inputPlz" placeholder="PLZ" required>
	  </div>
	  <div class="form-group col-md-4">
		<label for="inputOrt">*Ort:</label>
		<input type="text" class="form-control" id="inputOrt" placeholder="Ort" required>
	  </div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label for="inputTelefon">*Telefon/Mobile:</label>
		  <input type="tel" class="form-control" id="inputTelefon" placeholder="0664/1234567" required>
		</div>
		<div class="form-group col-md-6">
		  <label for="inputNachname">*Email:</label>
		  <input type="text" class="form-control" id="inputNachname" placeholder="Email" required>
		</div>
	  </div>
	  <div>
		<div class="form-group" id="head-textarea">
			<label for="exampleFormControlTextarea1">Fragen/Anmerkungen:</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="10" style="border:solid 2px black; border-radius: 0px;" maxlength="200"></textarea>
		  </div>
<p>Wir speichern Ihre persönliche Daten für die Zusendung von Infomaterial und es gilt für die Verarbeitung Ihrer Daten die DSGVO. Alle Eingabefelder, die mit * gekennzeichnet sind MÜSSEN ausgefüllt werden. Auf Ihren Wunsch werden die Daten jederzeit aus unserer Datenbank gelöscht. Bitte bestätigen Sie Ihr Einverständnis mit der nachfolgenden Checkbox.</p>
<div class="checkbox">
	<label class="checkbox-inline"><input type="checkbox" value="zustimmen" required><p style="text-align: justify;">Ich bestätige, dass Greenbike eine persönlichen Daten für die Zusendung von Informaterial speichern darf.</p></label>
  </div>
</div>
<button type="button" class="btn btn-primary btn-lg btn-block form-submit">ABSCHICKEN</button>
</div>
</div>
</form>
<br>

<!-- Footer -->
<div class="col-md-12 bg-dark">
	<br>
	<br>
	<br>
</div>
<footer class="">

<!-- Footer Links -->
<div class="container text-md-left">
	<div class="row">
	 	<div class="col-md-4 mx-auto">
			<h3 class="font-weight-bold text-uppercase mt-3 mb-4">Sitemap</h3>
			<ul class="list-unstyled">
				<li>
					<a href="#aboutus">ÜBER UNS</a>
				</li>
				<li>
					<a href="#leistungen">LEISTUNGEN</a>
				</li>
				<li>
					<a href="#produkte">PRODUKTE</a>
				</li>
				<li>
					<a href="#kontakt">KONTAKT</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4 mx-auto">
			<h3 class="mt-3 mb-4">Kontaktdaten</h3>
			Greenbike GmbH<br>
			Merangasse 82<br>
			8010 Graz<br>
			p: +43 3123 31242<br>
			e: greenbike@gmail.com<br>
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
<!-- Social Links -->
<div class="col-md-12 bg-dark social-container">
	<a href="https://www.facebook.com/"><img src="pictures/Facebook.svg" class="social-img"></a>
	<a href="https://www.instagram.com/"><img src="pictures/Instagram.svg" class="social-img"></a>
	<a href="https://twitter.com/"><img src="pictures/Twitter.svg" class="social-img"></a>
	<a href="https://www.youtube.com/"><img src="pictures/Youtube.svg" class="social-img"></a>
</div>

</footer>
<!-- Footer -->

</body>
</html>