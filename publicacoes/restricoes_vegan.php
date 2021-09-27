<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title>Select Nature - Veganismo: como aderir, benefícios e cuidados necessários</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>

<?php
    include_once '../conexao/Publicacao.php';
    $pub = new Publicacao();
    $pub -> setTopico ("Restrições alimentares");
    $pub -> setId_pub ("restricoes_vegan.php");
    $pub -> setTitulo ("Veganismo: como aderir, benefícios e cuidados necessários");
    $pub -> setImagem ("../IMG/RESTRICOES/Vegan.jpg");
    $pub -> setFonte ("https://www.minhavida.com.br/alimentacao/tudo-sobre/34613-veganismo");

    
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
    O veganismo é um estilo de vida que exclui, na medida do possível e do praticável, produtos de origem animal - desde 
    refeições até a forma de se vestir ou escolher cosméticos. Na alimentação, deixa-se de lado carnes, ovos, leite e mel, 
    por exemplo, pela motivação de reduzir os impactos ambientais, a exploração animal, melhorar a saúde, entre outros. 
    A definição é da The Vegan Society, sediada no Reino Unido e considerada a entidade fundadora do veganismo no mundo.
    </p>';

    echo '<p class="fonteCorpo1">
    Devido a alimentos específicos com preços altos nas prateleiras, é comum que muitos associem o veganismo a uma dieta 
    cara e incompatível com a realidade média do brasileiro. Porém, nutricionistas especialistas nesse tipo de alimentação 
    e pessoas que vivem esse estilo de vida apontam como fazer pratos saudáveis e que cabem no bolso, sem alimentos de 
    origem animal. Por outro lado, profissionais também apontam restrições e suplementações que merecem atenção para não 
    prejudicar a saúde.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Benefícios do veganismo
    </h1>';

    echo '<p class="fonteCorpo1">
    De acordo com a Sociedade Vegetariana Brasileira (SVB) e com as nutricionistas especializadas Maria Julia Rosa e 
    Isabel Andrade, o veganismo:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Previne doenças crônico-degenerativas, como Alzheimer e Parkinson
    <br>
    •	Diminui riscos de doenças cardiovasculares
    <br>
    •	Reduz o desenvolvimento de diabetes
    <br>
    •	Abaixa a possibilidade de obesidade
    <br>
    •	Diminui riscos de doenças oculares
    <br>
    •	Reduz doenças renais
    <br>
    •	Abaixa os riscos de câncer
    <br>
    •	Auxilia na recuperação muscular e performance em exercícios
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    A SVB comenta que as dietas veganas "trazem resultados benéficos na prevenção e no tratamento de diversas doenças 
    crônico-degenerativas não transmissíveis". A nutricionista Maria Julia Rosa complementa afirmando que os adeptos ao 
    veganismo têm menores riscos de doenças cardiovasculares, oculares, renais e câncer.
    </p>';

    echo '<p class="fonteCorpo1">
    Outro estudo, desta vez publicado na revista Nutrients, aponta que cientistas revisaram 77 pesquisas sobre as vantagens 
    da dieta vegana na rotina de atletas profissionais. Os resultados mostram que houve melhora na performance, na recuperação 
    muscular após competições e queda nas chances de doenças cardiovasculares.
    </p>';

    echo '<p class="fonteCorpo1">
    Mas o presidente da SVB alerta que, para ter todos estes benefícios, é preciso manter uma dieta balanceada dentro 
    do veganismo. É necessário aderir a opções saudáveis e suplementos para reposição de nutrientes, "não enchendo, 
    por exemplo, o prato de batata frita e macarrão", comenta.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Veganismo x vegetarianismo
    </h1>';

    echo '<p class="fonteCorpo1">
    Você conhece as diferenças entre veganismo e vegetarianismo? Para a nutricionista esportiva e vegetariana Isabel Andrade, 
    o veganismo é mais do que somente mudar a alimentação: o vegano elimina de sua rotina tudo que possa envolver algum 
    sofrimento animal, incluindo vestuário, maquiagem e artigos de higiene, por exemplo.
    </p>';

    echo '<p class="fonteCorpo1">
    A Sociedade Vegetariana Brasileira (SVB) considera como vegetariano o indivíduo que elimina da alimentação todos os tipos 
    de carne e seus derivados - podendo ou não consumir leites e ovos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Nutrientes que merecem atenção
    </h1>';

    echo '<p class="fonteCorpo1">
    •	Proteínas
    <br>
    •	Ferro
    <br>
    •	Vitamina B12
    <br>
    •	Vitamina D
    <br>
    •	Vitamina A
    <br>
    •	Ômega 3
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Quando o veganismo é abordado, o tema que gera mais polêmica é a reposição de nutrientes presentes em carnes, ovos e 
    leites. Para esclarecer estes questionamentos, os nutricionistas e nutrólogos consultados falam do perigo da deficiência 
    de nutrientes. Além disso, comentam como eles podem ser adquiridos em uma dieta vegana saudável.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Proteínas
    </h1>';

    echo '<p class="fonteCorpo1">
    Dentre as dúvidas que Eduardo e Leonardo mais recebem no perfil "Vegano Periférico" estão presentes perguntas como 
    "vai faltar proteína?". Carnes, peixes, ovos e leite têm todas as proteínas que o organismo humano necessita e por 
    esta razão são chamados de alimentos com proteínas completas.
    </p>';

    echo '<p class="fonteCorpo1">
    As principais fontes protéicas de veganos devem ser as leguminosas, feijões, grãos e cereais integrais. Porém, é 
    preciso que os veganos tenham uma dieta protéica mais variada para assegurar a total absorção dos aminoácidos que formam 
    as proteínas. Por isso, o ideal é que consumam no mínimo três porções de fontes de proteínas diferentes por dia.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Ferro
    </h1>';

    echo '<p class="fonteCorpo1">
    O ferro é bastante presente na carne vermelha. Logo, é comum que veganos absorvam menos quantidade de ferro em 
    comparação a quem come carne. Há veganos que consomem até uma quantidade de ferro maior que os carnívoros, mas de um 
    tipo de mais difícil absorção pelo sangue.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Vitamina B12
    </h1>';

    echo '<p class="fonteCorpo1">
    Não há alimentos vegetais que são fontes ricas da vitamina B12. A B12 é produzida por bactérias. Como animais não 
    higienizam alimentos e não costumam ingerir produtos industrializados, eles têm mais fácil acesso a estas bactérias. 
    Então, somente quem come carne acaba por adquirir essas bactérias presentes nos animais de forma natural.
    </p>';

    echo '<p class="fonteCorpo1">
    São necessários exames de sangue para verificar a deficiência desta vitamina e a quantidade correta a cada pessoa para 
    suplementação individual. Ela pode ser reposta via oral ou injetável; e sua quantidade e frequência de consumo podem 
    depender também de históricos de cirurgias gástricas ou intestinais (como as de obesidade), idade e uso de medicamentos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Vitamina D
    </h1>';

    echo '<p class="fonteCorpo1">
    Para manter os ossos fortes e saudáveis, a vitamina D é essencial, pois auxilia na absorção de cálcio. Geralmente 
    veganos têm níveis mais baixos dessa vitamina no organismo, já que é bastante encontrada em ovos, carne e óleo de peixe. 
    Mas não precisa se preocupar com condições como a osteoporose, pois a maior parte da absorção da vitamina D vem da 
    exposição ao sol.
    </p>';

    echo '<p class="fonteCorpo1">
    Portanto, aconselha-se que veganos façam exames para verificar a quantidade de vitamina D no sangue - especialmente 
    no inverno. Assim será possível avaliar a necessidade de tomar suplemento e aumentar a ingestão de alimentos ricos em 
    cálcio. São eles: espinafre, tomate, frutas cítricas, amêndoas e soja.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Vitamina A
    </h1>';

    echo '<p class="fonteCorpo1">
    A ausência de vitamina A leva a problemas de visão e baixa imunidade. Como é proveniente especialmente de leite, ovos 
    e fígado, nutricionistas recomendam aos veganos o consumo de frutas e vegetais com carotenos (substâncias convertidas em 
    vitamina A). Algumas opções são verduras verde-escuro, batata doce, laranja e abóbora.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteIcone">
    Ômega 3
    </h1>';

    echo '<p class="fonteCorpo1">
    O ômega 3 é uma gordura fundamental à saúde, mas é um ácido graxo - ou seja, não é produzida pelo organismo humano e, 
    consequentemente, precisa ser adquirida pela alimentação. O peixe é a fonte que mais contém ômega 3, principalmente 
    salmão e sardinha. Como o peixe não faz parte da dieta vegana, é preciso aderir a alimentos com ácido linoleico - que 
    é transformado em ômega 3. O ácido linoleico pode ser encontrado em nozes, linhaça e na soja.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Raw veganism: como funciona o veganismo cru
    </h1>';

    echo '<p class="fonteCorpo1">
    Há ainda quem prefira consumir apenas alimentos crus. Como o assunto são veganos, claramente peixes, carnes e ovos crus 
    estão fora de questão. O "cru" neste caso está ligado a uma dieta vegana rica em legumes, frutas, nozes, sementes, 
    verduras e grãos.
    </p>';

    echo '<p class="fonteCorpo1">
    Portanto, segundo a Healthline Media, o veganismo cru exclui alimentos de origem animal, processados, cozidos, assados 
    e fritos. O conceito do raw veganism determina que os produtos devem ser consumidos completamente crus ou aquecidos a 
    temperaturas baixas (até 48º C). Ao invés de cozinhar, "veganos crus" preparam refeições com mistura, imersão, desidratação 
    e brotação de alimentos.
    </p>';

    echo '<p class="fonteCorpo1">
    A ideia surgiu com Sylvester Graham, um nutricionista americano, em meados do século XIX, como um modo de se evitar 
    doenças. Afinal, adeptos acreditam que alimentos crus e minimamente aquecidos são mais nutritivos do que os cozidos.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Perigos do veganismo: eles existem mesmo?
    </h1>';

    echo '<p class="fonteIcone">
    O que as entidades veganas dizem
    </p>';

    echo '<p class="fonteCorpo1">
    Frequentemente pensa-se que veganos têm problemas de saúde, pois, ao deixarem de consumir carnes, ovos e leites, terão 
    falta de ferro, cálcio e, principalmente, proteínas. Contudo, entidades vegetarianas afirmam que a transição para o veganismo, 
    pelo contrário, traz inúmeros benefícios à saúde e não tem restrição de público.
    </p>';

    echo '<p class="fonteCorpo1">
    A Associação Dietética Americana, a Academia Americana de Pediatria, a Sociedade Vegetariana Brasileira (SVB) e a 
    Sociedade Canadense de Pediatria defendem que há a possibilidade de ser vegano ou vegetariano em qualquer fase da vida. 
    A Sociedade Canadense de Pediatria até mesmo lançou um guia prático sobre vegetarianismo na infância e adolescência.
    </p>';

    echo '<p class="fonteIcone">
    O outro lado da moeda: influencer vegana teve sérios problemas de saúde
    </p>';

    echo '<p class="fonteCorpo1">
    Conhecida como Rawvana, a youtuber Yoana Mendoza Ayres enfureceu fãs ao ser flagrada comendo peixe em um vídeo. 
    A influencer americana conquista milhões de seguidores desde 2013, quando começou a compartilhar vídeos em inglês e 
    em espanhol com dicas sobre veganismo - desde receitas com produtos crus até conselhos de produtos de beleza e tratamentos 
    de desintoxicação.
    </p>';

    echo '<p class="fonteCorpo1">
    "Sinto muito pela maneira como descobriram sobre a minha recente mudança de dieta. Comecei a incluir alimentos por causa 
    das minhas condições de saúde", disse em vídeo divulgado em suas redes sociais pedindo desculpas.
    </p>';

    echo '<p class="fonteIcone">
    Riscos da dieta vegana
    </p>';

    echo '<p class="fonteCorpo1">
    Diante de casos como o de Rawvana, nutricionistas e pesquisadores alertam para os perigos ao aderir ao veganismo e cuidados 
    necessários. Dentre os possíveis perigos do veganismo estão:
    </p>';

    echo '<p class="fonteCorpo1">
    •	Desenvolvimento de distúrbios alimentares e psicológicos
    <br>
    •	Anemia
    <br>
    •	Bulimia
    <br>
    •	Aumento de peso
    <br>
    •	Gordura no fígado
    <br>
    •	Diabetes
    <br>
    •	Prisão de ventre
    <br>
    •	Desnutrição
    <br>
    •	Osteoporose
    <br><br>
    </p>';

    echo '<p class="fonteCorpo1">
    Bruno Takatsu, médico nutrólogo da Horaios Estética, afirma que é preciso tomar cuidado para evitar o desenvolvimento 
    de distúrbios alimentares e psicológicos, que podem até mesmo desencadear em bulimia e anorexia. Os veganos tendem a 
    ingerir mais carboidratos e menos proteínas comparados a quem tem uma dieta carnívora, o que pode fazer com que ocorra 
    o aumento de peso e, então, tais distúrbios.
    </p>';

    echo '<p class="fonteCorpo1">
    Para isso, evite o consumo excessivo de carboidratos presentes, principalmente, em farinhas, batata, massas, arroz e 
    produtos com soja. Além de aumentar a probabilidade de distúrbios alimentares, uma elevada ingestão de carboidratos e 
    doces também pode resultar em gordura no fígado e diabetes.
    </p>';

    echo '<p class="fonteCorpo1">
    Especialista em bariátrica e gastroenterologia, Henrique Eloy diz que substituir carnes, leite e ovos por alimentos 
    com altas taxas calóricas (como frituras) também aumenta a LDL, que é a gordura que causa colesterol e obesidade.
    </p>';

    echo '<p class="fonteCorpo1">
    Ainda, muitos alimentos vegetais são ricos em fibras e podem, então, causar dores abdominais e prisão de ventre se 
    não forem acompanhados do consumo suficiente de água.
    </p>';

    echo '<p class="fonteCorpo1">
    A deficiência de nutrientes também pode levar à desnutrição e à osteoporose (devido à falta de cálcio). Portanto, 
    é essencial que todos os nutrientes vitais estejam presentes no organismo e que, para isso, haja um consumo consciente 
    de alimentos vegetais e suplementação, caso médicos julgarem necessário (como o caso da vitamina B12).
    </p>';

    echo '<p class="fonteIcone">
    Como evitar tais perigos
    </p>';

    echo '<p class="fonteCorpo1">
    •	Antes de aderir ao veganismo, vá ao médico e faça exames para verificar a quantidade de nutrientes em seu organismo, 
        bem como índices glicêmicos, de gordura, pressão arterial, entre outros que apontam deficiências ou normalidade em sua saúde.
        <br><br>
    •	Procure um nutricionista. Este profissional será responsável por dar o aval para que você inicie no veganismo, se assim 
        for permitido a partir dos exames feitos. Além disso, com acompanhamento será mais fácil se adaptar a este estilo de vida 
        e também manter uma dieta saudável.
        <br><br>
    •	Beba, no mínimo, dois litros de água por dia - principalmente para evitar prisão de ventre e dores abdominais devido à 
        maior ingestão de alimentos com fibras.
        <br><br>
    •	Faça exames de sangue regularmente para acompanhar os níveis de nutrientes.
        <br><br>
    •	Reponha todos os nutrientes necessários, conforme prescrições médicas.
        <br><br>
    •	Atente-se à tabela nutricional dos alimentos a serem consumidos, especialmente à quantidade de calorias.
        <br><br>
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Há contraindicações para se tornar vegano?
    </h1>';

    echo '<p class="fonteIcone">
    Pessoas com anemia, bulimia e ortorexia
    </p>';

    echo '<p class="fonteCorpo1">
    Mariela Silveira, nutróloga do Kurotel - Centro Médico de Longevidade & Spa de Gramado, alerta que há um consenso de que 
    pessoas com diagnóstico de transtornos alimentares como Anorexia Nervosa, Bulimia Nervosa ou Ortorexia não devem ser 
    submetidas a nenhuma dieta radical, seja ela qual for - incluindo o veganismo. Por isso, a escolha da dieta neste caso 
    deve considerar, sim, a filosofia de vida do indivíduo, mas também sua saúde física e mental.
    </p>';

    echo '<p class="fonteCorpo1">
    Médica pediatra e pesquisadora da Universidade do Porto (Portugal), Sofia Barranha analisou o impacto da dieta de origem 
    vegetal em crianças. Por mais que ela tenha concluído que "desde que adequadamente planejadas, [as dietas veganas] sejam 
    seguras para todas as fases do ciclo de vida", ela ressalta que é necessário um acompanhamento profissional para reposição 
    de nutrientes para não haver desnutrição - como, por exemplo, de zinco e cálcio, que não são tão presentes em leites vegetais.
    </p>';

    echo '<p class="fonteIcone">
    Grávidas
    </p>';

    echo '<p class="fonteCorpo1">
    Especialista em nutrição gestacional e pediatria, Kátia Medeiros diz que há vantagens no veganismo para grávidas, como 
    melhorias na digestão e no funcionamento intestinal e prevenção da hipertensão e obesidade.
    </p>';

    echo '<p class="fonteCorpo1">
    Porém, é necessário um planejamento adequado de sua dieta. Caso não houver tal planejamento, gestantes que viram 
    veganas podem ter deficiências nutricionais - o que pode provocar problemas de saúde, como osteoporose, e até comprometer 
    o desenvolvimento do bebê. Devido a isso, Kátia Medeiros afirma que mulheres grávidas necessitam de atenção especial à 
    quantidade de ferro, zinco, B12 e vitamina D. Leia mais sobre cuidados e melhores alimentos para veganismo na gravidez, 
    segundo a especialista.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Quebra de tabu: não é preciso gastar muito para ser vegano
    </h1>';

    echo '<p class="fonteCorpo1">
    De acordo com pesquisa do Ibope em parceria com a Sociedade Vegetariana Brasileira (SVB), 55% dos entrevistados até 
    consumiriam mais produtos veganos se estes fossem mais baratos. E é justamente na contramão disso que vão os gêmeos 
    Eduardo e Leonardo dos Santos, criadores do perfil "Vegano Periférico" no Instagram: eles buscam espalhar a concepção 
    de que para se tornar e se manter vegano não é preciso investir muito dinheiro.
    </p>';

    echo '<p class="fonteCorpo1">
    Segundo o Eduardo, que assim como o irmão, vive na periferia de Campinas e não come nada de origem animal há mais de 
    dois anos, o objetivo do "Vegano Periférico" é quebrar a ideia de que o veganismo foi feito para ser caro. "A ideia de 
    que a parada é cara foi pregada pela mídia e propagada por muitas marcas, como sendo algo da classe privilegiada, porque 
    eles têm mais informação e não precisam ficar muito preocupados com grana", diz.
    </p>';

    echo '<p class="fonteCorpo1">
    A conta nutre mais de 150 mil seguidores com informações sobre como escolher produtos veganos e preparar pratos. 
    Para Leonardo, o perfil leva conhecimento para que os internautas reflitam e mudem seus comportamentos em prol dos animais.
    </p>';

    echo '<p class="fonteIcone">
    Preço médio mensal
    </p>';

    echo '<p class="fonteCorpo1">
    Os irmãos compram produtos industrializados veganos necessários no dia a dia, como arroz, feijão, macarrão, óleo, sal 
    e açúcar, para eles e para a mãe. Semanalmente, cada um adquire seus legumes, frutas e verduras. Leonardo revela que 
    gasta cerca de *R$ 360 por mês e "dá para comprar bastante coisa".
    </p>';

    echo '<p class="fonteCorpo1">
    Para Ricardo Laurino, presidente da Sociedade Vegetariana Brasileira, a visão encarecida do veganismo se deve a produtos 
    industrializados que vêm surgindo para atender aos veganos, que podem ser mais caros por serem lançamentos no mercado. 
    "Mas é como a alimentação tradicional: se quiser, pode gastar pouco ou gastar muito. No final, depende do que a pessoa 
    escolhe colocar no prato", afirma.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Dificuldades na transição vegana
    </h1>';

    echo '<p class="fonteIcone">
    Abandonar a alimentação animal
    </p>';

    echo '<p class="fonteCorpo1">
    Eduardo e Leonardo dos Santos, do perfil "Vegano Periférico", começaram a debater sobre a transição vegana juntos. 
    Mas foi Eduardo que virou a chave primeiro. O Leo, que não tinha o hábito de consumir frutas, verduras ou legumes, 
    teve muita dificuldade para aceitar refeições veganas.
    </p>';

    echo '<p class="fonteCorpo1">
    "Eu não conseguia mudar minha alimentação e achava difícil, meio que fechei os olhos para isso, ignorei por um tempo", 
    comenta. Seu irmão até chegou a desconfiar de que ele nunca viraria vegano. "Então, um dia eu decidi que não queria 
    mais consumir produtos de origem animal, não queria mais fechar os olhos, não queria mais ignorar".
    </p>';

    echo '<p class="fonteIcone">
    Jogo de cintura com a família e os amigos
    </p>';

    echo '<p class="fonteCorpo1">
    Por outro lado, para o irmão Eduardo, que já abria mão de produtos mais calóricos, a mudança na alimentação não foi 
    tão complicada. O preconceito de familiares foi o principal desafio, pois julgavam ser algo irreal e infantil.
    </p>';

    echo '<p class="fonteCorpo1">
    "Eu escutei muito minha mãe falando que "isso não é coisa de pobre, isso é pra rico, isso não é pra você". Minha 
    família chegou a falar que eu estava doente, porque emagreci realmente", comenta.
    </p>';

    echo '<p class="fonteCorpo1">
    Diante disso, ele fez exames, que mostraram resultados positivos. "Todos meus exames estavam perfeitos. A médica até 
    olhou pra mim e disse: Olha, seu ferro está até um pouco acima! Como podem falar que vegetarianos têm deficiência de ferro?!
    Seus exames estão excelentes!".
    </p>';

    echo '<p class="fonteCorpo1">
    Antes de aderir ao veganismo, Eduardo ressalta que seu colesterol estava ruim, "como de uma pessoa prestes a infartar" 
    e, após a transição, foi normalizado. "Isso foi um alívio para minha família, pois provei, com exames médicos, que eu estava 
    extremamente saudável".
    </p>';

    echo '<p class="fonteCorpo1">
    Após decidir que se tornaria vegano, ceder às provocações de colegas também foi uma dificuldade. Quando trabalhava como 
    vendedor, Eduardo comenta que por vezes seus amigos de trabalho compravam pizza e o estimulavam a comer algo que não 
    estava de acordo com sua dieta vegana. "Falavam "pô, Du, não vai comer? Um queijinho só". Ficavam tirando muita onda, 
    falando muito. Então eu tentava não consumir, mas pegava um pedacinho aqui e ali só para eu me sentir parte do grupo".
    </p>';

    echo '<p class="fonteIcone">
    Adquirir hábito de ler rótulos
    </p>';

    echo '<p class="fonteCorpo1">
    Du, como é popularmente chamado, disse que no começo de sua transição para o veganismo não tinha tanta informação 
    como existe hoje. Diante disso, era comum o consumo de massas que continham ingredientes de origem animal, como leite e ovo.
    </p>';

    echo '<p class="fonteCorpo1">
    Mas o cenário mudou. "Hoje a gente lê rótulo em mercado pra ver se o produto é testado em animais, procuramos pesquisar 
    sobre as marcas (se elas patrocinam rodeios, por exemplo)", completa Leo, que aconselha o hábito de leitura de rótulos 
    para quem deseja se tornar vegano. E isso não se aplica somente nos alimentos, mas também em roupas e cosméticos: "É uma 
    coisa muito mais abrangente. É muito mais do que só a comida".
    </p>';

    echo '<p class="fonteIcone">
    Pensar duas vezes no entretenimento
    </p>';

    echo '<p class="fonteCorpo1">
    Não é somente na alimentação que o veganismo se aplica - e isso pode ser um obstáculo para quem decide pela transição. 
    A coordenadora local da Sociedade Vegetariana Brasileira Maria Julia ressalta que, no entretenimento, a pessoa tem de 
    ter consciência sobre qualquer tipo de exploração de animais. Por isso, deixou de frequentar zoológicos, aquários, circos 
    e ambientes que usam carroças.
    </p>';

    echo '<br>';
    echo '<h1 class="fonteSubtitulo1">
    Quero virar vegano: por onde começo?
    </h1>';

    echo '<p class="fonteCorpo1">
    Procure um nutricionista: segundo o nutrólogo Bruno Takatsu, o passo principal é buscar acompanhamento com um nutricionista, 
    que irá elaborar um plano de equilíbrio dos macronutrientes - componentes da alimentação que são fundamentais para o organismo. 
    Um dos principais são as fontes de proteínas, já que os veganos têm a tendência de consumir mais carboidratos. Então, o 
    profissional terá que fazer uma distribuição que introduza na alimentação proteínas vegetais, por exemplo.
    </p>';

    echo '<p class="fonteCorpo1">
    Faça exames: é necessário acompanhar como seu corpo está em relação a todos os nutrientes vitais. Para isso, Bruno recomenda 
    que sejam realizados exames junto ao acompanhamento profissional para que seja identificada o tipo de suplementação a ser 
    feita. Afinal, a adesão ao veganismo geralmente acarreta em um desequilíbrio de algumas vitaminas e minerais, segundo o 
    nutrólogo. Portanto, será preciso inserir na dieta proteínas vegetais e alimentos com os nutrientes citados acima (B12, 
    ferro, vitamina A etc.). A nutróloga Mariela aconselha ainda a realização de exame de massas corporais, como o DEXA (Dual 
    Energ R-RA Absortometry) ou teste de bioimpedância para avaliar a quantidade de massa magra, gordurosa e óssea.
    </p>';

    echo '<p class="fonteCorpo1">
    Teste receitas: para a nutricionista Maria Julia, uma boa dica é testar receitas com novas opções, substituindo o que 
    gosta de comer por um ingrediente vegano e nutritivo. Ela cita como exemplo o tofu, por ser "prático e versátil"; grãos; 
    alimentos integrais; e frutas das quais você não tem hábito de consumir.
    </p>';

    echo '<p class="fonteCorpo1">
    Respeite sua adaptação: também é importante que o "novo vegano" respeite seu próprio tempo. Para o presidente da SVB, 
    isso é essencial, principalmente para quem deixa de consumir qualquer produto de origem animal da noite para o dia e 
    encontra mais dificuldades na transição.
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