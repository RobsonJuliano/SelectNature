<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Diabetes</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_diabetes.php");
    $pub -> setImagem ("../IMG/RESTRICOES/Diabetes.jpg");
    $pub -> setTitulo ("Diabetes");
    $pub -> setFonte ("https://drauziovarella.uol.com.br/doencas-e-sintomas/diabetes/");


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
    Diabetes mellitus é uma doença do metabolismo da glicose causada pela falta ou má absorção de insulina, hormônio 
    produzido pelo pâncreas e cuja função é quebrar as moléculas de glicose para transformá-las em energia, a fim de 
    que seja aproveitada por todas as células. A ausência total ou parcial desse hormônio interfere não só na queima 
    do açúcar como na sua transformação em outras substâncias (proteínas, músculos e gordura).
    </p>';

    echo '<p class="fonteCorpo1">
    Na verdade, não se trata de uma doença única, mas de um conjunto de doenças com uma característica em comum: 
    aumento da concentração de glicose no sangue provocado por duas diferentes situações:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Diabetes tipo 1: O pâncreas produz pouca ou nenhuma insulina. A instalação da doença ocorre mais na infância e 
        adolescência e é insulinodependente, isto é, exige a aplicação de injeções diárias de insulina;<br>
        <br>
    •	Diabetes tipo 2 – As células são resistentes à ação da insulina. A incidência da doença que pode não ser 
        insulinodependente, em geral, acomete as pessoas depois dos 40 anos de idade;<br>
        <br>
    •	Diabetes gestacional – Ocorre durante a gravidez e, na maior parte dos casos, é provocado pelo aumento 
        excessivo de peso da mãe;<br>
        <br>
    •	Diabetes associados a outras patologias como as pancreatites alcoólicas, uso de certos medicamentos etc.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sintomas
    </h1>';

    echo '<p class="fonteCorpo1">
    •	Poliúria – a pessoa urina demais e, como isso a desidrata, sente muita sede (polidpsia);
        <br>
    •	Aumento do apetite;
        <br>
    •	Alterações visuais;
        <br>
    •	Impotência sexual;
        <br>
    •	Infecções fúngicas na pele e nas unhas;
        <br>
    •	Feridas, especialmente nos membros inferiores, que demoram a cicatrizar;
        <br>
    •	Neuropatias diabéticas provocada pelo comprometimento das terminações nervosas;
        <br>
    •	Distúrbios cardíacos e renais.
    <br><br>
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Fatores de risco
    </h1>';

    echo '<p class="fonteCorpo1">
    •	Obesidade (inclusive a obesidade infantil);
        <br>
    •	Hereditariedade;
        <br>
    •	Falta de atividade física regular;
        <br>
    •	Hipertensão;
        <br>
    •	Níveis altos de colesterol e triglicérides;
        <br>
    •	Medicamentos, como os à base de cortisona;
        <br>
    •	Idade acima dos 40 anos (para o diabetes tipo 2);
        <br>
    •	Estresse emocional.
    <br><br>
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Tratamento
    </h1>';

    echo '<p class="fonteCorpo1">
    O diabetes não pode ser dissociado de outras doenças glandulares. Além da obesidade, outros distúrbios metabólicos
    (excesso de cortisona, do hormônio do crescimento ou maior produção de adrenalina pelas adrenais) podem estar 
    associados ao diabetes.
    </p>';

    echo '<p class="fonteCorpo1">
    O tipo 1 é também chamado de insulinodependente, porque exige o uso de insulina por via injetável para suprir o 
    organismo desse hormônio que deixou de ser produzido pelo pâncreas. A suspensão da medicação pode provocar a 
    cetoacidose diabética, distúrbio metabólico que pode colocar a vida em risco.
    </p>';

    echo '<p class="fonteCorpo1">
    O tipo 2 não depende da aplicação de insulina e pode ser controlado por medicamentos ministrados por via oral. 
    A doença descompensada pode levar ao coma hiperosmolar, uma complicação grave que pode ser fatal.
    </p>';

    echo '<p class="fonteCorpo1">
    Dieta alimentar equilibrada é fundamental para o controle do diabetes. A orientação de um nutricionista e o 
    acompanhamento de psicólogos e psiquiatras podem ajudar muito a reduzir o peso e, como consequência, cria a 
    possibilidade de usar doses menores de remédios.
    </p>';

    echo '<p class="fonteCorpo1">
    Atividade física é de extrema importância para reduzir o nível da glicose nos dois tipos de diabetes.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Recomendações
    </h1>';

    echo '<p class="fonteCorpo1">
    •	O tratamento do diabetes exige, além do acompanhamento médico especializado, os cuidados de uma equipe multidisciplinar. 
        Procure seguir as orientações desses profissionais;
        <br><br>
    •	A dieta alimentar deve ser observada criteriosamente. Procure ajuda para elaborar o cardápio adequado para seu caso. 
        Não é necessário que você se prive por toda a vida dos alimentos de que mais gosta. Uma vez ou outra, você poderá 
        saboreá-los desde que o faça com parcimônia;
        <br><br>
    •	Um programa regular de exercícios físicos irá ajudá-lo a controlar o nível de açúcar no sangue. Coloque-os como 
        prioridade em sua rotina de vida;
        <br><br>
    •	O fumo provoca estreitamento das artérias e veias. Como o diabetes compromete a circulação nos pequenos vasos 
        sanguíneos (retina e rins) e nos grandes vasos (coração e cérebro), fumar pode acelerar o processo e o aparecimento 
        de complicações;
        <br><br>
    •	O controle da pressão arterial e dos níveis de colesterol e triglicérides deve ser feito com regularidade;
        <br><br>
    •	Medicamentos à base de cortisona aumentam os níveis de glicose no sangue. Não se automedique;
        <br><br>
    •	O diagnóstico precoce é o primeiro passo para o sucesso do tratamento. Não minimize seus sintomas. Procure logo um 
        serviço de saúde se está urinando demais e sentindo muita sede e muita fome.
        <br><br>
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