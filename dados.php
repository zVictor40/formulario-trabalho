<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Dados recebidos com sucesso!";
    print_r($_POST); // Exibe todos os dados enviados pelo formulário
} else {
    echo "Nenhum dado enviado.";
}
?>
