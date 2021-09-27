<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Atualizar dados</title>
<?php require_once ('../layout/navbar.php');?>


<div class="w3-display-middle w3-teal w3-round-xlarge w3-padding-32 w3-border" style="width: 450px">        
    <form action="../minha_conta/alterarSenhaAction.php" class="w3-container" method="POST">
        <div>
            <h1 class="fonteTitulo4 w3-center">Alterar Senha</h1>
        </div>
                
        <div class="w3-margin">
            <label class="fonteBco w3-margin">Digite a sua senha atual:</label>
            <input name="txtSenhaAtual" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
            type="password" minlength="8" maxlength="20">
        
            <label class="fonteBco w3-margin">Digite sua nova senha:</label>
            <input name="txtNovaSenha" class="fonteInput w3-input w3-border w3-margin-bottom w3-round-large w3-border" 
            type="password" minlength="8" maxlength="20"><br>
        
            <button class="fonteBTN w3-button w3-block w3-purple w3-round-xxlarge w3-border" type="submit" style="width: 190px">
            Alterar senha</button>
        </div>
    </form>
    
    <form action="../home/minhaConta.php" method="POST">
        <button class="fonteBTN w3-button w3-block w3-red w3-round-xxlarge w3-border" type="submit"
        style="width: 190px; margin-left: 30px;">Cancelar</button>
    </form>    
</div>

<?php require_once ('../layout/rodape.php');?>        