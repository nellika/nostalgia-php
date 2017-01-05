window["toggleMenu"] = function toggleMenu(x) {
  x.parentNode.classList.toggle("open");
}

window["toggleAudio"] = function toggleAudio(playButton){
  var audioEl = playButton.previousElementSibling;
  audioEl.parentNode.parentNode.classList.toggle("show-guide");
  
  playButton.classList.toggle("playing");
  playButton.classList.toggle("paused");

  if(audioEl.paused){
    audioEl.play();
  }else{
    audioEl.pause();
  }
}
