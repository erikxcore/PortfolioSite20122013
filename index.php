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
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="Eric Barber, erikxcore,f0xxx,f0xx, portfolio, designer, web designer, graphic designer, web developer, front-end developer, new jersey, new york, pennslyvania">
<meta name="description" content="Hi! My name is Eric - and I am a young web designer / developer currently based in Northern New Jersey!">
<meta name="author" content="Eric Barber">

<!--Favicon-->
<link rel="shortcut icon" href="favicon.ico" />    

<!--Style-->
<link href="css/portfolio.css" rel="stylesheet">
<link href="css/jquery.fancybox.css" rel="stylesheet">
<link href="css/mediaqueries.css" rel="stylesheet">
<link href="css/lightview/lightview.css" rel="stylesheet">

<!--Fonts-->
<link href='http://fonts.googleapis.com/css?family=Lobster|Raleway:100|Arvo:400,700' rel='stylesheet'>

<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<style>
.graph-container{
display:none;
}
#chart{
display:block;
}
</style>
<![endif]--> 

</head>

<body>

<header>

<!--Branding-->
<div class="headerleft">
	<div id="eric">
    <img src="img/eric.png" alt="Eric"/>
    </div>
    <div id="barber" class="animated bounceInLeft">
    <img src="img/barber.png" alt="Barber"/>
    </div>
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
       		<h1>Making the web<br/>
      	  	a better place.</h1>
        
     	 	<p>Hi.<br/>
      	  	I am a front-end developer and web designer.<br/>
            Well, sometimes I do graphic design work, too.<br/>
            Want to read more? Scroll down!
       	 	</p>
        </div>
    </section>	
    
    <section id="about"> <!--About-->
    
   		<div id="aboutcontent">
        <section id="bio">
        	<h2>Who am I?</h2>
            	<div id="aboutleft">
                	<h3>The Nitty-Gritty</h3>
                	<p>My name is Eric. I'm currently a still-in-college student, but that hasn't stopped me from working and learning about the web (especially HTML5/CSS3/jQuery!) as much as possible. I have free lance experience as well as some time working both part-time and full-time in different environments. I also have experience working with CMS's such as Wordpress, Concrete5, and OpenCart. I've worked with Microsoft SharePoint, too - for all of those who are in the 'know'. Currently, I am spending time gaining experience with C# and the .NET platform; ultimately towards mobile application development and design.
                    </p>
                    <p>
                    When I'm not in front of computer (hardly!), I spend my spare time playing in multiple bands. If I'm not glued to a guitar I'm probably exercising...or shopping for clothes. Besides that, I love animals and of course, my wonderful girlfriend.
                    </p>
                    <figure>
                    	<img src="img/me.png" alt="Me!"/>
                    </figure>
                </div>
        </section>
        
           	<section id="skills">    
                <aside id="aboutright">
                	<h3>Skills</h3>
                    	<figure id="chart">
                        <img src="img/chart.png" alt="Chart"/>
                        </figure>
                      <ul class="graph-container">
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
                      		  <span>Java</span>
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
                      		  <span>CSS3</span>
 							<div class="bar-wrapper">
                        	<div class="bar-container">
                            	<div class="bar-background"></div>
                                <div class="bar-inner"></div>
                                <div class="bar-foreground"></div>
                            </div>    
                            </div>                    
                        </li>
                        
                        <li>
                      		  <span>HTML5</span>
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
                        
                    <span class="resume">To view my resume <a href="Extra/ericbarberresume.pdf">click here!</a></span>
                
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
                <h2>Work - all accounted for.</h2>
                
                <div class="port_grid">
 <a href="img/port/cms/wordpress.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A blog set up using Wordpress.<a href='http://ericbarber.me/WPThemes/wordpress/'>Visit</a>">
                               
                <figure>
                <span class="sites" alt="Sites Icon"></span>
                </figure>
                </a>
               <a href="img/port/cms/cuppycakes.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A store set up using the OpenCart CMS.<a href='http://ericbarber.me/cuppy/'>Visit</a>"></a>
<a href="img/port/cms/concrete.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A website created using Concrete 5.<a href='http://ericbarber.me/concrete5.5.2.1/'>Visit</a>"></a>
<a href="img/port/other/district7.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A site created using PHP and working with Wordpress.<a href='http://ericbarber.me/test/d7/'>Visit</a>"></a>
<a href="img/port/other/html5video.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Interactive audio/video HTML5 concept.<a href='http://ericbarber.me/html5//'>Visit</a>"></a>
<a href="img/port/other/metro.png" class="lightview" data-lightview-group="sites" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A conceptual site designed after Windows 8.<a href='http://ericbarber.me/proofofconcept//'>Visit</a>"></a>
              
               
                
                <a href="img/port/sharepoint/cloud.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'">
      			
     			 <figure>
                 <span class="sharepoint" alt="SharePoint Icon"></span>
                </figure> 
                </a>
