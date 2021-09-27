<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Atualizar dados</title>
<?php require_once ('../layout/navbar.php');?>

<script>
    function previewImagem() {
        var imagem = document.querySelector('input[name=fileImagem]').files[0];
        var preview = document.querySelector('img[name=imagem]');
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        }

        if (imagem) {
            reader.readAsDataURL (imagem) ;
        } else {
            preview.src = "";
        }
    }
</script>

<div class="w3-display-middle w3-teal w3-round-xlarge w3-padding-16 w3-border" style="width: 768px">        
    <form action="../minha_conta/atualizarAction.php" class="w3-container" method="POST" enctype="multipart/form-data">
    <div>
    <h1 class="fonteTitulo4 w3-center">Atualizar dados cadastrados</h1>
    </div>
        
    <div class="w3-third">
        <input name="txtID" type="hidden" value="<?php echo $_GET['id']?>">
        <input name="imagem" type="hidden" value="<?php echo $_GET['imagem']?>">
        
        
        <?php
            $idUser = $_SESSION['logado'];                
            $sql = "SELECT * FROM usuario WHERE login = '".$idUser."';" ;
            if($resultado != null)
            foreach($resultado as $linha) {
                
                echo '<div class="third">';
                echo '<br>';
                echo '<img src="../IMG_USUARIOS/'.$linha['imagem'].'" name="imagem" class="w3-round-xlarge w3-border" 
                style="width: 250px; height: 250px; margin-left: 30px;">' ;
                echo '</div>';
            }
            echo '<br>';
            echo '<label class="fonteBco" style="margin-left: 30px;">Atualizar foto do perfil</label>';
            echo '<input name="fileImagem" id="imagem" onChange="previewImagem();" 
            class="fonteBco w3-input" style="margin-left: 30px;" type="FILE">';
        ?>
        </div>
        
        <div class="w3-half" style="margin-left: 80px; width: 378px;">
        <label class="fonteBco w3-margin">Alterar nome:</label>
        <input name="txtNome" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
        value="<?php echo $_GET['nome']?>">
        
        <label class="fonteBco w3-margin">Alterar e-mail:</label>
        <input name="txtEmail" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
        value="<?php echo $_GET['email']?>">
        
        <label class="fonteBco w3-margin">Alterar telefone:</label>
        <input name="txtTelefone" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
        value="<?php echo $_GET['telefone']?>">

        <label class="fonteBco w3-margin">Alterar login:</label>
        <input name="txtLogin" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
        value="<?php echo $_GET['login']?>"><br>
        
        <button class="fonteBTN w3-button w3-block w3-purple w3-round-xxlarge w3-border" type="submit" style="width: 200px">
        Atualizar perfil</button>
        </div>
    </form>
    
    <form action="../home/minhaConta.php" method="POST">
        <button class="fonteBTN w3-button w3-block w3-red w3-section w3-round-xxlarge w3-border" type="submit"
        style="width: 200px; margin-left: 340px;">Cancelar</button>
    </form>    
</div>


<?php require_once ('../layout/rodape.php');?>