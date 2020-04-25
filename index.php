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
				<img src="pictures/slideshow1.jpg" class="carousel-img" alt="xxx">
			</div>

			<div class="item">
				<img src="pictures/slideshow2.jpg" class="carousel-img" alt="xxx">
			</div>

			<div class="item">
				<img src="pictures/slideshow3.jpg" class="carousel-img" alt="xxx">
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
					<li><a href="#">
							<h1>ÜBER UNS</h1>
						</a></li>
					<li><a href="#leistungen">
							<h1>LEISTUNGEN</h1>
						</a></li>
					<li><a href="#">
							<h1>PRODUKTE</h1>
						</a></li>
					<li><a href="#">
							<h1>KONTAKT</h1>
						</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container bg-light">
		<div class="row">
			<div class="col-sm-12">
				<img src="pictures/aboutus.jpg" class="max-wh">
				<h2>ÜBER UNS</h2>
				<p>Das ist Greenbike - ein junges Unternehmen mit speziell für E-Bikes ausgebildeten Fachkräften, die sich gerne für Sie Zeit nehmen. Unser Betrieb zeichnet sich durch die persönliche Beratung in unserem Fahrrad-Shop, der praktischen und kostengünstigen Vermietung von E-Bikes und unserer Fachwerkstätte für E-Bike Wartung und Service aus. Frei nach unserem Leitsatz "Greenbike - Schnell und Günstig" gestaltet sich unser Geschäftsmodell. Flexibilität für jedermann, direkt im Univiertel, praktische Erreichbarkeit mit öffentlichen Verkehrsmitteln, sowie Parkmöglichkeiten sind vorhanden. Die Greenbike GmbH beschäftigt derzeit vier Mitarbeiter, die sich kompetent und zuverlässig um alle Ihre Fragen und Anliegen rund um das Thema E-Bike kümmern.</p>
			</div>
		</div>
	</div>
	<br>


	<!-- Leistungen-section-->
	<div class="container bg-dark" id="leistungen-head">
		<div class="col-sm-12">
			<!-- Slider -->
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
						<img src="pictures/EBike-Workshop.jpg" alt="Werkstatt">
					</div>

					<div class="item">
						<img src="pictures/EBike-Workshop.jpg" alt="Werkstatt">
					</div>

					<div class="item">
						<img src="pictures/EBike-Workshop.jpg" alt="Werkstatt">
					</div>
				</div>
			</div>
				<!-- Slider -->
				<div id="leistungen">
					<h2 class="h2-light">LEISTUNGEN</h2>
					<p class="p-light">Wir bieten modernste E-Bikes an, von der Vermietung bis zum Kauf an, sowie eine hauseigene Fachwerkstätte zu Wartung und Service für Ihre E-Bikes</p>
					<h3 class="h3-light">SERVICECENTER</h3>
					<p class="p-light">Unsere hochqualifizierten Mitarbeiter un unserem E-Bike Servicecenter arbeiten mit höchster Präzision daran, Ihre Kundenwünsche zu erfüllen. Vom einfachen Service bis zu Wartung. Weiteres bieten wir für unsere Kunden eine gratis Aufpumpstation für Ihre Fahrräder in unserem Haus an.</p>
					<h3 class="h3-light">VERMIETUNG</h3>
					<p class="p-light">Unsere Vermietung spricht für sich, indem wir Flexibilität zu geringen Preisen mit speziellen Preisvorteilen verbinden. Sie können aus einer großen Auswahl an moderensten E-Bikes aus unserem weiten Produktsortiment wählen. Wir beraten Sie gerne, ihr Wunsch-E-Bike zum besten Preis für Sie zu finden.</p>
					<h3 class="h3-light">VERKAUF</h3>
					<p class="p-light">Mit unseren generalüberholten und hochqualitativen E-Bike aus zweiter Hand erwerben Sie ein topaktuelles, neuwertiges E-Bike von Spitzenherstellern mit Bestpreisgarantie. Unsere E-Bikes werden von unserem hauseigenen Serviepersonal gewartet und geprüft, bevor Sie diese zum Vorzugspreis kaufen können. Wir bieten Ihnen auch die Möglichkeit, Ihr Wunsch-Rad vor dem Kauf Probe zu fahren, um sich so von der Qualtiät unserer Fahrräder zu überzeugen. Umweltfreundliche Fortbewegung, fachmännische Beratung, beste Preise - dass erhalten Sie nur bei Greenbike.</p>
				</div>
			</div>

		</div>
	</div>
		<br>

		<!--Studentenangebot-section -->
		<div class="container bg-dark" id="studenten">
			<div class="col-sm-12" style="margin-bottom: 10%">
				<img id="stud-img" src="pictures/Studentenkarte.jpg">
				<h3 class="h3-light">LIEBE SCHÜLER/INNEN UND STUDENTEN/INNEN, AUFGEPASST!</h3>
			<p class="p-light">Wir bei Greenbike legen einen großen Wert auf Jugendliche, daher haben wir verschiedene Angebot für all diejenigen die Nachweisen können das sie studieren beziehungsweise in die Schule gehen. Sie bekommen dann eine Greenbike Karte mit dem man verschiedene E-Bikes günstiger mieten kann. Greenbike Mitglieder können auch bei verschiedenen Events mitmachen die über das ganze Jahr stattfinden und tolle Preise gewinnen!</p>
			<p class="p-light"> Für mehr Fragen wenden Sie sich bei uns per E-Mail oder rufen Sie uns an!</p>
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
					<td>€ ??,??</td>
					<td>€ ??,??</td>
				</tr>
				<tr>
					<td>S Bear Rock</td>
					<td>€ ??,??</td>
					<td>€ ??,??</td>
				</tr>
				<tr>
					<td>B Wave</td>
					<td>€ ??,??</td>
					<td>€ ??,??</td>
				</tr>
			</table>
		</div>
		</div>
		<br>




</body>

</html>