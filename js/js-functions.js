window["toggleMenu"] = function toggleMenu(x) {
  x.parentNode.classList.toggle("open");
}

window["toggleAudio"] = function toggleAudio(playButton){
  var audioEl = playButton.previousElementSibling;
  audioEl.parentNode.parentNode.classList.toggle("show-guide");

  if(audioEl.paused){
    audioEl.play();
    // playButton.innerHTML = 'FR';
    playButton.classList.toggle("playing");
  }else{
    audioEl.pause();
    playButton.classList.toggle("paused");
  }
}
