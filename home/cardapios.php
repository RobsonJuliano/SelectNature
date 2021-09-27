<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Cardápios nutritivos</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<style>
    img {
        opacity: 1.0;
    }
    img:hover {
        opacity: 0.9;
        filter: grayscale(50%);
    }
</style>

<div class="w3-padding-16 " style="margin-left: 340px; margin-right: 305px;">    
    <div class="w3-display w3-half">    
        <h1 class="fonteTitulo2 w3-left-align">Cardápios nutritivos</h1>
    </div>
    <?php require_once ('../layout/campoBusca.php');?>
</div>


<div class="w3-padding-16 margin2">

    <div class="w3-display w3-third">    
        <a href="../publicacoes/cardapios_GostoBrasileiro.php" target="_self" class="fonteIcone">
            <img src="../IMG/CARDAPIOS/pratoSaudavel.JPG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Cardápio ao gosto do brasilero</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/cardapios_lactose.php" target="_self" class="fonteIcone">
            <img src="../IMG/CARDAPIOS/Lactose.JPG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Sem lactose</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/cardapios_diabetes.php" target="_self" class="fonteIcone">
            <img src="../IMG/CARDAPIOS/Diabetes.JPEG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Dieta para diabéticos</a><br><br><br>
    </div>

</div>

<div class="w3-padding-16 margin2">
    
    <div class="w3-display w3-third">    
        <a href="../publicacoes/cardapios_gluten.php" target="_self" class="fonteIcone">
            <img src="../IMG/CARDAPIOS/Gluten.JPG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Gluten Free</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/cardapios_vegan.php" target="_self" class="fonteIcone">
            <img src="../IMG/CARDAPIOS/Vegan.JPG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Dica de cardápio vegano</a>
    </div>

    <div class="w3-display w3-third">
        <br><br><br>
    </div>

</div>

<?php require_once ('../layout/rodape.php');?>