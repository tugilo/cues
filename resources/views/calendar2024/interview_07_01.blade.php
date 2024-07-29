@extends('layouts.calendar_page')
@section('title', 'Vol.7 神山 英一様＜名古屋中央支社＞(1)｜私と、保全活動')

@section('content')

<article class="main-content">
  <header class="main-content-header d-none">
    <div class="container">
      <h2><img class="img-fluid" src="/assets/images/special-interview.png" alt="Special interview"></h2>
    </div> <!-- .container -->
  </header>
  <div class="breadcrumbs">
    <div class="container">
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="ホーム" href="/calendar" class="home">
              <i class="fas fa-home"></i>
              <span property="name">ホーム</span>
          </a><meta property="position" content="1">
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <a property="item" typeof="WebPage" title="私と、保全活動" href="/calendar/interview" class="taxonomy category">
              <span property="name">私と、保全活動</span>
          </a>
      </span>
      <i class="fas fa-angle-right"></i>
      <span property="itemListElement" typeof="ListItem">
          <span property="name" class="post post-post current-item">Vol.7 神山 英一様＜名古屋中央支社＞(1)</span>
          <meta property="url" content="/calendar/interview/detail?vol=07_01"><meta property="position" content="3">
      </span>

    </div> <!-- .container -->
  </div>

  <div class="main-content-body">
    <div class="container">

      <!-- s:interview-box -->
      <section class="interview-header">
        <div class="row row-cols-1 row-cols-lg-2 no-gutters">
          <div class="col">
            <div class="card h-100 border-0">
              <img class="img-fluid" src="/images/interview/vol07_mainimg.jpg" alt="Special interview">
            </div>
          </div>
          <div class="col">
            <div class="card h-100 border-0">
              <div class="card-body catchcopy">
                <img class="img-fluid" src="/images/interview/vol07_catchcopy.png" alt="Special interview">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- n:interview-box -->

      <!-- s:interview-box -->
      <section class="interview-box">
        <h3>―― 神山さんが普段取り組んでいらっしゃる保全活動について教えていただけますか？</h3>

        <p><span class="text-blue">神山：</span>保全活動の中心は、年に4回、「英ちゃんTimes」という新聞を作ってお客様に送っています。新聞の内容は、その時々の金融・経済の動向や年金などの制度改正といった情報提供のページに加えて、僕自身のプライベートの話題を写真も交えつつ読み物にして掲載しています。例えばゴルフの写真や仕事中の写真、転んで骨折した時のＸ線写真とか(苦笑)。そして3歳になる孫の写真など、自己開示を意識して作っています。<br>実は、この「英ちゃんTimes」の発行には、専門の制作会社にお手伝いしてもらっています。紙面のメインとなる金融・経済の動向などに関する記事については、制作会社さんにお客様の将来に影響があるかもしれない専門的なトピックスを選んでもらっています。お客様によっては難しいと感じる事もある金融・経済の話題が中心となるので、最後にはリラックスしていただけるように僕のページはお客様の事をいろいろと想像しながら書くようにしています。<br>僕のプライベートを伝える紙面を作る時に心掛けているのは、文字情報だけではなくて、例えば写真ごとに話題をまとめるなど、一目で伝えたい事がわかるように工夫しています。僕が仮に新聞を受け取る顧客なら、その方が読みやすいし、親近感が湧くと思うからです。他には、例えば新型コロナに感染された場合、「入院しなくても自宅療養やホテル療養でも給付金が出ます。」といったご案内や、「会社が顧客満足度で１位になりました。」とか、年に4回それぞれのタイミングでタイムリーな話題も併せて掲載するようにしています。実際、「前半の経済記事はなかなか難しいけど、最後の神山さんのページだけは毎回読んでいるよ！」というお客様の声を頂いたりします。それでいいんです。毎回、とても好評ですよ。</p>

        <p><span class="text-blue">聞き手：</span>神山さんはかなり長いキャリアをお持ちですので、お客様も同世代の方や年配の方も増えていらっしゃると思います。そうするとご家族やお孫さんの話題などは親近感につながりますね。</p>

        <p><span class="text-blue">神山：</span>そうですね。実は僕はもう64歳でして、今年65歳になります。いわゆる定年が数年前にあったわけですが、その時に、「2000件を超えるお客様をこれからどうやって保全したらいいのか？」という事を考えました。日頃身近な付き合いのあるドクターのお客様などは頻繁に接点があるので良いのですが、そうではないお客様も多くいらっしゃったわけです。これは申し訳ないな…と思うようになり、年4回新聞を作ることにしました。そして年末には、利用させていただいているカレンダーと一緒にお送りしています。これが私の保全活動のメインです。</p>
      </section>
      <!-- n:interview-box -->

      <!-- s:interview-box -->
      <section class="interview-box">
        <h3>―― 長いキャリアの中で、保全に関する具体的な取り組みは年々変化があったのでしょうか。その辺のお話をお聞かせください。</h3>

        <p><span class="text-blue">神山：</span>入社の時からずっと、毎月バースデーカードを10年間お送りしていました。10年でちょうどエグゼになったのですが、正直言うと書く事が一緒になってしまってて、「これ愛がないな…」とか、前まではもっと身近に感じていただけるようなコメントを書いていたりしていたのですが、「これはちょっと限界だな。」と。毎月50～60枚くらい書いていましたからね。その時47歳ですから、「これ60歳まで出来るのかな？」と思って、「長いこと続かないものはやめよう。」という事でバースデーカードを送るのをやめてしまったのです。僕はどうもそういうマメさがなくて…。それで、「バースデーカードをやめるなら、代わりに何かしなきゃ。」と思っていました。</p>

        <p><span class="text-blue">聞き手：</span>バースデーカードの他に、年賀状や暑中見舞などはお送りになっていらっしゃいましたか？</p>

        <p><span class="text-blue">神山：</span>年賀状と暑中見舞いは引き続き全世帯に送っていました。しかし、新聞を始めてからはやめました。僕らは事業主のようなところがあるので、保全の方法にも効果を求めたい。年賀状や暑中見舞いは、僕にとって何か代わり映えしない取り組みに思えてきたからです。他のライフプランナー(以降LP)の皆さんはもっと工夫されているのかもしれませんが、僕はなかなか工夫することが出来ない(苦笑)。代わりに新聞の最後の部分に年賀のご挨拶とか時候の挨拶を書くようにして、年賀状などをお送りするのはやめました。長い間、バースデーカードも年賀状も暑中見舞いも書いていましたが、60歳の定年を機に、新聞を送る事で代えさせていただいたという事ですね。</p>

        <p><span class="text-blue">聞き手：</span>今まで送ってこられた年賀状などをおやめになって、現在はニュースレターと私どものカレンダーの２つを定期的にお客様へお届けになっているという事ですね？</p>

        <p><span class="text-blue">神山：</span>はい。新聞つまりニュースレターと、年末には御社のカレンダー。現在はその2つです。ただ、バースデーカードを長くお送りしてきたお客様からは、「最近届かないね？」とか、奥様から「誕生日を覚えてくれていたのは神山さんだけなのに…」というお声も一部ありました。でも、それは仕方ない。出来ないので…。<br>しかし、新聞には僕自身のプライベートを結構載せてあるので、新聞を出すようになってからは、「神山さん、骨折大丈夫でしたか？」とか、そんなお客様からのリアクションが増えました。実は僕、最近骨折を2回ぐらいしているんですよ(苦笑)。ゴルフでクリーク(川)に落ちてしまって。複雑骨折で6ヶ月くらい手に包帯を巻いてなかなか大変だったのですが、それも写真と一緒に新聞に載せたわけです。そうしたらあるお客様は、その２年位後だったか、「神山さん骨折大丈夫でしたか？」と。</p>

        <img class="img-fluid mx-auto d-block float-lg-left move-lg-left-6 mb-4 mb-lg-2" src="/images/interview/vol07_img01.jpg" alt="Special interview">
        <p><span class="text-blue">聞き手：</span>2年後にですか!?</p>

        <p><span class="text-blue">神山：</span>そうです(笑)。「〇〇さん、それ２年位前の事ですよ。」と言ったら、「あ、そうですか！」と。お客様は印象に残っているのですね。それで、私と話をする機会に思い出されたのかと。他には、僕、無呼吸症候群の検査、シーパップをやっているのですが、検査をする時に鼻に太い管の付いたヘッドギアみたいな被り物をして、ベッドに横たわって脈拍を測定したり、一連の検査を泊りがけでやりました。その写真を新聞に載せると、僕の体中いっぱいコードがつながっているので、多くの方から、「神山さん、大丈夫でしたか？」と。僕は「いや、ただの検査です。ご心配ありがとうございます。」というふうにお返事するのですが、お客様が僕の事を以前より身近に感じていただいているのを実感しています。他には、「お孫さんかわいいね！」といったリアクションも多い。<br>保全として大切なのは、お客様からお申し出のあった依頼事項や、ご契約のお手続きを滞りなく対応するのは当然ですが、お客様が気軽に僕へ声をかけていただける「距離感」を維持するのも、保全活動として大変重要だと思います。その点、定期的にお送りする通信物やお届けものは自己開示を継続する事が出来るので、適切な距離感を維持するのにとても役立っていると思います。</p>

        <p><span class="text-blue">聞き手：</span>神山さんご自身の身近なお話は、そのままお客様にとって共通の話題になると言いますか、自然と親近感がわいて距離感が縮む事になるのですね</p>

        <p><span class="text-blue">神山：</span>はい。お客様と距離感を適切に縮めていく。僕らLPにとって、やはりこれが一番大事じゃないかと思っています。</p>

        <p><span class="text-blue">聞き手：</span>通信物をお送りする頻度としては、春、夏、秋、そして年末年始を含めて４回ぐらいと思われますか？</p>

        <p><span class="text-blue">神山：</span>そうですね。４回ぐらいがちょうど良いです。というか、4回やった方が良い。でも、書く事が無くなる事もあるので、日頃の動きとして大事な事は、「写真をいろいろなところで撮っておく」。いくら僕の近況でも、文字ばかり書いてしまうとお客様は飽きてしまいますし、僕も大変です。写真をなるべく多く載せて、１つの話題に1タイトル、１つの写真がドンとあると、お客様には判りやすいと思うのです。パッと見て、視覚で直ぐ判るので、楽しくてその後の文字も直ぐに読めてしまう、というのがお客様から寄せられる感想ですね。やっぱり目に訴える方がお客様には入りやすいと思います。<br>あと、社内表彰をいただいたり、ゴルフで入賞したという話題の他に、時には親近感を感じていただくように、孫と遊んでいる写真や転んで骨折した写真など、ちょっと格好悪い話が丁度良く、お客様は等身大の僕をみてくれていらっしゃると思います。</p>

        <p><span class="text-blue">聞き手：</span>そのように意図されていらっしゃるのですね？</p>

        <p><span class="text-blue">神山：</span>はい、そうです。</p>
      </section>

      <!-- s:interview-pager -->
      <section class="interview-pager">
        <ul class="nav justify-content-end">
          <li class="nav-item">
            <a class="nav-link active" href="/calendar/interview/detail?vol=07_01">1</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/calendar/interview/detail?vol=07_02">2</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/calendar/interview/detail?vol=07_03">3</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/calendar/interview/detail?vol=07_02">次へ</a>
          </li>
        </ul>
      </section>
      <!-- n:interview-pager -->

      <hr class="border-division">

      <!-- s:interview-box -->
      <section class="interview-box">
        <h3>「私と、保全活動」　バックナンバー</h3>

        <h4>2019年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=01_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol01_index.jpg" alt="Vol.1 鎌谷 雅彦様＜神戸第二支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.1<br>鎌谷 雅彦様＜神戸第二支社＞</h5>
                    <p class="card-text">保全というのは、お客様が契約にサインされた瞬間から、「何でも相談できる」という安心感を、常にお客様に得ていただくことです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=02_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol02_index.jpg" alt="Vol.2 中村 将幸様＜大阪第五支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.2<br>中村 将幸様＜大阪第五支社＞</h5>
                    <p class="card-text">私がお客様のファンです<br>「お客様のことを深く知りたい」<br>保全のコツはこれだけです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <h4>2020年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=03_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid border" src="/images/interview/vol03_index.jpg" alt="Vol.3 田内 弘治様＜神戸支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.3<br>田内 弘治様＜神戸支社＞</h5>
                    <p class="card-text">お客様の所へ「手ぶらで行く」感覚でお話を聞く。基本的にはお会いして程よい「距離感を保つ」ことが大切で、売ることは二の次みたいな。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=04_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol04_index.jpg" alt="Vol.4 岡崎 まさみ様＜岡山中央支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.4<br>岡崎 まさみ様＜岡山中央支社＞</h5>
                    <p class="card-text">で良いと思える距離感で、大事な時に思い出しあえる存在。「お客様の親戚ぐらいになりたい」というイメージです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <h4>2021年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=05_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol05_index.jpg" alt="Vol.5 長曽我部 勝也様＜広島第二支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.5<br>長曽我部 勝也様＜広島第二支社＞</h5>
                    <p class="card-text">LPをずっと続けていく中で、どうすれば良いかなと色々考え、「こうありたい」というイメージから今の流れになっていった感じです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=06_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol06_index.jpg" alt="Vol.6 井芹 直美様＜熊本支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.6<br>井芹 直美様＜熊本支社＞</h5>
                    <p class="card-text">日々の活動の灯りがどんどん広がっていって大きな灯りになっていく。ご紹介が広がって私たちの保障にご加入いただくと言う、それが保全です。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>

        <h4>2022年</h4>
        <div class="row row-cols-1 row-cols-lg-2">
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=07_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol07_index.jpg" alt="Vol.7 神山 英一様＜名古屋中央支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.7<br>神山 英一様＜名古屋中央支社＞</h5>
                    <p class="card-text">お客さんと距離感を適切に縮めていく。僕らライフプランナーにとって、やはりこれが一番大事じゃないかと思っています</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col mb-4">
            <a href="/calendar/interview/detail?vol=08_01" class="card h-100 interview-card">
              <div class="row no-gutters">
                <div class="col-5">
                  <img class="img-fluid" src="/images/interview/vol08_index.jpg" alt="Vol.8 金指 佐江子様＜汐留支社＞">
                </div>
                <div class="col-7">
                  <div class="card-body">
                    <h5 class="card-title">Vol.8<br>金指 佐江子様＜汐留支社＞</h5>
                    <p class="card-text">保全活動らしいことはあまりできていないと思います。だから、せめて年賀状とカレンダーだけは送らないと、という感じです。</p>
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
       <p class="text-right small">※職位、略歴は取材時の情報です</p>
      </section>
      <!-- n:interview-box -->

    </div> <!-- .container -->
  </div>
</article> <!-- .main-content -->

      @stop
      @section('css')
      @stop

      @section('js')
      <script>

      </script>

      @stop
