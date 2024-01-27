
// let udaliti = document.getElementById('back')
// udaliti.style.display = 'none'

// function login() {
//   event.preventDefault();

//   const enteredUsername = document.getElementById("usernameInput").value;
//   const enteredPassword = document.getElementById("passwordInput").value;

    
//   const loginInfo = localStorage.getItem("login_info");
//   const parsedLoginInfo = JSON.parse(loginInfo);
  
//   const match = parsedLoginInfo.find(
//     (cred) =>
//       cred.username === enteredUsername && cred.password === enteredPassword
//     );

//   if (match) {
//       window.location.href = "home.html";
//       return;
//   } else {
      
//     document.getElementById("usernameInput").style.border = "1px solid red";
//     document.getElementById("passwordInput").style.border = "1px solid red";
//   }

// }

// function create(){
  
//   udaliti.style.display = 'block'

//   let create = document.createElement('input')
//   create.type = "mail"
//   create.placeholder = "Example@mail.ru"
//   create.id = "createdInput"

//   let append = document.getElementById('form');
//   append.appendChild(create);

//   var login_btn = document.createElement('button');
//   login_btn.textContent = "Submit";
//   login_btn.classList = "btn"
//   login_btn.id = "doggy"
//   login_btn.addEventListener("click" , tolocal)

//   let sters = document.getElementById('create');
//   sters.innerHTML = ""

//   let align = document.getElementById('align')
//   align.appendChild(login_btn)

//   let stergator = document.getElementById('delete');
//   if(stergator){
//     stergator.style.display = "none"
//   }
// }

// function resetCreate() {

//   udaliti.style.display = 'none'

//   let createdInput = document.getElementById("createdInput");
//   if (createdInput) {
//     createdInput.remove();
//   }

//   let log_but = document.getElementById('doggy')
//   if (log_but) {
//     log_but.remove();
//   }

//   let stergator = document.getElementById('delete');
//   if(stergator){
//     stergator.style.display = "block"
//   }


//   let sters = document.getElementById('create');
//   sters.innerHTML = "Create Account";

// }

// document.getElementById("back").addEventListener("click", resetCreate);

// function tolocal() {
//   let username = document.getElementById('usernameInput').value;
//   let password = document.getElementById('passwordInput').value;
//   let mail = document.getElementById('createdInput').value;

  
//   let loginData = {
//     username: username,
//     password: password,
//     mail: mail
//   };

  
//   let existingLoginInfo = localStorage.getItem('login_info');

//   let loginInfoArray = [];

//   if (existingLoginInfo) {
    
//     loginInfoArray = JSON.parse(existingLoginInfo);
//   }

  
//   loginInfoArray.push(loginData);

  
//   localStorage.setItem('login_info', JSON.stringify(loginInfoArray));
// }

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

