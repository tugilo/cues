@extends('layouts.page')
@section('title', '商品一覧')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
            <div class="text-center">
                <img class="img-fluid" src="/assets/images/golf_top_saihan_img.jpg" alt="ゴルフボール">
            </div>
          <h2 class="h5 mt-2">PRICE</h2>
          <div class="text-center">
              <img class="img-fluid" src="https://www.cues-plus.co.jp/prudential_images_2022/price_list.jpg" alt="ゴルフボール">
          </div>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-lg-2 my-lg-2 py-lg-2">
          @if($syouhinlist)
          @foreach($syouhinlist as $sl)

          <!-- s:item -->
          <div class="col mb-4">
              @if($sl->sold_count == 0)
              <div class="card item-card text-center h-100 rounded-0">
                  <div class="border">
                    <img src="/assets/images/{{$sl->web_syouhin_image1}}" class="card-img-top" alt="{{$sl->web_syouhin_category_nm}}">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6">{{$sl->web_syouhin_category_nm}} <span class="text-red font-weight-bold">SOLDOUT</span></h3>
                  </div>
              </div>
              @else
              <a href="/syouhin/detail?category_cd={{$sl->syouhin_category_cd}}" class="card item-card text-center h-100 rounded-0">
                  <div class="border">
                    <img src="/assets/images/{{$sl->web_syouhin_image1}}" class="card-img-top" alt="{{$sl->web_syouhin_category_nm}}">
                  </div>
                  <div class="card-body">
                    <h3 class="card-title h6">{{$sl->web_syouhin_category_nm}}</h3>
                  </div>
              </a>
              @endif
          </div>
          <!-- n:item -->

          @endforeach
          @endif

      </div> <!-- .row -->

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
@stop

@section('js')
@stop
