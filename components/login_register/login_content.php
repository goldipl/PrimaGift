<div class="container login-page">
  <div class="d-flex flex-column">
    <div class="login-content">
      <form class="login-content__left">
        <h2>Mam już konto w sklepie</h2>
        <div class="input-slot">
          <label for="email">E-mail lub login *</label>
          <input class="form-input" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email" placeholder="Email lub login" required>
        </div>
        <div class="input-slot">
          <label for="password">Hasło *</label>
          <input class="form-input" type="password" name="password" id="password" placeholder="*************" required>
        </div>
        <a href="" class="password-reminder">Nie pamiętasz hasła?</a>
        <button href="" class="color-btn">Zaloguj się <img src="./assets/icons/contact/white-arrow.svg" width="21" height="10" alt="strzałka">
        </button>
      </form>
      <div class="login-content__right">
        <h2>Kontynuuj bez logowania</h2>
        <p>Jeśli się nie zalogujesz, nie będziesz miał dostępu do historii zamówień oraz rabatów, które dla Ciebie przygotowaliśmy</p>
        <a href="" class="white-btn">Zamów jako gość</a>
        <div class="create-account">
          <p>lub <a href="" class="green">załóż konto</a>
          </p>
        </div>
      </div>
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