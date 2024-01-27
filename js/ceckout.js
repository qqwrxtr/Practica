

function card(){
    const card_num = document.getElementById('card_numb').value;
    const firstDigit = card_num.slice(0, 1);
    console.log(firstDigit)
    let card_insert = document.getElementById('card_here');

    let visa_img = document.createElement('img');
        visa_img.classList.add('img_input');
        visa_img.src = "/img/visa.png";

    let master_img= document.createElement('img');
        master_img.classList.add('img_input');
        master_img.src = "/img/mastercard.png";

    let america_img= document.createElement('img');
        america_img.classList.add('img_input');
        america_img.src = "/img/american.png";

    let discover_img= document.createElement('img');
        discover_img.classList.add('img_input');
        discover_img.src = "/img/discover.png";

    if (firstDigit == 4) {
        card_insert.appendChild(visa_img);
    }else{card_insert.innerHTML = ""}

    if (firstDigit == 5) {
        card_insert.appendChild(master_img);
    }

    if (firstDigit == 3) {
        card_insert.appendChild(america_img);
    }

    if (firstDigit == 6) {
        card_insert.appendChild(discover_img);
    }
    
}

function checkInputs() {
    const inputs = document.querySelectorAll('input[type="text"], input[type="month"], input[type="number"], input[type="password"],input[type="date"] ');
    let isEmpty = false;
    inputs.forEach(input => {
      if (input.value.trim() === '') {
        isEmpty = true;
        input.style.borderColor = 'red';
      } else {
        input.style.borderColor = '';
      }
    });
    
    const inputs2 = document.querySelectorAll('#select');
    const values = [];

    inputs.forEach(input => {
        values.push(input.value);
    });

    console.log(values);

    
}



  document.addEventListener('DOMContentLoaded', function() {
    const sumElement = document.getElementById('suma');
    const finalPrice = localStorage.getItem('finalPrice');
    sumElement.innerHTML = finalPrice;
    
  });

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