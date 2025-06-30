<?php 
if(!isset($_SESSION)){
    session_start();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tecnology Imports</title>

<!-- Layouts -->
<link rel="stylesheet" href="styles/layouts/footer.css">
<link rel="stylesheet" href="styles/layouts/header.css">
<link rel="stylesheet" href="styles/componets/Buttons.css">
<link rel="stylesheet" href="styles/layouts/sidebar.css">

<!-- Library -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">    

<!-- Css Principal -->
<link rel="stylesheet" href="styles/product.css">


<link rel="icon" href="assets/Img/Img-logo/logo_200x200 1.png" type="image/x-icon">

<style>
    @font-face {
        font-family: montserrat;
        src: url(assets/fonts/fonts-family/Montserrat-VariableFont_wght.ttf);
    }

    /* Sidebar de Carrinho */

</style>
</head>
<body>
<header>
    <h5 class="Header-Primary"><a href="">Informe seu cep</a> para ver o prazo de entrega</h5>

    <nav class="container-nav-home">
        <div class="icons">
            <img src="assets/Img/Img-icons/home_24dp_01AAFF_FILL0_wght400_GRAD0_opsz24.png" alt="">
             <a href="painel.php"><p>Inicio</p></a></div>

        <div class="search">
            <input class="search-bar" type="text"  name="search-bar" id="search" placeholder="Qual produto você está buscando?">
            <i class="bi bi-search search-icon"></i>
        </div>

        <div class="icons">
            <i class="bi bi-heart-fill"></i>
            <p>Favoritos</p>
        </div>

        <div class="icons">
            <i class="bi bi-cart-plus"></i>
            <p onclick="openCart()" >Carrinho</p>
        </div>

        <div class="icons">
            <i class="bi bi-person-circle"></i>
            <p align="center"><?php echo $_SESSION['nome'];?></p>
        </div>
        <div class="icons">
            <i class="bi bi-box-arrow-left"></i>    
            <a href="logout.php">Sair</a>
        </div>
    </nav>
</header>

<main class="main">
    <section class="product">
        <img src="assets/Img/Img-Images/Headset.jpg" alt="Produto">
    </section>
    <section class="product">
        <div>
            <h3>Headphone Fone de Ouvido Havit HV-H2002d</h3>
            <h4>R$165 em até <span style="color:#00C2FF;">5x de R$33 sem Juros</span></h4>
            <br>
            <h6>Color: Preto</h6>
        </div>
        <br>
        <div>
            <h6>O que você precisa saber sobre este produto</h6>
            <br>
            <ul>
                <li>Processador: Intel Celeron N4500</li>
                <li>Versão do sistema operacional: 11</li>
                <li>Edição do sistema operacional: Home</li>
                <li>Conexão Wi-Fi e bluetooth.</li>
            </ul>
        </div>
    </section>
    
    <section>
        <div class="frete">
            <div>
            <h1>R$165 <sup>25%off</sup></h1>
            <p>em até <span style="color:#01AAFF;">5X de R$33 sem juros</span></p>
            <br>
            <p>Informe seu cep para verificar disponibilidade</p>
            <br>
            <input type="text"  placeholder="Digite o CEP">
            <br>
            <a target="_blank" href="https://buscacepinter.correios.com.br/app/localidade_logradouro/index.php">Não sei meu cep</a>
            <br><br><br>
            <button class='button-cart-and-buy blue'>Comprar Agora</button>
            <button class='button-cart-and-buy lightgray add-to-cart'
                data-name="Headphone Havit HV-H2002d"
                data-img="assets/Img/Img-Images/Headset.jpg">
                Adicionar ao carrinho
            </button>
            </div>
        </div>
    </section>
    <section style="margin-top:5%;">
            <h1>Para você</h1>
            <nav class="Container-Card">
                <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/ps5.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/xbox.jpg" alt="Produto">
                       <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/joystick ps5.jpg" alt="Produto">
                       <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
    </section>
        <section style="margin-top:5%;">
            <h1>Venha Conferir</h1>
            <nav class="Container-Card">
                 <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/Keyboard.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/Monitor.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                
                <a href="">
                    <div>
                        <img src="assets/Img/Img-Images/Mouse.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
    </section>      
</main>

<!-- Sidebar do Carrinho -->
<div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
        <h2>Carrinho</h2>
        <button id="closeCart">&times;</button>
    </div>
    <ul id="cartItems"></ul>
    <div class="cart-footer">
        <button id="continueButton">Continuar</button>
    </div>
</div>

<!-- Overlay -->
<div id="overlay" class="overlay"></div>

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
        <section>
            <h5>Pagar com</h5>
            <ul class="img-align-footer">
                <li><img src="assets/Img/Img-logo/Mastercard.png" alt="Mastercard"></li>
                <li><img src="assets/Img/Img-logo/pix.png" alt="Pix"></li>
                <li><img src="assets/Img/Img-logo/Visa.png" alt="Visa"></li>
            </ul>
        </section>
        <section>
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
<script src="scripts/vendor/script.js" ></script>
</body>
</html>
