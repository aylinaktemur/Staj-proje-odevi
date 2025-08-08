<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim - Sakarya Büyükşehir Belediyesi</title>
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-5">
                    <h2 class="display-5 fw-bold">İletişim</h2>
                    <p class="lead">Bizimle iletişime geçin</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <h3>İletişim Bilgileri</h3>
                    <div class="contact-info">
                        <p><i class="fas fa-map-marker-alt me-2"></i>Adres: Sakarya, Türkiye</p>
                        <p><i class="fas fa-phone me-2"></i>Telefon: 0264 123 45 67</p>
                        <p><i class="fas fa-envelope me-2"></i>E-posta: bilgiislem@sakarya.bel.tr</p>
                        <p><i class="fas fa-clock me-2"></i>Çalışma Saatleri: 08:00 - 17:00</p>
                    </div>
                    <div class="social-links mt-4">
                        <h5>Sosyal Medya</h5>
                        <a href="https://www.facebook.com/sakaryabld" class="text-dark me-3"><i class="fab fa-facebook fa-2x"></i></a>
                        <a href="https://twitter.com/sakaryabld" class="text-dark me-3"><i class="fab fa-twitter fa-2x"></i></a>
                        <a href="https://www.instagram.com/sakaryabld/" class="text-dark me-3"><i class="fab fa-instagram fa-2x"></i></a>
                        <a href="https://www.youtube.com/user/sakaryabld" class="text-dark me-3"><i class="fab fa-youtube fa-2x"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <h3>Mesaj Gönder</h3>
                    <form id="contactForm" method="POST" action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Ad Soyad</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Adınız ve soyadınız">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-posta</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="E-posta adresiniz">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Konu</label>
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Mesaj konusu">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Mesaj</label>
                            <textarea class="form-control" id="message" name="message" rows="5" placeholder="Mesajınızı yazın"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'includes/footer.php'; ?>
    <?php include_once 'includes/scripts.php'; ?>
</body>
</html> 