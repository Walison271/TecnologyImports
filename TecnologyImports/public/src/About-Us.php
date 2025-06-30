<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós</title>
<!-- Layouts -->
    <link rel="stylesheet" href="styles/layouts/header.css">
    <link rel="stylesheet" href="styles/layouts/footer.css">
<!-- Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"> 
<!-- Css principal -->
    <link rel="stylesheet" href="styles/About-us.css">

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
             <a href="index.php"><p>Inicio</p></a></div>
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
    <main>
        <figure>
            <div class="Banner"><img src="assets/Img/Img-Images/Sobre nos.jpg" alt="Banner" width="100%"></div>
            <div class="Logo"><img src="assets/Img/Img-logo/logo_200x200Shadow.png" alt="" width="7%"></div>
        </figure>
        <section class="welcome">
            <h3>Bem-vindo à Tecnology Imports!</h3>
            <br>
            <p>Fundada em 2023, a Tecnology Imports nasceu com a missão de aproximar as últimas tendências tecnológicas do mercado global aos consumidores brasileiros. Somos apaixonados por inovação e acreditamos que a tecnologia de ponta deve ser acessível, confiável e prática para todos.</p>
        </section>
        <section class="section-history">
            <img src="assets/Img/Img-Images/history_sobrenos.jpg" alt="">
            <div align="right">
            <h3>Nossa História</h3>
            <br>
            <p>Tudo começou com a visão de criar uma empresa capaz de importar e distribuir produtos tecnológicos de alta qualidade, selecionando cuidadosamente gadgets, acessórios e dispositivos inovadores das maiores potências mundiais da tecnologia.
            Em pouco tempo, nos consolidamos como referência no setor, oferecendo não apenas produtos, mas também soluções completas que acompanham o ritmo acelerado da transformação digital.</p>
            </div>
        </section>
        <section class="section-we_do">
            <div align="left">
            <h3>O que fazemos</h3>
            <br>
            <p>Na Tecnology Imports, atuamos com foco em três pilares principais:</p>
            <br>
            <ul style="margin-left: 50px;">
                <li>Importação e distribuição de produtos tecnológicos de última geração.</li>
                <li>Consultoria especializada para empresas que desejam modernizar suas operações.</li>
                <li>Atendimento personalizado, buscando sempre a melhor experiência para nossos clientes.</li>
            </ul>
            <br>
            <p>Trabalhamos com marcas reconhecidas internacionalmente e garantimos que cada produto passe por um rigoroso controle de qualidade, assegurando excelência em cada entrega.</p>
            </div>
            <img src="assets/Img/Img-Images/sobre nos-oqfazemos.jpg" alt="">
        </section>
        <section align="center">
            <div class="Mission-Vision">
                <span>
                    <h3>Nossa Missão</h3><br>
                    <p>Levar até você as melhores soluções em tecnologia, com eficiência, segurança e transparência.</p>
                </span>
                <span>
                    <h3>Nossa Visão</h3><br>
                    <p>Ser reconhecida como uma das principais empresas de importação de tecnologia no Brasil, promovendo o acesso a inovações que transformam vidas e negócios.</p>
                </span>
            </div>
            <div style="padding-top: 10%;" >
                    <h3>Nossos Valores</h3>
                    <br>
                    <br>
                <ul style="list-style-type:none; display: flex;">
                    <li><b>Inovação:</b><br> Estamos sempre atentos às novas tendências do mercado.</li>
                    <li><b>Comprometimento:</b><br> Priorizamos a satisfação e a confiança dos nossos clientes.</li>
                    <li><b>Qualidade:</b><br> Selecionamos e entregamos apenas o que há de melhor.</li>
                    <li><b>Transparência:</b><br> Atuamos com ética e clareza em todas as etapas do processo.</li>
            </ul>
            </div>    

        </section>
    </div>



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