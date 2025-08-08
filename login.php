<?php
$valid_username = "admin";
$valid_password = "123456";

$error_message = "";
$success_message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['email'] ?? "";
    $password = $_POST['password'] ?? "";
    
    if (empty($username) || empty($password)) {
        $error_message = "Kullanıcı adı ve şifre alanları zorunludur!";
    }
    elseif ($username === $valid_username && $password === $valid_password) {
        $success_message = "Giriş başarılı!";
    } else {
        $error_message = "Kullanıcı adı veya şifre hatalı!";
    }
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş - Sakarya Büyükşehir Belediyesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.sakarya.bel.tr/assets/media/favicons/favicon-32x32.png">
</head>
<body class="login-page">
    <div class="login-background">
        <div class="login-overlay"></div>
    </div>
    
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-6 col-lg-5 col-xl-4">
                <div class="login-card">
                    <div class="login-header">
                        <div class="logo-container">
                            <img src="./images/logo.svg" alt="Sakarya Belediyesi" class="login-logo">
                        </div>
                        <h2 class="login-title">Giriş Yap</h2>
                        <p class="login-subtitle">Bilgi İşlem Dairesi Başkanlığı</p>
                    </div>
                    
                    <?php if (!empty($error_message)): ?>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <i class="fas fa-exclamation-triangle me-2"></i>
                            <?php echo htmlspecialchars($error_message); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <?php if (!empty($success_message)): ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <i class="fas fa-check-circle me-2"></i>
                            <?php echo htmlspecialchars($success_message); ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    <?php endif; ?>
                    
                    <form id="loginForm" class="login-form" method="POST" action="">
                        <div class="form-group">
                            <label for="email" class="form-label">
                                <i class="fas fa-user"></i>
                                Kullanıcı Adı
                            </label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Kullanıcı adınızı giriniz" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password" class="form-label">
                                <i class="fas fa-lock"></i>
                                Şifre
                            </label>
                            <div class="password-input-group">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Şifrenizi giriniz" required>
                                <button type="button" class="password-toggle" id="passwordToggle">
                                    <i class="fas fa-eye"></i>
                                </button>
                            </div>
                        </div>
                        
                        <button type="submit" class="login-btn">
                            <i class="fas fa-sign-in-alt"></i>
                            Giriş Yap
                        </button>
                        
                        <div class="back-to-home">
                            <a href="anasayfa.php" class="back-link">
                                <i class="fas fa-arrow-left"></i>
                                Ana Sayfaya Dön
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html> 