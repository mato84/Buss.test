function mxUpload(){
    var packetSize,
    self = this;

    function getFile(fileId){
        var fileData = localStorage[fileId];
        if (fileData & (fileData!=false)){
            var  fileParts = fileData.split("|");
            setDetails({
                fileId:fileParts[0],
                token:fileParts[1],
                currentPackage:fileParts[2]
            });
        }else{
            // submit file information to server
            var formData = new FormData();
            formData.append('totalSize', self.totalSize);
            formData.append('type', self.type);
            formData.append('fileName', self.sfileName);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', self.url, true);
            xhr.onload = function(e) {

                var response = JSON.parse(xhr.responseText);

                if (response.action=="new_upload"){
                    setDetails(setFile(fileId,response.fileid,response.token));
                }
            };

            xhr.send(formData);
        }
    }

    self.file = document.getElementById('filepicker').files[0];

    self.totalSize = self.file.size;

    self.url = "index.php?op=upload";
    self.type = self.file.type;
    self.fileName = self.file.name;
    self.sfileName = self.fileName;

    self.packetSize = 512 * 512*2; // bytes, defaults to 256Kb packets

    self.fileId = self.sfileName+"|"+self.type+"|"+self.totalSize;
    localStorage[self.fileId] = false;

    self.totalPackages = Math.ceil(self.totalSize/self.packetSize);

    //document.getElementById('ubutton').hidden = true;
    // Create progress bar
    $('#mxprogress').show(250);
    $("#pdone").width("0%"); //initalize the jquery progressbar

    self.fileDetails = getFile(self.fileId);

    
    /**
     * Write to localStorage
     * @param {String}  fileId  "fname" + "ftype" + "ftotalSize"
     * @param {Number}  serverFileId  a numeric value, get form server (will be the name of the file on the server)
     * @param {String}  packageId  md5() hash of the package, get from server
     * @returns {Object}  Deatils of the package being uploaded
     */
    function setFile(fileId,serverFileId,token,packageId){
        packageId = packageId || 0;
        localStorage[fileId] = serverFileId+"|"+token+"|"+packageId;
        return {
            fileId:serverFileId,
            token:token,
            currentPackage:packageId
        };
    }
    
    /**
     * If we haven't uploaded all the packages yet, then upload the current package, else informing
     * the server to merge the packets (or slices) on the server side
     * @param {Object} file details from setFile()
     */
    function setDetails(details){
        self.fileDetails = details;
        if (self.fileDetails.currentPackage<self.totalPackages){
            uploadPacket(getPacket(self.fileDetails.currentPackage));
        }else{
            // finished uploading data, let's close up the file on the server

            var formData = new FormData();
            formData.append('fileid', self.fileDetails.fileId);
            formData.append('token', self.fileDetails.token);
            formData.append('fileName', self.sfileName);


            var xhr = new XMLHttpRequest();
            xhr.open('POST', self.url, true);
            xhr.onload = function(e) {
                var response = JSON.parse(xhr.responseText);
                if (response.action=="complete"){

					//set progressbar to 100%, set the serverFileId for the dowload link
					//options.progressHandler(100, response.file);

					//last parameter is 'alldone' plus the timestamp
					var currTimeStamp = Math.round(new Date().getTime() / 1000);
					setFile(self.fileId, self.fileDetails.fileId, self.fileDetails.token, 'alldone|' + currTimeStamp);

                    // ----------------- Finish start
                    $('#mxprogress').hide(250);
                    $('input[name=\'filename\']').attr('value', 'temp/' + self.sfileName);
                    $('input[name=\'mask\']').attr('value', self.fileName);
                    FilenameChange();
                    //document.getElementById('desc').value = self.fileName.substr(0, self.fileName.lastIndexOf('.'));
                    // ----------------- Finish end
                }
            };
            xhr.send(formData);

        }
    }
    
    /**
     * Log the success. Then initiate the next packet upload (as long as the pause button is not pressed) 
     */
    function updateDetails(details){
        details.currentPackage++;
        var fileDetails = setFile(self.fileId,details.fileId,details.token,details.currentPackage);
        
			setDetails(fileDetails);
    }
    
   	/**
   	 * Return the proper slice (packet)
   	 * @param {Number} packetId 
   	 * @returns {Blob} Returns a new Blob object containing the data in the specified range of bytes
   	 */
    function getPacket(packetId){
        
        var startByte = packetId  * self.packetSize,
        endByte = startByte+self.packetSize,
        packet;
        
        if ('mozSlice' in self.file) {
            // mozilla
            packet = self.file.mozSlice(startByte, endByte);
        } else if ('webkitSlice' in self.file) {
            // webkit
            packet = self.file.webkitSlice(startByte, endByte);
        } else packet = self.file.slice(startByte, endByte);
        return packet;
    }
    
    function updateProgress(details,position){
        
        var percent = (((details.currentPackage*self.packetSize)+position)/self.totalSize)*100;
        $("#pdone").width(percent + "%");
    }
    
  
    function uploadPacket(packet){
	
        var xhr = new XMLHttpRequest();
        var url = self.url + "&fileid="+self.fileDetails.fileId+"&token="+self.fileDetails.token+"&packet="+self.fileDetails.currentPackage+'&fileName='+self.sfileName+'';
        var fileDetails = self.fileDetails;
        updateProgress(fileDetails,0);
        xhr.open('POST', url, true);
        xhr.onprogress = function(e){
            updateProgress(fileDetails,e.position);
            
        };
		
		/**
		 * If the server uploaded the packet successfully, then go to updateDetails() where log the success,
		 * and initiate uploading the next package (if we not paused while it uploaded)
		 */
        xhr.onload = function (e){
            var response = JSON.parse(xhr.responseText);  
            if (response.action=="new_packet" && response.result=="success"){                
                updateDetails(fileDetails);
            }      
        
        };

        xhr.setRequestHeader('Content-Type', 'text/plain; charset="utf-8"');
        
        
        xhr.send(packet);
    }
    
}
