


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>
    <form method="post">
        <h1>Bebidas</h1>
</br>
<hr>
    <fieldset>
    <legend><h2>Vinho</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Safra</th>
                <td><input type="number" name="safra" id="idsafra"></td>

            </tr>
            <tr>
                <th>Tipo</th>
                <td><input type="text" name="tipo" id="idtipo"></td>

            </tr>
        </table>
        <input type="submit" value="Enviar" name="vinho">
        <?php
        require_once "Vinho.php";

        if (isset($_POST['vinho'])) {
            $vin = new Vinho();
            $vin->setNome($_POST['nome']);
            $vin->setPreco($_POST['preco']);
            $vin->setSafra($_POST['safra']);
            $vin->setTipo($_POST['tipo']);

            echo $vin->mostrarBebida();
            $res = $vin->verificarPreco();
            switch ($res){
                case true:
                    echo "</br>Produto em Oferta";
                    break;
                case false:
                    echo "</br>Produto com o 
                    preço normal! ";
                    break;
            }
        }
        ?>
        </fieldset>
</br>

<fieldset>
    <legend><h2>Suco</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Sabor</th>
                <td><input type="text" name="sabor" id="idsabor"></td>

            </tr>
            </tr>
        </table>
        <input type="submit" value="Enviar" name="suco">
        <?php
                require_once "Suco.php";
                if (isset($_POST['suco'])) {
                    $suc = new Suco;
                    $suc->setNome($_POST['nome']);
                    $suc->setPreco($_POST['preco']);
                    $suc->setSabor($_POST['sabor']);
        
                    echo $suc->mostrarBebida();
                    $res = $suc->verificarPreco();
                    switch ($res){
                        case true:
                            echo "</br>Produto em Oferta";
                            break;
                        case false:
                            echo "</br>Produto com o 
                            preço normal! ";
                            break;
                    }
                }
        ?>

        </fieldset>
</br>

<fieldset>
    <legend><h2>Refrigerante</h2></legend>
        <table border="1">
            <tr>
            <th>Nome</th>
            <td><input type="text" name="nome" id="idnome"></td>

            </tr>
            <tr>
                <th>Preço</th>
                <td><input type="number" name="preco" id="idpreco"></td>

            </tr>
            <tr>
                <th>Retornavel</th>
                <td><input type="number" name="return" id="idretorn"></td>

            </tr>
        </table>
        <input type="submit" value="Enviar" name="refri">

        <?php
        require_once "Refrigerante.php";

        if (isset($_POST['refri'])) {
            $ref = new Refri();
            $ref->setNome($_POST['nome']);
            $ref->setPreco($_POST['preco']);
            $ref->setRetornavel($_POST['return']);

            echo $ref->mostrarBebida();
            $res = $ref->verificarPreco();
            switch ($res){
                case true:
                    echo "</br>Produto em Oferta";
                    break;
                case false:
                    echo "</br>Produto com o 
                    preço normal! ";
                    break;
            }
        }
        ?>

        </fieldset>

    </form>


</body>
</html>