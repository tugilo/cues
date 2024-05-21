@component('mail::message')

ゴルフボール注文受付フォームからご注文がございました。<br>
下記内容で受信いたしましたので、ご確認ください。<br>

------------------------------------------------<br>
ご注文内容<br>
------------------------------------------------<br>
【お客様情報】<br>

■お名前<br>
{{$user[0]->torihikisaki_nm}}<br>

■あなたのお名前に外字は含まれていますか？<br>
@if($user[0]->gaiji_flg == 1)含まれている@else含まれていない@endif<br>

■会社名<br>
{{$user[0]->kaisya_nm}}<br>

■支社名<br>
{{$user[0]->shisya_nm}}<br>

■郵便番号<br>
{{$user[0]->postno}}<br>

■ご住所<br>
{{$user[0]->address1}} {{$user[0]->address2}} {{$user[0]->address3}}<br>

■電話番号<br>
{{$user[0]->telno}}<br>

■携帯番号<br>
{{$user[0]->torihikisaki_tantosya_telno}}<br>

■メールアドレス<br>
{{$user[0]->torihikisaki_tantosya_email}}<br>

■役職名<br>
{{$user[0]->syokui_nm}}<br>

【ご注文内容】<br>
@foreach($carts as $cart)
{{$cart['cart_no']}}    {{$cart['category_name']}}  {{$cart['syouhin_name']}}   {{$cart['syohin_amount']}}  {{$cart['tani_name']}}<br>
@endforeach

合計{{$countall}}ダース<br>

【備考欄】<br>
{{$bikou}}<br>

ーーーーーーーーーーー<br>
ご不明点ございましたら、下記までお問合せください<br>
引き続きよろしくお願いいたします<br>

------------------------------------------------<br>
株式会社キューズプラス<br>
M&Tec.事業部<br>
〒530-0047<br>
大阪市北区西天満2丁目6-8　堂島ビルヂング6F<br>
TEL:06-6131-0275 FAX:06-6131-2206<br>
E-mail: mt@cues-plus.com<br>
URL:http://www.cues-plus.co.jp

@endcomponent
