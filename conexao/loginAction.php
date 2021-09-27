<?php require_once ('../layout/cabecalho.php');?>
<title> Select Nature  - Bem-Vindo</title>
<?php require_once ('../layout/layout.php');?>
    
<div class="w3-padding w3-content w3-text-grey w3-third w3-center w3-display-middle" >
    <?php
    session_start();
    $login = $_POST['txtLogin'];
    $senha = md5($_POST['txtSenha']);
    require_once '../conexao/conexaoBD.php';

    $login = preg_replace('/[^[:alnum:] ]/', '', $login);
    $senha = preg_replace('/[^[:alnum:]_.-]/', '', $senha);
    
    $sql = "SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha."';";
    $resultado = $conexao->query($sql);
    
    //echo $sql;
    $linha = mysqli_fetch_array($resultado);
    if($linha != null) {
        if($linha['senha'] == $senha) {
            header('location:../home/home.php');
            $_SESSION['logado'] = $login;
        }
        else {
            echo '<a href="../principal/index.php">
            <h1 class="w3-button w3-teal w3-round-xlarge w3-border" style="font-size: 1.7em; font-family: Consolas;">
            Login ou senha inválido!</h1></a>';
        }
    }
    else {
        echo '<a href="../principal/index.php">
            <h1 class="w3-button w3-teal w3-round-xlarge w3-border" style="font-size: 1.7em; font-family: Consolas;">
            Login ou senha inválido!</h1></a>';
    }
    
    $conexao->close();
    ?>
</div>

<?php require_once ('../layout/rodape.php');?>