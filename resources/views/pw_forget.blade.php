@extends('layouts.page')
@section('title', '仮パスワード入力')

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

      <form>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <input type="text" class="form-control" id="inputEmail" value="" placeholder="メールアドレス" required>
          </div>
        </div>
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
