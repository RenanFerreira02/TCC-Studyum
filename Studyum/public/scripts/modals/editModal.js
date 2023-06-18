document
    .getElementById("editContent")
    .addEventListener("submit", function (event) {
        event.preventDefault();
        Swal.fire({
            title: "Conteúdo atualizado com Sucesso!",
            icon: "success",
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
        }).then(function () {
            event.target.submit();
        });
    });
