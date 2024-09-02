<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gerenciamento de Biblioteca</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #8b49d3;
            color: white;
            padding: 15px;
            text-align: center;
        }
        nav {
            margin: 20px;
            text-align: center;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #5c236a;
            font-weight: bold;
        }
        main {
            padding: 20px;
            text-align: center;
        }

        .barra-pesquisah-bar {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .barra-pesquisah-bar input[type="text"] {
            padding: 10px;
            font-size: 16px;
            width: 800px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .barra-pesquisah-bar input[type="submit"] {
            padding: 10px;
            font-size: 16px;
            background-color: #5c236a;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        .barra-pesquisah-bar input[type="submit"]:hover {
            color: #e1def6;
        }
        .botoes {
            margin-top: 30px;
            
        }
        .botoes a {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5c236a;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            margin: 0 10px;
            display: inline-block;
            
        }
        .botoes a:hover {
            color: #e1def6;
        }

        .botoes-com-icone{
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5c236a;
            color: white;
            border-radius: 4px;
            text-decoration: none;
            margin: 0 10px;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            line-height: 1.5;
        }

        .botoes-com-iconeimg {
            display: block;
            margin: 5px auto 0;
            width: 24px;
            height: 24px;
        }


        footer {
            background-color: #8b49d3;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>

    <header>
        <h1>Gerenciamento de Biblioteca</h1>
    </header>

    <nav>
        <a href="#">Início</a>
        <a href="#">Livros</a>
        <a href="#">Estudantes</a>
        <a href="#">Empréstimos</a>
    </nav>

    <main>
        <div class="barra-pesquisah-bar">
            <form action="resultado_pesquisa.php" method="GET">
                <input type="text" name="query" placeholder="Digite o nome do estudante ou livro..." required>
                <input type="submit" value="Pesquisar">
            </form>
        </div>

        
        <div class="botoes">
            <a href="cadastrar_livro.php">Cadastrar Livro
            <img src="icons8-book-50.png" width="24" height="24">
            </a>
            <a href="cadastrar_estudante.php" class="button-with-icon">Cadastrar Estudante
            <img src="icons8-student-30.png" width="24" height="24">
            </a>
            <a href="realizar_emprestimo.php">Realizar Novo Empréstimo</a>
        </div>
    </main>
    
    <footer>
        <p>&copy; Desenvolvido por Eduarda Batista, Vicencya Nayara e Werbeton da Silva.</p>
    </footer>

</body>
</html>
