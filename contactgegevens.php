<?php
$pageTitle = 'Contact | Kamado Breda';
$pageDescription = 'Neem contact op met Kamado Breda.';
require __DIR__ . '/includes/header.php';
?>

    <main class="contact-page">
        <form class="contact-form" id="contact-form" action="contactgegevens.php" method="post">
            <label for="contact-subject">Onderwerp</label>
            <input id="contact-subject" name="onderwerp" type="text" required>

            <div class="contact-layout">
                <div class="contact-fields">
                    <h1>Stel een vraag</h1>
                    <label for="contact-name">Naam</label>
                    <input id="contact-name" name="naam" type="text" required>

                    <label for="contact-email">E-mailadres</label>
                    <input id="contact-email" name="email" type="email" required>
                </div>

                <section class="contact-info">
                    <h2>Openingstijden</h2>
                    <p>Vraag naar de actuele openingstijden.</p>
                    <div class="contact-info-links">
                        <div>
                            <h3>Contact</h3>
                            <a href="#contact-form">Stel een vraag</a>
                        </div>
                        <div>
                            <h3>Adres</h3>
                            <p>Kamado Breda</p>
                        </div>
                    </div>
                </section>
            </div>

            <label for="contact-message">Uw vraag</label>
            <textarea id="contact-message" name="bericht" rows="5" required></textarea>
            <button class="button button-dark contact-submit" type="submit">Versturen</button>
        </form>
    </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
