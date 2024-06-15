document
  .getElementById("loginForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    const validCredentials = {
      username: "admin",
      password: "admin123",
    };

    if (
      username === validCredentials.username &&
      password === validCredentials.password
    ) {
      window.location.href = "/index.html";
    } else {
      document.getElementById("loginMessage").innerHTML = `
        <div class="alert alert-danger" role="alert">
          Nome de usuário ou senha incorretos.
        </div>`;
    }
  });
