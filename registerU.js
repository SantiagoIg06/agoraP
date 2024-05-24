function validatePass() {
    const length = "        "
    const password = document.getElementById('form3Example4').value;
    console.log(password.length);
    console.log(length.length);

    if (password.trim() === ""){
        alert("La contraseña no puede estar vacía ni contener solo espacios en blanco");
        return false;
    }else {
        if (password.length < length.length){
            alert("La contraseña debe tener minimo 8 caracteres");
                    return false;
        } return true;
    } 
}


function validateAge() {
        const inputDate = document.getElementById('form3Example5').value;

const birthDate = new Date(inputDate);

    const today = new Date();

    const age = today.getFullYear() - birthDate.getFullYear();

    if (
        today.getMonth() < birthDate.getMonth() ||
        (today.getMonth() === birthDate.getMonth() && today.getDate() < birthDate.getDate())
    ) {
        age--;
    }

    if (age < 18) {
                alert("Debe ser mayor de edad para registrarse.");
                location.reload();
                return false;

    }

    return true;
}

function validate() {
    if (validatePass() == true && validateAge() == true) {
        return true;
    } return false;
}

function showPlaceholder(input) {
    if (!input.value) {
        input.setAttribute('type', 'date');
    }
}
