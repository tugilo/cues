@extends('layouts.page')
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
            <form method="post" action="/cart/confirm">

                {{ csrf_field() }}
              @if($sessionCartData)
              @foreach($sessionCartData as $sc)

              <!-- item set 1 -->
              <div class="form-group row align-items-center border-bottom">
                <label for="inputItemName1" class="col-6 col-sm-6 col-md-6 col-lg-4 col-form-label">{{$sc['category_name']}}</label>
                <div class="col-6 col-sm-6 col-md-6 col-lg-4">
                  <p>{{$sc['syouhin_name']}}</p>
                </div>
                <div class="offset-3 offset-sm-5 offset-md-6 offset-lg-0 col-6 col-sm-5 col-md-4 col-lg-3 text-right">
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
                <span>セット</span>
              </div>
            </div>
            <div class="form-group row">
                <div class="text-center mx-auto mb-2">
                    <span class="text-red bold" id="caution">&nbsp;</span>
                </div>
            </div>
            <div class="form-group row">
              <div class="offset-0 col-6 offset-lg-2 col-lg-4 mb-4">
                <button class="btn btn-primary w-100" type="button" id="btn_back_home"><i class="fas fa-chevron-left mr-1"></i>買い物を続ける</button>
              </div>
              <div class="col-6 col-lg-4 mb-4">
                <!--button class="btn btn-cyan w-100" id="btn_cart_add" type="submit" disabled>購入する<i class="fas fa-chevron-right ml-1"></i></button-->
                <button class="btn btn-cyan w-100" id="btn_cart_add" type="submit" disabled>購入する<i class="fas fa-chevron-right ml-1"></i></button>
              </div>

            </div>
          </form>
          @if($_SERVER['HTTP_REFERER'] == config('app.url').'/cart/confirm' || $_SERVER['HTTP_REFERER'] == config('app.url').$_SERVER['REQUEST_URI'])

          @else

          <div class="row">
            <div class="offset-lg-4 col-lg-4">
                <a href="{{$_SERVER['HTTP_REFERER']}}" class="btn btn-grey w-100"><i class="fas fa-chevron-left mr-1"></i>戻る</a>
            </div>
          </div>

          @endif

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
$(function(){
    var sum = 0;
    $(".amount_field").each(function(){
        sum += Number($(this).val());
    });
    /*
    document.getElementById('inputTotal').value = sum;
    if(sum >= 4){
        $('#caution').text(' ');
        $('#btn_cart_add').prop('disabled', false);

    }else{
        $('#caution').text('※ご注文は、各メーカー/商品をまじえて「合計4ダース」以上から承ります');
        $('#btn_cart_add').prop('disabled', true);
    }
    */
    document.getElementById('inputTotal').value = sum;
    if(sum >= 1){
        $('#caution').text(' ');
        $('#btn_cart_add').prop('disabled', false);

    }

    $('.btn-delete').on('click', function(){
        var id = this.id;
        var sid = id.split('_');
        location.href = "/cart/delete?delete_syouhin_cd="+sid[1];
    });
    $('#btn_back_home').on('click', function(){
        location.href = "/syouhin/list?syouhin_syubetu=3";
    });

    $('.amount_field').on('change', function() {
        var sum = 0;
        var token = $('input[name="_token"]').val();
        $(".amount_field").each(function(){
            sum += Number($(this).val());
        });
        document.getElementById('inputTotal').value = sum;
        /*
        if(sum >= 4){
            $('#caution').text(' ');
            $('#btn_cart_add').prop('disabled', false);

        }else{
            $('#caution').text('※ご注文は、各メーカー/商品をまじえて「合計4ダース」以上から承ります');
            $('#btn_cart_add').prop('disabled', true);
        }
        */
        if(sum >= 1){
            $('#btn_cart_add').prop('disabled', false);

        }else{
          $('#btn_cart_add').prop('disabled', true);
        }
    });
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });

});

</script>
@stop
