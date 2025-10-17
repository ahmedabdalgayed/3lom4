<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الرئيسية - مجتمع علوم عقارية</title>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Rubik', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            /* background-color: #fcf3e4; */
            background-color: #f7f1e5;
            /* color: #09404e; */
            color: #d4800e;
            line-height: 1.8;
        }

        /* naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaav */
        .navbar {
            position: fixed;
            /* ثابت */
            top: 0;
            left: 0;
            right: 0;
            z-index: 1100;
            width: 100%;
            background: #0d6efd;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 25px;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }


        /* ########################logim */
        /* زر تسجيل الدخول */
.login-btn {
  background: #fff;
  color: #0d6efd;
  padding: 6px 14px;
  border-radius: 8px;
  font-size: 15px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s ease;
  border: 1px solid transparent;
  display: flex;
  align-items: center;
  gap: 6px;
  font-family: 'Rubik', sans-serif;
}

/* الأيقونة (اختياري) */
.login-btn i {
  font-size: 16px;
}

/* عند المرور عليه */
.login-btn:hover {
  background: #0d6efd;
  color: #fff;
  border-color: #fff;
  box-shadow: 0 0 10px rgba(13, 110, 253, 0.3);
  transform: translateY(-2px);
}

/* في الموبايل */
@media (max-width: 768px) {
  .login-btn {
display: none;
  }
}

        /* ########################logim */

        .nav-links {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color .3s;
            
        }

        .nav-links a:hover {
            color: #d1d1d1;
 
        }


/* زر المزيد */
.more-btn {
  display: none; /* افتراضيًا مختفي في الكمبيوتر */
  align-items: center;
  gap: 8px;
  background: #fff;
  color: #0d6efd;
  padding: 6px 12px;
  border-radius: 6px;
  font-size: 14px;
  cursor: pointer;
  font-weight: bold;
}

.more-btn:hover {
  background: #f1f1f1;
}

.menu-icon {
  font-size: 20px;
}

        /* السايدبار يطلع من الشمال */
        .sidebar {
            position: fixed;
            top: 0;
            left: -260px;
            /* ← بدل right */
            width: 250px;
            height: 100%;
            background: #0d6efd;
            color: #fff;
            padding: 20px;
            transition: left .4s ease;
            /* ← بدل right */
            z-index: 1200;
            box-shadow: 2px 0 10px rgba(0, 0, 0, .2);
        }

        .sidebar.active {
            left: 0;
        }

        /* ← بدل right:0 */
        .sidebar h3 {
            margin-bottom: 20px;
        }

        .sidebar a {
            display: block;
            margin: 12px 0;
            color: #fff;
            text-decoration: none;
            font-size: 16px;
            transition: color .3s;
        }

        .sidebar a:hover {
            color: #d1d1d1;
        }

        .close-btn {
            background: none;
            border: none;
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            margin-bottom: 20px
        }

        /* Overlay لتعتيم الخلفية وإلتقاط الضغطات */
        .overlay {
            position: fixed;
            inset: 0;
            background: rgba(0, 0, 0, .35);
            opacity: 0;
            pointer-events: none;
            transition: opacity .3s ease;
            z-index: 1150;
        }

        .overlay.show {
            opacity: 1;
            pointer-events: auto;
        }

        /* رسبونسف */
/* في وضع الموبايل */
@media (max-width: 768px) {
  .nav-links a {
    display: none; /* اخفي كل اللينكات */
  }
  .more-btn {
    display: flex; /* أظهر زر "اضغط للمزيد" */
  }
}

/* في وضع الكمبيوتر */
@media (min-width: 769px) {
  .nav-links a {
    display: inline; /* أظهر كل اللينكات */
  }
  .more-btn {
    display: none; /* اخفي زر المزيد */
  }
}


        /* naaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaav */
 
  





        header {
            /* background: url('https://images.unsplash.com/photo-1582407947304-fd86f028f716?q=80&w=1296&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') center/cover no-repeat; */
            background: url('https://watermark.lovepik.com/photo/20211130/large/lovepik-midday-singapore-east-coast-picture_501283041.jpg') center/cover no-repeat;
            height: 80vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
            padding: 20px;
        }
        header #linkes-hed {
            display: flex;
            flex-direction: row;
            gap: 20px;
        }
        header #linkes-hed #linkes-hed-2 {
            background-color: #f7f1e5;
        }
