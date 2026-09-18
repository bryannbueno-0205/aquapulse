<?php
session_start();

$estoqueInicial = isset($_SESSION['estoque_inicial']) ? $_SESSION['estoque_inicial'] : 20;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Produto Esgotado</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="status-page erro">
    <div>
      <h1>Produto Esgotado ❌</h1>
      <p>Todos os <?php echo $estoqueInicial; ?> bonés exclusivos já foram vendidos.<br> Fique ligado nas próximas edições e novidades do Código Fonte!</p>
      <a href="index.php"><button class="btn">Voltar para a Página Inicial</button></a>
    </div>
  </div>
</body>
</html>
