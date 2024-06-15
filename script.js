document
  .getElementById("reservationForm")
  .addEventListener("submit", function (event) {
    event.preventDefault();

    // Coleta os valores dos campos do formulário de reserva
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;
    const checkin = document.getElementById("checkin").value;
    const checkout = document.getElementById("checkout").value;
    const room = document.getElementById("room").value;
    const checkInTime = document.getElementById("checkInTime").value;
    const checkOutTime = document.getElementById("checkOutTime").value;

    // Aqui vai simular a reserva
    setTimeout(function () {
      document.getElementById("reservationMessage").innerHTML = `
      <div class="alert alert-success" role="alert">
        Reserva Feita! Obrigado, ${name}!<br>
        Check-in: ${checkin} às ${checkInTime}<br>
        Check-out: ${checkout} às ${checkOutTime}<br>
        Quarto: ${room}
      </div>`;
    }, 1000);
  });
