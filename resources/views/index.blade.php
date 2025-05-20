@extends('layouts.app')

@section('title', 'Malatya İş İnsanları Platformu')

@section('content')
<section id="hero" class="hero section">

      <div class="info d-flex align-items-center">
        <div class="container">
          <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-8 text-center">
              <h2>Malatya İş İnsanları Platformu</h2>
              <p>Malatya'nın ekonomik ve sosyal kalkınmasına katkı sağlamak amacıyla bir araya gelen iş insanlarının oluşturduğu bir platformuz. Şehrimizin potansiyelini en üst düzeye çıkarmak, iş dünyasını güçlendirmek ve sürdürülebilir kalkınmaya destek olmak için çalışıyoruz.</p>
              <a href="#get-started" class="btn-get-started">Platformumuza Katılın</a>
            </div>
          </div>
        </div>
      </div>

      <div id="section-fqREP4OWmC-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/slider-1.jpg') }}" alt="">
        </div>

        <div class="carousel-item active">
          <img src="{{ asset('img/hero-carousel/slider-2.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/slider-3.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/slider-4.jpg') }}" alt="">
        </div>

        <div class="carousel-item">
          <img src="{{ asset('img/hero-carousel/slider-5.jpg') }}" alt="">
        </div>

        <a class="carousel-control-prev" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#section-fqREP4OWmC-carousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>

    </section><!-- /Hero Section -->


    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold mb-3">Stratejik Konumda Güçlü Platform</h2>
                <p class="lead mb-2">Tarihi İpek Yolu'nun Modern Buluşma Noktası</p>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <p class="mt-3">Malatya İş İnsanları Platformu, Doğu Anadolu'nun kalbinde, tarihi İpek Yolu üzerinde stratejik bir konumda yer alan şehrimizin ekonomik potansiyelini en üst düzeye çıkarmak için kurulmuştur. Coğrafi konumumuzun sunduğu avantajları, modern iş dünyasının gereklilikleriyle birleştirerek bölgesel kalkınmaya öncülük ediyoruz.</p>
                    </div>
                </div>
            </div>

            <div class="map-wrapper mb-5" style="position: relative; height: 450px; border-radius: 20px; overflow: hidden; box-shadow: 0 20px 40px rgba(0,0,0,0.2);" data-aos="fade-up">
                <div id="malatya-map" style="width: 100%; height: 100%;"></div>
                <div class="map-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; pointer-events: none; background: linear-gradient(135deg, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 50%);"></div>
                <div class="map-info" style="position: absolute; bottom: 20px; left: 20px; color: white; text-shadow: 2px 2px 4px rgba(0,0,0,0.5); background: rgba(0,0,0,0.5); padding: 15px; border-radius: 10px;">
                    <h4 style="font-size: 22px; margin-bottom: 5px;">Malatya</h4>
                    <p style="font-size: 14px; margin: 0;">38.3552° K, 38.3095° D</p>
                </div>
                <div class="map-controls" style="position: absolute; top: 20px; right: 20px; background: rgba(255,255,255,0.9); padding: 10px; border-radius: 10px;">
                    <button onclick="rotateLeft()" style="border: none; background: none; cursor: pointer;"><i class="bi bi-arrow-counterclockwise"></i></button>
                    <button onclick="rotateRight()" style="border: none; background: none; cursor: pointer;"><i class="bi bi-arrow-clockwise"></i></button>
                </div>
            </div>

            <div class="row g-4" data-aos="fade-up">
                <div class="col-md-3">
                    <div class="feature-box text-center p-4" style="background: #f8f9fa; border-radius: 15px; height: 100%;">
                        <i class="bi bi-geo-alt mb-3" style="font-size: 2.5rem; color: #0d6efd;"></i>
                        <h4 class="h5 mb-3">Bölgesel Güç</h4>
                        <p class="mb-0">6 ile komşu olan Malatya, Doğu Anadolu'nun ticaret ve lojistik merkezi konumundadır</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center p-4" style="background: #f8f9fa; border-radius: 15px; height: 100%;">
                        <i class="bi bi-diagram-3 mb-3" style="font-size: 2.5rem; color: #0d6efd;"></i>
                        <h4 class="h5 mb-3">Güçlü Network</h4>
                        <p class="mb-0">1000'den fazla iş insanını bir araya getiren bölgenin en büyük iş platformu</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center p-4" style="background: #f8f9fa; border-radius: 15px; height: 100%;">
                        <i class="bi bi-currency-exchange mb-3" style="font-size: 2.5rem; color: #0d6efd;"></i>
                        <h4 class="h5 mb-3">Ekonomik Potansiyel</h4>
                        <p class="mb-0">Tarım, sanayi ve teknoloji alanlarında yüksek yatırım potansiyeli</p>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="feature-box text-center p-4" style="background: #f8f9fa; border-radius: 15px; height: 100%;">
                        <i class="bi bi-rocket-takeoff mb-3" style="font-size: 2.5rem; color: #0d6efd;"></i>
                        <h4 class="h5 mb-3">İnovasyon Merkezi</h4>
                        <p class="mb-0">Teknoloji ve inovasyon odaklı projeleriyle geleceğe yön veren platform</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="features section">
        <div class="container">
            <div class="feature-tabs-container">
                <ul class="feature-tabs" role="tablist">
                    <li class="feature-tab-item" role="presentation">
                        <a class="feature-tab-link active" data-bs-toggle="tab" href="#features-tab-1" role="tab">
                            <div class="tab-content-wrapper">
                                <div class="tab-icon">
                                    <i class="bi bi-eye-fill"></i>
                                </div>
                                <div class="tab-text">
                                    <span class="tab-label">Vizyon</span>
                                    <h4>Vizyonumuz</h4>
                                    <p class="tab-description">Geleceğe yönelik hedeflerimiz</p>
                                </div>
                            </div>
                            <div class="tab-indicator"></div>
                        </a>
                    </li>

                    <li class="feature-tab-item" role="presentation">
                        <a class="feature-tab-link" data-bs-toggle="tab" href="#features-tab-2" role="tab">
                            <div class="tab-content-wrapper">
                                <div class="tab-icon">
                                    <i class="bi bi-rocket-takeoff-fill"></i>
                                </div>
                                <div class="tab-text">
                                    <span class="tab-label">Misyon</span>
                                    <h4>Misyonumuz</h4>
                                    <p class="tab-description">Temel amacımız ve görevimiz</p>
                                </div>
                            </div>
                            <div class="tab-indicator"></div>
                        </a>
                    </li>

                    <li class="feature-tab-item" role="presentation">
                        <a class="feature-tab-link" data-bs-toggle="tab" href="#features-tab-3" role="tab">
                            <div class="tab-content-wrapper">
                                <div class="tab-icon">
                                    <i class="bi bi-heart-fill"></i>
                                </div>
                                <div class="tab-text">
                                    <span class="tab-label">Değerler</span>
                                    <h4>Değerlerimiz</h4>
                                    <p class="tab-description">Kurumsal prensiplerimiz</p>
                                </div>
                            </div>
                            <div class="tab-indicator"></div>
                        </a>
                    </li>

                    <li class="feature-tab-item" role="presentation">
                        <a class="feature-tab-link" data-bs-toggle="tab" href="#features-tab-4" role="tab">
                            <div class="tab-content-wrapper">
                                <div class="tab-icon">
                                    <i class="bi bi-bullseye"></i>
                                </div>
                                <div class="tab-text">
                                    <span class="tab-label">Hedefler</span>
                                    <h4>Hedeflerimiz</h4>
                                    <p class="tab-description">Stratejik planlarımız</p>
                                </div>
                            </div>
                            <div class="tab-indicator"></div>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" data-aos="fade-up">
                <div class="tab-pane fade show active" id="features-tab-1" role="tabpanel">
                    <div class="modern-feature-card">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="feature-content">
                                    <span class="feature-badge">Vizyon</span>
                                    <h3>Malatya'nın Ekonomik Lideri Olmak</h3>
                                    <p class="feature-description">
                                        Malatya'yı Doğu Anadolu'nun ekonomik merkezi haline getirmek ve sürdürülebilir kalkınmayı sağlamak.
                                    </p>
                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Bölgesel ekonomik liderlik</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Sürdürülebilir kalkınma</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Uluslararası rekabet gücü</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="feature-image">
                                    <img src="img/features/vision.jpg" alt="MAİP Vizyon" class="img-fluid">
                                    <div class="image-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="features-tab-2" role="tabpanel">
                    <div class="modern-feature-card">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="feature-content">
                                    <span class="feature-badge">Misyon</span>
                                    <h3>İş Dünyasını Güçlendirmek</h3>
                                    <p class="feature-description">
                                        Malatya'nın iş dünyasını bir araya getirerek, ekonomik ve sosyal kalkınmaya katkı sağlamak.
                                    </p>
                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>İş dünyası dayanışması</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Ekonomik kalkınma</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Sosyal sorumluluk</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="feature-image">
                                    <img src="img/features/mission.jpg" alt="MAİP Misyon" class="img-fluid">
                                    <div class="image-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="features-tab-3" role="tabpanel">
                    <div class="modern-feature-card">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="feature-content">
                                    <span class="feature-badge">Değerler</span>
                                    <h3>Platform Değerlerimiz</h3>
                                    <p class="feature-description">
                                        Platformumuzun temel değerleri, tüm faaliyetlerimizde bize yol gösteriyor.
                                    </p>
                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Güvenilirlik ve şeffaflık</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>İş birliği ve dayanışma</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Yenilikçilik ve sürdürülebilirlik</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="feature-image">
                                    <img src="img/features/values.jpg" alt="MAİP Değerler" class="img-fluid">
                                    <div class="image-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="features-tab-4" role="tabpanel">
                    <div class="modern-feature-card">
                        <div class="row align-items-center">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="feature-content">
                                    <span class="feature-badge">Hedefler</span>
                                    <h3>Stratejik Hedeflerimiz</h3>
                                    <p class="feature-description">
                                        Malatya'nın ekonomik potansiyelini en üst düzeye çıkarmak için belirlediğimiz hedefler.
                                    </p>
                                    <div class="feature-list">
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Yatırım ortamını geliştirmek</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>İstihdamı artırmak</span>
                                        </div>
                                        <div class="feature-item">
                                            <i class="bi bi-check2-circle"></i>
                                            <span>Uluslararası ticareti geliştirmek</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="feature-image">
                                    <img src="img/features/goals.jpg" alt="MAİP Hedefler" class="img-fluid">
                                    <div class="image-overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <!-- Constructions Section -->
  <section id="constructions" class="constructions section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Başarılı Projelerimiz</h2>
      <p>Malatya'nın ekonomik ve sosyal kalkınmasına katkı sağlayan projelerimiz</p>
    </div>

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
          <div class="modern-card">
            <div class="card-image">
              <img src="img/projects/sanayi-yatirim.jpg" alt="Sanayi Yatırım Projesi">
              <div class="card-overlay"></div>
            </div>
            <div class="card-content">
              <span class="card-tag">Sanayi</span>
              <h4 class="card-title">Sanayi Bölgesi Yatırım Projesi</h4>
              <p class="card-description">Malatya Organize Sanayi Bölgesi'nde yeni yatırım alanları oluşturarak, 500 kişilik istihdam sağlayan ve 100 milyon TL'lik yatırım çeken bir proje gerçekleştirdik.</p>
              <div class="card-stats">
                <div class="stat">
                  <i class="bi bi-people-fill"></i>
                  <span>500+ İstihdam</span>
                </div>
                <div class="stat">
                  <i class="bi bi-currency-exchange"></i>
                  <span>100M TL Yatırım</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
          <div class="modern-card">
            <div class="card-image">
              <img src="img/projects/egitim-merkezi.jpg" alt="Eğitim Merkezi Projesi">
              <div class="card-overlay"></div>
            </div>
            <div class="card-content">
              <span class="card-tag">Eğitim</span>
              <h4 class="card-title">Mesleki Eğitim Merkezi</h4>
              <p class="card-description">İş dünyasının ihtiyaç duyduğu nitelikli iş gücünü yetiştirmek için kurduğumuz eğitim merkezi, yılda 1000 öğrenciye eğitim veriyor ve %85 istihdam oranına sahip.</p>
              <div class="card-stats">
                <div class="stat">
                  <i class="bi bi-mortarboard-fill"></i>
                  <span>1000+ Öğrenci</span>
                </div>
                <div class="stat">
                  <i class="bi bi-graph-up-arrow"></i>
                  <span>%85 İstihdam</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
          <div class="modern-card">
            <div class="card-image">
              <img src="img/projects/ihracat-projesi.jpg" alt="İhracat Projesi">
              <div class="card-overlay"></div>
            </div>
            <div class="card-content">
              <span class="card-tag">İhracat</span>
              <h4 class="card-title">Uluslararası Ticaret Projesi</h4>
              <p class="card-description">Yurt dışı ticaret heyetleri ve fuar organizasyonlarıyla, platform üyelerimizin ihracat hacmini %40 artıran ve 10 yeni ülkeye açılım sağlayan bir proje yürüttük.</p>
              <div class="card-stats">
                <div class="stat">
                  <i class="bi bi-globe2"></i>
                  <span>10+ Ülke</span>
                </div>
                <div class="stat">
                  <i class="bi bi-arrow-up-right-circle"></i>
                  <span>%40 Artış</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
          <div class="modern-card">
            <div class="card-image">
              <img src="img/projects/girisimcilik.jpg" alt="Girişimcilik Projesi">
              <div class="card-overlay"></div>
            </div>
            <div class="card-content">
              <span class="card-tag">Girişimcilik</span>
              <h4 class="card-title">Genç Girişimciler Projesi</h4>
              <p class="card-description">50 genç girişimciye mentorluk desteği sağlayan, 20 yeni işletmenin kurulmasına öncülük eden ve 5 milyon TL'lik yatırım çeken bir girişimcilik ekosistemi oluşturduk.</p>
              <div class="card-stats">
                <div class="stat">
                  <i class="bi bi-rocket-takeoff"></i>
                  <span>50+ Girişimci</span>
                </div>
                <div class="stat">
                  <i class="bi bi-building-fill-check"></i>
                  <span>20 Yeni İşletme</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="services section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Platformumuzun Amaçları</h2>
      <p>Malatya'nın ekonomik ve sosyal kalkınmasına katkı sağlamak için çalışıyoruz</p>
    </div>

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-handshake"></i>
            </div>
            <h3>İş Dünyası Dayanışması</h3>
            <p>Malatya'daki işletmeler arasında güçlü bir dayanışma ağı oluşturarak, ortak projeler geliştiriyor ve iş birliği fırsatları yaratıyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-chart-line"></i>
            </div>
            <h3>Ekonomik Kalkınma</h3>
            <p>Şehrimizin ekonomik potansiyelini artırmak için yatırım fırsatları yaratıyor, yeni iş alanları açıyor ve istihdamı destekliyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <h3>Eğitim ve Gelişim</h3>
            <p>İş dünyasının ihtiyaç duyduğu nitelikli iş gücünü yetiştirmek için eğitim programları düzenliyor ve genç girişimcileri destekliyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-network-wired"></i>
            </div>
            <h3>Networking</h3>
            <p>İş dünyasının önde gelen isimleriyle bir araya gelme fırsatları sunarak, yeni iş bağlantıları kurmanıza yardımcı oluyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-bullhorn"></i>
            </div>
            <h3>Lobici Faaliyetler</h3>
            <p>Malatya'nın ekonomik çıkarlarını korumak ve geliştirmek için kamu kurumları nezdinde lobi faaliyetleri yürütüyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="fa-solid fa-globe"></i>
            </div>
            <h3>Uluslararası İş Birliği</h3>
            <p>Yurt dışı iş bağlantıları kurarak, Malatya'nın uluslararası ticaret potansiyelini artırıyoruz.</p>
            <a href="#" class="readmore stretched-link">Detaylı Bilgi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Platform Faaliyetlerimiz</h2>
      <p>Malatya'nın ekonomik ve sosyal kalkınmasına yönelik gerçekleştirdiğimiz projeler</p>
    </div>

    <div class="container">
      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">Tümü</li>
          <li data-filter=".filter-egitim">Eğitim</li>
          <li data-filter=".filter-yatirim">Yatırım</li>
          <li data-filter=".filter-etkinlik">Etkinlikler</li>
          <li data-filter=".filter-isbirligi">İş Birliği</li>
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-egitim">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/egitim-1.jpg') }}" class="img-fluid" alt="Genç Girişimciler Eğitim Programı">
              <div class="portfolio-info">
                <h4>Genç Girişimciler Eğitim Programı</h4>
                <p>Geleceğin iş liderlerini yetiştiriyoruz</p>
                <a href="img/projects/egitim-1.jpg" title="Genç Girişimciler Eğitim Programı" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-yatirim">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/yatirim-1.jpg') }}" class="img-fluid" alt="Malatya Yatırım Zirvesi">
              <div class="portfolio-info">
                <h4>Malatya Yatırım Zirvesi</h4>
                <p>Yatırımcıları Malatya ile buluşturuyoruz</p>
                <a href="img/projects/yatirim-1.jpg" title="Malatya Yatırım Zirvesi" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-etkinlik">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/etkinlik-1.jpg') }}" class="img-fluid" alt="İş Dünyası Buluşmaları">
              <div class="portfolio-info">
                <h4>İş Dünyası Buluşmaları</h4>
                <p>Aylık networking etkinliklerimiz</p>
                <a href="img/projects/etkinlik-1.jpg" title="İş Dünyası Buluşmaları" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-isbirligi">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/isbirligi-1.jpg') }}" class="img-fluid" alt="Uluslararası Ticaret Heyetleri">
              <div class="portfolio-info">
                <h4>Uluslararası Ticaret Heyetleri</h4>
                <p>Yurt dışı iş bağlantıları kuruyoruz</p>
                <a href="img/projects/isbirligi-1.jpg" title="Uluslararası Ticaret Heyetleri" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-egitim">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/egitim-2.jpg') }}" class="img-fluid" alt="Mesleki Eğitim Programları">
              <div class="portfolio-info">
                <h4>Mesleki Eğitim Programları</h4>
                <p>Nitelikli iş gücü yetiştiriyoruz</p>
                <a href="img/projects/egitim-2.jpg" title="Mesleki Eğitim Programları" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-yatirim">
            <div class="portfolio-content h-100">
              <img src="{{ asset('img/projects/yatirim-2.jpg') }}" class="img-fluid" alt="Sanayi Bölgesi Geliştirme Projesi">
              <div class="portfolio-info">
                <h4>Sanayi Bölgesi Geliştirme Projesi</h4>
                <p>Yeni yatırım alanları oluşturuyoruz</p>
                <a href="img/projects/yatirim-2.jpg" title="Sanayi Bölgesi Geliştirme Projesi" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                <a href="project-details.html" title="Detaylar" class="details-link"><i class="bi bi-link-45deg"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Recent Blog Posts Section -->
  <section id="recent-blog-posts" class="recent-blog-posts section">
    <div class="container section-title" data-aos="fade-up">
      <h2>Platform Haberleri</h2>
      <p>Malatya İş İnsanları Platformu'nun güncel haberleri ve duyuruları</p>
    </div>

    <div class="container">
      <div class="row gy-5">
        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="100">
            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('img/blog/maip-haber-1.jpg') }}" class="img-fluid" alt="MAİP Kuruluş Toplantısı">
              <span class="post-date">15 Mart 2024</span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title">MAİP Kuruluş Toplantısı Gerçekleştirildi</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">MAİP Yönetim Kurulu</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Duyurular</span>
                </div>
              </div>
              <hr>
              <a href="blog-details.html" class="readmore stretched-link"><span>Devamını Oku</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6">
          <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="200">
            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('img/blog/maip-haber-2.jpg') }}" class="img-fluid" alt="Yatırım Zirvesi Hazırlıkları">
              <span class="post-date">10 Mart 2024</span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title">Malatya Yatırım Zirvesi Hazırlıkları Başladı</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">MAİP Etkinlik Komitesi</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Etkinlikler</span>
                </div>
              </div>
              <hr>
              <a href="blog-details.html" class="readmore stretched-link"><span>Devamını Oku</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>

        <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
          <div class="post-item position-relative h-100">
            <div class="post-img position-relative overflow-hidden">
              <img src="{{ asset('img/blog/maip-haber-3.jpg') }}" class="img-fluid" alt="Genç Girişimciler Programı">
              <span class="post-date">5 Mart 2024</span>
            </div>
            <div class="post-content d-flex flex-column">
              <h3 class="post-title">Genç Girişimciler Programı Başvuruları Açıldı</h3>
              <div class="meta d-flex align-items-center">
                <div class="d-flex align-items-center">
                  <i class="bi bi-person"></i> <span class="ps-2">MAİP Eğitim Komitesi</span>
                </div>
                <span class="px-3 text-black-50">/</span>
                <div class="d-flex align-items-center">
                  <i class="bi bi-folder2"></i> <span class="ps-2">Eğitimler</span>
                </div>
              </div>
              <hr>
              <a href="blog-details.html" class="readmore stretched-link"><span>Devamını Oku</span><i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Mapbox GL JS -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    mapboxgl.accessToken = 'YOUR_MAPBOX_ACCESS_TOKEN'; // Mapbox token'ınızı buraya ekleyin

    const map = new mapboxgl.Map({
        container: 'malatya-map',
        style: 'mapbox://styles/mapbox/satellite-v9',
        center: [38.3167, 38.3500], // Malatya'nın koordinatları
        zoom: 9,
        pitch: 60, // 3D görünüm için eğim
        bearing: -30 // Harita rotasyonu
    });

    map.addControl(new mapboxgl.NavigationControl());

    // 3D terrain özelliğini ekle
    map.on('load', () => {
        map.addSource('mapbox-dem', {
            'type': 'raster-dem',
            'url': 'mapbox://mapbox.mapbox-terrain-dem-v1',
            'tileSize': 512,
            'maxzoom': 14
        });

        map.setTerrain({
            'source': 'mapbox-dem',
            'exaggeration': 1.5 // Yükseltileri daha belirgin göstermek için
        });

        // Malatya il sınırlarını belirginleştir
        map.addLayer({
            'id': 'malatya-boundary',
            'type': 'line',
            'source': {
                'type': 'geojson',
                'data': {
                    'type': 'Feature',
                    'properties': {},
                    'geometry': {
                        'type': 'Polygon',
                        'coordinates': [
                            // Malatya il sınırları koordinatları buraya eklenecek
                        ]
                    }
                }
            },
            'layout': {},
            'paint': {
                'line-color': '#ffffff',
                'line-width': 2
            }
        });
    });
});
</script>