header #linkes-hed #linkes-hed-2:hover {
    background-color: #ffffffff;
}
        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
            max-width: 600px;
            margin-bottom: 20px;
        }

        header a {
            background-color: #e4b467;
            color: #09404e;
            padding: 12px 30px;
            border-radius: 25px;
            font-weight: bold;
            text-decoration: none;
            transition: background 0.3s;
        }

        header a:hover {
            background-color: #d29c50;
        }

        section {
            padding: 60px 20px;
            max-width: 1100px;
            margin: auto;
        }

        h2 {
            text-align: center;
            /* color: #09404e; */
            color: #d4800e;
            margin-bottom: 40px;
        }

        .benefits {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .benefit {
            background: white;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s;
        }

        .benefit:hover {
            transform: translateY(-5px);
        }

        .events,
        .offers,
        .partners {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            width: 300px;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
        }

        .partners img {
            width: 120px;
            filter: grayscale(100%);
            opacity: 0.7;
            transition: 0.3s;
        }

        .partners img:hover {
            filter: none;
            opacity: 1;
        }




.values-section {
  text-align: center;
  padding: 60px 20px;
  background: #f7f1e5;
  font-family: "Cairo", sans-serif;
  direction: rtl;
}

.section-title {
  font-size: 1.8rem;
  color: #222;
  margin-bottom: 50px;
  font-weight: 700;
}

.cardse-container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
  gap: 25px;
  max-width: 1000px;
  margin: 0 auto;
}

.carde {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  padding: 25px;
  transition: 0.3s ease;
}

.carde:hover {
  transform: translateY(-6px);
  box-shadow: 0 6px 20px rgba(0,0,0,0.15);
}

.icon {
  font-size: 2.5rem;
  margin-bottom: 10px;
}

.carde h3 {
  color: #333;
  font-size: 1.3rem;
  margin-bottom: 8px;
}

.carde p {
  color: #666;
  font-size: 0.95rem;
  line-height: 1.6;
}














 .opinions-section {
  background: #f7f1e5;
  padding: 60px 20px;
  text-align: center;
  direction: rtl;
  font-family: "Cairo", sans-serif;
}

.section-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 40px;
}

.swiper {
  max-width: 900px;
  margin: auto;
  padding-bottom: 50px;
}

.opinion-card {
  background: #fff;
  border: 1.5px solid #ddd;
  border-radius: 18px;
  padding: 25px 20px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  transition: 0.3s ease;
  max-width: 500px;
  margin: 0 auto;
}

.opinion-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 4px 18px rgba(0,0,0,0.1);
}

.quote {
  font-style: italic;
  color: #444;
  font-size: 1rem;
  margin-bottom: 20px;
  line-height: 1.7;
}

.person-info h4 {
  margin: 0;
  color: #111;
  font-size: 1.1rem;
  font-weight: 600;
}

.person-info span {
  color: #777;
  font-size: 0.9rem;
}

/* أزرار السلايدر */
.swiper-button-next,
.swiper-button-prev {
  color: #222;
}

.swiper-pagination-bullet {
  background: #666;
}











 











.stats-section {
  background: #f7f1e5;
  padding: 70px 20px;
  text-align: center;
  direction: rtl;
  font-family: "Cairo", sans-serif;
}

.section-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 40px;
}

.stats-container {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 60px;
  flex-wrap: wrap;
}

.stat-box {
  background: #f9f9f9;
  border-radius: 18px;
  padding: 25px 40px;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  min-width: 200px;
  transition: 0.3s ease;
}

