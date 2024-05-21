<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>会員登録確認 オンラインショップ（プルデンシャル様専用）</title>
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

</head>
<body id="top" class="page">
<div class="site">
  <header id="header" class="header px-3" role="banner">
    <div class="d-flex flex-row justify-content-between align-items-center">
      <div class="blank-space"></div>
      <div class="site-description">
        <div class="logo">
          <a href="#" rel="home">
            <img class="img-fluid" src="/assets/images/cues-logo.png" alt="CUES PLUS">
          </a>
        </div>
        <h1 class="text-center"><img class="img-fluid" src="/assets/images/site-description.png" alt="プルデンシャル生命保険株式会社様 専用 オンラインショップ"></h1>
      </div>
      <div class="pl-4">
          <a href="#" class="btn btn-dark d-lg-inline-block px-4 text-white mx-1 mt-2"><span><i class="fas fa-shopping-cart"></i></span></a>
          <a href="#" class="btn btn-dark mx-1 mt-2">HOME</a>
        <!--a href="/cart/add" class="btn btn-dark px-3 mx-1 my-2 my-sm-0"><i class="fas fa-shopping-cart"></i></a-->
      </div>
    </div>
  </header>
      <main id="main" class="main wide" role="main">

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 mb-4 pb-2">
          <h2 class="h5">会員登録確認</h2>
          <p>下記の情報で間違いなければ送信ボタンを押してください。</p>
        </div>
      </div>

      <form method="post" action="/register">
          {{ csrf_field() }}

          <input type="hidden" name="lp_cd" value="{{$user['lp_cd']}}">
          <input type="hidden" name="torihikisaki_id" value="{{$user['torihikisaki_id']}}">
          <input type="hidden" name="inputName" value="{{$user['inputName']}}">
          <input type="hidden" name="inputNameKana" value="{{$user['inputNameKana']}}">
          <input type="hidden" name="oldCharacterRadios" value="{{$user['oldCharacterRadios']}}">
          <input type="hidden" name="inputBranch" value="{{$user['inputBranch']}}">
          <input type="hidden" name="inputCompany" value="{{$user['inputCompany']}}">
          <input type="hidden" name="changeBranchRadios" value="{{$user['changeBranchRadios']}}">
          <input type="hidden" name="inputChangeBranch" value="{{$user['inputChangeBranch']}}">
          <input type="hidden" name="inputMobile" value="{{$user['inputMobile']}}">
          <input type="hidden" name="inputEmail" value="{{$user['inputEmail']}}">
          <input type="hidden" name="inputPosition" value="{{$user['inputPosition']}}">
          <input type="hidden" name="mode" value="{{$user['mode']}}">
          <div class="form-group row border-bottom">
            <label for="lp_cd" class="col-lg-3 col-form-label pr-lg-0">LPコード</label>
            <div class="col-lg-9">
                @if($user['lp_cd'])
                <p class="confirm-value">@php echo sprintf('%07d', $user['lp_cd']) @endphp</p>
                @else
                <p class="confirm-value">&nbsp;</p>
                @endif
            </div>
          </div>
        <div class="form-group row border-bottom">
          <label for="inputName" class="col-lg-3 col-form-label pr-lg-0">お名前</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$user['inputName']}}</p>
            <p class="text-black-50">あなたのお名前に旧字体・外字は含まれていますか？</p>
            <p>@if($user['oldCharacterRadios'] == 1)含まれている@else含まれていない@endif</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputNameKana" class="col-lg-3 col-form-label pr-lg-0">お名前（フリガナ)</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$user['inputNameKana']}}</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputCompany" class="col-lg-3 col-form-label pr-lg-0">会社名</label>
          <div class="col-lg-9">
            <p class="confirm-value">@if($user['mode'] == 2){{{$user['inputCompany']}}}@else{{ Session::get('kaisya_nm') }}@endif</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputBranch" class="col-lg-3 col-form-label pr-lg-0">支社名</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$new_shisya[0]->shisya_nm}}</p>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputZip" class="col-lg-3 col-form-label pr-lg-0">郵便番号</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$new_shisya[0]->postno}}</p>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputAddress" class="col-lg-3 col-form-label pr-lg-0">住所</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$new_shisya[0]->address1}} {{$new_shisya[0]->address2}} {{$new_shisya[0]->address3}}</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputTelephone" class="col-lg-3 col-form-label pr-lg-0">電話番号</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$new_shisya[0]->telno}}</p>
            <p class="text-black-50">昨年ご注文時から支社が変更になった</p>
            <p>@if($user['changeBranchRadios'] == 1)支社が変わった @if($user['inputChangeBranch']){{$user['printChangeBranch']}}より @endif @else同じ支社@endif</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputMobile" class="col-lg-3 col-form-label pr-lg-0">携帯番号</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$user['inputMobile']}}</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputEmail" class="col-lg-3 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$user['inputEmail']}}</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">役職名</label>
          <div class="col-lg-9">
            <p class="confirm-value">{{$user['positionName']}}</p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button id="btn_register" class="btn btn-primary w-100" type="submit">送信する</button>
          </div>
        </div>
      </form>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

</main>
<aside class="page-nav mt-5">
  <div class="page-nav-content">
    <div class="container">
      <ul class="nav justify-content-center flex-column flex-lg-row">
        <li class="nav-item">
          <a class="nav-link" href="#">ONLINESHOP＜TOP＞</a>
        </li>
        <!--li class="nav-item">
          <a class="nav-link" href="#">CONTACT</a>
      </li-->
        <li class="nav-item">
          <a class="nav-link" href="#">MYPAGE</a>
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
<script>
$(function(){

    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
      });
    /*
    $('#btn_register').on('click', function(){
        window.location.href = '/home'
    });
    */
});
  
</script>
  </body>

</html>
