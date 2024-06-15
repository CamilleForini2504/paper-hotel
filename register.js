document
  .getElementById("registerForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;

    // Aqui eu creio que deveria colocar o codigo de enviar os dados para o servidor para o processo de registro
  });
