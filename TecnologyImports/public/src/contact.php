<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
<!-- Layouts -->
    <link rel="stylesheet" href="styles/layouts/footer.css">
    <link rel="stylesheet" href="styles/layouts/header.css">
<!-- Componets -->
    <link rel="stylesheet" href="styles/componets/Buttons.css">
<!-- Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> 
    
    <!-- Css Principal -->
    <link rel="stylesheet" href="styles/contact.css">

<link rel="icon" href="assets/Img/Img-logo/logo_200x200 1.png" type="image/x-icon">
<style>
        @font-face {
        font-family: montserrat;
        src: url(assets/fonts/fonts-family/Montserrat-VariableFont_wght.ttf);
    }
    
</style>
</head>
<body>
   <header>
    <h5 class="Header-Primary"><a href="">Informe seu cep</a> para ver o prazo de entrega</h5>    
<!-- Primeira Barra de Navegação -->
        <nav class="container-nav-home">
            <!-- Logo -->
            <a href="index.php">incio</a> <hr color="white">
            <!-- Barra de Pesquisa -->
            <div class="search">
                <input class="search-bar" type="text"  name="search-bar" id="search" placeholder="Qual produto você está buscando?">
                <img src="assets/Img/Img-icons/lupa 1.png" alt="" class="search-icon">
            </div>
            <!-- Acesso a Conta -->
            <div class="icons">
                <i class="bi bi-person-circle"></i>
                <p><a href="SignIn.php">Entre</a> ou <a href="SignUp.php">crie</a> sua conta</p>
            </div>
            <!-- Favoritos -->
            <div class="icons" onclick="alertPoupUp()" style="cursor:pointer;">
                <i class="bi bi-heart-fill"></i>
                <p>Favoritos</p></div>
            <!-- Carrinho de Compras -->

            <div class="icons" onclick="alertPoupUp()" style="cursor:pointer;">
                <i class="bi bi-cart-plus"></i>
                <p>carrinho</p>
            </div>
    </header>
  <main>
    <section class="Title-start">
    <h1>Entre em Contato Conosco</h1>
    <p>Preencha o formulário abaixo ou utilize as informações de contato.</p>
    </section>
    <div class="form">
      <section>
      <h2>Formulário de Contato</h2>
      <form action="#" method="post">
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">E-mail:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="tel" id="telefone" name="telefone"><br><br>

        <label for="mensagem">Mensagem:</label><br>
        <textarea id="mensagem" name="mensagem" rows="2" required></textarea><br><br>

        <button class="submit" type="submit">Enviar</button>
      </form>
    </section>

    <section class="info-Contact">
      <h2>Informações de Contato</h2>
      <br>
      <p><strong>Endereço:</strong> Rua Exemplo, 123 - Centro, Cidade, Estado</p>
      <br>
      <p><strong>Telefone:</strong> (11) 1234-5678</p>
      <br>
      <p><strong>Email:</strong> contato@exemplo.com</p>
    </section>
    </div>

    <section class="map">
      <h2>Nos encontre no mapa</h2>
        <iframe style="width:50vw; height:300px; border:0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d120048.59789749596!2d-44.046451038723404!3d-19.902535918350363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa690cacacf2c33%3A0x5b35795e3ad23997!2sBelo%20Horizonte%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1751301795075!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
  </main>

    <footer class="footer">
        <div>  
            <section>    
                <ul>
                    <li><h5>Atendimento ao cliente</h5></li>
                    <a href="About-Us.php"><li><h6>Sobre Nós</h6></li></a>
                    <a href="contact.php"><li><h6>Entre em Contato</h6></li></a>
                    <a href=""><li><h6>Termos & Condições</h6></li></a>    
                </ul>
            </section>
            
            <section>
                <ul>
                    <li><h5>Guia de Compra</h5></li>
                    <a href=""><li><h6>Crie uma conta</h6></li></a>
                    <a href=""><li><h6>Opções de Envio</h6></li></a>
                    <a href=""><li><h6>Proteção ao Consumidor</h6></li></a>    
                </ul>
            </section>

            <section>
                <ul>
                    <li><h5>Colaborações</h5></li>
                    <a href=""><li><h6>Parcerias</h6></li></a>
                    <a href=""><li><h6>Login do Vendedor</h6></li></a>
                    <a href=""><li><h6>Registro do Vendedor</h6></li></a>    
                </ul>
            </section>
        
            <section >
                    <h5>Pagar com</h5>
                    <ul class="img-align-footer">
                        <li><img src="assets/Img/Img-logo/Mastercard.png" alt="Mastercard"></li>
                        <li><img src="assets/Img/Img-logo/pix.png" alt="Pix"></li>
                        <li><img src="assets/Img/Img-logo/Visa.png" alt="Visa"></li>
                    </ul>
            </section>

            <section >
                <h5>Siga as nossas redes:</h5>
                    <ul class="img-align-footer">
                <li><a href="https://x.com/"><img src="assets/Img/Img-logo/X.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/"><img src="assets/Img/Img-logo/Instagram.png" alt=""></a></li>
                <li><a href="https://facebook.com/"><img src="assets/Img/Img-logo/Facebook.png" alt=""></a></li>
                <li><a href="https://www.tiktok.com/"><img src="assets/Img/Img-logo/Tiktok.png" alt=""></a></li>
                    </ul>
            </section>
            
        </div>
            <span>
                <h6>Copyright © 2023-2024 TecnologyImports.com.br LTDA.</h6>
            </span>    
        
    </footer>
</body>
</html>
