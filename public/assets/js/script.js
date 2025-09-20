
        // Atualiza o nome do arquivo no upload
        document.getElementById('fileInput').addEventListener('change', function(event) {
            const fileName = event.target.files.length > 0 ? event.target.files[0].name : 'Nenhum arquivo selecionado';
            document.getElementById('fileName').textContent = fileName;
        });

        // Exibe o alerta caso tenha sucesso ou erro na URL
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);

            if (urlParams.has('success')) {
                alertify.alert('Upload bem-sucedido!', 'Sua foto foi enviada com sucesso!', function() {
                    window.location.href = 'index.php';
                });
            }

            if (urlParams.has('error')) {
                alertify.alert('Erro', 'Erro ao fazer upload da imagem.', function() {
                    window.location.href = 'index.php';
                });
            }
        });
  