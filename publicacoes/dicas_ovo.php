<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Estes são os 7 melhores substitutos do ovo</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_ovo.php");
    $pub -> setTitulo ("Estes são os 7 melhores substitutos do ovo");
    $pub -> setImagem ("../IMG/DICAS/Ovo.png");
    $pub -> setFonte ("https://www.clube-fitness.com/artigo/7-melhores-substitutos-do-ovo");

    
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
    Os ovos são dos alimentos mais versáteis e saudáveis que existem. Isso faz com que estejam na lista de produtos 
    indispensáveis para muitas pessoas. Ainda assim, seja por necessidade ou opção, o ovo pode ser retirado da dieta 
    e substituído por outros ingredientes. O Clube Fitness selecionou sete substitutos do ovo para dar aquela liga e 
    textura que os ovos dão às receitas do dia a dia!
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Banana
    </h1>';
    echo '<p class="fonteCorpo1">
    1/2 banana esmagada tem quase a mesma textura de um ovo batido e resulta muito bem num bolo ou noutra receita para 
    fazer no forno. No entanto, a banana tem um sabor forte, por isso certifica-te de que a tua receita fica bem com um 
    ligeiro toque a banana.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Purê de maçã
    </h1>';
    echo '<p class="fonteCorpo1">
    O purê de maçã tem a textura ideal para substituir os ovos e ajudar a ligar todos os ingredientes de um bolo. No entanto, 
    não vai ajudar o bolo a crescer e vai ser preciso ajustar o açúcar da receita original porque o doce de maçã é isso mesmo: doce.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sementes de linhaça e sementes de chia
    </h1>';
    echo '<p class="fonteCorpo1">
    Tudo o que precisa de fazer para ter um "ovo" é misturar uma colher de sopa de sementes de linhaça (ou sementes de chia) trituradas 
    com 3 colheres de sopa de água e deixar repousar numa taça durante cinco minutos! 
    </p>';
    echo '<p class="fonteCorpo1">
    Esta solução não é a ideal para bolos fofinhos e altos, mas resulta bem em panquecas, waffles, brownies, muffins ou bolachas.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Bicarbonato de sódio com vinagre
    </h1>';
    echo '<p class="fonteCorpo1">
    Quando misturamos uma colher de chá de bicarbonato de sódio com uma colher de sopa de vinagre temos aí um dos melhores substitutos 
    do ovo. Além disso, ainda ajuda o bolo a crescer.
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