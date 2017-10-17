with(document.actualizar) {
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
    if (ok) {
      submit();
    }
  }
}
