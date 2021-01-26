<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require_once "../PHP/function.php" ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../IMG/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <title>Coversor</title>
</head>
<body>
    <div class="box-lembrete">
        <?php  
            $numeroRomano = $_GET['algarismo'] ?? null;
            if(empty($numeroRomano)) : ?>
                <h1>Digite os número Romanos aqui</h1>
                <form class="form-principal" method="get">
                    <div class="box-text">
                        <input class="text" type="text" name="algarismo" placeholder="Ex: XV" max="7" maxlength="7">
                    </div>
                    <button class="box-button" formaction="index.php">Ok!</button>
                <?php else: ?>
                    <h1>O resultado é!?</h1>
                    <form class="form-principal" method="get">
                        <div class="box-text">
                        <p><?= $numeroRomano . ' = ' . conversorInt($numeroRomano) ?></p>
                        </div>
                        <button class="box-button"> </a> Voltar.</button>
            <?php endif ?>
                </form>
    </div>
    <div class="box-shadow"></div>
</body>
</html>