window.addEventListener("load",()=>{
    let info_inicio_sesion = document.getElementById("info-inicio-sesion");
    let registro = document.getElementById("btnregistro");
    let registroForm = document.getElementById("registro-form");

    registro.addEventListener("click",(e)=>{
        e.preventDefault();
        datosFORM = new FormData(registroForm);
        fetch("../Dynamics/php/registro.php", {
            method: "POST",
            body: datosFORM
        }).then((respuesta)=>{
            console.log(respuesta);
            return respuesta.json();
        }).then((datosJSON)=>{
            console.log(datosJSON);
            for(let tipo of datosJSON){
                console.log(tipo.nombre);
            }
        });
    });
})