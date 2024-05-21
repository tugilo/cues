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

          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=1" class="card h-100 item-card">
              <img src="/images/kabeA_01_SOLD.jpg" class="img-fluid border" alt="壁掛けカレンダー（挨拶状/アンケート付）">
              <div class="card-body">
                <h3 class="card-title h6">壁掛けカレンダー（挨拶状/アンケート付）</h3>
                <p class="card-text">310円（税込341円）</p>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=4" class="card h-100 item-card">
              <img src="/images/kabeB_01.jpg" class="img-fluid border" alt="壁掛けカレンダー">
              <div class="card-body">
                <h3 class="card-title h6">壁掛けカレンダー</h3>
                <p class="card-text">275円（税込303円）</p>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=92" class="card h-100 item-card">
              <img src="/images/kabeC_01.jpg" class="img-fluid border" alt="壁掛けカレンダー（A4サイズ【特寸】）">
              <div class="card-body">
                <h3 class="card-title h6">壁掛けカレンダー（A4サイズ【特寸】）</h3>
                <p class="card-text">210円（税込231円）</p>
              </div>
            </a>
          </div>

          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=7" class="card h-100 item-card">
              <img src="/images/takuA_01_SOLD.jpg" class="img-fluid border" alt="卓上カレンダー（B6サイズ）（LP様情報あり）">
              <div class="card-body">
                <h3 class="card-title h6">卓上カレンダー（B6サイズ）（LP様情報あり）<span class="text-red font-weight-bold">SOLDOUT</span></h3>
                <p class="card-text">270円（税込297円）</p>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=10" class="card h-100 item-card">
              <img src="/images/takuB_01.jpg" class="img-fluid border" alt="卓上カレンダー（B6サイズ）">
              <div class="card-body">
                <h3 class="card-title h6">卓上カレンダー（B6サイズ）</h3>
                <p class="card-text">255円（税込281円）</p>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/syouhin/detail?syouhin_cd=85" class="card h-100 item-card">
              <img src="/images/takuC_01_SOLD.jpg" class="img-fluid border" alt="卓上カレンダー（ハガキサイズ）">
              <div class="card-body">
                <h3 class="card-title h6">卓上カレンダー（ハガキサイズ）<span class="text-red font-weight-bold">SOLDOUT</span></h3>
                <p class="card-text">155円（税込171円）</p>
              </div>
            </a>
          </div>

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
