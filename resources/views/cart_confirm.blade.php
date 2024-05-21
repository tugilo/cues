@extends('layouts.page')
@section('title', '確認画面')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-top border-bottom mt-5 mb-4 py-3">
            <h2 class="h5 text-center mb-0">{{ Session::get('shisya_nm') }} {{ Session::get('name') }}様</h2>
        </div>
      </div>

      <div class="row mt-lg-5 p-2 bg-dark">
        <div class="col-8 col-lg-10 text-left">
          <p class="text-white">商品名</p>
        </div>
        <div class="col-4 col-lg-2 text-center">
          <p class="text-white">数量</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mb-4">
            <form method="post" action="/cart/finish">
                {{ csrf_field() }}
                @if($sessionCartData)
                @foreach($sessionCartData as $sc)

                <!-- item set 1 -->
                <div class="form-group row align-items-center border-bottom">
                  <label for="inputItemName1" class="col-6 col-form-label">{{$sc['category_name']}}</label>
                  <div class="offset-3 offset-sm-5 offset-md-6 offset-lg-0 col-6 col-sm-5 col-md-4 col-lg-3 text-right">
                      <p>{{$sc['syouhin_name']}}</p>
                  </div>
                  <div class="offset-3 offset-sm-5 offset-md-6 offset-lg-0 col-6 col-sm-5 col-md-4 col-lg-3 text-right">
                    <input type="number" class="form-control amount_field no-spin" id="inputItemName1" value="{{$sc['syohin_amount']}}" readonly>
                  </div>
                </div>
                <!-- item set 1 -->
                @endforeach
                @endif
                <div class="form-group row pb-0 align-items-end">

                  <label for="inputTotal" class="col-4 col-lg-3 col-form-label pr-lg-0 large">ご注文合計</label>
                  <div class="col-5 col-lg-6">
                    <input type="number" class="form-control border-0 order-total no-spin" id="inputTotal" value="{{$sum_total}}" readonly>
                  </div>
                  <div class="col-3 col-lg-3 pl-lg-0 text-left col-form-label">
                    <span>セット</span>
                  </div>
                </div>


            <div class="form-group row">
              <div class="col-12">
                <label for="noteTextarea">【備考欄】ご質問、連絡事項などあればご記入ください。</label>
                <textarea class="form-control" name="bikou" id="noteTextarea" rows="5"></textarea>
              </div>
            </div>
            <div class="form-group row">
                <div class="col-12">
                    <h2 class="h5 text-center mb-3">下記お読みいただき、最下部の「同意する」にチェックをいれてください</h2>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="scroll-box">
                        <div class="scroll-content">
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
                        <div class="text-center ml-3 mb-4">
                            <div class="custom-control custom-checkbox policyCheck">
                                <input class="custom-control-input" type="checkbox" id="policyCheck" value="">
                                <label class="custom-control-label" for="policyCheck">
                                  上記に<br class="d-block d-sm-none">同意する
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group row">
              <div class="offset-0 col-6 offset-lg-2 col-lg-4 mb-4">
                  <a href="{{$_SERVER['HTTP_REFERER']}}" class="btn btn-grey w-100"><i class="fas fa-chevron-left mr-1"></i>戻る</a>
              </div>
              <div class="col-6 col-lg-4 mb-4">
                <!--button class="btn btn-primary w-100" id="btn_send_order" type="submit" disabled>注文する<i class="fas fa-chevron-right ml-1"></i></button-->
                <button class="btn btn-primary w-100" id="btn_send_order" type="submit" disabled>注文する<i class="fas fa-chevron-right ml-1"></i></button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->


@stop
@section('css')
<style>
.no-spin::-webkit-inner-spin-button,
.no-spin::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    -moz-appearance:textfield;
}
ul,li{
    list-style:none;
}
.scroll-box .scroll-content {
  padding: 1rem;
}
.scroll-box .scroll-content h1,
.scroll-box .scroll-content .h1 {
  font-size: 1.2rem;
}
.scroll-box .scroll-content h2,
.scroll-box .scroll-content .h2 {
  font-size: 1.0rem;
}
.scroll-box .scroll-content h3,
.scroll-box .scroll-content .h3 {
  font-size: .8rem;
}
.scroll-box .scroll-content h4,
.scroll-box .scroll-content .h4 {
  font-size: .7rem;
}
.scroll-box .scroll-content h5,
.scroll-box .scroll-content .h5 {
  font-size: .6rem;
}
.scroll-box .scroll-content h6,
.scroll-box .scroll-content .h6 {
  font-size: .5rem;
}
.scroll-box .scroll-content p {
  font-size: .8rem;
}
.scroll-box .scroll-content ul {
  padding-left: 1.25rem;
  font-size: .8rem;
}

</style>
@stop

@section('js')

<script>
$(function(){
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });
     $('#policyCheck').change(function(){
         if($("#policyCheck").prop("checked")){
             $('#btn_send_order').prop('disabled', false);
         }else{
             $('#btn_send_order').prop('disabled', true);
         }
     });
});
</script>
@stop