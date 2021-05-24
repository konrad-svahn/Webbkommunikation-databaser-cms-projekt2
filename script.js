setInterval(change,2000);
document.getElementById("con").innerHTML = '<img src="./galleriet/4.PNG" id="gallery">';
var i = 0; 
    function change(){
    if(i == 0){
    document.getElementById("gallery").src = "./galleriet/1.PNG" ;
    i = 1;
    }else if(i == 1){
    document.getElementById("gallery").src = "./galleriet/2.PNG" ;
    i = 2;   
    }else if(i == 2){
    document.getElementById("gallery").src = "./galleriet/3.PNG" ;
    i = 3;
    }else if(i == 3){
    document.getElementById("gallery").src = "./galleriet/4.PNG" ;
    i = 0;
    }console.log("respons");}
    console.log("respons");
