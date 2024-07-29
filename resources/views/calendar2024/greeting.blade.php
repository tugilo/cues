@extends('layouts.calendar_page')
@section('title', '挨拶状/アンケート｜Cues+ プルデンシャル生命保険株式会社様 専用 オンラインショップ')

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
          <span property="name" class="post post-post current-item">挨拶状/アンケート</span>
          <meta property="url" content="/calendar/greeting">
          <meta property="position" content="2">
      </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1">保全活動の一助に…<br>挨拶状／アンケート、3つのメリット</h2>
        <p>お客様へのアンケートを付帯した挨拶状をご用意しています。挨拶状は、ご契約者様との大きな「接点」と考えており、アンケートを含め特徴を3点持っています。</p>

        <div class="row row-cols-2 row-cols-lg-3 mt-lg-5 mb-lg-5 px-lg-3 justify-content-center">
          <div class="col my-lg-4">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/greeting/aisatu_img01_01.jpg" class="img-fluid" alt="返ってくるアンケート郵便代は全て弊社負担">
            </div>
          </div>
          <div class="col my-lg-4">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/greeting/aisatu_img01_02.jpg" class="img-fluid" alt="LP様（差出人）情報は印字済みのため差出人記載が不要">
            </div>
          </div>
          <div class="col my-lg-4">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/greeting/aisatu_img01_03.jpg" class="img-fluid" alt="お客様への情報提供として好評の経済トピックス">
            </div>
          </div>
        </div>

        <div class="row mb-lg-5">
          <div class="col-12 col-lg-6 my-4">
            <img class="img-fluid" src="/images/greeting/aisatu_img02_01.jpg" alt="挨拶状/表">
          </div>
          <div class="col-12 col-lg-6 my-4">
            <img class="img-fluid" src="/images/greeting/aisatu_img02_02.jpg" alt="挨拶状/裏">
            <p class="small text-right">※文言、デザインは予告なく変更する場合がございます。</p>
          </div>
        </div>

        <h3 class="mt-lg-6 text-center"><img class="img-fluid" src="/images/greeting/aisatu_subtittle01.jpg" alt="アンケート"></h3>
        <p class="small">【表面】支社様単位で所属メンバーの皆様が共通してお使いいただけますよう、返信先を代表の方お一人様名で頂戴しております。<br>（実績では概ね各支社長のご協力をお願いしております）。</p>
        <p class="small">【裏面】保全活動として有効なお客様アンケート。内容はLPの皆様がご理解（ご利用）され、汎用性がある表現を使用しています。<br>
          ※個人情報保護ラベルが同封されています。<br>
        ※POJ本社様コンプライアンスチェック済のものです。安心してご利用ください。</p>

        <h3 class="mt-lg-6 text-center"><img class="img-fluid" src="/images/greeting/aisatu_subtittle02.jpg" alt="LP様（差出人）情報"></h3>
        <p class="small">LP様（差出人）情報を印刷しております。弊社特製封筒をご利用いただくことにより、差出人記載が不要となりますので、封筒へのスタンパーやラベル貼付け作業の手間がありません。</p>
        <p class="small text-red">注意：ご注文フォームの情報が印刷されます。（但し、「お役職/職位」「CS連絡先」は印刷されません。）<br>ご注文後に必ず送信される「注文確定メール」で、お名前・所属支社情報・携帯番号・メールアドレスを必ずご確認ください。 校正などのやり取りはございません。<br>所属支社情報の選択ミスや、携帯番号のお間違えが多く見受けられますのでご注意ください。<br>
        </p>

        <h3 class="mt-lg-6 text-center"><img class="img-fluid" src="/images/greeting/aisatu_subtittle03.gif" alt="当年の経済トピックス（仮）"></h3>
        <p class="small">その年のトピックスとして、経済的なものや、ライフプランに関するものを毎年掲載しております。お客様への情報提供として、毎年大変好評を頂いています。 文監修：99.9Consulting<br>
        ※POJ本社様コンプライアンスチェック済のものです。安心してご利用ください。              </p>

        <h3 class="mt-lg-7 text-center"><img class="img-fluid" src="/images/greeting/aisatu_subtittle04.jpg" alt="アンケートをご利用いただける支社様実績"></h3>
        <div class="p-3 bg-light-blue">
          <p class="m-0 small">
              札幌 / 札幌第二 / 札幌中央 / 盛岡 / 仙台 / 仙台第二 / 仙台第三 / 秋田 / 郡山 / 水戸 / 宇都宮 / 高崎 / さいたま / 大宮 / 千葉中央 / 船橋 / 船橋中央 / 東京中央 / 東京西 / 東京南 / 東京第一 / 東京第二 / 東京第三 / 東京第四 / 東京第五 / 東京第六 / 東京第七 / 東京第九 / 東京第十 / 首都圏中央 / 首都圏第一 / 首都圏第二 / 首都圏第四 / 首都圏第五 / 首都圏第七 / 首都圏第八 / 港第五 / 千代田第四 / 千代田第五 / 千代田第六 / 千代田第八 / 品川第一 / 品川第二 / 品川第三 / 品川第六 / 品川第八 / 品川第九 / 青山第一 / 青山第二 / 青山第四 / 青山第六 / 青山第八 / 大崎第一 / 大崎第二 / 大崎第三 / 大崎第四 / 汐留 / 新橋 / 港南 / 立川 / 多摩 / 横浜 / 横浜中央 / 横浜東 / 横浜西 / 横浜南 / 横浜第一 / 横浜第二 / 新潟 / 新潟第二 / 富山 / 金沢 / 福井 / 甲府 / 長野 / 静岡 / 浜松 / 浜松第二 / 名古屋中央 / 名古屋東 / 名古屋北 / 名古屋第二 / 名古屋第三 / 名古屋第五 / 名古屋第六 / 名古屋第七 / 三重 / 三重第二 / 京都 / 京阪 / 京阪第二 / 京阪第三 / 京阪第四 / 京阪第七 / 大阪 / 大阪中央 / 大阪北 / 大阪第二 / 大阪第三 / 大阪第五 / 大阪第六 / 大阪第七 / 大阪第九 / 神戸 / 神戸第二 / 神戸第三 / 神戸第四 / 岡山 / 福山 / 広島 / 広島第二 / 広島第三 / 山口 / 徳島 / 高松 / 松山 / 松山第二 / 北九州 / 北九州第三 / 福岡 / 福岡第二 / 福岡第四 / 熊本 / 熊本第二 / 大分 / 鹿児島
          </p>
          <p class="m-0 small">&nbsp;</p>
          <p class="small"><span class="text-red">上記支社様以外所属の方でご注文の場合、最寄り郵便局へ「料金受取人払郵便」の申請が必要となります。</span><br>
          ご利用を検討の場合、弊社へお問い合わせをお願いいたします。</p>
          <p class="small text-right">・順不同敬称略<br>・申請手続き中の支社様も含みます<br>
            ・2023年7月10日現在
          </p>
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
      <script>

      </script>

      @stop
