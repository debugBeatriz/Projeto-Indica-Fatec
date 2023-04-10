function validarSenha() {
  var senha = document.getElementById("senha").value;

  if (senha.length < 8) {
    document.getElementById("password-error").textContent =
      "A senha deve ter pelo menos 8 caracteres, Letra Maiúscula, Letras minúsculas e caracteres especiais.";
  } else {
    document.getElementById("password-error").textContent = "";
  }
}
