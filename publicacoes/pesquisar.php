<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Resultados</title>
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
</style>

<div class="w3-padding-16" style="margin-left: 340px; margin-right: 320px;">    
    <div class="w3-display w3-half">    
        <h1 class="fonteTitulo2 w3-left-align">Sua pesquisa</h1>
    </div>
    <?php require_once ('../layout/campoBusca.php');?>
</div>

<div class="w3-padding-16" style="margin-left: 300px; margin-right: 290px;">
<?php
    require_once '../conexao/conexaoBD.php';
    $pesquisar = $_POST['buscar'];
    $msg = "Não foram encontrados resultados para a sua busca.";

    $consulta = "SELECT * FROM postagem WHERE titulo OR texto LIKE '%$pesquisar%' ";
    $resultado = $conexao->query($consulta);

    echo '<div class="w3-row-padding w3-panel" style="margin-left: 20px">';
        echo '<h1 class="fonteTituloPesquisa w3-half w3-container">Resultados da pesquisa para: "'.$pesquisar.'" :</h1>';
    echo '</div>';

    if($resultado != null)
    foreach($resultado as $linha) {
        echo '<div class="w3-row-padding w3-panel" style="margin-left: 25px">';
            echo '<a href="'.$linha['href'].'" target="_self">';
            echo '<div class="w3-quarter">';
                echo '<img src="../IMG_POST/'.$linha['imagem'].'" class="w3-border w3-round-large" style="width: 220px; height: 150px;">' ;
            echo '</div>' ;
            echo '</a>';
            echo '<div class="w3-left-align">';
                echo '<h1 class="fonteTituloPesquisa w3-half w3-container">'.$linha['titulo'].'</h1>';
                echo '<h1 class="fonteCorpo2 limit w3-left w3-container" style="width: 650px">'.$linha['texto'].'</h1>';
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
?>
</div>

<?php require_once ('../layout/rodape.php');?>