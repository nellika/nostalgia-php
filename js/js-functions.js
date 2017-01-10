window["toggleMenu"] = function toggleMenu(x) {
  x.parentNode.classList.toggle("open");
}

window["toggleAudio"] = function toggleAudio(audioEl, audioToggle){
  audioEl.parentNode.parentNode.classList.toggle("show-guide");
  if(audioToggle) { audioAutoControl(audioEl) };
}

function audioAutoControl(audioEl){
  if(audioEl.paused){
    audioEl.play();
  }else{
    audioEl.pause();
  }
}
