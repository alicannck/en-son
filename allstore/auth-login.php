

<!-- Giriş kodları -->
<?php
include("./sections/header.php");
// db.php dosyasını dahil ettim.
include('./sections/db.php');




?>



<?php 
include('./sections/db.php');
$username = "";
// Formdan gelen verileri al
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Veritabanından kullanıcıyı sorgula
    $query = "SELECT id, email,username, hashed_password FROM users WHERE email = :email";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Kullanıcı bulundu, şifreyi kontrol et
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $row['hashed_password'])) {
            echo "<h4>Giriş başarılı. Hoş geldiniz, " . $row['username'] . "!</h4>";
        } else {
            echo "Şifre hatalı.";
        }
    } else {
        echo "Kullanıcı bulunamadı.";
    }
}

// Veritabanı bağlantısını kapat
$conn = null;
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


<h1 class="main-ttl"><span>Sitemize Hoşgeldiniz</span></h1> 
<div class="auth-wrap" >
    <div class="auth-col">
        <h2 style=>GİRİŞ YAP</h2>
        <form method="post" class="login" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <p>
                <label for="username">Email<span class="required">*</span></label>
				<input name="email" type="text" id="username">
            </p>
            <p>
                <label for="password">Şifre <span class="required">*</span></label>
				<input name = "password" type="password" id="password">
            </p>
            <p class="auth-submit">
                <input type="submit" value="Login">
                <input type="checkbox" id="rememberme" value="forever">
                <label for="rememberme">Beni Hatırla</label>
            </p>
            <p class="auth-lost_password">
                <a href="auth-register.php">Kayıt Olmak İçin Tıklayınız</a>
            </p>
			
        </form>
    </div>
    
</div>



</section>
</main>

</body>
</html>