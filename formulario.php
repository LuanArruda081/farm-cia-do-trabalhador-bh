<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        
        * {
            padding: 0;
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        #principal {
            padding: 50px;
        }

        
        .caixa-titulo {
            background-color: red;
            color: white;
            border-radius: 5px;
            padding: 14px;
        }

        .caixa-pedidos {
            display: flex;
            justify-content: center;
            align-items: center;
            padding-top: 20px;
            width: 400px;
            height: 400px;
            margin: 0 auto;
            border: 2px solid white;
            border-radius: 10px;
            flex-direction: column;
            box-shadow: 5px 5px 15px gray; 
        }

        .caixa-input {
            padding: 20px;
            margin: 10px;
            display: flex;
            flex-direction: column;
        }

        
            
    </style>

</head>

<body>
    <form id="principal" action="" method="post">

        <div class="caixa-pedidos">

            <h2 class="caixa-titulo">Detalhes do Pedido</h2>
            
            <div class="caixa-input">
                <label for="medicamento">Medicamento: </label>
                <input type="text" name="medicamento" id="medicamento">
                <br><br>

                <label for="quantidade">Quantidade: </label>
                <input type="number" name="quantidade" id="quantidade" min="1">
                <br><br>

                <label for="entrega">Opções de Compra: </label>
                <select name="entrega" id="entrega">
                    <option value="entregar">Entregar</option>
                    <option value="retirar">Retirar na Farmácia</option>
                </select>
                <br><br>

            </div>

                <div class="botao">
                    <input type="submit" value="Enviar">
                </div>
        </div>
        
        
       
    </form>    

    <?php 
        $medicamento = '';
        $quantidade = 0;
        $entrega = '';

        //Verifica se foi usado o metodo post
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $medicamento = htmlspecialchars(trim($_POST['medicamento']));
            $quantidade = (int)$_POST['quantidade'];
            $entrega = htmlspecialchars(trim($_POST['entrega']));
        }

        //Verifica se os campos foi preenchido
        if(!empty($medicamento) && $quantidade > 0){

        //exibe os dados     
        echo "<h2>Ficha do Pedido</h2>";
        echo "medicamento: " . $medicamento . "<br>";
        echo "quantidade: " . $quantidade . "<br>";
        echo "Tipo de Entrega: " . $entrega . "<br>";
        }
    ?>
</body>

</html>


            

