/*(function(){
  var video = document.getElementById('video'),
  vendorUrl = window.URL || window.webkitURL;

  navigator.getMedia = navigator.getUserMedia || navigator.webkitGetUserMedia || navigstor.mozGetUserMedia || navigator.msGetUserMedia;

  navigator.getMedia({
    video:true,
    audio:false
  },function(stream){
    video.src = vendorUrl.createObjectURL(stream);
    video.play();
  },function(error){
    //An error occured
    //error.code
    console.log("Error: "+error.code);
  });
})();*/

// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}

// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
//var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click", function() {
	context.drawImage(video, 0, 0, 640, 480);
});
