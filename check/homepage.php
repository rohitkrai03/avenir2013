
<!DOCTYPE html>
<html lang="en">
<?
ob_start();
session_start();
ob_end_flush();
?>
<head>

	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Avenir-2013 </title> 
	<meta content="Avenir 2013 - The Annual Tech cum Management Fest Of Netaji Subhash Engineering College" name="description">
	<meta content="Tech Fest, Robotix, Phoenix, Encoding, NSEC, Web Design, Treasure Hunt, Photography, Events, Kolkata, WBUT, Engineering" name="keywords">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
	<!-- end: Mobile Specific -->

    <!-- start: CSS -->
	
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">  
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/font-awesome-ie7.min.css">       
    <link rel="stylesheet" href="css/responsiveslides.css">
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style2.css">
	<link rel="stylesheet" href="css/layerslider.css" >
	
	<style type="text/css">
	h1,h2,h3,h4,h5,h6{
	font-weight:bold;
	}
	
	</style>
	

	
	<!-- end: CSS -->

	

	<!-- start: font -->
	<link href='css/font.css' rel='stylesheet' type='text/css'>
	<!-- end: font -->	

	
    <!--[if IE 9]>
		<style>.social {display:none;}.navbar .nav > li > .connect {display:none;}</style>
	<![endif]-->    
    <!--[if IE 8]>
		<style>.ch-grid {float: left;}.ch-grid li {float: left;margin-left:100px;}.about-pattern {background-position: center;background-repeat: repeat-x;border:none;}</style>
	<![endif]-->
	

</head>

