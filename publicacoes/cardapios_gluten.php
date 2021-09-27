<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Como fazer uma dieta sem glúten</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Cardápios nutritivos");
    $pub -> setId_pub ("cardapios_gluten.php");
    $pub -> setTitulo ("Como fazer uma dieta sem glúten");
    $pub -> setImagem ("../IMG/CARDAPIOS/Gluten.jpg");
    $pub -> setFonte ("https://www.tuasaude.com/como-fazer-uma-dieta-sem-gluten/");

    
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
    A dieta sem glúten é necessária principalmente para quem tem intolerância ao glúten e não consegue digerir 
    essa proteína, ficando com diarreias, dor e inchaço abdominal quando come essa proteína, como é o caso de quem 
    tem doença Celíaca ou sensibilidade ao glúten.
    </p>';

    echo '<p class="fonteCorpo1">
    A dieta sem glúten, algumas vezes, é utilizada para emagrecer porque são eliminados da alimentação vários alimentos, 
    como pão, bolachas ou bolos, por exemplo, por possuírem glúten e assim diminui o valor calórico ingerido, facilitando 
    a perda de peso numa dieta de emagrecimento.
    </p>';

    echo '<p class="fonteCorpo1">
    Mas no caso de um doente celíaco a eliminação do glúten envolve a leitura detalhada de todos os rótulos de alimentos 
    e até componentes de remédios ou batons. Porque a ingestão, mesmo que pequena de vestígios de glúten nesses produtos 
    pode desencadear um processo infamatório grave. Nestes casos, a farinha de sorgo, que é naturalmente sem glúten e 
    bastante nutritiva, pode ser uma alternativa.
    </p>';

    echo '<h1 class="fonteSubtitulo1">
    Cardápio da dieta sem glúten
    </h1>';

    echo '<p class="fonteCorpo1">
    O cardápio da dieta sem glúten é difícil de seguir, pois são eliminados muitos alimentos comumente consumidos no dia a dia. 
    Segue-se um exemplo.
    </p>';

    echo '<h1 class="fonteIcone">
    Café da manhã
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Pão sem glúten com manteiga e leite ou tapioca.
    </p>';

    echo '<h1 class="fonteIcone">
    Almoço
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Arroz com filé de frango grelhado e salada de alface, tomate e repolho roxo, temperada com azeite e vinagre. 
        Para sobremesa, melancia.
    </p>';

    echo '<h1 class="fonteIcone">
    Lanche da tarde
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Vitamina de morango com amêndoas.
    </p>';

    echo '<h1 class="fonteIcone">
    Janta
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Batata cozida com pescada e brócolis cozidos, temperados com vinagre e suco de limão. Maçã para sobremesa.
    </p>';

    echo '<br>';
    echo '<p class="fonteCorpo1">
    Para ter mais alternativas para a dieta e consumir todos os nutrientes importantes para o corpo é necessário fazer a 
    dieta sem glúten com o acompanhamento de um nutricionista especializado.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Que alimentos se pode adicionar na dieta
    </h1>';

    echo '<p class="fonteCorpo1">
    Para criar seu próprio cardápio, pode seguir alguns dos exemplos desta tabela:
    </p>';

    echo '<div class="w3-padding w3-container">
        <table class="w3-table-all w3-centered">
        <thead>
        <tr class="w3-center w3-teal fonteCorpo1">
        <th style="width:140px">Tipo de alimento</th>
        <th style="width:140px">Pode comer</th>
        <th style="width:140px">Não pode comer</th>
        </tr>
        <thead>
        ';
    
        echo '<tr class="fonteCorpo3">';
        echo '<td>Sopas</td>';
        echo '<td>De carne e/ou legumes</td>';
        echo '<td>De miojo, enlatadas e industrializadas</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Carnes e outras proteínas</td>';
        echo '<td>Carne fresca, aves, frutos do mar, peixe, queijo suíço, queijo creme, cheddar, parmesão, ovos, 
                feijão branco seco ou ervilhas.</td>';
        echo '<td>Preparados de carne, comidas industrializadas, suflês com farinha ou queijo cottage</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Batata e substitutos da batata</td>';
        echo '<td>Batata, batata-doce, inhames e arroz</td>';
        echo '<td>Creme de batata e preparados industrializados de batata</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Legumes</td>';
        echo '<td>Todos os legumes frescos ou enlatados</td>';
        echo '<td>Legumes cremosos preparados com farinha e legumes industrializados</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Pães</td>';
        echo '<td>Todos os pães feitos com farinha de arroz, maisena, tapioca ou soja</td>';
        echo '<td>Todos os pães feitos com trigo, centeio, cevada, aveia, farelo de trigo, gérmen de trigo ou malte.
                Todos os tipos de bolachas</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Cereais</td>';
        echo '<td>Arroz, milho puro e arroz doce</td>';
        echo '<td>Lanches com cereais, farinha de trigo, uvas secas, mingau de aveia, gérmen de trigo, cereais de 
                milho ou cereais com malte adicionado</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Gorduras</td>';
        echo '<td>Manteiga, margarina, óleo e gorduras animais</td>';
        echo '<td>Cremes e molhos preparados e industrializados</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Frutas</td>';
        echo '<td>Todas as frutas frescas, congeladas, enlatadas ou secas</td>';
        echo '<td>Frutas preparadas com trigo, centeio, aveia ou cevada</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Sobremesas</td>';
        echo '<td>Tortas caseiras, biscoitos, bolos e pudins feitos com milho, arroz ou tapioca. Gelatinas, merengue, 
                pudim de leite e sorvete de frutas</td>';
        echo '<td>Todos os doces e sobremesas industrializados</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Leite</td>';
        echo '<td>Fresco, seco, evaporado, condensado e creme doce ou azedo</td>';
        echo '<td>Leite maltado e iogurte industrializado</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Bebidas</td>';
        echo '<td>Água, café, chá, sucos de fruta ou limonada</td>';
        echo '<td>Pó de frutas, cacau em pó, cerveja, gin, uísque e alguns tipos de café instantâneo</td>';
        echo '</tr>';
        
        echo '
        </table>
        </div>';


    echo '<br>';
    echo '<p class="fonteCorpo1">
    No entanto, é sempre recomendado fazer uma dieta orientada por um nutricionista, especialmente no caso dos doentes celíacos.
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