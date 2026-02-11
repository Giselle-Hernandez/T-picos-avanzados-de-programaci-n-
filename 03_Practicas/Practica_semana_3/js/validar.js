//Funcion para validar
function validar_form(){
    let semestre = document.querySelector(
        "input[name=semestre]: checked"
    )

    if (!semestre){
        alert("Debe seleccionar un semestre")
        return false; //este es para cancelar el envio
    }

    //Revision del Checkbox
    let interes = document.querySelector(
        "input [name= interes[]]: checked"
    )

    if (interes.length==0){
        alert("Debe seleccionar al menos un interes")
        return false;
    }

    //Revision del 
    let curso = document.getElementById("curso").value;
    if (semestre==""){
        alert("Debe seleccionar algun curso")
        return false;
    }
    //Si todo esta bien 
    return true;
}