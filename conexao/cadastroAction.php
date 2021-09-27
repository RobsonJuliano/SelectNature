<?php require_once ('../layout/cabecalho.php');?>
<title> Select Nature  - Bem-Vindo</title>
<?php require_once ('../layout/layout.php');?>

<div class="w3-padding w3-content w3-text-grey w3-third w3-center w3-display-middle">
    <?php
        session_start();
        require_once '../conexao/conexaoBD.php';

        $nome = $_POST['txtNome'];
        $email = $_POST['txtEmail'];
        $telefone = $_POST['txtTelefone'];
        $login = $_POST['txtLogin'];
        $senha = md5($_POST['txtSenha']);

        $name = $_FILES['imagem']['name'];
        $temp = $_FILES['imagem']['tmp_name'];

        $nome = preg_replace('/[^[:alnum:] ]/', '', $nome);
        $email = preg_replace('/[^[:alnum:]_.-@]/', '', $email);
        $telefone = preg_replace('/[^[:alnum:] ()-]/', '', $telefone);
        $login = preg_replace('/[^[:alnum:] ]/', '', $login);
        $senha = preg_replace('/[^[:alnum:]_.-]/', '', $senha);

        $consulta = "SELECT * FROM usuario WHERE login = '$login' " ;
        $resultado = $conexao->query($consulta);
        if (mysqli_num_rows($resultado) > 0) { 

            echo '<a href="../principal/criarConta.php">
            <h1 class="w3-button w3-round-large w3-red w3-display-middle w3-padding-16 w3-border"
            style="font-size: 1.7em; font-family: Consolas;">Este login já está em uso.<br>Escolha um outro login.</h1></a>';

        } else {

        $sql = "INSERT INTO usuario (nome, email, telefone, login, senha , imagem)
        VALUES ('$nome', '$email', '$telefone', '$login', '$senha', '$name')";

        if ($conexao->query($sql) === TRUE) {
            echo '<a href="../principal/index.php">
            <h1 class="w3-button w3-round-large w3-teal w3-display-middle w3-padding-16 w3-border"
            style="font-size: 1.7em; font-family: Consolas;">Cadastro realizado com sucesso! </h1></a>';
        } else {
            echo '<a href="../principal/index.php">
            <h1 class="w3-button w3-round-large w3-red w3-display-middle w3-padding-16 w3-border"
            style="font-size: 1.7em; font-family: Consolas;">Erro ao realizar o cadastro! </h1></a>';
        }
    } 
        $conexao->close();
        move_uploaded_file($temp , "../IMG_USUARIOS/".$name);
    ?>
</div>

<?php require_once ('../layout/rodape.php');?>