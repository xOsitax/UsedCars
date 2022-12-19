var htwos = document.getElementsByTagName("h2");
var hthrees = document.getElementsByTagName("h3");
var hfours = document.getElementsByTagName("h4");

for(var i =0; i<htwos.length;i++){ 
    //console.log(htwos[i]);
    htwos[i].addEventListener("mouseover", function(){
        this.style.textDecoration = "underline";
        
    }, true);
    htwos[i].addEventListener("mouseout", function () {
        this.style.textDecoration = "none";
    });
}

for(var i =0; i<hthrees.length;i++){ 
    //console.log(htwos[i]);
    hthrees[i].addEventListener("mouseover", function(){
        this.style.textDecoration = "underline";
        
    }, true);
    hthrees[i].addEventListener("mouseout", function () {
        this.style.textDecoration = "none";
    });
}
for(var i =0; i<hfours.length;i++){ 
    //console.log(htwos[i]);
    hfours[i].addEventListener("mouseover", function(){
        this.style.textDecoration = "underline";
        
    }, true);
    hfours[i].addEventListener("mouseout", function () {
        this.style.textDecoration = "none";
    });
}
