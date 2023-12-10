document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('formularioRegistroAIP').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        fetch('procesar_aip.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                var paginaRedireccion = document.getElementById('paginaRedireccion').value;
                console.log('Redirigiendo a:', paginaRedireccion); // Depuración
                window.location.href = paginaRedireccion;
            } else {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});





/*document.addEventListener('DOMContentLoaded', (event) => {
    document.getElementById('formularioRegistroAIP').addEventListener('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        fetch('procesar_aip.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = 'donacion.php';
            } else {
                alert(data.error);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});*/





