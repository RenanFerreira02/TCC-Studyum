document.getElementById("cadastro").addEventListener("submit", (event) => {
    event.preventDefault();
    Swal.fire({
        title: "Sucesso",
        icon: "success",
        showConfirmButton: false,
        timer: 2000,
        timerProgressBar: true,
    }).then(() => {
        event.target.submit();
    });
});
