<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Alternativas para substituir o leite de vaca</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_lactose.php");
    $pub -> setTitulo ("Alternativas para substituir o leite de vaca");
    $pub -> setImagem ("../IMG/DICAS/LeiteSoja.jpg");
    $pub -> setFonte ("https://www.redeciadasaude.com.br/blog/alternativas-para-substituir-o-leite/");

    
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
    Nos últimos anos grande parte da população mundial está passando por uma significativa mudança nos padrões alimentares,
    e este inclui os alimentos processados e de fácil ingestão como o leite de vaca e seus derivados. Associado a esta
    tendência de consumo, a população em geral começou a apresentar diversos problemas de saúde, como a intolerância à
    lactose. Embora o leite seja fonte de cálcio e a vitamina D, e promova o crescimento e enrijecimento dos ossos, alguns
    indivíduos apresentam disfunções enzimáticas que podem limitar ou impedir o consumo de leite e seus derivados desde a infância.
    </p>';

    echo '<p class="fonteCorpo1">
    Quando se descobre a intolerância a lactose, começa a busca por alternativas para substituir o leite de vaca em sua vida,
    seja para tomar puro ou como ingrediente de receitas.
    </p>';

    echo '<p class="fonteCorpo1">
    Abaixo serão citados alguns substitutos fáceis de encontrar em nossas lojas de produtos naturais. Experimente estas opções e
    descubra qual você mais gosta e qual funciona melhor em suas receitas:
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leite de amêndoas
    </h1>';
    echo '<p class="fonteCorpo1">
    Além de ter um bom teor de proteína, o leite de amêndoas é rico em vitaminas e minerais, antioxidantes e gordura monoinsaturada,
    isso tudo, sendo uma ótima fonte de energia para o corpo. É também rico em fibras, oferece 30% da quantidade diária recomendada
    de cálcio, bem como 25% da quantidade recomendada de vitamina D, reduzindo o risco de artrite e osteoporose e melhora a sua
    função imunológica.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leite de arroz
    </h1>';
    echo '<p class="fonteCorpo1">
    O Leite de arroz contém mais carboidratos do que o leite de vaca. No entanto, ao contrário do leite de vaca, o leite de arroz
    não contém lactose nem colesterol. Isto o torna mais saudável para o seu coração, bem como seguro para aqueles que são intolerantes
    à lactose. Escolha uma variedade de leite de arroz que é fortificado com cálcio.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leite de aveia
    </h1>';
    echo '<p class="fonteCorpo1">
    O leite de aveia é rico em vitamina E, cálcio, selênio, zinco, magnésio e ferro, sendo um alimento de alto valor nutricional.
    É rico em fibra solúvel e insolúvel, a solúvel ajuda a diminuir a absorção de açúcar e gordura no intestino e a insolúvel ajuda
    a regular o trânsito intestinal.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leite de coco
    </h1>';
    echo '<p class="fonteCorpo1">
    O leite de coco é rico em vitaminas e minerais essenciais que garantem um bom funcionamento do organismo, como o ferro, ácidos
    fólicos e selênio. Também é uma fonte rica de vitamina A e E, potássio e cálcio. Pode ser um ótimo substituto do leite para
    preparação de sobremesas, peixes e massas. Rico em fibras, o que garante a saúde intestinal.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leite de soja
    </h1>';
    echo '<p class="fonteCorpo1">
    O leite de soja é rico em fibras, proteínas e principalmente vitaminas do complexo B. O uso do leite de soja por crianças deve
    ser supervisionado, pois a soja pode ter um efeito negativo sobre o desenvolvimento hormonal na criança.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    *Dica:
    </h1>';
    echo '<p class="fonteCorpo1">
    O ideal é que se faça um rodízio entre eles, pois o consumo diário de outro tipo de leite também pode trazer uma intolerância.
    Faça o consumo alternado entre eles e aproveite os benefícios dos diferentes tipos de leite!
    </p>';

    echo '<p class="fonteCorpo1">
    Essas informações não dispensam acompanhamento do médico ou nutricionista.
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