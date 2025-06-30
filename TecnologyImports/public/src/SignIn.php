<?php
include('Server/conexao.php');
$error ='';
if(isset($_POST['email']) || isset($_POST['senha'])){
    
    if(strlen($_POST['email']) == 0){
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    } else {

        $email = $mysqli ->real_escape_string($_POST['email']);
        $senha = $mysqli ->real_escape_string($_POST['senha']);


        $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;
        
        if($quantidade == 1){

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['codigo'] = $usuario['codigo'];
            $_SESSION['nome'] = $usuario['nome'];
            header("location: painel.php");

        }else{ 
            $error = 'Falha ao logar! E-mail ou senha incorretos';
        }
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre na Conta</title>
    <link rel="stylesheet" href="styles/SignIn.css">
    <link rel="stylesheet" href="styles/componets/Buttons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

<link rel="icon" href="assets/Img/Img-logo/logo_200x200 1.png" type="image/x-icon">
<style>
    @font-face {
        font-family: montserrat;
        src: url(assets/fonts/fonts-family/Montserrat-VariableFont_wght.ttf);
    }
</style>     
</head>
<body>
    <header class="header">

        <div class="links">
            <div style="display: flex; justify-content: center; align-items: center;">
            <a href="SignUp.php">
            <ul>
                <li>Não Possui Conta? Faça seu Cadastro</li></a>
            </ul>

        </div>
            <ul style="display: flex;">
            <a href="index.php"><li>incio</li></a> <hr color="white">
            <a href="About-Us.php"><li>Sobre Nós</li></a> <hr color="white">
            <a href="contact.php"><li>Contato</li></a>
            </ul>
        </div>
    </header>
        <figure class="logo-main">
            <a href="index.html"><img src="assets/Img/Img-logo/logo_200x200_1-removebg-preview 1.png" alt="logo"></a>
        </figure>
    <main class="main">
                <section>
            <div class="Title">              
                <p>
                    Entre na sua conta<span><br>Tecnology</span>
                </p>
            </div>
        
        
            <div class="form"> 
                <form method="POST">
                <ul>
                <li class="item">
                    <label for="">E-mail</label>
                    <br>
                    <input value="" type="email" id="email" name="email" required>    
                </li>
                <li class="item">
                    <label for="password">Senha:</label>
                    <br>
                    <input type="password" id="password" name="senha" required>    
                </li>       
                </ul>
                <label>Esqueceu a senha? <?php echo $error?></label>
                <br>
                <br>
                
                <button class='button-login' value="Entrar" type="submit">Entrar</button>
            </form>    
        </div>
        </section> 

       

    </main>
    <footer class="footer">

                    <p>Siga as nossas redes</p>
            <ul>
                <li><a href="https://x.com/"><img src="assets/Img/Img-logo/X.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="assets/Img/Img-logo/Instagram.png" alt=""></a></li>
                <li><a href="https://facebook.com/"><img src="assets/Img/Img-logo/Facebook.png" alt=""></a></li>
                <li><a href="https://www.tiktok.com/"><img src="assets/Img/Img-logo/Tiktok.png" alt=""></a></li>
            </ul>
            
            <h6>Copyright © 2023-2024 TecnologyImports.com.br LTDA.</h6>
    </footer>
</body>
</html>