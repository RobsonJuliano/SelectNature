<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Intolerância ao glúten: o que é, causas e como tratar</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_gluten.php");
    $pub -> setTitulo ("Intolerância ao glúten: o que é, causas e como tratar");
    $pub -> setImagem ("../IMG/RESTRICOES/Gluten.jpg");
    $pub -> setFonte ("https://www.tuasaude.com/intolerancia-ao-gluten/");

    
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
    A intolerância ao glúten não celíaca é a incapacidade ou dificuldade de digestão do glúten, que é uma proteína presente 
    no trigo, no centeio e na cevada. Nessas pessoas o glúten danifica as paredes do intestino delgado, provocando diarreia, 
    dor e inchaço abdominal, além de dificultar a absorção de nutrientes.
    </p>';

    echo '<p class="fonteCorpo1">
    Já na doença celíaca, também ocorre uma intolerância ao glúten, mas há uma reação do sistema imunológico causando um 
    quadro mais grave, com inflamação, dores intensas e diarreia frequente. Veja mais sintomas e como é feito o tratamento 
    da doença celíaca.
    </p>';

    echo '<p class="fonteCorpo1">
    A intolerância ao glúten é permanente e, por isso, não tem cura, sendo necessário retirar completamente o glúten da 
    alimentação para os sintomas desaparecerem. Saiba mais sobre o que é e onde está o glúten.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Principais sintomas da intolerância
    </h1>';

    echo '<p class="fonteCorpo1">
    Os sintomas que podem indicar uma possível intolerância ao glúten podem ser observados já na infância, quando são introduzidos 
    cereais na alimentação do bebê. Os sintomas mais comuns incluem:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Diarreia frequente, de 3 a 4 vezes ao dia, com grande volume de fezes;
    <br>
    •	Vômito persistente;
    <br>
    •	Irritabilidade;
    <br>
    •	Perda do apetite;
    <br>
    •	Emagrecimento sem causa aparente;
    <br>
    •	Dor abdominal;
    <br>
    •	Abdômen inchado;
    <br>
    •	Palidez;
    <br>
    •	Anemia ferropriva;
    <br>
    •	Diminuição da massa muscular.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Em alguns casos, pode até nem existir qualquer um destes sintomas e a intolerância ao glúten só ser descoberta após a 
    manifestação de outras manifestações decorrentes da doença, tais como baixa estatura, anemia refratária, dor nas 
    articulações, prisão de ventre crônica, osteoporose ou até esterilidade.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    O que causa intolerância ao glúten
    </h1>';

    echo '<p class="fonteCorpo1">
    As causas da intolerância não são totalmente conhecidas, no entanto, é possível que a intolerância ao glúten possa ter 
    origem genética ou acontecer devido à permeabilidade intestinal alterada. Além disso, também é possível que a intolerância 
    aconteça devido a estes dois fatores juntos.
    </p>';

    echo '<p class="fonteCorpo1">
    Além dos sintomas, é possível diagnosticar a intolerância, através de exames como:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Exame de fezes - conhecido como teste Van der Kammer
    <br>
    •	Exame de urina - chamado teste D-xilose
    <br>
    •	Teste sorológico - exame de sangue Antigliadina, endomísio e transglutaminases;
    <br>
    •	Biópsia intestinal.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Estes exames podem ajudar no diagnóstico da intolerância ao glúten, assim como uma dieta de exclusão do glúten por um 
    tempo determinado para avaliar se os sintomas desaparecem ou não.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Como deve ser feito o tratamento
    </h1>';

    echo '<p class="fonteCorpo1">
    O tratamento para intolerância ao glúten consiste basicamente em excluir o glúten da alimentação durante toda a vida. 
    O glúten pode ser substituído em muitas situações por milho, farinha de milho, fubá, amido de milho, batata, fécula de 
    batata, mandioca, farinha de mandioca ou polvilho, por exemplo.
    </p>';

    echo '<p class="fonteCorpo1">
    Ao retirar o glúten da dieta, os sintomas podem desaparecer em poucos dias ou semanas.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Dieta para intolerância ao glúten
    </h1>';

    echo '<p class="fonteCorpo1">
    A dieta para intolerância ao glúten consiste em retirar da alimentação todos os alimentos que contêm glúten, como os 
    que são preparados com farinha de trigo, como bolos, pães e biscoitos, substituindo-os por outros, como bolo de fubá, 
    por exemplo.
    </p>';

    echo '<p class="fonteCorpo1">
    Quem sofre com intolerância ao glúten deve por isso excluir da sua dieta os seguintes alimentos:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Pão, macarrão, biscoito, bolo, cerveja, pizza, salgadinhos e qualquer alimento que contenha glúten.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    É importante que a pessoa siga a dieta corretamente para evitar as complicações que a doença pode trazer e, por isso, 
    é importante verificar se o alimento contém glúten e, se tiver, não consumi-lo. Esta informação está presente na maior 
    parte dos rótulos dos produtos alimentares.
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