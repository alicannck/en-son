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
		<span>İletişim</span>
	</li>
</ul>
<h1 class="main-ttl"><span>İLETİŞİM</span></h1>

<br> <br>

<div class="reviews-wrap">
	<div class="reviewscar-wrap">
		<div class="swiper-container reviewscar">
			<div class="swiper-wrapper">
						<div class="swiper-slide">
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure</p>
						</div>
			</div>
		</div>
	</div>
</div>
<br>

<div class="iconbox-wrap">
	<div class="row iconbox-list">
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/1.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl"> +90 500 000 0000</h3>
			Bizi çalışma saatleri<br>
			içerisinde arayabilirsiniz.
			<span class="iconbox-i-margin"></span>
		</div>
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/2.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl">Adresimiz</h3>
			555 South Street,<br>
			New York City 12345
			<span class="iconbox-i-margin"></span>
		</div>
		<div class="cf-xs-6 cf-sm-4 cf-lg-4 col-xs-6 col-sm-4 iconbox-i">
			<p class="iconbox-i-img"><!-- NO SPACE --><img src="img/contacts/3.png" alt=""><!-- NO SPACE --></p>
			<h3 class="iconbox-i-ttl">Çalışma Saatlerimiz</h3>
			Pzt-Cum 07:00-22:00<br>
			Cmt-Pzr kapalı
			<span class="iconbox-i-margin"></span>
		</div>
	</div>
</div>



<!-- Contact Form -->
<div class="contactform-wrap">
	<form action="#" class="form-validate">
		<h3 class="component-ttl component-ttl-ct component-ttl-hasdesc"><span>GERİ BİLDİRİM</span></h3>
		<p class="component-desc component-desc-ct">Herhangi bir sorununuz, görüş ve önerileriniz için iletişime geçiniz.</p>
		<p class="contactform-field contactform-text">
			<label class="contactform-label">Ad / Soyad</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Yazınız..." type="text" name="name" data-required="text"></span>
		</p>
		<p class="contactform-field contactform-email">
			<label class="contactform-label">E-posta</label><!-- NO SPACE --><span class="contactform-input"><input placeholder="Yazınız..." type="text" name="email" data-required="text" data-required-email="email"></span>
		</p>
		<p class="contactform-field contactform-textarea">
			<label class="contactform-label">Mesaj</label><!-- NO SPACE --><span class="contactform-input"><textarea placeholder="Yazınız..." name="mess" data-required="text"></textarea></span>
		</p>
		<p class="contactform-submit">
			<input value="Send" type="submit">
		</p>
	</form>
</div>
<br>
<br>

</section>
</main>


</body>
</html>