<body>

	<a id="home"></a><!--anchorLink: home -->	

	<!--start: Header -->
	<header> 	

		<div class="menu-fixed">
    
			<!--start: Container -->
			<div class="container">
                       <?if(isset($_SESSION['ERRMSG_ARR'])){
                           foreach($_SESSION['ERRMSG_ARR'] as $value){?>
                       <div class="alert fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?echo $value;?>
          </div><?}}?>
			<? if(isset($_GET['mailed'])){?>
			<div class="alert fade in">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            You have been registered successfully!!
          </div><?}?>

				<!--start: Row -->
				<div class="row">
				
					<a href="#" class="logo"><span>Avenir2013</span></a>

					<!--start: Navigation -->	
					<div class="navbar navbar-inverse">
			    		<div class="navbar-inner">
			          		<a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed">
								<span class="icon-reorder"></span>
			          		</a>						
							<div class="nav-collapse collapse">
								<ul class="nav pull-right">
									<li class=""><a href="#home" data-target=".nav-collapse" class="anchorLink">Home</a></li>
									<li><a href="#overview" class="anchorLink">Overview</a></li>
									<li>
										<ul class="nav nav-pills">
											<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
												<ul class="dropdown-menu">
												<li><a href="#general" class="anchorLink">General</a></li>
												<li><a href="#cyber" class="anchorLink">Cyber</a></li>
												<li><a href="#robotix" class="anchorLink">Robotix</a></li>
												<li><a href="#gaming" class="anchorLink">Gaming</a></li>
												
												</ul>
											</li>
										</ul>
									
									
									
									
									</li>
									<li><a href="#workshops" class="anchorLink">Workshops</a></li>															
									<li>
										<ul class="nav nav-pills">
											<li class="dropdown">
												<a class="dropdown-toggle" data-toggle="dropdown">About Us<b class="caret"></b></a>
												<ul class="dropdown-menu">
												<li><a href="#about" class="anchorLink">Phoenix</a></li>
												<li><a href="#team" data-toggle="modal">Web Team</a></li>
												</ul>
											</li>
										</ul>
									</li>
									<li><a href="#">Gallery</a></li>
									<li><a href="#sponsors" class="anchorLink">Sponsors</a></li>
									<li><a href="#login" data-toggle="modal">Login</a></li>
									<li><a href="#register" data-toggle="modal">Register</a></li>
									
									
									
									
								</ul>
							</div>		
						</div>		
					</div><!--end: Navigation -->

				</div><!--end: Row -->
			</div><!--end: Container -->

		</div>

	</header><!--end: Header -->
    
	<br/><br/><br/>
	
	<div class="container">
		<div class="row span12">
		
		<center>
		<section id="slider">
        <div class="container">
        <div id="layerslider-container">

            <div id="layerslider" style="width: 960px; height: 480px; margin-bottom: 80px;">

                <div class="ls-layer" style="slidedelay: 7000;">

                    <img src="images/tn_1_1.jpg" class="ls-tn">
                    <img src="images/slider-a1.jpg" class="ls-bg">
                    <img class="ls-s4" id="sss" src="images/l13.png" style="top: -101px; left: 105px; slidedirection : left;">
                   
                    <h1 class="ls-s2 l1-s1b" style="top:150px; left: 90px; color:#000000; font-size: 80px; slidedirection : fade; slideoutdirection : fade;durationin : 1700; durationout : 2700; easingin : easeInOutQuad; easingout : easeInOutQuad; delayin : 1500; showuntil : 1600;">
                        <b>Avenir2013</b>
                    </h1>
                    <img class="ls-s7" src="images/l16.png" style="top: 234px; left: -21px; slidedirection : bottom;">
                    <img class="ls-s2" src="images/l17.png" style="top: -219px; left: 548px; slidedirection : top;">
                    <h2  class="ls-s2 l1-s3" style="top:330px; left: 400px; slidedirection : bottom; slideoutdirection : right; durationin : 2000; durationout : 1000; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 1000; showuntil : 2000;">
                        Netaji Subhash Engineering College
                    </h2>
                    <h2  class="ls-s3 l1-s4" style="top:373px; left: 500px; slidedirection : top; slideoutdirection : bottom; durationin : 1500; durationout : 1000; easingin : easeOutBack; easingout : easeInOutQuint; delayin : 1000; showuntil : 500;">
                        Presents
                    </h2>
                    <h2  class="ls-s3 l1-s4" style="top:330px; left: 50%; slidedirection : left; slideoutdirection : right; durationin : 1200; durationout : 1200; easingin : easeInOutQuart; easingout : easeInOutQuart; delayin : 5000;">
                        Organised By 
                    </h2>
                    <h2  class="ls-s3 l1-s3" style="top:373px; left: 50%; slidedirection : right; slideoutdirection : left; durationin : 1200; durationout : 1200; easingin : easeInOutQuart; easingout : easeInOutQuint; delayin : 5000;">
                        Phoenix-The Official Tech Club of NSEC!!!!!!!
                    </h2>
                    <img class="ls-s1" src="images/l16.png"  style="top: 313px; left: 728px; slidedirection : bottom; slideoutdirection : bottom;  durationin : 8000; durationout : 1500; easingin : easeOutQuart; easingout : easeInOutQuint; delayin : 2000; ">
                    <h1  class="ls-s2 l1-s2" style="top:90px; left: 492px; slidedirection : top;  durationin : 2000; durationout : 1500; easingin : easeOutElastic; easingout : easeInOutQuint; delayin : 1500;">
                        <!-- phoenix.png -->
                    </h1>
                   
                    
                    <h2  class="ls-s2 l1-s2b" style="top:110px; left: 800px; slidedirection : fade; slideoutdirection : fade; durationin : 2000; durationout : 2700; easingin : easeInOutQuad; easingout : easeInOutQuad; delayin : 3500; showuntil : 600;">
                         <!-- phoenix.png -->
                    </h2>
                    <h2  class="ls-s3 l1-s4" style="top:373px; left: 300px; slidedirection : bottom; slideoutdirection : left; durationin : 1000; durationout : 1000; delayin : 3000; showuntil : 1000;">
                       The Annual Tech-cum-Management Fest 
                    </h2>

                </div>

                <div class="ls-layer layer2" style="slidedirection: right; slidedelay: 6500;">

                    <img src="images/slider-a2.jpg" class="ls-bg">
                    <img src="images/tn_1_2.jpg" class="ls-tn">
                    <img class="ls-s3"  src="images/nf1.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : top; slideoutdirection : left;  delayin : 500; showuntil : 3100; ">
                    <img class="ls-s3"  src="images/nf2.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : right; slideoutdirection : left;  delayin : 600; showuntil : 2500; ">
                    <img class="ls-s3"  src="images/nf3.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : bottom; slideoutdirection : left;  delayin : 700; showuntil : 2600; ">
                    <img class="ls-s3"  src="images/nf4.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : left; slideoutdirection : left;  delayin : 800; showuntil : 2900; ">
                    <img class="ls-s3"  src="images/nf5.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : top; slideoutdirection : left;  delayin : 900; showuntil : 2900; ">
                    <img class="ls-s3"  src="images/nf6.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : right; slideoutdirection : left;  delayin : 1000; showuntil : 2000; ">
                    <img class="ls-s3"  src="images/nf7.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : bottom; slideoutdirection : left;  delayin : 1100; showuntil : 2400; ">
                    <img class="ls-s3"  src="images/nf8.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : left; slideoutdirection : left;  delayin : 1200; showuntil : 2200; ">
                    <img class="ls-s3"  src="images/nf9.png"  style="position: absolute; top: 0px; left: -100px; slidedirection : top; slideoutdirection : left;  delayin : 1300; showuntil : 1900; ">
                    <p  class="ls-s3" style="position: absolute; top:30px; left: 300px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 1000; showuntil : 2000; background: #ff7700;"> With Events Ranging from Technical to Creative </p>
                    <p  class="ls-s3" style="position: absolute; top:62px; left: 350px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 1500; showuntil : 2000; background: #ff7900;"> Such As...... </p>
                    <p  class="ls-s3" style="position: absolute; top:94px; left: 300px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 2000; showuntil : 2000; background: #ff7d00;"> Robotix, Encoding, Web Development, Hacking  </p>
                    <p  class="ls-s3" style="position: absolute; top:126px; left: 451px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 2500; showuntil : 2000; background: #ff8000;"> As Well As </p>
                    <p  class="ls-s3" style="position: absolute; top:158px; left: 300px; slidedirection : bottom; slideoutdirection : top; durationin : 1000; durationout : 750; delayin : 3000; showuntil : 2000; background: #ff8600;"> Photography, Puzzles, Treasure Hunt, Quizzes,Debate And Many More..... </p>
                    
                    <h2  class="ls-s2 l3-s1" style="position: absolute; top:30%; left: 20%; slidedirection : fade; slideoutdirection : left; durationin : 1500; durationout : 1000; easingin : easeInOutQuad; easingout : easeInBack; delayin : 5000; showuntil : 2500;">Charge Up Your Grey Cells</h2>
                    <h2  class="ls-s2" style="position: absolute; top:50%; left: 20%; slidedirection : fade; slideoutdirection : left; durationin : 1500; durationout : 1000; easingin : easeInOutQuad; easingout : easeInBack; delayin : 5500; showuntil : 2100; color: white; background: #ff4800; font-size: 70px; height: 100px; line-height: 100px; padding: 0px 40px; box-shadow: 0px 2px 20px -3px black;">Avenir2013</h2>
                    <h2  class="ls-s2 l3-s1" style="position: absolute; top:70%; left: 20%; slidedirection : fade; slideoutdirection : left; durationin : 1500; durationout : 1000; easingin : easeInOutQuad; easingout : easeInBack; delayin : 6000; showuntil : 500;"> Is Here!!!!! </h2>

                </div>

				</div>

			</div>
			</div>
			</section>
			<!-- end: Slider -->
		</center>
		</div>
	</div>
	

	<!--start: motion-home -->
	<div id="motion-home">
				
		<!--start: Container -->
    	<div class="container">

			<!-- start: Row -->
			<div class="row">

				<div class="span12">
					<div class="separator">	
						<div class="thumbs-up">
							<span><i class="icon-thumbs-up"></i></span>
						</div>
					</div>
				</div>

				<div class="span12">
					<div class="baseline">
		   				 
						 <h2>Design is to invent with intent. If you take away the 'invent' bit, you have an engineer. If you take away the 'intent' bit, you have an artist.</h2>
					</div>
				</div>

				<div class="span12">
					<div class="arrow-down">
	   				 	<a href="#overview" class="anchorLink"><i class="icon-circle-arrow-down"></i></a>
					</div>
				</div>

			</div><!-- end: Row -->
		</div><!-- end: container -->

	</div><!-- end: home -->			

	<hr>
	<hr>

	<!--start: motion-service -->
	<div id="motion-service">
		<div class="service-pattern">		
			<!--start: Container -->
	    	<div class="container">

				
				<a id="overview">&nbsp;</a><!--anchorLink: service -->
				
				<!-- start: Row -->
				<div class="row">

					<div class="span12">	
						<div class="title">
							<h3>Overview</h3>
						</div>
					</div>

					<div class="service">	
						<div class="span4">
								<div class="ico-service"><i class="icon-retweet"></i></div> 
							<h2> <span class="firstword">About </span> Us</h2>
							<p> The Technical cum Management Mega Festival 
