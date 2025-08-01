<?php
require 'classes/classes.php';

$nome = $_GET['nome'];
$classe = $_GET['personagem'];



$personagem = new $classe();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <title>Dragon Ball RPG</title>
  <link rel="stylesheet" href="personagem.css" />
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
  <header class="cabecalho">
    <img src="img/dblogo.jpg" alt="Logo Dragon Ball" class="logo" />
    <h1 class="titulo-site">Dragon Ball RPG</h1>
  </header>

  <main class="fundo-dragonball">
    <div class="container-personagem">
      <h2><?php echo $nome; ?> escolheu:</h2>
      <h1><?php echo $classe; ?></h1>


     <img src="img/<?php echo ($personagem->img); ?>" alt="<?php echo ($classe); ?>">
<p><?php echo ($personagem->descricao); ?></p>


      <hr>

      <div class="atributos">
        <div><strong>Força</strong><p><?= $personagem->forca ?></p></div>
        <div><strong>Defesa</strong><p><?= $personagem->defesa ?></p></div>
        <div><strong>Esquiva</strong><p><?= $personagem->esquiva ?></p></div>
        <div><strong>Velocidade</strong><p><?= $personagem->velocidade ?></p></div>
        <div><strong>Inteligência</strong><p><?= $personagem->inteligencia ?></p></div>
        <div><strong>Vida</strong><p><?= $personagem->vida ?></p></div>
      </div>

      <hr>

      <div class="acoes">
        <div>
          <strong>Ações Básicas</strong>
          <p><?= $personagem->ataqueComum(); ?></p>
          <p><?= $personagem->defender(); ?></p>
          <p><?= $personagem->esquivar(); ?></p>
          <p><?= $personagem->fugir(); ?></p>
        </div>
      </div>

      <hr>

      <div class="especiais">
        <div>
          <strong>Ataques Especiais</strong>
          <p><?= $personagem->ataqueEspecial(); ?></p>
        </div>
      </div>
    </div>
  </main>
</body>
</html>
