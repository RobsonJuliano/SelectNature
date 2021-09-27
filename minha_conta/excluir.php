<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Excluir Cadastro</title>
<?php require_once ('../layout/navbar.php');?>
<?php require_once ('../layout/layout.php');?>
    
<br><br>
<div class="w3-padding-16 w3-display-middle w3-teal w3-container w3-round-xlarge w3-border" style="width: 650px;">
    <h1 class="w3-center" style="font-family: 'Gabriola'; font-size: 2.8em;">
    Deseja realmente excluir a sua conta?</h1>

    <div class="w3-center">
        <form action="../minha_conta/excluirAction.php" method='POST'>
            <input name="txtID" type="hidden" value="<?php echo $_GET['id']?>">
            <input name="txtNome" type="hidden" value="<?php echo $_GET['nome']?>">
            <input name="imagem" type="hidden" value="<?php echo $_GET['imagem']?>">
            <input name="txtEmail" type="hidden" value="<?php echo $_GET['email']?>">
            <input name="txtTelefone" type="hidden" value="<?php echo $_GET['telefone']?>">
            <input name="txtLogin" type="hidden" value="<?php echo $_GET['login']?>">
            <input name="txtSenha" type="hidden" value="<?php echo $_GET['senha']?>">
    
            <button class="fonteBTN w3-button w3-block w3-purple w3-section w3-round-xxlarge w3-border" 
            style="width: 500px; margin-left: 60px" type="submit">Sim, desejo excluir permanentemente a minha conta.</button>
        </form>
    </div>
    <div class="w3-center" style="margin-left: 215px">
        <form action="../home/minhaConta.php">
            <button class="fonteBTN w3-button w3-block w3-red w3-section w3-round-xxlarge w3-border" 
            style="width: 170px;">Cancelar!</button>
        </form>
    </div>
</div>

<?php require_once ('../layout/rodape.php');?>