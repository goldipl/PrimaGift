<div class="category-top-filters">
    <div class="category-top-filters-upper">
        <div class="category-top-filters__slot">
            <h2>Filtruj produkty:</h2>
        </div>
        <div class="category-top-filters__slot">
            <label for="sort-by-name">Nazwa:</label>
            <input name="sort-by-name" id="sort-by-name" class="form-input" placeholder="Wpisz nazwę lub kod produktu"></input>
        </div>
        <div class="category-top-filters__slot">
            <label for="sort-by-color-dropdown">Kolor:</label>
            <div class="multiselect-dropdown" id="sort-by-color-dropdown">
                <button type="button" class="dropdown-toggle">Wybierz kolory</button>
                <div class="multiselect-checkboxes">
                <label class="checkbox-label">
                    <span>Biały</span>
                    <input type="checkbox" name="sort-by-color" value="Biały">
                </label>
                <label class="checkbox-label">
                    <span>Czarny</span>
                    <input type="checkbox" name="sort-by-color" value="Czarny">
                </label>
                <label class="checkbox-label">
                    <span>Zielony</span>
                    <input type="checkbox" name="sort-by-color" value="Zielony">
                </label>
                <!-- Add more options here -->
                </div>
            </div>
        </div>
        <div class="category-top-filters__slot">
            <label for="sort-by-price-from">Cena od:</label>
            <input name="sort-by-price-from" id="sort-by-price-from" class="form-input"></input>
        </div>
        <div class="category-top-filters__slot">
            <label for="sort-by-price-to">Cena do:</label>
            <input name="sort-by-price-to" id="sort-by-price-to" class="form-input" ></input>
        </div>
        <div class="category-top-filters__slot">
            <button class="set-filters">Zastosuj filtry</button>
        </div>
    </div>
    <div class="category-top-filters-bottom">
        <div class="bottom-filters-left">
            <span class="active-filters-text">Aktywne filtry:</span>
            <div class="active-filters">
                <div class="active-filters__slot">
                    <img src="./assets/icons/common/pink-x.svg" alt="Usuń" width="7" height="7">
                    <span>20 zł</span>
                </div>
                <div class="active-filters__slot">
                    <img src="./assets/icons/common/pink-x.svg" alt="Usuń" width="7" height="7">
                    <span>Przykładowy filtr</span>
                </div>
            </div>
        </div>
        <div class="bottom-filters-right">
            <div class="category-top-filters__slot">
                <label for="sort-by-sth">Sortuj według:</label>
                <select name="sort-by-sth" id="sort-by-sth" class="form-select">
                    <option value="Wybór 1">Wybór 1</option>
                    <option value="Wybór 2">Wybór 2</option>
                </select>
            </div>
            <?php include "./components/common/pagination.php"; ?>
        </div>
    </div>
</div>

<script>
    // Simple JS to toggle the dropdown on click
document.querySelectorAll('.multiselect-dropdown .dropdown-toggle').forEach(btn => {
  btn.addEventListener('click', function(e) {
    const parent = this.closest('.multiselect-dropdown');
    parent.classList.toggle('open');
    // Optional: close when clicking outside
    document.addEventListener('click', function closeDropdown(ev) {
      if (!parent.contains(ev.target)) {
        parent.classList.remove('open');
        document.removeEventListener('click', closeDropdown);
      }
    });
  });
});
    </script>