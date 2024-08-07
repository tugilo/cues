@extends('layouts.page')
@section('title', '登録完了')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-top border-bottom mt-5 mb-4 py-3">
          <h2 class="h5 text-center mb-0">{{ Session::get('shisya_nm') }} {{ Session::get('name') }}様</h2>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-lg-3 my-lg-5 py-lg-5">
        <div class="col mb-4">
            <a href="#">
                <div class="card text-center h-100">
                    <div class="border m-3">
                        <img src="/assets/images/home-golfball.jpg" class="card-img-top" alt="ゴルフボール">
                    </div>
                    <div class="card-body">
                        <h3 class="card-title h6 text-muted">ゴルフボール</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col mb-4">
            <a href="/calendar">
                <div class="card text-center h-100">
                  <div class="border m-3">
                    <img src="/assets/images/home-calendar.jpg" class="card-img-top" alt="カレンダー">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6 text-muted">カレンダー</h3>
                  </div>
                </div>
            </a>
        </div>
        <div class="col mb-4">
          <div class="card text-center h-100">
            <div class="border m-3">
              <img src="/assets/images/home-newsletter.jpg" class="card-img-top" alt="ニュースレター発送代行">
            </div>
            <div class="card-body">
              <h3 class="card-title h6 text-muted">ニュースレター発送代行</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-5 pb-5">
        <div class="mx-auto">
          <p class="text-center mb-4">
              <span class=" bold">挨拶状PDFのダウンロード</span>は下記「マイページ」に進み「ご購入履歴」をクリックしてください。<br>
              <span class=" bold">壁掛けカレンダー（種類を問わず）20部以上ご購入の方のみ</span>、ダウンロードボタンが表示されています。
          </p>
        </div>
      </div>

      <div class="row mb-5 pb-5">
        <div class="col-lg-6 offset-lg-3">
          <p class="text-center mb-4 bold">注文内容をご確認の場合は<a href="/mypage">マイページ</a>へ</p>
          <a class="btn btn-dark w-100" href="/mypage">MY PAGE</a>
        </div>
      </div>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
@stop

@section('js')
<script>

</script>

@stop
