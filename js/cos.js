
const cartData = JSON.parse(localStorage.getItem('cart'));

function updateTotalPrice() {
  const cartData = JSON.parse(localStorage.getItem('cart'));
  let totalPrice = 0;

  for (const item of cartData) {
    totalPrice += parseFloat(item.price);
  }

  const finalPriceElement = document.querySelector('.final_price h2');
  finalPriceElement.innerHTML = totalPrice.toFixed(2) + ' MDL';


  if (cartData.length === 0) {

    const errorElement = document.querySelector('.error');
    errorElement.textContent = 'Cosul dumneavoastra este gol';

    const finalizeazaElement = document.getElementById('finalizeaza');
    finalizeazaElement.style.display = 'none';

    const totalPriceElement = document.querySelector('.final_price');
    totalPriceElement.style.display = 'none';
  } else {
    const errorElement = document.querySelector('.error');
    errorElement.textContent = '';

    const finalizeazaElement = document.getElementById('finalizeaza');
    finalizeazaElement.style.display = 'block';

    const totalPriceElement = document.querySelector('.final_price');
    totalPriceElement.style.display = 'block';
  }
} 

if (cartData && cartData.length > 0) {
  const cartContainer = document.getElementById('cartContainer');
  let totalPrice = 0;

  let itemId = 0;

  cartData.forEach(function (product) {

    product.itemId = itemId++;

    const cartItemHTML = `
        <div class="cart" data-item-id="${product.itemId}">
              <div class="first_block">
                  <div class="img">
                      <img src="${product.img}" alt="">
                  </div>
                  <div class="align">
                      <div class="text">
                          <div class="title">
                              <h2>${product.name}</h2>
                          </div>
                          <div class="price">
                            <p data-original-price="${product.price}">${product.price}</p>
                        </div>
                      </div>
                      <div class="select">
                          <div class="select">
                                <select name="quantiti" class="quantity">
                                  <option value="1">1</option>
                                  <option value="2">2</option>
                                  <option value="3">3</option>
                                  <option value="4">4</option>
                                  <option value="5">5</option>
                                  <option value="6">6</option>
                                  <option value="7">7</option>
                                  <option value="8">8</option>
                                  <option value="9">9</option>
                                  <option value="10">10</option>
                                </select>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="buttons">
                  <div class="delete">
                      <button>
                          <p>X</p>
                      </button>
                  </div>
              </div>
            </div>
          `;
   


    cartContainer.innerHTML += cartItemHTML;

   
    const productPrice = parseFloat(product.price);
    totalPrice += productPrice;
  });


  const finalPriceElement = document.querySelector('.final_price h2');
  finalPriceElement.innerHTML = totalPrice.toFixed(2) + ' MDL';


  const deleteButtons = document.querySelectorAll('.delete button');
  deleteButtons.forEach(function (button) {
    button.addEventListener('click', function () {

      const cartItem = button.closest('.cart');


      const itemId = parseInt(cartItem.getAttribute('data-item-id'));

      const deletedProductIndex = cartData.findIndex((item) => item.itemId === itemId);

      if (deletedProductIndex > -1) {

        cartItem.remove();

        const deletedProduct = cartData.splice(deletedProductIndex, 1)[0];

        const deletedProductPrice = parseFloat(deletedProduct.price);
        totalPrice -= deletedProductPrice;


        const totalPriceString = totalPrice.toFixed(2) + ' MDL';

        


        localStorage.setItem('cart', JSON.stringify(cartData));


        finalPriceElement.innerHTML = totalPriceString;

        updateTotalPrice();
      }
    });
  });


 
  const selectElements = document.querySelectorAll('.select select');
  selectElements.forEach(function (select) {
    select.addEventListener('change', function () {

      const selectedQuantity = parseInt(select.value);

      const cartItem = select.closest('.cart');


      const priceElement = cartItem.querySelector('.price p');

      const originalPrice = parseFloat(priceElement.getAttribute('data-original-price'));

      if (!isNaN(originalPrice)) {
       
        const updatedPrice = originalPrice * selectedQuantity;

        priceElement.textContent = updatedPrice.toFixed(2) + ' MDL';

        const itemId = parseInt(cartItem.getAttribute('data-item-id'));
        const index = cartData.findIndex((item) => item.itemId === itemId);

        if (index !== -1) {
         
          cartData[index].price = updatedPrice.toFixed(2);

         
          localStorage.setItem('cart', JSON.stringify(cartData));

         
          updateTotalPrice();
        }
        
      }
      
    });
  });
} else {
  
  const errorElement = document.querySelector('.error');
  errorElement.textContent = 'Cosul dumneavoastra este gol';


  const finalizeazaElement = document.getElementById('finalizeaza');
  finalizeazaElement.style.display = 'none';


  const totalPriceElement = document.querySelector('.final_price');
  totalPriceElement.style.display = 'none';
}

