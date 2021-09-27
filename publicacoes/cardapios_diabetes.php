<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Cardápio para diabetes</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Cardápios nutritivos");
    $pub -> setId_pub ("cardapios_diabetes.php");
    $pub -> setTitulo ("Cardápio para diabetes");
    $pub -> setImagem ("../IMG/CARDAPIOS/Diabetes.jpeg");

    
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
    Confira essa dica de cardápio para diabéticos.
    </p>';

    echo '<div class="w3-padding w3-container">
        <table class="w3-table-all w3-centered">
        <thead>
        <tr class="w3-center w3-teal fonteCorpo1">
        <th style="width:140px">Refeição</th>
        <th style="width:140px">Alimentos</th>
        <th style="width:140px">Substituições</th>
        </tr>
        <thead>
        ';
    
        echo '<tr class="fonteCorpo3">';
        echo '<td>Desjejum *</td>';
        echo '<td>Leite semi ou desnatado</td>';
        echo '<td>Iogurte desnatado ou light ou suco de fruta natural (com o suco de 1 porção da fruta diluído em água) ou 
                chá de ervas claras (camomila, erva doce, cidreira) ou chá de frutas</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Café (Opcional)</td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Adoçante</td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Pão (de preferência integral) – consumo moderado!</td>';
        echo '<td>Biscoito salgado ou torrada (de preferência integrais) – consumo moderado</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Manteiga ou margarina</td>';
        echo '<td>Queijo fresco, ricota ou cottage, geléia diet</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Lanche da manhã</td>';
        echo '<td>ogurte desnatado com granola diet</td>';
        echo '<td>Fruta ou barra de cereais diet</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Almoço **</td>';
        echo '<td>Arroz (de preferência integral) – com moderação</td>';
        echo '<td>Macarrão (exceto o instantâneo) ou batata, mandioca, mandioquinha, cará ou inhame ou farinha – consumo moderado</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Feijão</td>';
        echo '<td>Grão de bico, lentilha, ervilha, soja ou fava</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Carne vermelha sem gordura aparente</td>';
        echo '<td>Frango ou outras aves sem pele ou peixe ou preparações com ovos ou miúdos – consumir de forma grelhada ou 
                cozida ou assada</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Legumes ou verduras</td>';
        echo '<td>Abobrinha, chuchu, vagem, berinjela, cenoura ou brócolis, couve, repolho, espinafre</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Salada crua</td>';
        echo '<td>Folhas ou pepino ou tomate</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td>Sobremes</td>';
        echo '<td>Fruta ou doce diet – com moderação</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Lanche da tarde ***</td>';
        echo '<td>Castanha do Pará </td>';
        echo '<td>Castanha de caju ou amêndoa ou fruta</td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Jantar</td>';
        echo '<td>Pode ser igual ao almoço ou preparar uma sopa caseira com legumes variados e verduras</td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td></td>';
        echo '<td></td>';
        echo '<td></td>';
        echo '</tr>';

        echo '<tr class="fonteCorpo3">';
        echo '<td>Ceia</td>';
        echo '<td>Leite semi ou desnatado</td>';
        echo '<td>Iogurte light ou gelatina ou fruta</td>';
        echo '</tr>';
        
        echo '
        </table>
        </div>';

    
    echo '<br>';
    echo '<p class="fonteCorpo1">
    * Desjejum - Se não quiser consumir pães, pode substituir por uma fruta e um cereal integral; exemplo: banana amassada 
    om aveia ou mamão com granola.
    </p>';

    echo '<p class="fonteCorpo1">
    ** Almoço - Dar preferência aos alimentos integrais como arroz, macarrão e pães integrais pois eles contêm maior quantidade 
    de fibras e auxiliam no controle da glicemia, se consumidos com moderação.
    </p>';

    echo '<p class="fonteCorpo1">
    *** Lanche da tarde - Pode substituir o lanche da tarde por chá com adoçante e biscoito salgado ou torrada (integrais) - 
    com moderação
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Observações:
    </h1>';

    echo '<p class="fonteCorpo1">
    •	Se quiser variar os alimentos ou não tiver disponibilidade de qualquer alimento da coluna do meio, substituir por um 
    alimento ou preparação da coluna da direita (substituições);
    </p>';

    echo '<p class="fonteCorpo1">
    •	Evitar jejum prolongado. É recomendada a alimentação fracionada em 5 a 6 refeições;
    </p>';

    echo '<p class="fonteCorpo1">
    •	Evitar o consumo de açúcar refinado (sacarose), mascavo, demerara, cristalizado ou açúcar orgânico, mel, doces, 
    refrigerantes não diets, rapadura, caldo de cana – verificando também os rótulos dos alimentos que os contêm para que 
    sejam evitados;
    </p>';

    echo '<p class="fonteCorpo1">
    •	Ingerir com moderação (uma porção do alimento por refeição) as farinhas, pães, biscoitos, bolos, tortas, massas, arroz, 
    milho, batata, batata doce, mandioca, mandioquinha, cará e inhame;    
    </p>';

    echo '<p class="fonteCorpo1">
    •	Não consumir mais de uma porção de fruta por refeição (no máximo 3 porções de frutas ao dia);
    </p>';

    echo '<p class="fonteCorpo1">
    •	Evitar as bebidas alcoólicas;
    </p>';

    echo '<p class="fonteCorpo1">
    •	Consumir com moderação os alimentos diets (isentos de algum ingrediente) e lights (redução parcial) pois eles 
    também contêm calorias e gorduras;
    </p>';

    echo '<p class="fonteCorpo1">
    •	Procurar manter um peso corpóreo saudável ou emagrecer se estiver acima do peso ideal, pois isso auxiliará no controle da doença.
    </p>';

    echo '<p class="fonteCorpo1">
    •	Quando apresentar hipoglicemia (queda do açúcar no sangue), consumir imediatamente uma fonte de açúcar, como 1 copo 
    de água com açúcar ou de refrigerante normal (não diet) ou de suco de laranja e esperar por 15 minutos a normalização glicêmica.
    </p>';


    echo '</div>';
    echo '</div>';
    echo '</div>';
?>

<?php require_once ('../layout/comentar.php');?>
<?php require_once ('../layout/rodape.php');?>