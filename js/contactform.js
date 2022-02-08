$(document).ready(function(){
	var countPageNumber = 1;
	
	$(window).resize(function() {
		if ($(window).width() > 991) {
			$('.section-left').css('height', $('.section-right').height()+'px');
		} else {
			$('.section-left').css('height', 'auto');
		}
	});

	if ($(window).width() > 991) {
		$('.section-left').css('height', $('.section-right').height()+'px');
	}
	
	$('.section-left .btns').on('click', function() {
		$('.section-left .btns').removeClass('active');
		
		var getId = $(this).attr('id');
		var idArray = getId.split("-");
		$('.all-contents').css('display', 'none');
		for(var i=1; i<=idArray[1]; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-'+getId).css('display', 'block');
		
		if ($(window).width() > 991) {
			$('.section-left').css('height', $('.section-right').height()+'px');
		}
	});
	
	$('#weiter-3, #weiter-4, #weiter-5, #weiter-6, #weiter-7, #weiter-8, #weiter-9').on('click', function() {
		countPageNumber++;
		$('.section-left .btns').removeClass('active');
		var getWeiterId = $(this).attr('id');
		var getWeiterIdArr = getWeiterId.split('-');
		var nextpageNumber = parseInt(getWeiterIdArr[1])+1;
		$('.all-contents').css('display', 'none');
		for(var i=1; i<=nextpageNumber; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-'+(nextpageNumber)).css('display', 'block');
		
		if ($(window).width() > 991) {
			$('.section-left').css('height', $('.section-right').height()+'px');
		}
	});
	
	
	
	$('#btn-1').on('click', function() {
		$('#left-arrow').css('display', 'none');
		$('#right-arrow').css('display', 'none');
	});
	$('#btn-2, #btn-3, #btn-4, #btn-5, #btn-6, #btn-7, #btn-8, #btn-9, #btn-10').on('click', function() {
		$('#left-arrow').css('display', 'inline-block');
		var getWeiterId = $(this).attr('id');
		var getWeiterIdArr = getWeiterId.split('-');
		if ($(window).width() < 991) {
			if(getWeiterIdArr[1] == "10") {
				$('#right-arrow').css('display', 'none');
			} else {
				$('#right-arrow').css('display', 'inline-block');
			}
		}
		var getIdNumber = $(this).attr('id').split("-");
		countPageNumber = getIdNumber[1];
	});
	
	$('#left-arrow').on('click', function() {
		countPageNumber--;
		if(countPageNumber > 0) {
			$('.section-left .btns').removeClass('active');
			$('.all-contents').css('display', 'none');
			for(var i=1; i<=countPageNumber; i++) {
				$('.section-left #btn-'+i).addClass('active');
			}
			$('#content-btn-'+countPageNumber).css('display', 'block');
			$('.section-left').css('height', $('.section-right').height()+'px');
			
			if ($(window).width() < 991) {
				if(countPageNumber < 10) {
					$('#right-arrow').css('display', 'block');
				}
			}
			
			if(countPageNumber == 1) {
				$('#left-arrow').css('display', 'none');
				$('#right-arrow').css('display', 'none');
			}
		} 
	});
	$('#right-arrow').on('click', function() {
		countPageNumber++;
		if(countPageNumber < 11) {
			$('.section-left .btns').removeClass('active');
			$('.all-contents').css('display', 'none');
			for(var i=1; i<=countPageNumber; i++) {
				$('.section-left #btn-'+i).addClass('active');
			}
			$('#content-btn-'+countPageNumber).css('display', 'block');
			$('.section-left').css('height', $('.section-right').height()+'px');
			
			if(countPageNumber == 10) {
				$('#right-arrow').css('display', 'none');
			}
		} 
	});
	
	// page 1
	$('.imagesPageOne').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .pageOneInput').remove();
			$('#contactform .cpageOneInput').remove();
		} else {
			$('.imagesPageOne p').removeClass('active');
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .pageOneInput').remove();
			$('#contactform .cpageOneInput').remove();
			if ($(window).width() > 991) {
				$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div1').append('<div class="pageOneInput"><label class="numbers">1</label> <label>Zaunlinie: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv1').append('<div class="cpageOneInput"><span>1</span> <label>Zaunlinie: </label> <input type="input" name="zaunlinie" value="Zaunlinie: '+$('#'+getId+' p .span1').text()+'" /></div>');
			setTimeout(function(){ 
				$('.all-contents').css('display', 'none');
				$('#content-btn-2').css('display', 'block');
				$('#left-arrow').css('display', 'inline-block');
				if ($(window).width() > 991) {
					$('.section-left').css('height', $('.section-right').height()+'px');
				}
				for(var i=1; i<=2; i++) {
					$('.section-left #btn-'+i).addClass('active');
				}
			}, 500);
			
		}
	});
	// left link page 1
	$(document).on('click', '.pageOneInput', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'none');
		for(var i=1; i<=1; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-1').css('display', 'block');
	});
	// page 2
	$('.imagesPageTwo').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .pageTwoInput').remove();
			$('#contactform .cpageTwoInput').remove();
		} else {
			$('.imagesPageTwo p').removeClass('active');
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .pageTwoInput').remove();
			$('#contactform .cpageTwoInput').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div2').append('<div class="pageTwoInput"><label class="numbers">2</label> <label>Zaunmodell: </label> <a>'+$('#'+getId+' p .span1').text()+'<a></div>');
			$('#contactform .cdiv2').append('<div class="cpageTwoInput"><span>2</span> <label>Zaunmodell: </label> <input type="input" name="zaunmodell" value="Zaunmodell: '+$('#'+getId+' p .span1').text()+'" /></div>');
			setTimeout(function(){ 
				$('.all-contents').css('display', 'none');
				$('#content-btn-3').css('display', 'block');
				$('#left-arrow').css('display', 'inline-block');
				if ($(window).width() > 991) {
					$('.section-left').css('height', $('.section-right').height()+'px');
				}
				for(var i=1; i<=3; i++) {
					$('.section-left #btn-'+i).addClass('active');
				}
			}, 500);
		}
	});
	// left link page 2
	$(document).on('click', '.pageTwoInput', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=2; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-2').css('display', 'block');
	});
	// page 3
	$('.imagesPageThree').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .pageThreeInput').remove();
			$('#contactform .cpageThreeInput').remove();
		} else {
			$('.imagesPageThree p').removeClass('active');
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .pageThreeInput').remove();
			$('#contactform .cpageThreeInput').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div3').append('<div class="pageThreeInput"><label class="numbers">3</label> <label>Zaunfarbe: </label> <a>'+$('#'+getId+' p .span1').text()+' '+$('#'+getId+' p .span2').text()+'</a></div>');
			$('#contactform .cdiv3').append('<div class="cpageThreeInput"><span>3</span> <label>Zaunfarbe: </label> <input type="input" name="zaunfarbe" value="Zaunfarbe: '+$('#'+getId+' p .span1').text()+' '+$('#'+getId+' p .span2').text()+'" /></div>');
			setTimeout(function(){ 
				$('.all-contents').css('display', 'none');
				$('#content-btn-4').css('display', 'block');
				$('#left-arrow').css('display', 'inline-block');
				if ($(window).width() > 991) {
					$('.section-left').css('height', $('.section-right').height()+'px');
				}
				for(var i=1; i<=4; i++) {
					$('.section-left #btn-'+i).addClass('active');
				}
			}, 500);
		}
	});
	$(".imagesPageThreeInputColor #heirral").on("propertychange change keyup paste input", function(){
		if($('.imagesPageThreeInputColor input').val() == "") {
			$('.imagesPageThree p').removeClass('active');
			$('#showformdetails .pageThreeInput').remove();
			$('#contactform .cpageThreeInput').remove();
		} else {
			$('.imagesPageThree p').removeClass('active');
			$('#showformdetails .pageThreeInput').remove();
			$('#contactform .cpageThreeInput').remove();
			$('#showformdetails .div3').append('<div class="pageThreeInput"><label class="numbers">3</label> <label>Zaunfarbe: </label> <a>'+$('.imagesPageThreeInputColor input').val()+'</a></div>');
			$('#contactform .cdiv3').append('<div class="cpageThreeInput"><span>3</span> <label>Zaunfarbe: </label> <input type="input" name="zaunfarbe" value="Zaunfarbe: '+$('.imagesPageThreeInputColor input').val()+'" /></div>');
		}
	});
	// left link page 3
	$(document).on('click', '.pageThreeInput', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=3; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-3').css('display', 'block');
	});
	
	//page 4
	$(document).on("change input", '#rangeslider', function(){
		$('#input1').val('Zaunhöhe: '+$(this).val()+' m');
		$('#showrange').text('Zaunhöhe: '+$(this).val()+' m');
		if($(this).val() != "" && $(this).val() != '0') {
			$('#showformdetails .pageFourInput1').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div4').append('<div class="pageFourInput1"><label class="numbers">4.a</label> <label>Zaunhöhe: </label> <a>'+$(this).val()+' m </a></div>');
		} else {
			$('#showformdetails .pageFourInput1').remove();
		}
	});
	$("#gesamtlaengezaunundtor").on("propertychange change keyup paste input", function(){
		$('#input2').val('Gesamtlänge: '+$(this).val());
		if($(this).val() != "") {
			$('#showformdetails .pageFourInput2').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div4').append('<div class="pageFourInput2"><label class="numbers">4.b</label> <label>Gesamtlänge: </label> <a>'+$(this).val()+'</a></div>');
		} else {
			$('#showformdetails .pageFourInput2').remove();
		}
	});
	$("#anmerkungenbittehiereintragen").on("propertychange change keyup paste input", function(){
		$('#input3').val('Besonderheiten: '+$(this).val());
		if($(this).val() != "") {
			$('#showformdetails .pageFourInput3').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div4').append('<div class="pageFourInput3"><label class="numbers">4.c</label> <label>Besonderheiten: </label> <a>'+$(this).val()+'</a></div>');
		} else {
			$('#showformdetails .pageFourInput3').remove();
		}
	});
	// left link page 4
	$(document).on('click', '.pageFourInput1, .pageFourInput2, .pageFourInput3', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=4; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-4').css('display', 'block');
	});
	
	// page 5
	$('.imagesPageFive').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' div').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' div').removeClass('active');
			$('#showformdetails .pageFiveInput').remove();
			$('#contactform .cpageFiveInput').remove();
		} else {
			$('.imagesPageFive div').removeClass('active');
			$('#'+getId+' div').addClass('active');
			$('#showformdetails .pageFiveInput').remove();
			$('#contactform .cpageFiveInput').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div5').append('<div class="pageFiveInput"><label class="numbers">5</label> <label>Zaunform: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv5').append('<div class="cpageFiveInput"><span>5</span> <label>Zaunform: </label> <input type="input" name="zaunform" value="Zaunform: '+$('#'+getId+' p .span1').text()+'" /></div>');
			setTimeout(function(){ 
				$('.all-contents').css('display', 'none');
				$('#content-btn-6').css('display', 'block');
				$('#left-arrow').css('display', 'inline-block');
				if ($(window).width() > 991) {
					$('.section-left').css('height', $('.section-right').height()+'px');
				}
				for(var i=1; i<=6; i++) {
					$('.section-left #btn-'+i).addClass('active');
				}
			}, 500);
		}
	});
	// left link page 5
	$(document).on('click', '.pageFiveInput', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=5; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-5').css('display', 'block');
	});
	
	// page 6
	$('.imagesPageSix0').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' img').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' img').removeClass('active');
			$('#showformdetails .div60 .pageSixInput0').remove();
			$('#contactform .cdiv60 .cpageSixInput0').remove();
		} else {
			$('.imagesPageSix0 img').removeClass('active');
			$('#'+getId+' img').addClass('active');
			$('#showformdetails .div60 .pageSixInput0').remove();
			$('#contactform .cdiv60 .cpageSixInput0').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div6 .div60').append('<div class="pageSixInput0"><label class="numbers">6.a</label> <label>Pfostenmaße: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv6 .cdiv60').append('<div class="cpageSixInput0"><span>6.a</span> <label>Pfostenmaße: </label> <input type="input" name="pfosten" value="Pfostenmaße: '+$('#'+getId+' p .span1').text()+'" /></div>');
		}
	});
	$('.imagesPageSix1').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' img').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' img').removeClass('active');
			$('#showformdetails .div61 .pageSixInput1').remove();
			$('#contactform .cdiv61 .cpageSixInput1').remove();
		} else {
			$('.imagesPageSix1 img').removeClass('active');
			$('#'+getId+' img').addClass('active');
			$('#showformdetails .div61 .pageSixInput1').remove();
			$('#contactform .cdiv61 .cpageSixInput1').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div6 .div61').append('<div class="pageSixInput1"><label class="numbers">6.b</label> <label>Spitzen: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv6 .cdiv61').append('<div class="cpageSixInput1"><span>6.b</span> <label>Spitzen: </label> <input type="input" name="spitzen" value="Spitzen: '+$('#'+getId+' p .span1').text()+'" /></div>');
		}
	});
	$('.imagesPageSix2').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' img').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' img').removeClass('active');
			$('#showformdetails .div62 .pageSixInput2').remove();
			$('#contactform .cdiv62 .cpageSixInput2').remove();
		} else {
			$('.imagesPageSix2 img').removeClass('active');
			$('#'+getId+' img').addClass('active');
			$('#showformdetails .div62 .pageSixInput2').remove();
			$('#contactform .cdiv62 .cpageSixInput2').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div6 .div62').append('<div class="pageSixInput2"><label class="numbers">6.c</label> <label>Kappen: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv6 .cdiv62').append('<div class="cpageSixInput2"><span>6.c</span> <label>Kappen: </label> <input type="input" name="kappen" value="Kappen: '+$('#'+getId+' p .span1').text()+'" /></div>');
		}
	});
	// left link page 6
	$(document).on('click', '.pageSixInput0, .pageSixInput1, .pageSixInput2', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=6; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-6').css('display', 'block');
	});
	
	// page 7
	$('.imagesPageSeven').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .pageSevenInput').remove();
			$('#contactform .cpageSevenInput').remove();
		} else {
			$('.imagesPageSeven p').removeClass('active');
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .pageSevenInput').remove();
			$('#contactform .cpageSevenInput').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div7').append('<div class="pageSevenInput"><label class="numbers">7</label> <label>Rasenkantenstein: </label> <a>'+$('#'+getId+' p .span1').text()+'</a></div>');
			$('#contactform .cdiv7').append('<div class="cpageSevenInput"><span>7</span> <label>Rasenkantenstein: </label> <input type="input" name="rasenkantenstein" value="Rasenkantenstein: '+$('#'+getId+' p .span1').text()+'" /></div>');
			setTimeout(function(){ 
				$('.all-contents').css('display', 'none');
				$('#content-btn-8').css('display', 'block');
				$('#left-arrow').css('display', 'inline-block');
				if ($(window).width() > 991) {
					$('.section-left').css('height', $('.section-right').height()+'px');
				}
				for(var i=1; i<=8; i++) {
					$('.section-left #btn-'+i).addClass('active');
				}
			}, 500);
		}
	});
	// left link page 7
	$(document).on('click', '.pageSevenInput', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=7; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-7').css('display', 'block');
	});
	
	// page 8
	$('.imagesPageEight1').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .div8 .div81 .section-pforte').remove();
			$('#contactform .cdiv8 .cdiv81.csection-pforte').remove();
		} else {
			$('.imagesPageEight1 p').removeClass('active');
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .div81 .section-pforte').remove();
			$('#contactform .cdiv81 .csection-pforte').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div8 .div81').append('<div class="section-pforte"><label class="numbers">8.a</label><a> '+$('#'+getId+' p .span1').text()+': Ja</a></div>');
			$('#contactform .cdiv8 .cdiv81').append('<div class="csection-pforte"><span>8.a</span><input type="input" name="page81" value="'+$('#'+getId+' p .span1').text()+': Ja" /></div>');
		}
	});
	$('.imagesPageEight2').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .div8 .div82 .section-'+getId).remove();
			$('#contactform .cdiv8 .cdiv82 .csection-'+getId).remove();
		} else {
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .div82 .section-'+getId).remove();
			$('#contactform .cdiv82 .csection-'+getId).remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div8 .div82').append('<div class="section-'+getId+'" id="briefkasten"><label class="numbers">8.b</label> <label>'+$('#'+getId+' p .span1').text()+': </label> <a>Ja</a></div>');
			$('#contactform .cdiv8 .cdiv82').append('<div class="csection-'+getId+'"><span>8.b</span> <label>'+$('#'+getId+' p .span1').text()+': </label> <input type="input" name="page82" value="'+$('#'+getId+' p .span1').text()+': Ja" /></div>');
		}
	});
	$('.imagesPageEight3').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' p').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' p').removeClass('active');
			$('#showformdetails .div8 .div83 .section-'+getId).remove();
			$('#contactform .cdiv8 .cdiv83 .csection-'+getId).remove();
		} else {
			$('#'+getId+' p').addClass('active');
			$('#showformdetails .div83 .section-'+getId).remove();
			$('#contactform .cdiv83 .csection-'+getId).remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div8 .div83').append('<div class="section-'+getId+'" id="klingelknopf"><label class="numbers">8.c</label> <label>'+$('#'+getId+' p .span1').text()+': </label> <a>Ja</a></div>');
			$('#contactform .cdiv8 .cdiv83').append('<div class="csection-'+getId+'"><span>8.c</span> <label>'+$('#'+getId+' p .span1').text()+': </label> <input type="input" name="page83" value="'+$('#'+getId+' p .span1').text()+': Ja" /></div>');
		}
	});
	// left link page 8
	$(document).on('click', '.section-pforte, #briefkasten, #klingelknopf', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=8; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-8').css('display', 'block');
	});
	
	// page 9
	$('.imagesPageNine').on('click', function() {
		var getId = $(this).attr('id');
		var getClass = $('#'+getId+' div').attr('class');
		if(getClass == 'active') {
			$('#'+getId+' div').removeClass('active');
			$('#showformdetails .div91 .pageNineInput1').remove();
			$('#contactform .cdiv91 .cpageNineInput1').remove();
		} else {
			$('.imagesPageNine div').removeClass('active');
			$('#'+getId+' div').addClass('active');
			$('#showformdetails .div91 .pageNineInput1').remove();
			$('#contactform .cdiv91 .cpageNineInput1').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div9 .div91').append('<div class="pageNineInput1"><label class="numbers">9.a</label> <label>Tor: </label> <a>'+$('#'+getId+' p .span2').text()+'</a></div>');
			$('#contactform .cdiv9 .cdiv91').append('<div class="cpageNineInput1"><span class="stepNumberNine">9.a</span> <label>Tor: </label> <input type="input" name="tor" value="Tor: '+$('#'+getId+' p .span2').text()+'" /></div>');
		}
	});
	$(".noDoorNeeded").on("propertychange change keyup paste input", function(){
		if($('.noDoorNeeded').is(':checked')) {
			$('#showformdetails .div93 .pageNineInput3').remove();
			$('#contactform .cdiv93 .cpageNineInput3').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div9 .div93').append('<div class="pageNineInput3"><label class="numbers">9.c</label> <label>Kein Tor benötigt</label></div>');
			$('#contactform .cdiv9 .cdiv93').append('<div class="cpageNineInput3"><span>9.c</span> <label>Kein Tor benötigt</label><input type="input" name="keintorbenoetigt" value="Kein Tor benötigt: ja" /></div>');
		} else {
			$('#showformdetails .div93 .pageNineInput3').remove();
			$('#contactform .cdiv93 .cpageNineInput3').remove();
		}
	});
	$(".doorWidth").on("propertychange change keyup paste input", function(){	
		if($('.doorWidth').val() != "") {
			$('#showformdetails .div92 .pageNineInput2').remove();
			$('#contactform .cdiv92 .cpageNineInput2').remove();
			if ($(window).width() > 991) {
			$('#contactFormHeading').css('display', 'block');
			}
			$('#showformdetails .div9 .div92').append('<div class="pageNineInput2"><label class="numbers">9.b</label> <label>Einfahrtsbreite: </label> <a>'+$('.doorWidth').val()+'</a></div>');
			$('#contactform .cdiv9 .cdiv92').append('<div class="cpageNineInput2"><span>9.b</span> <label>Einfahrtsbreite: </label> <input type="input" name="einfahrtsbreite" value="Einfahrtsbreite: '+$('.doorWidth').val()+'" /></div>');
		} else {
			$('#showformdetails .div92 .pageNineInput2').remove();
			$('#contactform .cdiv92 .cpageNineInput2').remove();
		}
	});
	// left link page 9
	$(document).on('click', '.pageNineInput1, .pageNineInput2, .pageNineInput3', function() {
		$('.section-left .btns').removeClass('active');
		$('.all-contents').css('display', 'none');
		$('#left-arrow').css('display', 'inline-block');
		for(var i=1; i<=9; i++) {
			$('.section-left #btn-'+i).addClass('active');
		}
		$('#content-btn-9').css('display', 'block');
	});
	
	$('input[type="range"]').change(function () {
    var val = ($(this).val() - $(this).attr('min')) / ($(this).attr('max') - $(this).attr('min'));
    
    $(this).css('background-image',
                '-webkit-gradient(linear, left top, right top, '
                + 'color-stop(' + val + ', white), '
                + 'color-stop(' + val + ', white)'
                + ')'
                );
	});
	
	
	
	$('.thankyoumessage button').on('click', function() {
		location.reload();
	});
	
	
	$("#contactform").submit(function(e) {
		var form = $(this);
		var url = form.attr('action');

		$.ajax({
			   type: "POST",
			   url: url,
			   data: form.serialize(), // serializes the form's elements.
			   success: function(data)
			   {
				   $('#bodycontainer').css('display', 'none');
				   $('.thankyoumessage').css('display', 'block');
			   }
			 });

		e.preventDefault(); // avoid to execute the actual submit of the form.
	});
});