    <?php
    $pageTitle = 'Kamado Breda | Buiten koken, samen genieten';
    $pageDescription = 'Kamado Breda: blauwe kamado-barbecues, accessoires en BBQ-masterclasses.';
    require __DIR__ . '/includes/header.php';
    ?>

    <main id="home">
        <section class="hero" aria-labelledby="hero-title">
            <div class="hero-copy">
                <p class="eyebrow">Kamado Breda · Specialist in buiten koken</p>
                <h1 id="hero-title">Buiten koken.<br><span>Samen genieten.</span></h1>
                <p class="hero-quote">“De mooiste momenten ontstaan rond het vuur.”</p>
                <a class="button button-light" href="producten.php">Ontdek ons aanbod</a>
                <a class="button button-light" href="masterclass.php">BBQ-masterclass</a>
            </div>
            <div class="hero-art">
                <img src="img/logo.png" alt="Kamado Breda">
            </div>
        </section>

        <section class="home-links page-content" aria-labelledby="home-links-title">
            <h2 id="home-links-title">Ontdek Kamado Breda</h2>
            <div class="link-cards">
                <a class="link-card" href="producten.php">
                    <h3>Kamado's</h3>
                    <p>Bekijk onze blauwe kamado-barbecues.</p>
                </a>
                <a class="link-card" href="masterclass.php">
                    <h3>BBQ-masterclass</h3>
                    <p>Meld je aan en leer koken op een kamado.</p>
                </a>
            </div>
        </section>

        <section class="about" id="over-ons" aria-labelledby="about-title">
            <div class="about-photo">
                <img src="img/Joris.jpeg" alt="Joris bij de Kamado-winkel">
            </div>
            <div class="about-copy">
                <p class="eyebrow">Persoonlijk advies, met passie</p>
                <h2 id="about-title">Goed vuur begint met goed advies.</h2>
                <p>Een kamado is er voor lange avonden, mooie gerechten en goed gezelschap. We helpen je graag op weg met advies over de barbecue en de accessoires die bij jou passen.</p>
                <a class="button button-dark" href="contactgegevens.php">Bekijk contactgegevens</a>
            </div>
        </section>
    </main>
<?php require __DIR__ . '/includes/footer.php'; ?>
