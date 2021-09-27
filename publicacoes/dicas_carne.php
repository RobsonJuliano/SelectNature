<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - 5 substitutos da carne para incluir no cardápio</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_carne.php");
    $pub -> setTitulo ("5 substitutos da carne para incluir no cardápio");
    $pub -> setImagem ("../IMG/DICAS/Carne.jpg");
    $pub -> setFonte ("https://ciclovivo.com.br/vida-sustentavel/alimentacao/5-substitutos-carne-incluir-cardapio/");

    
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
    Quem está em transição para o vegetarianismo ou veganismo sempre tem a dúvida de quais alimentos podem ser substitutos da 
    carne. Essa dúvida é natural, visto que a alimentação do ser humano é baseada no consumo de produtos de origem animal e as 
    pessoas crescem acreditando que estes são as únicas fontes para manter a vida saudável.
    </p>';

    echo '<p class="fonteCorpo1">
    O grande receio das pessoas quando buscam substitutos da carne é na reposição dos nutrientes presentes neste alimento, 
    como proteína, ferro, vitaminas do complexo B entre outros. A boa notícia é que todos esses nutrientes podem ser encontrados 
    nos alimentos de origem vegetal. No caso específico da vitamina B12, o mercado hoje disponibiliza alimentos enriquecidos, 
    além da possibilidade de fazer a reposição por meio de cápsulas, afirma Anderson Rodrigues, diretor da empresa Vida Veg.
    </p>';

    echo '<p class="fonteCorpo1">
    A alimentação vegana é uma dieta à base de vegetais. No cardápio inclui legumes, verduras, frutas, tubérculos, grãos integrais 
    como aveia, chia, linhaça, quinoa e também as oleaginosas (castanhas).  Ela supre nossa necessidade em todos os aminoácidos e 
    a maioria das vitaminas e minerais. Além disso, a dieta vegana é riquíssima em antioxidantes responsáveis por retardar o 
    aparecimento de doenças.
    </p>';

    echo '<p class="fonteCorpo1">
    De acordo com o Guia Alimentar de Alimentação Vegetariana para Adultos, da SVB, quando bem planejadas, como toda alimentação 
    deve ser, as refeições vegetarianas promovem o crescimento e desenvolvimento adequados e podem ser adotadas em qualquer ciclo 
    da vida, inclusive na gestação e na infância. A alimentação vegetariana traz resultados benéficos na prevenção e no tratamento 
    de diversas doenças crônico-degenerativas não transmissíveis. Não há estudos demonstrando aumento de doenças em grupos vegetarianos.
    </p>';

    echo '<p class="fonteCorpo1">
    Para auxiliar você no processo de transição, existem muitos substitutos para a carne que podem ser inclusos no cardápio. 
    Entre eles: 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Leguminosas
    </h1>';
    echo '<p class="fonteCorpo1">
    Grão-de-bico, todos os tipos de feijões, ervilha, lentilha, soja e favas são ótimos substitutos da carne, fontes de proteína vegetal, 
    vitaminas e minerais, como o ferro.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Tofu
    </h1>';
    echo '<p class="fonteCorpo1">
    Obtido a partir da soja fermentada, é rico em proteínas e minerais, como cálcio, fósforo e magnésio. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sementes
    </h1>';
    echo '<p class="fonteCorpo1">
    Sementes de chia, linhaça, girassol, gergelim fornecem boas quantidades de proteína, ômega-3 e vitaminas do complexo B. O gergelim 
    é também excelente fonte de cálcio. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Cereais integrais
    </h1>';
    echo '<p class="fonteCorpo1">
    Como o arroz, aveia, amaranto, trigo, quinoa, centeio. Assim como as leguminosas, são boas fontes de proteína vegetal, fornecem 
    vitaminas do complexo B, ferro e fibras.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Verduras de folhas verde-escuro
    </h1>';
    echo '<p class="fonteCorpo1">
    Como couve, brócolis, escarola, rúcula e agrião são ricas em ferro. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Oleaginosas
    </h1>';
    echo '<p class="fonteCorpo1">
    Castanhas, amêndoas, nozes, avelãs e macadâmias, são ricas em gorduras insaturadas, proteínas, fibras e antioxidantes. Além disso 
    são fontes das vitaminas E e do complexo B e de minerais como zinco, potássio, manganês, ferro, cobre e selênio.
    </p>';

    echo '<p class="fonteCorpo1">
    A pessoa que quiser fazer a transição para esta dieta deve procurar informações e auxílio de um profissional de saúde habilitado. 
    De todo modo, ao adquirir conhecimento sobre os nutrientes de cada alimento fica fácil fazer combinações perfeitas para uma 
    alimentação saudável.
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