function confirmExclusao(event) {
    event.preventDefault();
    Swal.fire({
        title: "Confirmação de Exclusão",
        text: "Tem certeza que deseja excluir este conteúdo?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DE3F4D",
        cancelButtonColor: "#6B7280",
        confirmButtonText: "Sim, excluir!",
        cancelButtonText: "Cancelar",
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = event.target.closest("a").href;
        }
    });
}
