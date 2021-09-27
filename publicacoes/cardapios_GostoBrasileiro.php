<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Cardápio montado ao gosto brasileiro</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Cardápios nutritivos");
    $pub -> setId_pub ("cardapios_GostoBrasileiro.php");
    $pub -> setTitulo ("Nutricionista monta cardápio saudável ao gosto do brasileiro");
    $pub -> setImagem ("../IMG/CARDAPIOS/pratoSaudavel.jpg");
    $pub -> setFonte ("https://saude.abril.com.br/alimentacao/nutricionista-monta-cardapio-saudavel-ao-gosto-do-brasileiro/");

    
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
    Confira o menu de Beatriz Botéquio, da Equilibrium Consultoria em Nutrição, montado para a edição de julho da revista SAÚDE.
    </p>';

    echo '<p class="fonteCorpo1">
    Alimentos integrais e frutas são essenciais para uma dieta balanceada.
    </p>';

    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 copo (200 ml) de leite desnatado<br>
    •	2 fatias de pão integral<br>
    •	1 colher de chá de margarina<br>
    •	½ unidade de mamão papaia
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Lanche da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 goiaba vermelha pequena
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 pires de salada de folhas verdes<br>
    •	2 colheres de sopa de cenoura<br>
    •	1 colher de sobremesa de azeite<br>
    •	4 colheres de sopa de arroz integral<br>
    •	1 concha de feijão<br>
    •	2 unidades de almôndega de carne recheada com espinafre<br>
    •	1 copo (200 ml) de suco de maracujá
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	4 torradas integrais salgadas<br>
    •	1 iogurte desnatado de frutas
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Jantar
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 prato de sobremesa de alface roxa com mini cenoura e cubos de abacaxi<br>
    •	3 colheres de sopa de batata corada<br>
    •	1 unidade pequena de filé de frango grelhado com molho barbecue
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Lanche da noite
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 copo de leite desnatado
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