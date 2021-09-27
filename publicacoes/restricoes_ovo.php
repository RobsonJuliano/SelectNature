<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - O que é a alergia ao ovo, sintomas e o que fazer</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_ovo.php");
    $pub -> setTitulo ("O que é a alergia ao ovo, sintomas e o que fazer");
    $pub -> setImagem ("../IMG/RESTRICOES/Ovo.jpg");
    $pub -> setFonte ("https://www.tuasaude.com/alergia-ao-ovo/");

    
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
    A alergia ao ovo acontece quando o sistema imune identifica as proteínas da clara do ovo como um corpo estranho, 
    desencadeando uma reação alérgica com sintomas como:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Vermelhidão e coceira na pele;
    <br>
    •	Dor no estômago;
    <br>
    •	Náuseas e vômitos;
    <br>
    •	Coriza;
    <br>
    •	Dificuldade para respirar;
    <br>
    •	Tosse seca e chiado ao respirar.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Estes sintomas surgem poucos minutos após ingerir ovo, mas podem passar várias horas até que os sintomas surjam e, nesses casos, a alergia pode ser mais difícil de identificar.
    </p>';

    echo '<p class="fonteCorpo1">
    Geralmente, a alergia ao ovo pode ser identificada logo nos primeiros meses de vida, entre os 6 e os 12 meses de idade, e, em alguns casos, pode desaparecer durante a adolescência.
    </p>';

    echo '<p class="fonteCorpo1">
    Uma vez que a intensidade dos sintomas pode variar ao longo do tempo, é importante evitar a ingestão de qualquer comida com vestígios de ovo, pois pode surgir uma reação de anafilaxia grave, na qual a pessoa pode deixar de conseguir respirar. Saiba o que é a anafilaxia e o que fazer.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Como confirmar a alergia
    </h1>';

    echo '<p class="fonteCorpo1">
    O diagnóstico da alergia ao ovo muitas vezes é feito através do teste de provocação, no qual se deve ingerir um pedaço de ovo, no hospital, para que o médico observe a ocorrência dos sintomas acima citados. Outra forma, é fazer o teste cutâneo de alergia ao ovo ou fazer um exame de sangue para identificar a presença de anticorpos específicos ao ovo.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    O que fazer para evitar a alergia ao ovo
    </h1>';

    echo '<p class="fonteCorpo1">
    A melhor forma de evitar a alergia é excluir o ovo da alimentação e, por isso, é importante não comer ovo, nem qualquer outro alimento que possa conter vestígios, como:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Bolos; 
    <br>
    •	Pão;
    <br>
    •	Biscoitos;
    <br>
    •	Empanados;
    <br>
    •	Maionese.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Dessa forma, é ainda aconselhado observar atentamente os rótulos dos alimentos, porque em muitos existe a indicação de que pode haver vestígios de ovo.
    </p>';

    echo '<p class="fonteCorpo1">
    A alergia ao ovo é mais comum na infância mas na maior parte das vezes, esta alergia é solucionada naturalmente após alguns anos, sem a necessidade de tratamento específico.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Porque se devem evitar algumas vacinas?
    </h1>';

    echo '<p class="fonteCorpo1">
    Algumas vacinas utilizam a clara de ovo quando são fabricadas, e por isso, as crianças ou adultos que tenham grave alergia ao ovo não devem receber este tipo de vacinas.
    </p>';

    echo '<p class="fonteCorpo1">
    No entanto, algumas pessoas só possuem uma alergia leve ao ovo e, nestes casos, a toma da vacina pode ser realizada normalmente. Contudo, se o médico ou enfermeiro considerarem que a alergia ser grave, a vacina deve ser evitada. 
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Quando incluir o ovo na alimentação da criança
    </h1>';

    echo '<p class="fonteCorpo1">
    A sociedade Americana de Pediatria (AAP) indica que a introdução de alimentos alergênicos entre os 4 e 6 meses de idade pode ajudar a diminuir o risco da criança desenvolver alergias alimentares, o que inclui bebês com antecedentes de alergia na família e/ou eczema grave. No entanto, estas orientações devem ser sempre seguidas apenas com orientação de um pediatra.
    </p>';

    echo '<p class="fonteCorpo1">
    Assim, a AAP conclui que não existe evidência científica suficiente para justificar o atraso da introdução dos alimentos alergênicos, como o ovo, o amendoim ou o peixe.
    </p>';

    echo '<p class="fonteCorpo1">
    Anteriormente, o indicado era de que o ovo inteiro só deveria ser introduzido normalmente na alimentação da criança após o 1º ano de idade, devendo-se incluir primeiro a gema do ovo, por volta dos 9 meses de vida e ir oferecendo apenas 1/4 da gema a cada 15 dias, para avaliar se o bebê apresentava sintomas de alergia.
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