<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Dica de cardápio vegano</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Cardápios nutritivos");
    $pub -> setId_pub ("cardapios_vegan.php");
    $pub -> setTitulo ("Dica de cardápio vagano");
    $pub -> setImagem ("../IMG/CARDAPIOS/Vegan.jpg");
    $pub -> setFonte ("https://veganandcolors.com/pt/2020/03/preparo-de-cardapio-vegano-com-pdf-para-imprimir-lista-de-compras/");

    
    echo '<div class="w3-padding-16" style="margin-left: 340px; margin-right: 305px;">';
    echo '<div class="w3-display w3-half">';
    echo '<h1 class="fonteTitulo2 w3-left-align">' .$pub -> getTopico(). '</h1>';
    echo '</div>';
    require_once ('../layout/campoBusca.php');
    echo '</div>';
    
    echo '<div name="' .$pub -> getId_pub(). '"  method="POST">';
    echo '<div class="margin w3-row-padding w3-panel">';

    echo '<div class="w3-container">';
    echo '<h1 class="fonteSubtitulo1" style="margin-left: 30px;">' .$pub -> getTitulo(). '</h1>';
    echo '</div>';

    echo '<div class="w3-half w3-margin">';    
    echo '<img src="' .$pub -> getImagem(). '" style="width: 420px; height: 280px;" 
    class="w3-border w3-round-large w3-margin-left w3-margin-right">';
    echo '</div>';

    echo '<div class="w3-left w3-section">';
    require_once ('../layout/salvarPagina.php');
    echo '</div>';
    
    echo '<div class="w3-padding-32" style="margin-left: 40px;">';
    
    echo '<br>';
    echo '<br>';

    //Texto da publicação
    echo '<p class="fonteCorpo1">
    Confira essa dica de cardápio vegano mantada por Ana Eisermann.
    </p>';

    echo '<br><br><br><br><br><br><br>';
    echo '<h1 class="fonteSubtitulo1">
    Cárdapio vegano de segunda à sabado
    </h1>';

    echo '<h1 class="fonteSubtitulo1">
    Segunda-feira
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Muffin saudável de aveia com batata doce
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Refogado de quinoa com brócolis, cenoura e grão-de-bico + abóbora assada    
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Fruta
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	tacos low carb de lentilhas em folhas de alface com maionese de pimentão vermelho assado    
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Terça-feira
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Muffin saudável de aveia com batata doce
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Dahl de lentilhas rápido com tortilhas tostadas
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Fruta
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Sobra almoço de segunda + repolho roxo + maionese de pimentão assado    
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Quarta-feira
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Vitamina verde
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Sobra do dahl lentilhas servido sobre quinoa
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Cookies sem glúten e proteicos
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Wrap com atum de grão-de-bico e salada
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Quinta-feira
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Vitamina verde
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Salada de quinoa rainbow + abóbora assada
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Cookies sem glúten e proteicos
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Sopa cremosa de abóbora e brocolis
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sexta-feira
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Muffin saudável de aveia com batata doce
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Macarrão com almondêgas de lentilha
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Fruta
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Sobra do almoço de quinta
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sábado
    </h1>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Vitamina verde
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Sobra almoço de sexta
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Fruta com pasta de amendoim
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Jantar fora
    </p>';

    echo '<br>';
    echo '<p class="fonteCorpo1">Fonte:
    <a href="' .$pub -> getFonte(). '" target="_blank" class="fonteComment">' .$pub -> getFonte(). '.</a>
    </p>';

    echo '</div>';
    echo '</div>';
    echo '</div>';
?>

<?php require_once ('../layout/comentar.php');?>
<?php require_once ('../layout/rodape.php');?>