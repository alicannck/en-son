<?php
include("./sections/header.php");
?>



	
<main>
<section class="container stylization maincont">


<ul class="b-crumbs">
	<li>
		<a href="index.php">
			Ana Sayfa
		</a>
	</li>
	<li>
		<span>Sepet</span>
	</li>
</ul>

<h1 class="main-ttl"><span>SEPET</span></h1>

<form action="#">

	<div class="cart-items-wrap">
		<table class="cart-items">
			<thead >
			<tr>
				<td class="cart-image"></td>
				<td class="cart-ttl">ÜRÜNLER</td>
				<td class="cart-price">Fiyat</td>
				<td class="cart-quantity">Adet</td>
				<td class="cart-summ">Toplam</td>
				<td class="cart-del">&nbsp;</td>
			</tr>
			</thead>
			<tbody>

				<tr>
					<td class="cart-image">
						<a>
							<img src="img/cart/1.jpg" alt="">
						</a>
					</td>
					<td class="cart-ttl">
						<a >Elma</a>
						<p>Renk: Kırmızı</p>
					</td>
					<td class="cart-price">
						<b>35,90 TL</b>
					</td>
					<td class="cart-quantity">
						<p class="cart-qnt">
							<input value="3" type="text">
							<a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
						</p>
					</td>
					<td class="cart-summ">
						<b>107,70 TL</b>
					</td>
				</tr>


				<tr>
					<td class="cart-image">
						<a>
							<img src="img/cart/2.jpg" alt="">
						</a>
					</td>
					<td class="cart-ttl">
						<a>İthal Muz</a>
					</td>
					<td class="cart-price">
						<b>79,90 TL</b>
					</td>
					<td class="cart-quantity">
						<p class="cart-qnt">
							<input value="1" type="text">
							<a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
						</p>
					</td>
					<td class="cart-summ">
						<b>79,90 TL</b>
					</td>
				</tr>


				<tr>
					<td class="cart-image">
						<a>
							<img src="img/cart/3.jpg" alt="">
						</a>
					</td>
					<td class="cart-ttl">
						<a>Dolma Biber</a>
						<p>Renk: Yeşil</p>
					</td>
					<td class="cart-price">
						<b>29,90 TL</b>
					</td>
					<td class="cart-quantity">
						<p class="cart-qnt">
							<input value="2" type="text">
							<a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
						</p>
					</td>
					<td class="cart-summ">
						<b>59,80 TL</b>
					</td>
				</tr>


				<tr>
					<td class="cart-image">
						<a>
							<img src="img/cart/4.jpg" alt="">
						</a>
					</td>
					<td class="cart-ttl">
						<a>Kabak Organik</a>
					</td>
					<td class="cart-price">
						<b>52,90 TL</b>
					</td>
					<td class="cart-quantity">
						<p class="cart-qnt">
							<input value="1" type="text">
							<a href="#" class="cart-plus"><i class="fa fa-angle-up"></i></a>
							<a href="#" class="cart-minus"><i class="fa fa-angle-down"></i></a>
						</p>
					</td>
					<td class="cart-summ">
						<b>52,90 TL</b>
					</td>
				</tr>

			</tbody>
		</table>
	</div>


	<ul class="cart-total">
		<li class="cart-summ">TOPLAM: <b>300,30 TL</b></li>
	</ul>
	<div class="cart-submit">
		<a href="#" class="cart-submit-btn">SATIN AL</a>
		<a href="#" class="cart-clear">Sepeti Temizle</a>
	</div>
</form>


</section>
</main>

</body>
</html>