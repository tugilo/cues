@extends('layouts.login_page')
@section('title', 'ログイン')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 mt-5">
          <h2 class="h5 text-center">メールアドレス宛に仮パスワードをお送りしております。<br>下記にご入力後、送信ボタンをおしてください。</h2>
        </div>
      </div>

      <form method="post" action="/signup">
          {{ csrf_field() }}
          <input type="hidden" name="urltoken" value="{{$urltoken}}">
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <input type="password" class="form-control {{ $errors->has('tmp_password') ? 'is-invalid' : '' }}" name="tmp_password" id="tmp_password" placeholder="仮パスワード">
            @if ($errors->has('tmp_password'))
                <div class="text-red">
                    <strong>{{ $errors->first('tmp_password') }}</strong>
                </div>
            @endif
          </div>
        </div>
        {{-- エラーメッセージ --}}
        @if (isset($login_error))
            @if($login_error == 1)
            <div class="text-center">
                <div class="text-red">
                    <strong>セッション切れです。再度メールアドレスの登録からお願いいたします。</strong>
                </div>
            </div>
            @elseif($login_error == 2)
            <div class="text-center">
                <div class="text-red">
                    <strong>仮パスワードが一致しません。</strong>
                </div>
            </div>
            @endif
        @endif
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <button class="btn btn-primary w-100" type="submit">送信する</button>
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
