<?php

$con=mysqli_connect("localhost","root","","NOM");
$Date = date("Ymd"); 
$VideoSource =  "uploads/" . $_GET["videosource"] . ".webm";
$AudioSource =  "uploads/" . $_GET["audiosource"] . ".wav";
$Thumbnailsource =  $_GET["thumbnailsource"];
$Tag1 =  $_GET["tag1"];
$Tag2 =  $_GET["tag2"];
$Tag3 =  $_GET["tag3"];
$Setting =  $_GET["setting"];
$Characters =  $_GET["characters"];
$Year =  $_GET["year"];
$Emotion =  $_GET["emotion"];
$Happiness =  $_GET["happiness"];
$Amusing =  $_GET["amusing"];
	

$sql = mysqli_query($con,	"INSERT INTO videos (ID, Date, Videosource, AudioSource, Thumbnailsource,Tags,Setting,Characters,Year,Emotion,Happiness,Amusing) 
					VALUES (
					'', 
					'$Date',
					'$VideoSource',
					'$AudioSource',
					'$Thumbnailsource',
					' ".$Tag1." , ".$Tag2." , ".$Tag3." ,',
					'$Setting',
					'$Characters',
					'$Year',
					'$Emotion',
					'$Happiness',
					'$Amusing')
					");
					

echo json_encode( 'succesvol') ;
?>