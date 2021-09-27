<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Alternativas alimentares</title>
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
        <h1 class="fonteTitulo2 w3-left-align">Alternativas alimentares</h1>
    </div>
    <?php require_once ('../layout/campoBusca.php');?>
</div>


<div class="w3-padding-16 margin2">
    
    <div class="w3-display w3-third">    
        <a href="../publicacoes/dicas_lactose.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/LeiteSoja.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Alternativas do leite de vaca</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/dicas_carne.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/Carne.JPG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Substitutos da carne</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/dicas_gluten.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/Gluten.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Gluten Free</a><br><br><br>
    </div>

</div>

<div class="w3-padding-16 margin2">
    
    <div class="w3-display w3-third">    
        <a href="../publicacoes/dicas_acucar.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/Açucar.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Adoçantes e outros</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/dicas_ovo.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/Ovo.PNG" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Alternativas para o ovo</a>
    </div>

    <div class="w3-display w3-third">
        <a href="../publicacoes/dicas_soja.php" target="_self" class="fonteIcone">
            <img src="../IMG/DICAS/Soja.jpg" style="width: 280px; height: 210px;" class="w3-border w3-round-large">
            Soja e alergia</a><br><br><br>
    </div>

</div>

<?php require_once ('../layout/rodape.php');?>