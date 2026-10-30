<?php
$pageTitle = 'BBQ-masterclass | Kamado Breda';
$pageDescription = 'Meld je aan voor een BBQ-masterclass voor beginnende pitmasters.';

$errors = [];
$name = '';
$email = '';
$participants = '';
$submitted = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['naam']) && is_string($_POST['naam']) ? trim($_POST['naam']) : '';
    $email = isset($_POST['email']) && is_string($_POST['email']) ? trim($_POST['email']) : '';
    $participants = isset($_POST['aantal']) && is_string($_POST['aantal']) ? trim($_POST['aantal']) : '';
    $participantCount = filter_var($participants, FILTER_VALIDATE_INT);

    if ($name === '') {
        $errors[] = 'Vul je naam in.';
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = 'Vul een geldig e-mailadres in.';
    }

    if ($participantCount === false || $participantCount < 1) {
        $errors[] = 'Vul minimaal 1 deelnemer in.';
    }

    $submitted = count($errors) === 0;
}

$escape = static function (string $value): string {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
};

require __DIR__ . '/includes/header.php';
?>

<main class="page-content">
    <section class="page-heading">
        <p class="eyebrow">Voor beginnende pitmasters</p>
        <h1>BBQ-masterclass</h1>
        <p>Leer de basis van koken op een kamado. De datum spreken we samen af.</p>
    </section>

    <?php if ($submitted): ?>
        <section class="form-message" aria-live="polite">
            <h2>Bedankt, <?= $escape($name) ?>.</h2>
            <p>Je aanmelding voor <?= (int) $participantCount ?> <?= (int) $participantCount === 1 ? 'deelnemer' : 'deelnemers' ?> is ontvangen. We nemen contact met je op over de datum.</p>
            <a class="button button-dark" href="index.php">Terug naar de homepage</a>
        </section>
    <?php else: ?>
        <?php if ($errors): ?>
            <div class="form-errors" role="alert">
                <p>Controleer het formulier:</p>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?= $escape($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form class="basic-form" action="masterclass.php" method="post">
            <label for="naam">Naam</label>
            <input id="naam" name="naam" type="text" autocomplete="name" value="<?= $escape($name) ?>" required>

            <label for="email">E-mailadres</label>
            <input id="email" name="email" type="email" autocomplete="email" value="<?= $escape($email) ?>" required>

            <label for="aantal">Aantal deelnemers</label>
            <input id="aantal" name="aantal" type="number" min="1" value="<?= $escape($participants) ?>" required>

            <button class="button button-dark" type="submit">Aanmelden</button>
        </form>
    <?php endif; ?>
</main>

<?php require __DIR__ . '/includes/footer.php'; ?>
