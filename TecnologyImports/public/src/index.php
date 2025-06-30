<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <title>Tecnology Imports</title>
    
<!-- Layouts -->
    <link rel="stylesheet" href="styles/layouts/footer.css">
    <link rel="stylesheet" href="styles/layouts/header.css">
    <link rel="stylesheet" href="styles/layouts/aside-cart.css">

<!-- Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> 
    
    <!-- Css Principal -->
    <link rel="stylesheet" href="styles/style.css">


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
            <figure class="logo"><img src="assets/Img/Img-logo/logo_200x200 1.png" alt="Logo" width="100%"></figure>
            <!-- Barra de Pesquisa -->
            <div class="search">
                <input class="search-bar" type="text"  name="search-bar" id="search" placeholder="Qual produto você está buscando?">
                <i class="bi bi-search search-icon"></i>
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
            <!-- Banner -->
            <section>
                <img src="assets/Img/Img-Banner/Banner-page1 1.png" alt="Banner" width="100%">
            </section>
    <nav>
        <ul class="container-nav-page">
            <a href=""><li>Computadores</li></a> <hr>
            <a href=""><li>Notebooks</li></a> <hr>
            <a href=""><li>Headsets e HeadPhones</li></a> <hr>
            <a href=""><li>Acessórios</li></a>
        </ul>
    </nav>
    <main class="main">
        <h1>
            Ofertas do dia
        </h1>
            <nav class="Container-Card">
                <a href="" onclick="alertPoupUp()">
                    <div id="add-product">
                        <img src="assets/Img/Img-Images/Headset.jpg" alt="Produto">            
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>  
                </a>
                
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/Clocks.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/Keyboard.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/Monitor.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/Mouse.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
            </nav>
            
                <h1>Venha Conferir</h1>
            <nav>
                <div class="rectangle-card">
                    <section class="card-body">   
                    <ul>
                        <li><h6>Entrega em até 48 Horas</h6></li>
                        <li><h4>Ofertas Incriveis</h4></li>
                        <li>

                            <button type="button">
                        Ver Mais
                        </button></li>
                    </ul>
                        <img src="assets/Img/Img-Images/Group 10.jpg" alt="campaign">
               
                     </section>
                    

                    <section class="card-body">
                        <ul>
                            <li><h6>As melhores opções com 20% off</h6></li>
                           <li><h4>PARA VIAJAR NO <br> MUNDO DA  MUSICA</h4></li>
                           <li>
                                <button type="button">
                                    Ver Mais
                                </button></li>
                        </ul>
                            <img src="assets/Img/Img-Images/pexels-photo-3756858 1.jpg" alt="campaign">
                    </section>
                        
                </div>
            </nav>

            <h1>Planos a partir de R$15,99</h1>
                
    <section class="card-element">
        <span>
            <h5>Assine o Pano Tecnology e receba descontos exclusivos</h5>
            <p>R$15<sub>99</sub></p>
        </span>               
        <div class="highlights">
            <div>
                <img src="assets/Img/img-highlight/Icone-Caminhao-de-Entrega 1.png" alt="Frete">Frete grátis em diversos produtos
            </div>
                                
            <div>
                <img src="assets/Img/img-highlight/download 1.png" alt="Netflix">Desconto em 25% da netflix por 6 meses
            </div>
                                
            <div>
                <img src="assets/Img/img-highlight/download 2.png" alt="spotify">3 Meses de spotify grátis
            </div>
        </div>
    </section>
                        
            
            <h1>Para você</h1>

            <nav class="Container-Card">
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/ps5.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/xbox.jpg" alt="Produto">
                       <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/joystick ps5.jpg" alt="Produto">
                       <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                    
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/joystick xbox.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
                
                <a href="" onclick="alertPoupUp()">
                    <div>
                        <img src="assets/Img/Img-Images/notebook.jpg" alt="Produto">
                        <h6>Texto do produto</h6>
                        <p>R$00.00 e até 0x de R$00 sem Juros</p>
                    </div>
                </a>
            </nav>
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
    <script>
        function alertPoupUp(){
            alert('Faça Login para acessar');
        }
    </script>
  </body>
</html>