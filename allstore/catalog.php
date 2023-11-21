<?php
include("./sections/header.php");
?>




<main>
	<section class="container">


		<ul class="b-crumbs">
			<li>
				<a href="index.php">
					Ana Sayfa
				</a>
			</li>
			<li>
				<a href="catalog.php">
					Ürünler
				</a>
			</li>
		</ul>
		<h1 class="main-ttl"><span>ÜRÜNLER</span></h1>




		<div class="section-sb">

			<div class="section-sb-current">
				<h3><a href="catalog.php">Tüm Ürünler <span id="section-sb-toggle" class="section-sb-toggle"><span class="section-sb-ico"></span></span></a></h3>
				<ul class="section-sb-list" id="section-sb-list">
					<li class="categ-1">
						<a href="catalog.php">
							<span class="categ-1-label">Sebzeler</span>
						</a>
					</li>
					<li class="categ-1">
						<a href="catalog.php">
							<span class="categ-1-label">Meyveler</span>
						</a>
					</li>
				</ul>
			</div>
		</div>




		<div class="section-cont">
			<div class="section-top">

				<div class="section-sortby">
					<p>Varsayılan sıralama</p>
					<ul>
						<li>
							<a href="#">popülerliğe göre sırala</a>
						</li>
						<li>
							<a href="#">düşük fiyattan yükseğe</a>
						</li>
						<li>
							<a href="#">yüksekten düşüğe fiyat</a>
						</li>
						<li>
							<a href="#">Varsayılan sıralama</a>
						</li>
					</ul>
				</div>

				<div class="section-count">
					<p>20</p>
					<ul>
						<li><a href="#">5</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">20</a></li>
					</ul>
				</div>

			</div>




			<div class="prod-items section-items">
				<?php
				include("./sections/db.php");

				$query = "SELECT * FROM products";
				$stmt = $conn->prepare($query);
				$stmt->execute();

				$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

				if (!empty($products)) {
					foreach ($products as $row) {?>

						<div class="prod-i">
							<div class="prod-i-top">
								<a class="prod-i-img"><!-- NO SPACE --><img src="./<?php echo $row['image_url']; ?>" alt=""></a>

								<a href="#" class="prod-i-buy">SEPETE EKLE</a>
								<p class="prod-i-properties-label"><i class="fa fa-info"></i></p>

								<div class="prod-i-properties">
									<dl>
										<dt>Stok Durumu :</dt>
										<dd>MEVCUT:<br><?php echo $row['count']; ?> Adet</dd>
									</dl>
								</div>
							</div>
							<h3>
								<a><?php echo $row['name']; ?></a>
							</h3>
							<p class="prod-i-price">
								<b><?php echo $row['price']; ?>₺</b>
							</p>
							<div class="prod-i-skuwrapcolor"></div>
						</div>

				<?php }
				} else {
					echo "Ürün bulunamadı.";
				}

				// Veritabanı bağlantısını kapat
				$conn = null;
				?>





			</div>


			<ul class="pagi">
				<li class="active"><span>1</span></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
			</ul>

		</div>