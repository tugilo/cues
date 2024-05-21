@extends('layouts.calendar_page')
@section('title', 'カレンダートップ')

@section('content')

<article class="main-content">
  <header class="main-content-header">
    <img class="img-fluid" src="/assets/images/top_mainimg01.jpg" alt="2023 Original Calendar">
  </header>

  <div class="main-content-body">

    <!-- s:content-box -->
    <section class="content-box">
      <div class="container">
        <h2 class="text-center"><span class="bg-yellow px-5 py-3">ご注文 三次販売締切日　 　11月29日（火）23:59まで</span></h2>
      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:content-box -->
    <section class="content-box bg-light">
      <div class="container">

        <div class="d-none d-md-block">
          <p class="pt-5 text-center"><img class="img-fluid" src="/assets/images/open.png" alt="OPEN記念"></p>
        </div>
        <div class="d-block d-md-none">
          <p class="pt-5 text-center"><img class="img-fluid" src="/assets/images/open-sp.png" alt="OPEN記念"></p>
        </div>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="pb-5">
              <h3 class="h2 border-top border-bottom border-color-dark py-3 text-center">壁掛けカレンダーご購入<span class="text-red">【無料特典】</span></h3>
              <div class="row align-items-center">
                <div class="col-12 col-lg-7 my-2">
                  <p class="small">昨年ご好評いただいた、挨拶状PDF無料ダウンロードサービスですが、今年は、対象商品を拡大し、<span class="text-red font-weight-bold">壁掛けカレンダー（種類問わず）を20部以上ご購入</span>いただいた方に、A4挨拶状PDFを無料ダウンロードしていただけるようになりました。</p>
                  <p class="small">紙面右下のスペースにネームスタンパーを押し、私製挨拶状として、ぜひご活用ください。</p>
                  <div class="text-center my-2">
                    <a href="/history" class="btn btn-primary small">対象者の方には、マイページのご購入履歴画面に<br>ダウンロードボタンが表示されます。<br>- 購入履歴ページへ-</a>
                  </div>
                  <p class="text-center"><img class="img-fluid" src="/images/item/graphic_artist.png" alt="挨拶状/制作協力"></p>
                </div>
                <div class="col-12 col-lg-5 my-2">
                  <img class="img-fluid" src="/images/item/aisatu_sample.png" alt="※昨年版サンプルです">
                  <p class="small text-center">※昨年版サンプルです</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pb-5">
          <div class="row align-items-center mb-3">
            <div class="col-lg-1 offset-lg-1">
              <img class="img-fluid mx-auto d-block float-left" src="/assets/images/top_merit1.png" alt="メリット1">
            </div>
            <div class="col-lg-10 p-0">
              <p class="small">自作アンケートなどと併用頂く事で保存活動にお役立ていただけます。</p>
            </div>
          </div>

          <div class="row align-items-center mb-3">
            <div class="col-lg-1 offset-lg-1">
              <img class="img-fluid mx-auto d-block float-left" src="/assets/images/top_merit2.png" alt="メリット2">
            </div>
            <div class="col-lg-10 p-0">
              <p class="small">POJ様に関する画像を配し、読み物はその年の金融/経済のトピックスを記載。質感、並びに情報発信について<br>十二分の内容としており、個人が作成したようにも受け止められやすい内容としています。</p>
            </div>
          </div>

          <div class="row align-items-center">
            <div class="col-lg-1 offset-lg-1">
              <img class="img-fluid mx-auto d-block float-left" src="/assets/images/top_merit3.png" alt="メリット3">
            </div>
            <div class="col-lg-10 p-0">
              <p class="small">POJ本社様コンプライアンスチェック済の文章となり、直ぐのご利用が可能です。</p>
            </div>
          </div>

          <div class="mt-5 text-center">
            <a href="/calendar/syouhin/list?syouhin_syubetu=1" class="btn btn-cyan h3 rounded-pill px-5">カレンダーを見てみる</a>
          </div>

        </div>

      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:content-box -->
    <section class="content-box">
      <div class="container">

        <p class="text-center text-dark-blue mb-0">特別インタビュー（第4回）</p>
        <h2 class="text-center h1 text-dark-blue">「私と、保全活動」</h2>
        <p class="text-center">保全活動をどのようなお考えで向き合い、制作物などをお使いになってらっしゃるのか。<br>今回もお世話になっておりますお二方にお話をお伺いしました。<br>（過去のバックナンバーもご覧いただけます。）</p>

      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:top-interview-box -->
    <section class="top-interview-box px-0">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-12 col-lg-6 my-3">
            <p class="mb-0"><span class="bg-pink text-white px-3 py-2">NEW</span></p>
            <a href="/calendar/interview/detail?vol=07_01">
              <img class="img-fluid" src="/images/interview/vol07_mainimg.jpg" alt="Special interview">
            </a>
          </div>
          <div class="col-12 col-lg-6 my-3">
            <p class="mb-0"><span class="bg-pink text-white px-3 py-2">NEW</span></p>
            <a href="/calendar/interview/detail?vol=08_01">
              <img class="img-fluid" src="/images/interview/vol08_mainimg.jpg" alt="Special interview">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=01_01" class="card h-100 interview-card">
              <img class="img-fluid" src="/images/interview/vol01_index.jpg" alt="Vol.1 鎌谷 雅彦様＜神戸第二支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.1<br>鎌谷 雅彦様<br>＜神戸第二支社＞</h5>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=02_01" class="card h-100 interview-card">
              <img class="img-fluid" src="/images/interview/vol02_index.jpg" alt="Vol.2 中村 将幸様＜大阪第五支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.2<br>中村 将幸様<br>＜大阪第五支社＞</h5>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=03_01" class="card h-100 interview-card">
              <img class="img-fluid border" src="/images/interview/vol03_index.jpg" alt="Vol.3 田内 弘治様＜神戸支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.3<br>田内 弘治様<br>＜神戸支社＞</h5>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=04_01" class="card h-100 interview-card">
              <img class="img-fluid" src="/images/interview/vol04_index.jpg" alt="Vol.4 岡崎 まさみ様＜岡山中央支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.4<br>岡崎 まさみ様<br>＜岡山中央支社＞</h5>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=05_01" class="card h-100 interview-card">
              <img class="img-fluid" src="/images/interview/vol05_index.jpg" alt="Vol.5 長曽我部 勝也様＜広島第二支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.5<br>長曽我部 勝也様<br>＜広島第二支社＞</h5>
              </div>
            </a>
          </div>
          <div class="col-6 col-md-4 col-lg-2 my-3">
            <a href="/calendar/interview/detail?vol=06_01" class="card h-100 interview-card">
              <img class="img-fluid" src="/images/interview/vol06_index.jpg" alt="Vol.6 井芹 直美様＜熊本支社＞">
              <div class="card-body">
                <h5 class="card-title small text-center my-2">Vol.6<br>井芹 直美様<br>＜熊本支社＞</h5>
              </div>
            </a>
          </div>
        </div>
        <p class="text-right small">※職位、略歴は取材時の情報です</p>
      </div> <!-- .container -->
    </section>
    <!-- n:top-interview-box -->

    <!-- s:content-box -->
    <section class="content-box mt-0">

      <div class="bg-light">
        <div class="container">
          <h2 class="h1 py-3 text-center text-dark-blue">カレンダー販売スケジュール</h2>
        </div> <!-- .container -->
      </div>

      <div class="container">

        <p>昨年より、一次～三次販売の期間を設定しておりますが、皆様方には、例年同様の「一次販売」でのご購入をお薦めいたします。</p>

        <div class="row d-none d-md-block">
          <div class="col-12 text-center my-4">
            <img class="img-fluid" src="/images/schedule/schedule_img01.jpg" alt="販売スケジュール">
          </div>
        </div>
        <div class="row d-block d-md-none">
          <div class="col-12 my-4">
            <p><img class="img-fluid mw-lg-50" src="/images/schedule/schedule_img03.jpg" alt="販売スケジュール"></p>
            <p class="mb-4"><img class="img-fluid" src="/images/schedule/schedule_img04.jpg" alt="販売スケジュール"></p>
            <p class="mb-4"><img class="img-fluid" src="/images/schedule/schedule_img05.jpg" alt="販売スケジュール"></p>
            <p class="mb-4"><img class="img-fluid" src="/images/schedule/schedule_img06.jpg" alt="販売スケジュール"></p>
            <p class="mb-4"><img class="img-fluid" src="/images/schedule/schedule_img07.jpg" alt="販売スケジュール"></p>
            <div class="bg-light px-2 py-3">
              <p class="text-center h2 m-0">支社納品のみをご注文の方へは<br>11月1日（火）から順次発送いたします</p>
            </div>
          </div>
        </div>

        <div class="my-5 border-orange px-4">
          <div class="row align-items-center">
            <div class="col-12 col-lg-9">
              <p class="small">「メイク・ア・ウィッシュ オブ ジャパン」様に、毎年売上の一部を寄付させていただいております。<br>（なお監査役として神戸支社様にお願いしております）</p>
            </div>
            <div class="col-12 col-lg-3">
              <img class="img-fluid" src="/assets/images/makeawish_logo.jpg" alt="メイク・ア・ウィッシュ オブ ジャパン">
            </div>
          </div>
        </div>

        <p class="mb-3"><span class="bg-red py-2 px-4 text-white">大切なお知らせ</span></p>
        <p class="small">昨今の原材料高騰など社会情勢を背景に今年度より商品の価格変更を行っております（全商品平均で7.53%）</p>
        <p class="small">弊社といたしましては、皆さまの保全活動を一層お手伝い出来ますよう、改めてコストを抑えつつ、サービス面を質量ともに一層向上させて参ります。</p>
        <p class="small">諸般事情ご推察の上、ご理解賜りますようお願い申し上げます。</p>
        <p class="small">また、WEBでのご案内に重きを置く為、ガイドブックの配布を本年より控えさせていただきます。</p>

      </div> <!-- .container -->

    </section>
    <!-- n:content-box -->

    <div class="container">




    </div> <!-- .container -->
  </div>
</article> <!-- .main-content -->

@stop
@section('css')
@stop

@section('js')
<script>

</script>

@stop
