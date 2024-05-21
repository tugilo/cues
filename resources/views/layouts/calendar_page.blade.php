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
<body id="top" class="home">
    <div class="site">
      <header id="header" class="header-web-layout" role="banner">
        <div class="header-content">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light flex-lg-column w-100 align-items-center px-0">
              <div class="topbar d-flex flex-row w-100 justify-content-between align-items-center">
                <h1 class="my-3">
                  <a class="navbar-brand" href="/home">
                    <img class="img-fluid" src="/assets/images/logo.png" alt="Cues+ プルデンシャル生命保険株式会社様 専用 オンラインショップ">
                  </a>
                </h1>
                <div class="d-none d-lg-block">
                  <img class="img-fluid" src="/assets/images/cues-logo.png" alt="Cues+">
                </div>
                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                  <span class="navbar-toggler-icon"></span>
                </button>
              </div>
              <div class="collapse navbar-collapse justify-content-around" id="navbarNav">
                <div class="header-nav-content w-100">
                  <ul class="navbar-nav nav-fill align-items-center">
                    <li class="nav-item d-block d-lg-none">
                      <a class="nav-link logo" href="/calendar"><img class="img-fluid" src="/assets/images/logo.png" alt="Cues+ プルデンシャル生命保険株式会社様 専用 オンラインショップ"></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calendar/syouhin/list?syouhin_syubetu=1"><span>商品一覧/ご購入</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calendar/greeting"><span>挨拶状/アンケート</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calendar/mail"><span>発送代行</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calendar/schedule"><span>スケジュール/お支払い</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/calendar/interview"><span>私と、保全活動</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/mypage"><span>マイページ</span></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link btn btn-dark d-lg-inline-block py-1 px-3 text-white" href="/calendar/cart/add"><span><i class="fas fa-shopping-cart"></i></span></a>
                    </li>
                    <li class="nav-item text-center pt-4 d-block d-lg-none">
                      <a class="nav-link btn btn-primary p-3 d-inline-block btn-close" href="#"><i class="fas fa-times-circle mr-1"></i><span>メニューを閉じる</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div> <!-- .container -->
        </div>
      </header>
      <main id="main" class="main-web-layout" role="main">

          @yield('content')
      </main>

          <footer id="footer" class="footer-web-layout" role="contentinfo">
            <div class="footer-content">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="brand-nav">
                      <ul class="nav flex-column flex-lg-row align-items-center">
                        <li class="nav-item mb-2">
                          <a class="logo" href="/" rel="home">
                            <img class="img-fluid mx-50" src="/assets/images/cues-logo.png" alt="Cues+">
                          </a>
                        </li>
                      </ul>
                      <p>株式会社キューズプラス</p>
                      <p class="address">〒530-0047 大阪市北区西天満2丁目6-8 堂島ビルヂング6F</p>
                      <p class="telephone"><span>TEL：</span><a href="tel:06-6131-0275" class="number">06-6131-0275</a></p>
                    </div>
                  </div>
                  <div class="col-lg-8">
                    <div class="footer-nav">
                      <ul class="nav flex-column flex-lg-row justify-content-lg-end border-top-dotted">
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/syouhin/list?syouhin_syubetu=1"><span>商品一覧/ご購入</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/greeting"><span>挨拶状/アンケート</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/mail"><span>発送代行</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/schedule"><span>スケジュール</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/interview"><span>私と、保全活動</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/mypage"><span>マイページ</span></a>
                        </li>
                      </ul>
                    </div>
                    <div class="footer-nav">
                      <ul class="nav flex-column flex-lg-row justify-content-lg-end">
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/faq"><span>よくあるご質問</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/calendar/privacy"><span>プライバシーポリシー</span></a>
                        </li>
                        <!--li class="nav-item">
                          <a class="nav-link" href="#"><span>お問合せ</span></a>
                      </li-->
                      </ul>
                    </div>
                    <div class="privacymark mt-3">
                      <img class="img-fluid float-right" src="/assets/images/privacy-iconbn.png" alt="プライバシーマーク">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="copyright">
                      <p>Copyright&copy; CUES PLUS Co.ltd., All Rights Reserved.</p>
                    </div>
                  </div>
                </div>
              </div> <!-- .container -->
            </div>
          </footer>
        </div> <!-- //.site -->
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
