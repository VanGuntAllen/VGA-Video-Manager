<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html>

<head>
    <title> Image delete</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="style.css" media="all">
    <meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
</head>

<body>
   

<div class="main">
	<div class="main-inner">
			
			<?php 
$filename = $_GET['f'];
$upload_dir = './videoimages/';
$file_path = $upload_dir . $filename;
if(is_file($file_path)) {
	unlink($file_path);
	echo "<p>The file: <b>" . $filename . "</b> has been deleted.</p>";
	echo "<p>Back to <a href=\"video-image-manager.php\">Image Manager</a></p>";
} 

?>

            <div class="clear"></div>  
            </div>
    </div>

    </div>
    
</body>
</html>
