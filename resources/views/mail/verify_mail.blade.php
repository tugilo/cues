@component('mail::message')

登録ありがとうございます。<br>
メールアドレスに、仮パスワードをお送りします。<br>
以下URLに入力して登録作業を継続してください。<br>

仮パスワード：{{$passwd}}<br>

登録URL<br>
{{$host}}/signup?urltoken={{$urltoken}}<br>


ご不明点ございましたら、下記までお問合せください<br>
引き続きよろしくお願いいたします<br>

------------------------------------------------
株式会社キューズプラス<br>
M&Tec.事業部<br>
〒530-0047<br>
大阪市北区西天満2丁目6-8　堂島ビルヂング6F<br>
TEL:06-6131-0275 FAX:06-6131-2206<br>
E-mail: mt@cues-plus.com<br>
URL:http://www.cues-plus.co.jp<br>

@endcomponent
