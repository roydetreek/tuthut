// JavaScript Document
function sendAll(){
	var videosource = window.filename; //document.getElementById('videosource').value;	//string
	var audiosource = window.filename; //string
	var thumbnailsource = "test"; //document.getElementById('thumbnailsource').value;	//string
	var tag1 = document.getElementById('tag1').value;	//string
	var tag2 = document.getElementById('tag2').value;	//string
	var tag3 = document.getElementById('tag3').value;	//string
	var year = document.getElementById('year').value;	//int (1920-2010)
	var setting = document.getElementById('setting').value;	//string
	var character = document.getElementById('characters').value;	//string
	var emotion = document.getElementById('emotion').value;	 //int (1-5)
	var happiness = document.getElementById('happiness').value;	 //int (1-5)
	var amusing = document.getElementById('amusing').value;	//int (1-5)
	var title = document.getElementById('title').value; //string
	var description = document.getElementById('description').value; //string

	var request = $.ajax({
		url: 'savevideo.php?tag1=' +tag1+ '&tag2=' +tag2+ '&tag3=' +tag3 +'&setting=' +setting +'&characters=' +character +'&year=' +year +'&emotion=' +emotion +'&happiness=' +happiness +'&amusing=' +amusing +'&videosource=' +videosource+ '&thumbnailsource=' +thumbnailsource +'&audiosource=' +audiosource + '&title=' +title +'&description=' +description,	
		type : 'POST',
		dataType: 'json',
		success : function (result) {	
			console.log(result);
			window.location = "index_ipad.html";			
		}	
	});	
	request.fail(function( jqXHR, textStatus ) {
	  alert( "Request failed: " + textStatus );
	});
}