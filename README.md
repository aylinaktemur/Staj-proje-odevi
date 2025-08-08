# Sakarya Büyükşehir Belediyesi Web Sitesi

Bu proje, **Sakarya Büyükşehir Belediyesi Bilgi İşlem Dairesi Başkanlığı** için geliştirilmiş bir web sitesidir. Site, belediyenin bilgi işlem departmanının faaliyetlerini, müdürlüklerini ve projelerini tanıtan bir platform olarak tasarlanmıştır.

## 📋 Proje Hakkında

Bu web sitesi, üniversite staj projesi kapsamında geliştirilmiştir. Modern web teknolojileri kullanılarak responsive (mobil uyumlu) bir tasarım oluşturulmuştur.

**Geliştirici:** Aylin Aktemur

## 🚀 Özellikler

- **Modern ve şık tasarım** - Bootstrap 5 framework kullanılarak geliştirilmiştir
- **Responsive tasarım** - Tüm cihazlarda (PC, tablet, mobil) uyumlu görünüm
- **PHP tabanlı** - Dinamik içerik yönetimi
- **Galeri sistemi** - Otomatik fotoğraf slideshow'u
- **İletişim formu** - Ziyaretçiler mesaj gönderebilir
- **Admin paneli** - Basit giriş sistemi (kullanıcı: admin, şifre: 123456)

## 📁 Dosya Yapısı

```
Staj-proje-odevi/
├── anasayfa.php          # Ana sayfa
├── hakkimizda.php        # Hakkımızda sayfası
├── mudurluklerimiz.php   # Müdürlükler sayfası
├── projelerimiz.php      # Projeler sayfası
├── galeri.php            # Galeri sayfası
├── iletisim.php          # İletişim sayfası
├── login.php             # Giriş sayfası
├── index.php             # Yönlendirme dosyası
├── css/
│   └── style.css         # Ana stil dosyası
├── js/                   # JavaScript dosyaları
│   ├── main.js
│   ├── slider.js
│   ├── contact.js
│   └── login.js
├── images/               # Resim dosyaları
└── includes/             # Ortak dosyalar
    ├── header.php
    ├── footer.php
    ├── head.php
    └── scripts.php
```

## 🛠️ Kullanılan Teknolojiler

- **HTML5** - Sayfa yapısı için
- **CSS3** - Stil ve tasarım için
- **JavaScript** - İnteraktif özellikler için
- **PHP** - Sunucu tarafı programlama
- **Bootstrap 5** - CSS framework
- **Font Awesome** - İkonlar için

## 📖 Sayfa Açıklamaları

### Ana Sayfa (anasayfa.php)
- Belediyenin genel tanıtımı
- Hero section ile etkileyici giriş
- Bilgi İşlem Dairesi hakkında kısa bilgi

### Hakkımızda (hakkimizda.php)
- Bilgi İşlem Dairesi'nin misyon ve vizyonu
- Değerler ve hedefler
- Kart tasarımı ile görsel sunum

### Müdürlüklerimiz (mudurluklerimiz.php)
- 4 ana müdürlüğün detaylı tanıtımı:
  - Bilişim Sistemleri ve Donanım Şube Müdürlüğü
  - Coğrafi Bilgi Sistemleri Şube Müdürlüğü
  - Elektronik ve Haberleşme Sistemleri Şube Müdürlüğü
  - Yazılım Şube Müdürlüğü

### Projelerimiz (projelerimiz.php)
- Belediyenin teknoloji projeleri
- E-Belediye portalı, Akıllı Şehir uygulaması, CBS sistemi vb.
- Her proje için görsel ve açıklama

### Galeri (galeri.php)
- Belediye fotoğrafları
- Bootstrap carousel slider
- Otomatik geçiş özelliği

### İletişim (iletisim.php)
- İletişim bilgileri
- Mesaj gönderme formu
- Sosyal medya linkleri

### Giriş Paneli (login.php)
- Admin girişi için basit form
- Kullanıcı adı: `admin`
- Şifre: `123456`

## 🎨 Tasarım Özellikleri

- **Renk Paleti:** Mavi tonları ve beyaz (belediye kurumsal kimliğine uygun)
- **Typography:** Modern, okunabilir fontlar
- **Layout:** Grid sistemi ile düzenli yerleşim
- **Animasyonlar:** Hover efektleri ve smooth transitions
- **İkonlar:** Font Awesome icon seti

## 📱 Responsive Tasarım

Site tüm ekran boyutlarında uyumlu çalışır:
- **Desktop:** 1200px ve üzeri
- **Tablet:** 768px - 1199px arası
- **Mobil:** 768px altı

## 🔧 Geliştirme Notları

Bu proje öğrenme amaçlı geliştirilmiştir. Geliştirilmesi gereken alanlar:

- [ ] Veritabanı entegrasyonu (şu an sadece static içerik)
- [ ] Form verilerinin saklanması
- [ ] Admin paneli geliştirme
- [ ] SEO optimizasyonu
- [ ] Güvenlik iyileştirmeleri

## 🤝 Katkıda Bulunma

Bu bir eğitim projesidir. Önerilerinizi ve geri bildirimlerinizi paylaşabilirsiniz.

---

> **Not:** Bu proje eğitim amaçlı geliştirilmiştir ve gerçek bir üretim ortamında kullanılmadan önce güvenlik testlerinden geçirilmelidir.

---
*Bu proje Sakarya Büyükşehir Belediyesi staj programı kapsamında geliştirilmiştir.*