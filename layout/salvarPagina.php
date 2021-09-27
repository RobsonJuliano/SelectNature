<form action="" method="POST">
<input name="salvarPub" class="w3-button w3-block w3-purple w3-round-large w3-border" type="submit"
    style="font-size: 1em; font-family: Consolas; font-weight: bold; width: 200px;" value="Salvar publicação">
</form>

<?php
    if(isset($_POST['salvarPub'])) {
    require_once ('../conexao/conexaoBD.php');
    include_once '../conexao/Publicacao.php';
    
    $idUser = $_SESSION['logado'];
    $id_pub = $pub -> getId_pub();

    $sql = "SELECT * FROM usuario WHERE login = '".$idUser."';" ;
    $resultado = $conexao->query($sql);        
    
    if($resultado != null)
    foreach($resultado as $linha) {

        $id_usuario = $linha['idusuario'];

        $consulta = "SELECT * FROM posts_salvos WHERE href = '$id_pub' AND id_usuario=  '$id_usuario' " ;
        $resultado = $conexao->query($consulta);
        if (mysqli_num_rows($resultado) > 0) { 

            $update = "UPDATE posts_salvos SET href = '$id_pub' WHERE href = '$id_pub' AND id_usuario=  '$id_usuario'" ;
            $resultado = $conexao->query($update);

        } else {
    
        $insert = "INSERT INTO posts_salvos (href , id_usuario) VALUES ('$id_pub' , '$id_usuario')" ;
        $resultado = $conexao->query($insert);
    }
}
    }
?>