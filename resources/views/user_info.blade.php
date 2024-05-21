@extends('layouts.page')
@section('title', 'アカウント設定')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
          <h2 class="h5"><a href="/mypage" class="text-dark">マイページ</a><i class="fas fa-angle-right mx-2"></i>アカウント設定</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-3 py-2 bg-dark text-white">
          <h3 class="h6 m-0 p-0">アカウント情報</h3>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="lp_cd" class="col-lg-3 col-form-label pr-lg-0">LPコード</label>
        <div class="col-lg-9">
            @if($user[0]->lp_cd)
            <p class="confirm-value">@php echo sprintf('%07d', $user[0]->lp_cd) @endphp</p>
            @else
            <p class="confirm-value">&nbsp;</p>
            @endif
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputName" class="col-lg-3 col-form-label pr-lg-0">お名前</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->torihikisaki_nm}}</p>
          <p class="text-black-50">あなたのお名前に旧字体・外字は含まれていますか？</p>
          <p>@if($user[0]->gaiji_flg == 1)含まれている@else含まれていない@endif</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputNameKana" class="col-lg-3 col-form-label pr-lg-0">お名前（フリガナ)</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->torihikisaki_kana}}</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputCompany" class="col-lg-3 col-form-label pr-lg-0">会社名</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->kaisya_nm}}</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputBranch" class="col-lg-3 col-form-label pr-lg-0">支社名</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->shisya_nm}}</p>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputZip" class="col-lg-3 col-form-label pr-lg-0">郵便番号</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->postno}}</p>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputAddress" class="col-lg-3 col-form-label pr-lg-0">住所</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->address1}} {{$user[0]->address2}} {{$user[0]->address3}} </p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputTelephone" class="col-lg-3 col-form-label pr-lg-0">電話番号</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->telno}}</p>
          <p class="text-black-50">昨年ご注文時から支社が変更になった</p>
          <p> @if($user[0]->shisya_henkou_flag == 1)支社が変わった @if($user[0]->shisya_henkou_dt){{$user[0]->shisya_henkou_dt}} より@endif @else支社が変わっていない@endif</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputMobile" class="col-lg-3 col-form-label pr-lg-0">携帯番号</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->torihikisaki_tantosya_telno}}</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputEmail" class="col-lg-3 col-form-label pr-lg-0">メールアドレス</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->torihikisaki_tantosya_email}}</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">役職名</label>
        <div class="col-lg-9">
          <p class="confirm-value">{{$user[0]->syokui_nm}}</p>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">口座振替</label>
        <div class="col-lg-9">
          <p class="confirm-value">@if($user[0]->siharaihou_cd == 1) 登録済み @else 未登録 @endif</p>
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-5 offset-lg-7">
          <a class="btn btn-secondary w-100" href="/user_edit">アカウント情報を変更する</a>
        </div>
      </div>

      <div class="row">
        <div class="col-12 mt-5 py-2 bg-dark text-white">
          <h3 class="h6 m-0 p-0">パスワード</h3>
        </div>
      </div>
      <div class="form-group row border-bottom">
        <label for="inputPassword" class="col-lg-3 col-form-label pr-lg-0">パズワード</label>
        <div class="col-lg-9">
        </div>
      </div>
      <div class="form-group row">
        <div class="col-lg-5 offset-lg-7">
          <a class="btn btn-secondary w-100" href="/pw_edit">パスワードを変更する</a>
        </div>
      </div>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
@stop

@section('js')
@stop
