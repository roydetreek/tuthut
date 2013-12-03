// JavaScript Document
var Server;

	function onloadfunction() 
	{
		$('#container').hide();	
		
		Server = new FancyWebSocket('ws://192.168.0.122:9300');
		Server.bind('open', function() {
				console.log( "Tuthut Connected." );
			});
		
		//Log any messages sent from server
		Server.bind('message', function( payload ) {
			console.log( payload );
			
			if(payload == "record")
			{
				startRec(payload);
				console.log("We should start recording now");
			}else if (payload == "stop")
			{
				stopRec(payload);
				console.log("We should really stop recording now");
			}
			
		});
					
		Server.connect();
		
	}

    function PostBlob(blob, fileType, fileName) {
        // FormData
        var formData = new FormData();
        formData.append(fileType + '-filename', fileName);
        formData.append(fileType + '-blob', blob);

        // progress-bar
        var hr = document.createElement('hr');
        container.appendChild(hr);
        var strong = document.createElement('strong');
        strong.innerHTML = fileType + ' upload progress: ';
        container.appendChild(strong);
        var progress = document.createElement('progress');
        container.appendChild(progress);

        // POST the Blob
        xhr('save.php', formData, progress, function(fileURL) {
            //container.appendChild(document.createElement('hr'));
            var mediaElement = document.createElement(fileType);
            mediaElement.src = location.href + fileURL;
            mediaElement.controls = true;
            //container.appendChild(mediaElement);
            //mediaElement.play();

            progress.parentNode.removeChild(progress);
            strong.parentNode.removeChild(strong);
            hr.parentNode.removeChild(hr);
        });
    }

    var record = document.getElementById('record');
    var stop = document.getElementById('stop');

    var audio = document.querySelector('audio');

    var recordVideo = document.getElementById('record-video');
    var preview = document.getElementById('preview');

    var container = document.getElementById('container');

    var recordAudio;
	var recordVideo;
	
	function startRec(message) 
	{
		if(message == "record")
		{
			record.disabled = true;
			var video_constraints = 
			{
				mandatory: { },
				optional: []
			};
			
			navigator.getUserMedia(
				{
					audio: true,
					video: video_constraints
				}, function(stream) 
					{
						preview.src = window.URL.createObjectURL(stream);
						preview.play();
	
						// var legalBufferValues = [256, 512, 1024, 2048, 4096, 8192, 16384];
						// sample-rates in at least the range 22050 to 96000.
						recordAudio = RecordRTC(stream, 
						{
							//bufferSize: 16384,
							//sampleRate: 45000
						});
					
						recordVideo = RecordRTC(stream, 
						{
							type: 'video'
						});
	
						recordAudio.startRecording();
						recordVideo.startRecording();
	
						stop.disabled = false;
					});
		}
        
    }
	
    record.onclick = startRec();
    stop.onclick = stopRec();
	
    var fileName;
	function stopRec(message) {
		if (message == "stop")
		{
			record.disabled = false;
			stop.disabled = true;
			
			var date = new Date().getTime();
	
			console.log(date);
			fileName = date;
			
			recordAudio.stopRecording();
			PostBlob(recordAudio.getBlob(), 'audio', fileName + '.wav');
	
			recordVideo.stopRecording();
			PostBlob(recordVideo.getBlob(), 'video', fileName + '.webm');
			
			preview.src = '';
			
			window.filename = fileName;	
		}
    }

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
    }