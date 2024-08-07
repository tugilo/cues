@extends('layouts.calendar_page')
@section('title', 'カレンダートップ')

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
          <span property="name" class="post post-post current-item">スケジュール/ お支払い</span>
          <meta property="url" content="/calendar/schedule">
          <meta property="position" content="2">
      </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">


      <!-- s:content-box -->
      <section class="content-box mt-0">

        <div class="bg-light">
          <div class="container">
            <h2 class="h1 py-4 text-dark-blue">カレンダー販売・発送代行スケジュール</h2>
          </div> <!-- .container -->
        </div>

        <div class="container">

          <p>販売期間により、ご購入いただけない商品がございます。</p>
          <p>なるべく早めにご注文くださいますよう、お願いいたします。</p>

          <div class="mt-5 bg-light-blue">
            <h3 class="p-3">販売スケジュール</h3>
          </div>
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

          <p>◆注意事項◆</p>
          <dl>
            <dt class="float-left"><span class="text-red">※1</span>：</dt>
            <dd class="ml-5">一次販売で購入された方の二次/三次販売期間での「追加」購入は、販売価格の変更や最小注文部数はなく、一次販売時の条件でご購入いただけます。<br>（卓上カレンダー（ハガキサイズ）のみ一次販売より最小注文部数の設定があります）</dd>
          </dl>
          <dl>
            <dt class="float-left"><span class="text-red">※2</span>：</dt>
            <dd class="ml-5">
              二次/三次販売では販売価格を変更しております(1部あたり＠20円(税込22円)増)。
              
            </dd>
          </dl>
          <dl>
            <dt class="float-left"><span class="text-red">※3</span>：</dt>
            <dd class="ml-5">卓上カレンダー(LP様情報有)に関しては製造に時間を要す為、一次販売で受注を終了しております。</dd>
          </dl>

          <div class="mt-5 bg-light-blue">
            <h3 class="p-3">発送代行スケジュール</h3>
          </div>
          <div class="row d-none d-md-block">
            <div class="col-12 text-center my-4">
              <img class="img-fluid" src="/images/schedule/schedule_img02.jpg" alt="発送代行スケジュール">
            </div>
          </div>
          <div class="row d-block d-md-none">
            <div class="col-12 my-4">
              <p><img class="img-fluid" src="/images/schedule/schedule_img08.jpg" alt="販売スケジュール"></p>
              <p><img class="img-fluid" src="/images/schedule/schedule_img09.jpg" alt="販売スケジュール"></p>
              <p><img class="img-fluid" src="/images/schedule/schedule_img10.jpg" alt="販売スケジュール"></p>
            </div>
          </div>

          <dl class="mb-5">
            <dt class="float-left"><img class="img-fluid" src="/images/schedule/mark_01.png"></dt>
            <dd class="ml-4">
              <h4 class="h3">振替申込締切（未申込みの方のみ）<br>10月7日（月）まで</h4>
              <p>初めてご注文の方には預金口座振替書類をお送りいたします。預金口座振替依頼書に記入/捺印いただき同封の返信用封筒でお送りください（切手不要）。　※昨年、既にお申込みの方は不要です。但し、口座変更がある場合は、新しくお申し込みが必要です（お申し出ください）。</p>
            </dd>
          </dl>
          <dl class="mb-5">
            <dt class="float-left"><img class="img-fluid" src="/images/schedule/mark_02.png"></dt>
            <dd class="ml-4">
              <h4 class="h3">ラベル提出締切日<span class="text-red">【重要:本年よりご提出方法が変更されます】</span><br>11月1日(金)弊社到着<span class="text-red">【厳守】</span></h4>
              <p>
                発送代行お申し込みの方々には、弊社提出用「レターパックプラス」をお届けさせていただきます(全て弊社負担)。
                こちらへ同じくお届けをする「発送代行依頼書兼宛名ラベル回収封筒」に必要事項を明記し、
                宛名ラベルを入れ、封を必ず閉じた上でレターパックプラスに入れて、最寄り郵便局(郵便ポスト)へ差出をお願いいたします。
              </p>
              <p class="text-red font-weight-bold">※当方より提供するレターパックプラスは1度のみで再発行はいたしません。紛失等なきようご注意願います。</p>
              <p>
                ※レターパックプラスについての仕様は下記サイトをご覧ください。
                <a href="https://www.post.japanpost.jp/service/letterpack/" target="_blank">https://www.post.japanpost.jp/service/letterpack/</a>
              </p><br>
              <p>
                ※宛名ラベル提出と共に本レターパックプラスに同封出来る範囲で、挨拶状等（同封物）の同時提出を受け付けます。
                （参考1:レターパックプラスは重量４㎏以内であれば、厚さが３㎝を超えても受け付ける仕様です）
                （参考2：よく使われている18面ラベルを目安にする場合、18面ラベル×200シート(3600枚ラベル相当)で2.7㎝/重量1.62㎏となります。製造メーカーによって様々です。あくまで参考値としてください。）
              </p>
              <p class="font-weight-bold">※発送代行/支社納品、両方ご注文の場合、支社様へのご納品は、ラベル到着後、弊社内でラベル検数後の発送となります。</p>
            </dd>
          </dl>
          <dl class="mb-5">
            <dt class="float-left"><img class="img-fluid" src="/images/schedule/mark_03.png"></dt>
            <dd class="ml-4">
              <h4 class="h3">同封物（私製あいさつ状、会社パンフ等）関連資材<br><span class="text-red">【厳守】</span>11月15日（金）まで</h4>
              <p>同封物が<span class="text-red">期日内に届かない場合は、カレンダーのみでの発送</span>となりますので、ご注意ください。</p>
            </dd>
          </dl>
          <dl class="mb-5">
            <dt class="float-left"><img class="img-fluid" src="/images/schedule/mark_04.png"></dt>
            <dd class="ml-4">
              <h4 class="h3">発送代行<br>
                12月1日（日）～12月14日（土）</h4>
              <p>おおよそ支社様毎に順次投函し、期間内に全てを完了いたします。作業完了の方々へは順次ご請求書（口座振替明細書）を発行します。</p>
              <p>倉庫での作業は11月上旬より開始しており、倉庫作業中の商品抜出や停止、差替え、追加は作業行程上、ご希望に沿えませんので、ご理解ご協力をお願いいたします。また、投函日や時期の指定も固くお断りしております。</p>
              <p>弊社作業の都合も含め、ゆうメール販売代理店表記のラベルを貼付し、投函する場合があります(サービス/品質等、一切変わりません)。</p>
            </dd>
          </dl>
          <dl class="mb-5">
            <dt class="float-left"><img class="img-fluid" src="/images/schedule/mark_05.png"></dt>
            <dd class="ml-4">
              <h4 class="h3">振替日<br>
              12月27日（金）</h4>
              <p>お申込みいただいた口座よりお代金の振替をさせていただきます。ご指定口座へのご入金をお忘れなきようお願いいたします。</p>
            </dd>
          </dl>

        </div> <!-- .container -->

      </section>
      <!-- n:content-box -->

      <!-- s:content-box -->
      <section class="content-box">

        <div class="bg-light">
          <div class="container">
            <h2 class="h1 py-4 text-dark-blue">お支払いについて</h2>
          </div> <!-- .container -->
        </div>

        <div class="container">

          <dl class="mb-2">
            <dt class="float-left">※</dt>
            <dd class="ml-4">
              <p>弊社ではカレンダーのご購入代金全ての決済に関し、口座振替システムのご利用をいただいております。<br>昨年ご利用の方はお申込み不要です（但し、口座情報に変更がある場合はご連絡をお願いいたします）。<br>口座振替は送金のお手続きを不要とし、利便性を大きく向上させ、弊社事務手続きの簡素化にもご協力いただいております。</p>
            </dd>
          </dl>
          <dl class="mb-2">
            <dt class="float-left">※</dt>
            <dd class="ml-4">
              <p>弊社より金融機関への登録手配を行います。書類不備がある場合は、改めてご記入/お申込みをいただきます。</p>
            </dd>
          </dl>
          <dl class="mb-2">
            <dt class="float-left">※</dt>
            <dd class="ml-4">
              <p>事務手数料としてご請求書(時)に一律200円(税込220円)をお願いしております。</p>
            </dd>
          </dl>
          <dl class="mb-2">
            <dt class="float-left">※</dt>
            <dd class="ml-4">
              <p>振替日の約3日前までに「口座振替請求ご案内はがき」を決済受託会社よりお届けします。<br>振替日の前日までにお代金のご準備をいただきますようお願いいたします。</p>
            </dd>
          </dl>
          <dl class="mb-2">
            <dt class="float-left">※</dt>
            <dd class="ml-4">
              <p>振替日に引落しがされなかった場合、ご請求書を再発行させていただき、弊社指定口座に期日内のご入金をいただきます。<br>その際、お振込手数料はご負担いただきます(振替手数料は引落しの有無関係なくご請求申し上げます)。</p>
            </dd>
          </dl>

        </div> <!-- .container -->

      </section>
      <!-- n:content-box -->

  </div>
</article> <!-- .main-content -->

      @stop
      @section('css')
      @stop

      @section('js')
      <script>

      </script>

      @stop
