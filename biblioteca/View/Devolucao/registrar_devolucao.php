<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Devolução</title>
    <link rel="stylesheet" href="..\Devolucao\registrar_devolucao.css">
</head>
<body>
    <header>
        <h3>Gerenciamento de Biblioteca</h3>
        <nav>
            <a href="../View/index.php">Início</a>
            <a href="../Livros/livros.php">Livros</a>
            <a href="../Estudantes/estudantes.php">Estudantes</a>
            <a href="../Emprestimos/emprestimos.php">Empréstimos</a>
        </nav>
    </header>

    <main>
        <h2>Registrar Devolução</h2>
        <form action="processa_devolucao.php" method="POST">
            <label for="livro">Livro:</label><br>
            <input type="text" id="livro" name="livro" required><br><br>

            <label for="data_devolucao">Data da Devolução:</label><br>
            <input type="date" id="data_devolucao" name="data_devolucao" required><br><br>

            <input type="submit" value="Registrar Devolução">
        </form>
    </main>

    <footer>
        <p>&copy; Desenvolvido por Eduarda Batista, Vicencya Nayara e Werbeton da Silva.</p>
    </footer>
</body>
</html>
