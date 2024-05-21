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
        @if(!empty($flgs))
          <h4 class="h6">{{$year_list[$i]}}年 @if($year_list[$i] == 2022 && $flgs[0]->download_button_flag == 1) <span class="h4 text-red">「A4版」挨拶状（PDF）の無料ダウンロードは9月から可能となります。</span><!--a href=""><span class="badge bg-success p-2 ml-2 text-white">挨拶状ダウンロード</span></a--> @endif</h4>
         @else

         <h4 class="h6">{{$year_list[$i]}}年@endif</h4>
         @endif
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

                    <td>{{$h->web_syouhin_category_nm}}</td><td class="width:40%">{{$h->web_syouhin_nm}}</td><td>&nbsp;</td><td>{{$h->suryou}}@if($h->syouhin_syubetu == 3)ダース@else部@endif</td>
                    @else

                    <td>{{$h->web_syouhin_category_nm}}</td><td class="width:40%">{{$h->web_syouhin_nm}}</td><td style="white-space:nowrap">@if($h->hatsou_syouhin_flg == 0)支社納品 @else 発送代行 @endif</td><td>{{$h->suryou}}@if($h->syouhin_syubetu == 3)ダース@else部@endif</td>
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
@stop
@section('css')
@stop

@section('js')
@stop
