<?php
session_start();
if (!isset($_SESSION['csrf_token'])) {
  $_SESSION['token'] = bin2hex(random_bytes(32));
}

$title='CareSend | 有資格介護人材が集まる介護派遣サービス';
$description = '介護派遣サービスなら、業界最安値水準の成約手数料12%で利用できるCareSend。認定介護福祉士など高スキル人材が揃っており、最短即日の派遣実績もあり！';

require_once 'header.php';
?>

<main>
<div id="mv" class="mv">
  <div class="mv__contentWrap">
    <div class="mv__texts">
      <span class="mv__subHeading">＼最短一週間で人手不足が解消できる!!／</span>
      <h2 class="mv__heading">CareSendの介護派遣で<br>介護士が、すぐ見つかる</h2>
      <p class="mv__introText">「caresend」は、<br class="only-sp">高品質な介護派遣サービスを提供する<br>
        新しいプラットフォームです。</p>
      <ul class="mv__list">
        <li class="mv__listItem">
          登録者
          <span class="text-large">58,000人</span>
        </li>
        <li class="mv__listItem">
          即日派遣の
          <span class="text-large">実績多数</span>
        </li>
        <li class="mv__listItem">
          正社員雇用
          <span class="text-large">693人</span>
        </li>
      </ul>
      <div class="mv__listNoteBox">
        <small class="mv__listNote">
          ※1 CareSend開始2023年4月時と2024年4月時の比較<br>
          ※2 CareSend2023年度一年間の実績
        </small>
        <img class="mv__image" src="images/job-listing.png" alt="">
      </div>
    </div>
    <form id="form1" action="process-form.php" class="mv__form form" method="POST">
      <p class="form__lead">派遣事例が分かる資料をダウンロード!!</p>
      <div class="form__twoInputGroup">
        <div class="form__inputGroup w-50">
          <label for="fld_lastName" class="form__label">姓</label>
          <input type="text" name="fld_lastName" id="fld_lastName" class="form__input" value="<?= $_SESSION['fld_lastName'] ?? '' ?>" autocomplete="family-name">
        </div>
        <div class="form__inputGroup w-50">
          <label for="fld_firstName" class="form__label">名</label>
          <input type="text" name="fld_firstName" id="fld_firstName" class="form__input" value="<?= $_SESSION['fld_firstName'] ?? '' ?>" autocomplete="given-name">
        </div>
      </div>
      <div class="form__inputGroup">
        <label for="fld_company" class="form__label">会社名</label>
        <input type="text" name="fld_company" id="fld_company" class="form__input" value="<?= $_SESSION['fld_company'] ?? '' ?>" autocomplete="organization">
      </div>
      <div class="form__inputGroup">
        <label for="fld_email" class="form__label">メールアドレス</label>
        <input type="email" name="fld_email" id="fld_email" class="form__input" value="<?= $_SESSION['fld_email'] ?? '' ?>" autocomplete="email">
      </div>
      <div class="form__inputGroup">
        <label for="fld_tel" class="form__label">電話番号</label>
        <input type="tel" name="fld_tel" id="fld_tel" class="form__input" value="<?= $_SESSION['fld_tel'] ?? '' ?>" autocomplete="tel">
      </div>
      <p class="form__privacyText">このフォームから送信された情報は、 プライバシーポリシーに基づいて処理されます。</p>
      <input type="hidden" name="token" value="<?=$_SESSION['token'] ?>">
      <input type="hidden" name="fld_sectionID" value="mv">
      <div class="form__btn">
        <button type="submit" class="btn" disabled>資料ダウンロード（無料）</button>
      </div>
    </form>
  </div>
</div>
<!-- /.mv -->
<section class="section section-customers">
  <div class="inner  wow fadeIn">
    <h2 class="headingLevel2 wow fadeIn">多くのお客様に選ばれ続けています</h2>
    <div class="section-customers__introImages wow fadeIn">
      <p class="section-customers__introImage">
        <img src="images/case-study.png" alt="導入企業数 累計200社突破">
      </p>
      <p class="section-customers__introImage">
        <img src="images/case-study2.png" alt="継続率99%以上">
      </p>
    </div>
    <!-- loopモードを利用するのに必要なスライド枚数が、スライド枚数+slidePerGroupとの為、スライドを複製 -->
    <div id="section-customers__swiper" class="section-customers__swiper wow fadeIn">
      <div class="section-customers__swiperWrapper swiper-wrapper">
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo2.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo3.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo4.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo5.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo2.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo3.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo4.png" alt="">
        </p>
        <p class="section-customers__swiperSlide swiper-slide">
          <img src="images/customer-logo5.png" alt="">
        </p>
      </div>
    </div>
  </div>
