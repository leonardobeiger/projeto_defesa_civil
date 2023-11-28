<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
</html>
<div class="navbar">
        <a href="./index.php">Página Inicial</a>
        <a href="./consultar.php">Contato</a>
    </div>
    <div class="container">
            <h2>INFORME QUAL NÍVEL DO RIO: </h2>
            <form method="post">
                <label for="medida"> </label>
                <input type="number" id="medida" name="valorMedida"  step="0.01" placeholder="Digite a medida" required>
                <input type="submit" value="Enviar" onclick=" abrirModal()">
            </form>
            <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $valorMedida = ($_POST['valorMedida']);
            if($valorMedida <= 4){
                echo '<p> O RIO ESTÁ NO NÍVEL </p>  <h3 style=" color: #00a65a")>NORMAL</p>';
            }
            elseif($valorMedida = 4 && $valorMedida <= 5){
                echo '<p> O RIO ESTÁ NO NÍVE DE </p> <h3 style=" color: #ffce00")>ATENÇÃO</p>';
            }
            elseif($valorMedida >= 5 && $valorMedida <= 6.5){
                echo '<p> O RIO ESTÁ NO NÍVE DE  </p> <h3 style=" color:#ff851b")>ALERTA</p>';
                
            }   
            elseif($valorMedida >= 6.5){
                echo '<p> O RIO ESTÁ NO NÍVE DE  </p> <h3 style=" color: #dd4b39")>EMERGÊNCIA</p>';
            }
        }
        
        ?>
        </div>
        <footer>Desenvolvido por Leonardo Beiger</footer>
</body>
</html>