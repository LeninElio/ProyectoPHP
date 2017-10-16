with(document.registro) {
  onsubmit = function (e) {
    e.preventDefault();
    var ok = true;
    if (ok && username.value == "") {
      ok = false;
      alert("Debe escribir un nombre de usuario");
      username.focus();
    }
    if (ok && fullname.value == "") {
      ok = false;
      alert("Debe escribir un nombre");
      fullname.focus();
    }
    if (ok && email.value == "") {
      ok = false;
      alert("Debe escribir su email");
      email.focus();
    }
    if (ok && password.value == "") {
      ok = false;
      alert("Debe escribir su password");
      password.focus();
    }
    if (ok && confirm_password.value == "") {
      ok = false;
      alert("Debe escribir su password nuevamente");
      confirm_password.focus();
    }
    if (ok && password.value != confirm_password.value) {
      ok = false;
      alert("Los password no coinciden");
      confirm_password.focus();
    }

    if (ok) {
      submit();
    }

  }


}
