
ゴルフティ注文受付フォームからご注文がございました。
下記内容で受信いたしましたので、ご確認ください。

------------------------------------------------
ご注文内容
------------------------------------------------
【お客様情報】

■お名前
{{$user[0]->torihikisaki_nm}}

■あなたのお名前に外字は含まれていますか？
@if($user[0]->gaiji_flg == 1)含まれている@else含まれていない@endif

■会社名
{{$user[0]->kaisya_nm}}

■支社名
{{$user[0]->shisya_nm}}

■郵便番号
{{$user[0]->postno}}

■ご住所
{{$user[0]->address1}} {{$user[0]->address2}} {{$user[0]->address3}}

■電話番号
{{$user[0]->telno}}

■携帯番号
{{$user[0]->torihikisaki_tantosya_telno}}

■メールアドレス
{{$user[0]->torihikisaki_tantosya_email}}

■役職名
{{$user[0]->syokui_nm}}

【ご注文内容】
@foreach($carts as $cart)
{{$cart['cart_no']}}    {{$cart['category_name']}}  {{$cart['syouhin_name']}}   {{$cart['syohin_amount']}}  {{$cart['tani_name']}}
@endforeach

合計{{$countall}}セット

【備考欄】
{{$bikou}}

ーーーーーーーーーーー
ご不明点ございましたら、下記までお問合せください
引き続きよろしくお願いいたします

------------------------------------------------
株式会社キューズプラス
M&Tec.事業部
〒530-0047
大阪市北区西天満2丁目6-8　堂島ビルヂング6F
TEL:06-6131-0275 FAX:06-6131-2206
E-mail: mt@cues-plus.com
URL:http://www.cues-plus.co.jp
