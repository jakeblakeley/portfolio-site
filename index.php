<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>John Jacob Designs &#8212; Web Designer &amp; Developer</title>
		<meta charset="UTF-8">
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />

		<meta name="description" content="Web designer and front end web developer from Toronto Canada, focusing on responsive design and unqiue interactions.">
		<meta name="keywords" content="John Jacob Designs Jake Blakeley web developer web designer front end responsive Toronto Canada">
		<meta name="author" content="John Jacob Designs">
		<meta name="language" content="en-us">
		<link rel="prefetch" href="img/loading.gif" />
		<link rel="icon" type="image/png" href="img/favicon.png">
		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<link rel="stylesheet" type="text/css" href="css/ie9.css">
		<![endif]-->
		<script src="js/modernizr.js"></script>
		<link rel="stylesheet" href="css/style.css">

		<!-- Typography -->
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!--loading gif-->
		<div class="loading" style="background: url('img/loading.gif') no-repeat center center transparent; height: 100%; width: 100%;"></div>

		<!--navigation begins-->
		<nav>
			<!--Row 1-->
			<div class="tile logotile">
					<div class="flip">
						<div class="front">
    						<img src="img/logo.svg" alt="John Jacob Design">
							<div class="logotext">
								<h1>John Jacob Designs</h1>
							</div>
						</div>
						<div class="back">
							<object data='img/logo.svg'>
    							<img src="img/logo.png" alt="John Jacob Design">
							</object>
							<div class="logotext">
								<h1>Web Designer &amp; Developer</h1>
							</div>
						</div>
					</div>
			</div>
			<div class="tile row1-1 windowopenbutton" data-window=".about">
				<div class="flip">
					<div class="front">
						<img src="img/about.svg" alt="About Me">
					</div>
					<div class="back">
						<h2>About<br>Me</h2>
					</div>
				</div>
			</div>
			<div class="tile row1-2 windowopenbutton" data-window=".services">		
					<div class="flip">
						<div class="front">
							<img src="img/services.svg" alt="My Services">
						</div>
						<div class="back">
							<h2>My<br>Services</h2>
						</div>
					</div>
			</div>
			<div class="noflip row1-3">
			</div>

			<!--Row 2-->
			<div class="tile row2-1 windowopenbutton" data-window=".contact">
				<div class="flip">
					<div class="front">
						<img src="img/mail.svg" alt="Contact Me">
					</div>
					<div class="back">
						<h2>Contact<br>Me</h2>
					</div>
				</div>
			</div>
			<div class="noflip row2-2">
			</div>

			<!--Row 3-->
			<div class="noflip row3-1">
			</div>
			<div class="noflip row3-2">
			</div>

			<!--Row 4-->
			<a href="http://blog.johnjacob.ca/" title="blog" target="_blank">
				<div class="tile row4-1">
						<div class="flip">
							<div class="front">
								<img src="img/blog.svg" alt="My Blog">
							</div>
							<div class="back">
								<h2>My<br>Blog</h2>
							</div>
						</div>
				</div>
			</a>
			<div class="noflip row4-2">
			</div>
		</nav>

		<div class="socialmedia">
			<!--Row 5-->
			<div class="noflip row5-1">
			</div>

			<!--Row 6-->
			<a rel="author" href="https://github.com/jakeblakeley" title="Github" target="_blank">
				<div class="tile row6-1">
						<div class="flip">
							<div class="front">
								<img src="img/git.svg" alt="My Github Profile">
							</div>
							<div class="back">
								<h2>Github<br>Profile</h2>
							</div>
						</div>
				</div>
			</a>
			<div class="noflip row6-2">
			</div>

			<!--Row 7-->
			<a rel="author" href="https://twitter.com/JJacob_designs" title="Twitter" target="_blank">
				<div class="tile row7-1">
						<div class="flip">
							<div class="front">
								<img src="img/twitter.svg" alt="Follow Me on Twitter">
							</div>
							<div class="back">
								<h2>Follow<br>Me</h2>
							</div>
						</div>
				</div>
			</a>
			<a rel="author" href="http://dribbble.com/JJacob_designs" title="Dribbble" target="_blank">
				<div class="tile row7-2">
						<div class="flip">
							<div class="front">
								<img src="img/dribbble.svg" alt="My Dribbble Profile">
							</div>
							<div class="back">
								<h2>Dribbble<br>Gallery</h2>
							</div>
						</div>
				</div>
			</a>
			<div class="noflip row7-3">
			</div>
		</div>

		<div class="windows">
			<div class="about">
				<img class="close" src="img/close.png" alt="close">
				<div class="windowcontent">
					<div class="aboutwindowtile"></div>
					<div class="aboutwindowtile">
						<div class="centering">
							<h2>&ldquo;A rationale behind every decision.&rdquo;</h2>
						</div>
					</div>
					<div class="aboutwindowtile"></div>
					<div class="aboutwindowtile">
						<h3>Biography</h3>
						<p><span class="hidemobile hidemobilesmaller">My name is Jake Blakeley, or John Jacob Blakeley, as the website denotes.</span> I am a designer, passionate about creating the best solution to any problem. This means starting from the basics<span class="hidemobile hidemobilesmaller"> for a strong foundation,</span> then rethinking that problem from every perspective. An integral part of this process is questioning the function of every detail<span class="hide hidemobile hidemobilesmaller"> and asking how it could be improved</span><span class="hidemobilesmaller">, with strong rationale behind every decision</span>. Outside of my work, I try to expand my views through new experiences and take every opportunity to learn from them. <span class="hidemobile hidemobilesmaller">The best designers expand outside just visual design. </span>They understand that design, at its core, solves problems<span class="hidemobile hidemobilesmaller"> and the best solutions come from understanding the user and creating the best experience for them</span>. 
						<a href="https://plus.google.com/118371047333187638105?rel=author"></a>
					</div>
					<div class="aboutwindowtile hidemobilesmaller">
						<img src="img/awards.svg">
					</div>
					<div class="aboutwindowtile">
						<h3>Awards</h3>
						<p><a href="http://fitc.ca/awards/">FITC 2013 Best Canadian Student Website</a></p>
						<p><a href="http://www.appliedartsmag.com/blog/?p=13435">Applied Arts 2013 Student Award</a></p>
						<p><a href="http://www.csslight.com/user/detail/Pearls-and-Bones-Band-Website_2821">CSS Light Featured Site</a></p>
					</div>
					<div class="aboutwindowtile"></div>
					<div class="aboutwindowtile">
						<h2>Located in Toronto Ontario</h2>
					</div>
					<div class="aboutwindowtile hidemobilesmaller"></div>
				</div>
			</div>
		</div>
		<div class="windows">
			<div class="services">
				<img class="close" src="img/close.png" alt="close">
				<div class="windowcontent">
					<div class="serviceswindowtile hidemobilesmaller">
					</div>
					<div class="serviceswindowtile">
						<div class="centering">
							<h2>&ldquo;With every design I begin from scratch to find the best solution <span class="hidemobile hidemobilesmaller">to your problem</span>.&rdquo;</h2>
						</div>
					</div>
					<div class="serviceswindowtile"></div>
					<div class="serviceswindowtile">
						<h3>Web Design</h3>
						<p>One of my favourite activities is crafting user-friendly web experiences and bringing them to a wide range of users. My specialization is in front-end web design and development, with vast experience using web technologies such as CSS3, HTML5 and JQuery. I use these technologies to create responsive websites that adapt and mold to browsers, devices, and the user's needs. <span class="hidemobile hidemobilesmaller">My websites are created through progressive enhancement and web standards to ensure that they are as cross-browser compatible as possible.</span> With a background in graphic design I can ensure that your website will be both professionally coded and aesthetically pleasing. <span class="hide">As an added service, all of my websites are created with search engine optimization in mind to share your site with the world via Google search.</span></p>
					</div>
					<div class="serviceswindowtile">
						<h3>Graphic Design</h3>
						<p>In our fast paced world I can help you create a design that is never overlooked, communicates your ideas clearly, and grabs the viewer's attention. My experience ranges from detailed pixel perfect typography to cohesive company branding, and everything in between.<p>
					</div>
					<div class="serviceswindowtile"></div>
					<div class="serviceswindowtile hidemobilesmaller">
						<h3>Mobile</h3>
						<p>As mobile web browsing is becoming more popular by the year <span class="hide hidemobile hidemobilesmaller">it is almost necessary to have a mobile website as an on-the-go solution.</span> I can help you create a concise mobile solution to compliment your website.</p>
					</div>
					<div class="serviceswindowtile"></div>
				</div>
			</div>
		</div>
		<div class="windows">
			<div class="contact">
				<img class="close" src="img/close.png" alt="close">
				<div class="windowcontent">
					<div id="contact-form">
						<div class="contacttext">			            
							<h3>Say Hello</h3>
				        </div>
			            <?php
						//init variables
						$cf = array();
						$sr = false;
						
						if(isset($_SESSION['cf_returndata'])){
							$cf = $_SESSION['cf_returndata'];
						 	$sr = true;
						}
			            ?>
			            <div id="errors" class="<?php echo ($sr && !$cf['form_ok']) ? 'visible' : ''; ?>">
			                <?php 
							if(isset($cf['errors']) && count($cf['errors']) > 0) :
								foreach($cf['errors'] as $error) :
							?>
			                <p><?php echo $error ?></p>
			                <?php
								endforeach;
							endif;
							?>
			            </div>
			            <p id="success" class="<?php echo ($sr && $cf['form_ok']) ? 'visible' : ''; ?>">Thanks for your message! I will get back to you soon!</p>
			            <form method="post" action="process.php">
			                <label for="name">Name</label><br>
			                <input type="text" id="name" name="name" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['name'] : '' ?>" placeholder="John Jacob Blakeley" required/><br>
			                
			                <label for="email">Email</label><br>
			                <input type="email" id="email" name="email" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['email'] : '' ?>" placeholder="design@johnjacob.ca" required /><br>
			                
			                <label for="subject">Subject</label><br>
			                <input id="subject" name="subject" value="<?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['subject'] : '' ?>" placeholder="Job Opportunity" required/><br>
			                
			                <label for="message">Message</label><br>
			                <textarea id="message" name="message" placeholder="Leave me a message!" required data-minlength="20"><?php echo ($sr && !$cf['form_ok']) ? $cf['posted_form_data']['message'] : '' ?></textarea><br>
			                
			                <span id="loading"></span>
			                <button type="submit" value="Submit" id="submit-button">Submit<img src="img/arrow.png" class="linkanimation"></button>
			            </form>
			            <?php unset($_SESSION['cf_returndata']); ?>
			        </div>
			    </div>
			</div>
		</div>

		<div class="content">
			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/quism.png" alt="Quism Haircare Website Design">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/stagout.jpg" alt="John Jacob Designs Logo Case Study">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/quismFULL.jpg" alt="Quism Haircare Website Design">
				<div class="textbox">
					<h2>Quism Haircare</h2>
					<h3>One page website with product sliders</h3>
					<p>While I handled the web design for this site independently, I did not have any part in the product design or branding. That being said this is one of my most successfully coded websites. The layout is responsive until the point of mobile, where the client opted out of, and includes full one page navigation. My proudest achievement of this however is the product sliders, which ended up working well even on lower range mobile phones, due to jquery/javascript optimization.</p>
					<br>
					<a href="http://johnjacob.ca/quism/" title="View The Live Version" target="_blank"><button>Live Version<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/stagoutFULL.jpg" alt="Pearls and Bones hip-hop website">
				<div class="textbox">
					<h2>Stag Out Hip-Hop Band Site</h2>
					<h3>Responsive one page website featuring a full HTML5 audio player</h3>
					<p>Stagout.com is a website created for local hip-hop duo Pearls and Bones. This one page website features an HTML5 and Javascript audio player built from the ground up. This player includes such features as a selectable playlist and a now playing dropdown to show the user when a new song comes on. The website is fully responsive, and includes fallbacks until ie8 and a working html5 contact form.</p>
					<br>
					<a href="http://stagout.com/" title="View the Live Version" target="_blank"><button>Live Version<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/axe.jpg" alt="Quism Haircare Website Design">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/daftpunk.png" alt="John Jacob Designs Logo Case Study">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/axeFULL.jpg" alt="Axe Canada welcome home Chris Hadfield">
				<div class="textbox">
					<h2>Axe Welcome Home Micro-site</h2>
					<h3>Collaboration with Axe Canada to welcome home Canada's greatest astronaut</h3>
					<p>Axe’s &ldquo;Welcome Home&rdquo; e-card was created in collaboration with Harbinger Ideas, to welcome home Canada’s greatest astronaut. The website’s framework was built on top of reveal.js due to time constraints and includes additional features such as searchable messages, and a small tutorial for keyboard commands.</p>
					<br>
					<a href="http://www.axe.ca/welcomehome/#/" title="View The Live Version" target="_blank"><button>Live Version<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/daftpunkFULL.png" alt="John Jacob Design Logo Design">
				<div class="textbox">
					<h2>Daft Punk Editorial</h2>
					<h3>Editorial with custom typography showing the bands style</h3>
					<p>This eight-page booklet, paying homage to the band "Daft Punk", was the result of an in-class typography project. The display face used in the titles and the front cover is custom made, and Futura Condensed was used for the copy.</p>
					<br>
					<a href="http://bit.ly/ZYmRLG" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/contrasts.jpg" alt="7 Contrasts of Type by Carl Dair">
					<div class="thumbnailhover">
							<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/dct1.jpg" alt="Design Culture Today Poster 1">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/contrastsFULL.jpg" alt="7 Contrasts of Type by Carl Dair">
				<div class="textbox">
					<h2>7 Contrasts of Type</h2>
					<h3>Microsite to hightlight Carl Dair's seven contrasts of type</h3>
					<p>This site was designed to showcase the seven contrasts of typography as described by Carl Dair. It was my first attempt at an adaptive website that scales based on the viewport and avoids any fixed units where possible. The actual imagery and copy were created as a collaborative project. The title was created in Cinema 4D to mimic the style of movable lead type, as well as to keep with the minimal style of the site.</p>
					<br>
					<a href="http://johnjacob.ca/type/" title="7 Contrasts of Type Live Version" target="_blank"><button>Live Version<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/dct1FULL.jpg" alt="Design Culture Today Poster 1">
				<div class="textbox">
					<h2>Design Culture Today Poster</h2>
					<h3>First of two posters in the series showing the artificial side of design</h3>
					<p>Measuring two feet wide and three feet tall, this poster was designed for an in-class project for &ldquo;Design Culture Today&rdquo;, an event hosted by The Design Exchange. Both the background and typography were first created in Illustrator, then brought into Cinema 4D for 3D rendering. The idea behind the work was to convey the broad range of styles design culture encompasses, which is shown in the use of three different fonts in the title, as well as a separate treatment for each.</p>
					<br>
					<a href="http://www.behance.net/gallery/3D-Abstract-Typography/6185673" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/baskerville.jpg" alt="Baskerville Poster">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/lookingback.png" alt="Design Culture Today Poster 2">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/baskervilleFULL.jpg" alt="Baskerville Poster">
				<div class="textbox">
					<h2>Baskerville Poster</h2>
					<h3>Typography poster showcasing the typographic style of type legend John Baskerville</h3>
					<p>This poster was designed to highlight the many historical achievements of John Baskerville, as well as showcase his famous typeface. I tried to keep as true to his style as possible through many weights, sizes, justified text, bright paper and dark ink, while translating that style into poster form. The background consisted of scans of Baskerville’s works, as well as a portrait found in one of his books. The final piece, photographed here, was printed on Stonehenge to give an older letterpress feel, while still maintaining the bright white, tinted paper that Baskerville was famous for printing on.</p>
					<br>
					<a href="http://www.behance.net/gallery/Baskerville-Poster/6185873" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/lookingbackFULL.png" alt="Design Culture Today Poster">
				<div class="textbox">
					<h2>Looking Back Typography</h2>
					<h3>Typographic exploration into combining to type styles into a metaphor of looking back</h3>
					<p>Looking back was created as a title page for a reflective project booklet and eventually became a project of its own. The typography combines the patterned monotonous shapes of blackletter with the flourishes of script fonts, to emulate older typefaces and a metaphor of looking at the past. This idea is expanded upon however since the ideas are brought together in a modern way to show a progression of past typographic ideas being brought into the new age.</p>
					<br>
					<a href="http://www.behance.net/gallery/Looking-Back/8925323" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/jim.jpg" alt="Jim Donoahue Booklet">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/heart.jpg" alt="Paper Heart Poster">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/jimFULL.jpg" alt="Jim Donoahue Booklet">
				<div class="textbox">
					<h2>Jim Donoahue Booklet</h2>
					<h3>Magazine booklet about Canadian logo designer Jim Donoahue</h3>
					<p>This editorial design was created for a magazine insert to commemorate Canadian designer, and designer of the Canadian wordmark logo, Jim Donoahue. I pushed the limits of conventional design by putting the white type on a red background, but on the final print it was very legible and had a unique feel, unlike most other editorial designs I have seen.</p>
					<br>
					<a href="http://www.behance.net/gallery/Jim-Donoahue-Magazine-Booklet/6186585" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/heartFULL.jpg" alt="Paper Heart">
				<div class="textbox">
					<h2>Paper Heart</h2>
					<h3>Low poly graphic of a heart mimicing the triangular nature of oragami</h3>
					<p>This graphic was created for a personal project of mine after finishing an in-class project. My idea began when I wanted to explore the uses of 3D rendering, and I found going for a fully realistic approach was a bit boring. I then decided to contrast a normally organically shaped object, the heart, with the artificial shapes &#59; triangles.</p>
					<br>
					<a href="http://www.behance.net/gallery/Paper-Heart/6518309" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

			<div class="thumbnailcontainer loadanimation">
				<div class="thumbnail top">
					<img src="img/thinkmore.png" alt="Think More Design Less Poster">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
				<div class="thumbnail bottom">
					<img src="img/water.jpg" alt="Thames River Microsite">
					<div class="thumbnailhover">
						<img src="img/more.png" alt="view more">
					</div>
				</div>
			</div>

			<section class="popout top">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/thinkmoreFULL.png" alt="Think More Design Less">
				<div class="textbox">
					<h2>Think More Design Less</h2>
					<h3>Custom font poster of Ellen Lupton's quote</h3>
					<p>&ldquo;Think more, design less&rdquo; is a quote by design academic Ellen Lupton, and is an idea that designers should follow. It means not using style over substance for communication. The poster itself is designed with a custom font that I created for the purpose of this poster and quote. The idea of the font was to put this quote into action and create something legible, but only use what was needed to do so.</p>
					<br>
					<a href="http://www.behance.net/gallery/Think-More-Design-Less/6518435" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>
			<section class="popout bottom">
				<img class="popoutclose" src="img/close.png" alt="close">
				<img class="fullimage" src="img/waterFULL.jpg" alt="Thames River Microsite">
				<div class="textbox">
					<h2>Thames River Microsite</h2>
					<h3>Microsite showcasing the Upper Thames River</h3>
					<p>The splash page was animated so that upon arrival the top and bottom bars move in from the edges, the logo fades in, followed by the background then left/right navigation arrows. Each page’s background uses parallax on the x-axis, and moves the background image left or right based on where the mouse is to hint towards more content to both the left and right. Additionally, upon hovering over the left and right arrows, the opacity changes to hint towards clicking to move on. The left side has animated rain as well.</p>
					<br>
					<a href="http://www.behance.net/gallery/Thames-River-Microsite/6186897" title="View More on Behance" target="_blank"><button>View More<img src="img/arrow.png" class="linkanimation"></button></a>
				</div>
			</section>

		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-1.8.1.min.js"><\/script>')</script>
		<script src="js/scripts.js"></script>
		<script type="text/javascript" src="js/plugins.js"></script>
		<!--Plugins on their own (for debugging purposes)
		<script type="text/javascript" src='js/jquery.mousewheel.min.js'></script>
		<script type="text/javascript" src='js/jquery.scrollTo.min.js'></script>
		<script type="text/javascript" src='js/helper.js'></script>-->

		<!--[if lt IE 9]>
			<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<![endif]-->

		<!-- Google Analytics -->
		<script type="text/javascript">
		  var _gaq = _gaq || [];
		  _gaq.push(['_setAccount', 'UA-37439497-1']);
		  _gaq.push(['_setDomainName', 'johnjacob.ca']);
		  _gaq.push(['_trackPageview']);

		  (function() {
		    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		  })();
		  </script>
	</body>
</html>