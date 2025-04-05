<div class="container register-page">
  <div class="d-flex flex-column">
    <div class="register-content">
      <h1>Załóż konto</h1>
      <div class="radio-checkboxes-box">
        <label class="custom-radio-container normal">Konto zwykłe <input type="radio" name="account" class="custom_input" checked>
          <span class="custom-radio-checkmark"></span>
        </label>
        <label class="custom-radio-container company">Konto firma <input type="radio" name="account" class="custom_input">
          <span class="custom-radio-checkmark"></span>
        </label>
      </div>
      <form class="register-form-wrapper normal-account-form">
        <div class="register-form">
          <div class="register-form-left">
            <div class="input-slot">
              <label for="name">Imię *</label>
              <input class="form-input" type="text" name="name" id="name" placeholder="np. Krzysztof" required>
            </div>
            <div class="input-slot">
              <label for="surname">Nazwisko *</label>
              <input class="form-input" type="text" name="surname" id="surname" placeholder="np. Nowak" required>
            </div>
            <div class="input-slot">
              <label for="email">E-mail lub login *</label>
              <input class="form-input" type="email" name="email" id="email" placeholder="Email lub login" required>
            </div>
            <div class="input-slot">
              <label for="password">Hasło *</label>
              <input class="form-input" type="password" name="password" id="password" placeholder="Wpisz tutaj swoje hasło" required>
            </div>
          </div>
          <div class="register-form-right">
            <div class="inputs-row">
              <div class="input-slot">
                <label for="street">Ulica *</label>
                <input class="form-input" type="text" name="street" id="street" placeholder="np. Warszawska" required>
              </div>
              <div class="input-slot">
                <label for="home-number">Nr domu *</label>
                <input class="form-input" type="text" name="home-number" id="home-number" placeholder="np. 320" required>
              </div>
              <div class="input-slot">
                <label for="apartment-number">Nr lokalu</label>
                <input class="form-input" type="text" name="apartment-number" id="apartment-number" placeholder="np. 15">
              </div>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="zip-code">Kod pocztowy *</label>
                <input class="form-input" type="text" name="zip-code" id="zip-code" placeholder="00-030" required>
              </div>
              <div class="input-slot">
                <label for="city">Miejscowość *</label>
                <input class="form-input" type="text" name="city" id="city" placeholder="np. Warszawa" required>
              </div>
            </div>
            <div class="input-slot">
              <label for="select-country">Wybierz kraj</label>
              <select class="form-select" name="select-country" id="select-country">
                <option value="Polska">Polska</option>
                <option value="Niemcy">Niemcy</option>
              </select>
            </div>
            <div class="input-slot">
              <label for="telephone">Telefon</label>
              <input class="form-input" type="text" name="telephone" id="telephone" placeholder="np. 555 555 555">
            </div>
          </div>
        </div>
        <div class="register-checkboxes">
          <label class="custom-checkbox-container full-check-checkbox">
            <div class="register-checkbox"></div>Zaznacz wszystko <input type="checkbox" class="custom_input">
            <span class="custom-checkbox-checkmark"></span>
          </label>
          <div class="inner-register-checkboxes first-inner-checkbox">
            <label class="custom-checkbox-container">
              <div class="register-checkbox"></div>Zapoznałem się i akceptuję Regulamin oraz Politykę Prywatności <input type="checkbox" class="custom_input">
              <span class="custom-checkbox-checkmark"></span>
            </label>
            <label class="custom-checkbox-container second-inner-checkbox">
              <div class="register-checkbox"></div>Zapisuję się do newslettera, ponieważ chcę otrzymywać na podany adres e-mail informację o limitowanych okazjach, najlepszych promocjach i kody rabatowe <input type="checkbox" class="custom_input">
              <span class="custom-checkbox-checkmark"></span>
            </label>
          </div>
        </div>
        <button href="" class="color-btn create-acc-btn">Utwórz konto <img src="./assets/icons/contact/white-arrow.svg" width="21" height="10" alt="strzałka">
        </button>
      </form>
      <form class="register-form-wrapper company-account-form">
        <div class="register-form">
          <div class="register-form-left">
            <div class="input-slot">
              <label for="name">NIP *</label>
              <input class="form-input" type="text" name="nip" id="nip" placeholder="np. 022-41-11-111" required>
            </div>
            <div class="input-slot">
              <label for="company-name">Firma *</label>
              <input class="form-input" type="text" name="company-name" id="company-name" placeholder="np. P.W. Nazwa" required>
            </div>
            <div class="input-slot">
              <label for="email-company">E-mail lub login *</label>
              <input class="form-input" type="email" name="email-company" id="email-company" placeholder="Email lub login" required>
            </div>
            <div class="input-slot">
              <label for="password-company">Hasło *</label>
              <input class="form-input" type="password" name="password-company" id="password-company" placeholder="Wpisz tutaj swoje hasło" required>
            </div>
          </div>
          <div class="register-form-right">
            <div class="inputs-row">
              <div class="input-slot">
                <label for="street-company">Ulica *</label>
                <input class="form-input" type="text" name="street-company" id="street-company" placeholder="np. Warszawska" required>
              </div>
              <div class="input-slot">
                <label for="home-number-company">Nr domu *</label>
                <input class="form-input" type="text" name="home-number-company" id="home-number-company" placeholder="np. 320" required>
              </div>
              <div class="input-slot">
                <label for="apartment-number-company">Nr lokalu</label>
                <input class="form-input" type="text" name="apartment-number-company" id="apartment-number-company" placeholder="np. 15">
              </div>
            </div>
            <div class="inputs-row">
              <div class="input-slot">
                <label for="zip-code-company">Kod pocztowy *</label>
                <input class="form-input" type="text" name="zip-code-company" id="zip-code-company" placeholder="00-030" required>
              </div>
              <div class="input-slot">
                <label for="city-company">Miejscowość *</label>
                <input class="form-input" type="text" name="city-company" id="city-company" placeholder="np. Warszawa" required>
              </div>
            </div>
            <div class="input-slot">
              <label for="select-country-company">Wybierz kraj</label>
              <select class="form-select" name="select-country-company" id="select-country-company">
                <option value="Polska">Polska</option>
                <option value="Niemcy">Niemcy</option>
              </select>
            </div>
            <div class="input-slot">
              <label for="telephone-company">Telefon</label>
              <input class="form-input" type="text" name="telephone-company" id="telephone-company" placeholder="np. 555 555 555">
            </div>
          </div>
        </div>
        <div class="register-checkboxes">
          <label class="custom-checkbox-container full-check-checkbox">
            <div class="register-checkbox"></div>Zaznacz wszystko <input type="checkbox" class="custom_input">
            <span class="custom-checkbox-checkmark"></span>
          </label>
          <div class="inner-register-checkboxes first-inner-checkbox">
            <label class="custom-checkbox-container">
              <div class="register-checkbox"></div>Zapoznałem się i akceptuję Regulamin oraz Politykę Prywatności <input type="checkbox" class="custom_input">
              <span class="custom-checkbox-checkmark"></span>
            </label>
            <label class="custom-checkbox-container second-inner-checkbox">
              <div class="register-checkbox"></div>Zapisuję się do newslettera, ponieważ chcę otrzymywać na podany adres e-mail informację o limitowanych okazjach, najlepszych promocjach i kody rabatowe <input type="checkbox" class="custom_input">
              <span class="custom-checkbox-checkmark"></span>
            </label>
          </div>
        </div>
        <button href="" class="color-btn create-acc-btn">Utwórz konto <img src="./assets/icons/contact/white-arrow.svg" width="21" height="10" alt="strzałka">
        </button>
      </form>
    </div>
    <div class="bottom-cart-box-with-btn">
      <div class="bottom-cart-buttons">
        <a href="#" class="white-btn prev">
          <img src="./assets/icons/cart/back-left-black-chevron.svg" alt="arrow icon" width="10" height="10">
          <span>Wróć</span>
        </a>
      </div>
    </div>
  </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const normalRadio = document.querySelector(".custom-radio-container.normal input");
    const companyRadio = document.querySelector(".custom-radio-container.company input");
    const normalForm = document.querySelector(".register-form-wrapper.normal-account-form");
    const companyForm = document.querySelector(".register-form-wrapper.company-account-form");
    const fullCheck = document.querySelector(".full-check-checkbox .custom_input");
    const firstInnerCheck = document.querySelector(".first-inner-checkbox .custom_input");
    const secondInnerCheck = document.querySelector(".second-inner-checkbox .custom_input");
    if (fullCheck && firstInnerCheck && secondInnerCheck) {
      fullCheck.addEventListener("change", function() {
        const isChecked = fullCheck.checked;
        firstInnerCheck.checked = isChecked;
        secondInnerCheck.checked = isChecked;
      });
    }

    function toggleForms() {
      if (normalRadio.checked) {
        normalForm.style.display = "block";
        companyForm.style.display = "none";
      } else if (companyRadio.checked) {
        normalForm.style.display = "none";
        companyForm.style.display = "block";
      }
    }
    normalRadio.addEventListener("change", toggleForms);
    companyRadio.addEventListener("change", toggleForms);

    toggleForms();
  });
</script>