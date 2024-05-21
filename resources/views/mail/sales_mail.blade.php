@component('mail::message')
{{$user[0]->kaisya_nm}}　{{$user[0]->shisya_nm}}<br>
{{$user[0]->torihikisaki_nm}} 様<br><br>
この度は、ゴルフボ—ルのご用命をいただき、誠にありがとうございます。<br>
ご注文内容の控えを送信させていただきますので、<br>
商品、数量、個人情報の内容にお間違いがないか、必ずご確認をお願いいたします。<br>
※本事業は、関西ゴルフ同好会様(会長:大阪支社 山本 智重様)より2022年販売分より、<br>
引継ぎを行ったものであり、POJ本社様業務委託契約の下で運営されております。<br>
------------------------------------------------<br>
◆◆◆【重要】ご注文いただいた皆さまへ◆◆◆<br>
下記、ご確認よろしくお願いいたします。<br>
・お支払いは弊社カレンダーをご利用の方で口座登録をされておられる方は、<br>
自動振替(2022年4月27日(水))にて、<br>
他方ご利用実績なく「ご新規」の方は4月上旬に発行予定のご請求書をもって、<br>
4月20日(水)までにお振込をいただきます。<br>
振替は手数料として220円(税込)を頂戴しております(金額問わず一律)。お振込の方は振込手数料をご負担をください。<br>
注意：2023年販売より口座お引落設定がご注文条件となりますので、ご注意ください。<br>
・本業務はPOJ本社様業務委託契約の下で運営されており、契約書の内容に抵触する用件が見受けられた場合、<br>
本社様にご報告(お名前、お取引内容、事象等)を致します。<br>
・ご注文後、〆切日を超えてのキャンセル、発注数変更は理由の如何に関わらず一切出来ません。<br>
・市場価格より大変安価なご提供の為、POJ/PGA関係者様以外への販売は固く禁じられております。<br>
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

合計{{$countall}}セット<br>

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
