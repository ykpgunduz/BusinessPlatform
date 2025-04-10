<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Malatya Yeşilyurt Spor Haberi - MIAP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #1a237e;
            --secondary-color: #0d47a1;
            --accent-color: #ff6b6b;
            --text-color: #2c3e50;
            --light-bg: #f8f9fa;
        }

        body {
            background-color: var(--light-bg);
            font-family: 'Poppins', sans-serif;
            color: var(--text-color);
            line-height: 1.6;
        }

        .top-header {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 1.5rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
            margin-bottom: 2rem;
        }

        .top-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="rgba(255,255,255,0.05)" points="0,100 100,0 100,100"/></svg>');
            background-size: cover;
        }

        .top-header h1 {
            font-size: 2.2rem;
            font-weight: 700;
            margin: 0;
            position: relative;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .top-header h1 .miap-logo {
            font-size: 2.5rem;
            letter-spacing: 2px;
        }

        .top-header h1 .miap-text {
            font-size: 1.8rem;
            font-weight: 500;
        }

        .top-header p {
            font-size: 1.2rem;
            opacity: 0.9;
            margin: 0.5rem 0 0;
            position: relative;
        }

        .news-container {
            max-width: 1200px;
            margin: 3rem auto;
            padding: 2.5rem;
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            position: relative;
            overflow: hidden;
        }

        .news-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
        }

        .news-header {
            text-align: center;
            margin-bottom: 3rem;
            padding-bottom: 2rem;
            border-bottom: 2px solid #e9ecef;
            position: relative;
        }

        .news-header h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 1rem;
            line-height: 1.3;
        }

        .news-date {
            color: #6c757d;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .news-image {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
            border-radius: 15px;
            margin: 2.5rem auto;
            display: block;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }

        .news-image:hover {
            transform: scale(1.02);
        }

        @media (min-width: 992px) {
            .news-image {
                width: 80%;
            }
        }

        .news-content {
            font-size: 1.1rem;
            color: var(--text-color);
            line-height: 1.8;
        }

        .news-content p {
            margin-bottom: 1.5rem;
            text-align: justify;
        }

        .miap-banner {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 3rem;
            text-align: center;
            margin-top: 4rem;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }

        .miap-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><polygon fill="rgba(255,255,255,0.05)" points="0,100 100,0 100,100"/></svg>');
            background-size: cover;
        }

        .miap-banner h2 {
            font-size: 2.8rem;
            margin-bottom: 1.5rem;
            font-weight: 700;
            position: relative;
        }

        .miap-banner p {
            font-size: 1.3rem;
            opacity: 0.9;
            position: relative;
        }

        .social-share {
            display: flex;
            justify-content: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-share a {
            color: white;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .social-share a:hover {
            transform: translateY(-3px);
        }

        .news-source {
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid #e9ecef;
            text-align: right;
            font-size: 0.9rem;
            color: #6c757d;
        }

        .news-source a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .news-source a:hover {
            color: var(--secondary-color);
        }

        @media (max-width: 768px) {
            .top-header h1 {
                font-size: 1.8rem;
            }

            .top-header h1 .miap-logo {
                font-size: 2rem;
            }

            .top-header h1 .miap-text {
                font-size: 1.4rem;
            }

            .top-header p {
                font-size: 1rem;
            }

            .news-container {
                margin: 1rem;
                padding: 1.5rem;
            }

            .news-header h1 {
                font-size: 1.8rem;
            }

            .miap-banner h2 {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <header class="top-header">
        <h1>
            <span class="miap-logo">MİAP</span>
            <span class="miap-text">Malatya İş İnsanları Platformu</span>
        </h1>
        <p>Çok Yakında Hizmetinizde...</p>
    </header>

    <div class="news-container">
        <div class="news-header">
            <h1>Özköse: Malatya Yeşilyurt Spor Kulübünün şampiyonluğa giden yolunda yanındayız!</h1>
            <p class="news-date">
                <i class="far fa-calendar-alt"></i>
                09.04.2025 - 17:06 | Son Güncelleme: 09.04.2025 - 17:06
            </p>
        </div>

        <img src="https://image.dha.com.tr/i/dha/75/0x410/67f67e6c204de30e931c1157.jpg" alt="Malatya Yeşilyurt Spor" class="news-image">

        <div class="news-content">
            <p>Bölgesel Amatör Lig'de (BAL) şampiyonluk mücadelesi veren Yeşilyurt Spor Kulübü, Malatya'nın futbol için yeni umudu oldu.</p>

            <p>Bir zamanlar Süper Lig'de mücadele eden ancak yaşanan deprem felaketi sonrası o sezon ligde mücadelesini sürdüremeyen, sonraki sezon ise maçlara çıkamayarak küme düşen Yeni Malatyaspor, Malatya'daki futbolseverleri üzerken, Bölgesel Amatör Lig'de (BAL) şampiyonluk mücadelesi veren Malatya Yeşilyurt Spor Kulübü profesyonel lige çıkma hedefinde.</p>

            <p>Bölgesel Amatör Lig 3. grupta lider bulunan Yeşilyurt Spor Kulübü, Siverek Belediyespor'un 4 puan önünde yer alıyor. 2 maç fazlası bulunan Yeşilyurt Spor Kulübü rakibinin puan kaybını beklerken TFF tarafından Siverek Belediyespor'a verilen 3-0 hükmen yenilgi kararı Tahkim Kurulu'na taşındı.</p>

            <p>Malatya İş İnsanları Platformu (MAİP) Genel Başkanı Ahmet Özköse bir açıklama yaparak şehrin futbol takımlarını desteklediklerini söyledi.</p>

            <p>Özköse şu açıklamayı yaptı: "Bu karar Malatyalıları hayal kırıklığına uğratmış, derinden üzmüştür. Aynı zamanda alınan bu karar şampiyon olacak takımı ve diğer kulüplerin akıbetini belirlemektedir. Malatya İş İnsanları Platformu (MAİP) olarak Malatya'mızın ve spor kulüplerimizin her platformda hakkını, hukukunu savunacağımızı her daim yanında olacağımızı, Bölgesel Amatör Lig'de (BAL) şampiyonluk mücadelesi veren Yeşilyurt Spor Kulübü'nü desteklediğimizi, ilimizde tüm futbol kulüplerimizin kalkınması yolunda üzerimize düşen sorumluluk ve aidiyet duygusunun, hukuk çerçevesi içerisinde yürütülmesi konusunda savunucusu olacağımızı bildiririz."</p>

            <div class="news-source">
                <p>Bu haber <a href="https://www.dha.com.tr" target="_blank" rel="noopener noreferrer">Demirören Haber Ajansı (DHA)</a> tarafından hazırlanmıştır.</p>
            </div>
        </div>

        <div class="miap-banner">
            <h2>MİAP Çok Yakında Hizmetinizde!</h2>
            <p>Malatya İş İnsanları Platformu olarak, şehrimizin ve spor kulüplerimizin her zaman yanındayız.</p>
            <div class="social-share">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
