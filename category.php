<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PRIMA GIFT - Kategoria</title>
        <link rel="shortcut icon" href="./assets/icons/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="./css/bootstrap.min.css" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/select2.min.css" />
        <link rel="stylesheet" href="./scss/main.css">
        <!-- Breadcrumb schema -->
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "BreadcrumbList",
                "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "Strona główna",
                    "item": "https://www.PRIMAGIFT.pl/index.php"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Oferta",
                    "item": "https://www.PRIMAGIFT.pl/oferta"
                }, {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Artykuły biurowe",
                    "item": "https://www.PRIMAGIFT.pl/oferta/artykuly-biurowe"
                }]
            }
        </script>
    </head>
    <body>
        <header> <?php include "./components/common/nav.php"; ?> </header>
        <main id="main-wrapper">
            <div class="breadcrumbs container">
                <ul>
                    <li class="breadcrumb-item">
                        <a href="./index.php">Strona główna</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="#">Oferta</a>
                    </li>
                    <li class="breadcrumb-item">
                        <span>Artykuły biurowe</span>
                    </li>
                </ul>
            </div>
            <div class="category-wrapper">
                <div class="container">
                    <div class="container category-title">
                        <h1>Artykuły biurowe</h1>
                    </div> <?php include "./components/category/category_top_filters.php"; ?> <div class="container category-seo-text">
                        <p> W naszej ofercie nie mogło zabraknąć ciekawych propozycji przeznaczonych dla dzieci. Gadżety reklamowe to świetne narzędzie do nawiązywania relacji z dzieckiem oraz ich rodzicami. Tego typu akcesoria przydadzą się nie tylko w kampaniach związanych z branżą dziecięcą. Gadżety reklamowe dla dzieci są także świetnym uzupełnieniem swoich akcji promocyjnych kierowanych na grupę docelową, która posiada dzieci. Gadżety reklamowe dla dzieci z możliwością umieszczenia loga, nadruku to także dobra propozycja dla przedszkoli, żłobków, klubów malucha, szkół.  </p>
                    </div> <?php include "./components/category/category_filters_main.php"; ?> <?php include "./components/common/pagination.php"; ?>
                </div>
            </div>
        </main>
        <footer> <?php include "./components/common/footer.php"; ?> </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/script.js"></script>
        <script src="./js/category/show_menu.js"></script>
        <script src="./js/category/price_checkbox.js"></script>
    </body>
</html>