@extends('layouts.calendar_page')
@section('title', '発送代行')

@section('content')

<article class="main-content border-top">
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="ホーム" href="/calendar" class="home">
              <i class="fas fa-home"></i>
              <span property="name">ホーム</span>
          </a>
          <meta property="position" content="1"></span>
          <i class="fas fa-angle-right"></i>
          <span property="itemListElement" typeof="ListItem">
              <span property="name" class="post post-post current-item">発送代行</span>
              <meta property="url" content="/calendar/mail">
              <meta property="position" content="2">
          </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1">カレンダー発注からお客様お届けまで、<br>ワンストップサービスがおすすめです</h2>
        <p>
            LP様の作業負担はラベルご用意のみとなり、年末多忙な皆様の「時間」を確保することが可能です。<br>
            （本サービスは郵便「ゆうメール」での発送です）<br>
            <span class="text-red">※挨拶状／アンケート付きカレンダー以外をご注文の場合は、「差出人ラベル」が必要です。</span>
        </p>

        <div class="row row-cols-2 row-cols-lg-3 px-lg-3 justify-content-center">
          <div class="col my-lg-4 my-2">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/mail/mail_img01_01.jpg" class="img-fluid" alt="現場作業風景">
            </div>
          </div>
          <div class="col my-lg-4 my-2">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/mail/mail_img01_02.jpg" class="img-fluid" alt="作業倉庫現地">
            </div>
          </div>
          <div class="col my-lg-4 my-2">
            <div class="card h-100 border-0 px-lg-3">
              <img src="/images/mail/mail_img01_03.jpg" class="img-fluid" alt="郵便局へ搬入">
            </div>
          </div>
        </div>

        <p class="small text-right">弊社ではプライバシーマーク認証現場による運営を行っております。<img src="/images/mail/Pmark.jpg" class="img-fluid" alt="プライバシーマーク"></p>

        <div class="row">
          <div class="col-12 col-lg-6 my-5">
            <h3><img class="img-fluid" src="/images/mail/mail_subtitle01.jpg" alt="＜挨拶状／アンケート付き＞をご利用の場合"></h3>
            <p class="snall">挨拶状に印字されたLP様名が、封筒左下窓から見えます。</p>
            <p class="mb-5"><img class="img-fluid" src="/images/mail/mail_img02.jpg" alt="挨拶状に印字されたLP様名が、封筒左下窓から見えます。"></p>
            <p class="snall">差出人ラベルは<span class="text-red">不要</span>です。</p>
            <p><img class="img-fluid" src="/images/mail/mail_img04.jpg" alt="差出人ラベルは不要です"></p>
          </div>
          <div class="col-12 col-lg-6 my-5">
            <h3><img class="img-fluid" src="/images/mail/mail_subtitle02.jpg" alt="＜挨拶状／アンケート付き＞がなしの場合"></h3>
            <p class="snall">お名前が見えないので、<span class="text-red">「差出人ラベル」が必要</span>です。</p>
            <p class="mb-5"><img class="img-fluid" src="/images/mail/mail_img03.jpg" alt="挨拶状に印字されたLP様名が、封筒左下窓から見えます。"></p>
            <p class="snall"><span class="text-red">「差出人ラベル」を必ず宛名ラベルと共にお送りください。</span></p>
            <p><img class="img-fluid" src="/images/mail/mail_img05.jpg" alt="差出人ラベルは不要です"></p>
            <p class="small text-right">※オプション料金：貼付代1枚10円（税別）</p>
           <p class="small text-right">※差出人ラベルがない場合、未着戻りが本社様に戻る場合があります</p>

          </div>
        </div>

        <div style="background-color:#e90f0e;color:#ffff;">
          <h3 class="h5 p-2 text-left pl-3 pt-2 pb-2">今年2024年から 例年の各支社カウンター様での「宛名ラベル」お預かりが無くなります</h3>
        </div>
        
        
        <div class="row">
          <div class="col-12 col-lg-9 mt-4">
            <p class="ml-3">
              発送代行お申し込みの方々には、個々に
              <span class="font-weight-bold">弊社提出用「レターパックプラス」をお届けさせて<br>いただきます</span>
              (全て弊社負担)。こちらへ同じくお届けをする「発送代行依頼書兼宛名ラベル<br>
              回収封筒」に必要事項を明記し、宛名ラベルを入れ、封を必ず閉じた上でレターパックプラス<br>
              に入れて、最寄り郵便局(郵便ポスト)から差出をいただきます。<br>
              <span class="font-weight-bold text-red">(１１月１日(金)弊社到着厳守)</span>
            </p>
            <br>
            <span class="font-weight-bold ml-3" style="display: inline-block; background-color:#ffe450;padding:3px">
              ※当方より提供するレターパックプラスは1度のみで再発行はいたしません。紛失等なきようご注意願います。
            </span>
            <p class="ml-3">
              <br>
              ※宛名ラベル提出と共に本レターパックプラスに「同封出来る範囲」で、挨拶状等(同封物)の<br>
              同時提出を受け付けます。
            </p>
          </div>
          <div class="col-12 col-lg-3 text-center mt-4">
            <img class="img-fluid" src="/images/mail/img_lpp.jpg" alt="商品イメージ表面">
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-12 mb-4">
            <p class="ml-3">
              (参考1：レターパックプラスは重量４㎏以内であれば、厚さが３㎝を超えても受け付ける仕様です)<br>
              (参考2：18面ラベルを目安にする場合、18面ラベル×200シート(3600枚ラベル相当)で2.7㎝/重量1.62㎏と<br>
              なります。メーカーによる)<br>
              <span class="font-weight-bold">※同封物のご提出が上記にそぐわない方（例：量が多く入らない、制作が間に合わない等）は、<br>
              　例年通り11月15日(金)当方必着にてご自身負担でお送りください。</span>
            </p>
          </div>
        </div>


        <div class="bg-headline mt-4">
          <h3 class="h5 p-2 text-left">宛名ラベルを、締切日までに ご準備ください</h3>
        </div>
        <div class="row">
          <div class="col-12 col-lg-3 text-center my-4">
            <img class="img-fluid" src="/images/mail/mail_img06.jpg" alt="宛名ラベル">
          </div>
          <div class="col-12 col-lg-9 my-4">
            <p>【ラベルの控えについて】</p>
            <p>宛名ラベルは重要な個人情報となりますので、弊社で控えを取ることは一切ございません。</p>
            <p>御社コンプライアンス上、ラベルを出力された送り先全ての管理は、各LP様でお願いいたします。</p>

            <p class=" mt-4">【発送先ご住所が変わった場合】</p>
            <p>ゆうメールでの発送は、郵便局の取扱いです。ご契約者様が郵便局での転居手続きを行っていらっしゃれば、新住所への転送処理がなされます。（届出から1年間有効）</p>
          </div>
        </div>

        <div class="bg-headline-red-border mt-5">
          <h3><img class="img-fluid" src="/images/mail/mail_subtitle04.jpg" alt="需要なご案内"></h3>
        </div>

        <div class="px-3">
          <p class="mb-3 small">2020年度より本事業はPOJ本社様との業務委託契約に倣い運用されています。個人情報に関する運用は、以下事項を特にご注意ください。</p>
          <ul class="small">
            <li>作業進行中、弊社が他業務にも支障をきたすと判断をした場合</li>
            <li>宛名ラベルやご提出物等に不備が見受けられる場合(発送代行依頼書の記入も含む)</li>
            <li>宛名ラベル、関連資材物(私信等含む)が弊社指定日(〆切日)に「到着」が成らない場合</li>
          </ul>
          <p class="small">以上が見受けられる場合は、POJ本社様に報告をした上で、ご購入いただいた商品を支社送りに変更させていただく場合が有ります。皆さまのご理解、ご協力を重ねてお願い申し上げます。</p>
        </div>
        <div class="bg-headline-red-border p-2 mb-lg-6">
        </div>
        <div class="row d-none d-md-block">
          <div class="col-100 text-center my-10">
            <img class="img-fluid" src="/images/mail/option.jpg" alt="発送代行スケジュール">
          </div>
        </div>
        <div class="row d-block d-md-none">
          <div class="col-12 my-4">
            <p><img class="img-fluid" src="/images/mail/option_SP.jpg" alt="販売スケジュール"></p>
          </div>
        </div>

        <div class="row py-2 border-top border-bottom border-dark">
          <div class="row">
            <div class="col-12 col-lg-3">
               <p class="px-2"><span class="font-weight-bold">【別途作業価格/一例】</span></p>
            </div>
            <div class="col-12 col-lg-9 ">
              <p class="px-2">
               ◆封入物1点追加あたり…10円（税込11円）<br>
               ◆折加工作業…5円（税込6円）<br>
               ◆差出人ラベル印刷（1部あたり）…10円（税込11円）<br>
               ◆個人客様やご自宅への荷物発送(佐川急便1箱あたり)…900円(税込990円) 北海道、沖縄除く全国一律<br>
               <span class="font-weight-bold text-red">
                 ◆お客様毎や特定された方のみの発送など「特別な」業務と当方が判断した場合、上記作業単価とは別に、作業時間費(1時間2000円(税込2200円)を頂戴いたします。最低1時間、端数分は切上げの時間請求）
               </span>
              </p>
            </div>
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
      <script>

      </script>

      @stop
