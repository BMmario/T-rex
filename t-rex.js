const juego = document.getElementById("juego")
const dino = document.getElementById("dino");
const cactus = document.getElementById("cactus");
const cactus2 = document.getElementById("cactus2");
const derrota = document.querySelector(".derrota");
const burguer = document.getElementById("burguer")
const burguer2 = document.getElementById("burguer2")
const hombre = document.getElementById("personaje1")
const mujer = document.getElementById("personaje2")
const formulario = document.getElementById("formulario")
 const trofeo = document.querySelector(".trofeo") 

const url = window.location.href;

var personaje = false;
var disfraz = "hombre";

var tiempo = 1;
var empezar = false;
var start = false;
var perder = false;
var velocidad = 3;
var puntuacion = document.getElementById("puntuacion");

var musica = document.getElementById("musica");
var silencio = false

var puntos = 0;
const punto = document.getElementById("puntos");
var contador = false;
var contador2 = false;
var form = true;
    

function jump(){
    
    if(dino.classList != "jump"){
        salto.play();
        dino.classList.add("jump");
        empezar = true;
        setTimeout(function(){
            dino.classList.remove("jump");
        }, 500)
    
}
    
}
    
        
    
        
    setInterval(()=>{
        
            if(disfraz == "hombre"){
                dino.style.setProperty("background-image", "url('./assets/hombre.png')");
            }else{
                dino.style.setProperty("background-image", "url('./assets/mujer2.png')");
            }
       
        
    
        setTimeout(()=>{
            if(empezar == true){
                
                juego.style.setProperty("background-image", "url('./assets/fondito3.gif')");
                if(disfraz == "hombre"){
                    dino.style.setProperty("background-image", "url('./assets/hombre2.png')");
                }else{
                    dino.style.setProperty("background-image", "url('./assets/mujer.png')");
                    
                }
            }

            
        },400)
        
        if(empezar == true && silencio == false && perder == false){
            music.play();
            
        }else{
            music.pause()
        }
       
    
   
}, 800)
    
        
    
    
    if(empezar == true && perder == false){
        
        init();
    }else if(empezar == false || perder == true){
        burguer.style.setProperty("animation", "none");
        burguer.style.setProperty("left", "600px");
         burguer2.style.setProperty("animation", "none");
        burguer2.style.setProperty("top", "-200px"); 
    }

    setInterval(()=>{
        if(empezar == true && perder == false){
            punto.innerHTML= `Tiempo: ${tiempo}`
            puntuacion.innerHTML= `Puntos: ${puntos}`
            
            tiempo = tiempo+1;
            
        }
        
        
    },1000)

function init(){
    if(perder == false){
        juego.style.setProperty("background-image", "url('./assets/fondo.gif')")
            bongo.play();
            
    }
}