of NETAJI SUBHASH ENGINEERING COLLEGE proudly presents
AVENIR 2013, where budding youngsters from all across the state
come together and engage themselves in an intriguing battle.
</p>
						</div>
						<div class="span4"> 
								<div class="ico-service"><i class="icon-pencil"></i></div> 
							<h2> <span class="firstword">Events </span> </h2>
							<p> With more than 30 events spread over 3 days, Avenir has offered the best 
to participants as well as visitors.
This year we are introducing more fun-events and expecting a lot
more gathering. Because there is always an event for every talent.
</p>
						</div>
						<div class="span4"> 
								<div class="ico-service"><i class="icon-cloud"></i></div> 
							<h2> <span class="firstword">Fun Events</span> [Allurement]</h2>
							<p> Avenir like yester years will maintain
the fun quotient with events like Treasure Hunt and for more
information please visit our events page.
Moreover we have introduced a new event which will keep 
the cricketers on their toes as gully Cricket promises to
be a great extavaganza.</p>
						</div>
					</div>
					<p>&nbsp</p>

					<div class="service">	
						<div class="span4">
								<div class="ico-service"><i class="icon-cogs"></i></div> 
							<h2> <span class="firstword">Workshops </span></h2>
							<p> If you would like to broaden your horizon and
enhance your technical and management skills then our engrossing 
workshops should be your next destination.</p>
						</div>
						<div class="span4"> 
								<div class="ico-service"><i class="icon-magic"></i></div> 
							<h2> <span class="firstword">Prizes </span></h2>
							<p> Enjoyment is not the last thing in Avenir. More than 4 lacs cash
