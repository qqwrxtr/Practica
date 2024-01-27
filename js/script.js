const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 3,
    slidesPerGroup: 1,
    autoplay: {
        delay: 3000,
      },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
  });


  // const languageSwitch = document.getElementById('lang');

  // if (window.location.href.includes('/en/')) {
  //   languageSwitch.checked = true;
  // }
  
  // languageSwitch.addEventListener('change', function() {
  //   const currentUrl = window.location.href;
  
  //   if (this.checked) {
  //     const newUrl = currentUrl.replace('/ro/', '/en/');
  //     window.location.href = newUrl;
  //   } else {
  //     const newUrl = currentUrl.replace('/en/', '/ro/');
  //     window.location.href = newUrl;
  //   }
  // });

