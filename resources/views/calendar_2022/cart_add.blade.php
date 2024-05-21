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
    var sum = document.getElementById('inputTotal').value;
    if(sum > 0){
        $('#btn_cart_add').prop('disabled', false);

    }else{

        $('#btn_cart_add').prop('disabled', true);
    }
});
$(function(){

    $('.btn-delete').on('click', function(){
        var id = this.id;
        var sid = id.split('_');
        location.href = "/calendar/cart/delete?delete_syouhin_cd="+sid[1];
    });
    $('#btn_back_home').on('click', function(){
        location.href = "/calendar/syouhin/list?syouhin_syubetu=1";
    });

    $('.amount_field').on('keyup', function() {
        var sum = 0;
        var token = $('input[name="_token"]').val();
        $(".amount_field").each(function(){
            sum += Number($(this).val());
        });
        document.getElementById('inputTotal').value = sum;

        if(sum > 0){
            $('#btn_cart_add').prop('disabled', false);

        }else{

            $('#btn_cart_add').prop('disabled', true);
        }
    });
    $('#btn_cart_add').on('click', function(){
        if($('#inputItemName_85').length && $('#inputItemName_86').length){
            var taku_sum = 0;
            var inputItemName_85 = parseInt(document.getElementById('inputItemName_85').value);
            var inputItemName_86 = parseInt(document.getElementById('inputItemName_86').value);
            var taku_sum = inputItemName_85 + inputItemName_86;
            var taku_flg = 1;
        }else if($('#inputItemName_85').length && !$('#inputItemName_86').length){
            var taku_sum = 0;
            var inputItemName_85 = parseInt(document.getElementById('inputItemName_85').value);
            var inputItemName_86 = 0;
            var taku_sum = inputItemName_85 + inputItemName_86;
            var taku_flg = 1;
        }else if(!$('#inputItemName_85').length && $('#inputItemName_86').length){
            var taku_sum = 0;
            var inputItemName_85 = 0;
            var inputItemName_86 = parseInt(document.getElementById('inputItemName_86').value);
            var taku_sum = inputItemName_85 + inputItemName_86;
            var taku_flg = 1;

        }else{
            var inputItemName_85 = 0;
            var inputItemName_86 = 0;
            var taku_sum = 0;
            var taku_flg = 0;
        }
        if($('#inputItemName_1').length){
            var taku_sum_1 = 0;
            var inputItemName_1 = parseInt(document.getElementById('inputItemName_1').value);
            var taku_sum_1 = inputItemName_1;
            if(taku_sum_1 < 20){
                var sum_flg_1 = 1;
            }else{
                var sum_flg_1 = 0;
            }
            var taku_flg_1 = 1;
        }else{
            var taku_flg = 1;
            var sum_flg_1 = 0;

        }
        if($('#inputItemName_4').length){
            var taku_sum_4 = 0;
            var inputItemName_4 = parseInt(document.getElementById('inputItemName_4').value);
            var taku_sum_4 = inputItemName_4;
            if(taku_sum_4 < 20){
                var sum_flg_4 = 1;
            }else{
                var sum_flg_4 = 0;
            }
            var taku_flg_1 = 1;
        }else{
            var taku_flg = 1;
            var sum_flg_4 = 0;

        }
        if($('#inputItemName_92').length){
            var taku_sum_92 = 0;
            var inputItemName_92 = parseInt(document.getElementById('inputItemName_92').value);
            var taku_sum_92 = inputItemName_92;
            if(taku_sum_92 < 20){
                var sum_flg_92 = 1;
            }else{
                var sum_flg_92 = 0;
            }
            var taku_flg_1 = 1;
        }else{
            var taku_flg = 1;
            var sum_flg_92 = 0;

        }
        if($('#inputItemName_10').length){
            var taku_sum_10 = 0;
            var inputItemName_10 = parseInt(document.getElementById('inputItemName_10').value);
            var taku_sum_10 = inputItemName_10;
            if(taku_sum_10 < 20){
                var sum_flg_10 = 1;
            }else{
                var sum_flg_10 = 0;
            }
            var taku_flg_1 = 1;
        }else{
            var taku_flg = 1;
            var sum_flg_10 = 0;

        }

        if(sum_flg_1 == 1 || sum_flg_4 == 1 || sum_flg_92 == 1 || sum_flg_10 == 1){
            alert('20部以上からのご注文となります');
        }else{
            $('#form1').submit();
            $('#btn_submit').prop('disabled', 'true');
        }

     });

});

</script>
@stop
