<?php require_once ('../layout/cabecalho.php');?>
<?php require_once ('../conexao/verificarAcesso.php');?>
<title> Select Nature  - Atualizar Cadastro</title>
<?php require_once ('../layout/layout.php');?>
    
<div class="w3-padding-16" style="margin-left: 530px">
<hr style="width: 440px;" class="w3-black w3-round-xxlarge w3-border w3-container w3-left">
</div>

<div class="w3-padding w3-third w3-center w3-display-middle" >
    <?php
        require_once '../conexao/conexaoBD.php';
        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTelefone'];
        $login = $_POST['txtLogin'];

        $name = $_FILES['fileImagem']['name'];
        $temp = $_FILES['fileImagem']['tmp_name'];

        $nome = preg_replace('/[^[:alnum:] ]/', '', $nome);
        $email = preg_replace('/[^[:alnum:]_.-@]/', '', $email);
        $telefone = preg_replace('/[^[:alnum:] ()-]/', '', $telefone);
        $login = preg_replace('/[^[:alnum:] ]/', '', $login);
        
        $sql = "UPDATE usuario SET 
        nome = '$nome', email = '$email', telefone ='$telefone', login ='$login', imagem ='$name'
        WHERE idusuario = ". $_POST['txtID']." ";

        if ($conexao->query($sql) === TRUE) {
            echo '
            <a href="../home/minhaConta.php">
            <br><br><br><br><br><br>
            <h1 class="w3-button w3-teal w3-round-xlarge w3-border w3-padding-16" style="font-size: 1.8em; font-family: Consolas;">
            Dados alterados com sucesso! </h1></a>';
            $id = mysqli_insert_id($conexao);
        } else {
            echo '
            <a href="../home/minhaConta.php">
            <br><br><br><br><br><br>
            <h1 class="w3-button w3-red w3-round-xlarge w3-border w3-padding-16" style="font-size: 1.8em; font-family: Consolas; width: 200px;">
            ERRO! </h1></a>';
        }
        array_map('unlink', glob("../IMG_USUARIOS/'.$name")) ;
        move_uploaded_file($temp , "../IMG_USUARIOS/".$name);
        $conexao->close();
    ?>
</div>

<?php require_once ('../layout/rodape.php');?>