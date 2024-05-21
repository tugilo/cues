@extends('layouts.page')
@section('title', 'パスワード変更')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 mb-4 pb-2">
          <h2 class="h5"><a href="/mypage" class="text-dark">マイページ</a><i class="fas fa-angle-right mx-2"></i>パスワード変更</h2>
        </div>
      </div>

      <form method="post" action="/pw_edit">
          {{ csrf_field() }}

          <input type="hidden" name="mode" value="{{$mode}}">

        <p class="text-red text-bold">
            本サイトは、堅牢性、並びに安全性を担保するのため、<br>
            2023年7月28日にサーバーおよびシステムの変更を行いました。<br><br>

            ご利用者様の大切な個人情報を守る観点から、リニューアル時にパスワードをリセットしております。<br>
            皆様には大変ご不便とご面倒をお掛けいたして申し訳ございませんが、<br>
            下記条件を満たす、新しいパスワードの設定をお願いいたします。
        </p>

        <div class="form-group row border-bottom">
          <label for="new_password" class="col-lg-3 col-form-label pr-lg-0">新しいパズワード</label>
          <div class="col-lg-9">
            <input type="password" class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}" name="new_password" id="new_password" value="" placeholder="">
            @if ($errors->has('new_password'))
                <div class="text-red">
                    <strong>{{ $errors->first('new_password') }}</strong>
                </div>
            @endif
            <input type="password" class="form-control  mt-3 {{ $errors->has('new_password_confirmation') ? 'is-invalid' : '' }}" name="new_password_confirmation" id="new_password_confirmation" value="" placeholder="確認のため再度入力してください">
            @if ($errors->has('new_password_confirmation'))
                <div class="text-red">
                    <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                </div>
            @endif
          </div>
        </div>
        <p class="text-red text-bold">パスワードは必ず以下の条件を満たすようにお願いいたします。</p>
        <ul>
            <li>８文字以上</li>
            <li>英字と数字混在</li>
            <li>IDと同じ文字列の禁止</li>
        </ul>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button class="btn btn-primary w-100" type="submit">変更する</button>
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
    $('form').submit(function () {
        $(this).find(':submit').prop('disabled', 'true');
     });

});
</script>

@stop
