teste<?php 
    session_start();
    if(isset($_SESSION['user'])){
        $nome=$_SESSION['user'];
        
    }else{
        $nome='';
    }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Mania de Festa</title>
      <link rel="stylesheet" href="css/site.css">

</head>
<body>
                <!-- inicio menu -->
    <nav id="menu-horizontal">
        <p style="text-align: right;"><?php echo $nome; ?></p>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="produtos.php">Produtos</a></li>
                <li><a href="https://i.imgur.com/7FYjASC.jpg">Empresa</a></li>
                <li><a href="./user/login.php">Login / Logof</a></li>
                <li><a href="./user/carrinho.php">Carrinho</a></li>
                <li><a href="./painel/login.php">Painel</a></li>
            </ul>
    </nav>
    <!--  final menu -->

    <!--  inicio menu-2 -->
    <nav class="menu-2">
            <ul>
                <li><a href="https://i.imgur.com/7FYjASC.jpg">Balões</a></li>
                <li><a href="https://i.imgur.com/7FYjASC.jpg">Canecas</a></li>
                <li><a href="https://i.imgur.com/7FYjASC.jpg">Embalagens</a></li>
                <li><a href="#######">outros</a></li>
            </ul>
    </nav>
                <!--  final menu-2 -->

        <link rel="stylesheet" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Girassol&display=swap" rel="stylesheet">
    <main>

                <!--  slider carrossel inicio -->
                <div class="slider">
                    <link rel="stylesheet" href="css/slider.css">
                    <div class="slides">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">

                    <div class="slide first">
                        <img src="img/slider1.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider2.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider3.jpg" alt="">
                    </div>
                    <div class="slide">
                        <img src="img/slider4.jpg" alt="">
                    </div>

                    <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    </div>

                </div>

                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                </div>
                <!--  slider carrossel fim -->

                <div class="texto"><h1>Aqui sua festa é mais feliz :)</h1> <h2>confira abaixo</h2></div>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
               
                <!--  inicio produtos -->
                <section class="produtos">
                        <section class="produto">
                        <link rel="preconnect" href="https://fonts.gstatic.com">
                        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet" href="">

                            <a href="coracao.html">
                                <img src="img/coracao.png"></a></br><center><h1>Coração</h1></center>
                        </section>
                        
                        <section class="produto">
                            <a href="estrelas.html">
                                <img src="img/estrela.png"></a></br><center><h1>Estrela</h1></center>
                        </section>
                        
                        <section class="produto">
                            <a href="circulo.html">
                                <img src="img/bola.png"></a></br><center><h1>Circulo</h1></center>                  
                        </section>

                        <section class="produto">
                            <a href="###">
                                <img src="img/bolha.png"></a></br><center><h1>Bolha</h1></center>                  
                        </section>
                </section>         
    </main>
                <!--  fim produtos -->

                <h1 class="menugrid">menu grid abaixo</h1>  <!--ignorar-->
                <div class="painel-url">
                    <div class="item1">1</div>
                    <div class="item2">2</div>
                    <div class="item3">3</div>
                    <div class="item4">4</div>  
                    <div class="item5">5</div>
                    <div class="item6">6</div>
                  </div>


                <section>
                    <div class="painel-img"> <!--  painel img -->
                    </div>
                </section>

                

                <section class="rodape-info"> 
                    <section class="informacoes">
                        <b>INFORMAÇÕES</b>
                        <ul>
                            <a href="sobrenós">Sobre nós</a>
                        </ul>
                        <ul>
                            <a href="">Parceiros</a>
                        </ul>
                        <ul>
                            <a href="">sss</a>
                        </ul>
                        <ul>
                            <a href="">Sss</a>
                        </ul>
                    </section>

                    <section class="informacoes-2"> <!--ajustar section, classe selecionada mas sem tratamento css-->
                        <b>ATENDIMENTO</b>
                        <ul>
                            <a href="sobrenós">Sobre nós</a>
                        </ul>
                        <ul>
                            <a href="">Parceiros</a>
                        </ul>
                        <ul>
                            <a href=""></a>
                        </ul>
                        <ul>
                            <a href="">S</a>
                        </ul>
                    </section>
                </section>


                <footer class="rodape"> <h1>www.maniadefesta.com.br</h1></footer>
                <link rel="preconnect" href="https://fonts.gstatic.com">
                <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet">

                                <!--  final rodapé -->

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if(counter > 4){
        counter = 1;
      }
    }, 5000);
    </script>
</body>
</html> 