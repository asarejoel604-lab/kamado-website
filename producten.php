<?php
$pageTitle = "Blauwe Kamado's | Kamado Breda";
$pageDescription = "Bekijk de blauwe kamado-barbecue van Kamado Breda.";
require __DIR__ . '/includes/header.php';
?>

<main class="page-content">
    <section class="page-heading">
        <p class="eyebrow">Kamado Breda</p>
        <h1>Blauwe kamado's</h1>
        <p>Onze kamado's zijn gemaakt voor buiten koken, van langzaam garen tot heet grillen.</p>
    </section>

    <section class="product-layout" aria-labelledby="product-title">
        <div class="product-gallery" data-gallery>
            <div class="gallery-stage">
                <div class="gallery-slide" data-gallery-slide data-caption="Blauwe kamado, vooraanzicht">
                    <div class="kamado-art">
                        <div class="kamado-dome"></div>
                        <div class="kamado-grill"></div>
                        <div class="kamado-base"></div>
                        <div class="kamado-stand"></div>
                    </div>
                </div>
                <div class="gallery-slide" data-gallery-slide data-caption="Blauwe kamado, zijaanzicht" hidden>
                    <div class="kamado-art kamado-art-side">
                        <div class="kamado-dome"></div>
                        <div class="kamado-grill"></div>
                        <div class="kamado-base"></div>
                        <div class="kamado-stand"></div>
                    </div>
                </div>
                <div class="gallery-slide" data-gallery-slide data-caption="Detail van de kamado" hidden>
                    <div class="kamado-art kamado-art-detail">
                        <div class="kamado-dome"></div>
                        <div class="kamado-grill"></div>
                        <div class="kamado-base"></div>
                        <div class="kamado-stand"></div>
                    </div>
                </div>
            </div>
            <p class="gallery-caption" data-gallery-caption aria-live="polite"></p>
            <div class="gallery-controls">
                <button type="button" data-gallery-previous>Vorige</button>
                <button type="button" data-gallery-go="0" aria-label="Toon vooraanzicht">1</button>
                <button type="button" data-gallery-go="1" aria-label="Toon zijaanzicht">2</button>
                <button type="button" data-gallery-go="2" aria-label="Toon detail">3</button>
                <button type="button" data-gallery-next>Volgende</button>
            </div>
        </div>

        <div class="product-details">
            <h2 id="product-title">Blauwe kamado</h2>
            <p>Een veelzijdige barbecue voor grillen, roken en langzaam garen. Vraag ons naar de beschikbare maten en accessoires.</p>
            <ul>
                <li>Blauwe keramische kamado</li>
                <li>Geschikt voor verschillende kooktechnieken</li>
                <li>Accessoires op aanvraag</li>
            </ul>
            <a class="button button-dark" href="contactgegevens.php">Vraag naar de kamado</a>
        </div>
    </section>

    <section class="accessory-info">
        <h2>Gietijzeren accessoires</h2>
        <p>Kamado Breda verkoopt ook gietijzeren accessoires. Neem contact op voor het aanbod.</p>
        <a class="button button-dark" href="contactgegevens.php">Vraag naar accessoires</a>
    </section>
</main>

<script src="js/product-gallery.js" defer></script>
<?php require __DIR__ . '/includes/footer.php'; ?>