<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucess! entraremos em contato em breve!</title>
    <link rel="stylesheet" href="php.css">
</head>
<body>
    <header>
        <div class="header-container">
            <h1>Sucesso, entraremos em contato em breve</h1>
            <nav>
                <ul>
                    <li><a href="index.html">Página Inicial</a></li>
                    <li><a href="https://www.youtube.com/@mimmarcelo">Canal de um professor gente boa demais!</a></li>
                    <li><a href="segundo.html">Sobre os Desenvolvedores</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <?php
            $nome = ($_POST["nome"]);
            $cartao = ($_POST["cartao"]);
            $validade = ($_POST["validade"]);
            $cvv = ($_POST["cvv"]);
            $endereco = ($_POST["endereco"]);
            $email = ($_POST["email"]);
            $telefone = ($_POST["telefone"]);
            $data_nascimento = ($_POST["data_nascimento"]);
            $aceitar_termos = isset($_POST["aceitar_termos"]) ? "Sim" : "Não";
            $quantidade = ($_POST["quantidade"]);
            $arquivo = (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) ? $_FILES["arquivo"]["name"] : "Nenhum arquivo enviado.";
        ?>
        <h1>Suas informações:</h1>
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
