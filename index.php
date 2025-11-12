<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HireMe - Finde deinen Traumjob</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Header -->
    <header>
        <div class="logo">HireMe</div>
        <nav>

            <a href="index.php" class="active">Home</a>
            <a href="meine-bewerbungen.php">Meine Bewerbungen</a>
            <a href="login.php">Login</a>
        </nav>
    </header>

    <!-- Titel Section -->
    <section class="titel">
        <h1>Finde deinen Traumjob mit HireMe</h1>
        <p>Durchsuche hunderte Jobangebote oder poste deine eigene Stellenanzeige.</p>
        <a href="login.php" class="btn">Jetzt starten</a>
    </section>

    <!-- Suchfeld -->
    <div class="search-bar">
        <input type="text" placeholder="Jobtitel oder Firma eingeben...">
        <button type="submit">Suchen</button>
    </div>

    <!-- Job Listings -->
    <main>
        <h2>Aktuelle Jobangebote</h2>

        <div class="job-list">
            <div class="job-card">
                <h3>Frontend Developer</h3>
                <p>Unternehmen: WebTech Solutions GmbH</p>
                <p>Ort: Wien</p>
                <p>Beschreibung: Entwicklung und Wartung von Webanwendungen.</p>
                <a href="job-details.php" class="btn-small">Mehr erfahren</a>
            </div>

            <div class="job-card">
                <h3>Software Engineer</h3>
                <p>Unternehmen: Kreativ AG</p>
                <p>Ort: München, Deutschland</p>
                <p>Beschreibung: Planung und Umsetzung von Softwarelösungen.</p>
                <a href="job-details.php" class="btn-small">Mehr erfahren</a>
            </div>

            <div class="job-card">
                <h3>IT Support Spezialist</h3>
                <p>Unternehmen: CodeFactory</p>
                <p>Ort: Hamburg, Deutschland</p>
                <p>Beschreibung: Unterstützung bei IT-Problemen und Systemwartung.</p>
                <a href="job-details.php" class="btn-small">Mehr erfahren</a>
            </div>
        </div>

        <!-- Neuer Job Button -->
        <div class="add-job-btn">
            <a href="job-erstellen.php" title="Neues Jobangebot hinzufügen">+</a>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <p>© 2025 HireMe | Erstellt von Amassi Mohammed & Hmcho Abdalrahmaan</p>
    </footer>

</body>
</html>
