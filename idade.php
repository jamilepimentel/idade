<!DOCTYPE html>
<html lang="pt-BR">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade</title>
</head>

<body>
    
    <h2>Cadastro</h2>
    <form method="POST" action="">
        <label for="idade">Digite sua idade:</label>
        <input type="number" name="idade" id="idade" required>
        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = intval($_POST['idade']);
        
        if ($idade < 18) {
            echo "<p style='color: red;'>Você não pode se cadastrar. É necessário ter 18 anos ou mais.</p>";
        } else {
            echo "<p style='color: green;'>Cadastro permitido! Você tem $idade anos.</p>";
        }
    }
    ?>

</body>

</html>