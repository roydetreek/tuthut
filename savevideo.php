<?php
include_once("config.php");

$con=mysqli_connect($host,$dbUser,$dbPassword,$dbName);

if(!$con){
	echo "<h1>ERROR<h1> <h2>NO DATABASE CONNECTION</h2><p>PLEASE CHECK DATABASE CONFIGRATION & CREDENTIALS</p>";
}

if($_GET["videosource"]){
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
	$Title = $_GET["title"];
	$Description = $_GET["description"];
	
	$Permalink = str_replace(' ', '_', $Title);
		
	
	$sql = mysqli_query($con,	"INSERT INTO videos (ID, Date, Videosource, AudioSource) 
						VALUES (
						'', 
						'$Date',
						'$VideoSource',
						'')
						");
						
	if($sql){
		echo json_encode( 'succesvol');
	}else{
		echo json_encode( 'error');
	}

}else{
	echo "Silence is golden";
}
?>