<!DOCTYPE html>
<html>
<head>
	<title>web-mp3 player</title>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />

	<link rel="stylesheet" type="text/css" href="test.css">
	<script src="test.js" type="text/javascript">
	</script>

</head>
<body>
	<p> MP3 Web Player </p>
	<?php populateMusic(); ?>

</body>
</html>
 
 <?php 
 	function populateMusic(){
 		$dir = "music"; //where the tunes at?
 		//HTML foundation....
 		echo "<audio id=\"webplayerCore\" controls>
		<source id=\"webplayerSource\" src=\"highlights.mp3\" type=\"audio/mpeg\">
			Your browser doesn't support HTML 5 Audio Elements. You should upgrade! 
	</audio>
	<ol>";

 		
  		if(is_dir($dir)){ //is it a directory?
 			if($dh = opendir($dir)){ //can we open this directory? If so, create direcotry handle
 				while(($file = readdir($dh)) !== false){ //while there are files in the directory...
 					if($file != "." && $file != "..")// . and .. aren't "real" files, at least for our purposes!	
 						echo "<li onclick=\"updateSource(this);\" data-track=\"".$dir."/".$file."\">".$file."</li> \n \t"; //print out each file name wrapped in HTML :)
 				}
 				closedir($dh);//readdir($dh) is returning false; close this directory MAFACKA! HahhhhNN?
 			}
 		}
 		//don't forget to close that ordered list ;)
 		echo "</ol>";
	}//end populateMusic();




 	function listDir($dir){
 		if(is_dir($dir)){ //is it a directory?
 			if($dh = opendir($dir)){ //can we open this directory? If so, create direcotry handle
 				while(($file = readdir($dh)) !== false){ //while there are files in the directory...
 					if($file != "." && $file != "..")// . and .. aren't "real" files, at least for our purposes!
 						echo "filename:".$file."<br>"; //print out each file name wrapped in HTML :)
 				}
 				closedir($dh);//readdir($dh) is returning false; close this directory MAFACKA! HahhhhNN?
 			}
 		}
 	}//end listDir($dir);
 ?>