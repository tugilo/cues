@extends('layouts.calendar_page')
@section('title', 'カレンダートップ')

@section('content')

<article class="main-content">
  <header class="main-content-header">
    <img class="img-fluid" src="/assets/images/top_mainimg01.jpg" alt="2024 Original Calendar">
  </header>

  <div class="main-content-body">

    <!-- s:content-box -->
    <section class="content-box">
      <div class="container">
         <h2 class="bg-yellow text-center"><span class="lh2">ご注文 二次販売締切日 <br class="d-block d-lg-none"> 10月26日（木）23:59まで</span></h2>
      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:content-box -->
    <section class="content-box bg-light">
      <div class="container">

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="pb-5">
              <h3 class="h1 border-top border-bottom border-color-dark py-3 text-center">壁掛けカレンダーご購入<span class="text-red">【無料特典】</span></h3>
              <div class="row align-items-center">
                <div class="col-12 col-lg-7 my-2">
                  <p class="small">ご好評いただいている、挨拶状PDF無料ダウンロードサービス。今年、<span class="text-red font-weight-bold">壁掛けカレンダー（種類問わず）を20部以上ご購入</span>いただいた方に、A4挨拶状PDF（横Ver.）を無料ダウンロードしていただけます。</p>
                  <p class="small">紙面右下のスペースにネームスタンパーを押し、私製挨拶状として、ぜひご活用ください。</p>
                  <div class="text-center my-2">
                      <a href="/mypage"><img src="/images/go_mypage.png" alt="マイページへ"></a>
                  </div>
                  <p class="text-center"><img class="img-fluid" src="/images/item/graphic_artist.png" alt="挨拶状/制作協力"></p>
                </div>
                <div class="col-12 col-lg-5 my-2">
                  <img class="img-fluid" src="/images/item/aisatu_sample.png" alt="サンプル">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row align-items-center mb-3 no-gutters">
            <div class="col-lg-1 offset-lg-1">
              <div class="px-2">
                <img class="img-fluid mx-auto d-block top-merit" src="./assets/images/top_merit1.png" alt="メリット1">
              </div>
            </div>
            <div class="col-lg-10">
              <p class="small">
                  表面にはPOJ様に関する画像を配したご挨拶、裏面にはコンプライアンスチェック済みの金融/経済のトピックスを。質感、情報発信共に内容を充実させております。<br>
                  <span class="text-red">【裏ワザ】</span>POJ様開発の「LP通信」を片側のA4面に入れることも可能です。</p>
            </div>
          </div>

          <div class="row align-items-center mb-3 no-gutters">
            <div class="col-lg-1 offset-lg-1">
              <div class="px-2">
                <img class="img-fluid mx-auto d-block top-merit" src="./assets/images/top_merit2.png" alt="メリット2">
              </div>
            </div>
            <div class="col-lg-10">
              <p class="small">自作アンケート、商品案内を同封することで、効果的な保全活動にも。</p>
            </div>
          </div>
          <div class="mt-5 text-center">
            <a href="/calendar/syouhin/list?syouhin_syubetu=1" class="btn btn-cyan h3 rounded-pill px-5">カレンダーを見てみる</a>
          </div>
      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:content-box -->
    <section class="content-box">
      <div class="container">

          <p class="text-center text-dark-blue mb-0">特別インタビュー</p>
          <h2 class="text-center h1 text-dark-blue">「私と、保全活動」</h2>
          <p class="text-center">保全活動をどのようなお考えで向き合い、制作物などをお使いになってらっしゃるのか。<br>お世話になっております皆さまにお話をお伺いしております。<br>（過去のバックナンバーもご覧いただけます。）</p>

      </div> <!-- .container -->
    </section>
    <!-- n:content-box -->

    <!-- s:top-interview-box -->
    <section class="top-interview-box px-0">
        <div class="container">
          <div class="row no-gutters">
            <div class="col-12 col-lg-6 my-3">
              <a href="/calendar/interview/detail?vol=01_01" class="card interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol01_mainimg.jpg" alt="Special interview">
                <h5 class="card-title small text-center my-2">Vol.1 鎌谷 雅彦＜神戸第二支社＞</h5>
              </a>
            </div>
            <div class="col-12 col-lg-6 my-3">
              <a href="/calendar/interview/detail?vol=02_01" class="card interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol02_mainimg.jpg" alt="Special interview">
                <h5 class="card-title small text-center my-2">Vol.2 中村 将幸様＜大阪第五支社＞</h5>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=03_01" class="card h-100 interview-card">
                <img class="img-fluid border" src="/assets/interview/images/vol03_index.jpg" alt="Vol.3 田内 弘治様＜神戸支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.3<br>田内 弘治様<br>＜神戸支社＞</h5>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=04_01" class="card h-100 interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol04_index.jpg" alt="Vol.4 岡崎 まさみ様＜岡山中央支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.4<br>岡崎 まさみ様<br>＜岡山中央支社＞</h5>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=05_01" class="card h-100 interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol05_index.jpg" alt="Vol.5 長曽我部 勝也様＜広島第二支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.5<br>長曽我部 勝也様<br>＜広島第二支社＞</h5>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=06_01" class="card h-100 interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol06_index.jpg" alt="Vol.6 井芹 直美様＜熊本支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.6<br>井芹 直美様<br>＜熊本支社＞</h5>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=07_01" class="card h-100 interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol07_index.jpg" alt="Vol.8 鎌谷 雅彦様＜神戸第二支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.7<br>神山 英一様<br>＜名古屋中央支社＞</h5>
                </div>
              </a>
            </div>
            <div class="col-6 col-md-4 col-lg-2 my-3">
              <a href="/calendar/interview/detail?vol=08_01" class="card h-100 interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol08_index.jpg" alt="Vol.8 中村 将幸様＜大阪第五支社＞">
                <div class="card-body">
                  <h5 class="card-title small text-center my-2">Vol.8<br>金指 佐江子様<br>＜汐留支社＞</h5>
                </div>
              </a>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-12 col-lg-6 my-3">
              <p class="mb-0"><span class="bg-pink text-white px-3 py-2">NEW</span></p>
              <a href="/calendar/interview/detail?vol=10_01" class="card interview-card">
                <img class="img-fluid" src="/assets/interview/images/vol10_mainimg.jpg" alt="Special interview">
                <h5 class="card-title small text-center my-2">Vol.10 池田 泰之様＜神戸第二支社＞</h5>
              </a>
            </div>
          </div>
          <p class="text-right small">※職位、略歴は取材時の情報です</p>
        </div>
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

        <p>一次～三次販売の期間を設定しておりますが、皆さま方には、「一次販売」でのご購入をお薦めいたします。</p>

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
              <p class="text-center h2 m-0">支社納品のみをご注文の方へは<br>11月1日（水）から順次発送いたします</p>
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
