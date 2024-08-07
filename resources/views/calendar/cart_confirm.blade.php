@extends('layouts.calendar_page')
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
            <form method="post" action="/calendar/cart/finish" id="form1">
                {{ csrf_field() }}
                @if($sessionCartData)
                @foreach($sessionCartData as $sc)

                <!-- item set 1 -->
                <div class="form-group row align-items-center border-bottom">
                    <div class="col-10 col-sm-10 col-md-10 col-lg-10">
                      <p>{{$sc['syouhin_name']}}@if($sc['syouhin_cd'] == 1 || $sc['syouhin_cd'] == 2 ||$sc['syouhin_cd'] == 7 ||$sc['syouhin_cd'] == 8) <span class="text-red">※挨拶状に LP 様情報が印字されます</span>@endif</p>
                  </div>
                  <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-right">
                    <input type="number" class="form-control amount_field no-spin" id="inputItemName1" value="{{$sc['syohin_amount']}}" readonly>
                  </div>
                </div>
                <!-- item set 1 -->
                @endforeach
                @endif
                <div class="form-group row pb-0 align-items-end">

                  <label for="inputTotal" class="col-8 col-lg-8 col-form-label pr-lg-0 large text-right">ご注文合計</label>
                  <div class="col-3 col-lg-3">
                    <input type="number" class="form-control border-0 order-total no-spin" id="inputTotal" value="{{$sum_total}}" readonly>
                  </div>
                  <div class="col-1 col-lg-1 pl-lg-0 text-left col-form-label">
                    <span>部</span>
                  </div>
                </div>

            <div class="form-group row">
              <div class="col-12">
                <p class="text-red text-right small">お支払いは、口座振替ご登録済みの方は口座振替にて、<br>未登録の方はご請求書をお送りいたします（次年度は口座振替となりますのでご登録をお願いいたします）。</p>
                <p class="text-right small bold">※支社様納品は1注文あたり500円（税込550円）となります。</p>
              </div>
            </div>
            @if($hatsu_flg == 1)
            <div class="form-group row">
              <div class="col-lg-7 mx-auto">
                <div class="color-box p-4">
                  <p>発送代行ご希望の方は、下記チェックをお願いします<span class="badge badge-required float-none">必須</span></p>

                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="doukonbutu_kbn1" id="doukonbutu_kbn1" value="1">
                    <label class="form-check-label" for="doukonbutu_kbn1">カレンダーに同梱物（私製挨拶状など）は入れない</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="doukonbutu_kbn2" id="doukonbutu_kbn2" value="1" >
                    <label class="form-check-label" for="doukonbutu_kbn2">カレンダーに同梱物（私製挨拶状など）を予定している</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="doukonbutu_kbn3" id="doukonbutu_kbn3" value="1" >
                    <label class="form-check-label" for="doukonbutu_kbn3">弊社の壁掛けと卓上をセットで発送代行を予定している</label>
                  </div>

                </div>
              </div>
            </div>
            @endif
            <div class="form-group row">
              <div class="col-12">
                <label for="noteTextarea">【備考欄】ご質問、連絡事項などあればご記入ください。</label>
                <textarea class="form-control" name="bikou" id="noteTextarea" rows="5"></textarea>
              </div>
            </div>

            <div class="form-group row">
              <div class="col-6 offset-lg-2 col-lg-4 mb-4">
                <a href="{{$_SERVER['HTTP_REFERER']}}" class="d-block btn btn-grey w-100"><i class="fas fa-chevron-left mr-1"></i>戻る</a>
              </div>
              <div class="col-6 col-lg-4 mb-4">
                  <button class="btn btn-primary w-100" id="btn_submit" type="button">注文する<i class="fas fa-chevron-right ml-1"></i></button>
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
</style>
@stop

@section('js')

<script>
$(function(){
    $('#btn_submit').on('click', function(){
        @if($hatsu_flg == 1)

        if($("#doukonbutu_kbn1").prop("checked") == true || $("#doukonbutu_kbn2").prop("checked") == true || $("#doukonbutu_kbn3").prop("checked") == true){
            $('#form1').submit();
            $('#btn_submit').prop('disabled', 'true');
        }else{
            alert('発送代行に関するチェックを選択してください。');

        }
        @else

        $('#form1').submit();
        $('#btn_submit').prop('disabled', 'true');
        @endif
    });

});
</script>
@stop