.stat-box:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 18px rgba(0,0,0,0.1);
}

.number {
  font-size: 2.8rem;
  font-weight: 700;
  color: #111;
}

.plus {
  font-size: 1.8rem;
  font-weight: 600;
  color: #444;
  margin-right: 5px;
}

.stat-box p {
  margin-top: 10px;
  font-size: 1rem;
  color: #555;
}


















.members-section {
  background: #f7f1e5;
  padding: 60px 20px;
  direction: rtl;
  text-align: center;
  font-family: "Cairo", sans-serif;
}

.section-title {
  font-size: 1.8rem;
  font-weight: 700;
  color: #222;
  margin-bottom: 40px;
}

.members-marquee {
  overflow: hidden;
  position: relative;
  width: 100%;
}

.members-track {
  display: flex;
  width: calc(200%); /* عشان نكرر المحتوى */
  animation: scrollMembers 20s linear infinite;
}

.member-item {
  flex: 0 0 auto;
  margin: 0 30px;
}

.member-item img {
  max-height: 80px;
  opacity: 0.8;
  transition: opacity 0.3s ease;
}

.member-item img:hover {
  opacity: 1;
}

/* الحركة من اليمين لليسار */
@keyframes scrollMembers {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-50%);
  }
}






















  footer {
      background-color: #09404e;
      color: white;
      padding: 40px 20px;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
 
    }

    .footer-section {
      flex: 1;
      min-width: 250px;
      margin: 10px;
    }

    #footer-linkes {
       text-align: center; 
    }

    .footer-section h3 {
        /* text-align: center; */
      color: #e4b467;
      margin-bottom: 10px;
    }

    .footer-links a {
        text-align: center;
        justify-content: center;
        align-items: center;
      color: #e4b467;
      text-decoration: none;
      margin: 0 10px;
      display: inline-block;
    }

    .footer-links a:hover {
      text-decoration: underline;
    }

    .social-icons {
        text-align: center;
      margin-top: 15px;
    }

    .social-icons a {
        text-align: center;
      color: white;
      margin-left: 10px;
      font-size: 20px;
      transition: 0.3s;
    }

    .social-icons a:hover {
      color: #e4b467;
      transform: scale(1.1);
    }

    .footer-bottom {
      text-align: center;
      border-top: 1px solid rgba(255, 255, 255, 0.2);
      padding-top: 15px;
      margin-top: 20px;
      width: 100%;
    }

    footer a {
        text-align: center;
      text-decoration: none;
    }

        @media(max-width: 600px) {
            header h1 {
                font-size: 2rem;
            }
        }

        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease, transform 0.8s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }


/* تأثير تكبير بسيط على الأزرار اللي ليها خلفية */
a.button,
header a,
section a[style*="background"],
.login-btn,
  {
  display: inline-block;
  transition: transform 0.25s ease;
}

a.button:hover,
header a:hover,
section a[style*="background"]:hover,
.login-btn:hover,
  {
  transform: scale(1.08);
}



    </style>
</head>

<body>
    <nav class="navbar">
        <div class="brand">عُلوم عقارية</div>
        
<?php if (!isset($_SESSION['logged_in'])): ?>
  <a href="signup.php" class="login-btn">
    <i class="fa fa-user"></i>
  </a>
<?php endif; ?>



        <div class="nav-links">
        <a href="index.html">الرئيسية</a>
        <a href="Aodweya.html">عضوية علوم عقارية</a>
        <a href="commuinty.html">مجتمع Whatsapp</a>
        <a href="family.html">أهل عُلوم عقارية</a>
        <a href="SharQatna.html">شركاؤنا</a>
        <a href="3orod.html">المزايا الإضافية</a>
        <a target="_blank" href="https://alwmaqaryh.zid.store/blogs/%D9%85%D8%AA%D8%AC%D8%B1-%D8%B9%D9%84%D9%88%D9%85-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9">المتجر</a>