</section>
<section class="section section-about wow fadeIn" id="section-about">
  <div class="inne">
    <h2 class="headingLevel2 wow fadeIn">CareSendについて</h2>
    <p class="section__aboutLead wow fadeIn">
      CareSendは、<br class="only-sp">人材不足に悩む介護施設を<br>
      認定介護福祉士などの<br class="only-sp"><span class="text-highlight">高スキル介護人材</span>の派遣で<br>
      支えるサービスです。
    </p>
    <div class="section-about__imgBg wow fadeIn">
      <picture>
        <source class="section-about__img" srcset="images/about-sp.png" media="(max-width: 767px)">
        <img class="section-about__img" src="images/about.png" alt="派遣依頼のご相談後、登録者50,000人越えのデータベースから面談の上、派遣。紹介予定派遣の場合、マッチすれば正社員雇用も可能。">
      </picture>
    </div>
  </div>
</section>
<section class="section section-features" id="section-features">
  <div class="inner">
    <h2 class="headingLevel2 wow fadeIn">CareSendの特徴</h2>
    <ul class="section-features__cardList">
      <li class="cardBordered section-features__cardListItem  wow fadeIn">
        <img src="images/feature01.png" alt="" class="cardBordered__itemImg">
        <h3 class="cardBordered__itemTitle">登録者の内5割が有資格者</h3>
        <p class="cardBordered__itemText">
          「CareSend」の登録者の半数以上は、介護福祉士や看護師などの専門資格を保有しています。高い資格基準を満たすことで、利用者に信頼性の高いサービスを提供できています。</p>
      </li>
      <li class="cardBordered section-features__cardListItem  wow fadeIn">
        <img src="images/feature02.png" alt="" class="cardBordered__itemImg">
        <h3 class="cardBordered__itemTitle">登録型派遣と紹介予定派遣<br class="only-sp-to-tab">
          の2種に対応</h3>
        <p class="cardBordered__itemText">登録型派遣では、即戦力人材を最短即日で派遣することが可能です。また紹介予定派遣にも対応しているので、正社員雇用を考えている施設にもお役立ていただけます。
        </p>
      </li>
      <li class="cardBordered section-features__cardListItem  wow fadeIn">
        <img src="images/feature03.png" alt="" class="cardBordered__itemImg">
        <h3 class="cardBordered__itemTitle">派遣介護士の実績を<br class="only-sp">
          閲覧可能</h3>
        <p class="cardBordered__itemText">
          「CareSend」の登録者の過去の派遣実績は、お問い合わせ頂いたユーザー限定で閲覧することができます。利用施設側のコメントなどを参照することが可能です。また、気になる介護士がいれば直接アプローチ頂くことも可能です。
        </p>
      </li>
      <li class="cardBordered section-features__cardListItem  wow fadeIn">
        <img src="images/feature04.png" alt="" class="cardBordered__itemImg">
        <h3 class="cardBordered__itemTitle">3社面談を実施し<br class="only-sp-to-tab">
          お互い納得の上派遣</h3>
        <p class="cardBordered__itemText">「CareSend」でマッチングした場合、弊社カウンセラーを交えた三者で面談を行い、ミスマッチが起こらないようにします。これは即日派遣の場合も同様です。
        </p>
      </li>
    </ul>
  </div>
</section>

<div class="section-button-highlight wow fadeIn">
  <p class="section-button-highlight__text">登録介護士を<br class="only-sp">
    無料でご覧いただけます</p>
  <a href="#section-form" class="section-button-highlight__btn btn btn--reverse">
    無料で資料ダウンロード
  </a>
</div>

