<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Excluir Cadastro</title>
<?php require_once ('../layout/layout.php');?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-center w3-display-middle" >
    <?php
        require_once '../conexao/conexaoBD.php';
        
        $sql = "DELETE FROM usuario WHERE idusuario = '".$_POST['txtID'] ."';";
        if ($conexao->query($sql) === TRUE) {
            echo '<a href="../principal/index.php">
            <h1 class="w3-button w3-teal w3-padding-16 w3-round-xlarge w3-border" style="font-size: 1.7em; font-family: Consolas;">
            Cadastro excluído com sucesso!</h1></a>';
        } else {
            echo '<a href="../home/minhaConta.php">
            <h1 class="w3-button w3-teal w3-round-large w3-border" style="font-size: 1.7em; font-family: Consolas;">ERRO!</h1></a>';
        }
        $conexao->close();
    ?>
</div>

<?php require_once ('../layout/rodape.php');?>