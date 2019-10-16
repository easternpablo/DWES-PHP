function ValidarFormulario(){
    var name = document.getElementById("nombre").value;
    var surname = document.getElementById("apellidos").value;
    var year = parseInt(document.getElementById("edad").value);
    var phone = document.getElementById("telefono").value;
    var mail = document.getElementById("email").value;
    var password = document.getElementById("pass1").value;
    var repeatPassword = document.getElementById("pass2").value;
    
    // Validar Nombre
    name = name.trim();
    surname = surname.trim();
    if(name == ""){
        alert("Tienes que introducir un Nombre");
        document.getElementById("nombre").focus();
        return false;
    }else if(surname == ""){
        alert("Tienes que introducir los apellidos");
        document.getElementById("apellidos").focus();
        return false;
    }
    
    // Validar Edad
    if(isNaN(year)){
        alert("Tiene que introducir un número entero en su edad.");
        document.getElementById("edad").focus();
        return false;
    }else if(year < 18 || year >= 60){
        alert("Debe ser mayor de 18 años y menor de 60 años.");
        document.getElementById("edad").focus();
        return false;
    }
    
    // Validar Teléfono
    phone = phone.trim();
    if(phone == ""){
        alert("No puedes dejar el campo teléfono vacio");  
    }else if(!("/^\d{9}$/.test(phone)")){
        alert("Tienes que introducir un teléfono móvil válido.");
        document.getElementById("telefono").focus();
        return false;
    }

    // Validar Email
    mail = mail.trim();
    if(mail == ""){
        alert("No puedes dejar el campo email vacio.");
    }else if(!("/[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/i.test(mail)")){
        alert("Tienes que introducir un email válido.");
        document.getElementById("email").focus();
        return false;
    }

    // Validar Contraseñas

    // Espacios en blanco
    var espacios = false;
    var cont = 0;

    while(!espacios && (cont < password.length)){
        if(password.charAt(cont) == " ")
            espacios = true;
        cont++;
    }

    if(espacios){
        alert("La contraseña no puede contener espacios en blanco.");
        return false;
    }

    // Campo vacío
    if(password.length == 0 || repeatPassword.length == 0){
        alert("Ningún campo de contraseñas puede quedar vacio.");
        return false;
    }

    // Ambas contraseñas coinciden
    if(password != repeatPassword){
        alert("Las contraseñas deben ser iguales.");
        return false;
    }
       
    alert("Formulario enviado con éxito");
    location.href = "index.html";
}