<a href="img/port/sharepoint/comporium.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'" data-lightview-caption="SharePoint 2010 Intranet portal"></a>
<a href="img/port/sharepoint/fusionportal.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 company portal site"></a>
<a href="img/port/sharepoint/fusionpublic.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 powered public site"></a>
<a href="img/port/sharepoint/fusionteam.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 team site"></a>
<a href="img/port/sharepoint/leon.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet"></a>
<a href="img/port/sharepoint/lloyd.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet"></a>
<a href="img/port/sharepoint/macys.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet"></a>
<a href="img/port/sharepoint/novartis.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'" data-lightview-caption="SharePoint 2007 intranet rebranded into 2010."></a>
<a href="img/port/sharepoint/psi.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Simple SharePoint 2010 public site"></a>
<a href="img/port/sharepoint/selfpay.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Simple SharePoint 2010 blog style public site"></a>
<a href="img/port/sharepoint/titanium.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet portal"></a>
<a href="img/port/sharepoint/toys.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet portal"></a>
<a href="img/port/sharepoint/tradeweb.png" class="lightview" data-lightview-group="sharepoint" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="SharePoint 2010 intranet portal"></a>
            </div>                                  
                <div class="port_grid">
                
                  <a href="img/port/print/presskit.png" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Press kit for a band.">
                <figure>   
				<span class="print" alt="Print Icon"></span>
                </figure>
                </a>
<a href="img/port/print/fusionnotepad.png" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Simple backdrop for a notepad."> </a>
<a href="img/port/print/fusionprintout.jpg" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Simple print-out for 'in-the-field' diagnosis.">  </a>
<a href="img/port/print/sitecollectionsdiagram.png" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Simple diagram to show prospective clients." >  </a>
<a href="img/port/tmhtb/album.jpg" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Band album" >  </a>
<a href="img/port/tmhtb/shirt.png" class="lightview" data-lightview-group="print" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Band t-shirt">  </a>
                   
           
               
                
                  <a href="img/port/posters/fusioninfographic.png" class="lightview" data-lightview-group="posters" data-lightview-group-options="controls: 'relative'" >
                <figure>
				<span class="posters" alt="Posters Icon"></span>
                </figure>
                </a>
<a href="img/port/posters/oldboy.png" class="lightview" data-lightview-group="posters" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Old Boy poster redesign">        </a>       
<a href="img/port/posters/starwars.png" class="lightview" data-lightview-group="posters" data-lightview-group-options="controls: 'relative'"  data-lightview-caption="Star Wars poster redesign" >        </a>   
                 
                </div>
                <div class="port_grid">
                  <a href="img/port/brand/tom.png" class="lightview" data-lightview-group="brand" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Identity for a local photographer.">
                <figure>
				<span class="brand" alt="Brand Icon"></span>
                </figure>
                </a>
                
                  <a href="img/port/brand/toffee.png" class="lightview" data-lightview-group="brand" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Fictional branding concept."></a>                </div>
                  <div class="port_grid">
                
                  <a href="img/port/other/simplr.png" class="lightview" data-lightview-group="other" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Future application mock-up.">
                <figure>
				<span class="other" alt="Other Icon"></span>
                </figure></a>
                                 <a href="img/port/other/GameControllerUsingStockArtDesign1.jpg" class="lightview" data-lightview-group="other" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A design for a fight stick controller."></a>
                  
                  <a href="img/port/brand/skateboard.png" class="lightview" data-lightview-group="other" data-lightview-group-options="controls: 'relative'" data-lightview-caption="Custom Skateboard design."></a>
                                   
                  <a href="img/port/other/NerdsFiresideBanner.jpg" class="lightview" data-lightview-group="other" data-lightview-group-options="controls: 'relative'" data-lightview-caption="A digital banner for a client."></a>

                </div>
                </div>
                
                <div id="workbottomrain">
                	<span>Looking for an old-fashioned grid view of my work? <a id="gridview" href="#">Click here!</a></span>
                </div>
                
                <div id="workbottomgrid">
                	<span>Want a fancy schmancy view of my work? <a id="rainview" href="#">Click here!</a></span>
                </div>
        </div>
    </section>	
    
    <section id="contact">
    	<div id="contactcontent">
        	<h2>Say Hi!</h2>
            <div id="contactleft">
				<p>Want to talk to me? Send me hate mail? Did I create a horrible error that broke the internet on my page? Feel free to shoot me an email for all inquiries!</p>
				<div id="social">
                	<div class="socialcontain">
                	<a href="https://www.facebook.com/ericbarber" class="facebook"></a>
                    <a href="https://twitter.com/ericbarber" class="twitter"></a>
                    <a href="http://ericbarber.tumblr.com/" class="tumblr"></a>
                    <a href="http://www.linkedin.com/pub/eric-barber/37/136/724" class="linkedin"></a>
                    </div>
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
<img src="img/drop.png" alt="Droplet Badge" />
<span class="footertext">
Copyright 2012 © Eric Barber. All Rights Reserved...and all that other important stuff.
</span>
</div>
</footer>

<div id="toTop">
<a href="#"><img src="img/back.png" alt="Back to Top"/></a>
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.2.min.js"><\/script>')</script>


<!--Scripts-->
<script src="js/libs/jquery.scrollTo.js"></script> <!--Needed for site navigation-->
<script src="js/jquery.nav.js"></script> <!--Neeeded for site navigation-->
<script src="js/site.js"></script> <!--Portfolio rain JS. Fee lfree to help me optimize this! It was my first attempt at a jQuery 'plugin' on my own. Also includes toTop script, portfolio selection script, and calls cycle.
<script src="js/libs/modernizr-2.5.3.min.js"></script> <!--Older browsers-->
<script src="js/libs/css3-mediaqueries.js"></script> <!--Media queries for older browsers-->
<!--[if lt IE 9]>
  <script type="text/javascript" src="/js/excanvas/excanvas.js"></script>
<![endif]-->
<script type="text/javascript" src="js/spinners/spinners.min.js"></script>
<script type="text/javascript" src="js/lightview/lightview.js"></script>

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
$('#nav').onePageNav(); //Needed for site navigation
</script>

</body>
</html>