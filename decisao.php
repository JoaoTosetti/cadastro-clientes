<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de clientes</h1>
    <?php 
    $nome = "Jhon";
    $idade = 18;
    $fumante = true;
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>";

    if ($idade >= 18) {
        echo "Pode entrar <br>";
    } else {
        echo "rejeitado <br>";
    }

    $cor = "zul";
    switch ($cor) {
        case 'zul':
            echo "da cor do céu azul <br>";
            break;
        
        case 'verte':
            echo "da cor da mami natura <br>";
            break;

        case 'cinza':
            echo "Wandinha Wednesday <br>";
            break;
        
        default:
            echo "<p> sua cor fav não é nem zul, nem verte, nem cinza! </p><br>";
            break;
    }

    $dia = 5;
    switch ($dia) {
        case 1:
            echo "Domingo <br>";
            break;

        case 2:
            echo "Segunda <br>";
            break;

        case 3:
            echo "Terça <br>";
            break;

        case 4:
            echo "Quarta <br>";
            break;

        case 5:
            echo "Quinta <br>";
            break;

        case 6:
            echo "Sexta <br>";
            break;

        case 7:
            echo "Sábado <br>";
            break;
        
        default:
            echo "Dia inválido amigo <br>";
            break;
    }


    ?>
    
</body>
</html>

<!--    ->OPERADORES ARITIMÉTICOS:

        Adição: (+)
        Subtração: (-)
        Multiplicação: (*)
        Divisão: (/)
        Módulo - resto da divisão: (%)



    
        ->OPERADORES RELACIONAIS:

        ==	Igual a
        !=	Diferente de
        ===	Idêntico a (valores iguais e do mesmo tipo)
        !==	Não idêntico a
        >	Maior do que
        >=	Maior ou igual a
        <	Menor do que
        <=	Menor ou igual a
    -->