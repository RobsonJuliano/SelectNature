<nav class="w3-sidebar w3-center w3-teal w3-bar-block w3-border" style="width: 250px;">
        <br>
        <img src="../IMG/SN-LOGO.png" style="width: 100%">
        <br>
        <br>
        
    <?php
    $idUser = $_SESSION['logado'];
    
    require_once '../conexao/conexaoBD.php';
                        
        $sql = "SELECT * FROM usuario WHERE login = '".$idUser."'" ;
        $resultado = $conexao->query($sql);        
        
        if($resultado != null)
            foreach($resultado as $linha) {
        echo '<div class="container">';
        echo '<img src="../IMG_USUARIOS/'.$linha['imagem'].'" class="w3-round-large w3-border" style="width: 90px; height: 90px;">' ;
        echo '</div>';

        echo '<div class="w3-center">';
        echo '<p class="fonteNavBar w3-container">Olá '.$linha['login'].'.</p>';
        echo '</div>';
            }    
    ?>
    
    <hr style="width: 160px; margin-left: 25px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-center">

        <a href="../home/home.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Home</a>    
        <a href="../home/restricoes.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Restrições Alimentares</a>
        <a href="../home/cardapios.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Cardápios Nutritivos</a>
        <a href="../home/dicas.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Alternativas Alimentares</a>
        <a href="../home/curiosidades.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Curiosidades</a>
        
    <hr style="width: 160px; margin-left: 25px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-center">
   
        <a href="../publicacoes/minhasPaginas.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Minhas Páginas Salvas</a>
        <a href="../home/minhaConta.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Meu perfil</a>
        <a href="../conexao/logoutAction.php" class="fonteNavBar w3-button w3-round-xlarge w3-container w3-bar-item">Sair</a>

</nav>