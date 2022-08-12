<?php
	include("dados.php");
	//var_dump($tutoriais);//utilizei para testar o conteúdo recebido
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
		
		<section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Faça seu pedido!</h1>
			</header>
			<?php
                $id = $_GET['id'];
                                
				foreach($marmitas as $key => $value){
                    if($value['id'] == $id){
			?>
			<article>
				
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>" align="left">
						<p>Detalhes: <?=$value['descricao'];?></p>
						<p>Tamanho: <?=$value['tamanho'];?></p>
						<p>Preço: <?=$value['preco'];?></p>

			</article>
			<?php
                    }
				}
			?>
			
		</section>


        <section class="main_tutorial">
			<header class="main_tutorial_header">
				<h1>Veja também outras opções:</h1>
				<p> </p>
			</header>

			<?php
				foreach($marmitas as $key => $value){
                    if($value['id'] != $id){
			?>
			<article>
				<h2><a href="pagina2.php?id=<?=$value['id'];?>"><?=$value['titulo'];?></a></h2>
				<img src=<?=$value['imagem'];?> title="<?=$value['title_img'];?>" alt="<?=$value['title_img'];?>">
	    	</article>	
			
			<?php
                    }
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
	<center>Direitos reservados a Raquel Barros Gomes Pereira RA: 21201143-5</center>
	</footer>
</body>
</html>