window.addEventListener("load", ()=>{
    const enviar= document.getElementById("enviar");
    const datos= document.getElementById("datos");

    enviar.addEventListener("click", (e) =>{
        e.preventDefault();
        datosForm = new FormData (datos)
        fetch ("./Dynamics/php/inicio-sesion.php", {
            method:"POST", body:datosForm
        }).then(respuesta =>{
            return respuesta.json();
        }).then (datosJSON =>{
            if(datosJSON == null){
                alert ("Usuario o contraseña incorrecta")
            }else if (datosJSON== false){
                alert("Falta un dato")
            }else{
                window.location.href="./index.php" //colocar la ruta de la pagina de los puntos
            }
        }) 
    })
})