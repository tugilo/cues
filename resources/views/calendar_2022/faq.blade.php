@extends('layouts.calendar_page')
@section('title', 'よくある質問')

@section('content')

<article class="main-content border-top">
  <header class="main-content-header faq">
    <div class="container">
      <div class="page-cover">
        <h2 class="m-0">よくある質問</h2>
      </div>
    </div> <!-- .container -->
  </header>
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="ホーム" href="../calendar_top.html" class="home"><i class="fas fa-home"></i><span property="name">ホーム</span></a><meta property="position" content="1"></span> <i class="fas fa-angle-right"></i> <span property="itemListElement" typeof="ListItem"><span property="name" class="post post-post current-item">よくある質問</span><meta property="url" content="./index.html"><meta property="position" content="2"></span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <!-- s:content-box -->
      <section class="content-box">

        <p class="mb-4">カレンダーや、発送代行、お支払いについてなど、お問い合わせの多い内容を掲載しております。<br>該当するご質問内容を選択し、ご確認ください。</p>

        <div class="row row-cols-1 row-cols-lg-3 category-faq">
          <div class="col my-2">
            <a href="#faq01" class="card">
              <div class="card-body">
                <h3 class="card-title">ご注文について</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq02" class="card">
              <div class="card-body">
                <h3 class="card-title">カレンダーについて</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq03" class="card">
              <div class="card-body">
                <h3 class="card-title">挨拶状/アンケートについて</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq04" class="card">
              <div class="card-body">
                <h3 class="card-title">無料特典（年末挨拶状）について</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq05" class="card">
              <div class="card-body">
                <h3 class="card-title">発送代行について</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq06" class="card">
              <div class="card-body">
                <h3 class="card-title">差出人ラベルについて</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq07" class="card">
              <div class="card-body">
                <h3 class="card-title">宛名ラベルについて</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq08" class="card">
              <div class="card-body">
                <h3 class="card-title">ご納品について</h3>
              </div>
            </a>
          </div>
          <div class="col my-2">
            <a href="#faq09" class="card">
              <div class="card-body">
                <h3 class="card-title">お支払いについて</h3>
              </div>
            </a>
          </div>
        </div>

        <h2 id="faq01" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle01.png" alt="ご注文について"></h2>
        <div class="accordion faq" id="accordionFaq100">
          <div class="card">
            <div class="card-header" id="headingFaq101">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFaq101" aria-expanded="true" aria-controls="collapseFaq101">
                  注文はWEBだけですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq101" class="collapse show" aria-labelledby="headingFaq101" data-parent="#accordionFaq100">
              <div class="card-body">
                <p>弊社ではお名前等の誤入力事故(特に常用漢字以外のお名前)を防ぐため、電話/FAX、メールでのご注文はお受けしておりません。本WEBでのご注文にご協力をお願い致します。また、入力後の確定メール(入力者情報、購入内容)は必ずご確認をお願いいたします。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq102">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq102" aria-expanded="false" aria-controls="collapseFaq102">
                  現在の登録情報を見ることはできますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq102" class="collapse" aria-labelledby="headingFaq102" data-parent="#accordionFaq100">
              <div class="card-body">
                <p>サイト内、マイページでご確認いただけます。ご利用ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq103">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq103" aria-expanded="false" aria-controls="collapseFaq203">
                  昨年の購入部数や内容は判りますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq103" class="collapse" aria-labelledby="headingFaq103" data-parent="#accordionFaq100">
              <div class="card-body">
                <p>サイト内、マイページでご確認いただけます。ご利用ください。</p>
              </div>
            </div>
          </div>
        </div>

        <h2 id="faq02" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle02.png" alt="カレンダーについて"></h2>
        <div class="accordion faq" id="accordionFaq200">
          <div class="card">
            <div class="card-header" id="headingFaq201">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq201" aria-expanded="true" aria-controls="collapseFaq201">
                  壁掛けカレンダー（挨拶状／アンケート付）、壁掛けカレンダー「のみ」、卓上カレンダーを自分で発送したい場合はどうしたらいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq201" class="collapse" aria-labelledby="headingFaq201" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>郵便局窓口で郵便料金、またはゆうメールの料金をお支払いし差出ください（切手の場合は、ゆうメール表示部の上に貼付ください。その場合はポスト投函可）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq202">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq202" aria-expanded="false" aria-controls="collapseFaq202">
                  封筒に「ゆうメール」の印刷がしてあるが、そのまま投函できますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq202" class="collapse" aria-labelledby="headingFaq202" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>そのままポストへの投函は出来ません。郵便局窓口で郵便料金、またはゆうメールの料金をお支払いし差出ください（切手の場合は、ゆうメール表示部の上に貼付ください。その場合はポスト投函可）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq203">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq203" aria-expanded="false" aria-controls="collapseFaq203">
                  壁掛けカレンダー（A4特寸サイズ）は、角２封筒などに入りますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq203" class="collapse" aria-labelledby="headingFaq203" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>はい、入ります（支社様備付の紙封筒をご利用いただけます）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq204">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq204" aria-expanded="false" aria-controls="collapseFaq203">
                  卓上カレンダー（ハガキサイズ）は、長３封筒に入りますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq204" class="collapse" aria-labelledby="headingFaq204" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>はい、入ります（支社様備付の紙封筒をご利用いただけます）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq205">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq205" aria-expanded="false" aria-controls="collapseFaq205">
                  一次、二次、三次の販売時期がありますが、何が違うのですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq205" class="collapse" aria-labelledby="headingFaq205" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>販売時期により、ご注文いただけない商品があり、二次/三次販売の際は価格も変更となりますので、一次販売時期でのご注文をお薦めいたします（詳しくは<a href="#">こちらの表</a>をご確認ください）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq206">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq206" aria-expanded="false" aria-controls="collapseFaq206">
                  注文部数の変更やキャンセルは出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq206" class="collapse" aria-labelledby="headingFaq206" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>弊社制作の全商品は「完全受注生産」となっております。ご注文後のキャンセル、数量減は確定メールが送信された48時間後には理由問わず受けかねますのでご注意ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq207">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq207" aria-expanded="false" aria-controls="collapseFaq207">
                  商品の汚損など発生した場合はどうすればよろしいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq207" class="collapse" aria-labelledby="headingFaq207" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>商品製造に関しましては万全を期しておりますが、万が一、汚れ・落丁・乱丁等の商品が見受けられた際は代替品のご案内をさせていただいております。お手数ですが弊社までご連絡をお願い致します。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq208">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq208" aria-expanded="false" aria-controls="collapseFaq208">
                  制作物やサイト等に関する権利はどのようになっていますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq208" class="collapse" aria-labelledby="headingFaq208" data-parent="#accordionFaq200">
              <div class="card-body">
                <p>挨拶文、挨拶状及びカレンダー等の制作物、並びに本サイトに含まれる全ての写真等の画像、デザイン、テキストはいずれも弊社またはその著作権者に帰属しており、無断複製・無断転載（SNSその他インターネット上での公開・配信等も含みます）は著作権法上、禁止されています。また、これらの制作物及び本サイトに含まれるロゴ、サービス名及び商品名等の標章は、弊社またはその商標権者に帰属しており、商標としての無断使用は商標法上禁止されています。</p>
              </div>
            </div>
          </div>
        </div>

        <h3 class="h4 mt-lg-5 mt-5">LP様よりいただいたコメント</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">「お客様からも例年楽しみにしているとのお声掛けがある」　K支社 LP様</li>
          <li class="list-group-item">「ロックマークのある暦月を飾っていただいているのを見かけた時、誇らしく感じました」C支社 LP様</li>
          <li class="list-group-item">「初版販売分から歴代のカレンダーをコレクション下さっているお客様が多くてですね」O支社　LP様</li>
        </ul>

        <h2 id="faq03" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle03.png" alt="挨拶状/アンケートについて"></h2>
        <div class="accordion faq" id="accordionFaq300">
          <div class="card">
            <div class="card-header" id="headingFaq301">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq301" aria-expanded="true" aria-controls="collapseFaq301">
                  「挨拶状／アンケート」のメリットは何ですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq301" class="collapse" aria-labelledby="headingFaq301" data-parent="#accordionFaq300">
              <div class="card-body">
                <p>時間です。本制作物は全てPOJ本社様コンプライアンスチェック済みであり、安心して皆さまが直ぐご利用いただける内容となっており、特にアンケートは煩わしい郵便局への申請や準備を全て当方が行い(本仕様は必ずご確認ください)、お客様から還ってくる郵送費も弊社負担としています。現場の皆さまが日々活動に要する時間を最大限確保出来る仕様になっています。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq302">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq302" aria-expanded="false" aria-controls="collapseFaq302">
                  内容の変更は出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq302" class="collapse" aria-labelledby="headingFaq302" data-parent="#accordionFaq300">
              <div class="card-body">
                <p>お問合せをいただく内容として、「返信先宛名を支社長(管理職様)ではなく個人名に出来ますか？」「アンケート内容を変更出来ますか？」がございます。前者の場合は、支社様単位で所属メンバーの皆さまが全員お使いいただけますよう、申請者名は(その支社)代表の方お一人様を頂戴しております（また法人名義での申請は、御社コンプライアンス上出来ません）。</p>
                <p>後者の場合は、前述のご説明と同義で全ての方にご利用をいただけることを目的としておりますのでカスタマナイズの仕様はご希望に沿えません(個人名のアンケートをご希望の方は、ご制作いただいたものを同封物としてお送りすることは可能です。お尋ねください)。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq303">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq303" aria-expanded="false" aria-controls="collapseFaq303">
                  「挨拶状／アンケート」だけ販売して欲しい
                </a>
              </h3>
            </div>
            <div id="collapseFaq303" class="collapse" aria-labelledby="headingFaq303" data-parent="#accordionFaq300">
              <div class="card-body">
                <p>「挨拶状/アンケート」単体での販売はしておりません。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq304">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq304" aria-expanded="false" aria-controls="collapseFaq304">
                  使用出来る対象支社ではない場合、どうしたらいいか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq304" class="collapse" aria-labelledby="headingFaq304" data-parent="#accordionFaq300">
              <div class="card-body">
                <p>お申し出ください。当方にて申請の準備を整えます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq305">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq305" aria-expanded="false" aria-controls="collapseFaq305">
                  裏面の経済トピックスを見せて欲しい
                </a>
              </h3>
            </div>
            <div id="collapseFaq305" class="collapse" aria-labelledby="headingFaq305" data-parent="#accordionFaq300">
              <div class="card-body">
                <p>トピックスは製造に入る寸前まで制作を行っております。皆さまへのご案内は例年10月頃になるかと思います。ご承知おきください。</p>
              </div>
            </div>
          </div>
        </div>

        <h3 class="h4 mt-lg-5 mt-5">LP様よりいただいたコメント</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">「アンケートの返信がきっかけでお客様と面談が出来、新規のご契約をお預かり出来た」　S支社 LP様</li>
          <li class="list-group-item">「料金受取人払の申請代行と料金負担がないことは、思った以上に業務に集中でき、大きな驚きだった」O支社 管理職様</li>
        </ul>

        <h2 id="faq04" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle04.png" alt="無料特典「年末挨拶状」について"></h2>
        <div class="accordion faq" id="accordionFaq400">
          <div class="card">
            <div class="card-header" id="headingFaq401">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq401" aria-expanded="true" aria-controls="collapseFaq401">
                  壁掛けカレンダー購入者対象ですが、最低購入部数はありますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq401" class="collapse" aria-labelledby="headingFaq401" data-parent="#accordionFaq400">
              <div class="card-body">
                <p>壁掛けカレンダー（種類問わず）を20部以上ご購入いただいた方にご利用いただけます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq402">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq402" aria-expanded="false" aria-controls="collapseFaq402">
                  どこからダウンロードしたらいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq402" class="collapse" aria-labelledby="headingFaq402" data-parent="#accordionFaq400">
              <div class="card-body">
                <p>前述の対象者の方のみ、マイページの購入履歴ページに、ダウンロードボタンが表示されます。そちらからご利用ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq403">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq403" aria-expanded="false" aria-controls="collapseFaq403">
                  カレンダーに本挨拶状を同封しての発送代行を依頼出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq403" class="collapse" aria-labelledby="headingFaq403" data-parent="#accordionFaq400">
              <div class="card-body">
                <p>可能です。</p>
              </div>
            </div>
          </div>
        </div>

        <h2 id="faq05" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle05.png" alt="発送代行について"></h2>
        <div class="accordion faq" id="accordionFaq500">
          <div class="card">
            <div class="card-header none-label" id="headingFaq501">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left text-red collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq501" aria-expanded="true" aria-controls="collapseFaq501">
                  【重要】全ての事業(業務)はPOJ本社様との業務委託契約に倣い運用されています。個人情報が関わる運用は、以下3項目を特にご注意ください。
                </a>
              </h3>
            </div>
            <div id="collapseFaq501" class="collapse" aria-labelledby="headingFaq501" data-parent="#accordionFaq500">
              <div class="card-body none-label">
                <ol>
                  <li>宛名ラベル、関連資材物(私信等含む)が弊社指定日(〆切日)に「到着」が成らない場合</li>
                  <li>宛名ラベルやご提出物等に不備が見受けられる場合(発送代行依頼書記入も含む)</li>
                  <li>受託時及び作業進行中、弊社が他業務にも支障をきたすと判断をした場合(弊社からの質問、問いかけに応じていただけない場合(理由如何問わず)も含みます)</li>
                </ol>
                <p>以上に該当する場合は、POJ本社様に報告をした上で、ご購入いただいた商品を支社送りに変更させていただく場合が有ります(変更した場合は当年度の発送代行業務は他行程安全遵守の為、お受け出来ません)。安全安心な業務を確保する為、皆さまのご理解、ご協力を重ねてお願い申し上げます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq502">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq502" aria-expanded="false" aria-controls="collapseFaq502">
                  発送はメール便ですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq502" class="collapse" aria-labelledby="headingFaq502" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>弊社では、メール便より品質が高いとされる郵便（ゆうメール）で発送しております。お客様への到着率が極めて高く、好評をいただいています。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq503">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq503" aria-expanded="false" aria-controls="collapseFaq503">
                  壁掛けカレンダーと卓上カレンダーを一緒に送付することは出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq503" class="collapse" aria-labelledby="headingFaq503" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>可能ですが、壁掛けカレンダーに卓上は1～2つしか入りません(サイズ、重量に依る)。同封物(固形物)等が同封されますと、封筒が破れる（裂ける）場合もございますので内容物にはご注意ください(破損汚損は弊社免責扱いとさせていただいております)。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq504">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq504" aria-expanded="false" aria-controls="collapseFaq504">
                  カレンダーに同封して欲しい私製挨拶状などはどうしたらいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq504" class="collapse" aria-labelledby="headingFaq504" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>カレンダーへの同封物は、個別に弊社事務所に11月18日(金)まで必着(到着厳守)でお送りください。また同封物の封入順、方法等の指示がない場合は当方任意の作業とさせていただいております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq505">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq505" aria-expanded="false" aria-controls="collapseFaq505">
                  カレンダーへの同封物提出の締切日はいつですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq505" class="collapse" aria-labelledby="headingFaq505" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>カレンダーへの同封物は、個別に弊社事務所に11月18日(金)まで必着(到着厳守)でお送りください。また同封物の封入順、方法等の指示がない場合は当方任意の作業とさせていただいております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq506">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq506" aria-expanded="false" aria-controls="collapseFaq506">
                  個々のお客様ごとに同封物を変更することは出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq506" class="collapse" aria-labelledby="headingFaq506" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>ごく少量の個々お客様毎や多種に渡る作業内容は「単純な場合」のみ、それらに掛る「作業時間」費を別途頂戴しております。また、これら類の作業はご希望とされる作業内容、形状/重量によってPOJ様業務委託契約に基づき、弊社判断でお断りする場合がございます。ご了承くださいますようお願いいたします(前年作業実績をみて、当年度ではお受けしない場合もあります)。また、封入順等ご指示がない場合、当方任意での作業とさせていただいております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq507">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq507" aria-expanded="false" aria-controls="collapseFaq507">
                  差出人ラベル無しで発送可能ですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq507" class="collapse" aria-labelledby="headingFaq507" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>発送は可能ですが、お客様未達の場合、本社(赤坂)様へのご返送と思われます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq508">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq508" aria-expanded="false" aria-controls="collapseFaq508">
                  無料特典の「年末挨拶状」を同封して発送代行を依頼出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq508" class="collapse" aria-labelledby="headingFaq508" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>可能です。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq509">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq509" aria-expanded="false" aria-controls="collapseFaq509">
                  卓上カレンダーに同封物を入れて発送代行を依頼出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq509" class="collapse" aria-labelledby="headingFaq509" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>卓上カレンダーは、既に封が閉じられている完成品になっておりますので同封物を入れる場合は、本卓上カレンダーと同封物（A4挨拶状であれば二つ折りにし）を弊社提供の透明封筒に入れてお送りしております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq510">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq510" aria-expanded="false" aria-controls="collapseFaq510">
                  発送代行で投函される日はいつですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq510" class="collapse" aria-labelledby="headingFaq510" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>おおよそ支社様毎に11月30日（水）～12月10日（土）の期間内で順次投函となります。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq511">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq511" aria-expanded="false" aria-controls="collapseFaq511">
                  発送代行のオプション料金はいくらですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq511" class="collapse" aria-labelledby="headingFaq511" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>A.	主なものとしては下記内容をお願いしております。</p>
                <ul>
                  <li>封入物1点追加あたり…10円（税込11円）</li>
                  <li>ラベル（差出人表記等）貼作業…5円（税込6円）</li>
                  <li>折加工作業…5円（税込6円）</li>
                  <li>ホッチキス留（1部あたり）…10円（税込11円）</li>
                  <li>差出人ラベル印刷（1部あたり）…10円（税込11円）</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq512">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq512" aria-expanded="false" aria-controls="collapseFaq512">
                  無用になったお客様がいるので発送を停めて欲しい
                </a>
              </h3>
            </div>
            <div id="collapseFaq512" class="collapse" aria-labelledby="headingFaq512" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>発送代行作業は既に11月1週目から始まっており、例年大量の部数を郵便局へ投函しております。倉庫作業中の商品抜出や停止、差替え、追加は行程上、ご希望に沿えません。お控えをいただきますようにお願い申し上げます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq513">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq513" aria-expanded="false" aria-controls="collapseFaq513">
                  ゆうメールの表記が変わっているものがある
                </a>
              </h3>
            </div>
            <div id="collapseFaq513" class="collapse" aria-labelledby="headingFaq513" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>作業付加案件や弊社作業行程上、ゆうメール販売代理店の表記を記したラベルを貼付しお送りする場合があります。サービスや品質に変わりはございませんのでご安心ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq514">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq514" aria-expanded="false" aria-controls="collapseFaq514">
                  利用条件に関してはどう考えていますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq514" class="collapse" aria-labelledby="headingFaq514" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>利用条件はすべて郵便局約款に準拠しております(2021年10月より土日の配達はされません等)。併せてお客様への到着指定日(時期)、投函時期のご希望は一切お応え出来ません。また、投函後の事故、破損、未着、延着等も郵便局約款に基づいたご案内としております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq515">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq515" aria-expanded="false" aria-controls="collapseFaq515">
                  投函後に封入物(同封希望物など)が入っていないという指摘を(お客様から)貰った
                </a>
              </h3>
            </div>
            <div id="collapseFaq515" class="collapse" aria-labelledby="headingFaq515" data-parent="#accordionFaq500">
              <div class="card-body">
                <p>申し訳ございません。投函後に同封物の不足など不備が確認された場合、その事象が確認された(併せて現場の作業確認を行いつつ)部数×送料のみをお値引き(或いはご返金)をさせていただきます。その他個々の交渉には応じかねますのでご了承ください。</p>
              </div>
            </div>
          </div>
        </div>

        <h3 class="h4 mt-lg-5 mt-5">LP様よりいただいたコメント</h3>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">「毎年恒例行事のようにやっていた業務がなくなり、こんなに時間が確保出来るとは想像していなかった」　M支社 LP様</li>
          <li class="list-group-item">「みんな喜んでいる。営業所単位で考えると圧倒的に生産性が上がったと実感している」N支社 管理職様</li>
          <li class="list-group-item">「納品されるカレンダーの数量が減り、支社内の美観が驚く程保たれ、カウンタースタッフの業務も軽減されたようだ」O支社 管理職様</li>
        </ul>

        <h2 id="faq06" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle06.png" alt="宛名ラベルについて"></h2>
        <div class="accordion faq" id="accordionFaq600">
          <div class="card">
            <div class="card-header" id="headingFaq601">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq601" aria-expanded="true" aria-controls="collapseFaq601">
                  宛名ラベルはどのように、いつまでに送ればいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq601" class="collapse" aria-labelledby="headingFaq401" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>発送代行ご希望の方には、「発送代行依頼書兼宛名ラベル回収封筒」と「宛名ラベル印刷虎の巻」を弊社からお届けし、ラベル提出期間を10月28日（金）～11月4日（金）弊社到着【期間厳守】としております。提出方法などにつきましては、支社様単位で個別にメール等で事前案内をさせていただきます。</p>
                <p>個別でお送りいただく場合は必ず簡易書留、若しくはゆうパック等、受取記録が残る発送方法でお送りください。また「発送代行依頼書兼宛名ラベル回収封筒」には、ラベル数をご記入いただきますので、必ず写真撮影やコピーなどでお手元に記録を残すようにお願いいたします。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq602">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq602" aria-expanded="false" aria-controls="collapseFaq602">
                  宛名ラベル用紙に規定はありますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq602" class="collapse" aria-labelledby="headingFaq602" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>発送代行ご希望の方にお送りする「宛名ラベル印刷虎の巻」をご参照ください。<br>12面ラベル、若しくは18面ラベルを推奨しております。特に印刷汚れ、印字ズレが多く散見されますので印刷機器の設定や使用方法にはご注意ください。また、裏面側に印刷しそのままのご提出は業務委託契約違反です(無用な情報提供にあたります)。廃棄し、新しく印刷をお願い致します。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq603">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq603" aria-expanded="false" aria-controls="collapseFaq603">
                  宛名ラベルの弊社控えについて
                </a>
              </h3>
            </div>
            <div id="collapseFaq603" class="collapse" aria-labelledby="headingFaq603" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>宛名ラベルは重要な個人情報となりますので、弊社で控えを取ることは一切ございません。<br>「どなたに送ったか分からなくなった」というご連絡を頂戴することがございますが、ご回答出来兼ねます。御社コンプライアンスに倣い、ラベルを出力された送り先様の管理は各発注者様でお願い致します（PCS操作方法も合わせてご確認ください）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq604">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq604" aria-expanded="false" aria-controls="collapseFaq604">
                  壁掛けカレンダーを送付する人や、卓上カレンダーを送付する人がいる場合、宛名ラベルはどうしたらいいですか?
                </a>
              </h3>
            </div>
            <div id="collapseFaq604" class="collapse" aria-labelledby="headingFaq604" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>「壁掛けカレンダー」用と、「卓上カレンダー」用で、宛名ラベルシートを分けて印刷してください。(注意：はさみで切りクリップで留めたり、シートから剥がし付け直したりする事は紛失、事故の元です。お控えください)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq605">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq605" aria-expanded="false" aria-controls="collapseFaq605">
                  発送先の住所が変わった場合はどうしたらいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq605" class="collapse" aria-labelledby="headingFaq605" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>ゆうメールでの発送は、郵便局の取り扱いです。ご契約者様が最寄り郵便局で転居手続きを行っていらっしゃれば、新住所への転送処理がなされます（届出から1年間有効）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq606">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq606" aria-expanded="false" aria-controls="collapseFaq606">
                  壁掛けカレンダーを送付する人や、卓上カレンダーを送付する人がいる場合、宛名ラベルはどうしたらいいですか?
                </a>
              </h3>
            </div>
            <div id="collapseFaq606" class="collapse" aria-labelledby="headingFaq606" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>「壁掛けカレンダー」用と、「卓上カレンダー」用で、宛名ラベルシートを分けて印刷してください。(注意：はさみで切りクリップで留めたり、シートから剥がし付け直したりする事は紛失、事故の元です。お控えください)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq607">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq607" aria-expanded="false" aria-controls="collapseFaq607">
                  宛名ラベルの数が注文数より多い(少ない場合）、発注部数の変更は出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq607" class="collapse" aria-labelledby="headingFaq607" data-parent="#accordionFaq600">
              <div class="card-body">
                <p>各回答は下記となります。</p>
                <h4 class="h5 mt-4">宛名ラベル数が多い場合</h4>
                <p>ご注文時「支社様納品」分を別にご注文いただいている場合は、その分より発送代行へ充当いただくか、追加のご注文をいただきます（当方より確認をさせていただきます）。</p>
                <h4 class="h5 mt-4">宛名ラベルが少ない場合</h4>
                <p>カレンダーに残が発生しますので、支社様へご納品させていただきます(当方から確認はいたしません)。</p>
              </div>
            </div>
          </div>



        </div>

        <h2 id="faq07" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle07.png" alt="差出人ラベルについて"></h2>
        <div class="accordion faq" id="accordionFaq700">
          <div class="card">
            <div class="card-header" id="headingFaq701">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq701" aria-expanded="true" aria-controls="collapseFaq701">
                  差出人ラベルはどのように作成すればいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq701" class="collapse" aria-labelledby="headingFaq701" data-parent="#accordionFaq700">
              <div class="card-body">
                <p>宛名ラベルと同様に作成ください。宛名ラベルに支社名・お名前が入ったスタンパーを押していただいたものでも代用いただけます(注意：スタンパーはインクが擦れ、きれいに表示されていない場合がありますので、お薦めは出来ません)。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq702">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq702" aria-expanded="false" aria-controls="collapseFaq702">
                  差出人ラベル作成を依頼出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq702" class="collapse" aria-labelledby="headingFaq702" data-parent="#accordionFaq700">
              <div class="card-body">
                <p>可能です。ラベル1枚10円（税別）を別途頂戴しております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq703">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq703" aria-expanded="false" aria-controls="collapseFaq703">
                  差出人ラベル無しで発送可能ですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq703" class="collapse" aria-labelledby="headingFaq703" data-parent="#accordionFaq700">
              <div class="card-body">
                <p>発送は可能ですが、お客様未達の場合、本社(赤坂)様へのご返送と思われます。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq704">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq704" aria-expanded="false" aria-controls="collapseFaq704">
                  私製挨拶状に名前が入っているので、それを差出人ラベルとして代用出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq704" class="collapse" aria-labelledby="headingFaq704" data-parent="#accordionFaq700">
              <div class="card-body">
                <p>壁掛けカレンダー（A4特寸サイズ）は、透明封筒にカレンダーが入っており、私製挨拶状を差出人ラベルの代用としてご利用いただけますが(透けて見える為)、他壁掛けカレンダーは紙封筒ですので、差出人ラベルは必要となります。</p>
                <p>卓上カレンダーの場合は、お名前が見えるよう私製挨拶状を折り、卓上カレンダーと共に、別に用意した透明封筒へ封入して送付いたします。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq705">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq705" aria-expanded="false" aria-controls="collapseFaq705">
                  スタンパーを送るので押してもらえませんか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq705" class="collapse" aria-labelledby="headingFaq705" data-parent="#accordionFaq700">
              <div class="card-body">
                <p>恐れ入りますが、ご対応でき兼ねます。</p>
              </div>
            </div>
          </div>
        </div>

        <h2 id="faq08" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle08.png" alt="ご納品について"></h2>
        <div class="accordion faq" id="accordionFaq800">
          <div class="card">
            <div class="card-header" id="headingFaq801">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq801" aria-expanded="true" aria-controls="collapseFaq801">
                  支社納品時期はいつですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq801" class="collapse" aria-labelledby="headingFaq801" data-parent="#accordionFaq800">
              <div class="card-body">
                <p>10月31日（月）より順次出荷となります。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq802">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq802" aria-expanded="false" aria-controls="collapseFaq802">
                  支社内で届いている人と、届いてない人がいるのはなぜですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq802" class="collapse" aria-labelledby="headingFaq802" data-parent="#accordionFaq800">
              <div class="card-body">
                <p>「支社納品のみ」のご注文をいただいている方は、先行し納品を準備しておりますが、発送代行をご依頼いただいている場合には、宛名ラベルが届き弊社内で検数後、残部（発送代行ご注文数と宛名ラベル数の差分）と共に支社様へ納品となります。またラベルの提出締切日以降に提出いただいた場合は、先にラベルご提出をいただいた方の検数が「完了次第」、順次の準備となりますのでその旨、ご了承くださいませ。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq803">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq803" aria-expanded="false" aria-controls="collapseFaq803">
                  カレンダーはどのような形態で納品されますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq803" class="collapse" aria-labelledby="headingFaq803" data-parent="#accordionFaq800">
              <div class="card-body">
                <p>支社様への納品分は、カレンダー本体を封筒に封入し、専用段ボールで各個人様宛てに納品いたします。商品が届きましたら、必ず数量と内容物のご確認をお願いいたします。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq804">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq804" aria-expanded="false" aria-controls="collapseFaq804">
                  カレンダーに、送付した私製挨拶状を封入(作業)して支社納品して貰うことは出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq804" class="collapse" aria-labelledby="headingFaq804" data-parent="#accordionFaq800">
              <div class="card-body">
                <p>対応出来ません。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq805">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq805" aria-expanded="false" aria-controls="collapseFaq805">
                  自宅に送ることは出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq805" class="collapse" aria-labelledby="headingFaq805" data-parent="#accordionFaq800">
              <div class="card-body">
                <p>ご自宅への納品の場合は、送料「1箱あたり」900円（税別）となります。<br>(北海道、沖縄、郡部離島は別途ご確認ください)</p>
              </div>
            </div>
          </div>
        </div>

        <h2 id="faq09" class="mt-5 pt-3 text-center"><img class="img-fluid" src="/images/faq/faq_subtittle09.png" alt="お支払いについて"></h2>
        <div class="accordion faq" id="accordionFaq900">
          <div class="card">
            <div class="card-header" id="headingFaq901">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq901" aria-expanded="true" aria-controls="collapseFaq901">
                  支払いは口座振替のみですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq901" class="collapse" aria-labelledby="headingFaq901" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>弊社商品ご購入代金のお支払いは全ての決済に関し口座振替システムをご利用いただいております。口座振替は今まで皆さまにお手数をお掛けしておりました送金のお手続きを不要とし、利便性を大きく向上させ、弊社事務手続きの簡素化にもご協力をいただいております。<br>(取扱可能金融機関情報は、振替事務代行会社である日本システム出納(株)の<a href="https://www.nss-jp.com/wp-content/uploads/2020/02/kinyukikan.pdf" target="_blank">ホームぺージ</a>をご覧ください)<br>なお、書類ご記入の際は銀行印、対象金融機関情報などお間違えの無いようご注意ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq902">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq902" aria-expanded="false" aria-controls="collapseFaq902">
                  各種クレジットカード等の支払いは出来ませんか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq902" class="collapse" aria-labelledby="headingFaq902" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>ございません。上記振替のみとなります。ご承知おきください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq903">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq903" aria-expanded="false" aria-controls="collapseFaq903">
                  請求書等の明細は届きますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq903" class="collapse" aria-labelledby="headingFaq903" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>作業が完了した方々より順次、封書にて口座振替明細書をお送りさせていただきます。また、振替日の約3日前までに決済機関より「口座振替請求ご案内はがき」をお送りしております。振替日前日までにお代金のご準備をいただきますよう、お願いいたします。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq904">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq904" aria-expanded="false" aria-controls="collapseFaq904">
                  口座振替の登録をしているかどうか判らない
                </a>
              </h3>
            </div>
            <div id="collapseFaq904" class="collapse" aria-labelledby="headingFaq904" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>サイト内、マイページのアカウント情報をご確認ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq905">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq905" aria-expanded="false" aria-controls="collapseFaq905">
                  振替の口座を変更出来ますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq905" class="collapse" aria-labelledby="headingFaq905" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>口座変更をご希望の方は、預金口座振替依頼書を改めてお送りいたしますので、10月6日（木）迄にご返送ください。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq906">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq906" aria-expanded="false" aria-controls="collapseFaq906">
                  初めての注文ですが、口座振替の申し込みはどうしたらいいですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq906" class="collapse" aria-labelledby="headingFaq906" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>初めてご注文いただいた方には、ご注文後、弊社より預金口座振替依頼書をお送りいたします。必要事項をご記入の上、同封の返信封筒にてお送りください（切手不要）。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq907">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq907" aria-expanded="false" aria-controls="collapseFaq907">
                  カレンダー代金以外に料金はかかりますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq907" class="collapse" aria-labelledby="headingFaq907" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>事務手数料としてご請求時に一律200円（税別）、支社様への納品発生の場合は送料300円（税別）を頂戴しております。また、発送代行ご依頼の方は送料やオプション料金が必要となります。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq908">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq908" aria-expanded="false" aria-controls="collapseFaq908">
                  支社納品の送料はいくらですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq908" class="collapse" aria-labelledby="headingFaq908" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>支社様への送料は部数にかかわらず1件300円（税別）をいただいております。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq909">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq909" aria-expanded="false" aria-controls="collapseFaq909">
                  口座振替はいつですか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq909" class="collapse" aria-labelledby="headingFaq909" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>12月27日（火）です。</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq910">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq910" aria-expanded="false" aria-controls="collapseFaq910">
                  振替日に引き落とし出来なかった場合はどうなりますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq910" class="collapse" aria-labelledby="headingFaq910" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>ご請求書を発行させていただきますので、弊社口座へ期日内のご入金をお願いいたします。その際、お振込手数料はご負担をいただいております(振替の手数料は引落しの有無に関係なくご請求を申し上げます)</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingFaq911">
              <h3 class="mb-0">
                <a class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFaq911" aria-expanded="false" aria-controls="collapseFaq911">
                  領収書をいただけますか？
                </a>
              </h3>
            </div>
            <div id="collapseFaq911" class="collapse" aria-labelledby="headingFaq911" data-parent="#accordionFaq900">
              <div class="card-body">
                <p>ご依頼の方には、別途お送りをさせていただいております。ご希望の方はお申し出ください。発行は１月半ば前後となります。また過去に「領収書希望」をお聞きしている方も同時期の発行となります。</p>
              </div>
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
