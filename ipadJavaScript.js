// JavaScript Document
function nextPage()
	{
		$('#container').hide();
		$('#playControls').show();
		$('#stop').hide();
	}
	

var Server;

function send( text ) 
{
	Server.send( 'message', text );
}



function onloadfunction() 
	{
		Server = new FancyWebSocket('ws://localhost:9300');
		Server.bind('open', function() {
				console.log( "Connected." );
			});		
		Server.connect();
    	$('#playControls').hide();	
		
	}
	
    var record = document.getElementById('record');
    var stop = document.getElementById('stop');
    var deleteFiles = document.getElementById('delete');

    var audio = document.querySelector('audio');

    var recordVideo = document.getElementById('record-video');

    var container = document.getElementById('container');

    var recordAudio, recordVideo;
    
	record.onclick = function() {
		$('#record').hide();
		$('#stop').show();
      	send("record");
    };

    var fileName;
	
    stop.onclick = function() {

		$('#record').show();
		$('#stop').hide();
				
		var date = new Date().getTime();

		console.log(date);
        fileName = date;
		
		send("stop");
				
		window.filename = fileName;
		
		sendAll();
		//return to empty form to fill in new database entry
    };


    function xhr(url, data, progress, callback) {
        var request = new XMLHttpRequest();
        request.onreadystatechange = function() {
            if (request.readyState == 4 && request.status == 200) {
                callback(request.responseText);
            }
        };

        request.onprogress = function(e) {
            if (progress) progress.value = e.loaded;
        };
        request.open('POST', url);
        request.send(data);
    };