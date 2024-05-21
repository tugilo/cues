@extends('layouts.page')
@section('title', '商品一覧')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
            <div class="text-center">
                <img class="img-fluid" src="/assets/images/golftee_top_img.jpg" alt="ゴルフティー">
            </div>
        </div>
        <div class="mx-auto p-2">
            <p class="bold">
                ＜ご納品について＞<br>
                ご納品は2024年8月中〜下旬を予定しておりますが、メーカー都合により多少前後する場合がございます。<br>
                <br>
                ＜購入をご検討の方へ＞<br>
                市場価格より安価なご提供の為、POJ/PGA関係者様以外への販売/転売はメーカー様より固く禁じられております。
            </p>

        </div>
      </div>

      <div class="row row-cols-1 row-cols-lg-2 my-lg-2 py-lg-2">
          @if($syouhinlist)
          @foreach($syouhinlist as $sl)
          @if($sl->sm_web_disp_flg == 1)
          <!-- s:item -->
          <div class="col mb-4">
              @if($sl->sold_count == 0)

              <div class="card item-card text-center h-100 rounded-0">
                  <div class="border">
                    <img src="/assets/images/{{$sl->web_syouhin_image1}}" class="card-img-top" alt="{{$sl->web_syouhin_category_nm}}">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6">{{$sl->web_syouhin_category_nm}} <span class="text-red font-weight-bold">SOLDOUT</span></h3>
                    <p class="card-text text-left">{{number_format($sl->syohin_tanka)}}円（税込{{number_format($sl->syohin_tanka * 1.1)}}円）</p>
                  </div>
              </div>
              @else

              <a href="/syouhin/detail?category_cd={{$sl->syouhin_category_cd}}" class="card item-card text-center h-100 rounded-0">
                  <div class="border">
                    <img src="/assets/images/{{$sl->web_syouhin_image1}}" class="card-img-top" alt="{{$sl->web_syouhin_category_nm}}">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6">{{$sl->web_syouhin_category_nm}}</h3>
                    <p class="card-text text-left">{{number_format($sl->syohin_tanka)}}円（税込{{number_format($sl->syohin_tanka * 1.1)}}円）</p>
                  </div>
              </a>
              @endif

          </div>
          <!-- n:item -->
          @endif
          @endforeach
          @endif

      </div> <!-- .row -->
      <div class="row">
        <div class="col-12 my-4 py-4 border-top border-bottom">
          <h2>＜商品内容・本数＞</h2>
            <ul>
              <li>※ ツアーティ(ORIGINAL) 3本 / ツアーティ(MINI) 1本　計4本が1パック　を15パック入りで1セット</li>
              <li>※ サイズ：ORIGINAL/約80㎜、MINI/約45㎜</li>
              <li>※ 素　材：ラバー、ポリカーボネイト</li>
              <li>※ 市販で流通していない特別アソートパッケージです</li>
              <li>※ 次回の販売は未定です</li>
          </ul>

          <h2>＜商品・ご注文について＞</h2>
          <ul>
            <li>※ 1セット（＠15パック）よりお買い求めいただけます。</li>
            <li>※ 全てプルデンシャルロゴ入り(青色)での販売です。</li>
            <li>※ カラーは全商品ホワイトです(刻印も含め色、商品の指定は出来ません)。</li>
            <li>※ 納品送料として一律500円（税込550円）を頂戴いたします。（支社様以外(ご自宅等)のお届けの場合、ダンボール1箱あたり900円（税込990円）、但し北海道、沖縄、郡部離島の場合は別途申し受けます）。</li>
            <li>※商品のお届け先は全数「1か所のみ」で、分納は出来ません。</li>
            <li>※ 弊事業はPOJ本社業務委託契約の下で運営されており、本契約内容に抵触する用件が見受けられた場合、本社様へご報告する場合があります。</li>
            <li>※ ご注文後、「〆切日を超えて」のキャンセル、商品交換、発注数変更は「どんな理由の如何に関わらず」一切出来ず、返品もお受け出来ません。</li>
            <li>※ 市場価格より安価なご提供の為、POJ/PGA関係者様以外への販売/転売はメーカー様より固く禁じられております。</li>
            <li>※ 領収書の発行は「購入者(ご請求書宛)」名のみでの発行となります。その他のご希望には一切応じられません。 （弊社事情によりPDFでの発行になる場合が有ります)</li>
        </ul>

        <h2>＜ご納品について＞</h2>
        <ul>
          <li>※ 2024年8月中〜下旬予定（メーカー生産都合により前後する場合があります）。</li>
          <li>※ 発送準備が出来た方から順のお届けとなり、納品日時のご指定は一切出来ません。</li>
          <li>※ 納期がこの期間より大きく前倒しになる事はなく、お急ぎの方は良くご検討の上、お買い求めください。</li>
        </ul>
        </div>
      </div>

      <!--div class="row">
          <div class="col-12 my-4 py-4 border-top border-bottom">
              <h2>＜商品・ご注文について＞</h2>
              <ul>
                <li>
                    ※ 合計4ダースからお買い求めいただけます。
                  </li>
                  <li>
                    ※ 全てプルデンシャルロゴ入り(青色)での販売です。
                  </li>
                  <li>
                    ※ カラーは全商品、ホワイトとイエローのみ、メーカーロゴは黒のみです(刻印も含め色、ダブルナンバー等の指定は出来ません)。
                  </li>
                  <li>
                    ※ 納品手数料として一律300円（税込330円）を頂戴いたします。（支社様以外(ご自宅等)のお届けの場合、ダンボール1箱あたり900円（税込990円）
                    但し北海道、沖縄、郡部離島の場合は別途申し受けます）
                  </li>
                  <li>
                    ※商品のお届け先は全数「1か所のみ」で、分納は出来ません。
                  </li>
                  <li>
                    ※ 弊事業はPOJ本社業務委託契約の下で運営されており、本契約内容に抵触する用件が見受けられた場合、本社様へご報告する場合があります。
                  </li>
                  <li>
                    ※ ご注文後、「〆切日を超えて」のキャンセル、商品交換、発注数変更は「どんな理由の如何に関わらず」一切出来ず、返品もお受け出来ません。
                  </li>
                  <li>
                    ※ 市場価格より大変安価なご提供の為、POJ/PGA関係者様以外への販売/転売はメーカー様より固く禁じられております。
                  </li>
                  <li>
                    ※ 領収書の発行は「購入者(ご請求書宛)」名のみでの発行となります。その他のご希望には一切応じられません。
                    （弊社事情によりPDFでの発行になる場合が有ります)
                  </li>
              </ul>
              <h2>＜ご納品について＞</h2>
              <ul>
                  <li>
                    ※ 2024年6月下旬予定（メーカー生産都合により前後する場合があります）。
                  </li>
                  <li>
                    ※ 発送準備が出来た方から順のお届けとなり、納品日時のご指定は一切出来ません。
                  </li>
                  <li>
                    ※ 納期がこの期間より大きく前倒しになる事はなく、お急ぎの方は良くご検討の上、お買い求めください。
                  </li>
              </ul>
            </div>
      </div-->
    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
<style>
ul,li{
    list-style:none;
}
</style>

@stop

@section('js')
@stop
