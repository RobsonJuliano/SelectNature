<?php
    if(isset($_POST['excluirPub'])) {
    require_once ('../conexao/conexaoBD.php');
    
    $delete = "DELETE FROM posts_salvos WHERE id_salvo = '".$_POST['id_salvo'] ."' " ;
    if ($conexao->query($delete) === TRUE) {
        header('location:../publicacoes/minhasPaginas.php');
    } else {
        header('location:../publicacoes/minhasPaginas.php');
        }
    }
?>