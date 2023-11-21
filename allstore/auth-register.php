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
					<span>Kayıt Ol / Giriş</span>
				</li>
			</ul> <br>

			<!-- Kayıt olma kodu -->
			<?php
			include("./sections/db.php");

			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
			
				// Şifreyi hashle
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);
			
				// Veritabanına kullanıcıyı ekle
				$query = "INSERT INTO users (username, email, hashed_password) VALUES (:username, :email, :password)";
				$stmt = $conn->prepare($query);
				$stmt->bindParam(':username', $username);
				$stmt->bindParam(':email', $email);
				$stmt->bindParam(':password', $hashed_password);
			
				if ($stmt->execute()) {
					echo "Kayıt başarıyla tamamlandı.";
				} else {
					echo "Hata: " . $stmt->errorInfo()[2];
				}
			}
			
			// Veritabanı bağlantısını kapat
			$conn = null;
			?>

			<h1 class="main-ttl"><span>Sitemize Hoşgeldiniz</span></h1>
			<div class="auth-wrap">
				<div class="auth-col" >
					<h2 style="margin-left: 80px;">KAYIT OL</h2>
					<form method="POST" class="register" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<p>
							<label for="reg_email">Kullanıcı Adı <span class="required">*</span></label>
							<input name="username" type="text" id="reg_email" required>
						</p>
						<p>
							<label for="reg_email">E-posta <span class="required">*</span></label>
							<input name="email" type="text" id="reg_email" required>
						</p>
						<p>
							<label for="reg_password">Şifre <span class="required">*</span></label>
							<input name="password" type="password" id="reg_password" required>
						</p>
						<p class="auth-submit">
							<input type="submit" value="Register">
						</p>
						<p class="auth-lost_password">
                			<a href="auth-login.php">Giriş Yapmak İçin Tıklayınız</a>
            			</p>
					</form>
				</div>

			</div>



		</section>
	</main>

</body>

</html>