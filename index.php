<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="CSS/baseSite.css">
    <link rel="stylesheet" href="CSS/index.css">
    <title>Fazenda Nome - Cria e Recria de Gado de Corte</title>
</head>

<body>
    <!-- Nosso cabeçalho -->
    <header>
        <img src="Images/touro-SF.png" alt="Logo da fazenda boi gordo">
        <div class="empresa">
            <h1>Fazenda Nome</h1>
            <p>Especializada em Cria e Recria de Gado de Corte</p>
        </div>
    </header>
    <!-- menu de navegação -->
    <nav class="navbar navbar-expand-lg nav-custom" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-list fs-1 text-white"></i>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#sobre">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#atividades">Atividades</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#estrutura">Nossa Estrutura</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contato">Contato</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="dest">
            Qualidade e Sustentabilidade na Produção de Gado de Corte!
        </div>

        <section id="sobre">
            <h2>Sobre Nós</h2>
            <div class="msn">
                <img src="Images/touro.png" alt="">
                <p>Somos uma fazenda referência na criação e recria de gado de corte, utilizando práticas sustentáveis e
                    manejo de alta qualidade.</p>
            </div>
        </section>
        <section id="atividades">
            <h2>Atividades</h2>
            <div class="msn">
                <img src="Images/touro.png" alt="">
                <ul>
                    <li>Seleção Genética e Melhoramento</li>
                    <li>Manejo Nutricional para Cria e Recria</li>
                    <li>Sanidade Animal e Bem-Estar</li>
                    <li>Integração Lavoura-Pecuária</li>
                </ul>
            </div>
        </section>
        <section id="estrutura">
            <h2>Nossa Estrutura</h2>
            <div class="msn">
                <img src="Images/touro.png" alt="">
                <p>Contamos com pastagens de qualidade, curral moderno, áreas de confinamento e gestão eficiente do rebanho.
                </p>
            </div>
        </section>

        <section id="contato">
            <h2>Contato</h2>
            <div class="msn">
                <img src="Images/touro.png" alt="">
                <div>
                    <p>Email: contato@fazendanome.com</p>
                    <p>Telefone: (99) 99999-9999</p>
                </div>
            </div>
        </section>
        <!-- Finalizamos o main -->

    </main>
    <footer>
        <?php require_once "_parts/_footer.php" ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>