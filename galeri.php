<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - Sakarya Büyükşehir Belediyesi</title>
    <?php include_once 'includes/head.php'; ?>
</head>
<body>
    <?php include_once 'includes/header.php'; ?>

    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <div class="gallery-hero">
                        <h2 class="display-4 fw-bold mb-4">Galeri</h2>
                        <p class="lead mb-0">Belediyeye ait görsellerin bulunduğu interaktif galeri</p>
                    </div>
                </div>
            </div>
            
            <div class="row mb-5">
                <div class="col-12">
                    <div class="gallery-slider">
                        <div id="galleryCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="./images/001.jpg" class="d-block w-100" alt="Teknoloji Merkezi">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/002.jpg" class="d-block w-100" alt="Vatandaş Hizmetleri">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/003.jpg" class="d-block w-100" alt="Şehir Manzarası">
                                </div>
                                <div class="carousel-item">
                                    <img src="./images/004.jpg" class="d-block w-100" alt="Doğal Yaşam">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Önceki</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Sonraki</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include_once 'includes/footer.php'; ?>
    <?php include_once 'includes/scripts.php'; ?>
</body>
</html> 