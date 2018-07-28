<!doctype html>
<html lang="fr">
<?php include 'templates/head.php'; ?>
<body>
    <?php include 'templates/fitguide.php'; ?>
    <main class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Example for Product Page</h2>
            </div>
        </div>
        <section class="row" id="product">
            <?php include 'templates/images-product.php'; ?>
            <div class="col-xs-12 col-sm-4">
                <h1>Only Play - Leggings de sport </h1>
                <div class="price">
                    <p class="promo-price">23,99€</p>
                    <p class="current-price">34,99€</p>
                </div>
                <p id="livraison">Livraison et retour gratuits *</p>
                <a href="#" id="link-fitguide">Guide des tailles</a>
            </div>
        </section>
    </main>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="dist/js/script.js"></script>
</body>
</html>
