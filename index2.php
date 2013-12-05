<?php session_start() ?> 
<!DOCTYPE html>
<!--For anyone who looks at this I encourage you to contact me if there's anything that can be fixed/improved! Hopefully my code doesn't offend your eyes too much =]-->

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<title>The Portfolio of Eric Barber - Front End Web Designer & Developer </title>

<!--Meta-->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width; initial-scale=1.0">
<meta name="keywords" content="Eric Barber, erikxcore,f0xxx,f0xx, portfolio, designer, web designer, graphic designer, web developer, front-end developer, new jersey, new york, pennslyvania">
<meta name="description" content="Hi! My name is Eric - and I am a young web designer / developer currently based in Northern New Jersey!">
<meta name="author" content="Eric Barber">

<!--Favicon-->
<link rel="shortcut icon" href="favicon.ico" />    

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]--> 
    
<!--Style-->
<link href="css/portfolio.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lobster|Raleway:100|Arvo:400,700' rel='stylesheet'>


</head>

<body>

<header>

<!--Branding-->
<div class="headerleft">
<img class ="circlelogo" src="http://placehold.it/100x100" alt="Circle Logo"/>
<img class="namelogo" src="http://placehold.it/350x100" alt="Eric Barber logo"/>
</div>

<!--Navigation-->
<nav>
<ul id="nav"> <!--Needed for one page current navigation plugin-->
<li><a href="#homecontent">Home</a></li>
<li><a href="#aboutcontent">About</a></li>
<li><a href="#workcontent">Work</a></li>
<li><a href="#contactcontent">Contact</a></li>
</ul>
</nav>

</header>

