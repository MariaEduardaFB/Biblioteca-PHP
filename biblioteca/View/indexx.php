<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Biblioteca</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>

    <header>
        <h3>Gerenciamento de Biblioteca</h3>
        <nav>
            <a href="#">Início</a>
            <a href="#">Livros</a>
            <a href="#">Estudantes</a>
            <a href="#">Empréstimos</a>
        </nav>
    </header>

    <div class="fundo-imagem">
        <div class="barra-pesquisa">
            <form action="resultado_pesquisa.php" method="GET">
                <input type="text" name="query" placeholder="Digite o nome do estudante ou livro..." required>
                <input type="submit" value="Pesquisar">
            </form>
        </div>
    </div>

    <main>

        <div class="botoes">
            <a href="cadastrar_livro.php">Cadastrar Livro
            <img src="livro.png" width="24" height="24">
            </a>

            <a href="cadastrar_estudante.php" class="button-with-icon">Cadastrar Estudante
            <img src="estudante.png" width="24" height="24">
            </a>
            <a href="realizar_emprestimo.php">Realizar Novo Empréstimo
            <img src="emprestimo.png" width="24" height="24">
            </a>
            </a>
        </div>
    </main>



    
    <section class="historico">

        <div class="item a1">
            <p>Emprestimo Recentes</p>
        </div>


        <div class="item a2">
            <p><h2><b>Harry Potter</b></h2>Data do empresimo: 03/09/2024.</p>
        </div>

        <div class="item a3">
            <p><h2><b>O pequeno principe</b></h2>Data do empresimo: 03/09/2024.</p>
        </div>

        <div class="item a4">
            <p><h2><b>A pequena sereia</b></h2>Data do empresimo: 03/09/2024.</p>
        </div>

        <div class="item a5">
            <p><h2><b>Micaculos</b></h2>Data do empresimo: 03/09/2024.</p>
        </div>

        <div class="item a6">
            <p><h2><b>Micaculos</b></h2>Data do empresimo: 03/09/2024.</p>
        </div>
    </section>


    

    <div class="lista_emprestimo">
            <a href="lista_emprestimo.php">Ver todos os Empréstimos
            <img src="emprestimo.png" width="24" height="24">
            </a>
        </div>


    <footer>
        <p>&copy; Desenvolvido por Eduarda Batista, Vicencya Nayara e Werbeton da Silva.</p>
    </footer>

</body>
</html>