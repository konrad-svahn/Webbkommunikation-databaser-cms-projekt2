function förberedSwap(){
    var bilder = document.getElementsByClassName("thumbnail")
    for (let i = 0;i < bilder.length;i++){
        bilder[i].addEventListener("mouseover", swapImg)
        }
    }