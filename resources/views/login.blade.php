@extends('layouts.page')
@section('title', 'ログイン')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 mt-5">
          <h2 class="h5 text-center">会員ログイン</h2>
          <p class="small text-center text-red">※所属支社異動の場合はマイページより修正をお願いします。</p>
        </div>
      </div>

      <form  method="post" action="/login">
          {{ csrf_field() }}

        <div class="form-group row">
          <label for="inputEmail" class="col-lg-2 offset-lg-2 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-6">
            <input type="text" class="form-control {{ $errors->has('inputEmail') ? 'is-invalid' : '' }}" id="inputEmail" name="inputEmail" value="@if(isset($login_error)){{$inputEmail}}@else{{old('inputEmail')}}@endif" placeholder="name@prudential.co.jp">
            @if ($errors->has('inputEmail'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputEmail') }}</strong>
                </div>
            @endif
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-lg-2 offset-lg-2 col-form-label pr-lg-0">パスワード</label>
          <div class="col-lg-6 bold">
            <input type="password" class="form-control {{ $errors->has('inputPassword') ? 'is-invalid' : '' }}" id="inputPassword" name="inputPassword" value="@if(isset($login_error)){{$inputPassword}}@else{{old('inputPassword')}}@endif" placeholder="">
            <span class="text-red">※半角英数でご入力ください。</span><br>
            <span class="text-red text-bold">※スマホの場合はメール内のパスワードをコピーして貼り付けてください。</span><br>
            <span class="text-red text-bold">※パスワードを忘れた方は、前の画面に戻り、メールアドレスを送信していただけますと
パスワードが届きます。</span>
            @if ($errors->has('inputPassword'))
                <div class="text-red">
                    <strong>{{ $errors->first('inputPassword') }}</strong>
                </div>
            @endif
          </div>
        </div>
        {{-- エラーメッセージ --}}
        @if (isset($login_error))
        <div class="text-center">
            <div class="text-red">
                <strong>メールアドレスまたはパスワードが一致しません。</strong>
            </div>
        </div>
        @endif
        <!--p class="h3 text-red text-center">※2023年カレンダーの販売は7月25日にオープン致します</p-->

        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button class="btn btn-primary w-100" type="submit">ログイン</button>
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
