window.addEventListener("load",()=>{
    const infoPuntos = document.getElementById("info-puntos");
    const cerrar = document.getElementById("cerrar");

    let casa;

    fetch("../php/extraccion.php")
    .then((respuesta)=>{
        console.log (respuesta);
        return respuesta.json();
    }).then ((datosJSON)=>{
        console.log(datosJSON);
        let info = datosJSON;
        if(info.casa = 1)
            casa = "Ajolote";
        else if(info.casa = 2)
            casa = "Halcon";
        else
            casa = "Teporingos";
        infoPuntos.innerHTML += info.nombre +" tus puntos son "+ info.puntos_usuario+" tu casa es "+ casa;
        
    });
});