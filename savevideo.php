<?php
include_once("config.php");

$con=mysqli_connect($host,$dbUser,$dbPassword,$dbName);

if(!$con){
	echo "<h1>ERROR<h1> <h2>NO DATABASE CONNECTION</h2><p>PLEASE CHECK DATABASE CONFIGRATION & CREDENTIALS</p>";
}
if (isset($_POST["name"])){
	$name =  $_POST["name"];
	$dob =  date( "Y-m-d", strtotime( $_POST["dob"] ) );
	$videosource =  $_POST["videosource"];
	$object =  $_POST["object"];
	$location =  $_POST["location"];
	$cast =  $_POST["cast"];
	$year =  $_POST["year"];
	$category1 =  $_POST["category1"];
	$category2 =  $_POST["category2"];
	$category3 =  $_POST["category3"];
	$title =  $_POST["title"];
	$description =  $_POST["description"];
	$tag1 =  $_POST["tag1"];
	$tag2 =  $_POST["tag2"];
	$tag3 =  $_POST["tag3"];
	//http://localhost/tuthut/savevideo.php?name=lol&dob=11-11-2013&object=vork&location=denemarken&cast=vrienden&year=2013&category1=1&category2=2&category3=3&title=wraak&description=komisch&tag1=1&tag2=2&tag3=3
	//$Permalink = str_replace(' ', '_', $Title);
		
	//$format = 'd-m-Y';
	//$date = DateTime::createFromFormat($format, $dob);
		//echo $dob;
	
	$sql = mysqli_query($con,  "INSERT INTO videos (ID, title, description, object,videosource,name,dob,location,cast,year,category1,category2,category3,tags) 
	           VALUES (
	           '', 
	           '$title',
	           '$description',
	           '$object',	 
			   '$videosource',
	           '$name',
			   '$dob',
	           '$location',
	           '$cast',
	           '$year',
	           '$category1',
	           '$category2',
	           '$category3',
			   ' ".$tag1." , ".$tag2." , ".$tag3." ,'
	           )");		
			
	if($sql){
		echo mysqli_insert_id($con);
		//echo json_encode( 'succesvol');
		//$last_id = mysql_insert_id();
		//printf $last_id;
	}else{
		//echo mysql_error($sql);
		echo json_encode( 'error');
		
	}
}else{
	echo 'dafuq';
}

?>