<div id="fullwrapper"> <!--100%-->
    <section id="home"> <!--Home-->
    	<div id="homecontent">
       		<h1>Line 1.<br/>
      	  	Line 2.</h1>
        
     	 	<p>Hi.<br/>
      	  	Lorem ipsum, veni vedi vici lorem ipsum cenpis tax lorem lorem ipsum vedi words text and filler jargon.
       	 	</p>
        </div>
    </section>	
    
    <section id="about"> <!--About-->
    
   		<div id="aboutcontent">
        <section id="bio">
        	<h2>Who am I?</h2>
            	<div id="aboutleft">
                	<h3>The Nitty-Gritty</h3>
                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, eros id ultrices semper, nunc nunc rhoncus augue, sed tristique leo libero in lorem. In a pharetra ipsum. Praesent bibendum elit a sapien mattis venenatis. Proin ac tortor et augue bibendum scelerisque non ut erat. Phasellus velit metus, varius eget imperdiet vel, accumsan in neque. Nullam porta aliquet risus et molestie. Pellentesque metus nisl, feugiat sit amet varius in, posuere ac dolor. Mauris vitae leo ac felis laoreet tincidunt. In aliquam laoreet libero, ac interdum diam pharetra in. Donec massa neque, feugiat ut iaculis ac, suscipit nec tortor. Praesent fermentum vulputate sodales. Suspendisse commodo tortor ac enim scelerisque varius dictum arcu accumsan. Quisque lobortis diam dignissim orci viverra id egestas tortor eleifend. Nam posuere congue nisi, ornare consequat urna mollis fermentum. Curabitur vitae nibh massa, sed fermentum sapien.
                    </p>
                    <figure>
                    	<img src="http://placehold.it/200" alt="Eric & Laura"/>
                    </figure>
                </div>
        </section>
        
           	<section id="skills">    
                <aside id="aboutright">
                	<h3>Skills</h3>
                      <ul class="graph-container">
                    	<li>
                      		  <span>SASS</span>
                    	<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>
                        </div>
                        </li> 
                                         
                        <li>
                      		  <span>PHP</span>
  							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>
                            </div>                       
                        </li>
                        
                        <li>
                      		  <span>jQuery</span>
 							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>   
                            </div>                     
                        </li>
                        
                        <li>
                      		  <span>CSS</span>
 							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>    
                            </div>                    
                        </li>
                        
                        <li>
                      		  <span>XML/XSLT</span>
  							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div> 
                            </div>                      
                        </li> 
                        <li>
                    <li>
                        <ul class="graph-marker-container">
                            <li style="bottom:25%;"><span>25%</span></li>
                            <li style="bottom:50%;"><span>50%</span></li>
                            <li style="bottom:75%;"><span>75%</span></li>
                            <li style="bottom:100%;"><span>100%</span></li>
                        </ul>
                    </li>
  </li>                                                             
  						</ul>
                        
                    <h3>Extra Credit</h3>
                    	<ul class="extra">
                        	<li class="music">Writing music</li>
                            <li class="adobe">Adobe Suite</li>
                            <li class="cms">CMS Systems</li>
                            <li class="photo">Photography</li>
                            <li class="oop">C#/.NET</li>
                        </ul>
                        
                    <span>To view my resume <a href="extra/ericbarberresume.pdf">click here!</a></span>
                
                </aside>
           	</section>
        </div>
    </section>	
    
    <section id="work"> <!--Portfolio-->
    	<div id="workcontent">
            	<div id="portfoliorain">
                <h2>Work - Make it rain!</h2>
					<div id="one">
                    <figure>
                    	<img src="http://placehold.it/100x80" alt="Cloud"/>
                    </figure>
						<div class="box box1 small">Box</div>
					</div>
                    
					<div id="two">
                    <figure>
                    	<img src="http://placehold.it/100x80" alt="Cloud"/>
                    </figure>
						<div class="box box2 small">Box</div>
					</div>
                    
					<div id="three">
                    <figure>
                    	<img src="http://placehold.it/100x80" alt="Cloud"/>
                    </figure>
						<div class="box box3 small">Box</div>
					</div>
                    
                    <div id="four">
                    <figure>
                    	<img src="http://placehold.it/100x80" alt="Cloud"/>
                    </figure>
						<div class="box box4 small">Box</div>
					</div>
                    
					<div id="five">
                    <figure>
                    	<img src="http://placehold.it/100x80" alt="Cloud"/>
                    </figure>
						<div class="box box5 small">Box</div>
					</div>
				</div> 
                
                <div id="portfoliogrid">
                <h2>Work</h2>
                
                <div id="menuwrapper">  
                	 <div id="menu">
                     
                <figure>
                <a href="#" class="menuitem"><img src="http://placehold.it/100x100" width="100" height="100" alt="Wordpress Theme" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Wordpress Theme.</a></span>
                </figcaption>
                </figure>
                
      			<figure>
                 <a href="#" class="menuitem"><img src="http://placehold.it/100x100" width="100" height="100" alt="OpenCart Theme" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Opencart Theme.</a></span>
                </figcaption>
                </figure> 
                
                <figure>   
				<a href="#" class="menuitem"><img src="http://placehold.it/100x100" width="100" height="100" alt="Concrete5 Theme" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Concrete5 Theme.</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img  src="http://placehold.it/100x100" width="100" height="100" alt="District 7" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">District 7</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img src="http://placehold.it/100x100" width="100" height="100" alt="FusionMS SharePoint Site" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">FusionMS</a></span>
                </figcaption>
                </figure>
                
               </div>
               </div>
               
               <div id="menuwrapper">
					<div id="menu">
                    
                <figure>
				 <a href="#" class="menuitem"><img  src="http://placehold.it/100x100" width="100" height="100" alt="FusionMS Proof of Concept Client Site" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">FusionMS P.o.C.</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img  src="http://placehold.it/100x100" width="100" height="100" alt="AFK Gamers Blog" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">AFK</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img  src="http://placehold.it/100x100" width="100" height="100" alt="Cuppycakes Branding" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Cuppycakes</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img  src="http://placehold.it/100x100" width="100" height="100" alt="Self Branding" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Self Branding</a></span>
                </figcaption>
                </figure>
                
                <figure>
				 <a href="#" class="menuitem"><img src="http://placehold.it/100x100" width="100" height="100" alt="Wine Product Design" /></a>
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Product Design 1</a></span>
                </figcaption>
                </figure>
                
                </div>
                </div>
                
                <div id="menuwrapper">
					<div id="menu">
                <figure>
				<img class="menuitem" src="http://placehold.it/100x100" width="100" height="100" alt="Gummy Bears Product Design" />
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Product Design 2</a></span>
                </figcaption>
                </figure>
                
                <figure>
                <img class="menuitem" src="http://placehold.it/100x100" width="100" height="100" alt="Poster Designs" />
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Poster Design</a></span>
                </figcaption>
                </figure>
                
                <figure>
				<img class="menuitem"  src="http://placehold.it/100x100" width="100" height="100" alt="Shirt Design" />
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Shirt Design</a></span>
                </figcaption>
                </figure>
                
                <figure>
				<img class="menuitem" src="http://placehold.it/100x100" width="100" height="100" alt="Logo Design" />
                <figcaption>
                <span><a class="lightbox" href="http://ericbarber.me/test/new/img/noise.png">Logos</a></span>
                </figcaption>
                </figure>
                
                </div>
                </div>
                
                </div>
                
                <div id="workbottomrain">
                	<span>Looking for an old-fashioned grid view of my work? <a id="gridview" href="#">Click here!</a></span>
                </div>
                
                <div id="workbottomgrid">
                	<span>Want the fancy schmancy view back? <a id="rainview" href="#">Click here!</a></span>
                </div>
        </div>
    </section>	
    
    <section id="contact"> <!--Contact Section Color-->
    	<div id="contactcontent">
        	<h2>Say Hi!</h2>
            <div id="contactleft">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, eros id ultrices semper, nunc nunc rhoncus augue, sed tristique leo libero in lorem. In a pharetra ipsum. Praesent bibendum elit a sapien mattis venenatis. Proin ac tortor et augue bibendum scelerisque non ut erat.</p>
				<div id="social">
                	<a href="#" class="facebook"></a>
                    <a href="#" class="twitter"></a>
                    <a href="#" class="tumblr"></a>
                    <a href="#" class="linkedin"></a>
				</div>
            </div>
         <section id="contactform">
            <aside id="contactright">
            <?php
			//init variables
			$cf = array();
			$sr = false;

			if(isset($_SESSION['cf_returndata'])){
    		$cf = $_SESSION['cf_returndata'];
    		$sr = true;
			}
			?>
            
            <ul id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
    		<li id="info">I didn't get your message :(. Maybe you can help by fixing these problems?</li>
    		<?php 
    		if(isset($cf['errors']) && count($cf['errors']) > 0) :
        	foreach($cf['errors'] as $error) :
    		?>
    		<li><?php echo $error ?></li>
    		<?php
        	endforeach;
    		endif;
    		?>
			</ul>
			<p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Message received!</p>

            <form action="php/process.php" method="post">
            	<fieldset>
                	<label for="name">Name:</label>
                    <input type="text" id="name" name="name" required placeholder="Smitty Jenkins" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>"/>
                    
                	<label for="email">Email:</label>
                    <input type="email" id="email" name="email" required placeholder="CoolPerson@CoolWebsite.com" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>"/>
                    
                	<label for="message">Message:</label>
                    <textarea id="message" name="message" required placeholder="Write me a message!">
                    <?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?>
                    </textarea>
                       
                    <input type="submit" value="Send"/>                
                </fieldset>
            </form>
            </aside>
         </section>   
        </div>
    </section>	
    
