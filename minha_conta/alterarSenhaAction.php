<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Alterar Senha</title>
<?php require_once ('../layout/layout.php');?>
    
<div class="w3-padding-16" style="margin-left: 530px">
<hr style="width: 440px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-left">
</div>

<div class="w3-padding w3-third w3-center w3-display-middle" >
    <?php
        $idUser = $_SESSION['logado'];
        require_once '../conexao/conexaoBD.php';
        
        $senhaAtual = md5($_POST['txtSenhaAtual']);
        $novaSenha = md5($_POST['txtNovaSenha']);
        $senhaAtual = preg_replace('/[^[:alnum:]_.-]/', '', $senhaAtual);
        $novaSenha = preg_replace('/[^[:alnum:]_.-]/', '', $novaSenha);

        $consulta = "SELECT * FROM usuario WHERE login = '".$idUser."'";
        $resultado = $conexao->query($consulta);
        
        $linha = mysqli_fetch_array($resultado);
        if($linha != null) {
        if($linha['senha'] == $senhaAtual) {

        
        $sql = "UPDATE usuario SET senha = '$novaSenha' WHERE login = '".$idUser."'";

        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="../home/minhaConta.php">
            <br><br><br><br><br><br>
            <h1 class="w3-button w3-teal w3-round-xlarge w3-border w3-padding-16 w3-border"
            style="font-size: 1.8em; font-family: Consolas;">Senha alterada com sucesso! </h1></a>';
        } else {
            echo '
            <a href="../minha_conta/alterarSenha.php">
            <br><br><br><br><br><br>
            <h1 class="w3-button w3-red w3-round-xlarge w3-border w3-padding-16 w3-border" 
            style="font-size: 1.8em; font-family: Consolas; width: 200px;">ERRO! </h1></a>';
        }
    } else {
        echo '
        <a href="../minha_conta/alterarSenha.php">
        <br><br><br><br><br><br>
        <h1 class="w3-button w3-red w3-round-xlarge w3-border w3-padding-16 w3-border" 
        style="font-size: 1.8em; font-family: Consolas; width: 300px;">Senha incorreta! </h1></a>';
}
        }
        $conexao->close();
    ?>
</div>

<?php require_once ('../layout/rodape.php');?>