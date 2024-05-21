@extends('layouts.page')
@section('title', 'ログイン')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">
        <p class="h3 text-red text-center">※2023年カレンダーの販売は7月25日にオープン致します</p>

      <div class="row">
        <div class="col-12 mt-5">
          <h2 class="h5 text-center">会員ログイン</h2>
          <p class="small text-center text-red">※所属支社異動の場合はマイページより修正をお願いします。</p>
        </div>
      </div>

      <form>
        <div class="form-group row">
          <label for="inputEmail" class="col-lg-2 offset-lg-2 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-6">
            <input type="text" class="form-control" id="inputEmail" value="" placeholder="name@prudential.co.jp" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-lg-2 offset-lg-2 col-form-label pr-lg-0">パスワード</label>
          <div class="col-lg-6">
            <input type="password" class="form-control" id="inputPassword" value="" placeholder="" required>
          </div>
        </div>
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
</script>

<script>

@stop
