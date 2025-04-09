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
                    "item": "https://primagift.pl/index.php"
                }, {
                    "@type": "ListItem",
                    "position": 2,
                    "name": "Oferta",
                    "item": "https://primagift.pl/oferta"
                }, {
                    "@type": "ListItem",
                    "position": 3,
                    "name": "Artykuły biurowe",
                    "item": "https://primagift.pl/oferta/artykuly-biurowe"
                }]
            }
        </script>
    </head>
    <body>
        <header> 
            <?php include "./components/common/nav.php"; ?> 
        </header>
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
                    <?php include "./components/category/category_top_filters.php"; ?>
                    <?php include "./components/category/category_filters_main.php"; ?> 
                    <?php include "./components/common/pagination.php"; ?>
                    <?php include "./components/main_page/our_brands.php"; ?> 
                </div>
            </div>
        </main>
        <footer> 
            <?php include "./components/common/footer.php"; ?> 
        </footer>
        <script src="./js/jquery.min.js"></script>
        <script src="./js/popper.min.js"></script>
        <script src="./js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="./js/bootbox.min.js"></script>
        <script src="./js/select2.min.js"></script>
        <script src="./js/swiper/swiper-bundle.js"></script>
        <script src="./js/swiper/swiper.js"></script>
        <script src="./js/script.js"></script>
    </body>
</html>