@extends('layouts.calendar_page')
@section('title', '壁掛けカレンダー')

@section('content')

<article class="main-content border-top">
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="ホーム" href="/calendar" class="home">
              <i class="fas fa-home"></i>
              <span property="name">ホーム</span>
          </a>
          <meta property="position" content="1"></span>
          <i class="fas fa-angle-right"></i>
          <span property="itemListElement" typeof="ListItem">
              <a property="item" typeof="WebPage" title="商品一覧/ご購入" href="/calendar/syouhin/list?syouhin_syubetu=1" class="taxonomy category">
                  <span property="name">商品一覧/ご購入</span>
              </a>
              <meta property="position" content="2">
          </span>
          <i class="fas fa-angle-right"></i>
          <span property="itemListElement" typeof="ListItem">
              <span property="name" class="post post-post current-item">壁掛けカレンダー</span>
              <meta property="url" content="/calendar/syouhin/detail?syouhin_cd=4">
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
                    <img src="/images/kabeB_01.jpg" class="card-img-top" alt="壁掛けカレンダー">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="item-description">
                  <h3 class="item-title h6">壁掛けカレンダー</h3>
                  <p class="item-price">270<span class="currency">円</span><span class="tax-in">（税込297円）</span></p>

                  <form method="post" action="/calendar/cart/add">

                      {{ csrf_field() }}
                      <!--span class="text-blue">※20部以上からのご注文となります</span><br-->
                    <div class="form-group row pb-0">
                      <label for="inputOption1" class="col-4 col-lg-3 col-form-label pr-lg-0">支社納品<!--span class="text-red font-weight-bold">SOLDOUT</span--></label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_4" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="4">
                          <input type="hidden" name="syouhin_name[]" value="壁掛けカレンダー支社納品">
                      </div>
                      <div class="col-2 col-lg-2 pl-0 text-left col-form-label">
                        <span class="text-nowrap">部</span>
                      </div>
                    </div>
                    <div class="form-group row pb-0">
                      <label for="inputOption2" class="col-4 col-lg-3 col-form-label pr-lg-0">発送代行<!--span class="text-red font-weight-bold">SOLDOUT</span--></label>
                      <div class="col-6 col-lg-7">
                          <input type="number" class="form-control amount_field" id="syohin-cd_5" name="syohin_amount[]" value="" placeholder="0">
                          <input type="hidden" name="syouhin_cd[]" value="5">
                          <input type="hidden" name="syouhin_name[]" value="壁掛けカレンダー発送代行">
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
                      仕様：中綴じ28P／紙質マットコート<br>
                      サイズ：横332×縦240mm、6ｍ穴1カ所あり<br>
                      <br>
                      ＜納品されるもの＞<br>
                      ・カレンダー＋専用窓あき紙封筒
                  </p>
              </div>
            </div>

          </div> <!-- .container -->
        </div>
      </section>
      <!-- n:register -->

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1">壁掛けカレンダーの発送代行ご依頼の場合、<br><span class="text-red">「差出人ラベル」</span>が必要です</h2>

        <div class="row">
          <div class="col-12 col-lg-6 my-4">
            <p class="snall">お名前が見えないので、<span class="text-red">「差出人ラベル」が必要</span>です。</p>
            <p class="mb-4"><img class="img-fluid" src="/images/mail_img03.jpg" alt="挨拶状に印字されたLP様名が、封筒左下窓から見えます。"></p>
          </div>
          <div class="col-12 col-lg-6 my-4">
            <p class="snall"><span class="text-red">「差出人ラベル」を必ず宛名ラベルと共にお送りください。</span></p>
            <p><img class="img-fluid" src="/images/mail_img05.jpg" alt="差出人ラベルは不要です"></p>
            <p class="small text-right">※オプション料金：貼付代1枚10円（税別）</p>
          </div>
        </div>

        <div class="row mb-5">
          <div class="col-lg-10 offset-lg-1 pt-4 pb-3">
            <!--h2 class="h1">この卓上カレンダーの発送代行をご依頼の場合、<br><span class="text-red">「差出人ラベル」</span>が必要です</h2-->
            <!--p>※但し、<span style="color:#0030ff">無料特典の挨拶状にLP様情報を入れて</span>いただければ差出人ラベルの<span  style="color:#0030ff">代用が可能</span>です。</p-->
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
                    <p class="small">ご好評いただいている、挨拶状無料ダウンロードサービス。今回、<span class="text-red font-weight-bold">壁掛けカレンダー（種類問わず）を20部以上ご購入</span>いただいた方に、A4挨拶状（横Ver.）を無料ダウンロードしていただけます。</p>
                    <p class="small">紙面右下のスペースにネームスタンパーを押し、私製挨拶状として、ぜひご活用ください。</p>
                  <div class="text-center my-2">
                      <a href="/mypage"><img src="/images/go_mypage.png" alt="マイページへ"></a>
                  </div>
                </div>
                <div class="col-12 col-lg-5 my-2">
                  <img class="img-fluid" src="/images/item/aisatu_sample.png" alt="サンプル">
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

        <h2 class="h1 text-center text-dark-blue mt-5 pt-5">＜2025 年カレンダー掲載予定画像＞</h2>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
              <p class="small">POJ様のお仕事でも大活躍中の八雲いつか氏がアメリカ主要都市を撮影。</p>
              <p class="small">画像を主体に、「高品質」なデザインで仕上げました。例年大好評の氏の作品に、ご期待ください。</p>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-12 col-lg-7 my-3">
            <img class="img-fluid" src="/images/kabeA_img03.jpg" alt="2025 年カレンダー掲載予定画像">
          </div>
          <div class="col-12 col-lg-5 my-3">
            <img class="img-fluid" src="/images/kabeA_img04.jpg" alt="2025 年カレンダー掲載予定画像">
          </div>
        </div>

        <div class="mt-5">
          <p class="small">＜作者紹介＞</p>
          <p class="font-weight-bold">八雲 いつか <span class="small">ITSUKA YAKUMO　写真家 / GRAPHIC ARTIST</span></p>
          <div class="row align-items-center">
            <div class="col-lg-3 my-3">
              <img src="/images/kabeA_img05.jpg" class="img-fluid" alt="八雲 いつか">
            </div>
            <div class="col-lg-9 my-3">
                <p class="small">写真家、グラフィックアーティスト。広告代理店勤務を経て独立。広告・舞台写真・映像制作・CI・プロダクトデザイン・ドキュメンタリー等、その活動分野が業種・国境・メディアの枠を超える仕事が多い。アニマルライツ活動に取り組み、自身もVEGAN。東京渋谷に猫と暮らす。</p>
              <p><img src="/images/kabeA_img06.jpg" class="img-fluid mw-lg-50" alt="八雲 いつか メッセージ"></p>
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
            //alert('※20部以上からのご注文となります');
            $('#btn_cart_add').prop('disabled', true);
            $('form').submit();
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
