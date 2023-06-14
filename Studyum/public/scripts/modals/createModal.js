document
    .getElementById("insertContent")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        Swal.fire({
            title: "Conteúdo inserido com Sucesso!",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).then(function () {
            event.target.submit();
        });
    });
