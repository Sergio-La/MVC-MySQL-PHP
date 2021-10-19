var codigo = document.getElementById("cod")
var nombre = document.getElementById("nom")

function validar (){
    var mensajeserror = [];

    if(codigo.value === null || codigo.value === ''){
        mensajeserror.push('El campo código no puede esta vacio.');
    }

    if(isNaN(parseInt(codigo.value))){
        mensajeserror.push('El código debe ser numérico.');
    }

    if(mensajeserror.length !== 0){
        mensajeserror.join(', ');
        alert(mensajeserror);
        return false;
    }

    return false;
}