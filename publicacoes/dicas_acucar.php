<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Açúcar para Diabéticos: Como Escolher a Melhor Substituição?</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Alternativas alimentares");
    $pub -> setId_pub ("dicas_acucar.php");
    $pub -> setTitulo ("Açúcar para Diabéticos: Como Escolher a Melhor Substituição?");
    $pub -> setImagem ("../IMG/DICAS/Açucar.jpg");
    $pub -> setFonte ("https://blog.nakednuts.com.br/acucar-para-diabeticos/");

    
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
    Você sabe qual é a melhor opção de açúcar para diabéticos?
    Com a popularização de diversos adoçantes e tipos de açúcares, pode ser difícil entender o que, realmente, faz bem para a saúde.
    </p>';

    echo '<p class="fonteCorpo1">
    A diabetes é uma enfermidade que atinge mais de 13 milhões de pessoas no Brasil, segundo levantamento da Sociedade Brasileira de 
    Diabetes. Ela é uma doença crônica resultante da incapacidade do corpo de produzir insulina ou de empregá-la de forma adequada.
    </p>';

    echo '<p class="fonteCorpo1">
    A insulina, por sua vez, é um hormônio necessário para controlar a glicose no sangue.
    Muitas vezes, a diabetes demora a ser diagnosticada, mas, depois de descoberta e tratada, é possível conviver bem com ela.
    </p>';

    echo '<p class="fonteCorpo1">
    Ao descobrir a doença, é preciso fazer alguns ajustes na dieta, e a primeira preocupação talvez seja sobre o que fazer quanto 
    ao consumo de açúcar. Afinal, sabe-se que ele deve ser evitado, mas como fazer isso? É o que você descobre neste conteúdo!
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Como substituir o açúcar para diabéticos?
    </h1>';
    
    echo '<p class="fonteCorpo1">
    A diminuição do consumo de açúcar é uma das grandes dificuldades de quem faz dieta, mas para os diabéticos essa é uma atitude 
    obrigatória. O açúcar nada mais é do que um carboidrato, mas com um dos níveis glicêmicos mais altos.
    </p>';

    echo '<p class="fonteCorpo1">
    Quando um diabético consome muito do alimento, o corpo não dá conta de processá-lo e o nível de glicose no sangue se eleva demais.
    </p>';

    echo '<p class="fonteCorpo1">
    Boa parte dos açúcares são feitos a partir da cana-de-açúcar, mas existem diversos tipos e características.
    </p>';

    echo '<p class="fonteCorpo1">
    O primeiro ponto importante é saber que quanto mais refinado, menos benefícios ele vai trazer – por isso, deve ser evitado.
    </p>';

    echo '<p class="fonteCorpo1">
    O açúcar branco, ou refinado, como já diz o nome, passa por um grande processo de refinamento em que são usados aditivos químicos 
    para que ele fique no tom branco. Nesse processamento, suas vitaminas e sais minerais se perdem.
    </p>';

    echo '<p class="fonteCorpo1">
    O açúcar cristal e o açúcar light são semelhantes ao branco e também são contraindicados aos diabéticos.
    </p>';

    echo '<p class="fonteCorpo1">
    Por fim, o açúcar mascavo, é o alimento na forma bruta, obtido a partir do cozimento do caldo da cana-de-açúcar e não passa por 
    processo de refinamento.
    </p>';

    echo '<p class="fonteCorpo1">
    Apesar do mascavo manter grande parte dos nutrientes, como cálcio, ferro e sais minerais, orientamos, portanto, que você os 
    substitua e opte por caminhos mais naturais, como destacamos a seguir.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Adoçante natural
    </h1>';
    
    echo '<p class="fonteCorpo1">
    Qualquer pessoa deve procurar opções de açúcares mais saudáveis, que mantêm mais nutrientes e que sofrem menos alterações químicas 
    em sua produção. Conheça as principais opções de adoçantes naturais, aqueles que são obtidos a partir da extração de frutas e 
    vegetais.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Xilitol
    </h1>';
    echo '<p class="fonteCorpo1">
    O xilitol é um adoçante extraído de frutas e vegetais e tem um índice glicêmico muito baixo, sem necessitar da insulina para ser 
    metabolizado. Essa sua propriedade faz dele um dos mais indicados para os diabéticos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Eritritol
    </h1>';
    echo '<p class="fonteCorpo1">
    Adoçante natural sem calorias, o Eritritol confere sabor a uma variedade de alimentos e bebidas, substituindo o açúcar para 
    diabéticos. Tem alta tolerância digestiva e baixo índice glicêmico, sendo seguro para diabéticos, não elevando os índices de 
    insulina no sangue. É encontrado em frutas como pera, melão e uva. Sua forma industrializada resulta em um pó branco cristalino.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Stevia
    </h1>';
    echo '<p class="fonteCorpo1">
    Esse adoçante natural é obtido a partir das folhas de uma planta chamada Stevia rebaudiana Bertoni. Ele tem um sabor levemente 
    amargo, mas a sua capacidade de adoçar é 300 vezes maior do que a do açúcar comum. Ainda assim, ele é um adoçante que tem zero 
    calorias e carboidratos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Maltitol
    </h1>';
    echo '<p class="fonteCorpo1">
    Outro adoçante extraído de frutas e vegetais, o maltitol pode ser encontrado na forma cristalina ou em xarope. Pode aparecer 
    em iogurtes e leites com sabor, por exemplo. Tem baixo índice glicêmico, o que o torna boa indicação para portadores de 
    diabetes. Entre seus benefícios, está a não produção de cáries.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Mel
    </h1>';
    echo '<p class="fonteCorpo1">
    Alimento natural, produzido pelas abelhas a partir do néctar das flores, o mel pode ser utilizado como substituto ao açúcar para 
    diabéticos. É mais doce, fácil de conservar, não estraga e ainda agrega uma série de benefícios à saúde. Fonte de energia, tem 
    ação antioxidante e protege contra doenças.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Adoçante artificial
    </h1>';

    echo '<p class="fonteCorpo1">
    Os adoçantes artificiais, ou seja, sintéticos, feitos de substâncias químicas, conferem o sabor doce para os alimentos, mas não 
    têm calorias. Mesmo que eles tenham sido criados para o uso de diabéticos, hoje são utilizados amplamente em produtos dietéticos.
    </p>';

    echo '<p class="fonteCorpo1">
    Vale a pena conhecê-los, embora seu consumo não seja indicado. A razão para isso é que há alegados riscos à saúde, além de não 
    serem nutritivos. Conheça alguns dos mais comuns a seguir.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Sacarina
    </h1>';
    echo '<p class="fonteCorpo1">
    Foi o primeiro adoçante artificial a ser criado, por volta de 1879, e é derivado do petróleo. Ele tem a capacidade de adoçar 
    pelo menos 200 vezes mais do que a sacarose. A sacarina deixa um sabor amargo e é contraindicado para pessoas hipertensas, 
    já que apresenta alto nível de sódio na composição.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Aspartame
    </h1>';
    echo '<p class="fonteCorpo1">
    É um dos mais usados atualmente na fabricação de bebidas, sobremesas, iogurtes e até pastilhas. Tem um grande poder 
    edulcorante e não deixa sabor residual amargo ou metálico como algumas outras opções artificiais.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Acesulfame-K
    </h1>';
    echo '<p class="fonteCorpo1">
    Conhecido também como acessulfame de potássio, esse adoçante é muito utilizado em produtos industrializados. Ele é cerca 
    de 180 vezes mais doce do que as soluções de sacarose.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Ciclamato de sódio
    </h1>';
    echo '<p class="fonteCorpo1">
    Também é fabricado de um derivado do petróleo e é cerca de 30 vezes mais doce que a sacarose. Seu consumo é proibido em 
    alguns países devido a estudos que apontam que a substância pode estar ligada ao aparecimento de tumores.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Diabéticos podem consumir açúcar mascavo?
    </h1>';

    echo '<p class="fonteCorpo1">
    Segundo informações da Sociedade Brasileira de Diabetes, quem sofre dessa condição pode, sim, consumir o açúcar mascavo.
    A recomendação é que a quantidade utilizada seja computada como valor calórico e gramas de carboidrato, pois ele eleva a glicemia.
    </p>';

    echo '<p class="fonteCorpo1">
    No entanto, os nutrientes presentes no açúcar mascavo, característica que o torna mais indicado do que o refinado, podem ser 
    supridos por meio de outros alimentos mais naturais. Por isso, a recomendação para diabéticos seria outra opção com menor 
    índice glicêmico.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Afinal, qual é a opção mais saudável para diabético?
    </h1>';

    echo '<p class="fonteCorpo1">
    Essa é uma pergunta difícil de responder, já que não existe um consenso sobre nenhum tipo de açúcar para diabéticos ou adoçante. 
    Porém, temos algumas certezas:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Dê preferência aos menos processados e refinados; tenha atenção à quantidade de substâncias químicas que você está consumindo.
    <br><br>
    •	Tenha cuidado e controle com as quantidades ingeridas ao utilizar qualquer tipo de açúcar.
    <br><br>
    •	Confira sempre os rótulos dos produtos.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Essa é uma pergunta difícil de responder, já que não existe um consenso sobre nenhum tipo de açúcar para diabéticos ou adoçante. 
    Conclusão
    </p>';

    echo '<p class="fonteCorpo1">
    Sabemos que pode ser um tanto desafiador decidir qual é a melhor opção de consumo para diabéticos. Recomendamos sempre a opção 
    por adoçantes naturais, pois os adoçantes são mais saudáveis e nutritivos do que produtos artificiais. Considere ainda que 
    pacientes com a doença precisam ter um controle maior da sua alimentação, além de contar com a ajuda de um especialista.
    </p>';

    echo '<p class="fonteCorpo1">
    Esperamos que este artigo tenha tirado algumas das suas dúvidas.
    Lembre-se de que nunca é tarde para desenvolver hábitos mais saudáveis.
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