</div> 

<footer>
<div class="footerleft">
<img src="http://placehold.it/75" alt="Droplet Badge" />
<span class="footertext">
Copyright © Eric Barber. All Rights Reserved.
</span>
</div>
</footer>

<div id="toTop">
<a href="#"><img src="http://placehold.it/125x175" alt="Back to Top"/></a>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>


<!--Scripts-->
<script src="js/libs/jquery.fancybox-1.3.4.js"></script> <!--Lightbox-->
<script src="js/libs/jquery.scrollTo.js"></script> <!--Needed for site navigation-->
<script src="js/jquery.nav.js"></script> <!--Neeeded for site navigation-->
<script src="js/site.js"></script> <!--Portfolio rain JS. Fee lfree to help me optimize this! It was my first attempt at a jQuery 'plugin' on my own. Also includes toTop script, portfolio selection script, and calls cycle.-->
<script src="js/libs/modernizr-2.5.3.min.js"></script> <!--Older browsers-->
<script src="js/libs/css3-mediaqueries.js"></script> <!--Media queries for older browsers-->


<!-- Scripts Minified-->
<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

<!--Analytics-->
<script>
	var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
	(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
	g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
	s.parentNode.insertBefore(g,s)}(document,'script'));
</script>

<!--Lightbox-->
<script>
$(document).ready(function() {
	$('.menuitem img').animate({width: 100}, 0); //Set all menu items to smaller size

	$('.menuitem').mouseover(function(){ //When mouse over menu item

		gridimage = $(this).find('img'); //Define target as a variable
		gridimage.stop().animate({width: 200}, 150); //Animate image expanding to original size

	}).mouseout(function(){ //When mouse no longer over menu item

		gridimage.stop().animate({width: 100}, 150); //Animate image back to smaller size

});
	$(".lightbox").fancybox();
});
$('#nav').onePageNav(); //Needed for site navigation
</script>

</body>
</html>