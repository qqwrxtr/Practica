<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="/Eu/Practica/css/ceckout — копия.css">
    <title>Practica</title>
</head>
<body>
    <div class="result">
        <h3>Spre achitare :</h3>
        <p id="suma">

        </p>
    </div>
    <div class="mainblock">
        <div class="first__col">
            <div class="title">
                <h3>Adresa de facturare</h3>
            </div>
            <div class="name space">
                <label for="name">
                    <div class="label_">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                person
                            </span>
                        </div>
                        <div class="what_need">
                            <p>Numele Prenumele</p>
                        </div>
                    </div>
                </label>
                <input type="text" placeholder="John M. Doe" id="name select" class="input__edit">
            </div>
            <div class="email space">
                <label for="email">
                    <div class="label_">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                        </div>
                        <div class="what_need">
                            <p>Email</p>
                        </div>
                    </div>
                </label>
                <input type="email" placeholder="john@example.com" id="email select" class="input__edit">
            </div>
            <div class="adress space">
                <label for="adress">
                    <div class="label_">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                contact_mail
                            </span>
                        </div>
                        <div class="what_need">
                            <p>Adresa</p>
                        </div>
                    </div>
                </label>
                <input type="text" placeholder="542 W. 15th Street" id="adress select" class="input__edit">
            </div>
            <div class="city space">
                <label for="city">
                    <div class="label_">
                        <div class="icon">
                            <span class="material-symbols-outlined">
                                account_balance
                            </span>
                        </div>
                        <div class="what_need">
                            <p>Oraș</p>
                        </div>
                    </div>
                </label>
                <input type="text" placeholder="New York" id="city select" class="input__edit">
            </div>
            <div class="state_zip space">
                <div class="state">
                    <label for="state">
                        <p>Statul</p>
                    </label>
                    <input type="text" placeholder="Ny" id="state select" class="input__edit">
                </div>
                <div class="zip">
                    <label for="zip">
                        <p>Zip</p>
                    </label>
                    <input type="text" placeholder="10001" id="zip select" class="input__edit">
                </div>
            </div>
        </div>
        <div class="second__col">
            <div class="title">
                <h3>Plată</h3>
            </div>
            <div class="cards space">
                <label for="cards">
                    <p>Carduri Acceptate</p>
                </label>
                <div class="cards__img">
                    <div class="visa ">
                        <img src="/Eu/Practica/img/visa.png" alt="" id="1">
                    </div>
                    <div class="mastercard">
                        <img src="/Eu/Practica/img/mastercard.png" alt="" id="2">
                    </div>
                    <div class="american">
                        <img src="/Eu/Practica/img/american.png" alt="" id="3">
                    </div>
                    <div class="discover">
                        <img src="/Eu/Practica/img/discover.png" alt="" id="4">
                    </div>
                </div>
            </div>
            <div class="card_name space">
                <div class="name on card">
                    <label for="name_on_card">
                        <p>Numele indicat pe card</p>
                    </label>
                    <input type="text" placeholder="John More Doe" id="name_on_card select" class="input__edit">
                </div>
            </div>
            <div class="card_number space">
                <div class="Card_number">
                    <label for="name_on_card">
                        <p>Numărul Cardului</p>
                    </label>
                    <div class="input_type">
                        <div class="doar_input">
                            <input type="text" placeholder="1111-2222-3333-4444" id="card_numb" class="input__edit select" oninput="card()" maxlength="16">
                        </div>
                        <div class="img_input">
                            <p id="card_here"></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="expiration space">
                <div class="car_exp">
                    <label for="card_expiration">
                        <p>Luna Expirarii</p>
                    </label>
                    <input type="month" id="card_exp select" class="input__edit">
                </div>
            </div>
            <div class="expiration_cvv space">
                <div class="car_exp">
                    <label for="card_expiration">
                        <p>Anul Expirarii</p>
                    </label>
                    <input type="date" id="card_exp_date select" class="input__edit">
                </div>
                <div class="cvv">
                    <label for="cvv">
                        <p>CVV</p>
                    </label>
                    <input type="password" min="000" max="999" id="cvv select" placeholder="352">
                </div>
            </div>
        </div>
    </div>
    <div class="checkbox">
        <input type="checkbox" checked><p>Aceeași adresa de livrare </p>
    </div>
    <div class="button">
        <button type="submit" class="submit" id="submit" onclick="checkInputs()" >
            <p>Finalizează</p>
        </button>
        <button class="back">
            <a href="/Eu/Practica/ro/cos.php">
                <p>Întoarcete înapoi</p>
            </a>
        </button>
    </div>

    <script src="/Eu/Practica/js/ceckout.js"></script>
    <script src="/Eu/Practica/js/cos.js"></script>
</body>
</html>