<div class="more-btn" id="moreBtn">
        <a href="forasAmal.html">فرص العمل</a>
        <a href="seyasat.html">السياسات</a>
  <span class="menu-icon">☰</span>
</div>

        </div>
    </nav>

    <!-- سايد بار (من الشمال) -->
    <aside class="sidebar" id="sidebar">
        <button class="close-btn" id="closeSidebarBtn">×</button>
        <h3>القائمة</h3>
        <div class="nav-links">
        <a href="index.html">الرئيسية</a>
        <a href="Aodweya.html">عضوية علوم عقارية</a>
        <a href="commuinty.html">مجتمع Whatsapp</a>
        <a href="family.html">أهل عُلوم عقارية</a>
        <a href="SharQatna.html">شركاؤنا</a>
        <a href="3orod.html">المزايا الإضافية</a>
        <a target="_blank" href="https://alwmaqaryh.zid.store/blogs/%D9%85%D8%AA%D8%AC%D8%B1-%D8%B9%D9%84%D9%88%D9%85-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9">المتجر</a>
<div class="more-btn" id="moreBtn">
        <a href="forasAmal.html">فرص العمل</a>
        <a href="seyasat.html">السياسات</a>
    </aside>

    <!-- Overlay -->
    <div class="overlay" id="overlay"></div>

    <header>
        <h1 class="fade-in">مجتمع عُلوم عقارية</h1>
        <p class="fade-in">علاقات + معلومات = فرص</p>
        <div id="linkes-hed">
         <a href="https://alwmaqaryh.zid.store/blogs/%D9%85%D8%AA%D8%AC%D8%B1-%D8%B9%D9%84%D9%88%D9%85-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9" target="_blank" class="fade-in">أعرف المزيد</a>
         <a id="linkes-hed-2" href="https://alwmaqaryh.zid.store/blogs/%D9%85%D8%AA%D8%AC%D8%B1-%D8%B9%D9%84%D9%88%D9%85-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9" target="_blank" class="fade-in">اشترك</a>
        </div>
    </header>

    <section id="membership">
        <h2 class="fade-in">لكل من يصنع أثرا قي العثار</h2>
        <p class="fade-in" style="text-align:center; max-width:700px; margin:auto;"></p>
        <div style="text-align:center; margin-top:20px;">
            <a href="https://alwmaqaryh.zid.store/blogs/%D9%85%D8%AA%D8%AC%D8%B1-%D8%B9%D9%84%D9%88%D9%85-%D8%B9%D9%82%D8%A7%D8%B1%D9%8A%D8%A9" target="_blank"
                style="background:#e4b467; color:#09404e; padding:12px 30px; border-radius:25px; font-weight:bold; text-decoration:none;">ابدأ
                الآن</a>
        </div>
    </section>

    <!-- <section>
        <h2 class="fade-in">شبكة عقارية منظمة تمنحك العلاقات، المعرفة، وتولّد الفرص</h2>
        <div class="benefits">
            <div class="benefit fade-in">الوصول إلى الفعاليات  </div>
            <div class="benefit fade-in">الحصول على عروض حصرية</div>
            <div class="benefit fade-in">التواصل مع خبراء القطاع</div>
            <div class="benefit fade-in">فرص شراكات وعمل</div>
        </div>
    </section> -->

    <section class="values-section">
  <h2 class="section-title">شبكة عقارية منظمة تمنحك العلاقات، المعرفة، وتولّد الفرص.</h2>

  <div class="cardse-container">

    <div class="carde">
      <div class="icon"><i class="fa-solid fa-book"></i></div>
      <h3>تبادل المعرفة</h3>
      <p>بيئة موثوقة تجمع الخبرات لتبادل المعلومة بثقة ووضوح.</p>
    </div>

    <div class="carde">
      <div class="icon"><i class="fa-solid fa-compass"></i></div>
      <h3>تطوير المهنة</h3>
      <p>نسهم معًا في رفع الوعي وتحسين جودة العمل العقاري.</p>
    </div>

    <div class="carde">
