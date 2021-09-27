<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Restrições alimentares</title>
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

<div class="w3-padding-16" style="margin-left: 340px; margin-right: 305px;">    
    <div class="w3-display w3-half">    
        <h1 class="fonteTitulo2 w3-left-align">Restrições alimentares</h1>
    </div>
    <?php require_once ('../layout/campoBusca.php');?>
</div>


<div class="w3-padding-16 margin2">
    
    <div id="lactose" class="w3-display w3-third">    
        <a href="../publicacoes/restricoes_lactose.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Leite.jpg" style="width: 280px; height: 210px;" class="hover w3-border w3-round-large">
            Intolerância à lactose</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/restricoes_diabetes.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Diabetes.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Diabetes</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/restricoes_vegan.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Vegan.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Veganismo</a><br><br><br>
    </div>

</div>


<div class="w3-padding-16 margin2">
    
    <div class="w3-display w3-third">    
        <a href="../publicacoes/restricoes_gluten.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Gluten.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Intolerância ao Glúten</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/restricoes_soja.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Soja.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Intolerância à Soja</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/restricoes_ovo.php" target="_self" class="fonteIcone">
            <img src="../IMG/RESTRICOES/Ovo.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Intolerância ao Ovo</a><br><br><br>
    </div>

</div>


<?php require_once ('../layout/rodape.php');?>