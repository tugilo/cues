@extends('layouts.page')
@section('title', '顧客一覧')

@section('content')
<!-- s:register -->
<section class="register">
  <div class="register-content">
    <div class="container">

      <div class="row">
        <div class="col-12 border-bottom mt-5 pb-2">
          <h2 class="h5">顧客一覧</h2>
        </div>
      </div>

      <div class="table-responsive">
          <table class="table table-bordered table-striped order-column cell-border hover" id="bc-table">
              <thead>
                  <tr class="table-info text-nowrap">
                      <th class="text-right align-middle" style="width:5%">取引先CD</th>
                      <th class="text-center align-middle">支社名</th>
                      <th class="text-center align-middle">会社名</th>
                      <th class="text-center align-middle">お名前</th>
                      <th class="text-center align-middle">ふりがな</th>
                      <th class="text-center align-middle">電話番号</th>
                      <th class="text-center align-middle">メールアドレス</th>
                      <th class="text-center align-middle">パスワード</th>
                  </tr>
              </thead>
              <body>
                  @if($users)
                  @foreach($users as $user)

                  <tr>
                      <td class="text-right align-middle">{{$user->torihikisaki_id}}</td>
                      <td class="text-left align-middle text-nowrap ">{{$user->kaisya_nm}}</td>
                      <td class="text-left align-middle text-nowrap ">{{$user->shisya_nm}}</td>
                      <td class="text-left align-middle text-nowrap ">{{$user->torihikisaki_nm}}</td>
                      <td class="text-left align-middle text-nowrap">{{$user->torihikisaki_kana}}</td>
                      <td class="text-left align-middle text-nowrap">{{$user->torihikisaki_tantosya_telno}}</td>
                      <td class="text-left align-middle text-nowrap">{{$user->torihikisaki_tantosya_email}}</td>
                      <td class="text-left align-middle text-nowrap">{{$user->torihikisaki_web_password}}</td>
                  </tr>
                  @endforeach
                  @endif
              </tbody>
          </table>

    </div> <!-- .container -->
  </div>
</section>
<!-- n:register -->

@stop
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.bootstrap4.min.css">

@stop

@section('js')
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
<script>
$(function(){
    // デフォルトの設定を変更
    $.extend( $.fn.dataTable.defaults, {
        language: {
            url: "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Japanese.json"
        }
    });
    $("#bc-table").DataTable({
      "language": {
        "emptyTable": "テーブルにデータがありません",
        "info": " _TOTAL_ 件中 _START_ から _END_ まで表示",
        "infoEmpty": " 0 件中 0 から 0 まで表示",
        "infoFiltered": "（全 _MAX_ 件より抽出）",
        "infoThousands": ",",
        "lengthMenu": "_MENU_ 件表示",
        "loadingRecords": "読み込み中...",
        "processing": "処理中...",
        "search": "検索:",
        "zeroRecords": "一致するレコードがありません",
        "paginate": {
            "first": "先頭",
            "last": "最終",
            "next": "次",
            "previous": "前"
        },
        "aria": {
            "sortAscending": ": 列を昇順に並べ替えるにはアクティブにする",
            "sortDescending": ": 列を降順に並べ替えるにはアクティブにする"
        },
      },
      "responsive": false,
      "lengthChange": true,
      "pageLength": 15,
      "paging": true,
      "pagingType": "simple_numbers",
      "lengthMenu": [[15, 30, -1], [15, 30, "全件"]],
      "info": false,
      "order": [ 0, "asc" ],
      "dom": 'Blfrtip'
    });
});
</script>

@stop
