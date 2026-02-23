document.addEventListener("DOMContentLoaded", function(){
    const form = document.getElementById("reg_empleados");
    const mensaje_e = document.getElementById("ms_error");

    form.addEventListener("submit", function(e){
        mensaje_e.textContent = "";
        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const edad = document.getElementById("edad").value.trim();
        const fecha_ing = document.getElementById("fecha_ing").value.trim();
        const puesto = document.getElementById("puesto").value.trim();

        let errorMsg = "";

        if(!nombre || !correo || !edad || !fecha_ing || !puesto){
            errorMsg = "Todos los campos son obligatorios.";
        } else if(nombre.length < 3){
            errorMsg = "El nombre debe tener al menos 3 caracteres.";
        } else if(!validarCorreo(correo)){
            errorMsg = "Correo inválido.";
        } else if(isNaN(edad) || edad < 18 || edad > 100){
            errorMsg = "Edad inválida (18-100).";
        } else if(!validarFecha(fecha_ing)){
            errorMsg = "Fecha de ingreso inválida";
        }

        if(errorMsg){
            e.preventDefault();
            mensaje_e.textContent = errorMsg;
        }
    });

    function validarCorreo(correo){
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(correo);
    }

    function validarFecha(fecha){
        if(!fecha) return false;
        const hoy = new Date();
        const fechaInput = new Date(fecha);
        return fechaInput <= hoy;
    }
});