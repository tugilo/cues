@extends('layouts.calendar_page')
@section('title', '壁掛けカレンダー（A4サイズ【特寸】）')

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
              <span property="name">商品一覧/ご購入</span></a><meta property="position" content="2">
          </span>
          <i class="fas fa-angle-right"></i>
          <span property="itemListElement" typeof="ListItem">
              <span property="name" class="post post-post current-item">壁掛けカレンダー（A4 特寸サイズ）</span>
              <meta property="url" content="/calendar/syouhin/detail?syouhin_cd=92">
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
                    <img src="/images/kabeC_01.jpg" class="card-img-top" alt="壁掛けカレンダー（A4 特寸サイズ）">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="item-description">
                  <h3 class="item-title h6">壁掛けカレンダー（A4サイズ【特寸】）</h3>
                  <p class="item-price">190<span class="currency">円</span><span class="tax-in">（税込209円）</span></p>

                  <form method="post" action="/calendar/cart/add">

                      {{ csrf_field() }}
                      <span class="text-blue">※20部以上からのご注文となります</span><br>
                    <div class="form-group row pb-0">
                      <label for="inputOption1" class="col-4 col-lg-3 col-form-label pr-lg-0">支社納品<!--span class="text-red font-weight-bold">SOLDOUT</span--></label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_92" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="92">
                          <input type="hidden" name="syouhin_name[]" value="壁掛けカレンダー（A4サイズ【特寸】）支社納品">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0">
                      <label for="inputOption2" class="col-4 col-lg-3 col-form-label pr-lg-0">発送代行<!--span class="text-red font-weight-bold">SOLDOUT</span--></label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_93" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="93">
                          <input type="hidden" name="syouhin_name[]" value="壁掛けカレンダー（A4サイズ【特寸】）発送代行">
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
                      仕様：中綴じ16P（2ヵ月暦/画像7点）／紙質マットコート<br>
                      サイズ：展開時横298×縦448mm、6ｍ穴1カ所あり（通常A3より横１mm、縦26ｍｍ大きい規格です）<br>
                      <br>
                      ＜納品されるもの＞<br>
                      ・カレンダー＋CPP透明封筒（カレンダーは封入されています、封はとじていません）
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
              <h2 class="h1">この壁掛けカレンダーの発送代行をご依頼の場合、<br><span class="text-red">「差出人ラベル」</span>が必要です</h2>
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

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div class="bg-light border p-4 border-color-dark">
              <h3 class="h2 border-bottom border-color-dark pb-2">壁掛けカレンダーご購入<span class="text-red">【無料特典】</span></h3>
              <div class="row align-items-center">
                <div class="col-12 col-lg-7 my-2">
                    <p class="small">ご好評いただいている、挨拶状無料ダウンロードサービス。今年、<span class="text-red font-weight-bold">壁掛けカレンダー（種類問わず）を20部以上ご購入</span>いただいた方に、A4挨拶状（横Ver.）を無料ダウンロードしていただけます。</p>
                    <p class="small">紙面右下のスペースにネームスタンパーを押し、私製挨拶状として、ぜひご活用ください。</p>
                  <div class="text-center my-2">
                      <a href="/mypage"><img src="/images/go_mypage.png" alt="マイページへ"></a>
                  </div>
                </div>
                <div class="col-12 col-lg-5 my-2">
                  <img class="img-fluid" src="/images/aisatu_sample.png" alt="サンプル">
                  <p class="small text-center text-red">※文言、デザインは予告なく変更する<br>場合がございます。</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- n:content-box -->

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1 text-center text-dark-blue mt-5 pt-5">＜2025 年カレンダーイメージ＞</h2>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <p class="small">見開き2ヶ月掲載のカレンダーです。サイズはA4より少し大きめの特寸サイズです。</p>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-12 col-lg-7 my-3">
            <img class="img-fluid" src="/images/kabeC_img01.jpg" alt="2025 年カレンダーイメージ">
          </div>
          <div class="col-12 col-lg-5 my-3">
            <img class="img-fluid" src="/images/kabeC_img02.jpg" alt="2025 年カレンダーイメージ">
          </div>
        </div>

        <div class="mt-5">
          <div class="row align-items-center">
            <div class="col-lg-2 my-3">
              <img src="/images/kabeC_img03.jpg" class="img-fluid" alt="AYANA">
            </div>
            <div class="col-lg-10 my-3">
              <p class="small">＜作者紹介＞</p>
              <p class="font-weight-bold">AYANA <span class="small">ARTIST</span></p>
              <p class="small"><span class="font-weight-bold">異国の生活、普通の日常を明るく、気軽に、お届け出来ればと思い、日々写真に納めています。</span><br><span class="font-weight-bold">少し忘れていた風景で、皆さんが元気になりますように。</span><br>（2021年2月イギリス ケンブリッジに渡り、2022年9月からロンドンを拠点に活動中。）</p>
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
    /*
    $('#btn_cart_add').on('click', function(){
        $('#btn_cart_add').prop('disabled', true);
        $('form').submit();
    });
    */

});
</script>

@stop
