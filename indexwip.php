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

<!--Style-->
<link href="portfolio.css" rel="stylesheet">

<!--Scripts-->
<script src="js/libs/jquery.lightbox-0.5.min.js"></script> <!--Lightbox-->
<script src="js/libs/jquery.scrollTo.js"></script> <!--Needed for site navigation-->
<script src="js/jquery.nav.min.js"></script> <!--Neeeded for site navigation-->
<script src="js/site.js"></script> <!--Portfolio rain JS. Fee lfree to help me optimize this! It was my first attempt at a jQuery 'plugin' on my own. Also includes toTop script, portfolio selection script, and calls cycle.-->
<script src="js/libs/modernizr-2.5.3.min.js"></script> <!--Older browsers-->
<script src="js/libs/c33-mediaqueries.js"></script> <!--Media queries for older browsers-->

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lobster|Raleway:100' rel='stylesheet'>

</head>

<body>

<header>

<!--Branding-->
<div class="headerleft">
<img class ="circlelogo" src="img/circlelogo.png" alt="Circle Logo"/>
<img class="namelogo" src="img/logo.png" alt="Eric Barber logo"/>
</div>

<!--Navigation-->
<nav>
<ul id="nav"> <!--Needed for one page current navigation plugin-->
<li><a href="#home">Home</a></li>
<li><a href="#about">About</a></li>
<li><a href="#work">Work</a></li>
<li><a href="#contact">Contact</a></li>
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
                    	<img src="img/me.png" alt="Eric & Laura"/>
                    </figure>
                </div>
        </section>
           	<section id="skills">    
                <aside id="aboutright">
                	<h3>Skills</h3>
                      <ul class="graph-container">
                    	<li>
                      		  <span>SASS/SCSS</span>
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
                      		  <span>HTML/CSS</span>
 							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>    
                            </div>                    
                        </li>
                        
                        <li>
                      		  <span>XML/XJAX</span>
  							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div> 
                            </div>                      
                        </li>                                                                     
  						</ul>
                        
                    <h3>Extra Credit</h3>
                    	<ul>
                        	<li class="music">Writing music</li>
                            <li class="adobe">Adobe Suite</li>
                            <li class="cms">Wordpress/Concrete5/Opencart CMS</li>
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
                    	<img src="img/cloud.png" alt="Cloud"/>
                    </figure>
						<div class="box box1 small">Box</div>
					</div>
                    
					<div id="two">
                    <figure>
                    	<img src="img/cloud.png" alt="Cloud"/>
                    </figure>
						<div class="box box2 small">Box</div>
					</div>
                    
					<div id="three">
                    <figure>
                    	<img src="img/cloud.png" alt="Cloud"/>
                    </figure>
						<div class="box box3 small">Box</div>
					</div>
                    
                    <div id="four">
                    <figure>
                    	<img src="img/cloud.png" alt="Cloud"/>
                    </figure>
						<div class="box box4 small">Box</div>
					</div>
                    
					<div id="five">
                    <figure>
                    	<img src="img/cloud.png" alt="Cloud"/>
                    </figure>
						<div class="box box5 small">Box</div>
					</div>
				</div> 
                
                <div id="portfoliogrid">
                <figure>
                	<a class="lightbox" href="img/wordpress.png"><img src="img/thumb_wordpress.png" width="72" height="72" alt="Wordpress Theme" /></a>
                <figcaption>
                <span>Wordpress Theme.</span>
                </figcaption>
                </figure>
      			<figure>
                    <a class="lightbox" href="img/opencart.png"><img src="img/thumb_opencart.jpg" width="72" height="72" alt="OpenCart Theme" /></a>
                <figcaption>
                <span>Opencart Theme.</span>
                </figcaption>
                </figure> 
                <figure>   
					<a class="lightbox" href="img/concrete5.png"><img src="img/thumb_concrete5.png" width="72" height="72" alt="Concrete5 Theme" /></a>
                <figcaption>
                <span>Concrete5 Theme.</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/district7.png"><img src="img/thumb_district7.png" width="72" height="72" alt="District 7" /></a>
                <figcaption>
                <span>District 7</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/fusionms.png"><img src="img/thumb_fusionms.png" width="72" height="72" alt="FusionMS SharePoint Site" /></a>
                <figcaption>
                <span>FusionMS</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/poc.png"><img src="img/thumb_poc.png" width="72" height="72" alt="FusionMS Proof of Concept Client Site" /></a>
                <figcaption>
                <span>FusionMS P.o.C.</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/afk.png"><img src="img/thumb_afk.png" width="72" height="72" alt="AFK Gamers Blog" /></a>
                <figcaption>
                <span>AFK</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/cuppycakes.png"><img src="img/thumb_cuppycakes.png" width="72" height="72" alt="Cuppycakes Branding" /></a>
                <figcaption>
                <span>Cuppycakes</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/self.png"><img src="img/thumb_self.png" width="72" height="72" alt="Self Branding" /></a>
                <figcaption>
                <span>Self Branding</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/product1.png"><img src="img/thumb_product1.png" width="72" height="72" alt="Wine Product Design" /></a>
                <figcaption>
                <span>Product Design 1</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/product2.png"><img src="img/thumb_product2.png" width="72" height="72" alt="Gummy Bears Product Design" /></a>
                <figcaption>
                <span>Product Design 2</span>
                </figcaption>
                </figure>
                <figure>
                    <a class="lightbox" href="img/posters.png"><img src="img/thumb_posters.png" width="72" height="72" alt="Poster Designs" /></a>
                <figcaption>
                <span>Poster Design</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/shirts.png"><img src="img/thumb_shirts.png" width="72" height="72" alt="Shirt Design" /></a>
                <figcaption>
                <span>Shirt Design</span>
                </figcaption>
                </figure>
                <figure>
					<a class="lightbox" href="img/logos.png"><img src="img/thumb_logos.png" width="72" height="72" alt="Logo Design" /></a>
                <figcaption>
                <span>Logos</span>
                </figcaption>
                </figure>
                
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
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus laoreet, eros id ultrices semper, nunc nunc rhoncus augue, sed tristique leo libero in lorem. In a pharetra ipsum. Praesent bibendum elit a sapien mattis venenatis. Proin ac tortor et augue bibendum scelerisque non ut erat. Phasellus velit metus, varius eget imperdiet vel, accumsan in neque. Nullam porta aliquet risus et molestie. Pellentesque metus nisl, feugiat sit amet varius in, posuere ac dolor. Mauris vitae leo ac felis laoreet tincidunt. In aliquam laoreet libero, ac interdum diam pharetra in. Donec massa neque, feugiat ut iaculis ac, suscipit nec tortor. Praesent fermentum vulputate sodales. Suspendisse commodo tortor ac enim scelerisque varius dictum arcu accumsan. Quisque lobortis diam dignissim orci viverra id egestas tortor eleifend. Nam posuere congue nisi, ornare consequat urna mollis fermentum. Curabitur vitae nibh massa, sed fermentum sapien.</p>
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
<img src="#" alt="Droplet Badge" />
<span class="footertext">
Copyright © Eric Barber. All Rights Reserved.
</span>
</div>
</footer>

<div id="toTop">
<a href="#"><img src="#" alt="Back to Top"/></a>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>
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
$('a.lightbox').lightBox();
</script>

</body>
</html>