<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <meta name=”robots” content=”noindex”>
  <meta name="description" content="<?= $description ?>">
  <link rel="icon" href="/images/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="images/touch-icon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="<?php echo $body_class ?:  ''; ?>">
  <header class="header">
    <div class="header__inner">
      <h1 class="header__logo logo">
        <a href="/">
          <img src="images/logo.svg" alt="CareSend | 有資格介護人材が集まる介護派遣サービス">
        </a>
      </h1>
      <nav class="header__nav">
        <ul class="header__navList">
          <li class="header__navListItem"><a class="header__navListLink" href="#section-about">CareSendについて</a></li>
          <li class="header__navListItem"><a class="header__navListLink" href="#section-features">CareSendの特徴</a></li>
          <li class="header__navListItem"><a class="header__navListLink" href="#section-casestudy">導入事例</a></li>
          <li class="header__navListItem"><a class="header__navListLink" href="#section-price">料金</a></li>
          <li class="header__navListItem"><a class="header__navListLink" href="#section-faq">よくある質問</a></li>
        </ul>
      </nav>
    </div>
    <a href="#section-form" class="header__button">
      <span class="header__buttonText">資料請求</span>
    </a>
    <button class="burgerButton" type="button" aria-label="メニューを開く" aria-controls="mobileMenu" aria-expanded="false">
      <span class="burgerButton__burgerBar top"></span>
      <span class="burgerButton__burgerBar middle"></span>
      <span class="burgerButton__burgerBar bottom"></span>
      <span class="burgerButton__text">メニュー</span>
    </button>
  </header>
  <nav id="mobileMenu" class="mobileMenu" aria-hidden="true">
    <ul class="mobileMenu__list">
      <li class="mobileMenu__listItem">
        <a href="#section-features" class="mobileMenu__listLink">CareSendについて</a>
      </li>
      <li class="mobileMenu__listItem">
        <a href="#section-about" class="mobileMenu__listLink">CareSendの特徴</a>
      </li>
      <li class="mobileMenu__listItem">
        <a href="#section-casestudy" class="mobileMenu__listLink">導入事例</a>
      </li>
      <li class="mobileMenu__listItem">
        <a href="#section-price" class="mobileMenu__listLink">料金</a>
      </li>
      <li class="mobileMenu__listItem">
        <a href="#section-faq" class="mobileMenu__listLink">よくある質問</a>
      </li>
      <li class="mobileMenu__listItem">
        <a href="#section-form" class="mobileMenu__listLink mobileMenu__listLink--icon icon-mail">資料請求</a>
      </li>
    </ul>
  </nav>
