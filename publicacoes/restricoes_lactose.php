<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Intolerância à lactose</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_lactose.php");
    $pub -> setTitulo ("Intolerância à lactose");
    $pub -> setImagem ("../IMG/RESTRICOES/Leite.jpg");
    $pub -> setFonte ("https://drauziovarella.uol.com.br/doencas-e-sintomas/intolerancia-a-lactose/");

    
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
    Intolerância à lactose é o nome que se dá à incapacidade parcial ou completa de digerir o açúcar existente no leite
    e seus derivados. Ela ocorre quando o organismo não produz, ou produz em quantidade insuficiente, uma enzima digestiva
    chamada lactase, que quebra e decompõe a lactose, ou seja, o açúcar do leite.
    </p>';

    echo '<p class="fonteCorpo1">
    Como consequência, essa substância chega ao intestino grosso inalterada. Ali, ela se acumula e é fermentada por bactérias
    que fabricam ácido lático e gases, promovem maior retenção de água e o aparecimento de diarreias e cólicas.
    </p>';

    echo '<p class="fonteCorpo1">
    É importante estabelecer a diferença entre alergia ao leite e intolerância à lactose. A alergia é uma reação imunológica
    adversa às proteínas do leite, que se manifesta após a ingestão de uma porção, por menor que seja, de leite ou derivados.
    A mais comum é a alergia ao leite de vaca, que pode provocar alterações no intestino, na pele e no sistema respiratório
    (tosse e bronquite, por exemplo).
    </p>';

    echo '<p class="fonteCorpo1">
    A intolerância à lactose é um distúrbio digestivo associado à baixa ou nenhuma produção de lactase pelo intestino delgado.
    Os sintomas variam de acordo com a maior ou menor quantidade de leite e derivados ingeridos.
    </p>';

    echo '<p class="fonteCorpo1">
    Pesquisas mostram que 70% dos brasileiros apresentam algum grau de intolerância à lactose, que pode ser leve, moderado ou
    grave, segundo o tipo de deficiência apresentada.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Tipos
    </h1>';

    echo '<p class="fonteCorpo1">
    •	Deficiência congênita – por um problema genético, a criança nasce sem condições de produzir lactase
        (forma rara, mas crônica);
        <br><br>
    •	Deficiência primária – diminuição natural e progressiva na produção de lactase a partir da adolescência
        e até o fim da vida (forma mais comum);
        <br><br>
    •	Deficiência secundária – a produção de lactase é afetada por doenças intestinais, como diarreias, síndrome
        do intestino irritável, doença de Crohn, doença celíaca, ou alergia à proteína do leite, por exemplo.
        Nesses casos, a intolerância pode ser temporária e desaparecer com o controle da doença de base.
        <br><br>
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sintomas
    </h1>';

    echo '<p class="fonteCorpo1">
    Os sintomas da intolerância à lactose se concentram no sistema digestório e melhoram com a interrupção do consumo de
    produtos lácteos. Eles costumam surgir minutos ou horas depois da ingestão de leite in natura, de seus derivados
    (queijos, manteiga, creme de leite, leite condensado, requeijão, etc.) ou de alimentos que contêm leite em sua composição
    (sorvetes, cremes, mingaus, pudins, bolos, etc.). Os mais característicos são distensão abdominal, cólicas, diarreia,
    flatulência (excesso de gases), náuseas, ardor anal e assaduras, estes dois últimos provocados pela presença de fezes
    mais ácidas. Crianças pequenas e bebês portadores do distúrbio, em geral, perdem peso e crescem mais lentamente.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Diagnóstico
    </h1>';

    echo '<p class="fonteCorpo1">
    Além da avaliação clínica, o diagnóstico da intolerância à lactose pode contar com três exames específicos: teste de
    intolerância à lactose, teste de hidrogênio na respiração e teste de acidez nas fezes.
    </p>';

    echo '<p class="fonteCorpo1">
    O primeiro é oferecido pelo SUS gratuitamente. O paciente recebe uma dose de lactose em jejum e, depois de algumas horas,
    colhe amostras de sangue para medir os níveis de glicose, que permanecem inalterados nos portadores do distúrbio.
    </p>';

    echo '<p class="fonteCorpo1">
    O segundo considera o nível de hidrogênio eliminado na expiração depois de o paciente ter ingerido doses altas de lactose
    e o terceiro leva em conta a análise do nível de acidez no exame de fezes.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Tratamento
    </h1>';

    echo '<p class="fonteCorpo1">
    A intolerância à lactose não é uma doença. É uma carência do organismo que pode ser controlada com dieta e medicamentos.
    No início, a proposta é suspender a ingestão de leite e derivados da dieta a fim de promover o alívio dos sintomas.
    Depois, esses alimentos devem ser reintroduzidos aos poucos até identificar a quantidade máxima que o organismo suporta
    sem manifestar sintomas adversos. Essa conduta terapêutica tem como objetivo manter a oferta de cálcio na alimentação,
    nutriente que, junto com a vitamina D, é indispensável para a formação de massa óssea saudável. Suplementos com lactase
    e leites modificados com baixo teor de lactose são úteis para manter o aporte de cálcio, quando a quantidade de leite
    ingerido for insuficiente.
    </p>';

    echo '<p class="fonteCorpo1">
    Pessoa que desenvolveu intolerância à lactose pode levar vida absolutamente normal desde que siga a dieta adequada e evite
    o consumo de leite e derivados além da quantidade tolerada pelo organismo.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Recomendações
    </h1>';

    echo '<p class="fonteCorpo1">
    Portadores de intolerância à lactose precisam saber que:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Na medida do possível, o leite não deve ser totalmente abolido da dieta;
        <br><br>
    •	É importante ler não só os rótulos dos alimentos para saber qual é a composição do produto, mas também a bula dos
        remédios, porque vários deles incluem lactose em sua fórmula;
        <br><br>
    •	Leite de soja, de arroz, de aveia não contém lactose;
        <br><br>
    •	Leite de vaca não entra como ingrediente do pão francês e do pão-de-ló;
        <br><br>
    •	Verduras de folhas verdes, como brócolis, couves, agrião, couve-flor, espinafre, assim como feijão, ervilhas, tofu,
        salmão, sardinha, mariscos, amêndoas, nozes, gergelim, certos temperos (manjericão, orégano, alecrim, salsa) e ovos
        também funcionam como fontes de cálcio;
        <br><br>
    •	Comer de tudo um pouco é a melhor forma de manter o suporte de nutrientes necessários para a saúde e bem-estar do organismo.
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