document.addEventListener("DOMContentLoaded", function () {

  new WOW().init();

  const swiper = new Swiper('#section-customers__swiper', {
    slidesPerView: 2,
    loopAdditionalSlides: 5,
    spaceBetween: 63,
    loop: true,
    autoplay: {
      delay: 1500,
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

  document.querySelectorAll('.swiper-button-prev, .swiper-button-next').forEach(button => {
    button.addEventListener('keydown', function(e) {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault(); // Spaceのスクロール防止
        button.click();
      }
    });
  });

  //FAQアコーディオンの処理
  const summaries = document.querySelectorAll('.js-faqSummary');

  const openingAnimation = (element) => [
    { height: 0, opacity: 0, },
    { height: `${element.offsetHeight}px`, opacity: 1, }
  ];

  const closingAnimation = (element) => [
    { height: `${element.offsetHeight}px`, opacity: 1, },
    { height: 0, opacity: 0, },
  ];

  const closingAnimationTiming = {
    easing: 'ease-out'
  }

  const openingAnimationTiming = {
    easing: 'ease-out'
  }

  const SPEED = 0.8;

  summaries.forEach((summary) => {
    summary.addEventListener('click', (e) => {
      e.preventDefault();

      const details = e.currentTarget.parentElement;
      const answer = details.querySelector('.js-faqAnswer');
      const height = answer.offsetHeight;

      const duration = Math.max(300, Math.min(680, height / SPEED));

      if (details.open) {
        closingAnimationTiming.duration = duration;

        const closeAnimObj = answer.animate(closingAnimation(answer), closingAnimationTiming);
        closeAnimObj.onfinish = () => {
          details.removeAttribute('open');
        };

      } else {
        details.setAttribute('open', true);

        openingAnimationTiming.duration = duration;
        answer.animate(openingAnimation(answer), openingAnimationTiming);
      }
    });
  });

  //バーガーメニュー
  const burger = document.querySelector('.burgerButton');
  const mobileMenu = document.querySelector('.mobileMenu');

  burger.addEventListener('click', function () {
    this.classList.toggle('open');

    if (this.classList.contains('open')) {
      mobileMenu.classList.add('active');
      this.setAttribute('aria-expanded', true);
      mobileMenu.setAttribute('aria-hidden', false);
      this.setAttribute('aria-label', 'メニューを閉じる');
    } else {
      closeMobileMenu();
    }
  });

  function closeMobileMenu(){
    mobileMenu.classList.remove('active');
    burger.setAttribute('aria-expanded', false);
    mobileMenu.setAttribute('aria-hidden', true);
    burger.setAttribute('aria-label', 'メニューを開く');
    //バーガーが開いてたら閉じる
    burger.classList.contains('open') && burger.classList.remove('open');
  }

    const mediaQueryList = window.matchMedia('(width  > 1024px)');

    mediaQueryList.addEventListener('change', (e)=>{
      if(e.matches && mobileMenu.classList.contains('active')){
       closeMobileMenu();
      }
    });

  const mobileMenuItems = document.querySelectorAll('.mobileMenu__listItem');

  for (const MobileMenuItem of mobileMenuItems) {
    MobileMenuItem.addEventListener('click', function () {
      closeMobileMenu();
    })
  }
 
  // フォーム
  const forms = document.querySelectorAll('.form');
  forms.forEach((form)=>{
    const inputs = form.querySelectorAll('input');
    const submitButton = form.querySelector('button');

    function checkInputs(){
      let inputCheck = true;

      inputs.forEach((input)=>{
        if(input.type !== 'hidden'){
          if(input.value.trim() === ''){
            inputCheck = false;
          }
        }
      })  
      submitButton.disabled = !inputCheck;
    }

    const debounce = (mainFunction, delay) => {
      // Declare a variable called 'timer' to store the timer ID
      let timer;

      // Return an anonymous function that takes in any number of arguments
      return function (...args) {
        // Clear the previous timer to prevent the execution of 'mainFunction'
        clearTimeout(timer);

        // Set a new timer that will execute 'mainFunction' after the specified delay
        timer = setTimeout(() => {
          mainFunction(...args);
        }, delay);
      };
    };

    //debounceバージョンのcheckInputs
    const debouncedCheckInputs = debounce(checkInputs, 300);

    inputs.forEach((input)=>{
      input.addEventListener('input',debouncedCheckInputs);
    });

    //バリデーションエラーでリダイレクト時の為に初期状態でも実行
    checkInputs();
  });
});