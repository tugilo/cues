@extends('layouts.calendar_page')
@section('title', 'ありがとうございました')

@section('content')


<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-top border-bottom mt-5 mb-4 py-3">
            <h2 class="h5 text-center mb-0">{{ Session::get('shisya_nm') }} {{ Session::get('name') }}様</h2>
        </div>
      </div>

      <div class="row my-lg-5 py-lg-5">
        <div class="col-12 text-center mb-4">
          <p>ご注文ありがとうございました。</p>
          <p>メールアドレスに、ご確認用のメールをお送りしておりますので<br>必ず、ご確認くださいますよう<br>お願いいたします。</p>
        </div>
      </div>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
<style>
.no-spin::-webkit-inner-spin-button,
.no-spin::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
    -moz-appearance:textfield;
}
</style>
@stop

@section('js')

<script>
</script>
@stop
