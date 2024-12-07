<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Processamento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007BFF;
            text-align: center;
        }
        p {
            font-size: 1.1rem;
            margin: 10px 0;
        }
        .highlight {
            font-weight: bold;
            color: #0056b3;
        }
        footer {
    background-color: #0d7e20;
    color: rgb(253, 253, 253);
    text-align: center;
    padding: 20px 0;
    position: relative;
    margin-top: 20px;
    border-radius: 40px;
}

footer ul {
    list-style-type: none;
    padding: 0;
}

footer ul li {
    margin: 5px 0;
}

    </style>
</head>
<body>
    <div class="container">
        <?php
            $nome = htmlspecialchars($_POST["nome"]);
            $cartao = htmlspecialchars($_POST["cartao"]);
            $validade = htmlspecialchars($_POST["validade"]);
            $cvv = htmlspecialchars($_POST["cvv"]);
            $endereco = htmlspecialchars($_POST["endereco"]);
            $email = htmlspecialchars($_POST["email"]);
            $telefone = htmlspecialchars($_POST["telefone"]);
            $data_nascimento = htmlspecialchars($_POST["data_nascimento"]);
            $aceitar_termos = isset($_POST["aceitar_termos"]) ? "Sim" : "Não";
            $quantidade = htmlspecialchars($_POST["quantidade"]);
            if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
                $arquivo = $_FILES["arquivo"]["name"];
            } else {
                $arquivo = "Nenhum arquivo enviado.";
            }
        ?>
         <header>
        <div class="header-container">
            <h1>Verifique as Informações do Seu Cartão</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Página Inicial</a></li>
                    <li><a href="dados.php">Enviar Meus Dados</a></li>
                    <li><a href="segundo.html">Sobre os Desenvolvedores</a></li>
                </ul>
            </nav>
        </div>
        <h1>Resultado do Processamento</h1>
        <p>Seu nome: <span class="highlight"><?php echo $nome; ?></span></p>
        <p>Seu cartão: <span class="highlight"><?php echo $cartao; ?></span></p>
        <p>Validade: <span class="highlight"><?php echo $validade; ?></span></p>
        <p>Código de segurança (CVV): <span class="highlight"><?php echo $cvv; ?></span></p>
        <p>Endereço: <span class="highlight"><?php echo $endereco; ?></span></p>
        <p>E-mail: <span class="highlight"><?php echo $email; ?></span></p>
        <p>Telefone: <span class="highlight"><?php echo $telefone; ?></span></p>
        <p>Data de nascimento: <span class="highlight"><?php echo $data_nascimento; ?></span></p>
        <p>Termos aceitos: <span class="highlight"><?php echo $aceitar_termos; ?></span></p>
        <p>Qualidade do serviço: <span class="highlight"><?php echo $quantidade; ?></span></p>
        <p>Arquivo enviado: <span class="highlight"><?php echo $arquivo; ?></span></p>
    </div>
    <footer>
        <p>IFRN campus Santa Cruz</p>
        <p>Trabalho de Autoria Web</p>
        <p>Prof. Marcelo Figueiredo Barbosa Júnior</p>
        <p>Integrantes do Grupo:</p>
        <ul>
            <li>João Victor Ferreira do Nascimento</li>
            <li>Mateus Ribeiro Almeida</li>
        </ul>
    </footer>
</body>
</html>
