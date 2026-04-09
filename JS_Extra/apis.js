const video = document.getElementById("video");
const startBtn = document.getElementById("start");
const stopBtn = document.getElementById("stop");
const snapBtn = document.getElementById("snap");
const clearBtn = document.getElementById("clear");
const downloadBtn = document.getElementById("download");
const canvas = document.getElementById("canvas");

let stream;

startBtn.addEventListener("click", async function () {
  stream = await navigator.mediaDevices.getUserMedia({
    video: true,
  });

  video.srcObject = stream;

});

stopBtn.addEventListener('click', function() {
    stream.getTracks().forEach(track => track.stop());
})

snapBtn.addEventListener('click', function() {
    canvas.width = video.videoWidth;
    canvas.height = video.videoHeight;

    canvas.getContext('2d').drawImage(video, 0, 0);
    
});

clearBtn.addEventListener('click', function() {
    canvas.getContext('2d').clearRect(0, 0, canvas.width, canvas.height)
})


downloadBtn.addEventListener('click', function() {
    const a = document.createElement('a');
    a.href = canvas.toDataURL('image/png');
    a.download = "snap.png";
    a.click();
});