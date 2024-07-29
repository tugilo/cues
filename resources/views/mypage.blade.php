@extends('layouts.page')
@section('title', 'マイページ')

@section('content')
<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
          <h2 class="h5">マイページ</h2>
        </div>
      </div>

      <div class="row py-4 border-bottom">
        <div class="col-lg-4"><a href="/user_info" class="bold ml-lg-4 text-dark">アカウント設定</a></div>
        <div class="col-lg-8">支社名や携帯番号、パスワードの確認、変更ができます</div>
      </div>

      <div class="row py-4 border-bottom">
        <div class="col-lg-4"><a href="/history" class="bold ml-lg-4 text-dark">ご購入履歴</a></div>
        <div class="col-lg-8">過去の購入履歴が確認できます</div>
      </div>

      @if(isset($flgs[0]->download_button_flag))
      @if($flgs[0]->download_button_flag == 1)

      <div class="text-center mt-4">
        <img src="/images/aisatsu_download.png" alt="挨拶状ダウンロード"data-toggle="modal" data-target="#modal_download_aisatu_pdf"  style="cursor: pointer;">
          <!--img data-toggle="modal" data-target="#modal_download_aisatu_pdf"  src="/images/dl_pdf.png" style="cursor: pointer;"-->
      </div>
      @endif
      @endif

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->
<!-- モーダル・ダイアログ -->
<div class="modal fade" id="modal_download_aisatu_pdf" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4><div class="modal-title" id="myModalLabel">挨拶状ダウンロード</div></h4>
            </div>
            <div class="modal-body">
                <label class="h6">
　本送付状の電子ファイルについては、プルデンシャル生命保険株式会社(以下、POJ本社)において、本送付状に掲載された画像及び文章等の著作権者より、変更を加えることなく、購入されたカレンダー対象商品にのみ必要部数を印刷して送付先に配布する限りにおいて、社員(LP、管理職)の方々へ提供の許諾を得ているものです。<br>
　このため、今回提供させていただく本送付状の電子ファイルの内容の全部又は一部につき、更なる複製(例：別商品への使用目的)、転載、送信、配布又は改変することは固く禁止させていただきます。<br>
　万一、上記の禁止事項に違反された場合には、著作権者又はPOJ本社から法的責任を追及されたとしても、当社は一切責任を負わず、自己の責任において解決していただくことをご了承いただいた上で、ご利用ください。

                </label>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">キャンセル</button>
        <a class="btn btn-primary" href="/doc/2025C_aisatujyo.docx" download="2025C_aisatujyo.docx" id="pdf_dl">同意してダウンロード</a>

            </div>
        </div>
    </div>
</div>

@stop
@section('css')
<style>
a:hover{
    opacity: 0.5 ;
}
</style>
@stop

@section('js')
@stop
