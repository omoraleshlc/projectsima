<img width="320" height="240" src="" id="picture" style="position:relative;left:0;top:0;border:1px solid silver" />
		<input id="Take-Picture" type="file" accept="image/*;capture=camera"/>
		<input type="text" name="barcode" id="barcode">
		
		
		<p id="textbit"></p>
		
		
		
		
		<script src="protected/modules/ServiciosInstitucionales/modules/Sistemas/views/ordenesSoporte/DecoderWorker.js"></script>

		<script type="text/javascript">
			var takePicture = document.querySelector("#Take-Picture"),
			showPicture = document.querySelector("#picture");
			Result = document.querySelector("#textbit");
			Canvas = document.createElement("canvas");
			Canvas.width=640;
			Canvas.height=480;
			var resultArray = [];
			ctx = Canvas.getContext("2d");
			var workerCount = 0;
			function receiveMessage(e) {
				if(e.data.success === "log") {
					console.log(e.data.result);
					return;
				}
				if(e.data.finished) {
					workerCount--;
					if(workerCount) {
						if(resultArray.length == 0) {
							DecodeWorker.postMessage({ImageData: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, Width: Canvas.width, Height: Canvas.height, cmd: "flip"});
						} else {
							workerCount--;
						}
					}
				}
				if(e.data.success){
					var tempArray = e.data.result;
					for(var i = 0; i < tempArray.length; i++) {
						if(resultArray.indexOf(tempArray[i]) == -1) {
							resultArray.push(tempArray[i]);
						}
					}
					document.querySelector("#barcode").value=e.data.code;
					Result.innerHTML=resultArray.join("<br />");
				}else{
					if(resultArray.length === 0 && workerCount === 0) {
						Result.innerHTML="Decoding failed.";
					}
				}
			}
			var DecodeWorker = new Worker("protected/modules/ServiciosInstitucionales/modules/Sistemas/views/ordenesSoporte/DecoderWorker.js");
			DecodeWorker.onmessage = receiveMessage;
			if(takePicture && showPicture) {
				takePicture.onchange = function (event) {
					var files = event.target.files
					if (files && files.length > 0) {
						file = files[0];
						try {
							var URL = window.URL || window.webkitURL;
							var imgURL = URL.createObjectURL(file);
							showPicture.src = imgURL;
							URL.revokeObjectURL(imgURL);
							DecodeBar()
						}
						catch (e) {
							try {
								var fileReader = new FileReader();
								fileReader.onload = function (event) {
									showPicture.src = event.target.result;
								};
								fileReader.readAsDataURL(file);
								DecodeBar()
							}
							catch (e) {
								Result.innerHTML = "Neither createObjectURL or FileReader are supported";
							}
						}
					}
				};
			}
			function DecodeBar(){
				Result.innerHTML="";
				showPicture.onload = function(){
					ctx.drawImage(showPicture,0,0,Canvas.width,Canvas.height);
					resultArray = [];
					workerCount = 2;
					DecodeWorker.postMessage({ImageData: ctx.getImageData(0,0,Canvas.width,Canvas.height).data, Width: Canvas.width, Height: Canvas.height, cmd: "normal"});
				}
			}
		</script>
