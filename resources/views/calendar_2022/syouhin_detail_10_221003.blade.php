@extends('layouts.calendar_page')
@section('title', '卓上カレンダー（B6サイズ）')

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
      </span> <i class="fas fa-angle-right">
      </i>
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="商品一覧/ご購入" href="/calendar/syouhin/list?syouhin_syubetu=1" class="taxonomy category">
              <span property="name">商品一覧/ご購入</span>
          </a>
          <meta property="position" content="2">
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <span property="name" class="post post-post current-item">卓上カレンダー</span>
          <meta property="url" content="/calendar/syouhin/detail?syouhin_cd=10">
          <meta property="position" content="3">
      </span>
    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <!-- s:register -->
      <section class="register">
        <div class="register-content">
          <div class="container">

            <div class="row my-lg-4 py-lg-4">

              <!-- s:item -->
              <div class="col-lg-6 mb-4">
                <div class="item-image text-center">
                  <div class="border-0">
                    <img src="/images/takuB_01.jpg" class="card-img-top" alt="卓上カレンダー（B6サイズ）">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="item-description">
                  <h3 class="item-title h6">卓上カレンダー（B6サイズ）</h3>
                  <p class="item-price">235<span class="currency">円</span><span class="tax-in">（税込259円）</span></p>

                  <form method="post" action="/calendar/cart/add">

                      {{ csrf_field() }}
                    <div class="form-group row pb-0">
                      <label for="inputOption1" class="col-4 col-lg-3 col-form-label pr-lg-0">支社納品</label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_10" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="10">
                          <input type="hidden" name="syouhin_name[]" value="卓上カレンダー（B6サイズ）支社納品">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0">
                      <label for="inputOption2" class="col-4 col-lg-3 col-form-label pr-lg-0">発送代行</label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_11" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="11">
                          <input type="hidden" name="syouhin_name[]" value="卓上カレンダー（B6サイズ）発送代行">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0 align-items-end">
                      <label for="inputTotal" class="col-4 col-lg-3 col-form-label pr-lg-0 large">ご注文合計</label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control border-0 order-total no-spin" id="inputTotal" value="0" readonly>
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-12">
                          <button class="btn btn-primary w-100" id="btn_cart_add" type="button" disabled>注文する</button>
                      </div>
                    </div>
                  </form>

                </div>
              </div>
              <!-- n:item -->
            </div> <!-- .row -->

            <div class="row">
              <div class="col-12 my-4 py-4 border-top border-bottom">
                <p>
                    仕様：B6版　8枚（クリアケース付き）／紙質マットコート<br>
                    サイズ：横180×縦129mm<br>
                    <br>
                    ＜納品されるもの＞<br>
                    ・1～12月カレンダー（両面カラー印刷6枚）<br>
                    ・挨拶状（アンケート付ではありません）<br>
                    ・丁合され、透明封筒に封入/完成品お渡し<br>
                    ※暦の下にカスタマーサービスセンター様の情報が記載されます。<br>
                    ※発送代行をご希望の方は、「差出人ラベル」をご準備ください。

                </p>
              </div>
            </div>

          </div> <!-- .container -->
        </div>
      </section>
      <!-- n:register -->

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1 text-center text-dark-blue mt-5 pt-5">＜2023 年カレンダーイメージ＞</h2>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <p class="small">カレンダー下部にカスタマーサービス様の情報が印字されます。丁合され、透明封筒に封入された完成品としてご納品いたします。</p>
            <p class="small text-red">ご注意：卓上カレンダーにはアンケートはございません。</p>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-12 col-lg-5 my-3">
            <img class="img-fluid" src="/images/takuB_img01.jpg" alt="2023 年カレンダーイメージ">
          </div>
          <div class="col-12 col-lg-7 my-3">
            <img class="img-fluid" src="/images/takuB_img02.jpg" alt="2023 年カレンダーイメージ">
          </div>
        </div>

      </section>
      <!-- n:content-box -->

    </div> <!-- .container -->
  </div>
</article> <!-- .main-content -->


@endsection
@section('css')
@endsection

@section('js')
<script>
$(function(){
    $('.amount_field').on('keyup',function() {
        var sum = 0;
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
        var sum = document.getElementById('inputTotal').value;
        if(sum > 0){

            $('#btn_cart_add').prop('disabled', true);
            $('form').submit();
        }else{
            alert('数量を入力してください。');
        }
    });
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });

});
</script>

@endsection