<section class="section section-casestudy" id="section-casestudy">
  <div class="inner">
    <h2 class="headingLevel2">導入事例</h2>
    <div class="section-casestudy__swiperGapToInner wow fadeIn">
      <div id="section-casestudy__swiper" class="section-casestudy__swiper">
        <ul class="section-casestudy__cardList swiper-wrapper">
          <li class="section-casestudy__cardListItem swiper-slide">
            <div class="cardShadowed">
              <h3 class="headingLevel3">
                慢性的な介護士不足が解決し、<br class="only-sp-to-tab">
                <span class="main-color">優秀な人材</span>が確保できるように！
              </h3>
              <p class="cardShadowedText">
                「CareSend」の登場で、慢性的な介護士不足に頭を抱える問題が解消しました。優秀な介護スタッフが手軽に利用できるため、施設の運営が安定し、利用者のケアに集中できるようになりました。登録型派遣と紹介予定派遣の両方が選択肢として用意され、利用者のニーズに応えることができるのが素晴らしいです。<br>
                またプラットフォーム上の登録介護士は、私達が普通に採用していたら絶対に巡り会えなかったであろうリーダー人材にも巡り会えましたので、とても満足しています。
              </p>
              <img src="images/case01.png" alt="まるもケアセンター　日本の介護にまっすぐに" class="cardShadowedImg">
            </div>
          </li>
          <li class="section-casestudy__cardListItem swiper-slide">
            <div class="cardShadowed">
              <h3 class="headingLevel3">
                急な欠員補充から<span class="main-color">正社員雇用</span>に繋がり大変助かっています。
              </h3>
              <p class="cardShadowedText">
                「CareSend」に急なニーズでも対応可能な介護士さんが登録されていることは、本当に心強かったです。その中でも、派遣していただいた介護士さんはとても素晴らしく、紹介予定派遣を経て正社員として採用することになりました。当該介護士の存在は施設全体にとって大きな価値を持っています。<br>
                今後も積極的に正社員登用を考えておりますので、良い介護士に恵まれることを祈りつつ、利用をさせていただきます。
              </p>
              <img src="images/case02.png" alt="からびな介護サービス 日本の介護にまっすぐに" class="cardShadowedImg">
            </div>
          </li>
          <li class="section-casestudy__cardListItem swiper-slide">
            <div class="cardShadowed">
              <h3 class="headingLevel3">
                <span class="main-color">ケアの質が向上！</span>CareSendで利用者満足度も上昇！
              </h3>
              <p class="cardShadowedText">
                当施設では、長らく介護士不足に悩まされてきました。ある日、急な欠員が発生し、困り果てていた時に、CareSendを利用することにしました。登録型派遣で急遽派遣してもらった介護士は、驚くほどのプロ意識と思いやりを持ち、施設内での業務をスムーズにこなしてくれました。その後、彼女は紹介予定派遣を経て正式に採用され、施設の一員として活躍しています。彼女の尽力により、施設の雰囲気は一変し、利用者の満足度も大幅に向上しました。
              </p>
              <img src="images/case03.png" alt="介護にまっすぐ　やすらぎケアハウス" class="cardShadowedImg">
            </div>
          </li>
          <li class="section-casestudy__cardListItem swiper-slide">
            <div class="cardShadowed">
              <h3 class="headingLevel3">
                <span class="main-color">派遣介護士の質</span>が高く、とても驚きました。
              </h3>
              <p class="cardShadowedText">
                私たちの施設は、長年にわたり正社員だけで運営してきました。派遣の利用は考えたこともありませんでしたが、ある日、急な人手不足に悩まされ、"CareSend"を試してみることにしました。派遣された介護士は、私たちの期待をはるかに超える素晴らしい仕事ぶりでした。プロ意識や親切さに感動し、施設内の雰囲気が一変しました。
                私たちは派遣介護士の活用に新たな可能性を見出し、今後は更にその先の「採用」につなげていきたく思っています。
              </p>
              <img src="images/case04.png" alt="Toridori ハウスビル株式会社" class="cardShadowedImg">
            </div>
          </li>
        </ul>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
  </div>
</section>
<section class="section section-price" id="section-price">
  <div class="inner">
    <div class="section-price__contentWrapper">
      <h2 class="headingLevel2 wow fadeIn">料金は成約手数料のみ!!</h2>
      <dl class="section-price__list wow fadeIn">
        <div class="section-price__listItem">
          <dt class="section-price__listItemTitle">初期費用</dt>
          <dd class="section-price__listItemText"><span class="text-highlight">0</span>円</dd>
        </div>
        <div class="section-price__listItem">
          <dt class="section-price__listItemTitle">月額費用</dt>
          <dd class="section-price__listItemText"><span class="text-highlight">0</span>円</dd>
        </div>
        <div class="section-price__listItem">
          <dt class="section-price__listItemTitle">成約手数料</dt>
          <dd class="section-price__listItemText"><span class="text-highlight">12</span>%</dd>
        </div>
      </dl>
      <small class="section-price__listNote wow fadeIn">
        ・所属は弊社になるため、派遣時に支払われる介護士の給与は弊社が負担し、負担分を別途頂戴します。<br>
        ・成約手数料は、介護士の派遣が決まった時点での派遣費用に0.12を乗算したものを足した金額になります。<br>
        例：半年間の派遣の場合、月額30万*6 + 180万*0.12 = 201.6万円
      </small>
    </div>
  </div>
