<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>会員登録｜キューズプラスのオリジナル オンラインショップ（プルデンシャル様専用）</title>
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
          <h2 class="h5">会員登録</h2>
          <p>情報入力後、確認ボタンを押してください。</p>
        </div>
      </div>

      <!--p class="px-3 py-1 mb-3 text-note s-small text-center">カレンダー(挨拶状付き、LP情報あり)をご注文の場合、下記入力情報が印字されますので、必ずご確認ください。（役職名は印字されません）</p-->

      <form method="post" action="/register_confirm">
          {{ csrf_field() }}

          <input type="hidden" name="torihikisaki_id" id="torihikisaki_id" value="{{ Session::get('id') }}">
          <input type="hidden" name="mode" id="mode" value="{{$mode}}">
          <div class="form-group row border-bottom">
            <label for="lp_cd" class="col-lg-3 col-form-label pr-lg-0">LPコード<span class="badge badge-required">必須</span></label>
            <div class="col-lg-9">
                @if(isset($user[0]->lp_cd))
                  <input type="text" class="form-control {{ $errors->has('lp_cd') ? 'is-invalid' : '' }}" id="lp_cd" name="lp_cd" value="@if($user[0]->lp_cd){{$user[0]->lp_cd}}@else{{ old('lp_cd')}}@endif" placeholder="LPコード">
                @else
                <input type="text" class="form-control {{ $errors->has('lp_cd') ? 'is-invalid' : '' }}" id="lp_cd" name="lp_cd" value="" placeholder="LPコード">
                @endif
                <p class="small mt-3">※LPコードは頭の0（ゼロ）は付けずに半角でご入力ください。</p>
              @if ($errors->has('lp_cd'))
                  <div class="text-red">
                      <strong>{{ $errors->first('lp_cd') }}</strong>
                  </div>
              @endif
            </div>
          </div>
          <div class="form-group row border-bottom">
            <label for="inputName" class="col-lg-3 col-form-label pr-lg-0">お名前<span class="badge badge-required">必須</span></label>
            <div class="col-lg-9">
              <input type="text" class="form-control {{ $errors->has('inputName') ? 'is-invalid' : '' }}" id="inputName" name="inputName" value="@if(isset($user[0]->torihikisaki_nm)){{$user[0]->torihikisaki_nm}}@else{{ old('inputName')}}@endif" placeholder="例）山田　太郎">
              @if ($errors->has('inputName'))
                  <div class="text-red">
                      <strong>{{ $errors->first('inputName') }}</strong>
                  </div>
              @endif
              <p class="small mt-3">※姓名の間には半角スペースをお空けください</p>
              <p class="small">※旧字体(JIS外字)はメールなどで表示されない可能性があります(例：髙, 﨑…)</p>
              <p class="small mb-3">※旧字体に当てはまる方は、備考欄にその旨ご記入ください。</p>
              <div class="color-box">
                <p>あなたのお名前に旧字体・外字は含まれていますか？<span class="badge badge-required float-none">必須</span></p>
                @if(isset($user[0]->gaiji_flg))
                    <div class="form-check">
                      <input class="form-check-input  {{ $errors->has('oldCharacterRadios') ? 'is-invalid' : '' }}" type="radio" name="oldCharacterRadios" id="oldCharacterRadios1" value="1"  {{ $user[0]->gaiji_flg == '1' ? 'checked' : '' }}>
                      <label class="form-check-label" for="oldCharacterRadios1">含まれている</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input  {{ $errors->has('oldCharacterRadios') ? 'is-invalid' : '' }}" type="radio" name="oldCharacterRadios" id="oldCharacterRadios0" value="0" {{ $user[0]->gaiji_flg == '0' ? 'checked' : '' }}>
                      <label class="form-check-label" for="oldCharacterRadios0">含まれていない</label>
                    </div>
                @else

                    <div class="form-check">
                      <input class="form-check-input  {{ $errors->has('oldCharacterRadios') ? 'is-invalid' : '' }}" type="radio" name="oldCharacterRadios" id="oldCharacterRadios1" value="1"  {{ old('oldCharacterRadios','1') == '1' ? 'checked' : '' }}>
                      <label class="form-check-label" for="oldCharacterRadios1">含まれている</label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input  {{ $errors->has('oldCharacterRadios') ? 'is-invalid' : '' }}" type="radio" name="oldCharacterRadios" id="oldCharacterRadios0" value="0" {{ old('oldCharacterRadios','0') == '0' ? 'checked' : '' }}>
                      <label class="form-check-label" for="oldCharacterRadios0">含まれていない</label>
                    </div>
                @endif
                @if ($errors->has('oldCharacterRadios'))
                    <div class="text-red">
                        <strong>{{ $errors->first('oldCharacterRadios') }}</strong>
                    </div>
                @endif
              </div>
            </div>
          </div>
          <div class="form-group row border-bottom">
            <label for="inputNameKana" class="col-lg-3 col-form-label pr-lg-0">お名前（フリガナ)<span class="badge badge-required">必須</span></label>
            <div class="col-lg-9">
              <input type="text" class="form-control {{ $errors->has('inputNameKana') ? 'is-invalid' : '' }}" id="inputNameKana" name="inputNameKana" value="@if(isset($user[0]->torihikisaki_kana)){{$user[0]->torihikisaki_kana}}@else{{ old('inputNameKana')}}@endif" placeholder="例）ヤマダ　タロウ">
              @if ($errors->has('inputNameKana'))
                  <div class="text-red">
                      <strong>{{ $errors->first('inputNameKana') }}</strong>
                  </div>
              @endif
              <p class="small mt-3">必ず全角カタカナで入力してください</p>
              <p class="small mb-3">※姓名の間には半角スペースをお空けください</p>
            </div>
          </div>
        <div class="form-group row border-bottom">
          <label for="inputCompany" class="col-lg-3 col-form-label pr-lg-0">会社名</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" name="inputCompany" id="inputCompany" value="プルデンシャル生命保険株式会社" placeholder="プルデンシャル生命保険株式会社" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputBranch" class="col-lg-3 col-form-label pr-lg-0">支社名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
                @if(isset($user[0]->shisya_cd))
                <select name="inputBranch" id="inputBranch" class="custom-select {{ $errors->has('inputBranch') ? 'is-invalid' : '' }}">
                    <option value="">---</option>
                    @if($shisyas)
                        @foreach($shisyas as $shisya)
                            @if($shisya['option'] == 0)

                            <optgroup label="{{$shisya['value']}}">
                            @else

                            <option value="{{$shisya['option']}}" @if($user[0]->shisya_cd == $shisya['option']) selected  @endif>{{$shisya['value']}}</option>
                            @endif
                        @endforeach
                    @endif
                </select>
                @else
                <select name="inputBranch" id="inputBranch" class="custom-select {{ $errors->has('inputBranch') ? 'is-invalid' : '' }}">
                    <option value="">---</option>
                    @if($shisyas)
                        @foreach($shisyas as $shisya)
                            @if($shisya['option'] == 0)

                            <optgroup label="{{$shisya['value']}}">
                            @else

                            <option value="{{$shisya['option']}}" @if(old('inputBranch') == $shisya['option']) selected  @endif>{{$shisya['value']}}</option>
                            @endif
                        @endforeach
                    @endif
                </select>
                @endif
            </div>
            @if ($errors->has('inputBranch'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputBranch') }}</strong>
                </div>
            @endif
            <p class="small mb-0">※プルダウンでお選びください。住所情報（郵便番号、住所、電話番号）が自動表示されます。</p>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputZip" class="col-lg-3 col-form-label pr-lg-0">郵便番号</label>
          <div class="col-auto">
            <input type="text" class="form-control" id="inputZip" size="7" readonly value="@if(isset($user[0]->postno)){{$user[0]->postno}}@endif">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputAddress" class="col-lg-3 col-form-label pr-lg-0">住所</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputAddress" readonly value="@if(isset($user[0]->address1)){{$user[0]->address1}}@endif @if(isset($user[0]->address2)){{$user[0]->address2}}@endif @if(isset($user[0]->address3)){{$user[0]->address3}}@endif">
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputTelephone" class="col-lg-3 col-form-label pr-lg-0">電話番号</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputTelephone" value="@if(isset($user[0]->telno)){{$user[0]->telno}}@endif" readonly>
            <div class="color-box mt-3">
              <p>以前ご注文時から支社が変更になった</p>
              @if(isset($user[0]->shisya_henkou_flag))

              <div class="form-check form-inline pl-sm-0">
                  <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios0" value="1" checked>
                <label class="form-check-label mr-3" for="changeBranchRadios0">支社が変わった</label>
                <select name="inputChangeBranch" id="inputChangeBranch" class="custom-select small">
                    <option value="" selected="">---</option>
                    <option value="1" @if($user[0]->shisya_henkou_dt == '2022-04-01') selected  @endif>2022年4月</option>
                    <option value="2" @if($user[0]->shisya_henkou_dt == '2022-05-01') selected  @endif>2022年5月</option>
                    <option value="3" @if($user[0]->shisya_henkou_dt == '2022-06-01') selected  @endif>2022年6月</option>
                    <option value="4" @if($user[0]->shisya_henkou_dt == '2022-07-01') selected  @endif>2022年7月</option>
                    <option value="5" @if($user[0]->shisya_henkou_dt == '2022-08-01') selected  @endif>2022年8月</option>
                    <option value="6" @if($user[0]->shisya_henkou_dt == '2022-09-01') selected  @endif>2022年9月</option>
                    <option value="7" @if($user[0]->shisya_henkou_dt == '2022-10-01') selected  @endif>2022年10月</option>
                    <option value="8" @if($user[0]->shisya_henkou_dt == '2022-11-01') selected  @endif>2022年11月</option>
                    <option value="9" @if($user[0]->shisya_henkou_dt == '2022-12-01') selected  @endif>2022年12月</option>
                    <option value="10" @if($user[0]->shisya_henkou_dt == '2023-01-01') selected  @endif>2023年1月</option>
                    <option value="11" @if($user[0]->shisya_henkou_dt == '2023-02-01') selected  @endif>2023年2月</option>
                    <option value="12" @if($user[0]->shisya_henkou_dt == '2023-03-01') selected  @endif>2023年3月</option>
                    <option value="13" @if($user[0]->shisya_henkou_dt == '2023-04-01') selected  @endif>2023年4月</option>
                </select>より
              </div>
              <div class="form-check">
                  <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios1" value="0">
                <label class="form-check-label" for="changeBranchRadios1" checked>同じ支社（今年初めてご注文の方もこちらにチェックを入れてください）</label>
              </div>
              @else

              <div class="form-check form-inline pl-sm-0">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios0" value="1"  {{ old('changeBranchRadios','1') == '1' ? 'checked' : '' }}>
                <label class="form-check-label mr-3" for="changeBranchRadios0">支社が変わった</label>
                <select name="inputChangeBranch" id="inputChangeBranch" class="custom-select small">
                    <option value="" selected="">---</option>
                    <option value="1" @if(old('inputChangeBranch') == 1) selected  @endif>2022年4月</option>
                    <option value="2" @if(old('inputChangeBranch') == 2) selected  @endif>2022年5月</option>
                    <option value="3" @if(old('inputChangeBranch') == 3) selected  @endif>2022年6月</option>
                    <option value="4" @if(old('inputChangeBranch') == 4) selected  @endif>2022年7月</option>
                    <option value="5" @if(old('inputChangeBranch') == 5) selected  @endif>2022年8月</option>
                    <option value="6" @if(old('inputChangeBranch') == 6) selected  @endif>2022年9月</option>
                    <option value="7" @if(old('inputChangeBranch') == 7) selected  @endif>2022年10月</option>
                    <option value="8" @if(old('inputChangeBranch') == 8) selected  @endif>2022年11月</option>
                    <option value="9" @if(old('inputChangeBranch') == 9) selected  @endif>2022年12月</option>
                    <option value="10" @if(old('inputChangeBranch') == 10) selected  @endif>2023年1月</option>
                    <option value="11" @if(old('inputChangeBranch') == 11) selected  @endif>2023年2月</option>
                    <option value="12" @if(old('inputChangeBranch') == 12) selected  @endif>2023年3月</option>
                    <option value="13" @if(old('inputChangeBranch') == 13) selected  @endif>2023年4月</option>
                </select>より
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios1" value="0" {{ old('changeBranchRadios','0') == '0' ? 'checked' : '' }}>
                <label class="form-check-label" for="changeBranchRadios1" checked>同じ支社（今年初めてご注文の方もこちらにチェックを入れてください）</label>
              </div>

              @endif
            </div>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputMobile" class="col-lg-3 col-form-label pr-lg-0">携帯番号<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control {{ $errors->has('inputMobile') ? 'is-invalid' : '' }}" id="inputMobile" name="inputMobile" value="@if(isset($user[0]->torihikisaki_tantosya_telno)){{$user[0]->torihikisaki_tantosya_telno}}@else{{ old('inputMobile') }}@endif" placeholder="例）000-0000-0000">
            @if ($errors->has('inputMobile'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputMobile') }}</strong>
                </div>
            @endif
            <p class="small mt-3">※必ず申込者ご自身の連絡先を入力ください。<span class="text-red">挨拶状の場合は印字されます。</span></p>
            <p class="small">※半角数字で入力ください</p>
            <p class="small mb-0">※-（ハイフン）を入力してください</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputEmail" class="col-lg-3 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputEmail" name="inputEmail" value="{{ Session::get('email') }}" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">役職名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
                @if(isset($user[0]->syokui_cd))

                <select id="inputPosition" name="inputPosition" class="custom-select {{ $errors->has('inputPosition') ? 'is-invalid' : '' }}">
                    <option  value="">---</option>
                  @if($syokuilists)
                  @foreach($syokuilists as $syokuilist)
                  <option value="{{$syokuilist->syokui_cd}}" @if($user[0]->syokui_cd == $syokuilist->syokui_cd) selected  @endif>{{$syokuilist->syokui_nm}}</option>
                  @endforeach
                  @endif
                </select>

                @else

                <select id="inputPosition" name="inputPosition" class="custom-select {{ $errors->has('inputPosition') ? 'is-invalid' : '' }}">
                    <option  value="">---</option>
                  @if($syokuilists)
                  @foreach($syokuilists as $syokuilist)
                  <option value="{{$syokuilist->syokui_cd}}" @if(old('inputPosition') == $syokuilist->syokui_cd) selected  @endif>{{$syokuilist->syokui_nm}}</option>
                  @endforeach
                  @endif
                </select>

                @endif
            </div>
            @if ($errors->has('inputPosition'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputPosition') }}</strong>
                </div>
            @endif
            <p class="small mb-0">※挨拶状に印字されません。</p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button class="btn btn-primary w-100" type="submit">確認</button>
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
      $('#inputBranch').on('change', function() {
          var branch_id = $('#inputBranch').val();
          var token = $('input[name="_token"]').val();
          if(branch_id){
              $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': token
                      }
              });
              $.ajax({
                  url: '/getAddress',
                  type: 'post',
                  dataType: 'json',
                  data: {
                      'branch_id': branch_id,
                  },
              })
              .done(function(data) {
                  document.getElementById('inputZip').value = data['postno'];
                  document.getElementById('inputAddress').value = data['address1'] + data['address2'] + data['address3'];
                  document.getElementById('inputTelephone').value = data['telno'];
                  //console.log('changed ok:'+data);
              });
  
          }
      });
      var zen2han = function(str) {
        str = str.replace(/[０-９]/g, function (s) {
          return String.fromCharCode(s.charCodeAt(0) - 0xFEE0);
        })
        return Number(str);
      }
  
      $(function () {
        $("#lp_cd").on("change", function () {
          var str = $(this).val();
          $(this).val(zen2han(str));
        });
      });
      $('form').submit(function () {
          $(this).find(':submit').prop('disabled', 'true');
      });
      @if(empty($user[0]->address1))
      $( document ).ready(function() {
          var branch_id = $('#inputBranch').val();
          var token = $('input[name="_token"]').val();
          var zip = document.getElementById('inputZip').value;
  
          if(branch_id && !zip){
              $.ajaxSetup({
                      headers: {
                          'X-CSRF-TOKEN': token
                      }
              });
              $.ajax({
                  url: '/getAddress',
                  type: 'post',
                  dataType: 'json',
                  data: {
                      'branch_id': branch_id,
                  },
              })
              .done(function(data) {
                  document.getElementById('inputZip').value = data['postno'];
                  document.getElementById('inputAddress').value = data['address1'] + data['address2'] + data['address3'];
                  document.getElementById('inputTelephone').value = data['telno'];
                  //console.log('changed ok:'+data);
              });
          }
  
      });
      @endif
  });
  
  </script>
  </body>

</html>
