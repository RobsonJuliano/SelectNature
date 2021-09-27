<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Soja e alergia</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_soja.php");
    $pub -> setTitulo ("Soja e alergia");
    $pub -> setImagem ("../IMG/DICAS/Soja.jpg");
    $pub -> setFonte ("https://www.agrolink.com.br/colunistas/soja-e-alergia_383958.html");

    
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
    A reação alérgica é uma forma de proteção do organismo contra substâncias exógenas. Assim como a dor alerta o organismo 
    de que algo está fora dos padrões, a alergia é uma maneira de o organismo defender-se de eventuais perigos externos. Por 
    vezes essa reação é exagerada ou, até, desnecessária. No caso da alergia ou hipersensibilidade a alguns alimentos, 
    observa-se uma reação anormal deflagrada por alguma substância presente no alimento, resultando em uma série de sintomas 
    desconfortáveis.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Epidemia
    </h1>';
    echo '<p class="fonteCorpo1">
    Estudos realizados nos EUA, em 2001, determinaram que 1,5% dos adultos e 6% das crianças com menos de 3 anos de idade (cerca 
    de 4 milhões de cidadãos) são suscetíveis a algum tipo de alergia, configurando um aumento da sua prevalência em relação a 
    estudos anteriores. Desse total, 150 vão a óbito, anualmente, em decorrência de reações alérgicas extremas. Os principais 
    alimentos que deflagram reações alérgicas em adultos são peixes e frutos do mar, amendoins e nozes, leite e ovos. Já os 
    infantes são mais alérgicos a ovos, leite, amendoim, soja e trigo. De acordo com o FDA, o Departamento do Governo que cuida 
    da segurança dos alimentos, 90% das reações alérgicas são devidas a proteínas presentes nos alimentos. Existem também alimentos 
    “emergentes”, como frutas tropicais, temperos e condimentos, que vêm ganhando importância como alergênicos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Soja
    </h1>';
    echo '<p class="fonteCorpo1">
    Ainda de acordo com o FDA, a soja é o 11º produto em termos de alergenicidade, respondendo por apenas 3% dos casos de alergia 
    em crianças. Leite e ovos são considerados produtos muito alérgicos e, para crianças sadias, a soja é, geralmente, muito menos 
    alérgica que o leite de vaca. Entre os adultos, são raros os casos de reações alérgicas à soja. As primeiras reações alérgicas 
    deflagradas pela soja ou pelo leite de vaca são observáveis aos 3 meses de idade. Os sintomas incluem vômitos, diarréia, 
    irritabilidade, dermatite difusa, rinite e asma.
    </p>';

    echo '<p class="fonteCorpo1">
    Um percentual muito grande de crianças, que expressaram sintomas alérgicos nesta idade, perderam a sensibilidade após os 3 anos 
    de idade. Entretanto, o mesmo não ocorre com alergias a amendoins, nozes, peixes e frutos do mar, que tendem a acompanhar o 
    indivíduo durante sua vida. Os cientistas também observaram uma correlação entre alergia ao amendoim e à soja, mas não 
    detectaram associação entre alergia à soja e ao leite de vaca.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Funcionalidade e alergia
    </h1>';
    echo '<p class="fonteCorpo1">
    Foram identificadas 15 proteínas de soja com potencial alergênico, entre elas a P34 e as globulinas 2S, 7S e 11S, que contém 
    conglicininas e glicinas. Normalmente, quem for alérgico à soja deve evitar produtos à base da leguminosa, embora aqueles 
    processados por fermentação (como shoyu, tempeh, natô, misô e tofu) sejam menos alergênicos que outros derivados da soja. 
    Entretanto, com a presença de proteína hidrolizada, concentrados protéicos ou proteína texturizada em uma infinidade de 
    alimentos processados (embutidos, pães, bolos, doces, chocolates, bolachas, massas, etc), por vezes não é possível seguir a 
    recomendação à risca. Com a descoberta contínua de benefícios à saúde, decorrentes das propriedades funcionais da soja, 
    cresce significativamente o número de adeptos de alimentos contendo soja, o que representa um desafio para os cientistas, 
    a fim de encontrar uma solução definitiva para o problema.
    </p>';
    
    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Solução
    </h1>';
    echo '<p class="fonteCorpo1">
    Este desafio já está sendo enfrentado pelos pesquisadores. A maior preocupação dos cientistas é com os bebês e crianças, 
    por sua maior fragilidade e suscetibilidade. Por essa razão, pesquisas estão sendo realizadas para identificar os genes 
    ligados às substâncias que deflagram alergia à soja, como é o caso da proteína P34. Utilizando técnicas de biotecnologia, 
    estão sendo desenvolvidas cultivares, transgênicas, onde a proteína alergênica é substituída por outra ou, então, o gene 
    é “silenciado”, ou seja, embora ele permaneça presente no cromossomo, não codifica para proteína alergênica. Esta solução 
    pode parecer ironia, pois a biotecnologia é a grande arma que dispõem os cientistas para eliminar reações alérgicas causados 
    por alimentos, quando a crítica que é feita às variedades transgênicas é de que elas possam deflagrar reações alérgicas!
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Tofu
    </h1>';
    echo '<p class="fonteCorpo1">
    O tofu é uma boa substituição por praticamente não ter sabor. Basta processar e transformar em puré. ¼ de chávena é o equivalente 
    a um ovo.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Iogurte de soja
    </h1>';
    echo '<p class="fonteCorpo1">
    O ideal é usar sem aromatizantes ou açúcar, para não alterar o sabor da receita. Funciona muito bem em muffins, bolos e cupcakes.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Aquafaba
    </h1>';
    echo '<p class="fonteCorpo1">
    A aquafaba é nada mais do que a água que sobra do cozimento do grão de bico. Tem uma semelhança parecida com a da clara do ovo. 
    Dá para substituir usando 3 colheres de sopa para cada ovo que a receita peça.
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