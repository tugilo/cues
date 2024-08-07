@extends('layouts.calendar_page')
@section('title', 'カート')

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
        <div class="col-7 text-left">
          <p class="text-white">商品名</p>
        </div>
        <div class="col-5 text-center">
          <p class="text-white">数量</p>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mb-4">
            <form method="post" action="/calendar/cart/confirm" name="form1" id="form1">

                {{ csrf_field() }}
              @if($sessionCartData)
              @foreach($sessionCartData as $sc)

              <!-- item set 1 -->
              <div class="form-group row align-items-center border-bottom">
                <div class="col-8 col-sm-6 col-md-6 col-lg-8">
                  <p>{{$sc['syouhin_name']}}</p>
                </div>
                <div class="col-2 col-sm-4 col-md-4 col-lg-3 text-right">
                  <input type="number" class="form-control amount_field no-spin" name="syohin_amount[]" id="inputItemName_{{$sc['syouhin_cd']}}" value="{{$sc['syohin_amount']}}" required>
                  <input type="hidden" name="syouhin_cd[]" value="{{$sc['syouhin_cd']}}">
                </div>
                <div class="col-3 col-sm-2 col-md-2 col-lg-1 pl-0 text-right">
                  <input id="deleteItem_{{$sc['syouhin_cd']}}" name="deleteItem_{{$sc['syouhin_cd']}}" value="削除" type="button" class="btn btn-grey btn-delete">
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
                <span>部</span>
              </div>
            </div>
            <div class="form-group row">
              <div class="col-6 offset-lg-2 col-lg-4 mb-4">
                <button class="btn btn-primary w-100" type="button" id="btn_back_home"><i class="fas fa-chevron-left mr-1"></i>買い物を続ける</button>
              </div>
              <div class="col-6 col-lg-4 mb-4">
                  <button class="btn btn-cyan w-100" id="btn_cart_add" type="button" disabled>購入する<i class="fas fa-chevron-right ml-1"></i></button>
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
@stop

@section('js')

<script>
$(document).ready(function() {
    const $btnCartAdd = $('#btn_cart_add');
    const $inputTotal = $('#inputTotal');
    const $form = $('#form1');

    // 合計金額の更新と購入ボタンの有効/無効を管理する関数
    const updateTotalAndButton = () => {
        const sum = Array.from($(".amount_field")).reduce((total, field) => total + Number(field.value), 0);
        $inputTotal.val(sum);
        $btnCartAdd.prop('disabled', sum === 0);
    };

    // 初期状態の設定
    updateTotalAndButton();

    // 削除ボタンのイベントハンドラ
    $('.btn-delete').on('click', function() {
        const syouhinCd = this.id.split('_')[1];
        location.href = `/calendar/cart/delete?delete_syouhin_cd=${syouhinCd}`;
    });

    // 「買い物を続ける」ボタンのイベントハンドラ
    $('#btn_back_home').on('click', () => {
        location.href = "/calendar/syouhin/list?syouhin_syubetu=1";
    });

    // 数量フィールドの変更イベントハンドラ
    $('.amount_field').on('input', updateTotalAndButton);

    // 購入ボタンのイベントハンドラ
    $btnCartAdd.on('click', () => {
        // 商品IDのペアと最小注文数を定義
        const itemPairs = [
            { ids: [85, 86], minOrder: 20, name: "卓上カレンダー（ハガキサイズ）" },
            // 以下のペアは現在使用しないためコメントアウト
            // { ids: [1, 2], minOrder: 10, name: "壁掛けカレンダー（挨拶状/ アンケート付き）" },
            // { ids: [4, 5], minOrder: 10, name: "壁掛けカレンダー" },
            // { ids: [7, 8], minOrder: 10, name: "卓上カレンダー（B6サイズ）（LP様情報あり）" },
            // { ids: [92, 93], minOrder: 10, name: "壁掛けカレンダー（A4サイズ【特寸】）" },
            // { ids: [10, 11], minOrder: 10, name: "卓上カレンダー（B6サイズ）" }
        ];
        
        let errorMessages = [];

        itemPairs.forEach(pair => {
            const sum = pair.ids.reduce((total, id) => {
                const $input = $(`#inputItemName_${id}`);
                return total + ($input.length ? parseInt($input.val()) || 0 : 0);
            }, 0);
            
            if (sum > 0 && sum < pair.minOrder) {
                errorMessages.push(`${pair.name}の合計は${pair.minOrder}部以上からのご注文となります`);
            }
        });

        if (errorMessages.length > 0) {
            alert(errorMessages.join("\n"));
        } else {
            $form.submit();
            $btnCartAdd.prop('disabled', true);
        }
    });
});</script>
@stop
