@extends('layouts.app')

@section('title', 'MAİP | Hakkımızda')

@section('styles')
<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Main CSS File -->
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@endsection

@section('content')
<body class="about-page">
    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{ asset('img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1>Hakkımızda</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="{{ route('home') }}">Anasayfa</a></li>
                    <li class="current">Hakkımızda</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- About Section -->
    <section id="about" class="about section">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-7 about-img" data-aos="zoom-out" data-aos-delay="200">
                    <img src="{{ asset('img/about.jpg') }}">
                </div>

                <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="inner-title">Malatya İş İnsanları Platformu</h2>
                    <div class="our-story">
                        <h4>Est 2024</h4>
                        <h3>Hikayemiz</h3>
                        <p>Malatya İş İnsanları Platformu (MAİP), Malatya'nın ekonomik ve sosyal kalkınmasına katkıda bulunmak amacıyla bir araya gelen iş insanlarının oluşturduğu güçlü bir birliktir. Şehrimizin potansiyelini en üst düzeye çıkarmak için çalışıyoruz.</p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>İş dünyasını bir araya getirerek güç birliği oluşturuyoruz</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Malatya'nın ekonomik kalkınmasına destek oluyoruz</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>Sürdürülebilir projeler geliştiriyoruz</span></li>
                        </ul>
                        <p>Platformumuz, Malatya'nın iş dünyasını bir araya getirerek, şehrimizin ekonomik ve sosyal gelişimine katkı sağlamayı hedeflemektedir. İş insanlarımızın deneyim ve bilgi birikimini paylaşarak, ortak projeler geliştirmeyi amaçlıyoruz.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Counter Section -->
    <section id="stats-counter" class="stats-counter section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Rakamlarla MAİP</h2>
            <p>Malatya İş İnsanları Platformu olarak büyümeye ve gelişmeye devam ediyoruz</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="row gy-4">
                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-emoji-smile color-blue flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Üye Sayısı</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-journal-richtext color-orange flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="25" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Tamamlanan Proje</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-headset color-green flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                            <p>İş Birliği Protokolü</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="stats-item d-flex align-items-center w-100 h-100">
                        <i class="bi bi-people color-pink flex-shrink-0"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="1000" data-purecounter-duration="1" class="purecounter"></span>
                            <p>İstihdam Sayısı</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alt Services Section -->
    <section id="alt-services" class="alt-services section">
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="features-image col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <img src="{{ asset('img/alt-services.jpg') }}" alt="">
                </div>

                <div class="col-lg-5 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
                    <h3>Hedeflerimiz ve Değerlerimiz</h3>
                    <p>Malatya İş İnsanları Platformu olarak şehrimizin ekonomik ve sosyal kalkınmasına katkı sağlamak için çalışıyoruz</p>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-easel flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">İş Birliği</a></h4>
                            <p>İş dünyasını bir araya getirerek güç birliği oluşturuyor, ortak projeler geliştiriyoruz</p>
                        </div>
                    </div>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-patch-check flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Sürdürülebilirlik</a></h4>
                            <p>Ekonomik ve sosyal kalkınmayı destekleyen sürdürülebilir projeler üretiyoruz</p>
                        </div>
                    </div>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="500">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">İnovasyon</a></h4>
                            <p>Yenilikçi fikirleri destekliyor, teknolojik gelişmeleri yakından takip ediyoruz</p>
                        </div>
                    </div>

                    <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="600">
                        <i class="bi bi-brightness-high flex-shrink-0"></i>
                        <div>
                            <h4><a href="" class="stretched-link">Sosyal Sorumluluk</a></h4>
                            <p>Toplumsal fayda sağlayan projelere öncelik veriyor, sosyal sorumluluk bilinci ile hareket ediyoruz</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Alt Services 2 Section -->
    <section id="alt-services-2" class="alt-services-2 section">
        <div class="container">
            <div class="row justify-content-around gy-4">
                <div class="col-lg-6 d-flex flex-column justify-content-center order-2 order-lg-1" data-aos="fade-up" data-aos-delay="100">
                    <h3>Çalışma Alanlarımız</h3>
                    <p>Malatya İş İnsanları Platformu olarak farklı sektörlerde faaliyet gösteriyor, şehrimizin ekonomisine çok yönlü katkı sağlıyoruz</p>

                    <div class="row">
                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4>Sanayi</h4>
                                <p>Üretim tesisleri ve sanayi yatırımları ile ekonomik büyümeye katkı sağlıyoruz</p>
                            </div>
                        </div>

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4>Tarım</h4>
                                <p>Modern tarım uygulamaları ve kayısı üretimi ile tarım sektörünü destekliyoruz</p>
                            </div>
                        </div>

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4>Teknoloji</h4>
                                <p>Teknoloji yatırımları ve dijital dönüşüm projeleri ile geleceğe hazırlanıyoruz</p>
                            </div>
                        </div>

                        <div class="col-lg-6 icon-box d-flex">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4>Hizmet</h4>
                                <p>Turizm, eğitim ve sağlık gibi hizmet sektörlerinde kaliteli hizmet sunuyoruz</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="features-image col-lg-5 order-1 order-lg-2" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('img/features-3-2.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="team section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Yönetim Kurulumuz</h2>
            <p>Malatya İş İnsanları Platformu'nun değerli yönetim kurulu üyeleri</p>
        </div>

        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-1.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Ahmet Yılmaz</h4>
                        <span>Yönetim Kurulu Başkanı</span>
                        <p>20 yıllık sanayi tecrübesi ile platformumuza liderlik yapıyor</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-2.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Ayşe Kaya</h4>
                        <span>Başkan Yardımcısı</span>
                        <p>Teknoloji ve inovasyon alanındaki projelerin öncüsü</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                    <div class="member-img">
                        <img src="{{ asset('img/team/team-3.jpg') }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="#"><i class="bi bi-twitter"></i></a>
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info text-center">
                        <h4>Mehmet Demir</h4>
                        <span>Genel Sekreter</span>
                        <p>Kurumsal ilişkiler ve stratejik ortaklıkların geliştirilmesinden sorumlu</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">
        <div class="container section-title" data-aos="fade-up">
            <h2>Üyelerimizin Görüşleri</h2>
            <p>MAİP üyelerinin platform hakkındaki değerlendirmeleri</p>
        </div>

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper">
                <script type="application/json" class="swiper-config">
                    {
                        "loop": true,
                        "speed": 600,
                        "autoplay": {
                            "delay": 5000
                        },
                        "slidesPerView": "auto",
                        "pagination": {
                            "el": ".swiper-pagination",
                            "type": "bullets",
                            "clickable": true
                        },
                        "breakpoints": {
                            "320": {
                                "slidesPerView": 1,
                                "spaceBetween": 40
                            },
                            "1200": {
                                "slidesPerView": 2,
                                "spaceBetween": 20
                            }
                        }
                    }
                </script>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                                <h3>Ali Öztürk</h3>
                                <h4>Sanayi Sektörü</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>MAİP sayesinde iş dünyasındaki diğer firmalarla güçlü bağlantılar kurduk ve yeni iş fırsatları yakaladık. Platform, Malatya'nın ekonomik gelişimi için çok değerli bir oluşum.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                                <h3>Fatma Şahin</h3>
                                <h4>Teknoloji Sektörü</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Platformun teknoloji ve inovasyon odaklı projeleri, şirketimizin dijital dönüşüm sürecinde büyük fayda sağladı. MAİP'in vizyoner yaklaşımı takdire şayan.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="testimonial-wrap">
                            <div class="testimonial-item">
                                <img src="{{ asset('img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                                <h3>Mustafa Aydın</h3>
                                <h4>Tarım Sektörü</h4>
                                <div class="stars">
                                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                                </div>
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>MAİP'in tarım sektöründeki yenilikçi projeleri ve eğitim programları sayesinde üretimimizi modernize ettik. Platform, şehrimizin tarım potansiyelini artırmada önemli rol oynuyor.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
</body>
@endsection

@section('scripts')
<!-- Vendor JS Files -->
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('vendor/aos/aos.js') }}"></script>
<script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>

<!-- Main JS File -->
<script src="{{ asset('js/main.js') }}"></script>
@endsection