<div class="icon"><i class="fa-solid fa-handshake"></i></div>
      <h3>بناء العلاقات</h3>
      <p>نُهيّئ فضاءً يجمع المرخصين والمهتمين لتكوين روابط مهنية فاعلة.</p>
    </div>

    <div class="carde">
<div class="icon"><i class="fa-solid fa-rocket"></i></div>
      <h3>توليد الفرص</h3>
      <p>من المعرفة إلى الاستثمار… نُسرّع التداول ونصنع فرصًا جديدة.</p>
    </div>

  </div>
</section>









<section class="opinions-section">
  <h2 class="section-title">آراء حول المجتمع</h2>

  <!-- ✅ سلايدر Swiper -->
  <div class="swiper opinions-swiper">
    <div class="swiper-wrapper">

      <!-- كارت 1 -->
      <div class="swiper-slide opinion-card">
        <p class="quote">"مجتمع منظم فعلاً… حسّيت لأول مرة إن فيه ناس بتشارك نفس الاهتمام والهدف!"</p>
        <div class="person-info">
          <h4>أحمد الجبالي</h4>
          <span>مستشار تسويق عقاري</span>
        </div>
      </div>

      <!-- كارت 2 -->
      <div class="swiper-slide opinion-card">
        <p class="quote">"منصة قوية بتفتح فرص وتوصّلك بناس حقيقيين في المجال العقاري."</p>
        <div class="person-info">
          <h4>سارة الديب</h4>
          <span>مستثمرة عقارية</span>
        </div>
      </div>

      <!-- كارت 3 -->
      <div class="swiper-slide opinion-card">
        <p class="quote">"فريق محترم وهدف واضح، استفدت من النقاشات والمعرفة المتبادلة."</p>
        <div class="person-info">
          <h4>محمد فؤاد</h4>
          <span>مالك مكتب تسويق عقاري</span>
        </div>
      </div>

    </div>

    <!-- ✅ أزرار التحكم -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>

    <!-- ✅ النقاط (Pagination) -->
    <div class="swiper-pagination"></div>
  </div>
</section>


























<section class="stats-section" id="stats">
  <h2 class="section-title">إحصاءات مجتمعنا</h2>

  <div class="stats-container">
    <div class="stat-box">
      <span class="number" data-target="170">0</span><span class="plus">+</span>
      <p>عضو مرخّص</p>
    </div>

    <div class="stat-box">
      <span class="number" data-target="150">0</span><span class="plus">+</span>
      <p>استفسار أجاب عنه الأعضاء</p>
    </div>
  </div>
</section>



















<section class="members-section">
  <h2 class="section-title">من أبرز عضويات المجتمع</h2>

  <div class="members-marquee">
    <div class="members-track">
      <!-- كل صورة تكون داخل عنصر -->
      <div class="member-item">
        <img src="1.jpg" alt="عضو 1">
      </div>
      <div class="member-item">
        <img src="2.jpg" alt="عضو 2">
      </div>
      <div class="member-item">
        <img src="3.png" alt="عضو 3">
      </div>
      <div class="member-item">
        <img src="5.png" alt="عضو 4">
      </div>
      <div class="member-item">
        <img src="9.jpg" alt="عضو 5">
      </div>

      <!-- كرر العناصر لتكميل العرض المستمر -->
      <div class="member-item">
        <img src="https://via.placeholder.com/150x80?text=Logo1" alt="عضو 1">
      </div>
      <div class="member-item">
        <img src="https://via.placeholder.com/150x80?text=Logo2" alt="عضو 2">
      </div>
      <!-- وهكذا… -->
    </div>
  </div>
</section>




























