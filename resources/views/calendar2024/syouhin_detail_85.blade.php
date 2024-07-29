@extends('layouts.calendar_page')
@section('title', '卓上カレンダー（ハガキサイズ）')

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
          <a property="item" typeof="WebPage" title="商品一覧/ご購入" href="/calendar/syouhin/list?syouhin_syubetu=1" class="taxonomy category">
              <span property="name">商品一覧/ご購入</span>
          </a>
          <meta property="position" content="2">
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <span property="name" class="post post-post current-item">卓上カレンダー（ハガキサイズ）</span>
          <meta property="url" content="/calendar/syouhin/detail?syouhin_cd=85"><meta property="position" content="3">
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
                    <img src="/images/takuC_01.jpg" class="card-img-top" alt="卓上カレンダー（ハガキサイズ）">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="item-description">
                  <h3 class="item-title h6">卓上カレンダー（ハガキサイズ）</h3>
                  <p class="item-price">155<span class="currency">円</span><span class="tax-in">（税込171円）</span><!--span class="text-red font-weight-bold">SOLDOUT</span--></p>

                  <form method="post" action="/calendar/cart/add" name="form1" id="form1">

                      {{ csrf_field() }}
                      <span class="text-blue">※20部以上からのご注文となります</span><br>
                    <div class="form-group row pb-0">
                      <label for="inputOption1" class="col-4 col-lg-3 col-form-label pr-lg-0">支社納品</label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin_cd_85" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="85">
                          <input type="hidden" name="syouhin_name[]" value="卓上カレンダー（ハガキサイズ）支社納品">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0">
                      <label for="inputOption2" class="col-4 col-lg-3 col-form-label pr-lg-0">発送代行<!--span class="text-red font-weight-bold">SOLDOUT</span--></label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin_cd_86" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="86">
                          <input type="hidden" name="syouhin_name[]" value="卓上カレンダー（ハガキサイズ）発送代行">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0 align-items-end">
                      <label for="inputTotal" class="col-4 col-lg-3 col-form-label pr-lg-0 large">ご注文合計</label>
                      <div class="col-6 col-lg-7">
                        <input type="number" class="form-control border-0 order-total" id="inputTotal" value="0" readonly required>
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-lg-12">
                          <button class="btn btn-primary w-100" id="btn_cart_add" type="button">注文する</button>
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
                    仕様：ハガキサイズ　8枚（表紙・裏表紙2枚、1～12月暦部6枚）、クリアケース付／紙質マットコート<br>
                    サイズ：紙横148×縦104mm、ケース横150×縦105×厚さ4mm<br>
                    ※ケースはバイオマスPET透明を使用しております。バイオマス素材は家庭用ごみとして破棄いただけます。<br>
                    <br>
                    ＜納品されるもの＞<br>
                    ・カレンダー＋OPP透明封筒（カレンダーは封入されています）
                </p>
              </div>
            </div>

          </div> <!-- .container -->
        </div>
      </section>
      <!-- n:register -->

      <!-- s:content-box -->
      <section class="content-box">

          <div class="row mb-5">
            <div class="col-lg-10 offset-lg-1 pt-4 pb-3">
              <h2 class="h1">この卓上カレンダーの発送代行をご依頼の場合、<br><span class="text-red">「差出人ラベル」</span>が必要です</h2>
              <p>※但し、<span style="color:#0030ff">無料特典の挨拶状にLP様情報を入れて</span>いただければ差出人ラベルの<span  style="color:#0030ff">代用が可能</span>です。</p>
              <div class="row border-top border-bottom mt-4">
                <div class="col-lg-10 offset-lg-1 py-4">
                  <div class="row align-items-center">
                    <div class="col-lg-6">
                      <h3>差出人ラベル作成について</h3>
                      <p class="small">差出人ラベルも、送付先ラベルと同様に作成ください。</p>
                      <p class="small">ラベルにスタンパーを押していただいたものを、<br>ご用意いただいても貼付可能ですが、<br>ラベルからはみ出ないようにスタンプを押してください。</p>
                    </div>
                    <div class="col-lg-6">
                      <p><img class="img-fluid" src="/images/sasidasinin.png" alt="差出人ラベルサンプル"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <h2 class="h1 text-center text-dark-blue mt-5 pt-5">＜2024 年カレンダーイメージ＞</h2>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
              <p class="small">ご挨拶やお届けの際、最適なハガキサイズ 。定型（長3）封筒にも入ります。</p>
              <p class="small">表紙には定番のタイムズスクエアのロックマークを配し、暦部の書込みスペースは大きくフルカラーで機能性もお約束します。</p>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-12 col-lg-6 my-3">
            <img class="img-fluid" src="/images/takuC_img01.jpg" alt="2024 年カレンダーイメージ">
          </div>
          <div class="col-12 col-lg-6 my-3">
            <img class="img-fluid" src="/images/takuC_img02.jpg" alt="2024 年カレンダーイメージ">
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
        var inputTotal = document.getElementById('inputTotal').value;
        if(inputTotal < 20){
            alert('※20部以上からのご注文となります');
        }else{
            $('#btn_cart_add').prop('disabled', true);
            $('form').submit();

        }
     });

});
</script>

@stop
