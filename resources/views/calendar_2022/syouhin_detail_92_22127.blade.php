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
              <span property="name" class="post post-post current-item">壁壁掛けカレンダー（A4 特寸サイズ）</span>
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
                    <img src="/images/kabeC_01.jpg" class="card-img-top" alt="壁壁掛けカレンダー（A4 特寸サイズ）">
                  </div>
                </div>
              </div>
              <div class="col-lg-6 mb-4">
                <div class="item-description">
                  <h3 class="item-title h6">壁掛けカレンダー（A4サイズ【特寸】）</h3>
                  <p class="item-price">210<span class="currency">円</span><span class="tax-in">（税込231円）</span></p>

                  <form method="post" action="/calendar/cart/add">

                      {{ csrf_field() }}
                    <div class="form-group row pb-0">
                      <label for="inputOption1" class="col-4 col-lg-3 col-form-label pr-lg-0">支社納品</label>
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
                      <label for="inputOption2" class="col-4 col-lg-3 col-form-label pr-lg-0">発送代行</label>
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
                          <button class="btn btn-primary w-100" id="btn_cart_add" type="submit" disabled>注文する</button>
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
            <h2 class="h1">壁掛けカレンダーの発送代行ご依頼の場合、<br><span class="text-red">「差出人ラベル」</span>が必要です</h2>
            <div class="row border-top border-bottom">
              <div class="col-lg-10 offset-lg-1 py-4">
                <h3>差出人ラベル作成について</h3>
                <p class="small">差出人ラベルも、送付先ラベルと同様に作成ください。</p>
                <p class="small">ラベルにスタンパーを押していただいたものを、ご用意いただいても貼付可能ですが、ラベルからはみ出ないようにスタンプを押してください。</p>
                <p class="small">下記、無料特典をご利用いただく場合、紙面にネームスタンパーを押していただき、同封物としてお送りいただければ、差出人ラベルは不要です。</p>
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
                  <p class="small">昨年ご好評いただいた、挨拶状PDF無料ダウンロードサービスですが、今年は、対象商品を拡大し、<span class="text-red font-weight-bold">壁掛けカレンダー（種類問わず）を20部以上ご購入</span>いただいた方に、A4挨拶状PDFを無料ダウンロードしていただけるようになりました。</p>
                  <p class="small">紙面右下のスペースにネームスタンパーを押し、私製挨拶状として、ぜひご活用ください。</p>
                  <div class="text-center my-2">
                    <a href="/history" class="btn btn-primary small">対象者の方には、マイページのご購入履歴画面に<br>ダウンロードボタンが表示されます。<br>- 購入履歴ページへ-</a>
                  </div>
                </div>
                <div class="col-12 col-lg-5 my-2">
                  <img class="img-fluid" src="/images/aisatu_sample.png" alt="※昨年版サンプルです">
                  <p class="small text-center">※昨年版サンプルです</p>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <!-- n:content-box -->

      <!-- s:content-box -->
      <section class="content-box">

        <h2 class="h1 text-center text-dark-blue mt-5 pt-5">＜2023 年カレンダーイメージ＞</h2>

        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <p class="small">見開き2ヶ月掲載のカレンダーです。サイズはA4より少し大きめの特寸サイズです。</p>
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-12 col-lg-7 my-3">
            <img class="img-fluid" src="/images/kabeC_img01.jpg" alt="2023 年カレンダーイメージ">
          </div>
          <div class="col-12 col-lg-5 my-3">
            <img class="img-fluid" src="/images/kabeC_img02.jpg" alt="2023 年カレンダーイメージ">
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
              <p class="small">2021年2月より留学生として、イギリスのケンブリッジに滞在しています。異国の生活、普通の日常を明るく、気軽に、お届けできればと思い、日々写真に納めています。少し忘れていた風で、みなさんが元気になりますように。（2022年1月一時帰国、同9月再渡英予定）</p>
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

@stop