prize and a lot of goodies are waiting to be distributed among the
winners. So, you can learn and earn at the same time.

</p>
						</div>
						<div class="span4"> 
								<div class="ico-service"><i class="icon-group"></i></div> 
							<h2> <span class="firstword">Contact </span> Us</h2>
							<p> For any queries please feel free to contact us.</p>
							<li>Akshat Singh</li> 
							<li>84720987233</li>
							<br/>
							<li>Animesh Mohapatra</li> 
							<li>8981816557</li>
						</div>
					</div>

					<div class="span12">

					<div class="arrow-down">
	   				 	<a class="anchorLink" href="#events"><i class="icon-circle-arrow-down"></i></a>
					</div>

				</div>

				</div><!-- end: Row -->
			</div><!-- end: container -->

		</div><!-- end: service-pattern -->

	</div><!-- end: service -->
	
	<!--start: comments -->
	
	
	<!--start: motion-service -->
	<div id="motion-service">
		<div class="service-pattern">		
			<!--start: Container -->
	    	<div class="container">
				<a id="events">&nbsp;</a><!--anchorLink: work -->

				<div class="row"><!-- start: Row -->

					<div class="span12">	
						<div class="title">
							<h2>Events</h2>
						</div>
					</div>
					

					<!--start: Container -->
		    	<div class="container">

					<a id="general">&nbsp;</a><!--anchorLink: about -->

		    		<!-- start: Row -->
					<div class="row">

						<div class="span12">

							<div class="about-us img-polaroid"> 
								<div class="title">
									<h3>General Events</h3>
								</div>

								<div class="row-fluid">
								
									<div class="span4">
									<div class="thumbnails">
										
										<img class="img-polaroid" alt="content" src="img/gen.jpg" >
										<span><i class="icon-info-sign"></i></span>
										
									</div>
									</div>
								
									<div class="span5">
									<div class="title">
									<h6>About It</h6>
									</div>
									<p>Creative way to express your talents with wide array of events such as Debate, Paper Presentation, Photography,  Puzzle-Duzzle , Quizzard and many more...</p>
									<br/><br/>
									<h4><a href="events.html#general">Know More</a></h4>
									</div>
									<div class="span3">
									<div class="title">
									<h6>Contacts</h6>
									</div>
									<ul>
											<li>Akshat Singh</li> 
											<li>84720987233</li>
											<br/>
											<li>Rahul Chandra</li> 
											<li>9038790257</li>
											<br/>
											<li>Satrajit Das</li> 
											<li>9903679917</li>
									</ul>	
									</div>
									
								</div>							
								
							</div>

						</div>	
						

					</div><!-- end: Row -->
				</div><!-- end: Container -->
				
				
				<div class="container">

					<a id="cyber">&nbsp;</a><!--anchorLink: about -->

		    		<!-- start: Row -->
					<div class="row">

						<div class="span12">

							<div class="about-us img-polaroid"> 
								<div class="title">
									<h3>Cybernetic Events</h3>
								</div>

								<div class="row-fluid">
								
									<div class="span4">
									<div class="thumbnails">
										
										<img class="img-polaroid" alt="content" src="img/coding.jpg" >
										<span><i class="icon-info-sign"></i></span>
										
									</div>
									</div>
								
									<div class="span5">
									<div class="title">
									<h6>About It</h6>
									</div>
									<p>Coding seems fun to you?? Hacking feels good?? Web Designing is a cake walk for you?? This is it....</p>
									<br/><br/>
									<h4><a href="events.html#cybernetics">Know More</a></h4>
									</div>
									<div class="span3">
									<div class="title">
									<h6>Contacts</h6>
									</div>
									<ul>
											<li>Sneha Bhattacharya</li> 
											<li>9547149120</li>
											<br/>
											<li>Rohit Kumar Rai</li> 
											<li>9883574591</li>
											<br/>
											
									</ul>	
									</div>
									
								</div>							
								
							</div>

						</div>	
						

					</div><!-- end: Row -->
				</div><!-- end: Container -->
					
					
					
				<div class="container">

					<a id="robotix">&nbsp;</a><!--anchorLink: about -->

		    		<!-- start: Row -->
					<div class="row">

						<div class="span12">

							<div class="about-us img-polaroid"> 
								<div class="title">
									<h3>Robotix Events</h3>
								</div>

								<div class="row-fluid">
								
									<div class="span4">
									<div class="thumbnails">
										
										<img class="img-polaroid" alt="content" src="img/bots.jpg" >
										<span><i class="icon-info-sign"></i></span>
										
									</div>
									</div>
								
									<div class="span5">
									<div class="title">
									<h6>About It</h6>
									</div>
									<p>Wanna show your bot skills?? This is the platform for you... With various events like Wall Avoider, Terra Rangers, I-Rescuer, Line Follower, RoboWars, Robosoccer...</p>
									<br/><br/>
									<h4><a href="events.html#robotix">Know More</a></h4>
									</div>
									<div class="span3">
									<div class="title">
									<h6>Contacts</h6>
									</div>
									<ul>
											<li>Alok Kumar</li> 
											<li>9681236664</li>
											<br/>
											<li>Prthijit Sarkar</li> 
											<li>8961872844</li>
											<br/>
											
									</ul>	
									</div>
									
								</div>							
								
							</div>

						</div>	
						

					</div><!-- end: Row -->
				</div><!-- end: Container -->
				
				
				<div class="container">

					<a id="gaming">&nbsp;</a><!--anchorLink: about -->

		    		<!-- start: Row -->
					<div class="row">

						<div class="span12">

							<div class="about-us img-polaroid"> 
								<div class="title">
									<h3>Gaming Events</h3>
								</div>

								<div class="row-fluid">
								
									<div class="span4">
									<div class="thumbnails">
										
										<img class="img-polaroid" alt="content" src="img/gamin.jpg" >
										<span><i class="icon-info-sign"></i></span>
										
									</div>
									</div>
								
									<div class="span5">
									<div class="title">
									<h6>About It</h6>
									</div>
									<p>If Gaming is your world?? If Fifa, Counter Strike and Need for Speed is something u love...Then come along on this Roller Coaster Ride...</p>
									<br/><br/>
									<h4><a href="events.html#gaming">Know More</a></h4>
									</div>
									<div class="span3">
									<div class="title">
									<h6>Contacts</h6>
									</div>
									<ul>
											<li>Animesh Mohapatra</li> 
											<li>8981816557</li>
											<br/>
											<li>Sudhir Singh</li> 
											<li>8100870256</li>
											<br/>
											
									</ul>	
									</div>
									
								</div>							
								
							</div>

						</div>	
						

					</div><!-- end: Row -->
				</div><!-- end: Container -->
						

			    
					
					<div class="span12">
					<br/><br/>
					<center>
					<a href="events.html"><button class="btn btn-primary btn-large " type="submit" tabindex="3">Know More</button></a>
					</center>
					</div>

					<div class="span12">

						<div class="arrow-down">
						
			   				 	<a class="anchorLink" href="#workshops"><i class="icon-circle-arrow-down"></i></a>
						</div>

					</div>
					
				</div><!-- end: Row -->

				
				
			</div><!-- end: container -->

		</div><!-- end: service-pattern -->

	</div><!-- end: service -->

	
	
	<!--start: motion-service -->
	<div id="motion-service">
		<div class="service-pattern">		
			<!--start: Container -->
	    	<div class="container">
				<a id="workshops">&nbsp;</a><!--anchorLink: work -->

				<div class="row"><!-- start: Row -->

					<div class="span12">	
						<div class="title">
							<h3>Workshops</h3>
						</div>
					</div>
					
					
					
					
					<div class="row span12">	

						<div class="thumbnails span6">
							<a href="#know" data-toggle="modal">
								<img class="img-polaroid" alt="content" src="img/android.jpg" width="402px" height="228px">
								
							</a>
						
						</div>
						
						<div class="thumbnails span6">
							
							<a href="http://www.saslab.in/" target="_blank">
								<img class="img-polaroid" alt="content" src="img/sas.jpg" width="402px" height="228px">
								
							</a>
						</div>
					

						<div class="modal hide fade in" id="project-name-modal-5" aria-hidden="true">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">�</button>
								<h3>Workshop on Android Development</h3>
							</div>
							<div class="modal-body">
								<div class="row-fluid">
									<div class="span12">
										<img alt="content" src="img/large/5.jpg" >
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<h4 class="title-modal">About it</h4>
										<p>Android Development is new trend on the way...So be ahead of time and learn the dynamics of Android Programming with this workshop...</p>
									</div>
									<div class="span6">
										<h4 class="title-modal">Link</h4>
										<ul class="icons">
											<li><i class="icon-phone"></i>  Phone: (123) 456-7890</li>
											<li><i class="icon-envelope-alt"></i> contact@companyname.com</li>
											<li><a href="#"><i class="icon-globe"></i> www.companyname.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>

					</div>
					
					<div class="span12">

						<div class="arrow-down">
			   				 	<a class="anchorLink" href="#about"><i class="icon-circle-arrow-down"></i></a>
						</div>

					</div>
					
				</div><!-- end: Row -->

				
				
			</div><!-- end: container -->

		</div><!-- end: service-pattern -->

	</div><!-- end: service -->
	
	<!--start: motion-about -->
	<div id="motion-service">
		<div class="service-pattern">	

				<!--start: Container -->
		    	<div class="container">

					<a id="about">&nbsp;</a><!--anchorLink: about -->

		    		<!-- start: Row -->
					<div class="row">

						<div class="span12">

							<div class="about-us img-polaroid"> 
								<div class="title">
									<h3>Phoenix - The Official Tech Club Of Netaji Subhash Engineering College</h3>
								</div>

								<div class="clearfix">
									<p>Avenir is the Annual Techno-Management Fest organized by Netaji Subhash Engineering College, Kolkata.
									From it's inception in 2006 the enterprise has grown manifold and engaged various technologically aggressive students from various Institutions, amassing over 800+ participants last year.
									Scheduled on 10th, 11th and 12th March, this time round, it comprises of three pulsating days of hopping across non-stop events from RoboWarZ to Encoding, from NFS to Sudoku and even rounds of quickfire chess.</p>

									<div class="profile">
										<img class="img-polaroid" alt="content" src="img/nsec.jpg">
										<br/>
										<br/>
										<h4>Netaji Subhash Engineering College</h4>
										<br/>
										<br/>
										<p>
											<h4><a href="#reach" data-toggle="modal">Reach Us</a></h4>											
											<a href="#"><i class="icon-twitter"></i></a>																						
											<a href="#"><i class="icon-facebook"></i></a>
											<a href="#"><i class="icon-google-plus"></i></a>	
										</p>
									</div>
												



								</div>
							</div>

						</div>	
						<div class="span12">

							<div class="arrow-down">
			   				 	<a class="anchorLink" href="#sponsors"><i class="icon-circle-arrow-down"></i></a>
							</div>

					    </div>

					</div><!-- end: Row -->
				</div><!-- end: Container -->

		</div><!-- end: team-pattern -->
	</div><!-- end: team -->
	
	

	
	<!--start: motion-service -->
	<div id="motion-service">
		<div class="service-pattern">		
			<!--start: Container -->
	    	<div class="container">
				<a id="sponsors">&nbsp;</a><!--anchorLink: work -->

				<div class="row"><!-- start: Row -->

					<div class="span12">	
						<div class="title">
							<h3>Sponsors</h3>
						</div>
					</div>

					<div class="span4">	

						<div class="thumbnails">
							<a href="#" data-toggle="modal">
								<img class="img-polaroid" alt="content" src="img/birla.jpg">
								<span><i class="icon-info-sign"></i></span>
							</a>
						</div>
					

						<div class="modal hide fade in" id="project-name-modal-6" aria-hidden="true">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">�</button>
								<h3>Title Sponsors</h3>
							</div>
							<div class="modal-body">
								<div class="row-fluid">
									<div class="span12">
										<img alt="content" src="img/large/6.jpg">
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<h4 class="title-modal">About it</h4>
										<p>Typography has one plain duty before it and that is to convey information in writing. No argument or consideration can absolve typography from this duty.</p>
									</div>
									<div class="span6">
										<h4 class="title-modal" >Link</h4>
										<ul class="icons">
											<li><i class="icon-phone"></i>  Phone: (123) 456-7890</li>
											<li><i class="icon-envelope-alt"></i> contact@companyname.com</li>
											<li><a href="#"><i class="icon-globe"></i> www.companyname.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>

					<div class="span4">	

						<div class="thumbnails">
							<a href="#" data-toggle="modal">
								<img class="img-polaroid" alt="content" src="img/t2.jpg">
								<span><i class="icon-info-sign"></i></span>
							</a>
						</div>
					

						<div class="modal hide fade in" id="project-name-modal-6" aria-hidden="true">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">�</button>
								<h3>Title Sponsors</h3>
							</div>
							<div class="modal-body">
								<div class="row-fluid">
									<div class="span12">
										<img alt="content" src="img/large/6.jpg">
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<h4 class="title-modal">About it</h4>
										<p>Typography has one plain duty before it and that is to convey information in writing. No argument or consideration can absolve typography from this duty.</p>
									</div>
									<div class="span6">
										<h4 class="title-modal" >Link</h4>
										<ul class="icons">
											<li><i class="icon-phone"></i>  Phone: (123) 456-7890</li>
											<li><i class="icon-envelope-alt"></i> contact@companyname.com</li>
											<li><a href="#"><i class="icon-globe"></i> www.companyname.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>	

					<div class="span4">	

						<div class="thumbnails">
							<a href="#" data-toggle="modal">
								<img class="img-polaroid" alt="content" src="img/redfm.jpg">
								<span><i class="icon-info-sign"></i></span>
							</a>
						</div>
					

						<div class="modal hide fade in" id="project-name-modal-6" aria-hidden="true">
							<div class="modal-header">
								<button aria-hidden="true" data-dismiss="modal" class="close" type="button">�</button>
								<h3>Radio Partners</h3>
							</div>
							<div class="modal-body">
								<div class="row-fluid">
									<div class="span12">
										<img alt="content" src="img/large/6.jpg">
									</div>
								</div>
								<div class="row-fluid">
									<div class="span6">
										<h4 class="title-modal">About it</h4>
										<p>Typography has one plain duty before it and that is to convey information in writing. No argument or consideration can absolve typography from this duty.</p>
									</div>
									<div class="span6">
										<h4 class="title-modal" >Link</h4>
										<ul class="icons">
											<li><i class="icon-phone"></i>  Phone: (123) 456-7890</li>
											<li><i class="icon-envelope-alt"></i> contact@companyname.com</li>
											<li><a href="#"><i class="icon-globe"></i> www.companyname.com</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>
						
					<div class="span12">

						<div class="arrow-down">
			   				 	<a class="anchorLink" href="#home"><i class="icon-circle-arrow-up"></i></a>
						</div>

					</div>

				</div><!-- end: Row -->

				
				
			</div><!-- end: container -->

		</div><!-- end: service-pattern -->

	</div><!-- end: service -->

	<div class="container">
		<div class="row">
			<div id="login" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 id="myModalLabel">Login To Your Account...</h3>
						</div>
					<div class="modal-body">
						<form class="form-horizontal">
							<div class="control-group">
								<label class="control-label" for="inputEmail">Email</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="inputPassword">Password</label>
								<div class="controls">
								<input type="password" id="inputPassword" placeholder="Password">
								</div>
							</div>
							<div class="control-group">
								<div class="controls">
								<label class="checkbox">
								<input type="checkbox"> Remember me
								</label>
								</div>
							</div>
						</form>												
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-primary">Login</button>
					</div>
					</div>
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
		
			<div id="register" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 id="myModalLabel">Login To Your Account...</h3>
						</div>
						<form class="form-horizontal" action="mail.php" method="post">
					<div class="modal-body">
						
							<div class="control-group">
								<label class="control-label" for="inputEmail">Email..</label>
								<div class="controls">
									<input type="text" id="inputEmail" placeholder="Email" name="email">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="name">Name..</label>
								<div class="controls">
								<input type="text" id="inputPassword" placeholder="Name" name="name">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="mobile">Mobile..</label>
								<div class="controls">
								<input type="text" id="inputPassword" placeholder="Mobile" name="mobile">
								</div>
							</div>
							<div class="control-group">
								<label class="control-label" for="college">College..</label>
								<div class="controls">
								<input type="text" id="inputPassword" placeholder="Your College" name="college">
								</div>
							</div>
							<!--<div class="control-group">
								<label class="control-label" for="query">Queries, If Any..</label>
								<div class="controls">
								<textarea rows="7" name="body" id="message" class="input" tabindex="3" name="query"></textarea>
								</div>
							</div>-->
																	
					</div>
					<div class="modal-footer">
						<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
						<button class="btn btn-primary" type="submit">Submit</button>
					</div>
					</form>
					</div>
						
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div id="reach" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 id="myModalLabel">Reach Us...</h3>
						</div>
					    <div class="modal-body">
							<div class="well">
								<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?hl=en&amp;ie=UTF8&amp;q=netaji+subhash+engineering+college+map&amp;fb=1&amp;gl=in&amp;hq=netaji+subhash+engineering+college+map&amp;hnear=netaji+subhash+engineering+college+map&amp;cid=0,0,2840659968644748010&amp;t=m&amp;ll=22.476059,88.414814&amp;spn=0.00694,0.00912&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe>
								<br /><small><a href="https://maps.google.co.in/maps?hl=en&amp;ie=UTF8&amp;q=netaji+subhash+engineering+college+map&amp;fb=1&amp;gl=in&amp;hq=netaji+subhash+engineering+college+map&amp;hnear=netaji+subhash+engineering+college+map&amp;cid=0,0,2840659968644748010&amp;t=m&amp;ll=22.476059,88.414814&amp;spn=0.00694,0.00912&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
							</div>
						</div>
			</div>			
		</div>
	</div>
	
	
	<div class="container">
		<div class="row">
			<div id="team" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 id="myModalLabel">Web Team...</h3>
						</div>
					    <div class="modal-body">
							<div class="well">
								<h3><b>Rohit Kumar Rai</b></h3>
								<br/>
								<h3>&#38;</h3>
								<br/>
								<h3>Official Phoenix Web Team</h3>
								
							</div>
						</div>
			</div>			
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<div id="know" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
							<h3 id="myModalLabel">Events Details</h3>
						</div>
					    <div class="modal-body">
							<div class="well">
								<h2>Coming Soon</h>
							</div>
						</div>
			</div>			
		</div>
	</div>
	
	

	
	
	
	

	<footer> 
		<div class="wrapfooter">

			<!-- start: Container -->
			<div class="container">

				<!-- start: Row -->
				<div class="row">
		
					<!-- start: copyright -->
					<div class="span3">
						<div class="copyright">
							<p class="copyright">&copy; 2013 All Rights Reserved. Phoenix.</p>
						</div>					
					</div>	

					<div class="span9">
						<div class="footer-social">
							<a href="#"><i class="icon-twitter"></i></a>							
							<a href="https://www.facebook.com/Avenir2013"><i class="icon-facebook"></i></a>
							<a href="#"><i class="icon-google-plus"></i></a>
										
						</div>
					</div>	

				</div><!-- end: Row -->	
			</div><!--end: Container -->

		</div>
	</footer>
			

	
	
  	<script src="js/jquery-1.9.0.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script src="js/maps.js"></script>
  	<script src="js/gmap3.min.js"></script>
	<script src="js/jquery.anchor.js"></script>	
	<script src="js/modernizr.custom.26633.js"></script>
	<script src="js/jquery.gridrotator.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.flexslider.js"></script>
	<script src="js/main1.js"></script>
  	<script src="js/layerslider.kreaturamedia.jquery.js"></script>
	<script type="text/javascript">
	$(".alert").alert()
	</script>

	
	<!-- end: script -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->	

	</body>

</html>