<?php require_once ('../layout/cabecalho.php');?>
<title> Select Nature - Entre ou Cadastre-se</title>

<div class="w3-container w3-center"> 
    <br>
    <br>
    <br>
    <img src="../IMG/SN-LOGO.png" style="width: 37%">
</div>

<div class="w3-padding-16" style="margin-left: 365px; margin-right: 365px">
    <p class="w3-center fonteCorpo1">
        O seu portal de informações sobre restrições alimentares. Aqui você ficará por<br>
        dentro dos tipos de restrições, como intolerâncias, alergias e veganismo, além de ver<br>
        curiosidades e dicas de alimentação. Seja bem-vindo!
    </p>
    <hr style="width: 760px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-left"><br>
        
    <form class="w3-padding-16 w3-container w3-third" style="margin-left: 110px" action="../conexao/loginAction.php" method="POST">
        <div class="w3-section">
            <input class="fonteCorpo2 w3-input w3-border w3-margin-bottom w3-round-xxlarge w3-border" type="text" 
                placeholder="Login" name="txtLogin" required>
            <input class="fonteCorpo2 w3-input w3-border w3-margin-bottom w3-round-xxlarge w3-border" type="password" 
                placeholder="Senha" name="txtSenha" required>
        
            <button class="fonteBTN w3-button w3-block w3-teal w3-section w3-padding w3-round-xxlarge w3-border" 
                type="submit">Entrar</button>
        </div>
    </form>

    <form class="w3-padding-16  w3-container w3-third" action="criarConta.php" method="post">
        <div class="fonteCorpo3 w3-section w3-center">
            <p>Ainda não possui cadastro?</p>
            <p>Crie uma conta agora mesmo!</p>
            <p>É 100% gratuito.</p>
        
            <button class="fonteBTN w3-button w3-block w3-teal w3-section w3-padding w3-round-xxlarge w3-border"
                type="submit">Criar conta</button>
        </div>
    </form>
</div>
    
<?php require_once ('../layout/rodape.php');?>