</section>
<section class="section section-faq wow fadeIn" id="section-faq">
  <div class="inner">
    <h2 class="headingLevel2 wow fadeIn">よくある質問</h2>
    <div class="section-faq__faqList">
      <!-- 質問 -->
      <details class="section-faq__faqGroup">
        <summary class="section-faq__question js-faqSummary wow fadeIn">
          <div class="icon-wrap"></div>
          登録介護士はどこから確認できますか？
        </summary>
        <div class="section-faq__answer js-faqAnswer">
          <p class="section-faq__answerInner">CareSendのウェブサイトやアプリを通じて確認することができます。</p>
        </div>
      </details>
      <!-- 質問 -->
      <details class="section-faq__faqGroup">
        <summary class="section-faq__question js-faqSummary wow fadeIn">
          <div class="icon-wrap"></div>
          派遣可能エリアはどのようになっていますか
        </summary>
        <div class="section-faq__answer js-faqAnswer">
          <p class="section-faq__answerInner">現在、全国の主要都市や地方都市を含む、多くの都道府県でサービスが展開されています。ただし、派遣可能なエリアは随時拡大されているため、最新の情報は資料請求してご確認ください。</p>
        </div>
      </details>
      <!-- 質問 -->
      <details class="section-faq__faqGroup">
        <summary class="section-faq__question js-faqSummary wow fadeIn">
          <div class="icon-wrap"></div>
          登録介護士の資格取得などの支援は行っていますか
        </summary>
        <div class="section-faq__answer js-faqAnswer">
          <div class="section-faq__answerInner">
            はい、CareSendでは登録している介護士の資格取得などの支援も行っています。<br>
            具体的には、以下のような支援を提供しています。<br><br>
            <ol class="section-faq__numberedList">
              <li>カウンセリングと情報提供：介護士が資格取得に興味を持っている場合、"CareSend"のカウンセラーが相談に乗り、必要な情報を提供します。
              </li>
              <li>学習サポート：介護士が資格試験を受ける準備をする際には、学習支援や勉強のアドバイスを提供します。必要に応じて、関連する教材や学習リソースの提供も行います。
              </li>
              <li>資格取得補助：介護士が資格試験に合格するための費用や手続きに関する支援を提供します。場合によっては、一部の費用を補助する場合もあります。
              </li>
              <li>研修プログラム："CareSend"が提供する研修プログラムに参加することで、介護士は専門知識やスキルを向上させることができます。これにより、彼らのキャリアの成長を支援します。
              </li>
            </ol>
            <br>
            CareSendは、介護士がより充実したキャリアを築くための支援を提供し、彼らの専門性と満足度を向上させることに取り組んでいます。
          </div>
        </div>
      </details>
      <!-- 質問 -->
      <details class="section-faq__faqGroup">
        <summary class="section-faq__question js-faqSummary wow fadeIn">
          <div class="icon-wrap"></div>
          派遣の登録介護士を、派遣期間終了後に直接雇用することは可能ですか？
        </summary>
        <div class="section-faq__answer js-faqAnswer">
          <p class="section-faq__answerInner">
            はい、派遣期間終了後に直接雇用することは可能です。ただし、一般派遣と紹介予定派遣の場合には異なる手続きがあります。<br>
            一般派遣の場合、介護士は派遣会社の従業員として派遣されます。派遣期間終了後に直接雇用する場合には、派遣会社と介護施設間で新たな雇用契約を締結する必要があります。この場合、派遣会社に対して雇用の手数料や補償金が発生することがあります。<br>
            一方、紹介予定派遣の場合、介護士は派遣先で一定期間勤務した後、雇用主（派遣先の介護施設）と直接雇用契約を結ぶことができます。派遣期間終了後に直接雇用する場合、通常は派遣会社に対して雇用の手数料が支払われることがありますが、派遣期間中に雇用契約の条件が明確にされているため、一般派遣よりも手続きがスムーズです。<br>
            要するに、一般派遣の場合は新たな雇用契約を派遣会社と介護施設間で締結する必要がありますが、紹介予定派遣の場合は介護施設と介護士との直接雇用契約に移行することができます。
          </p>
        </div>
      </details>
      <!-- 質問 -->
      <details class="section-faq__faqGroup">
        <summary class="section-faq__question js-faqSummary wow fadeIn">
          <div class="icon-wrap"></div>
          CareSendはどのように介護士を選んでいますか
        </summary>
        <div class="section-faq__answer js-faqAnswer">
          <div class="section-faq__answerInner">
            CareSendでは、介護士を選ぶ際に以下の手順を通じて厳密な選考プロセスを行っています<br><br>
            <ol class="section-faq__numberedList">
              <li>登録プロセス：介護士は、"CareSend"のウェブサイトやアプリを通じて登録申請を行います。この際に、必要な資格や経験、専門知識などの情報が提供されます。
              </li>
              <li>書類審査：登録申請が受け付けられた後、"CareSend"のチームが提出された書類や情報を審査し、資格や経験の適格性を確認します。</li>
              <li>面接：審査に合格した介護士は、面接の機会を得ます。面接では、介護の専門知識やコミュニケーション能力、応対態度などが評価されます。</li>
              <li>スキル評価：適格な介護士は、必要に応じて実地でのスキル評価を受けることがあります。これにより、介護スキルやケアの品質を確認します。</li>
              <li>登録完了：選考プロセスを通過した介護士は、"CareSend"の登録スタッフとして承認されます。利用者のニーズに応じて、派遣や紹介予定派遣の依頼が介護士に送られます。</li>
            </ol>
            <br>
            このような厳密な選考プロセスを通じて、"CareSend"は高品質な介護スタッフを提供し、利用者の安心と満足度を確保しています。
          </div>
        </div>
      </details>
    </div>
  </div>
