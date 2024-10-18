function destroy(button) {
    const id = button.getAttribute('data-id');
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Obtén el token CSRF desde una meta etiqueta

    Swal.fire({
        title: '¿Estás seguro?',
        text: "¡No podrás recuperar este medicamento!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sí, eliminarlo!'
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`/medicamento/destroy/${id}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Content-Type': 'application/json'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.res) {
                    Swal.fire(
                        '¡Eliminado!',
                        'El medicamento ha sido eliminado.',
                        'success'
                    );
                    // Elimina la tarjeta del DOM
                    button.closest('.card').remove();
                } else {
                    Swal.fire(
                        'Error',
                        'No se pudo eliminar el medicamento.',
                        'error'
                    );
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }
    });
}
