<?php session_start(); ?>
    <html>
    <head>
        <title> Buy Place </title>
        <link rel="stylesheet" href="assets/css/template.css" />
        
    </head>
    <body>
    <?php
$con=mysqli_connect("localhost","id13883813_root","Abcdef-123456","id13883813_buyplace");
$_SESSION['itens'];

?>
<center>
<img class="foto" src="assets/images/logo.png" width="180" height="180" border="0" />
</center>
        <div class="topo"></div>
        <div class="menu">
            <div class="menuint">
            <ul>
                <a href="template.php"><li>home</li></a>
                <a href="empresa.php"><li>empresa</li></a>
                   <a href="item.php?id=1"><li>Chinelos</li></a>
                <a href="item.php?id=2"><li>Camisas</li></a>
                <a href="item.php?id=3"><li>Bermudas</li></a>
                <a href="item.php?id=4"><li>Cuecas</li></a>
              

<a href="contato.php"><li>contato</li><a>
                </ul>
                <a href="carrinho.php">
                    <img class="foto" src="assets/images/carrinho.png" width="50" height="50" border="0" />
                <div class="carrinho">
                    Carrinho:<br/>

                    

                    <?php echo (isset($_SESSION['carrinho']))?count($_SESSION['carrinho']):'0'; ?> Itens
                    
                </div>
                </a>
            </div>
        </div>
        
        <div class="container">
            
        <h1>Empresa</h1> 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam rhoncus est a metus scelerisque, vitae
 mollis sapien faucibus. Nunc vitae justo vitae felis tristique finibus quis vitae odio. Interdum et malesuada
  fames ac ante ipsum primis in faucibus. Integer vehicula sollicitudin hendrerit. Donec tristique orci leo,
   in mattis massa malesuada ut. Sed nulla orci, ornare vel ultrices a, tristique id leo. Lorem ipsum dolor 
   sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra,
    per inceptos himenaeos. Nunc pulvinar aliquam magna, dignissim porttitor neque convallis at. Nam in 
    tincidunt nulla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos 
    himenaeos. Sed gravida magna a libero maximus sagittis. Sed mi augue, consectetur in malesuada et, 
    tempus id justo.<br></br>

In vitae porta arcu. Ut dictum orci augue, in malesuada diam aliquam in. Donec nec sollicitudin risus,
 ac rutrum mauris. Suspendisse nisl mauris, feugiat sed pellentesque at, rhoncus rhoncus arcu. In maximus
  volutpat luctus. Aliquam blandit urna ipsum, et eleifend dui laoreet viverra. Sed euismod neque eget neque
   suscipit, non ultrices diam venenatis. Proin eu commodo nunc. Donec sollicitudin mauris erat, ut pharetra
    erat vehicula sed. Vivamus mollis nulla mauris, at consectetur dui consectetur sit amet. Duis pulvinar
     feugiat molestie. In mattis sapien eu leo efficitur, vel placerat erat rhoncus. Pellentesque feugiat
      iaculis quam eu volutpat. Nulla facilisi.<br></br>

Nulla pellentesque elit augue, nec pharetra turpis malesuada quis. Nulla facilisi. Ut sit amet blandit mi,
 sed rhoncus velit. Vestibulum at libero feugiat, vulputate enim pharetra, lobortis nibh. Fusce rutrum orci
  et arcu viverra ultricies. Vivamus pharetra odio urna, vitae auctor mauris aliquet vel. In fringilla ornare
   neque ac facilisis. Maecenas viverra rhoncus suscipit. Sed lacinia nibh ut risus tincidunt egestas in ac
    magna. Praesent laoreet massa non nibh tincidunt, quis vulputate arcu malesuada. Suspendisse ut placerat
     elit. In blandit, est quis molestie dictum, mauris ante tristique sem, nec euismod lectus sem feugiat leo.<br></br>

                    
        </div>
        <div class="rodape"></div>


    </body>
</html>



<div style="clear:both"></div>

