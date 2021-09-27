<?php require_once ('../layout/cabecalho.php');?>
<title> Select Nature  - Criar conta</title>
<?php require_once ('../layout/layout.php');?>

<script>
    function previewImagem() {
        var imagem = document.querySelector('input[name=imagem]').files[0];
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


<div class="w3-display-middle w3-teal w3-round-xlarge" style="width: 768px">        

    <div>
    <h1 class="fonteTitulo4 w3-center">Cadastre-se agora mesmo!</h1>
    </div>

    <form class="w3-container" action="../conexao/cadastroAction.php" method="POST" enctype="multipart/form-data">    
    <div class="w3-third">
        <div class="third">
            <br>
            <img name="imagem" class="w3-round-xlarge"style="width: 250px; height: 250px; margin-left: 30px;">
                <br><br>
                <label class="fonteBco" style="margin-left: 30px;">Inserir imagem</label>
                <input name="imagem" id="imagem" onChange="previewImagem();" class="fonteBco w3-input" style="margin-left: 30px;" type="FILE">
        </div>
    </div>
                        
    <div class="w3-half" style="margin-left: 80px;">
        <label class="fonteBco w3-margin">Nome:</label>
        <input class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" type="text" name="txtNome" required>
    
        <label class="fonteBco w3-margin">Email:</label>
        <input class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" type="text" name="txtEmail" required>

        <label class="fonteBco w3-margin">Telefone:</label>
        <input class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" type="text" name="txtTelefone" required>

        <label class="fonteBco w3-margin">Crie um Login</label>
        <input class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" type="text" name="txtLogin" required>

        <label class="fonteBco w3-margin">Crie uma Senha</label>
        <input class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" type="password" 
        minlength="8" maxlength="20" name="txtSenha" required>
        
        <button class="fonteBTN w3-button w3-block w3-purple w3-round-xxlarge w3-border" type="submit" style="width: 200px">
        Criar conta</button>
    </div>
    </form>
    
    <form action="../principal/index.php" method="POST">
        <button class="fonteBTN w3-button w3-block w3-red w3-section w3-round-xxlarge w3-border" type="submit"
        style="width: 200px; margin-left: 340px;">Cancelar</button>
    </form>

    
</div>

<?php require_once ('../layout/rodape.php');?>