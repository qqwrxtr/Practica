const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,
    slidesPerGroup: 1,
    autoplay: {
        delay: 3000,
      },
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
  });

    function redirectToCategory(categoryId) {
        window.location.href = 'category.php?id=' + categoryId
    }
