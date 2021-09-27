<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - 15 alimentos sem glúten para usar na dieta</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_gluten.php");
    $pub -> setTitulo ("15 alimentos sem glúten para usar na dieta");
    $pub -> setImagem ("../IMG/DICAS/Gluten.jpg");
    $pub -> setFonte ("https://www.tuasaude.com/alimentos-sem-gluten/");

    
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
    O grupo de alimentos que não contém glúten são as frutas, vegetais e carnes, já que não possuem essa proteína em sua 
    composição. Além disso, existem algumas farinhas que podem ser utilizadas para substituir a farinha de trigo ou de 
    centeio no preparo de pães, biscoitos e bolos, por exemplo, assim como alguns produtos em que é indicado que são "sem glúten".
    </p>';

    echo '<p class="fonteCorpo1">
    Esses alimentos sem glúten são importantes para as pessoas que possuem doença celíaca, intolerância ou sensibilidade ao 
    glúten e também para pessoas com autismo, já que essa proteína pode causar inflamação no intestino e sintomas como diarreia 
    e dor abdominal, dificultando a absorção de alguns nutrientes.
    </p>';

    echo '<p class="fonteCorpo1">
    No entanto, todas as pessoas podem se beneficiar ao diminuir o consumo de alimentos que contém glúten, já que ão carboidratos 
    que causam inflamação, inchaço e desconforto abdominal.
    </p>';

    echo '<p class="fonteCorpo1">
    Os alimentos que não contém glúten em sua composição são:
    </p>';

    echo '<p class="fonteCorpo1">
    1.	Todas as frutas;
    <br>
    2.	Todos os legumes, vegetais e tubérculos como inhame, mandioca, batata e batata doce;
    <br>
    3.	Carnes, ovos, mariscos e peixes;
    <br>
    4.	Feijão, ervilha, lentilha e soja;
    <br>
    5.	Farinha de arroz, mandioca, amêndoa, coco, alfarroba, quinoa e ervilha;
    <br>
    6.	Arroz, milho, trigo sarraceno e quinoa;
    <br>
    7.	Maisena (amido de milho);
    <br>
    8.	Goma de tapioca;
    <br>
    9.	Fécula de batata;
    <br>
    10.	Polenta
    <br>
    11.	Sal, açúcar, chocolate em pó, cacau;
    <br>
    12.	Gelatina;
    <br>
    13.	Óleos e azeite de oliva;
    <br>
    14.	Frutos secos como amêndoas, nozes, castanha, amendoim e pistache;
    <br>
    15.	Leite, iogurte, manteiga e queijos.
    <br><br> 
    </p>';

    echo '<p class="fonteCorpo1">
    Existem também outros alimentos sem glúten que podem ser comprados facilmente em lojas de produtos naturais como pão e 
    macarrão, por exemplo, mas neste caso o rótulo do produto deve indicar "alimento sem glúten" ou "gluten free" para 
    poderem ser consumidos.
    </p>';

    echo '<p class="fonteCorpo1">
    A farinha de milho e a aveia podem conter traços de glúten, já que esses alimentos podem ser processados em lugares em 
    que a farinha de trigo, centeio ou cevada também são processados. Por isso, é muito importante ler o rótulo dos alimentos 
    antes de comprá-los, não só desses produtos, mas de qualquer produto industrializado.
    </p>';

    echo '<p class="fonteCorpo1">
    Além disso, no caso das pessoas celíacas, a aveia deve ser consumida sob a orientação de um nutricionista, porque apesar 
    de não conter glúten, em alguns casos foi observado que o organismo pode criar uma reação imune contra as proteínas da aveia, 
    o que pode piorar a crise.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Como fazer uma dieta sem glúten
    </h1>';
    echo '<p class="fonteCorpo1">
    Uma dieta sem glúten consiste em eliminar uma série de alimentos e preparações que contenham farinha de trigo, cevada ou 
    centeio, incluindo bolos, bolachas, biscoitos ou pão, por exemplo.
    </p>';

    echo '<p class="fonteCorpo1">
    Essa dieta é muito utilizada por pessoas que possuem intolerância ao glúten e cuja finalidade é diminuir a inflamação do 
    intestino para aumentar a absorção de nutrientes e, por sua vez, aliviar os sintomas gastrointestinais como diarreias e 
    dor abdominal, que são comuns nessas pessoas.
    </p>';

    echo '<p class="fonteCorpo1">
    No entanto, a dieta sem glúten também está sendo implementada com o objetivo de perder peso, já que a sua utilização implica 
    na eliminação de farinhas refinadas e de alguns carboidratos que favorecem o aumento de peso. Seja qual for o motivo, é 
    importante que para realizá-la, um nutricionista seja consultado, pois assim é possível garantir que todos os nutrientes 
    essenciais para o bom funcionamento do organismo sejam consumidos.
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