<?
//////////////////////////////////////////////
//   Video Admin Script Design   by Van-Gunt Allen VGA  .,
// copyright 2018 vga.smtvs.com vanguntallen@gmail.com
// 
//////////////////////////////////////////////
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Video Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 
    


    <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
    
    <script src="http://smtvs.com/temp-home/js/jquery-1.11.1.min.js"></script>
    <link href="http://smtvs.com/temp-home/css/style.css" rel='stylesheet' type='text/css' media="all" />

    
    <style type="text/css">
    /***
User Profile Sidebar by @keenthemes
A component of Metronic Theme - #1 Selling Bootstrap 3 Admin Theme in Themeforest: http://j.mp/metronictheme
Licensed under MIT
***/

body {
  background: #F1F3FA;
}

/* Profile container */
.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #fff;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usertitle-job {
  text-transform: uppercase;
  color: #5b9bd1;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px;
}

.profile-userbuttons {
  text-align: center;
  margin-top: 10px;
}

.profile-userbuttons .btn {
  text-transform: uppercase;
  font-size: 11px;
  font-weight: 600;
  padding: 6px 15px;
  margin-right: 5px;
}

.profile-userbuttons .btn:last-child {
  margin-right: 0px;
}
    
.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #93a3b5;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 50px;
  background: #fff;
  min-height: 500px;
}
    </style>

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<!-- /container -->  

<link href="http://smtvs.com/temp-home/css/bootstrap.min.css" rel='stylesheet' type='text/css' media="all" />
  
<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://smtvs.com/services/js/jquery.min.js"></script>
		<script src="http://smtvs.com/services/js/skel.min.js"></script>
		<script src="http://smtvs.com/services/js/skel-layers.min.js"></script>
		<script src="http://smtvs.com/services/js/init.js"></script>
	
			<link rel="stylesheet" href="http://smtvs.com/services/css/skel.css" />
			<link rel="stylesheet" href="http://smtvs.com/services/css/style.css" />
			<link rel="stylesheet" href="http://smtvs.com/services/css/style-xlarge.css" />
	
     
	</head>
	<body id="top">

		<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h3><a href="#">VGA DEVELOPERS@SMTVS </a></h3>
				<nav id="nav">
					<ul>
						<li><a href="/">Home</a></li>
						
						<li><a href="./video-manager.php">UploadVideo</a></li>
						<li><a href="./video-image-manager.php">UploadImage</a></li>
						<li><a href="/user-signup.php" class="button special">Sign Up</a></li>
						
					</ul>
				</nav>
			</header>
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				
				
				<div class="profile-userpic">
				
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
					
					</div>
					<div class="profile-">
						
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
				
				<div class="profile-userbuttons">
				</div>
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
					
					
						
					
						
						<li>
							<a href="./video-image-manager.php">
							<i class="glyphicon glyphicon-upload"></i>
							Upload Video image</a>
						</li>
						
						<li>
							
				<a href="./video-manager.php" >

							<i class="glyphicon glyphicon-upload"></i>
							Upload Your  Video </a>
						</li>
							<li>
				
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
         VGA Video Manager V1.0...    
      <p> <hr>  
      
     <div class="upload">
	
		
	<CENTER>	
									
<?php 

if(isset($_FILES['upload'])){
 $target = "./video/".basename($_FILES['upload']['name']) ;
 
  
if(move_uploaded_file($_FILES['upload']['tmp_name'],$target))   echo "Video uploaded successfully OK! ";
 echo "<form enctype='multipart/form-data' action='' method='POST'>";
  echo "<input   name='upload' type='file'/></div><input   type='submit' value='Upload Video '/>";
  echo "</form>";

}
 else{
  echo "<form enctype='multipart/form-data' action='' method='POST'>";
  echo "<input  name='upload' type='file'/><input    type='submit' value='Upload Video'/>";

  echo "</form>";
 }
  ?> </CENTER>			  <p><br/> 		  
          
	</div> 
   <?php 
   
   
   
   
//////////////////////////////////////////////
//   Video Admin Script Design   by Van-Gunt Allen VGA  .,
// copyright 2018 vga.smtvs.com vanguntallen@gmail.com
// 
//////////////////////////////////////////////

#define $user_dir;		
   
   $user_dir = "/vid-script"
    ?> 	
    
      
      <?php	
	
$domain = $_SERVER['HTTP_HOST'];

