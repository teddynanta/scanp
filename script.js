var video = document.querySelector("#videoElement");

if (navigator.mediaDevices.getUserMedia) {
    navigator.mediaDevices.getUserMedia({
        video:true
    })
    .then(function (stream){
        video.srcObject = stream;
    })
    .catch(function(error){
        console.log("somethings wrong, i can feel it");
    });
}