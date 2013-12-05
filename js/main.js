 $(document).ready(function() {
	  $('.dshbrd .zip').keydown(function() {
		  $('.submit').fadeIn().css('display','block');
	  });
	  
	  $(".submit").keyup(function(e)
		{
    		if (/\D/g.test(this.value))
    		{
        // Filter non-digits from input value.
        	this.value = this.value.replace(/\D/g, '');
    		}
			
		});

	 $(".submit").keypress(function(e){
         var k=e.keyCode || e.which;
         if(k==13){
             e.preventDefault();
         }
     });


   $(".submit]").click(function(e){
		e.preventDefault();
		zipcode = $('.zip').val();
		getContent(zipcode);
		$('header').addClass('submitted');
		$('.logo').addClass('logosubmitted');
		$('.welcomecontent').fadeOut();
		$('.dshbrd').addClass('dshbrdsubmitted');
		$('.dshbrd form label').fadeOut();
		$('input.submit').val('Go!');
	});
	
   	function getContent(zipcode){
		$.ajax({ url: '/dshbrd/php/weather.php',
         data: "zip_code=" + zipcode,
		 dataType: "xml",
         type: 'POST',
		 async: 'false',
         success: parseWeatherXml
		});
	}
	

		/*
		 $.ajax({ url: '/dshbrd/php/movies.php',
         data: 'zip_code',
		 dataType: "xml",
         type: 'POST',
		 async: 'false',
         success: parseWeatherXml
		});*/
	
	
	function parseWeatherXml(xml){
		$(xml).find("channel").each(function(){
			//title = $(this).find('title').text();
	
			title = $(this).find("title").eq(0).text();
			fixedtitle = title.substr(title.indexOf('- ')+2);
			console.log(fixedtitle);


		});
	}
	
	
 });