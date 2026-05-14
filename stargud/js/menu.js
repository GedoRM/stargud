let ubicacionPrincipal = window.pageYOffset
let $nav = document.querySelector("#nav")
let ubicacionInicial = window.pageYOffset


window.addEventListener('scroll', function(){
    let ubicacionActual = window.pageYOffset;

    if(ubicacionPrincipal >= ubicacionActual){
       
       
        $nav.style.background = "white";
        
        $("#nav").css("position", "fixed");
        $("#nav").css("z-index", "1");
        $("#nav").css("margin-top", "0px");
        $nav.style.width = "100%";
        $("#nav").css("display", "");
  
    }else{
        $("#nav").css("position", "relative");
       $nav.style.width = "100%";
       $nav.style.background = "none";
       $("#nav").css("margin-top", "-100px");
       $("#nav").css("display", "none");
    }

    if(ubicacionActual <= "3"){
        $("#nav").css("position", "relative");
    }
    ubicacionPrincipal = ubicacionActual

})