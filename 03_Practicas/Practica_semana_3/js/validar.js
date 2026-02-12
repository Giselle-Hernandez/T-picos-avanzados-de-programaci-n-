//Funcion para validar
function validar_form(){
    let semestre = document.querySelector( //let = define variables que estan dentro de un bloque de codigo
        'input[name="semestre"]:checked'
    )

    if (!semestre){
        alert("Debe seleccionar un semestre");
        return false; //este es para cancelar el envio
    }

    //Revision del Checkbox
    let area = document.querySelectorAll( // let define una variable dentro de este bloque de codigo
        'input[name="area[]"]:checked'
    );

    if (area.length==0){
        alert("Debe seleccionar al menos un área");
        return false;
    }

    //Revision del select
    let carrera = document.getElementById("carrera").value;
    if (carrera==""){
        alert("Debe seleccionar su carrera");
        return false;
    }
    else {
        return true;
    } //Si todo esta bien 
    
   

}