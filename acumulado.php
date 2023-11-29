<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <link rel="stylesheet" href="style.css">
    <title>Acumulado de Chuva Abaixo das Barragens</title>
</head>
<body>
    
    <div class="navbar">
        <a href="./index.php">Página Inicial</a>
        <a href="./consultar.php">Consultar</a>
        <a href="./acumulado.php">Acumulado de Chuva Abaixo das Barragens</a>
    </div>
    <div class="primeiro-container">
    <form method="POST"> 
        <label for="horas">Selecione as Horas:</label>
        
        <select id="horas" name="horas">
            
            <option value="1">Última hora</option>
            
            <option value="3">3h</option>
            
            <option value="6">6h</option>
            
            <option value="12">12h</option>
            
            <option value="24">24h</option>
            
            <option value="48">48h</option>
            
            <option value="72">72h</option>
            
            <option value="96">96h</option>
            
            <option value="120">120h</option>
            
            <option value="144">144h</option>
            
            <option value="168">168h</option>
            
        </select>
        <div class="agrolandia">
            Agrolândia <input type="text" name="agrolandia" />
            <div class="agronomica">
                Agronômica <input type="text" name="agronomica" />
                <div class="aurora">
                    Aurora <input type="text" name="aurora" />
                    <div class="ituporanga">
                        Ituporanga <input type="text" name="ituporanga" />
                        <div class="laurentino">
                            Laurentino <input type="text" name="laurentino" />
                            <div class="pousoredondo">
                                Pouso Redondo <input type="text" name="pousoredondo" />
                                <div class="riodooeste">
                                    Rio do Oeste <input type="text" name="riodooeste" />
                                    <div class="taio">
                                        Taió <input type="text" name="taio" />
                                        <div class="trombudocentral1">
                                            Trombudo Central 1 <input type="text" name="trombudocentral1" />
                                            <div class="trombudocentral2">
                                                Trombudo Central 2 <input type="text" name="trombudocentral2" /><br>
                                                <input type="submit"  value="Enviar" name="somar">
                                            </form>
                                            </div>    
                                            <?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $somar = ($_POST['somar']);
    $horas = isset($_POST['horas'])? floatval($_POST['horas']):0; 
    $agrolandia = isset($_POST['agrolandia'])? floatval($_POST['agrolandia']):0; 
    $agronomica = isset($_POST['agronomica'])? floatval($_POST['agronomica']):0; 
    $aurora = isset($_POST['aurora'])? floatval($_POST['aurora']):0; 
    $ituporanga = isset($_POST['ituporanga'])? floatval($_POST['ituporanga']):0; 
    $laurentino = isset($_POST['laurentino'])? floatval($_POST['laurentino']):0; 
    $pousoredondo = isset($_POST['pousoredondo'])? floatval($_POST['pousoredondo']):0; 
    $riodooeste = isset($_POST['riodooeste'])? floatval($_POST['riodooeste']):0; 
    $taio = isset($_POST['taio'])? floatval($_POST['taio']):0; 
    $trombudocentral1 = isset($_POST['trombudocentral1'])? floatval($_POST['trombudocentral1']):0; 
    $trombudocentral2 = isset($_POST['trombudocentral2'])? floatval($_POST['trombudocentral2']):0; 
    $resultado;
    $resultado = $agrolandia + $agronomica + $aurora + $ituporanga + $laurentino + $pousoredondo + $riodooeste + $taio + $trombudocentral1 + $trombudocentral2;
    if($horas == 1){
        echo "<h2>Na última $horas hora, o Alto Vale do Itajaí registrou um acumulado de $resultado mm de chuva abaixo das barragens.</h2>";
    }
    else{ 
        echo "<h2>Nas últimas $horas horas, o Alto Vale do Itajaí registrou um acumulado de $resultado mm de chuva abaixo das barragens.</h2>";

    }
   
}
    ?>
</body> 
</html>