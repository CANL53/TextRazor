

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Razor</title>
</head>
<body>
    <?php 
        require_once('funciones.php');
        $texto = 'El texto: Artificial intelligence (AI), is intelligence demonstrated by machines, unlike the natural intelligence displayed by humans and animals.';
    ?>

    <h1> Análisis de texto </h1>

    <br><br>

    <p>
    El texto: Artificial intelligence (AI), is intelligence demonstrated by machines, 
    unlike the natural intelligence displayed by humans and animals.
    </p>

    <br><br>
    <h2> Las entidades del texto </h2>
    <?php 
        entidades_texto($texto);
    ?>

    <br><br>
    <h3> Los topicos con mayor relevancia sobre el texto </h3>
    <?php 
        topicos_texto($texto);
    ?>


    
</body>
</html>