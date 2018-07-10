
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
    <title>Video Image Manager</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
   
     
	</head>
	<body >

		
 
  
    
    
    									
<?php 

if(isset($_FILES['upload'])){
 $target = "./videoimages/".basename($_FILES['upload']['name']) ;
 
  
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
  ?> 		    
		    
	 </CENTER>		</div>		 <p><br/> 	
<hr>
<p>

			      <?php 
  
  
   
   //////////////////////////////////////////////
//   Video Admin Script Design   by Van-Gunt Allen VGA  .,
// copyright 2018 vga.smtvs.com vanguntallen@gmail.com
// 
//Add your user_dir name  below
// Make a dir name videoimages in your user dir
//////////////////////////////////////////////
   
  
  
#define $user_dir;		
   
   $user_dir = "vid-script"
    ?> 	
    
      
         <?php 


$domain = $_SERVER['HTTP_HOST'];

$dir = "videoimages/";


if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($filename = readdir($dh)) !== false) {
            if ($filename[0]!= "." && $filename[0]!= ".." )
             {
                echo "<div class='image'>";
                echo "<a href='$dir$filename'><img src='$dir$filename'width='200'></a><P>";
                echo "<P>Image URL :&nbsp;";                
                echo "<input value=\"http://";  
				echo "$domain/$user_dir$dir$filename \"";				
				echo 'size=\"50\" onclick=\"select_all(this)\">';
				
				echo "&nbsp;<a href=\"delete.php?f=$filename\" onclick=\"return confirm('Are you sure you want to delete?')\" >Delete</a>";
				  echo "<p>";  
				  echo "<TextArea  rows=\"2\" cols=\"70\"><img src='http://$domain/$user_dir/videoimages/$filename'width='200'></TextArea>"; 
				    echo "</div><hr><p>";     
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
