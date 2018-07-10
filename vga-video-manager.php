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
   
     
	</head>
	<body >

		
 
  
									
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
//Add your user_dir name  below
// Make a dir name video and videoimage in your user dir
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
			echo "<TextArea  rows=\"3\" cols=\"70\"><video src=\"http://$domain$user_dir/$dir$filename\" poster=\"http://$domain$user_dir/videoimages/$filename.jpg\"  width='580'height='440' controls=\"controls\" >";				
			echo"</video></TextArea><br>";
						
                echo "&nbsp;<a href=\"delete_vid.php?f=$filename\" onclick=\"return confirm('Are you sure you want to delete?')\" >Delete</a><br>";
			
				echo "</div>";    
				echo "<hr>";      	   	       
                          }
        }
       closedir($dh);
   }
}
?> 	 

            
			  
            </div>
		</div>
    
    
    
    <center>
	<script type="text/javascript">
	
	</script>
</body>
</html>
