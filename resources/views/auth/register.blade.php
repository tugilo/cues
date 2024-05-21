@extends('layouts.page')
@section('title', '会員登録')

@section('content')

<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 mb-4 pb-2">
          <h2 class="h5">会員登録</h2>
          <p>情報入力後、確認ボタンを押してください。</p>
        </div>
      </div>

      <p class="px-3 py-1 mb-3 text-note s-small text-center">カレンダー(挨拶状付き、LP情報あり)をご注文の場合、下記入力情報が印字されますので、必ずご確認ください。（役職名は印字されません）</p>

      <form>
        <div class="form-group row border-bottom">
          <label for="inputName" class="col-lg-3 col-form-label pr-lg-0">お名前<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputName" value="" placeholder="例）山田　太郎" required>
            <p class="small mt-3">※姓名の間には半角スペースをお空けください</p>
            <p class="small">※旧字体(JIS外字)はメールなどで表示されない可能性があります(例：髙, 﨑…)</p>
            <p class="small mb-3">※旧字体に当てはまる方は、備考欄にその旨ご記入ください。</p>
            <div class="color-box">
              <p>あなたのお名前に旧字体・外字は含まれていますか？<span class="badge badge-required float-none">必須</span></p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios0" value="0" checked>
                <label class="form-check-label" for="oldCharacterRadios0">含まれていない</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="oldCharacterRadios" id="oldCharacterRadios1" value="1">
                <label class="form-check-label" for="oldCharacterRadios1">含まれている</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputCompany" class="col-lg-3 col-form-label pr-lg-0">会社名</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputCompany" value="" placeholder="プルデンシャル生命保険株式会社" required>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputBranch" class="col-lg-3 col-form-label pr-lg-0">支社名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
              <select id="inputBranch" class="custom-select">
                <option selected>支社名・・・</option>
                <option>・・・</option>
              </select>
            </div>
            <p class="small mb-0">※プルダウンでお選びください。住所情報（郵便番号、住所、電話番号）が自動表示されます。</p>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputZip" class="col-lg-3 col-form-label pr-lg-0">郵便番号</label>
          <div class="col-auto">
            <input type="text" class="form-control" id="inputZip" size="7" value="">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputAddress" class="col-lg-3 col-form-label pr-lg-0">住所</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputAddress" value="">
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputTelephone" class="col-lg-3 col-form-label pr-lg-0">電話番号</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputTelephone" value="">
            <div class="color-box mt-3">
              <p>以前ご注文時から支社が変更になった</p>
              <div class="form-check form-inline pl-lg-0">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios0" value="0" checked>
                <label class="form-check-label mr-3" for="changeBranchRadios0">支社が変わった</label>
                <select id="inputChangeBranch" class="custom-select small">
                  <option selected required>支社名・・・</option>
                  <option>・・・</option>
                </select>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="changeBranchRadios" id="changeBranchRadios1" value="1">
                <label class="form-check-label" for="changeBranchRadios1">同じ支社（今年初めてご注文の方もこちらにチェックを入れてください）</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputMobile" class="col-lg-3 col-form-label pr-lg-0">携帯番号<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputMobile" value="" placeholder="例）000-0000-0000" required>
            <p class="small mt-3">※必ず申込者ご自身の連絡先を入力ください。<span class="text-red">挨拶状に印字されます。</span></p>
            <p class="small">※半角数字で入力ください</p>
            <p class="small mb-0">※-（ハイフン）を入力してください</p>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputEmail" class="col-lg-3 col-form-label pr-lg-0">メールアドレス</label>
          <div class="col-lg-9">
            <input type="text" class="form-control" id="inputEmail" value="name@prudential.co.jp" readonly>
          </div>
        </div>
        <div class="form-group row border-bottom">
          <label for="inputPosition" class="col-lg-3 col-form-label pr-lg-0">役職名<span class="badge badge-required">必須</span></label>
          <div class="col-lg-9">
            <div class="form-inline">
              <select id="inputPosition" class="custom-select">
                <option selected required>役職名・・・</option>
                <option>・・・</option>
              </select>
            </div>
            <p class="small mb-0">※挨拶状に印字されません。</p>
          </div>
        </div>
        <div class="form-group row">
          <div class="col-lg-6 offset-lg-3">
            <a href="/register_confirm" class="btn btn-primary w-100">確認</a>
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
@stop
