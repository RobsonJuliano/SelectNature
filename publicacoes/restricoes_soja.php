<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Alergia da soja</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_soja.php");
    $pub -> setTitulo ("Alergia da soja");
    $pub -> setImagem ("../IMG/RESTRICOES/Soja.jpg");
    $pub -> setFonte ("https://www.news-medical.net/health/Soy-Allergy-(Portuguese).aspx");

    
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
    A soja é um ingrediente comum contido em muitos alimentos processados e em fórmulas infantis. A alergia da soja ocorre 
    geralmente na primeira infância, com a maioria de crianças que crescem fora da alergia pela idade de dez.
    </p>';

    echo '<br><br>';
    echo '<h1 class="fonteSubtitulo1">
    Causa
    </h1>';
    
    echo '<p class="fonteCorpo1">
    Uma alergia da soja é causada pelo sistema imunitário que confunde a proteína de soja por uma substância prejudicial, 
    referida como um alérgeno. Isto provoca a produção de anticorpos da imunoglobulina (IgE) E, que embandeiram então a 
    proteína de soja até o sistema imunitário a próxima vez que uma pessoa o consome. A histamina e outros produtos químicos 
    são liberados então na circulação sanguínea, causando os sinais e os sintomas da alergia.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Sinais e sintomas
    </h1>';

    echo '<p class="fonteCorpo1">
    A alergia da soja começa frequentemente quando os infantes reagem às fórmulas soja-baseadas, embora se possa se tornar 
    em toda a idade e causar por alimentos que uma pessoa tem comido previamente sem experimentar nenhuns problemas.
    </p>';

    echo '<p class="fonteCorpo1">
    Geralmente, os sintomas da reacção são suaves e podem incluir:
    </p>';

    echo '<p class="fonteCorpo1">
    •	colmeia
    <br>
    •	itching na área da boca
    <br>
    •	um nariz congestionado ou ralo.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Em casos raros, a alergia da soja pode conduzir a uma reacção mais severa chamada o anaphylaxis, que pode ser risco de 
    vida se não tratado. Durante o anaphylaxis, a garganta incha acima, há uma queda afiada na pressão sanguínea e respirar 
    torna-se difícil. Esta circunstância exige o tratamento imediato com epinefrina, a única droga que pode inverter estes 
    sintomas. Conseqüentemente, recomenda-se que os povos com uma alergia da soja levam um auto-injector da epinefrina em 
    sua pessoa em todas as vezes.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Factores de risco
    </h1>';

    echo '<p class="fonteCorpo1">
    Determinados factores aumentam a probabilidade que uma pessoa desenvolverá uma alergia da soja e estes incluem o seguinte:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Uns antecedentes familiares das alergias tais como a febre da eczema, da asma ou de feno
    <br><br>
    •	Idade - esta alergia é mais comum nas crianças, particularmente bebês e infantes
    <br><br>
    •	Alergias existentes - em alguns casos, os povos que já têm uma alergia a outros alimentos são igualmente alérgicos à soja
    <br><br>
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Diagnóstico
    </h1>';

    echo '<p class="fonteCorpo1">
    Se um doutor suspeita uma pessoa tem uma alergia da soja, farão perguntas sobre os sintomas e executarão uma avaliação física. 
    Podem igualmente perguntar que o paciente mantenha um diário do alimento que detalhe todos os alimentos comidos e descreve 
    quaisquer sintomas que ocorrerem após comer.
    </p>';

    echo '<p class="fonteCorpo1">
    Além, podem recomendar um teste da picada da pele e/ou uma análise de sangue. Para o teste de pele, a pele é picada e expor 
    às pequenas quantidades de proteína de soja. Se uma pessoa é alérgica, desenvolverão uma colisão ou uma colmeia levantada 
    no local expor. Uma amostra de sangue pode igualmente ser tomada para verificar a quantidade de anticorpos que (IgE) da 
    imunoglobulina uma pessoa tem em sua circulação sanguínea.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Gestão
    </h1>';

    echo '<p class="fonteCorpo1">
    Para impedir uma reacção à soja, é essencial evitar consumir a soja e os produtos da soja. Os povos com uma alergia da soja 
    devem ler os ingredientes alistados em todos os produtos alimentares antes de comprá-los ou de consumir.
    </p>';

    echo '<p class="fonteCorpo1">
    A soja e alguma dos seguintes ingredientes devem ser evitadas:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Soja, incluindo o queijo da soja, a farinha de soja, os grãos da soja, o leite de soja, os brotos da soja, a albumina da soja, a fibra da soja, as porcas da soja, o iogurte da soja e o gelado da soja.
    <br>
    •	Shoyu
    <br>
    •	Edamame
    <br>
    •	Miso
    <br>
    •	Natto
    <br>
    •	Soja
    <br>
    •	Tamari
    <br>
    •	Tempeh
    <br>
    •	Tofu
    <br>
    •	Coalho do feijão de soja e grânulo do feijão de soja
    <br>
    •	Proteína de soja
    <br>
    •	Molho de soja
    <br>
    •	Proteína vegetal Textured
    <br>
    •	A soja pode igualmente às vezes ser encontrada no amido/caldo/goma vegetais e na culinária asiática.
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Se uma pessoa consome acidentalmente proteínas de soja, os antistamínicos podem ser usados para aliviar sintomas e incómodo. 
    Os exemplos dos antistamínicos que são legais disponível incluem o loratadine, o cetirizine e o diphenhydramine. Se uma 
    pessoa tem uma reacção mais severa, podem exigir o tratamento da emergência e uma injecção da epinefrina.
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