<section class="join-now py-16 bg-gradient-to-r from-blue-50 to-blue-100 text-center">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">انضم الآن إلى مجتمعنا</h2>
    <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
      كن جزءًا من مجتمع يضم نخبة من المتخصصين في المجال العقاري، تبادل الخبرات، وشارك في بناء مستقبل أفضل للقطاع.
    </p>

    <a id="bootom" href="#">انضم الآن</a>
  </div>

  <!-- تأثير بسيط للحركة -->
  <div class="mt-12 flex justify-center space-x-4 animate-pulse">
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
  </div>
</section>

<style>
  #bootom {
    display: inline-block;
    background: #e4b467;
    color: #09404e;
    padding: 12px 30px;
    border-radius: 25px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
    margin: 0 auto;
  }

  /* عشان يتوسطن فعليًا */
  .join-now #bootom {
    display: flex;
    justify-content: center;
    align-items: center;
    width: fit-content;
    margin: 0 auto;
   margin-top : 15px;
  }

  #bootom:hover {
    opacity: 0.9;
  }
</style>

























<!-- <section class="join-now py-16 bg-gradient-to-r from-blue-50 to-blue-100 text-center">
  <div class="container mx-auto px-6">
    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-6">انضم الآن إلى مجتمعنا</h2>
    <p class="text-gray-600 text-lg max-w-2xl mx-auto mb-8">
      كن جزءًا من مجتمع يضم نخبة من المتخصصين في المجال العقاري، تبادل الخبرات، وشارك في بناء مستقبل أفضل للقطاع.
    </p>
    <a id="bootom" href="#"
        style="dispaly: flex ; align-items: center; justify-content: center;
      text-align: center; ;background:#e4b467; color:#09404e; padding:12px 30px; border-radius:25px; font-weight:bold; text-decoration:none;">
      انضم الآن
    </a>
  </div> -->

  <!-- تأثير بسيط للحركة -->
  <!-- <div class="mt-12 flex justify-center space-x-4 animate-pulse">
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
    <div class="w-3 h-3 bg-blue-600 rounded-full"></div>
  </div>
</section> -->



















