$dir = "video/";
 
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($filename = readdir($dh)) !== false) {
            if ($filename[0]!= "." && $filename[0]!= ".." )
             {
                echo "<div class=\"image\">";
			  
			   
			   
			   
			   
                echo "<video src=\"http://$domain$user_dir/$dir$filename\" poster=\"http://$domain$user_dir/videoimages/$filename.jpg\"  width='580'height='440' controls=\"controls\"  ></video><br>";  
				echo "Video :$filename&nbsp;<br>"; 
			echo "<TextArea  rows=\"20\" cols=\"70\">
			
			 
			 <!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>Video Manager</title>
    
    
   
	 

		<!--[if lte IE 8]><script src=\"http://smtvs.com/services/js/html5shiv.js\"></script><![endif]-->
		<script src=\"http://smtvs.com/services/js/jquery.min.js\"></script>
		<script src=\"http://smtvs.com/services/js/skel.min.js\"></script>
		<script src=\"http://smtvs.com/services/js/skel-layers.min.js\"></script>
		<script src=\"http://smtvs.com/services/js/init.js\"></script>
	
			<link rel=\"stylesheet\" href=\"http://smtvs.com/services/css/skel.css\" />
			<link rel=\"stylesheet\" href=\"http://smtvs.com/services/css/style.css\" />
			<link rel=\"stylesheet\" href=\"http://smtvs.com/services/css/style-xlarge.css\" />
		
    <style scoped>video {
  width: 100%    !important;
  height:  auto  !important;
}</style>



 <style >
.video-container {
	position:relative;
	padding-bottom:77.25%;
	padding-top:0px;
	height:0;
	overflow:hidden;
}

.video-container iframe, .video-container object, .video-container embed {
	position:absolute;
	top:10;
	left:0;
	width:100%;
	height:100%;
}
</style>
	 
	</head>
	
	<body id=\"top\">
			
			
		
			<header id=\"header\" class=\"skel-layers-fixed\">
				<h3><a href=\"#\">VGA DEVELOPERS@SMTVS </a></h3>
				<nav id=\"nav\">
					<ul>
						<li><a href=\"\">Home</a></li>
						
						<li><a href=\"./video-manager.php\">UploadVideo</a></li>
						<li><a href=\"./video-image-manager.php\">UploadImage</a></li>
						<li><a href=\"/user-signup.php\" class=\"button special\">Sign Up</a></li>
						
					</ul>
				</nav>
			</header>
	
		
		<!-- Main -->
			<section id=\"main\" class=\"wrapper style1\">
				<header class=\"major\">
					<h2>SMTVS Creative Cloud </h2>
					<p>Star Media Television Studio , IP TV Publishing platform </p>
				</header>
				<div class=\"container\">
					<div class=\"row\">
						<div class=\"8u\">
							<section>
								<h2>We are  Reliable and Trusted media service</h2>
			<video src=\"http://$domain$user_dir/$dir$filename\" poster=\"http://$domain$user_dir/videoimages/$filename.jpg\"  width='780'height='440' controls=\"controls\" >";				
			echo"</video>
			 
								<p>
                                
                               
                               
                                
                                Our staff from day one work hand in hand with our clients to assure that their job will receive the individual attention and care Learn More .
                                SMTVS Media Server comprises complete streaming media platform to use for web casting, video conferencing, distance learning, video
                                surveillance, internet Radio/TV, entertainment,and other industries that incorporate streaming of rich multimedia content over IP networks.
                                
                                
                                Account 
                                All on demand streaming accounts include a media control panel with administrative, billing, and streaming account management for all services with  24/7 Support is available  fast response via online helpdesk and email. 

<p>
Media Cloud Hosting services

SMTVS streaming media hosting service offers our members user's complete support for streaming all major media formats Windows Media Silverlight,Real Audio, Flash and QuickTime. media.  Our infrastructure offers plenty of resources  for streaming video over IP ,optimizeing your video for the best  performance. that will benefit your organization media web site .





.</p>
	  .</p>
								<p>.</p>
							</section>
						</div>
						<div class=\"4u\">
							<section>
                                <h3>Creative Cloud service
</h3>
								<p>
                               
                                
                                Creative tools for media site creation
                                Use Creative Cloud to design Site for web casting, video conferencing, distance learning, video surveillance, internet Radio/TV, entertainment , industries incorporate . Manage your videos from one dashboard.
                               .</p>
								<ul class=\"actions\">
									<li><a href=\"#\" class=\"button alt\">Learn More</a></li>
								</ul>
							</section>
							<hr />
                            <section>
                                <h3>Company</h3>
                                <ul class=\"alt\">
                                    <li><a href=\"#\">Leadership</a></li>
                                    <li><a href=\"#\">Perspectives</a></li>
                                    <li><a href=\"#\">Careers</a></li>
                                    <li><a href=\"#\">News & Event</a></li>
                                    
                                   
                                </ul>
                            </section>
                            
						
						</div>
					</div>		
			
		<footer id=\"footer\">
		
		
		
		
                
						<div class=\"6u\">
                            <h2>   Advertising</h2>
                            <p>
                            
                                                        
                            Banner are prominently located on specific pages
                            throughout this site. TV pre-rolls, mid-rolls & post-rolls Ad can be static images, animated Gif's or Flash files with a direct link to the destination of your
                            choice. This method of promotion offers maximum exposure with thousands of views from highly targeted traffic generate revenues and new users to your  site.
                            
                            .</p>
                            
                          
							<ul class=\"icons\">
								<li><a href=\"#\" class=\"icon fa-twitter\"><span class=\"label\">Twitter</span></a></li>
								<li><a href=\"#\" class=\"icon fa-facebook\"><span class=\"label\">Facebook</span></a></li>
								<li><a href=\"#\" class=\"icon fa-instagram\"><span class=\"label\">Instagram</span></a></li>
								<li><a href=\"#\" class=\"icon fa-linkedin\"><span class=\"label\">LinkedIn</span></a></li>
								<li><a href=\"#\" class=\"icon fa-pinterest\"><span class=\"label\">Pinterest</span></a></li>
							</ul>
						</div>
					</div>
                    <ul class=\"copyright\">
                    <li>© 2006 Star Media Television Studio , IP TV Publishing platform 2016</li>
                    
                    </ul>
					
				</div>
		</footer>
			</body>
</html>
			
			</TextArea><br>";
						
                echo "&nbsp;<a href=\"delete_vid.php?f=$filename\" onclick=\"return confirm('Are you sure you want to delete?')\" >Delete</a><br>";
			
				echo "</div>";    
				echo "<hr>";      	   	       
                          }
        }
       closedir($dh);
   }
}
?> 	 

          
                               


                              .</p>
								<p>.</p>
							</section>
						</div>     
			  
            </div>
		</div>
		
	</div>
	
</div>
<center>
	<script type="text/javascript">
	
	</script>
</body>
</html>
