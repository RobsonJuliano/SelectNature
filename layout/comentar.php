<style>
    textarea {
        resize: none;
        width: 885px;
        margin-left: 40px;
        font-size: 1em; 
        font-family: 'Consolas'; 
        font-weight: bold;
    }
</style>

<div class="w3-padding-8 margin">
    <hr style="width: 860px; margin-left: 50px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-left">
        <h1 class="fonteSubtitulo3 w3-left-align" style="margin-left:60px">Comentários</h1>
            <form action="" class="w3-container" method="POST">    
                <textarea name="comment" rows="8" cols="100" maxlength="800" placeholder="Digite o seu comentário..."></textarea>
                <button name="comentar" class="fonteBTN w3-button w3-block w3-teal w3-section w3-round-xxlarge w3-border" 
                    style="width: 200px; margin-left: 40px;" type="submit">Enviar comentário</button>
            </form>
    <hr style="width: 890px; margin-left: 50px;">
</div>

<div class="w3-padding-8 w3-content" style="margin-left: 345px; margin-right: 290px;">
    
<?php
    if(isset($_POST['comentar'])) {
    require_once ('../conexao/conexaoBD.php');
    include_once '../conexao/Publicacao.php';
    
    $idUser = $_SESSION['logado'];
    $comentario = $_POST['comment'];
    $id_pub = $pub -> getId_pub();

    $sql = "SELECT * FROM usuario WHERE login = '".$idUser."';" ;
    $resultado = $conexao->query($sql);                

    if($resultado != null)
    foreach($resultado as $linha) {

        $nome_usuario = $linha['nome'];
        $id_usuario = $linha['idusuario'];

        $consulta = "SELECT * FROM comentario WHERE comentario = '$comentario' AND id_usuario =  '$id_usuario' AND id_pub =  '$id_pub' " ;
        $resultado = $conexao->query($consulta);
        if (mysqli_num_rows($resultado) > 0) { 

            $update = "UPDATE comentario SET comentario = '$comentario' 
            WHERE comentario = '$comentario' AND id_pub = '$id_pub' AND id_usuario=  '$id_usuario'" ;
            $resultado = $conexao->query($update);

        } else {

        $insert = "INSERT INTO comentario (id_pub , nome_usuario , id_usuario , comentario)
            VALUES ('$id_pub' , '$nome_usuario' , '$id_usuario' , '$comentario')" ;
        $resultado = $conexao->query($insert);
    }
}
    }
?>

<?php
    require_once ('../conexao/conexaoBD.php');
    include_once '../conexao/Publicacao.php';
    $id_pub = $pub -> getId_pub();
    
    $sql = "SELECT * FROM comentario c INNER JOIN usuario u WHERE c.id_usuario = u.idusuario AND id_pub = '$id_pub' ORDER BY c.id DESC" ;
    $resultado = $conexao->query($sql);

    if($resultado != null)
    foreach($resultado as $linha) {
        echo '<p class="fonteCorpo1">'.$linha['comentario'].'</p>' ;
        echo '<p class="fonteComment">
        <img src="../IMG_USUARIOS/'.$linha['imagem'].'" class="w3-circle" style="width: 40px; height: 40px;">
        Postado por '.$linha['login'].'.</p>' ;
        echo '<hr style="width: 880px;">';
    } else {
        echo '
        <p class="fonteCorpo1">Ainda não há comentários. Seja o primeiro a comentar!</p>' ;
    }

?>
</div>