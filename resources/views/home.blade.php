@extends('layouts.page')
@section('title', 'ホーム')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">
      <div class="row">
        <div class="col-12 border-top border-bottom mt-5 mb-4 py-3 ">
          <h2 class="h5 text-center mb-0">{{ Session::get('shisya_nm') }} {{ Session::get('name') }}様</h2>
        </div>
      </div>

      <div class="row justify-content-center row-cols-1 row-cols-lg-3 my-lg-5 py-lg-5">
        @foreach ($syouhin_syubetus as $syouhin_syubetu)
        <div class="col mb-4">
            @if ($syouhin_syubetu->open_flg)
            <a href="{{ $syouhin_syubetu->link }}">
                <div class="card text-center h-100">
                  <div class="border m-3">
                    <img src="/assets/images/{{ $syouhin_syubetu->image }}" class="card-img-top" alt="{{ $syouhin_syubetu->syouhin_syubetu_name }}">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6 text-muted">{{ $syouhin_syubetu->syouhin_syubetu_name }}</h3>
                  </div>
                </div>
            </a>
            @else
            <div class="card text-center h-100">
                <div class="border m-3">
                    <img src="/assets/images/{{ $syouhin_syubetu->image }}" class="card-img-top" alt="{{ $syouhin_syubetu->syouhin_syubetu_name }}">
                </div>
                <div class="card-body">
                    <h3 class="card-title h6 text-muted">{{ $syouhin_syubetu->syouhin_syubetu_name }}</h3>
                </div>
            </div>
            @endif
        </div>
        @endforeach
      </div>

      <div class="row mb-5 pb-5">
        <div class="col-lg-6 offset-lg-3">
          <p class="text-center mb-4 bold">昨年のご購入履歴は下記<a href="/mypage">「マイページ」</a>の購入履歴ページでご覧いただけます。 </p>
          <a class="btn btn-dark w-100" href="/mypage">MY PAGE</a>
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
<script>
</script>
@stop
