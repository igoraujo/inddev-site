<?php  
	$url = $_SERVER["HTTP_HOST"];
	$param = $_GET['p'];

	if($param!= NULL){
		if($param === 'success'){
			echo "<script>alert('E-mail enviado com sucesso!!! Muito obrigado pelo contato');
			window.location.href = '#sendmail';</script>";

		} else {
			echo "<script>alert('Houve um erro e seu e-mail não foi enviado! Tente novamente mais tarde!')
			window.location.href = '#sendmail';</script>";
		}
	}
?>

<!DOCTYPE HTML>
<html>

<head>
	<title>Ind Develop</title>
	<link rel="shortcut icon" type="image/png" href="content/images/logo.png"/>
	<meta charset="utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="content/assets/css/main.css" />
	<link rel="stylesheet" href="content/assets/css/style.css" />
</head>

<body class="is-preload">

	<div class="container-master">

		<!-- Menu -->
		<!-- <div>
			<nav id="menu">
				<ul id="nav">
					<li class="toggle">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</li>
					<li><a href="#">HOME</a></li>
					<li><a href="#apps">APPS</a></li>
					<li><a href="">BLOG</a></li>
					<li><a href="#contato">CONTATO</a></li>
				</ul>
			</nav>
		</div> -->
		<!-- Header -->
		<div id="header">
			<!-- <span class="logo icon fa-paper-plane-o"></span> -->
			<div>
				<img src="content/images/logo.png" />
			</div>
			<h1>Indi Developer</h1>
			<p>Uma equipe de desenvolvimento independente, desenvolvendo em uma grande variedade de plataformas. Resultando em flexibilidade e desempenho. Buscamos as melhores soluções com a maior eficiência.</p> <p> Desenvolvemos aplicativos, sites, aplicações web, banco de dados, software, sistemas personalizados e jogos. </p>				
			
		</div>

		<!-- Main -->
		<div id="main">

			<header  id="apps" class="major container medium">
				<h2>Apps</h2>				
					<p>Tellus erat mauris ipsum fermentum<br />
					etiam vivamus nunc nibh morbi.</p>
					
			</header>

			<div class="box alt container">
				<section class="feature left">
					<a href="https://play.google.com/store/apps/details?id=com.indi.devbr.calculotrabalhista" class="image icon fa-mobile"><img src="content/images/trabalhista.png" alt="" /></a>
					<div class="content">
							<a href="https://play.google.com/store/apps/details?id=com.indi.devbr.calculotrabalhista"><h3>Cálculo Trabalhista</h3></a>
						<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris
							ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
					</div>
				</section>
				<section class="feature right">
					<a href="https://play.google.com/store/apps/details?id=com.devbr.indi.folhadepagamento" class="image icon fa-mobile"><img src="content/images/folha.png" alt="" /></a>
					<div class="content">
					<a href="https://play.google.com/store/apps/details?id=com.devbr.indi.folhadepagamento"><h3>Foha de Pagamento</h3></a>
						<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris
							ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
					</div>
				</section>
				<section class="feature left">
					<a href="#" class="image icon fa-mobile"><img src="content/images/pic03.jpg" alt="" /></a>
					<div class="content">
						<h3>The Third Thing</h3>
						<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris
							ipsum fermentum etiam vivamus eget. Nunc nibh morbi quis fusce lacus.</p>
					</div>
				</section>
			</div>

			<!--
				<div class="box container">
					<header>
						<h2>A lot of generic stuff</h2>
					</header>
					<section>
						<header>
							<h3>Paragraph</h3>
							<p>This is the subtitle for this particular heading</p>
						</header>
						<p>Phasellus nisl nisl, varius id <sup>porttitor sed pellentesque</sup> ac orci. Pellentesque
						habitant <strong>strong</strong> tristique <b>bold</b> et netus <i>italic</i> malesuada <em>emphasized</em> ac turpis egestas. Morbi
						leo suscipit ut. Praesent <sub>id turpis vitae</sub> turpis pretium ultricies. Vestibulum sit
						amet risus elit.</p>
					</section>
					<section>
						<header>
							<h3>Blockquote</h3>
						</header>
						<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget.
						tempus euismod. Vestibulum ante ipsum primis in faucibus.</blockquote>
					</section>
					<section>
						<header>
							<h3>Divider</h3>
						</header>
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
						<hr />
						<p>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra
						ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel. Praesent nec orci
						facilisis leo magna. Cras sit amet urna eros, id egestas urna. Quisque aliquam
						tempus euismod. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
						posuere cubilia.</p>
					</section>
					<section>
						<header>
							<h3>Unordered List</h3>
						</header>
						<ul class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ul>
					</section>
					<section>
						<header>
							<h3>Ordered List</h3>
						</header>
						<ol class="default">
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
							<li>Donec consectetur vestibulum dolor et pulvinar. Etiam vel felis enim, at viverra ligula. Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</li>
						</ol>
					</section>
					<section>
						<header>
							<h3>Table</h3>
						</header>
						<div class="table-wrapper">
							<table class="default">
								<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Description</th>
										<th>Price</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
									<tr>
										<td>45815</td>
										<td>Something</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>29.99</td>
									</tr>
									<tr>
										<td>24524</td>
										<td>Nothing</td>
										<td>Ut porttitor sagittis lorem, quis eleifend nisi ornare vel.</td>
										<td>19.99</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="3"></td>
										<td>100.00</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</section>
					<section>
						<header>
							<h3>Form</h3>
						</header>
						<form method="post" action="#">
							<div class="row">
								<div class="col-6 col-12-mobilep">
									<label for="name">Name</label>
									<input class="text" type="text" name="name" id="name" value="" placeholder="John Doe" />
								</div>
								<div class="col-6 col-12-mobilep">
									<label for="email">Email</label>
									<input class="text" type="text" name="email" id="email" value="" placeholder="johndoe@domain.tld" />
								</div>
								<div class="col-12">
									<label for="subject">Subject</label>
									<input class="text" type="text" name="subject" id="subject" value="" placeholder="Enter your subject" />
								</div>
								<div class="col-12">
									<label for="subject">Message</label>
									<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
								</div>
								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="Send" /></li>
										<li><input type="reset" value="Reset" class="alt" /></li>
									</ul>
								</div>
							</div>
						</form>
					</section>
				</div>
				-->

			<footer class="major container medium">
				<h3>Get shady with science</h3>
				<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor orci penatibus. Tellus erat mauris
					ipsum fermentum etiam vivamus.</p>
				<ul class="actions special">
					<li><a href="#" class="button">Join our crew</a></li>
				</ul>
			</footer>

		</div>

		<!-- Footer -->
		<div id="footer">
			<div id="contato" class="container medium">
			<section id="sendmail">
						<header class="major last">
							<h2>Contato</h2>
						</header>

						<p>Vitae natoque dictum etiam semper magnis enim feugiat amet curabitur tempor
							orci penatibus. Tellus erat mauris ipsum fermentum etiam vivamus.</p>
				
				<form method="post" action="sendmail.php">
					<div class="row">
					<div class="col-6 col-12-mobilep">
						<input type="text" name="name" placeholder="Nome" />
					</div>
					<div class="col-6 col-12-mobilep">
						<input type="email" name="email" placeholder="E-mail" />
					</div>
					<div class="col-12">
						<textarea name="message" placeholder="Digite aqui seu recado" rows="6"></textarea>
					</div>
					<div class="col-12">
						<ul class="actions special">
						<li><input type="submit" value="Enviar recado" /></li>
						</ul>
					</div>
					</div>
				</form>
			<section>
			<ul class="icons">
				<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
				<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
			</ul>

			<ul class="copyright">
				<li>&copy; Untitled. All rights reserved.</li>
				<!-- <li>Created by: <a href="https://araujo.work">Igor Araujo</a></li> -->
			</ul>

			</div>
		</div>
	</div>

	<!-- Scripts -->
	<script src="content/assets/js/jquery.min.js"></script>
	<script src="content/assets/js/browser.min.js"></script>
	<script src="content/assets/js/breakpoints.min.js"></script>
	<script src="content/assets/js/util.js"></script>
	<script src="content/assets/js/main.js"></script>
  	<script src="content/assets/js/menu.js"></script>
</body>

</html>