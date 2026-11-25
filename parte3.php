<?php
    // Recebe os dados enviados pelo grupo de Pedidos (Parte 2)
    $id = $_POST["id"] ?? "";
    $valor     = $_POST["valor"] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parte 3 - Pagamento</title>
</head>
<body>
    <h2>Pagamento do Pedido</h2>

    <!-- Troque o IP abaixo pelo endereço do grupo de Entrega (ou do seu script que salva no banco) -->
    <form action="http://IP_DO_GRUPO_ENTREGA/entrega.php" method="post">
        
        <label for="pedido">ID do Pedido:</label><br>
        <input type="text" id="pedido" name="pedido" readonly value="<?php echo $id; ?>"><br><br>

        <label for="valor">Valor (R$):</label><br>
        <input type="text" id="valor" name="valor" readonly value="<?php echo $valor; ?>"><br><br>

        <label for="forma_pagamento">Forma de Pagamento:</label><br>
        <select id="forma_pagamento" name="forma_pagamento" required>
            <option value="PIX">PIX</option>
            <option value="CREDITO">Crédito</option>
            <option value="DEBITO">Débito</option>
            <option value="DINHEIRO">Dinheiro</option>
        </select><br><br>

        <input type="submit" value="Confirmar Pagamento">
    </form>
</body>
</html>