function updateTotalPrice() {
  const cartData = JSON.parse(localStorage.getItem('cart'));
  let totalPrice = 0;

  for (const item of cartData) {
    totalPrice += parseFloat(item.price);
    localStorage.setItem('finalPrice', totalPrice.toFixed(2) + ' MDL');

  }

  const finalPriceElement = document.querySelector('.final_price h2');
  finalPriceElement.innerHTML = totalPrice.toFixed(2) + ' lei';

  if (cartData.length === 0) {

    const errorElement = document.querySelector('.error');
    errorElement.textContent = 'Cosul dumneavoastra este gol';

    const finalizeazaElement = document.getElementById('finalizeaza');
    finalizeazaElement.style.display = 'none';


    finalPriceElement.style.display = 'none';
  } else {
    const errorElement = document.querySelector('.error');
    errorElement.textContent = '';

    const finalizeazaElement = document.getElementById('finalizeaza');
    finalizeazaElement.style.display = 'block';

    finalPriceElement.style.display = 'block';
  }
}

const deleteButtons = document.querySelectorAll('.delete button');
deleteButtons.forEach(function (button) {
  button.addEventListener('click', function () {
    const cartItem = button.closest('.cart');

    const itemId = parseInt(cartItem.getAttribute('data-item-id'));

    const deletedProductIndex = cartData.findIndex((item) => item.itemId === itemId);

    if (deletedProductIndex > -1) {
      cartItem.remove();

      const deletedProduct = cartData.splice(deletedProductIndex, 1)[0];

      const deletedProductPrice = parseFloat(deletedProduct.price);
      totalPrice -= deletedProductPrice;

      const totalPriceString = totalPrice.toFixed(2) + ' MDL';

      localStorage.setItem('cart', JSON.stringify(cartData));

      finalPriceElement.innerHTML = totalPriceString;

      updateTotalPrice();
    }
  });
});

const selectElements = document.querySelectorAll('.select select');
selectElements.forEach(function (select) {
  select.addEventListener('change', function () {

    const selectedQuantity = parseInt(select.value);

    const cartItem = select.closest('.cart');

    const priceElement = cartItem.querySelector('.price p');

    const originalPrice = parseFloat(priceElement.getAttribute('data-original-price'));

    if (!isNaN(originalPrice)) {
      
      const updatedPrice = originalPrice * selectedQuantity;


      priceElement.textContent = updatedPrice.toFixed(2) + ' MDL';

      const itemId = parseInt(cartItem.getAttribute('data-item-id'));
      const index = cartData.findIndex((item) => item.itemId === itemId);

      if (index !== -1) {
        cartData[index].price = updatedPrice.toFixed(2);

        localStorage.setItem('cart', JSON.stringify(cartData));

        updateTotalPrice();
      }
    }
  });
});

updateTotalPrice();

const languageSwitch = document.getElementById('lang');

if (window.location.href.includes('/en/')) {
  languageSwitch.checked = true;
}

languageSwitch.addEventListener('change', function() {
  const currentUrl = window.location.href;

  if (this.checked) {
    const newUrl = currentUrl.replace('/ro/', '/en/');
    window.location.href = newUrl;
  } else {
    const newUrl = currentUrl.replace('/en/', '/ro/');
    window.location.href = newUrl;
  }
});