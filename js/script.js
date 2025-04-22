document.addEventListener("DOMContentLoaded", function () {

  new WOW().init();

  const swiper = new Swiper('#section-customers__swiper', {
    slidesPerView: 2,
    loopAdditionalSlides: 5,
    spaceBetween: 63,
    loop: true,
    autoplay: {
      delay: 1500, // 3秒ごとにスライド
    },
    speed: 1500,

    breakpoints: {
      958: {
        slidesPerView: 5,
        spaceBetween: 80,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 71.5,
      },
    }
  });

  const swiper2 = new Swiper('#section-casestudy__swiper', {
    loop: true,
    loopAdditionalSlides: 2,
    speed: 300,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      850: {
        slidesPerView: 'auto',
        slidesPerGroup: 2,
        centeredSlides: false,
      },
      768: {
        slidesPerView: 1.75,
        spaceBetween: 30,
        centeredSlides: true,
      },
      429: {
        slidesPerView: 1.25,
        spaceBetween:15,
        centeredSlides: true,
      }
    }
  });

  // faqアコーディオン
  const questions = document.querySelectorAll('.section-faq__question');

  for (const q of questions) {
    q.addEventListener('click', function () {
      this.classList.toggle('active');
    });
  }

  //バーガーメニュー
  const burger = document.querySelector('.burgerButton');
  const mobileMenu = document.querySelector('.mobileMenu');

  burger.addEventListener('click', function () {
    this.classList.toggle('open');
    console.log ('clicked');

    if (this.classList.contains('open')) {
      mobileMenu.classList.add('active');
      this.setAttribute('aria-expanded', true);
      mobileMenu.setAttribute('aria-hidden', false);
      this.setAttribute('aria-label', 'メニューを閉じる');
    } else {
      mobileMenu.classList.remove('active');
      this.setAttribute('aria-expanded', false);
      mobileMenu.setAttribute('aria-hidden', true);
      this.setAttribute('aria-label', 'メニューを開く');
    }
  });

  const mobileMenuItems = document.querySelectorAll('.mobileMenu__listItem');

  for (const MobileMenuItem of mobileMenuItems) {
    MobileMenuItem.addEventListener('click', function () {
      mobileMenu.classList.remove('active');
      burger.classList.remove('open');
    })
  }

  // フォーム
  const forms = document.querySelectorAll('.form');
  forms.forEach((form)=>{
    const inputs = form.querySelectorAll('input');
    const submitButton = form.querySelector('button');
    const inputFilledCheck = [];

    function checkInputs(){
      let inputCheck = true;

      inputs.forEach((input)=>{
        if(input.value.trim() === ''){
          inputCheck = false;
        }
      })  
      submitButton.disabled = !inputCheck;
    }

    inputs.forEach((input)=>{
      input.addEventListener('input',checkInputs);

      // リダイレクト時に全フィールド埋められている場合はボタン有効化
      if(input.type !== 'hidden'){
        if(input.value.trim() == ""){
          inputFilledCheck.push(false);
        }else{
          inputFilledCheck.push(true);
        }
      }
    });

    if(!inputFilledCheck.includes(false)){
      submitButton.disabled = false;
    }
  });

});