</section>
<section id="section-form" class="section section-form">
  <div class="inner">
    <h2 class="headingLevel2  wow fadeIn">介護派遣に関する資料を<br class="only-sp">無料でダウンロード</h2>
    <div class="section-form__contentWrapper wow fadeIn">
      <div class="section-form__formDescription wow fadeIn">
        <p class="section-form__text">CareSendに興味をお持ち頂き、ありがとうございます。<br>
          本フォームを送信頂きますと、サービス資料を送付させていただきます。
        </p>
        <img src="images/whitepaper.png" class="section-form__image wow fadeIn" alt="サービス資料の一部の画像。業務改善事例や介護派遣導入事例が掲載。">
      </div>
      <form id="form2" action="process-form.php" class="section-form__form form" method="POST">
        <p class="form__lead">派遣事例が分かる資料をダウンロード!!</p>
        <div class="form__twoInputGroup">
          <div class="form__inputGroup w-50">
            <label for="fld_lastName" class="form__label">姓</label>
            <input type="text" name="fld_lastName" id="fld_lastName" class="form__input" value="<?= $_SESSION['fld_lastName'] ?? '' ?>" autocomplete="family-name">
          </div>
          <div class="form__inputGroup w-50">
            <label for="fld_firstName" class="form__label">名</label>
            <input type="text" name="fld_firstName" id="fld_firstName" class="form__input" value="<?= $_SESSION['fld_firstName'] ?? '' ?>" autocomplete="given-name">
          </div>
        </div>
        <div class="form__inputGroup">
          <label for="fld_company" class="form__label">会社名</label>
          <input type="text" name="fld_company" id="fld_company" class="form__input" value="<?= $_SESSION['fld_company'] ?? '' ?>" autocomplete="organization">
        </div>
        <div class="form__inputGroup">
          <label for="fld_email" class="form__label">メールアドレス</label>
          <input type="email" name="fld_email" id="fld_email" class="form__input" value="<?= $_SESSION['fld_email'] ?? '' ?>" autocomplete="email">
        </div>
        <div class="form__inputGroup">
          <label for="fld_tel" class="form__label">電話番号</label>
          <input type="tel" name="fld_tel" id="fld_tel" class="form__input" value="<?= $_SESSION['fld_tel'] ?? '' ?>" autocomplete="tel">
        </div>
        <p class="form__privacyText">このフォームから送信された情報は、 プライバシーポリシーに基づいて処理されます。</p>
        <input type="hidden" name="token" value="<?=$_SESSION['token'] ?>">
        <input type="hidden" name="fld_sectionID" value="section-form">
        <div class="form__btn">
          <button type="submit" class="btn" disabled>資料ダウンロード（無料）</button>
        </div>
      </form>
    </div>
  </div>
</section>

<?php
  if(isset($_SESSION['errors']) && !empty($_SESSION['errors'])):
    echo '<ul class="form-error-list">';
    foreach($_SESSION['errors'] as $error ):
?>
          <li><?php echo $error; ?></li>
<?php
    endforeach;
    echo '</ul>';

    foreach($_SESSION as $key => $value){
      if($key != 'token'){
        unset($_SESSION[$key]);
      }
    }
  endif;
?>
     
  </main>
  <footer class="footer">
    <div class="footer__logo logo">
      <img src="images/logo.svg" alt="CareSend">
    </div>
    <small>© CaseSend, Inc.</small>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>