<!-- 
    <section>
        <h2 class="fade-in">آخر الفعاليات</h2>
        <div class="events">
            <div class="card fade-in">
                <img src="https://images.unsplash.com/photo-1523217582562-09d0def993a6?auto=format&fit=crop&w=800&q=80"
                    alt="">
                <div class="card-body">فعالية عقارية 2025</div>
            </div>
            <div class="card fade-in">
                <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=800&q=80"
                    alt="">
                <div class="card-body">ملتقى الاستثمار العقاري</div>
            </div>
        </div>
        <div style="text-align:center; margin-top:20px;">
            <a href="#"
                style="background:#e4b467; color:#09404e; padding:12px 30px; border-radius:25px; font-weight:bold; text-decoration:none;">شاهد
                جميع الفعاليات</a>
        </div>
    </section> -->

    <!-- <section>
        <h2 class="fade-in">العروض الخاصة</h2>
        <div class="offers">
            <div class="card fade-in">
                <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&w=800&q=80"
                    alt="">
                <div class="card-body">خصم 20% على العقارات السكنية</div>
            </div>
        </div>
    </section> -->

    <section>
        <h2 class="fade-in">شركاؤنا</h2>
        <div class="partners">
            <img class="fade-in" src="https://upload.wikimedia.org/wikipedia/commons/a/a6/Logo_NIKE.svg" alt="">
            <img class="fade-in" src="https://upload.wikimedia.org/wikipedia/commons/4/44/Microsoft_logo.svg" alt="">
        </div>
    </section>

    <section>
        <h2 class="fade-in">انضم لفريق العمل</h2>
        <p class="fade-in" style="text-align:center; max-width:700px; margin:auto;">شغوف بالتحدي؟ شاركنا.</p>
        <div style="text-align:center; margin-top:20px;">
            <a href="#"
                style="background:#e4b467; color:#09404e; padding:12px 30px; border-radius:25px; font-weight:bold; text-decoration:none;">أنضم إلينا</a>
        </div>
    </section>

  <footer>
    <!-- قسم قصتنا -->
    <div class="footer-section">
      <h3>قصتنا:</h3>
      <p>
        لم ننتظر أن تصلنا المعلومة… صنعنا لها مجتمعًا! <br> 
        بدأت عُلوم عقارية في شوال 1445هـ بجمع المرخصين والعلاقات المتفرقة في مكان واحد لتبادل الخبرة والمعرفة بثقة. 
        تحولت الفكرة إلى مجتمع منظم يسعى لتوليد الفرص وتعزيز الاستثمار، حيث تُصنع المعلومة وتُبنى العلاقات وتُفتح الأبواب.
      </p>
    </div>

    <!-- قسم الروابط والسوشيال -->
    <div class="footer-section">
      <h3 id="footer-linkes">روابط هامة:</h3>
      <div id="footer-linkes" class="footer-links">
        <a href="#" target="_blank">السياسات</a> |
        <a href="#" target="_blank">الأسئلة الشائعة</a>
      </div>

      <div class="social-icons">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-x-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
      </div>
    </div>

    <!-- القسم السفلي -->
    <div class="footer-bottom">
      <p>© 2025 جميع الحقوق محفوظة لمجتمع علوم عقارية</p>
    </div>
  </footer>

    <script>
        // navvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv
        const sidebar = document.getElementById('sidebar');
        const overlay = document.getElementById('overlay');
        const moreBtn = document.getElementById('moreBtn');
        const closeBtn = document.getElementById('closeSidebarBtn');

        function openSidebar() {
            sidebar.classList.add('active');
            overlay.classList.add('show');
        }
        function closeSidebar() {
            sidebar.classList.remove('active');
            overlay.classList.remove('show');
        }
        function toggleSidebar() {
            sidebar.classList.contains('active') ? closeSidebar() : openSidebar();
        }

        // فتح وإغلاق
        moreBtn.addEventListener('click', (e) => { e.stopPropagation(); toggleSidebar(); });
        closeBtn.addEventListener('click', (e) => { e.stopPropagation(); closeSidebar(); });

        // إغلاق عند الضغط على أي مكان في الشاشة
        overlay.addEventListener('click', closeSidebar);
        document.addEventListener('click', (e) => {
            if (sidebar.classList.contains('active')
                && !sidebar.contains(e.target)
                && e.target !== moreBtn
                && !moreBtn.contains(e.target)) {
                closeSidebar();
            }
        });
        // منع الإغلاق أثناء الضغط داخل السايدبار
        sidebar.addEventListener('click', (e) => e.stopPropagation());
        // إغلاق بـ Escape
        document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeSidebar(); });
        // navvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv

        const faders = document.querySelectorAll('.fade-in');
        const appearOptions = {
            threshold: 0.2,
            rootMargin: "0px 0px -50px 0px"
        };
        const appearOnScroll = new IntersectionObserver(function (entries, observer) {
            entries.forEach(entry => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            });
        }, appearOptions);
        faders.forEach(fader => {
            appearOnScroll.observe(fader);
        });






        const swiper = new Swiper('.opinions-swiper', {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
    },
  });












// ✅ تشغيل العداد لما العنصر يظهر في الشاشة
const counters = document.querySelectorAll('.number');
let started = false;

function startCounting() {
  if (started) return;
  const section = document.querySelector('#stats');
  const sectionTop = section.getBoundingClientRect().top;
  const triggerHeight = window.innerHeight * 0.8;

  if (sectionTop < triggerHeight) {
    started = true;
    counters.forEach(counter => {
      const target = +counter.getAttribute('data-target');
      const duration = 8000; // مدة العد (2 ثانية)
      const step = target / (duration / 16);

      let count = 0;
      const update = () => {
        count += step;
        if (count < target) {
          counter.textContent = Math.floor(count);
          requestAnimationFrame(update);
        } else {
          counter.textContent = target;
        }
      };
      update();
    });
  }
}

window.addEventListener('scroll', startCounting);














    </script>
</body>

</html>