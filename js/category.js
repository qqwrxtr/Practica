
    const cartButtons = document.querySelectorAll('.addtocart button');
    cartButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        const productContainer = button.closest('.category_block');
        const product = {
          img: productContainer.querySelector('.img img').getAttribute('src'),
          name: productContainer.querySelector('.name p').textContent,
          price: productContainer.querySelector('.price p').textContent
        };
        
        let cart = JSON.parse(localStorage.getItem('cart')) || [];
        
        cart.push(product);
        
        localStorage.setItem('cart', JSON.stringify(cart));
      });
    });



