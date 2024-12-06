<?php
    // Capturando os dados do formulário
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
    $cpf = htmlspecialchars($_POST["cpf"]);

    // Tratando o upload do arquivo
    if (isset($_FILES["arquivo"]) && $_FILES["arquivo"]["error"] == 0) {
        $arquivo = $_FILES["arquivo"]["name"];
    } else {
        $arquivo = "Nenhum arquivo enviado.";
    }

    // Exibindo os dados
    echo "<h1>Resultado do processamento</h1>";
    echo "<p>Seu nome: $nome</p>";
    echo "<p>Seu cartão: $cartao</p>";
    echo "<p>Validade: $validade</p>";
    echo "<p>Código de segurança (CVV): $cvv</p>";
    echo "<p>Endereço: $endereco</p>";
    echo "<p>E-mail: $email</p>";
    echo "<p>Telefone: $telefone</p>";
    echo "<p>Data de nascimento: $data_nascimento</p>";
    echo "<p>CPF: $cpf</p>";
    echo "<p>Termos aceitos: $aceitar_termos</p>";
    echo "<p>Qualidade do serviço: $quantidade</p>";
    echo "<p>Arquivo enviado: $arquivo</p>";
?>