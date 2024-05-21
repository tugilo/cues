@extends('layouts.calendar_page')
@section('title', '私と、保全活動')

@section('content')

<article class="main-content">
  <header class="main-content-header">
    <div class="container">
      <div class="page-cover"><img class="img-fluid" src="/images/interview/special-interview.png" alt="Special interview"></div>
    </div> <!-- .container -->
  </header>
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="ホーム" href="/calendar" class="home">
              <i class="fas fa-home"></i>
              <span property="name">ホーム</span>
          </a><meta property="position" content="1">
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <span property="name" class="post post-post current-item">私と、保全活動</span>
          <meta property="url" content="/calendar/interview">
          <meta property="position" content="3">
      </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

        <!-- s:interview-box -->
        <section class="interview-box px-0">
          <a href="/calendar/interview/detail?vol=07_01" class="interview-header">
            <div class="row row-cols-1 row-cols-lg-2 no-gutters">
              <div class="col">
                <div class="card h-100 border-0">
                  <img class="img-fluid" src="/images/interview/vol07_mainimg.jpg" alt="Special interview">
                </div>
              </div>
              <div class="col">
                <div class="card h-100 border-0">
                  <div class="card-body catchcopy">
                    <img class="img-fluid" src="/images/interview/vol07_catchcopy.png" alt="Special interview">
                  </div>
                </div>
              </div>
            </div>
          </a>
        </section>
        <!-- n:interview-box -->

      <!-- s:interview-box -->
      <section class="interview-box px-0">
        <a href="/calendar/interview/detail?vol=08_01" class="interview-header">
          <div class="row row-cols-1 row-cols-lg-2 no-gutters">
            <div class="col">
              <div class="card h-100 border-0">
                <img class="img-fluid" src="/images/interview/vol08_mainimg.jpg" alt="Special interview">
              </div>
            </div>
            <div class="col">
              <div class="card h-100 border-0">
                <div class="card-body catchcopy">
                  <img class="img-fluid" src="/images/interview/vol08_catchcopy.png" alt="Special interview">
                </div>
              </div>
            </div>
          </div>
        </a>
      </section>
      <!-- n:interview-box -->

      <!-- s:interview-box -->
      <section class="interview-box px-0">
        <h4>2019年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=01_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol01_index.jpg" alt="Vol.1 鎌谷 雅彦様＜神戸第二支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.1<br>鎌谷 雅彦様＜神戸第二支社＞</h5>
                    <p class="card-text">保全というのは、お客様が契約にサインされた瞬間から、「何でも相談できる」という安心感を、常にお客様に得ていただくことです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=02_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol02_index.jpg" alt="Vol.2 中村 将幸様＜大阪第五支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.2<br>中村 将幸様＜大阪第五支社＞</h5>
                    <p class="card-text">私がお客様のファンです<br>「お客様のことを深く知りたい」<br>保全のコツはこれだけです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <h4>2020年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=03_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid border" src="/images/interview/vol03_index.jpg" alt="Vol.3 田内 弘治様＜神戸支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.3<br>田内 弘治様＜神戸支社＞</h5>
                    <p class="card-text">お客様の所へ「手ぶらで行く」感覚でお話を聞く。基本的にはお会いして程よい「距離感を保つ」ことが大切で、売ることは二の次みたいな。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=04_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol04_index.jpg" alt="Vol.4 岡崎 まさみ様＜岡山中央支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                      <h5 class="card-title">Vol.4<br>岡崎 まさみ様＜岡山中央支社＞</h5>
                      <p class="card-text">保全活動継続のコツはこれぐらいで良いと思える距離感で、大事な時に思い出しあえる存在。「お客様の親戚ぐらいになりたい」というイメージです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <h4>2021年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=05_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol05_index.jpg" alt="Vol.5 長曽我部 勝也様＜広島第二支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.5<br>長曽我部 勝也様＜広島第二支社＞</h5>
                    <p class="card-text">LPをずっと続けていく中で、どうすれば良いかなと色々考え、「こうありたい」というイメージから今の流れになっていった感じです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=06_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol06_index.jpg" alt="Vol.6 井芹 直美様＜熊本支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.6<br>井芹 直美様＜熊本支社＞</h5>
                    <p class="card-text">日々の活動の灯りがどんどん広がっていって大きな灯りになっていく。ご紹介が広がって私たちの保障にご加入いただくと言う、それが保全です。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <p class="text-right small">※職位、略歴は取材時の情報です</p>
      </section>
      <!-- n:interview-box -->

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
