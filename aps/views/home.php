<link rel="stylesheet" href="assets/css/template.css" />

<?php

$produtos=mysqli_num_rows(mysqli_query($con,"select * from produtos"));
$qunt=$produtos;
if ($produtos >= 8) {
	$produtos=8;
}
for ($i=1; $i <= $produtos; $i++) { 
	$randon=rand(1,$qunt);
	$dados=mysqli_fetch_array(mysqli_query($con,"select * from produtos where id = '$randon'"));
	$nome=$dados['nome'];
    $valor=$dados['preco'];
   
	$imagem=$dados['imagem'];
echo "
	<div class='produto'>


	<a href='carrinho.php?id=$randon'><p>$nome <br>R$ $valor</p><br>
	
	<img src='assets/images/$imagem' width='180' height='150' border='0'></a>

	</div>
	";
	


}
?>

<div style="clear:both"></div>

</div>



    
    