let estaVivo = setInterval(function(){
    //posición Y del dinosaurio
    let dinoTop = parseInt(window.getComputedStyle(dino).getPropertyValue("top"));
    //posición X del cactus
    let cactusLeft = parseInt(window.getComputedStyle(cactus).getPropertyValue("left"));
    let cactus2Left = parseInt(window.getComputedStyle(cactus2).getPropertyValue("left"));
    let burguerLeft = parseInt(window.getComputedStyle(burguer).getPropertyValue("left"));
    let burguer2Left = parseInt(window.getComputedStyle(burguer2).getPropertyValue("left"));
     
    //Detectar colisiónvar 
    
    if(cactusLeft < 50 && cactusLeft > 0 && dinoTop >= 130){
        //colisión
        perder = true;
        coque.play();
        
    }
    if(cactus2Left < 50 && cactus2Left > 0 && dinoTop <= 100){
        //colisión
        perder = true;
        coque.play();
        
    }
    if(burguerLeft < -150 && burguerLeft > -300 && dinoTop <= 100){
        //colisión
        console.log("burguer")
        if(contador == false){
            coin.play();
            puntos= puntos + 1
            velocidad=velocidad - 0.05
            contador = true;
            
            
        }
        if(contador == true){
            setTimeout(()=>{
                contador = false
            }, 1000)
            
        
    }
         burguer.style.setProperty("top", "-1000px"); 
        
        perder=false;
    
    }
      if(burguer2Left < -150 && burguer2Left > -300 && dinoTop >= 130){
        //colisión
        console.log("burguer2")
        if(contador2 == false){
            coin.play();
            puntos= puntos + 1
            velocidad=velocidad - 0.05
            contador2 = true;
            
            
        }
        if(contador2 == true){
            setTimeout(()=>{
                contador2 = false
            }, 1000)
            
        
    }
         burguer2.style.setProperty("top", "-200px"); 
        
        perder=false;
    
    }  
    
    
    if(perder == true){
        
        cactus2.classList.remove("cactus1");
        derrota.classList.remove("derrota");
        derrota.classList.add("perdiste");
        trofeo.classList.add("perder");
        punto.style.setProperty("display", "none"); 
        punto.style.setProperty("left", "172px"); 
        puntuacion.style.setProperty("display", "none"); 
        puntuacion.style.setProperty("display", "none"); 
    }
    
}, 10);




    


setInterval(()=> {
    
    
    if(empezar == true && perder == false){
       
        
        var random3 = Math.random()*100;
        var random2 = Math.random()*100;
        
    
       
        
        /*setInterval(()=>{
             if(random3 < 70 && perder == false){
                

                
                velocidad=velocidad - 0.00005
               cactus.style.setProperty("animation", "block "+ velocidad+"s "+ "infinite "+ "linear");
               cactus.style.setProperty("top", "90px");
            
               
           }else if(perder == true){
            cactus.style.setProperty("animation", "none");
            cactus.style.setProperty("top", "500px");
           }
        }, 50) */
        var randomburguer = Math.random()*100
        var randomburguer2 = Math.random()*100
        
        if(randomburguer < 70){
                

                
            
           burguer.style.setProperty("animation", "block "+ velocidad+"s "+ " linear");
           burguer.style.setProperty("top", "-330px"); 
           
           setTimeout(()=>{
            randomburguer = Math.random()*100
            burguer.style.setProperty("animation", "none");
            burguer.style.setProperty("left", "600px");
        }, velocidad*1000)
        
    
       }else{
        burguer.style.setProperty("animation", "none");
        burguer.style.setProperty("left", "600px");
       }
        if(randomburguer2 < 70){
                

                
            
        burguer2.style.setProperty("animation", "block "+ velocidad+"s "+ " linear");
        burguer2.style.setProperty("top", "-750px"); 
        setTimeout(()=>{
            randomburguer2 = Math.random()*100
            burguer2.style.setProperty("animation", "none");
            burguer2.style.setProperty("top", "-200px");
        }, velocidad*1000)
        
        
 
    }else{
     burguer2.style.setProperty("animation", "none");
     burguer2.style.setProperty("top", "-200px");
    }  

    
       
        
        
    
    
    
       
        
    } 
    if(random3 > 70){
        
        cactus2.style.setProperty("animation", "block "+ velocidad+"s "+ "linear");
        cactus2.style.setProperty("left", "600px");
        var random2 = Math.random()*100
        setTimeout(function(){
            cactus2.style.setProperty("animation", "none");
            
            random3 = Math.random()*100
        },velocidad*1000)
    }else{
        cactus2.style.setProperty("animation", "none");
        
    }
    
        
    

    if(random3 < 70){
        
        
        cactus.style.setProperty("animation", "block "+ velocidad+"s " + "linear");
        cactus.style.setProperty("top", "90px");
        setTimeout(function(){
            cactus.style.setProperty("animation", "none");
            cactus.style.setProperty("top", "500px");
            random3 = Math.random()*100
        },velocidad*1000)
        
    }else{
        cactus.style.setProperty("animation", "none");
        cactus.style.setProperty("top", "500px");
    }
    



    var random3 = Math.random()*100;

    
},velocidad*1000)

