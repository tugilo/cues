@extends('layouts.calendar_page')
@section('title', '商品一覧')

@section('content')

<article class="main-content border-top">
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="ホーム" href="/calendar" class="home">
              <i class="fas fa-home"></i>
              <span property="name">ホーム</span>
          </a>
          <meta property="position" content="1">
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <span property="name" typeof="WebPage" title="商品一覧/ご購入" href="/calendar/syouhin/list?syouhin_syubetu=1" class="current-item">
              <span property="name">商品一覧/ご購入</span>
          </span>
          <meta property="position" content="2">
      </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <img src="/images/calendar_mainimg01.jpg" class="img-fluid">

      <!-- s:content-box -->
      <section class="content-box">

        <div class="row row-cols-1 row-cols-lg-2">
          @foreach ($syouhins as $syouhin)
            @if ($syouhin['web_disp_flg'] == 1)
              <div class="col mb-4">
                <a href="/calendar/syouhin/detail?syouhin_cd={{ $syouhin['syouhin_cd'] }}" class="card h-100 item-card">
                  <img src="/images/{{ $syouhin['image'] }}" class="img-fluid border" alt="{{ $syouhin['web_syouhin_nm'] }}">
                  <div class="card-body">
                    <h3 class="card-title h6">{{ $syouhin['web_syouhin_nm'] }}<!--span class="text-red font-weight-bold">SOLDOUT</span--></h3>
                    <p class="card-text">{{ $syouhin['price'] }}円（税込{{ $syouhin['price_with_tax'] }}円）</p>
                  </div>
                </a>
              </div>
            @endif
          @endforeach
        </div>

      </section>
      <!-- n:content-box -->

    </div> <!-- .container -->
  </div>
</article> <!-- .main-content -->

@stop
@section('css')
@stop

@section('js')
@stop