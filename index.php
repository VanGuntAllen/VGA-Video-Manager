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
    <title>Video </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
           
  
  
  
    <style scoped>video {
  width: 55%    !important;
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
	<body id="top">
	    
	       <?php  
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
			
				echo "</div>";    
				echo "<hr>";      	   	       
                          }
        }
       closedir($dh);
   }
}
?> 	 

            
	



	    
	    <script type="text/javascript">
	
	</script>
</body>
</html>
