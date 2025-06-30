<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entre na Conta</title>
    <link rel="stylesheet" href="styles/SignUp.css">

<link rel="icon" href="assets/Img/Img-logo/logo_200x200 1.png" type="image/x-icon">
<style>
    @import url(login.css);
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
            <a href="SignIn.php">
            <ul>
                <li>Fazer Login</li></a>
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
            <a href="index.php"><img src="assets/Img/Img-logo/logo_200x200_1-removebg-preview 1.png" alt="logo"></a>
        </figure>
    <main class="main">
        <section class="Title-Primary">              
                <p>
                    Crie sua conta <br><span>Tecnology</span>
                </p>
            </section>
        
        <section class="form">
            <form class='Form-create' method="POST" id="registerForm">
                <ul>
                
                <li class="item">
                    <label for="">Nome</label>
                    <br>
                    <input value="" type="text" id="text" name="nome" required>
                </li>
                
                <li class="item">
                    <label for="">Data de Nascimento:</label>
                    <br>
                    <input value="" type="date" id="date" name="nascimento" required>
                </li>  
                </li>
                
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
                
                <li class="item">
                    <label for="confirmPassword">Cofirmar Senha:</label>
                    <br>
                    <input type="password" id="confirmPassword" required>    
                </li>

                </ul>
                
                <p id="message"></p>
                
                <input type="checkbox">
                
                <label for="">Aceito receber comunicação de marketing da TecnologyImports</label>
                <br>
                <br>
                <input type="checkbox">
                <label for="">Estou ciente e concordo com os termos e condições <br>de políticas de privacidade da TecnologyImports.</label>
                <br>
                <br>
                
                <button value="Entrar" type="submit">Criar conta</button>
            </form>
            <?php
                include ('Server/conexao.php');
                
                if( 
                    isset($_POST['nome']) && isset($_POST['nascimento']) && isset($_POST['email']) && isset($_POST['senha'])

                ){

                $nome = $mysqli ->real_escape_string($_POST['nome']);
                $nascimento = $mysqli ->real_escape_string($_POST['nascimento']);
                $email = $mysqli ->real_escape_string($_POST['email']);
                $senha = $_POST['senha'];


                $inserir = $mysqli->query("INSERT INTO usuário (nome,nascimento, email, senha) VALUES ('$nome', '$nascimento', '$email', '$senha')");
                }
                
                if(
                    isset($_POST['nome']) && isset($_POST['nascimento']) && isset($_POST['email']) && isset($_POST['senha'])
                  
                ){
                
                $sql_code = "SELECT * FROM usuário WHERE email = '$email' AND senha = '$senha'";
                $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                $quantidade = $sql_query->num_rows;

                if($quantidade == 1) {

                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)){
                session_start();
                }
                $_SESSION['codigo'] = $usuario['codigo'];
                $_SESSION['nome'] = $usuario['nome'];
                header("location: painel.php");
                } 
                }


?>
        </section2>
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