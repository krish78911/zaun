<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Contact Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<!--font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--custom css-->
<link rel="stylesheet" href="style.css">

<link href='https://fonts.googleapis.com/css?family=Duru+Sans|Arvo:400,700' rel='stylesheet' type='text/css'>

</head>

<body>
	<div class="body">
		<div class="container-fluid">
		  <div class="row" id="bodycontainer">
		  <!--left navigation-->
			<div id="" class="col-md-4 col-lg-4 section-left">
				<p class="heading" id="left-heading">
					IHRE ANFRAGE IM ÜBERBLICK 
				</p>
				<p class="subheading" id="left-subheading">
					Hier steht ein kuzer knapper erklärender Text. Nicht zu lang, maximal zwei Sätze.
				</p>
				<div>
					<p class="subheadingBold" id="contactFormHeading" style="display: none;">
						Deine Auswahl:
					</p>
					<div id="showformdetails">
						<div class="div1"></div>
						<div class="div2"></div>
						<div class="div3"></div>
						<div class="div4">
						
						</div>
						<div class="div5"></div>
						<div class="div6">
							<div class="div60">
											
							</div>
							<div class="div61">
											
							</div>
							<div class="div62">
											
							</div>
						</div>
						<div class="div7"></div>
						<div class="div8">
							<div class="div81">
											
							</div>
							<div class="div82">
											
							</div>
							<div class="div83">
											
							</div>
						</div>
						<div class="div9">
							<div class="div91">
											
							</div>
							<div class="div92">
											
							</div>
							<div class="div93">
											
							</div>
						</div>
						<div class="div10"></div>
					</div>
				</div>
				<div class="arrow-container">
					<i class="fa fa-angle-left" id="left-arrow"></i> <i class="fa fa-angle-right" id="right-arrow"></i>
				</div>
				<p class="number-container">
				    <button class="btns active" id="btn-1">1</button><button class="btns" id="btn-2">2</button><button class="btns" id="btn-3">3</button><button class="btns" id="btn-4">4</button><button class="btns" id="btn-5">5</button><button class="btns" id="btn-6">6</button><button class="btns" id="btn-7">7</button><button class="btns" id="btn-8">8</button><button class="btns" id="btn-9">9</button><button class="btns" id="btn-10">10</button>
				</p>
			</div>
			
			
			<div id="" class="col-md-8 col-lg-8 section-right">
				<div class="row">
				<!--page 1-->
					<div class="col-lg-12 all-contents" id="content-btn-1">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading">
									FÜR WAS INTERESSIEREN SIE SICH?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageOne" id="img-pg-1-1" style="background-image: url('img/page1/schiebetore-line-hauptbild.jpg');">
									<p>
										<span class="span1">SCHIEBETORE</span> <span class="span2">ab 509 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageOne" id="img-pg-1-2" style="background-image: url('img/page1/modern_line_clean_notext.jpg');">
									<p>
										<span class="span1">MODERN LINE</span> <span class="span2">ab 86 &euro;*</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageOne" id="img-pg-1-3" style="background-image: url('img/page1/exclusiv-line-1.jpg');">
									<p>
										<span class="span1">INDIVIDUAL LINE</span> <span class="span2">ab 249 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageOne" id="img-pg-1-4" style="background-image: url('img/page1/basic_line_clean_notext.jpg');">
									<p>
										<span class="span1">BASIC LINE</span> <span class="span2">ab 18 &euro;*</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					
				<!--page 2-->
					<div class="col-lg-12 all-contents" id="content-btn-2" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading">
									WELCHER ZAUN DARF ES GENAU SEIN?
								</p> 
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-1" style="background-image: url('img/page2/DSC_1269-560x315.jpg');">
									<p>
										<span class="span1">NIMBUS</span> <span class="span2">ab 155 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-2" style="background-image: url('img/page2/dsc_1042-560x315.jpg');">
									<p>
										<span class="span1">OPACUS</span> <span class="span2">ab 139 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-3" style="background-image: url('img/page2/DSC_1277-560x315.jpg');">
									<p>
										<span class="span1">CUMULUS</span> <span class="span2">ab 106 &euro;*</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-4" style="background-image: url('img/page2/DSC_0816-560x315.jpg');">
									<p>
										<span class="span1">PILEUS</span> <span class="span2">ab 111 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-5" style="background-image: url('img/page2/Fractus-42-560x315.jpg');">
									<p>
										<span class="span1">FRACTUS</span> <span class="span2">ab 118 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-6" style="background-image: url('img/page2/Incus-01-560x315.jpg');">
									<p>
										<span class="span1">INCUS</span> <span class="span2">ab 103 &euro;*</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-7" style="background-image: url('img/page2/06ambus-560x315.jpg');">
									<p>
										<span class="span1">AMBUS</span> <span class="span2">ab 175 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-8" style="background-image: url('img/page2/01-Duplikus-Slider-560x315.jpg');">
									<p>
										<span class="span1">DUPLICUS</span> <span class="span2">ab 108 &euro;*</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageTwo" id="img-pg-2-9" style="background-image: url('img/page2/DSC_0587-383x216.jpg');">
									<p>
										<span class="span1">CIRRUS</span> <span class="span2">ab 86 &euro;*</span>
									</p>
								</div>
							</div>
						</div>
					</div>
					
					<!--page 3-->
					<div class="col-lg-12 all-contents" id="content-btn-3" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading">
									WELCHE FARBE SOLL IHR ZAUN BEKOMMEN?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-1" style="background-image: url('img/page3/1.jpg');">
									<p>
										<span class="span1">MODERN</span><br><span class="span2">Feuerverzinkt</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-2" style="background-color: #08411d;">
									<p>
										<span class="span1">RAL 6005</span><br><span class="span2">Moosgrün</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-3" style="background-color: #2d313b;">
									<p>
										<span class="span1">RAL 7016</span><br><span class="span2">Anthrazitgrau</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-4" style="background-color: #000000;">
									<p>
										<span class="span1">RAL 9005</span><br><span class="span2">Tiefschwarz</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-5" style="background-color: #95937f;">
									<p>
										<span class="span1">RAL 7030</span><br><span class="span2">Steingrau</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-6" style="background-color: #300000;">
									<p>
										<span class="span1">RAL 8017</span><br><span class="span2">Schokoladenbraun</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-7" style="background-color: #530004;">
									<p>
										<span class="span1">MODERN</span><br><span class="span2">Braun</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThree" id="img-pg-3-8" style="background-color: #161922;">
									<p>
										<span class="span1">MODERN</span><br><span class="span2">Anthrazit</span>
									</p>
								</div>
							</div>
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageThreeInputColor" id="img-pg-3-9">
									
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
												<span class="span3">SONDERFARBE</span> <span class="span4">RAL</span>
											</div>
											<div class="col-xs-12 col-sm-6 col-md-12 col-lg-12">
												<input type="text" id="heirral" placeholder="Hier bitte RAL-Wert eintragen..." />
											</div>
											<div classcol-md-12 col-lg-12">
												<button class="continueBtn" id="weiter-3">Weiter >>></button>
											</div>
										</div>
									
								</div>
							</div>
						</div>
					</div>
					
					<!--page 4-->
					<div class="col-lg-12 all-contents" id="content-btn-4" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading" id="headingdesktop">
									WELCHE MASSE UND BESONDERHEITEN SOLL IHR ZAUN HABEN?
								</p>
								<p class="heading" id="headingmobile">
									MASSE UND BESONDERHEITEN?
								</p>
							</div>
						</div>
						<div class="row pageFour">
							<div class="col-md-6 col-lg-7">
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="imagesPageFour">
											<img src="img/page4/silhouette.jpg" class="people" />
										</div>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<div class="row">
											<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
												<div class="imagesPageFour" id="img-pg-4-1" style="">
													<img src="img/page4/scale.jpg" class="scale" />
												</div>
											</div>
											<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
												<div class="imagesPageFour" id="img-pg-4-1" style="">
													<p>
														<input type=range min=0 max=5 value=0 step=0.1 orient="vertical" id="rangeslider">
														<datalist id=tickmarks>
														<?php for($i=0; $i<100; $i++) { ?>
														<option><?php echo $i; ?></option>
														<?php } ?>
														</datalist>
													</p>
												</div>
											</div>
											<div class="col-xs-6 col-sm-6 col-md-6 col-lg-7" style="height: 300px;">
												<p id="showrange">Zaunhöhe: 0 m</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-5">
							    <div class="row">
									<div class="col-lg-12 pageFourHeading1">
										<p class="heading">
											BENÖTIGTE ZAUNLÄNGE 
										</p>
										<p class="subheading">
											Gesamtlänge Zaun und Tor
										</p>
									</div>
									<div class="col-lg-12">
										<div class="imagesPageFour" id="img-pg-4-2">
											<input type="text" placeholder="Hier bitte Länge eintragen..." id="gesamtlaengezaunundtor" />
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12 pageFourHeading2">
										<p class="heading">
											BESONDERHEITEN
										</p>
										<p class="subheading">
											Gibt es vor Ort Besonderheiten?
										</p>
									</div>
									<div class="col-lg-12">
										<div class="imagesPageFour" id="img-pg-4-3">
											<textarea placeholder="Anmerkungen bitte hier eintragen..." id="anmerkungenbittehiereintragen"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-4">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 5-->
					<div class="col-lg-12 all-contents" id="content-btn-5" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading">
									WELCHE FORM SOLL IHR ZAUN HABEN?
								</p>
							</div>
						</div>
						<div class="row pageFive">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageFive" id="img-pg-5-1">
									<p>
										<span class="span1 heading">OHNE BOGEN</span><br><span class="span2 subheading">Der Zaun verläuft gerade</span>
									</p>
									<div style="background-image: url('img/page5/zaunfeld_gerade_cirrus-1-550x310.jpg');">
									</div>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageFive" id="img-pg-5-2">
									<p>
										<span class="span1 heading">MIT BOGEN</span><br><span class="span2 subheading">Der Zaun verläuft in den Feldern im Bogen</span>
									</p>
									<div style="background-image: url('img/page5/zaunfeld_gebogen_cirrus-1-550x307.jpg');">
									</div>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-5">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 6-->
					<div class="col-lg-12 all-contents" id="content-btn-6" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading" id="headingdesktop">
									WELCHE MAßE UND BESONDERHEITEN SOLL IHR ZAUN HABEN?
								</p>
								<p class="heading" id="headingmobile">
									PFOSTEN, SPITZEN UND KAPPEN
								</p>
							</div>
						</div>
						<div class="row pageSix" id="section-1">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageSix0" id="img-pg-6-1">
									<p>
										<span class="span1 heading">PFOSTENMAß: </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix0" id="img-pg-6-2">
									<div class="mm60">
									    <img src="img/page6/1.jpg" />
									</div>
									<p>
										<span class="span1">60 x 60 mm </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix0" id="img-pg-6-3">
									<div class="mm80">
									    <img src="img/page6/1.jpg" />
									</div>
									<p>
										<span class="span1">80 x 80 mm </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix0" id="img-pg-6-4">
									<div class="mm100">
									    <img src="img/page6/1.jpg" />
									</div>
									<p>
										<span class="span1">100 x 100 mm </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix0" id="img-pg-6-5">
									<div class="mm120">
									    <img src="img/page6/1.jpg" />
									</div>
									<p>
										<span class="span1">120 x 120 mm </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix0" id="img-pg-6-6">
									<div class="gemauert">
									    <img src="img/page6/brick.jpg" />
									</div>
									<p>
										<span class="span1">gemauert </span>
									</p>
								</div>
							</div>
						</div>
						<div class="row" id="section-2">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageSix1" id="img-pg-6-7">
									<p>
										<span class="span1 heading">SPITZEN: </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-8">
									<div>
									    <img src="img/page6/1b.jpg"/>
									</div>
									<p>
										<span class="span1">P0 </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-9">
									<div>
									    <img src="img/page6/2b.jpg"/>
									</div>
									<p>
										<span class="span1">P1 </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-10">
									<div>
									    <img src="img/page6/3b.jpg"/>
									</div>
									<p>
										<span class="span1">P2 </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-11">
									<div>
									    <img src="img/page6/4b.jpg"/>
									</div>
									<p>
										<span class="span1">P3 </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-12">
									<div>
									    <img src="img/page6/5b.jpg"/>
									</div>
									<p>
										<span class="span1">P4 </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix1" id="img-pg-6-13">
									<div>
									    <img src="img/page6/6b.jpg"/>
									</div>
									<p>
										<span class="span1">P5 </span>
									</p>
								</div>
							</div>
						</div>
						<div class="row" id="section-3">
							<div class="col-md-4 col-lg-4">
								<div class="imagesPageSix2" id="img-pg-6-14">
									<p>
										<span class="span1 heading">KAPPEN </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix2" id="img-pg-6-15">
									<div>
									    <img src="img/page6/1c.jpg"/>
									</div>
									<p>
										<span class="span1">Kappe<br>PVC </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix2" id="img-pg-6-16">
									<div>
									    <img src="img/page6/2c.jpg"/>
									</div>
									<p>
										<span class="span1">Kappe<br>Metall </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix2" id="img-pg-6-17">
									<div>
									    <img src="img/page6/3c.jpg"/>
									</div>
									<p>
										<span class="span1">Kegel<br>Metall </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix2" id="img-pg-6-18">
									<div>
									    <img src="img/page6/4c.jpg"/>
									</div>
									<p>
										<span class="span1">Kugel<br>Metall </span>
									</p>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
								<div class="imagesPageSix2" id="img-pg-6-19">
									<div>
									    <img src="img/page6/5c.jpg"/>
									</div>
									<p>
										<span class="span1">LED<br>Kappe </span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-6">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 7-->
					<div class="col-lg-12 all-contents" id="content-btn-7" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading" id="headingdesktop">
									SOLL IHR ZAUN RASENKANTENSTEINE HABEN?
								</p>
								<p class="heading" id="headingmobile">
									MIT ODER OHNE RASENKATE?
								</p>
							</div>
						</div>
						<div class="row pageSeven">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageSeven" id="img-pg-7-1" style="background-image: url('img/page7/ohne-rasenkanten.jpg');">
									<p>
										<span class="span1">OHNE RASENKANTENSTEIN </span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageSeven" id="img-pg-7-2" style="background-image: url('img/page7/mit-rasenkanten.jpg');">
									<p>
										<span class="span1">MIT RASENKANTENSTEIN</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-7">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 8-->
					<div class="col-lg-12 all-contents" id="content-btn-8" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading" id="headingdesktop">
									ALLES ZU PFORTEN, BRIEFKASTEN UND KLINGELSCHILD/ -KNOPF?
								</p>
								<p class="heading" id="headingmobile">
									PFORTE, BRIEFKASTEN, KLINGELKNOPF
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight1" id="img-pg-8-1" style="background-image: url('img/page8/pforte_cirrus-550x456.jpg');">
									<p>
										<span class="span1">PFORTE STANDARD</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight1" id="img-pg-8-2" style="background-image: url('img/page8/pforte_cirrus-550x4561.jpg');">
									<p>
										<span class="span1">PFORTE ELEKTRISCH</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight2" id="img-pg-8-3" style="background-image: url('img/page8/DSC_0782.jpg');">
									<p>
										<span class="span1">BRIEFKASTEN</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight3" id="img-pg-8-4" style="background-image: url('img/page8/DSC_0046.jpg');">
									<p>
										<span class="span1">KLINGELKNOPF</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-8">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 8-->
					<!--
					<div class="col-lg-12 all-contents" id="content-btn-8" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading">
									ALLES ZU PFORTEN, BRIEFKASTEN UND KLINGELSCHILD/ -KNOPF?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight1" id="img-pg-8-1" style="background-image: url('img/page8/pforte_cirrus-550x456.jpg');">
									<p>
										<span class="span1">PFORTE STANDARD</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight1" id="img-pg-8-2" style="background-image: url('img/page8/pforte_cirrus-550x4561.jpg');">
									<p>
										<span class="span1">PFORTE ELEKTRISCH</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight2" id="img-pg-8-3" style="background-image: url('img/page8/DSC_0782.jpg');">
									<p>
										<span class="span1">BRIEFKASTEN</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageEight2" id="img-pg-8-4" style="background-image: url('img/page8/DSC_0046.jpg');">
									<p>
										<span class="span1">KLINGELKNOPF</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-8">weiter >>></button>
							</div>
						</div>
					</div>
					-->
					
					<!--page 9-->
					<div class="col-lg-12 all-contents" id="content-btn-9" style="display: none;">
						<div class="row">
							<div class="col-lg-12">
								<p class="heading" id="headingdesktop">
									WELCHE FORM SOLL IHR ZAUN HABEN?
								</p>
								<p class="heading" id="headingmobile">
									BENÖTIGEN SIE NOCH DAS PASSENDE TOR?
								</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageNine" id="img-pg-9-1">
									<div style="background-image: url('img/page9/schwenktor_cirrus-1-550x204.jpg');">
									</div>
									<p>
										<span class="span2 subheading">Schwenktor</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageNine" id="img-pg-9-2">
									<div style="background-image: url('img/page9/schiebetor_cirrus-1-550x166.jpg');">
									</div>
									<p>
										<span class="span2 subheading">Schiebetor</span>
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-lg-6">
								<div class="imagesPageNine">
									<p class="pageNineSecondPart">
										<span class="span1 heading">TOREINFAHRTSBREITE INM</span><br><span class="span1 subheading">Wie Breit ist Ihre Einfahrt?</span>
									</p>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
							
							</div>
						</div>
						<div class="row">	
							<div class="col-md-6 col-lg-6">
								<div class="pageNineSecondPart1" id="img-pg-9-3">
									<input type="text" class="doorWidth" placeholder="Hier bitte die Gesamtbreite eintragen..." />
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="pageNineSecondPart2" id="img-pg-9-4">
									<input type="checkbox" class="noDoorNeeded" /> &nbsp;&nbsp;&nbsp;&nbsp; <span class="subheading"> Kein Tor benötigt </span>
								</div>
							</div>
						</div>
						<div class="row">
						    <div class="col-lg-12">
							    <button class="weiterBtn" id="weiter-9">weiter >>></button>
							</div>
						</div>
					</div>
					
					<!--page 10-->
					<div class="col-lg-12 all-contents" id="content-btn-10" style="display: none;">
						<div class="row imagesPageTen">
						    <form action="submitcontactform.php" method="POST" id="contactform">
								<div class="col-md-6 col-lg-6" id="personalInfo">
									<div class="row">
										<div class="col-lg-12">
											<p class="heading">
												IHRE KONTAKTDATEN
											</p>
										</div>
										<div class="col-lg-12 otherinputs" style="display: none;">
											<div class="cdiv1"></div>
											<div class="cdiv2"></div>
											<div class="cdiv3"></div>
											<div class="cdiv4">
												4: <input type="text" name="step4input1" id="input1">
												<input type="text" name="step4input2" id="input2">
												<input type="text" name="step4input3" id="input3">
											</div>
											<div class="cdiv5"></div>
											<div class="cdiv6">
												<div class="cdiv60">
												
												</div>
												<div class="cdiv61">
												
												</div>
												<div class="cdiv62">
												
												</div>
											</div>
											<div class="cdiv7"></div>
											<div class="cdiv8">
												<div class="cdiv81">
																
												</div>
												<div class="cdiv82">
																
												</div>
												<div class="cdiv83">
																
												</div>
											</div>
											<div class="cdiv9">
												<div class="cdiv91">
																
												</div>
												<div class="cdiv92">
																
												</div>
												<div class="cdiv93">
																
												</div>
											</div>
											<div class="cdiv10"></div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<label class="subheading">Vorname</label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<input type="text" name="vorname" required="" />
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<label class="subheading">Nachname</label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<input type="text" name="nachname" required="" />
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<label class="subheading">Telefon</label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<input type="text" name="telefon" required="" />
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<label class="subheading">E-Mail-Adresse</label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<input type="email" name="emailaddress" required="" />
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
													<div class="row">
														<div class="col-lg-12">
															<label class="subheading">Bevorzugte Kontaktaufnahme</label>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<input type="text" name="bevorzugtekontaktaufnahme" required="" />
														</div>
													</div>
												</div>
											
												<div class="col-xs-6 col-sm-6 col-md-12 col-lg-12">
													<div class="row">
														<div class="col-lg-12">
															<label class="subheading">Bevorzugte Zeit</label>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-12">
															<input type="text" name="bevorzugtezeit" required="" />
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
								<div class="col-md-6 col-lg-6" id="comments">
									<div class="row">
										<div class="col-lg-12">
											<p class="heading">
												IHRE NACHRICHT/ANMERKUNGEN
											</p>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<label class="subheading"> </label>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-12">
													<textarea placeholder="Ihre Nachricht an uns..." name="textcomment"></textarea>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<input type="checkbox" name="agbaccept" required="" /> &nbsp;&nbsp;&nbsp;&nbsp; <span class="subheading">Ich akzeptiere die <span class="heading">AGB</span>. Zusätzlich möchte ich den
	Newsletter abboniert.</span>
												</div>
											</div>
										</div>
										<div class="col-lg-12">
											<div class="row">
												<div class="col-lg-12">
													<button class="subheading">Jetzt kostenlos Angebot anfordern!</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</form>
							
						</div>
					</div>
				</div>
			</div>
			
			<div id="col3" class="col-lg-12"></div>
			
		  </div>
		  
		  <div class="row">
				<div class="thankyoumessage" style="display: none;">
					<p class="heading">VIELEN DANK FÜR IHRE ANFRAGE!</p>
					<p class="subheading">Wir melden uns umgehend bei Ihnen.</p>
					<button>NEUE ANFRAGE STELLEN!</button>
				</div>
		  </div>
		</div>
	</div>
	
	<!--custom js-->
	<script src="js/contactform.js"></script>
	
</body>

</html>