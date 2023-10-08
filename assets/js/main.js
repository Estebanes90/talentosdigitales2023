// Agrega un evento clic a los botones con la clase "eliminar-usuario"
document.querySelectorAll('.eliminar-usuario').forEach(button => {
  button.addEventListener('click', function() {
      const idUsuario = this.getAttribute('data-id'); // Obtiene el ID del botón
      const nombre = this.getAttribute('data-nombre'); // Obtiene el nombre de data-nombre
      const modal = document.getElementById('exampleModal');
      const modalBody = modal.querySelector('.modal-body');
      modalBody.innerHTML = `¿Desea eliminar a <strong>${nombre}</strong>?`; // Utiliza innerHTML para aplicar negrita

      // Llena el contenido del modal con la información del usuario
      $.ajax({
        url: '<?= base_url('/ver_usuario/delete') ?>' + userId, // Reemplaza con la ruta adecuada para obtener la información del usuario
        method: 'POST',
        data: { user_id: userId },
        success: function(response) {
            $('.modal-body').html(response); // Coloca la información en el cuerpo del modal
            $('#exampleModal').modal('show'); // Abre el modal
        },
        error: function() {
            alert('Error al cargar la información del usuario.');
        }
    });
     
  });
});











  
