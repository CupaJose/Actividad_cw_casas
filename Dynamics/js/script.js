window.addEventListener("load",()=>{
    let registro = document.getElementById("btnregistro");
    let registroForm = document.getElementById("registro-form");

    registro.addEventListener("click",(e)=>{
        e.preventDefault();
        datosFORM = new FormData(registroForm);
        fetch("../php/registro-guardarDatos.php", {
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