@extends('layouts.page')
@section('title', 'ご購入履歴')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
          <h2 class="h5"><a href="/mypage" class="text-dark">マイページ</a><i class="fas fa-angle-right mx-2"></i>ご購入履歴</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-3 py-2 bg-dark text-white">
          <h3 class="h6 m-0 p-0">ご購入履歴</h3>
        </div>
      </div>
      @for($i = 0; $i < count($year_list); $i++)
      <div class="row">
        <div class="col-12 mt-3 border-bottom">
          <h4 class="h6">{{$year_list[$i]}}年</h4>
        </div>
      </div>
      <div class="row py-4">
        <div class="col-lg-12">
          <table class="table history-table">
            <tbody>
                @if($history)
                @foreach($history as $h)
                @if($h->system_year == $year_list[$i])
                <tr>
                    @if($h->syouhin_syubetu == 3)

                    <td>{{$h->web_syouhin_category_nm}}</td><td class="width:40%">{{$h->web_syouhin_nm}}</td><td>&nbsp;</td><td>{{$h->suryou}}@if($h->syouhin_syubetu == 3){{ $h->tani_name }}@else部@endif</td>
                    @else

                    <td>{{$h->web_syouhin_category_nm}}</td><td class="width:40%">{{$h->web_syouhin_nm}}</td><td style="white-space:nowrap">@if($h->hatsou_syouhin_flg == 0)支社納品 @else 発送代行 @endif</td><td>{{$h->suryou}}@if($h->syouhin_syubetu == 3){{ $h->tani_name }}@else部@endif</td>
                    @endif
                </tr>

                @endif
                @endforeach
                @endif
            </tbody>
          </table>
        </div>
      </div>
      @endfor


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
        <a class="btn btn-primary" href="/pdf/2024C_aisatujyo.pdf" download="2024C_aisatujyo.pdf" id="pdf_dl">同意してダウンロード</a>

            </div>
        </div>
    </div>
</div>


@stop
@section('css')
<style>
.modal-footer{
  justify-content : center;
}
</style
@stop

@section('js')
<script>
$(function() {
    $('#pdf_dl').on('click', function(){
        $('#modal_download_aisatu_pdf').modal('hide');

    });
});

</script>

@stop