setInterval(()=>{
    if(perder == true){
        if(form == true){
            formulario.innerHTML +="<label for='puntos'>Puntos</label><br>"
            formulario.innerHTML +="<input type='number' name='puntos' value="+puntos+" readonly='readonly'><br>"

            formulario.innerHTML +="<label for='tiempo'>Tiempo</label><br>"
            formulario.innerHTML += "<input type='number' name='tiempo' value="+tiempo+" readonly='readonly'><br>"
            
            formulario.innerHTML +="<label for='nombre'>Nombre</label><br>"
            formulario.innerHTML += "<input type='text' name='nombre' placeholder='Nombre' required><br>"

            formulario.innerHTML +="<label for='telefono'>Telefono</label><br>"
            formulario.innerHTML += "<input type='tel' name='telefono' placeholder='Telefono' required><br>"
            formulario.innerHTML += "<input type='submit' value='Enviar'>"
            form = false
        }
         
 

        
        burguer2.style.setProperty("animation", "none");
         burguer2.style.setProperty("top", "-200px");
         burguer.style.setProperty("animation", "none");
            burguer.style.setProperty("left", "600px");
            dino.style.display = "none";
    }
    if(velocidad <= 0.2){
        velocidad = 1;
    }

    if(perder == false && personaje == true){
        punto.style.display = "inline-block"
        punto.style.top = "-140px"
        punto.style.left = "400px"
    
        puntuacion.style.top = "-140px"
        puntuacion.style.left = "430px"
    }
}, 100)



if(personaje == false){
    dino.style.display = "none"
    puntuacion.style.display = "none"
    musica.style.display = "none"
    punto.style.display = "none"
}



document.addEventListener("keydown", function(event) {
    if(perder == false && personaje == true){
        jump()
        
        
        
    }
    
    
})

juego.addEventListener("click", function(event) {
    if(personaje == true){

    if(perder == false){
        dino.style.display = "flex"
    puntuacion.style.display = "inline-block"
    punto.style.top = "-140px"
    punto.style.left = "400px"

    puntuacion.style.top = "-140px"
    puntuacion.style.left = "430px"
    
    musica.style.display = "inline-block"
    punto.style.display = "inline-block"
        
    }else{
        
        music.currentTime = 0;
        velocidad = 3;
        puntos = 0;
        tiempo = 0;
        perder = false;
        derrota.classList.add("derrota");
        punto.classList.add("puntos");
        puntuacion.classList.add("puntuacion");
        derrota.classList.remove("perdiste");
        dino.style.display = "flex"
        document.location.reload();
         trofeo.classList.remove("perder"); 
         
    }
}


})

if(perder == true){
    punto.style.display("none");
    puntuacion.style.display("none");
}

juego.onmousedown = function(){
    jump()
}

hombre.addEventListener("click", function(event) {
    dino.style.setProperty("background-image", "url('./assets/hombre.png')");
    disfraz = "hombre"
    personaje = true;
    hombre.classList.add("disfrazoff")
    mujer.style.display = "none"

});

mujer.addEventListener("click", function(event) {
    dino.style.setProperty("background-image", "url('./assets/mujer.png')");
    disfraz = "mujer";
    personaje = true;
    hombre.classList.add("disfrazoff")
    mujer.style.display = "none"
    
});

musica.addEventListener("click", function(event) {
    if(silencio == false){
        musica.innerHTML= `🔇`
        silencio = true
        music.pause()
    }else{
        musica.innerHTML= `🎶`
        silencio = false
        music.play();
    }
    
});



//sonidos
var salto = document.getElementById("salto") 
var coque = document.getElementById("choque") 
var coin = document.getElementById("coin") 

var music = document.getElementById("music") 
music.volume = 0.2
    

//Subida de puntos

