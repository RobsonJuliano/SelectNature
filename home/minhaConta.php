<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Minha conta</title>
<?php require_once ('../layout/navbar.php');?>

<?php
    $sql = "SELECT * FROM usuario WHERE login = '".$idUser."';" ;
    
    if($resultado != null)
        foreach($resultado as $linha) {
        echo '<div class="w3-display-middle w3-teal w3-round-xlarge w3-padding-16 w3-border">';
            echo '<div>';
                echo '<h1 class="fonteTitulo4 w3-center">Informações de cadastro</h1>';
            echo '</div>';

            echo '<div class="w3-third">';        
                echo '<a type="hidden" '.$linha['idusuario'].'></a>';
                echo '<img src="../IMG_USUARIOS/'.$linha['imagem'].'" class="w3-round-xlarge w3-border" 
                style="width: 250px; height: 250px; margin-left: 45px;">' ;
            echo '</div>';

            echo '<div class="w3-half" style="margin-left: 65px;">';        
                echo '<a class="fonteInput w3-margin w3-input w3-white w3-round-large">Nome: '.$linha['nome'].'</a>';
                echo '<a class="fonteInput w3-margin w3-input w3-white w3-round-large">E-mail: '.$linha['email'].'</a>';
                echo '<a class="fonteInput w3-margin w3-input w3-white w3-round-large">Telefone: '.$linha['telefone'].'</a>';
                echo '<a class="fonteInput w3-margin w3-input w3-white w3-round-large">Login: '.$linha['login'].'</a>';
            echo '</div>';

            echo '<div class="w3-third">';        
                echo '<a href="../minha_conta/atualizar.php?
                id='.$linha['idusuario'].'&imagem='.$linha['imagem'].'&nome='.$linha['nome'].'
                &email='.$linha['email'].'&telefone='.$linha['telefone'].'&login='.$linha['login'].'"><br>
                <button class="fonteBTN w3-button w3-block w3-purple w3-section w3-round-xxlarge w3-border" type="submit">
                Alterar dados</button></a>';

                echo '<a href="../minha_conta/alterarSenha.php?senha='.$linha['senha'].'">
                <button class="fonteBTN w3-button w3-block w3-purple w3-section w3-round-xxlarge w3-border" type="submit">
                Alterar senha</button></a>';
        
                echo '<a href="../minha_conta/excluir.php?
                id='.$linha['idusuario'].'&imagem='.$linha['imagem'].'&nome='.$linha['nome'].'
                &email='.$linha['email'].'&telefone='.$linha['telefone'].'&login='.$linha['login'].'&senha='.$linha['senha'].'">
                <button class="fonteBTN w3-button w3-block w3-red w3-section w3-round-xxlarge w3-border" type="submit">
                Excluir conta</button></a>';
            echo '</div>';
        echo '</div>';
    }
?>
<?php require_once ('../layout/rodape.php');?>