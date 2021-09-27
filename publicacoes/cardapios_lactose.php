<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Dieta sem lactose: O que é, como fazer e cardápio</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Cardápios nutritivos");
    $pub -> setId_pub ("cardapios_lactose.php");
    $pub -> setTitulo ("Dieta sem lactose: O que é, como fazer e cardápio");
    $pub -> setImagem ("../IMG/CARDAPIOS/Lactose.jpg");
    $pub -> setFonte ("https://cuidai.com.br/dieta-sem-lactose/");

    
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
    Considerada umas das vilãs do momento quando o assunto é emagrecer (emagreça com o Tecnonutri) , a lactose, ao 
    lado do glúten, tem sido riscada até mesmo do cardápio de quem não apresenta nenhuma alergia ou intolerância a ela. 
    </p>';

    echo '<p class="fonteCorpo1">
    A dieta sem lactose tem como base eliminar o leite e seus derivados (manteiga, queijo, creme de leite, iogurte etc.) 
    da alimentação. Acredita-se que esses alimentos são capazes de provocar processo inflamatório para o organismo, por 
    meio do açúcar (lactose) e as proteínas (betalactoglobulina e caseína) do leite que poderia deixar nosso corpo mais 
    vulnerável ao ganho de peso.
    </p>';

    echo '<p class="fonteCorpo1">
    Além disso, podem provocar sintomas semelhantes ocasionados pelo glúten como desconforto gástrico e excesso de gases. 
    Segundo a Associação Americana de Gastroenterologia e Nutrição, 85% da população adulta tem algum grau intolerante à lactose. 
    </p>';

    echo '<p class="fonteCorpo1">
    O plano da dieta oferece um cardápio especial, composto de alimentos substitutos a base de soja, arroz ou amêndoa, 
    além de incrementar o consumo de  folhas verde-escuras, amêndoa, semente de gergelim e tofu (queijo de soja), que 
    também oferecem uma boa dose de cálcio. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Vantagens da dieta sem lactose
    </h1>';

    echo '<p class="fonteCorpo1">
    As vantagens dessa dieta estão relacionadas aos indivíduos intolerantes a lactose, ou seja, pessoas que possuem 
    deficiência ou ausência da enzima intestinal chamada lactase, que é a enzima essencial no processo digestivo da proteína do leite.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Desvantagens 
    </h1>';

    echo '<p class="fonteCorpo1">
    A dieta não apresenta estudos que comprovem seus benefícios com relação a perda de peso. Além disso, ao restringir o 
    consumo do leite e seus derivados da alimentação, pode afetar as concentrações de cálcio do nosso organismo, o que pode 
    ser prejudicial para nossa saúde, uma vez que, o cálcio é o responsável pela composição dos ossos e dentes, além de estar 
    relacionadas à manutenção de várias funções do organismo.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    O leite ajuda ou não contra a osteoporose?
    </h1>';

    echo '<p class="fonteCorpo1">
    Embora o leite seja fonte de cálcio, mineral diretamente ligado ao fortalecimento dos ossos, estudos chegaram a contestar 
    a relevância da bebida na prevenção da osteoporose. Um trabalho realizado na Universidade de Uppsala, na Suécia, analisou 
    os hábitos alimentares de 61 433 mulheres e 45 339 homens por meio de questionários respondidos pelos participantes – as 
    moças preencheram a ficha duas vezes e os rapazes, uma. A análise das informações culminou na seguinte conclusão: o alto 
    consumo de leite (três ou mais copos diários) não só deixou a desejar na proteção dos ossos como até elevou o risco de fraturas.
    </p>';

    echo '<p class="fonteCorpo1">
    A hipótese dos especialistas para tal resultado apontou para a galactose, substância formada a partir da quebra da lactose. 
    Quando injetada em animais, por exemplo , observa-se uma morte prematura em decorrência de reações como a inflamação. E esses 
    fatores também estão por trás de fraturas por fragilidade óssea em idosos.
    </p>';

    echo '<p class="fonteCorpo1">
    Porém, os próprios autores pedem cautela na interpretação dos dados e garantem que é preciso novas pesquisas. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sugestão de cardápio sem lactose
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Café da manhã
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 1
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 xíc. de chá de ervas (verde, branco, hibisco, hortelã)
    <br>
    •	1 xíc. (chá) de salada de frutas com 1 col. (sobremesa) de linhaça triturada e 1 col. (sobremesa) de mel
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 2
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 copo (200 ml) de leite de soja (ou de arroz ou de amêndoa)
    <br>
    •	1 fatia de pão integral com 1 fatia de peito de peru light
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 3
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 copo (200 ml) de suco de laranja batido com 1 folha de couve fresca (sem o talo)
    <br>
    •	1 fatia de pão integral com 1 ovo mexido
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 4
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 pote de iogurte de soja com 1 col. (sopa) de farinha de linhaça triturada
    <br>
    •	1 torrada integral com patê de tofu (veja receita abaixo)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Lanche da manhã
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 1
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 porção de fruta (1 banana, 1 rodela média de abacaxi, 1 goiaba)
    <br>
    •	2 amêndoas
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 2
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Mix de frutas secas: 1 damasco + 1 castanha-do-pará + 1 amêndoa
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 3
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 pote de iogurte de soja
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 4
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 barrinha de sementes (gergelim, linhaça)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Almoço
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 1
    </h1>';
    echo '<p class="fonteCorpo1">
    •	2 col. (sopa) de arroz integral
    <br>
    •	1 concha média de feijão
    <br>
    •	1 filé médio de carne magra (alcatra, patinho, filé-mignon) grelhado
    <br>
    •	1 xíc. (chá) de brócolis no vapor
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 2
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Salada de folhas verde-escuras (couve, agrião, rúcula) à vontade com 2 col. (sopa) de cenoura crua ralada 
        e 2 azeitonas temperadas com 1 col. (sobremesa) de azeite, pouco sal, limão
    <br>
    •	2 col. (sopa) de arroz integral (ou arroz 7 grãos)
    <br>
    •	1 concha média de lentilha
    <br>
    •	1 filé médio de frango grelhado com ervas (alecrim, cebolinha, salsinha)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 3
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 pegador de espaguete integral com molho de tomate e manjericão
    <br>
    •	1 posta média de peixe assado, cozido ou grelhado com ervas (alecrim, salsinha, cebolinha)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 4
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Salada mista de folhas verde-escuras, tomate e couve-flor cozida à vontade temperada com 1 col. (sobremesa) de 
        azeite, pouco sal e limão
    <br>
    •	1 hambúrguer de carne bovina (ou hambúrguer de frango ou de grãos: soja, quinoa, lentilha)
    <br>
    •	2 col. (sopa) de purê de mandioquinha com cenoura ou inhame
    <br>
    •	2 col. (sopa) de ervilha torta refogada com cebola e tomate
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Lanche da tarde
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 1
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 taça de gelatina de uva de agár-agár
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 2
    </h1>';
    echo '<p class="fonteCorpo1">
    •	4 col. (sopa) de abacate com limão e adoçante (opcional)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 3
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 porção de fruta ( 2 kiwis, 2 ameixas, 1 mexerica)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 4
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 barrinha de sementes (gergelim, linhaça)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Jantar
    </h1>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 1
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Salada de folhas verdes, pepino e tomate à vontade com 2 azeitonas temperados com 1 col. (sobremesa) de azeite, 
        pouco sal e limão
    <br>
    •	1 fatia média de carne assada com molho de mostarda (opcional)
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 2
    </h1>';
    echo '<p class="fonteCorpo1">
    •	Salada de folhas verdes à vontade com 1 rodela fina de abacate cortado em meia-lua e tomate temperados com 1 
        col. (sobremesa) de azeite, pouco sal e limão
    <br>
    •	1 filé médio de peixe grelhado ou assado com limão e ervas
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Opção 3
    </h1>';
    echo '<p class="fonteCorpo1">
    •	1 filé médio de carne vermelha magra (alcatra, patinho, filé-mignon) grelhado
    <br>
    •	3 col. (sopa) de cogumelo-de-paris (shiitake ou shiimeji) refogado com cebola e shoyu light
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