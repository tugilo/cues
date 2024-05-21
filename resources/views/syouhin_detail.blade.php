@extends('layouts.page')
@section('title', $category->web_syouhin_category_nm)

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
        </div>
      </div>

      <div class="row my-lg-4 py-lg-4">

          @if($syouhin && $category)

        <!-- s:item -->
        <div class="col-lg-6 mb-4">
          <div class="item-image text-center border-0">
              <img src="/assets/images/{{$category->web_syouhin_image1}}" class="card-img-top" alt="{{$category->web_syouhin_nm}}">
          </div>
        </div>
        <div class="col-lg-6 mb-4">
          <div class="item-description">
            <h3 class="item-title h6">{{$category->web_syouhin_category_nm}}</h3>
            <p class="item-price">{{number_format($syohin_tanka)}}<span class="currency">円</span><span class="tax-in">（税込{{number_format($syohin_tanka * 1.1)}}）円</span></p>
            <!--span class="text-blue">※ご注文は、各メーカー/商品をまじえて「合計4ダース」以上から承ります</span--><br>
            <form method="post" action="/cart/add">

                {{ csrf_field() }}
                @foreach($syouhin as $sy)
              <div class="form-group row pb-0">
                <label for="syohin-cd_{{$sy->syouhin_cd}}" class="col-7 col-lg-7 col-form-label pr-lg-0">{{$sy->web_syouhin_nm}}@if($sy->syouhin_color)<span class="ml-2 syouhin_color_{{ $sy->syouhin_color }}">　　</span>@endif @if($sy->sold_count == 0) <span class="text-red font-weight-bold">SOLDOUT</span>@endif</label>
                <div class="col-3 col-lg-3">
                  <input type="number" class="form-control amount_field no-spin" id="syohin-cd_{{$loop->iteration}}" name="syohin_amount[]" value="" placeholder="0" @if($sy->sold_count == 0) readonly @endif>
                  <input type="hidden" name="syouhin_cd[]" value="{{$sy->syouhin_cd}}">
                </div>
                <div class="col-2 col-lg-2 pl-lg-0 text-left col-form-label">
                  <span>@if($category->tani_name){{$category->tani_name}}@else ダース @endif</span>
                </div>
              </div>
              @endforeach
              <div class="form-group row pb-0 align-items-end">
                <label for="inputTotal" class="col-4 col-lg-3 col-form-label pr-lg-0 large">ご注文合計</label>
                <div class="col-6 col-lg-7">
                  <input type="number" class="form-control border-0 order-total no-spin" id="inputTotal" value="0" readonly>
                </div>
                <div class="col-2 col-lg-2 pl-lg-0 text-left col-form-label">
                  <span>@if($category->tani_name){{$category->tani_name}}@else ダース @endif</span>
                </div>
              </div>
              <div class="form-group row">
                <div class="col-lg-12">
                  <!--button class="btn btn-primary w-100" id="btn_cart_add" type="submit" disabled>注文する</button-->
                  <button class="btn btn-primary w-100" id="btn_cart_add" type="submit" disabled>注文する</button>
                </div>
              </div>
            </form>

            <div class="row">
              <div class="col-lg-12">
                <a href="/syouhin/list?syouhin_syubetu=3" class="btn btn-grey w-100">戻る</a>
              </div>
            </div>

          </div>
        </div>
        <!-- n:item -->

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
<script src="/assets/js/setting.js"></script>
<script>
$(function(){
    $('.amount_field').on('keyup',function() {
        var sum = 0;
        $(".amount_field").each(function(){
            sum += Number($(this).val());
        });
        document.getElementById('inputTotal').value = sum;
        $('#btn_cart_add').prop('disabled', false);
    });
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });

});
</script>
@stop
