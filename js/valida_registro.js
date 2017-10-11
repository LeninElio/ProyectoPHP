with(document.registro) {
    onsubmit = function (e) {
        e.preventDefault()
        var ok = true;
        if (ok && username.value == "") {
            ok = false;
            alert("Debe de escribir un nombre de usuario");
            username.focus();
        }
        if (ok && fullname.value == "") {
            ok = false;
            alert("Debe de escribir un nombre");
            fullname.focus();
        }
        if (ok && email.value == "") {
            ok = false;
            alert("Debe de escribir un correo");
            email.focus();
        }
        if (ok && password.value == "") {
            ok = false;
            alert("Debe de escribir una contraseña");
            password.focus();
        }
        if (ok && confirm_password.value == "") {
            ok = false;
            alert("Debe de escribir una contraseña de confirmacion");
            confirm_password.focus();
        }
        if (ok && password.value != confirm_password.value) {
            ok = false;
            alert("las contraseñas no coinciden");
            confirm_password.focus();
        }

        if (ok) {
            submit();
        }
    }
}
