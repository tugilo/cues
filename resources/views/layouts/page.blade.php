<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')｜キューズプラスのオリジナル オンラインショップ（プルデンシャル様専用）</title>
  <meta name="description" content="プルデンシャル生命保険株式会社様 専用 オリジナル オンラインショップ">
  <meta name="keywords" content="">
  <meta property="og:title" content="キューズプラス">
  <meta property="og:type" content="website">
  <meta property="og:url" content="">
  <meta property="og:image" content="/assets/images/og.png">
  <meta property="og:site_name" content="キューズプラス">
  <meta property="og:description" content="">
  <link rel="shortcut icon" href="/assets/images/favicon.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link href="/assets/dist/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome Solid + Brands -->
  <link href="/assets/icons/fontawesome/css/fontawesome.min.css" rel="stylesheet">
  <link href="/assets/icons/fontawesome/css/brands.min.css" rel="stylesheet">
  <link href="/assets/icons/fontawesome/css/solid.min.css" rel="stylesheet">

<!--[if IE 9]>
  <link rel="stylesheet" href="/assets/dist/bootstrap/css/bootstrap-ie9.min.css">
<![endif]-->
<!--[if lte IE 8]>
  <link rel="stylesheet" href="/assets/dist/bootstrap/css/bootstrap-ie8.min.css">
  <script src="/assets/dist/html5shiv.min.js"></script>
  <script src="/assets/dist/respond.min.js"></script>
<![endif]-->

  <!-- Custom styles -->
  <link href="/assets/css/style.css" rel="stylesheet">
  <link href="/assets/css/custom.css" rel="stylesheet">
  @yield('css')

</head>
<body id="top" class="page">
<div class="site">
  <header id="header" class="header px-3" role="banner">
    <div class="d-flex flex-row justify-content-between align-items-center">
      <div class="blank-space"></div>
      <div class="site-description">
        <div class="logo">
          <a href="/home" rel="home">
            <img class="img-fluid" src="/assets/images/cues-logo.png" alt="CUES PLUS">
          </a>
        </div>
        <h1 class="text-center"><img class="img-fluid" src="/assets/images/site-description.png" alt="プルデンシャル生命保険株式会社様 専用 オンラインショップ"></h1>
      </div>
      <div class="pl-4">
          <a href="/cart/add" class="btn btn-dark d-lg-inline-block px-4 text-white mx-1 mt-2"><span><i class="fas fa-shopping-cart"></i></span></a>
          <a href="/home" class="btn btn-dark mx-1 mt-2">HOME</a>
        <!--a href="/cart/add" class="btn btn-dark px-3 mx-1 my-2 my-sm-0"><i class="fas fa-shopping-cart"></i></a-->
      </div>
    </div>
  </header>
      <main id="main" class="main wide" role="main">

          @yield('content')
      </main>
      <aside class="page-nav mt-5">
        <div class="page-nav-content">
          <div class="container">
            <ul class="nav justify-content-center flex-column flex-lg-row">
              <li class="nav-item">
                <a class="nav-link" href="/home">ONLINESHOP＜TOP＞</a>
              </li>
              <!--li class="nav-item">
                <a class="nav-link" href="#">CONTACT</a>
            </li-->
              <li class="nav-item">
                <a class="nav-link" href="/mypage">MYPAGE</a>
              </li>
            </ul>
          </div> <!-- .container -->
        </div>
      </aside>
      <!-- n:page-nav -->
      <footer id="footer" class="footer py-4" role="contentinfo">
        <div class="footer-nav-content">
          <div class="container">
            <div class="logo">
              <a href="#" rel="home">
                <img class="img-fluid" src="/assets/images/logo-white.png" alt="CUES PLUS">
              </a>
            </div>
            <p class="name">株式会社キューズプラス</p>
            <p class="address">〒530-0047　<br class="d-block d-sm-none">大阪市北区西天満2丁目6-8　堂島ビルヂング6F</p>
            <p class="tel">TEL：<a href="tel:06-6131-0275">06-6131-0275</a></p>
            <div class="copyright">
              <p>Copyright &copy; CUES PLUS Co.ltd., All Rights Reserved.</p>
            </div>
          </div> <!-- .container -->
        </div>
      </footer>
    </div> <!-- //.site -->
    <!-- JavaScript
    ============================================================================================== -->
    <!--[if gte IE 9]><!-->
      <script src="/assets/dist/jquery/js/jquery.min.js"></script>
      <script src="/assets/dist/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--<![endif]-->
    <!--[if IE 9]>
      <script src="/assets/dist/bootstrap/js/bootstrap-ie9.min.js"></script>
    <![endif]-->
    <!--[if lte IE 8]>
      <script src="/assets/dist/jquery/js/jquery-1.12.4.min.js"></script>
      <script src="/assets/dist/bootstrap/js/bootstrap-ie8.min.js"></script>
      <script src="/assets/dist/bootstrap/js/bootstrap.js"></script>
    <![endif]-->

      <!-- JavaScript Setting -->
      <script src="/assets/dist/bootstrap/js/bootstrap-input-spinner.js"></script>
      <script src="/assets/js/setting.js"></script>
    @yield('js')
</body>

</html>
