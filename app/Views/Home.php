<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfólio</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
</head>

<body>
    <?php include 'NavBar.php'; ?>

    <main class="container mt-5">
        <!-- Texto principal -->
        <section class="text-center spacing">
            <h2>Sobre a Fotografia</h2>
            <div class="custom-box mx-auto shadow" style="max-width: 70%;">
                <p>A fotografia surgiu no século XIX e revolucionou a forma como registramos momentos e histórias.
                    Desde então, evoluiu para uma poderosa forma de arte e comunicação, permitindo capturar a beleza,
                    emoções e transformações do mundo ao nosso redor. Ela permite que eternizemos instantes únicos,
                    expressando sentimentos através de imagens. Seja profissional ou amadora, a fotografia é uma forma
                    de contar histórias e criar memórias.</p>
            </div>
        </section>

        <!-- Galeria de Imagens -->
        <section class="text-center spacing">
            <h2>Galeria</h2>
            <div class="gallery d-flex flex-wrap justify-content-center gap-3">
                <?php if (!empty($photo)): ?>
                    <?php foreach ($photo as $p): ?>
                        <img src="assets/images/<?php echo htmlspecialchars($p); ?>" 
                             class="rounded shadow border" style="width: 250px; height: auto;">
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>Nenhuma foto disponível.</p>
                <?php endif; ?>
            </div>
        </section>
 
        <section class="text-center mb-5">
            <br>
            <h4>Envie sua Foto</h4>
            <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
                <div class="custom-file">
                    <input type="file" name="photo" id="fileInput" required>
                    <label for="fileInput" class="file-label">Escolher Foto</label>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </form>
        </section>


        <section class="d-flex justify-content-center spacing">
            <div class="custom-box mx-2 shadow" style="width: 48%;">
                <h3 class="text-white">Fotografia e Emoção</h3>
                <p>A fotografia é mais do que apenas capturar imagens; ela é uma forma poderosa de expressar emoções
                    e contar histórias. Cada clique pode transmitir um sentimento, reviver uma lembrança e conectar
                    pessoas a momentos inesquecíveis. O olhar do fotógrafo é essencial para transformar uma simples
                    cena em uma obra de arte cheia de emoção.</p>
            </div>
            <div class="custom-box mx-2 shadow" style="width: 48%;">
                <h3 class="text-white">A Evolução da Fotografia</h3>
                <p>Desde as primeiras câmeras até os avanços digitais, a fotografia tem evoluído constantemente.
                    Hoje, qualquer pessoa pode capturar imagens incríveis usando um smartphone. Essa acessibilidade
                    democratizou a fotografia, permitindo que mais pessoas compartilhem suas perspectivas e criem
                    memórias visuais duradouras.</p>
            </div>
        </section>
    </main>

    <?php include 'Footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

    
</body>

</html>
