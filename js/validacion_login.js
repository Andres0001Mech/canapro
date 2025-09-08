form.addEventListener("submit", function(e) {
  e.preventDefault();
  const data = new FormData(form);

  fetch("../cursos/verificacion/validacion_login.php", {
    method: "POST",
    body: data
  })
  .then(res => res.json())
  .then(resp => {
    if(resp.ok){
      window.location.href = "../cursos/login.php";
    } else {
      alert("❌ Credenciales incorrectas");
    }
  });
});
