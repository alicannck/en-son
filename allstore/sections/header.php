

<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<title>Manav Sayfası</title>


	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>
		body{
			background-color: rgb(182, 214, 137);
			
		}
	</style>

</head>
<body>

<header class="header">
	<div class="header_top">
		<div class="container">
			<ul class="contactinfo nav nav-pills">
				<li>
					<i class='fa fa-phone'></i> +90 500 000 0000
				</li>
				<li>
					<i class="fa fa-envelope"></i> eposta@gmail.com
				</li>
			</ul>	
		</div>
	</div>

	<div class="header-middle" >
		<div class="container header-middle-cont" >
			<div class="toplogo">
				<a href="index.php">
					<img src="img/logo.png">
				</a>
			</div>
			<div class="shop-menu">
				<ul>

					

					<li class="topauth">
						<a href="auth-login.php">
							<i class="fa fa-lock"></i> 
							<span class="shop-menu-ttl">Kayıt Ol / Giriş</span>
						</a>
					</li>

					<li class="topauth">
						<div class="h-cart ">
							<a href="cart.php"> 
								<i class="fa fa-shopping-cart"></i> 
								<span class="shop-menu-ttl">Sepet</span>
								(<b>0</b>)
							</a>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>


	<div class="header-bottom">
		<div class="container">
			<nav class="topmenu">
		
	<div class="topcatalog">
		<a class="topcatalog-btn" href="catalog.php">ÜRÜNLER</a>

	</div>

	<button type="button" class="mainmenu-btn">Menu</button>
	
	<ul class="mainmenu">
		<li>
			<a href="index.php">
				Ana Sayfa
			</a>
		</li>
		<li>
			<a href="elements.php">
				Hakkında
			</a>
		</li>
		<li>
			<a href="contacts.php">
				İletişim
			</a>
		</li>
		
	</ul>


	<div class="topsearch">
		<a id="topsearch-btn" class="topsearch-btn" href="#"><i class="fa fa-search"></i></a>
		<form class="topsearch-form" action="#">
			<input type="text" placeholder="Search products">
			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
	</div>
	
</nav>
	</div>
		</div>
			</header>