<!-- CSS eklemeleri için style tag'i -->
<style>
.malatya-map-container {
    perspective: 1000px;
    transform-style: preserve-3d;
    animation: subtle-float 6s ease-in-out infinite;
}

.malatya-map-container:hover img {
    transform: scale(1.15);
}

@keyframes subtle-float {
    0%, 100% {
        transform: translateY(0) rotateX(2deg);
    }
    50% {
        transform: translateY(-10px) rotateX(4deg);
    }
}

.elevation-scale {
    transform: translateZ(20px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.compass {
    animation: compass-rotate 20s linear infinite;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

@keyframes compass-rotate {
    from {
        transform: rotate(0deg);
    }
    to {
        transform: rotate(360deg);
    }
}
</style>

<!-- Main JS dosyasından önce -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Malatya'nın koordinatları
    const malatya = [38.3095, 38.3552];

    // Harita stilini oluştur
    const style = new ol.style.Style({
        fill: new ol.style.Fill({
            color: 'rgba(255,255,255,0.4)'
        }),
        stroke: new ol.style.Stroke({
            color: '#fff',
            width: 2
        })
    });

    // Haritayı oluştur
    const map = new ol.Map({
        target: 'malatya-map',
        layers: [
            // Terrain katmanı
            new ol.layer.Tile({
                source: new ol.source.XYZ({
                    url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Terrain_Base/MapServer/tile/{z}/{y}/{x}',
                    maxZoom: 13
                })
            }),
            // Uydu görüntüsü katmanı
            new ol.layer.Tile({
                source: new ol.source.XYZ({
                    url: 'https://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}',
                    maxZoom: 19,
                    opacity: 0.7
                })
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat(malatya),
            zoom: 11,
            minZoom: 10,
            maxZoom: 18,
            rotation: -0.5
        })
    });

    // Kontrol butonları için fonksiyonlar
    window.rotateLeft = function() {
        const view = map.getView();
        const rotation = view.getRotation();
        view.animate({
            rotation: rotation - Math.PI / 6,
            duration: 250
        });
    };

    window.rotateRight = function() {
        const view = map.getView();
        const rotation = view.getRotation();
        view.animate({
            rotation: rotation + Math.PI / 6,
            duration: 250
        });
    };

    // Harita yüklendiğinde animasyon efekti
    map.once('postrender', function() {
        map.getView().animate({
            zoom: map.getView().getZoom() + 1,
            duration: 1000
        });
    });
});
</script>

<style>
.map-wrapper {
    transition: all 0.3s ease;
}

.map-wrapper:hover {
    transform: scale(1.01);
}

.map-controls button {
    padding: 5px 10px;
    margin: 0 5px;
    transition: all 0.3s ease;
}

.map-controls button:hover {
    transform: scale(1.2);
}

.ol-zoom {
    top: unset;
    bottom: 20px;
    right: 20px;
    left: unset;
}

.ol-zoom .ol-zoom-in,
.ol-zoom .ol-zoom-out {
    background: rgba(255,255,255,0.9);
    color: #333;
    border-radius: 5px;
    margin: 5px;
}

.feature-box {
    transition: all 0.3s ease;
    border: 1px solid rgba(0,0,0,0.1);
}

.feature-box:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
}
</style>

</body>

@endsection
