<?php
	include("dados.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
	<header> 
		<nav>
			<ul>
				<li><a href="#" title="Home" alt="Home">Home</a></li>
				<li><a href="#" title="Cardápio" alt="Cardápio">Cardápio</a></li>
				<li><a href="#" title="Sobre nós" alt="Sobre nós">Sobre nós</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		<div class="main_cta">
            <article class="main_cta_content">
                <div class="main_cta_content_spacer">
                    <header>
                        <h1>Aqui você encontra deliciosas marmitas, preparadas por Dona Rita com muito carinho.</h1>
                    </header>
                    <p> Confira nossas opções!</p>
                    <p><a href="#" class="btn">Saiba Mais</a></p>
                </div>
            </article>
        </div>
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Faça seu pedido!</h1>
				<p> </p>
			</header>
			<?php
				foreach($marmitas as $key => $value){
			?>
			<article>
				<a href="pagina2.php?id=<?=$value['id'];?>"><img src=<?=$value['imagem'];?>></a>
				<h2><?=$value['titulo'];?></h2>
				<p><?=substr($value['descricao'], 0, 50);?>...</p>
			</article>
			<?php
				}
			?>
			
		</section>
		<!--suport -->
        <article class="main_suport">
            <div class="main_suport_content">
                <header>
                    <h1>Faça seu pedido agora mesmo!</h1>
                    <p>Contato: (55) 5555-5555</p>
                    <p>WhatsApp: (55) 9999-9999 </p>
                </header>
            </div>
        </article>
        <!--3ª dobra-->
	</main>

	<footer>
	<!-- preparar o footer -->
	<center>Direitos reservados a Raquel Barros Gomes Pereira RA: 21201143-5</center>
	</footer>
</body>
</html>
