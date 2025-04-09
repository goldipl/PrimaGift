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
            <label for="sort-by-color">Kolor:</label>
            <select name="sort-by-color" id="sort-by-color" class="form-select">
                <option value="Biały">Biały</option>
                <option value="Czarny">Czarny</option>
            </select>
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