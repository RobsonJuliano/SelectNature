<?php require_once ('../conexao/verificarAcesso.php');?> 
<?php
    unset( $_SESSION['logado'] );
    header('location:../principal/index.php');
?>
