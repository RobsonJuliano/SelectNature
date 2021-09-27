<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Minhas páginas</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<style>
    .limit {
        max-width: 100ch;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
    }
    img {
        opacity: 1.0;
    }
    img:hover {
        opacity: 0.9;
        filter: grayscale(50%);
    }
    .excluirPub {
        position: fixed;
        top: 0; bottom: 0;
        left: 0; right: 0;
        margin: auto;
        width: 370px;
        height: 150px;
        padding: 25px;
        border: solid 1px #ffffff;
        border-radius: 10px;
        background: #20B2AA;
        display: none;
    }
</style>


<script type="text/javascript">
    function abrir () {
        document.getElementById('excluirPub').style.display = 'block';
    }
    function fechar () {
        document.getElementById('excluirPub').style.display = 'none';
    }
</script>


<div class="w3-padding-16" style="margin-left: 340px; margin-right: 320px;">    
    <div class="w3-display w3-half">    
        <h1 class="fonteTitulo2 w3-left-align">Páginas salvas</h1>
    </div>
    <?php require_once ('../layout/campoBusca.php');?>
</div>

<div class="w3-padding-16" style="margin-left: 300px; margin-right: 290px;">
<?php
    require_once '../conexao/conexaoBD.php';

    $idUser = $_SESSION['logado'];
    $msg = "Não há publicações salvas.";

    $sql = "SELECT * FROM usuario WHERE login = '".$idUser."';" ;
    $resultado = $conexao->query($sql);        
    
    if($resultado != null)
    foreach($resultado as $linha) {

        $id_usuario = $linha['idusuario'];
    

    $sql = "SELECT * FROM posts_salvos ps INNER JOIN postagem p WHERE ps.href = p.href 
    AND ps.id_usuario = '$id_usuario' ORDER BY ps.id_salvo DESC" ;
    $resultado = $conexao->query($sql);

    if($resultado != null)
    foreach($resultado as $linha) {
        echo '<div class="w3-row-padding w3-panel" style="margin-left: 25px">';
            echo '<a name="'.$linha['id_salvo'].'" type="hidden">';
            echo '<a href="'.$linha['href'].'" target="_self">';
            echo '<div class="w3-quarter">';
                echo '<img src="../IMG_POST/'.$linha['imagem'].'" class="w3-border w3-round-large" style="width: 235px; height: 165px;">' ;
            echo '</div>' ;
            echo '</a>';
            echo '<div class="w3-left-align">';
                echo '<h1 class="fonteTituloPesquisa limit  w3-half w3-container" style="margin-left: 15px">'.$linha['titulo'].'</h1>';
                //echo '<h1 class="fonteCorpo2 limit w3-left w3-container" style="width: 550px; margin-left: 15px">'.$linha['texto'].'</h1>';
                echo '<a href="excluirPaginaSalva.php?
                id_salvo='.$linha['id_salvo'].'&id_usuario='.$linha['id_usuario'].'&href='.$linha['href'].'&
                titulo='.$linha['titulo'].'&imagem='.$linha['imagem'].'">';
                echo '<input name="excluirPub" type="submit" value="Remover" 
                class="fonteBco w3-left w3-button w3-block w3-purple w3-round-large w3-border" style="width: 120px; margin-left: 30px;">';
                echo '</a>';
            echo '</div>';
        echo '</div>';
        echo '<hr style="width: 880px; margin-left: 40px">';
    } else {
        echo '<div class="w3-row-padding w3-panel" style="margin-left: 25px">';
            echo '<div class="w3-row-padding w3-panel">';
                echo '<p class="fonteCorpo2" style="margin-left: 35px;">
                    '.$msg.'</p>' ;
            echo '</div>';
        echo '</div>';
    }
}
?>
</div>

<div id="excluirPub" class="excluirPub">
    <form action="excluirPaginaSalvaAction.php" method="POST">
        <input name="id_salvo" type="hidden" value="<?php echo $_GET['id_salvo']?>">
        <input name="id_usuario" type="hidden" value="<?php echo $_GET['id_usuario']?>">
        <input name="href" type="hidden" value="<?php echo $_GET['href']?>">
            <input name="excluirPub" action="javascript: fechar();" value="Deseja remover essa publicação?" type="submit" 
            class="w3-button w3-block w3-purple w3-round-xxlarge w3-border"
            style="font-size: 1em; font-family: Consolas; font-weight: bold; width: 315px;">
    </form>
    <form href="javascript: fechar();">
        <input class="w3-button w3-block w3-red w3-round-xxlarge w3-border w3-margin-top" value="Cancelar"
        style="font-size: 1em; font-family: Consolas; font-weight: bold; width: 125px;" type="submit">
    </form>
</div>

<?php require_once ('../layout/rodape.php');?>