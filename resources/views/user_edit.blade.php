@extends('layouts.page')
@section('title', '会員登録')

@section('content')
<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 mb-4 pb-2">
          <h2 class="h5"><a href="/mypage" class="text-dark">マイページ</a><i class="fas fa-angle-right mx-2"></i>アカウント情報変更</h2>
        </div>
      </div>

      <!--p class="px-3 py-1 mb-3 text-note s-small text-center">カレンダー(挨拶状付き、LP情報あり)をご注文の場合、下記入力情報が印字されますので、必ずご確認ください。（役職名は印字されません）</p-->

      <form method="post" action="/register_confirm">
          {{ csrf_field() }}

          <input type="hidden" name="mode" value="1">
          <div class="form-group row border-bottom">
            <label for="lp_cd" class="col-lg-3 col-form-label pr-lg-0">LPコード</label>
            <div class="col-lg-9">
                @if($user[0]->lp_cd)
                <p class="confirm-value">@php echo sprintf('%07d', $user[0]->lp_cd) @endphp</p>
                @else
                <p class="confirm-value">&nbsp;</p>
                @endif

                <input type="hidden" class="form-control" id="lp_cd" name="lp_cd" value="{{$user[0]->lp_cd}}" readonly>
            </div>
          </div>

        <div class="form-group row border-bottom">
          <label for="inputName" class="col-lg-3 col-form-label pr-lg-0">お名前<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control  {{ $errors->has('inputName') ? 'is-invalid' : '' }}" name="inputName" id="inputName" value="{{$user[0]->torihikisaki_nm}}" placeholder="例）山田　太郎">
            @if ($errors->has('inputName'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputName') }}</strong>
                </div>
            @endif
            <p class="small mt-3">※姓名の間には半角スペースをお空けください</p>
            <p class="small">※旧字体(JIS外字)はメールなどで表示されない可能性があります(例：髙, 﨑…)</p>
            <p class="small mb-3">※旧字体に当てはまる方は、備考欄にその旨ご記入ください。</p>
            <div class="color-box">
              <p>あなたのお名前に旧字体・外字は含まれていますか？<span class="badge badge-required float-none">必須</span></p>
              @if($user[0]->gaiji_flg == 1)

              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios1" value="1" checked>
                <label class="form-check-label" for="oldCharacterRadios1">含まれている</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios0" value="0" >
                <label class="form-check-label" for="oldCharacterRadios0">含まれていない</label>
              </div>
              @else

              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios1" value="1">
                <label class="form-check-label" for="oldCharacterRadios1">含まれている</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios0" value="0" checked>
                <label class="form-check-label" for="oldCharacterRadios0">含まれていない</label>
              </div>
              @endif

            </div>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputNameKana" class="col-lg-3 col-form-label pr-lg-0">お名前（フリガナ)<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control {{ $errors->has('torihikisaki_kana') ? 'is-invalid' : '' }}" id="inputNameKana" name="inputNameKana" value="{{$user[0]->torihikisaki_kana}}" placeholder="例）ヤマダ　タロウ">
            @if ($errors->has('inputNameKana'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputNameKana') }}</strong>
                </div>
            @endif
            <p class="small mt-3">必ず全角カタカナで入力してください</p>
            <p class="small mb-3">※姓名の間には半角スペースをお空けください</p>
          </div>
        </div>

        <div class="form-group row border-bottom">
          <label for="inputCompany" class="col-lg-3 col-form-label pr-lg-0">会社名</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputCompany" id="inputCompany" value="{{$user[0]->kaisya_nm}}" placeholder="プルデンシャル生命保険株式会社" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputBranch" class="col-lg-3 col-form-label pr-lg-0">支社名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
              <select name="inputBranch" id="inputBranch" class="custom-select  {{ $errors->has('inputBranch') ? 'is-invalid' : '' }}">
                <option value="">---</option>
                @if($shisyas)
                    @foreach($shisyas as $shisya)
                        @if($shisya['option'] == 0)

                        <optgroup label="{{$shisya['value']}}">
                        @else
                            @if($user[0]->shisya_cd == $shisya['option'])

                            <option value="{{$shisya['option']}}" selected>{{$shisya['value']}}</option>
                            @else

                            <option value="{{$shisya['option']}}"  @if(old('inputBranch') == $shisya['option']) selected  @endif>{{$shisya['value']}}</option>
                            @endif
                        @endif
                    @endforeach
                @endif
                <option value=""></option>
                <option value="3001">営業統括本部</option>

              </select>
            </div>
            @if ($errors->has('inputBranch'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputBranch') }}</strong>
                </div>
            @endif
            <p class="small mb-0">※プルダウンでお選びください。住所情報（郵便番号、住所、電話番号）が自動表示されます。</p>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputZip" class="col-lg-3 col-form-label pr-lg-0">郵便番号</label>
          <div class="col-auto">
            <input type="text" class="form-control" id="inputZip" size="7" value="{{$user[0]->postno}}" readonly>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputAddress" class="col-lg-3 col-form-label pr-lg-0">住所</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputAddress" value="{{$user[0]->address1}} {{$user[0]->address2}} {{$user[0]->address3}}" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputTelephone" class="col-lg-3 col-form-label pr-lg-0">電話番号</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputTelephone" value="{{$user[0]->telno}}" readonly>
            @if($user[0]->shisya_henkou_flag == 1)

            <div class="color-box mt-3">
                <p>以前ご注文時から支社が変更になった</p>
                <div class="form-check form-inline pl-sm-0">
                  <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios0" value="1" checked>
                  <label class="form-check-label mr-3" for="changeBranchRadios0">支社が変わった</label>
                  <select name="inputChangeBranch" id="inputChangeBranch" class="custom-select small">
                      <option value="">---</option>
                      <option value="1" @if($user[0]->shisya_henkou_dt == '2021-04-01') selected  @endif>2021年4月</option>
                      <option value="2" @if($user[0]->shisya_henkou_dt == '2021-05-01') selected  @endif>2021年5月</option>
                      <option value="3" @if($user[0]->shisya_henkou_dt == '2021-06-01') selected  @endif>2021年6月</option>
                      <option value="4" @if($user[0]->shisya_henkou_dt == '2021-07-01') selected  @endif>2021年7月</option>
                      <option value="5" @if($user[0]->shisya_henkou_dt == '2021-08-01') selected  @endif>2021年8月</option>
                      <option value="6" @if($user[0]->shisya_henkou_dt == '2021-09-01') selected  @endif>2021年9月</option>
                      <option value="7" @if($user[0]->shisya_henkou_dt == '2021-10-01') selected  @endif>2021年10月</option>
                      <option value="8" @if($user[0]->shisya_henkou_dt == '2021-11-01') selected  @endif>2021年11月</option>
                      <option value="9" @if($user[0]->shisya_henkou_dt == '2021-12-01') selected  @endif>2021年12月</option>
                      <option value="10" @if($user[0]->shisya_henkou_dt == '2022-01-01') selected  @endif>2022年1月</option>
                      <option value="11" @if($user[0]->shisya_henkou_dt == '2022-02-01') selected  @endif>2022年2月</option>
                      <option value="12" @if($user[0]->shisya_henkou_dt == '2022-03-01') selected  @endif>2022年3月</option>
                      <option value="13" @if($user[0]->shisya_henkou_dt == '2022-04-01') selected  @endif>2022年4月</option>
                  </select>より
                </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios1" value="0">
                <label class="form-check-label" for="changeBranchRadios1">同じ支社（今年初めてご注文の方もこちらにチェックを入れてください）</label>
              </div>
            </div>
            @else

            <div class="color-box mt-3">
                <p>以前ご注文時から支社が変更になった</p>
                <div class="form-check form-inline pl-sm-0">
                  <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios0" value="1">
                  <label class="form-check-label mr-3" for="changeBranchRadios0">支社が変わった</label>
                  <select name="inputChangeBranch" id="inputChangeBranch" class="custom-select small">
                      <option value="" selected>---</option>
                      <option value="1" @if(old('changeBranchRadios','1') == '1' ? 'selected' : '')   @endif>2021年4月</option>
                      <option value="2" @if(old('changeBranchRadios','2') == '2' ? 'selected' : '')   @endif>2021年5月</option>
                      <option value="3" @if(old('changeBranchRadios','3') == '3' ? 'selected' : '')   @endif>2021年6月</option>
                      <option value="4" @if(old('changeBranchRadios','4') == '4' ? 'selected' : '')   @endif>2021年7月</option>
                      <option value="5" @if(old('changeBranchRadios','5') == '5' ? 'selected' : '')   @endif>2021年8月</option>
                      <option value="6" @if(old('changeBranchRadios','6') == '6' ? 'selected' : '')   @endif>2021年9月</option>
                      <option value="7" @if(old('changeBranchRadios','7') == '7' ? 'selected' : '')   @endif>2021年10月</option>
                      <option value="8" @if(old('changeBranchRadios','8') == '8' ? 'selected' : '')   @endif>2021年11月</option>
                      <option value="9" @if(old('changeBranchRadios','9') == '9' ? 'selected' : '')   @endif>2021年12月</option>
                      <option value="10" @if(old('changeBranchRadios','10') == '10' ? 'selected' : '')   @endif>2022年1月</option>
                      <option value="11" @if(old('changeBranchRadios','11') == '11' ? 'selected' : '')   @endif>2022年2月</option>
                      <option value="12" @if(old('changeBranchRadios','12') == '12' ? 'selected' : '')   @endif>2022年3月</option>
                      <option value="13" @if(old('changeBranchRadios','13') == '13' ? 'selected' : '')   @endif>2022年4月</option>
                  </select>より
                </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios1" value="0" checked>
                <label class="form-check-label" for="changeBranchRadios1">同じ支社（今年初めてご注文の方もこちらにチェックを入れてください）</label>
              </div>
            </div>
            @endif
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputMobile" class="col-lg-3 col-form-label pr-lg-0">携帯番号<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control  {{ $errors->has('inputMobile') ? 'is-invalid' : '' }}" name="inputMobile" id="inputMobile" value="{{$user[0]->torihikisaki_tantosya_telno}}" placeholder="例）000-0000-0000">
            @if ($errors->has('inputMobile'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputMobile') }}</strong>
                </div>
            @endif
            <p class="small mt-3">※必ず申込者ご自身の連絡先を入力ください。<span class="text-red">挨拶状の場合は印字されます。</span></p>
            <p class="small">※半角数字で入力ください</p>
            <p class="small mb-0">※-（ハイフン）を入力してください</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputEmail" class="col-lg-3 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" name="inputEmail" id="inputEmail" value="{{$user[0]->torihikisaki_tantosya_email}}" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">役職名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
              <select name="inputPosition" id="inputPosition" class="custom-select  {{ $errors->has('inputPosition') ? 'is-invalid' : '' }}">
                <option  value="">---</option>
                @if($syokuilists)
                @foreach($syokuilists as $syokuilist)
                @if($syokuilist->syokui_cd == $user[0]->syokui_cd)

                <option value="{{$syokuilist->syokui_cd}}" selected>{{$syokuilist->syokui_nm}}</option>
                @else

                <option value="{{$syokuilist->syokui_cd}}" @if(old('inputPosition') == $syokuilist->syokui_cd) selected  @endif>{{$syokuilist->syokui_nm}}</option>
                @endif
                @endforeach
                @endif

              </select>
            </div>
            @if ($errors->has('inputPosition'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputPosition') }}</strong>
                </div>
            @endif
            <p class="small mb-0">※挨拶状に印字されません。</p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button class="btn btn-primary w-100" type="submit" id="btn_change">変更する</button>
          </div>
        </div>
      </form>

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
    $('#inputBranch').on('change', function() {
        var branch_id = $('#inputBranch').val();
        var token = $('input[name="_token"]').val();
        if(branch_id){
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': token
                    }
            });
            $.ajax({
                url: '/getAddress',
                type: 'post',
                dataType: 'json',
                data: {
                    'branch_id': branch_id,
                },
            })
            .done(function(data) {
                document.getElementById('inputZip').value = data['postno'];
                document.getElementById('inputAddress').value = data['address1'] + data['address2'] + data['address3'];
                document.getElementById('inputTelephone').value = data['telno'];
                //console.log('changed ok:'+data);
            });

        }
    });
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });
     $( document ).ready(function() {
         var branch_id = $('#inputBranch').val();
         var token = $('input[name="_token"]').val();
         var zip = document.getElementById('inputZip').value;

         if(branch_id){
             $.ajaxSetup({
                     headers: {
                         'X-CSRF-TOKEN': token
                     }
             });
             $.ajax({
                 url: '/getAddress',
                 type: 'post',
                 dataType: 'json',
                 data: {
                     'branch_id': branch_id,
                 },
             })
             .done(function(data) {
                 document.getElementById('inputZip').value = data['postno'];
                 document.getElementById('inputAddress').value = data['address1'] + data['address2'] + data['address3'];
                 document.getElementById('inputTelephone').value = data['telno'];
                 //console.log('changed ok:'+data);
             });
         }

     });
    /*
    $('#btn_change').on('click', function(){
        $('form').submit();
    });
    */
});
</script>
@stop
